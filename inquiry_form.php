<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $description = $_POST['description'];

    $errors = [];

    // Validate form fields
    if (empty($name)) {
        $errors[] = 'Name of client is required.';
    }
    if (empty($email)) {
        $errors[] = 'Email is required.';
    }
    if (empty($phone)) {
        $errors[] = 'Phone number is required.';
    }
    if (empty($address)) {
        $errors[] = 'Address is required.';
    }
    if (empty($description)) {
        $errors[] = 'Description is required.';
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<script>
                    Swal.fire({
                        title: 'Incomplete Form',
                        html: '" . implode('<br>', array_map('htmlspecialchars', $errors)) . "',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    });
                </script>";
        }
    } else { 
        // Insert into database
        $stmt = $db->prepare("INSERT INTO inquiry_table (`client_name`, `client_email`, `client_phone`, `client_address`, `client_inquiry`)
         VALUES (?, ?, ?, ?, ?)");

        if (!$stmt) {
            echo "<script>
                    Swal.fire({
                        title: 'Database Error',
                        text: 'There was an error preparing your submission. Please try again later.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                </script>";
        } else {
            $stmt->bind_param("sssss", $name, $email, $phone, $address, $description); 

            if ($stmt->execute()) {

                // **✅ Send Email Using PHPMailer After Database Insertion**
                $mail = new PHPMailer(true);

                try {
                    // SMTP Debugging (Set to 0 in production)
                    $mail->SMTPDebug = 0; // Change to 3 for detailed error messages
                    $mail->Debugoutput = 'html';

                    // SMTP Configuration
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'ychickolegaspi@gmail.com';
                    $mail->Password = 'eglp hxmv npfn usfn';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port = 465;

                    // Sender & Recipient
                    $mail->setFrom('ychickolegaspi@gmail.com', 'Ychicko Frian Legaspi');
                    $mail->addAddress($email, $name);

                    // Email Content **(Client Notification)**
                    $mail->isHTML(true);
                    $mail->Subject = 'Inquiry Received';
                    $mail->Body    = 
                    "
                    <h3>Dear $name,</h3>
                    <p>Thank you for reaching out to <strong>JFL Construction</strong>!
                    We have received your inquiry and appreciate your interest in our services.</p>

                    <p>Our team is currently reviewing your request, and we will get back to you as
                    soon as possible with the details you need. If you have any additional questions
                    or specific requirements, please feel free to reply to this email.</p>

                    <h4>What Happens Next?</h4>
                        <ul>
                            <li>📌 Our team will assess your inquiry and provide you with relevant information.</li>
                            <li>📌 If needed, we may schedule a consultation to better understand your project.</li>
                        </ul>
            
                    <p>We look forward to assisting you with your construction needs.
                    Thank you for considering <strong>JFL Construction</strong>
                    —we take pride in delivering quality workmanship and reliable service.</p>
                    
                    <p>Best regards,</p>
                    <p><strong>Julius Frian Legaspi</strong><br>
                    JFL Construction<br>
                    📞 0916 341 6017 <br>
                    📧 JFLConstruction.24@gmail.com <br>
                    🏗️ <em>Building with Excellence</em></p>
                    
                    <p>&copy; 2022 JFL Construction. All Rights Reserved.</p>
                    ";

                    $mail->send();

                    // Admin Notification
                    $mail->clearAddresses();
                    $mail->addAddress('ychickolegaspi@gmail.com', 'Ychicko Frian Legapi');
                    $mail->Subject = 'New Inquiry Received - JFL Construction';
                    $mail->Body = "
                    <h3>New Inquiry Received</h3>
                    <p>You have received a new inquiry from <strong>$name</strong>.</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Phone:</strong> $phone</p>
                    <p><strong>Address:</strong> $address</p>
                    <p><strong>Message:</strong></p>
                    <blockquote>$description</blockquote>

                    <p>📌 Please review this inquiry and respond accordingly.</p>

                    <p>Best regards,</p>
                    <p><strong>JFL Construction Inquiry System</strong></p>
                    ";

                    $mail->send(); // Send second email
                    
                    echo "<script>
                            Swal.fire({
                                title: 'Success!',
                                text: 'Your inquiry has been submitted successfully.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                window.location.href = 'inquiry.php';
                            });
                        </script>";
                } catch (Exception $e) {
                    echo "<script>
                            Swal.fire({
                                title: 'Message Sent, but...',
                                text: 'We received your inquiry, but we were unable to send a confirmation email. We’ll be in touch shortly.',
                                icon: 'warning',
                                confirmButtonText: 'OK'
                            });
                        </script>";
                }
            } else {
                echo "<script>
                        Swal.fire({
                            title: 'Something went wrong!',
                            text: 'We couldn’t submit your inquiry at the moment. Please try again later or contact us directly.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    </script>";
            }

            $stmt->close();
        }
    }
}
?>

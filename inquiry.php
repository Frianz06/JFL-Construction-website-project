<?php include 'include/headers/header_inquiry.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font_awesome.min.css">
    <link rel="stylesheet" href="css/inquiry_design.css">
</head>
<body>

<div class="main-container">
    <div class="container">
        <div class="inquiry-section">
            <div class="inquiry-form col-md-6">
                <h3 class="mb-4">Send us your thoughts, inquiries, or project ideas — we’re listening.</h3>

                <?php include 'inquiry_form.php'; ?>

                <form method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="address" placeholder="Project Address" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="description" rows="4" placeholder="Inquiry Details" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-orange" id="submitBtn">Send Message</button>
                </form>
            </div>

            <div class="contact-info col-md-6">
                <h5>Contact information</h5>
                <p>We'd love to hear from you — questions, ideas, or anything you'd like to discuss.</p>

                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>Address:</strong><br>
                        Pallas Athena Classique Anabu II - D Imus, Cavite.
                    </div>
                </div>

                <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <div><strong>Phone:</strong> (0916) 341 6017</div>
                </div>

                <div class="info-item">
                    <i class="fas fa-paper-plane"></i>
                    <div><strong>Email:</strong> JFLConstruction.24@gmail.com</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/inquiry_form.js"></script>
</body>
</html>
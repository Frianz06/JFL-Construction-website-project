<?php include 'include/headers/header.php'?>

<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index_design.css">
</head>
<body>

<!-- Welcome Modal -->
<div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning text-dark">
        <h5 class="modal-title fw-bold" id="welcomeModalLabel">
          <i class="bi bi-tools"></i> Welcome to JFL Construction!
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <p class="fs-5">Building Excellence, One Project at a Time.</p>
        <p>Thank you for visiting our website! We specialize in high-quality construction and renovation services. Let’s build something great together.</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Explore Our Services</button>
      </div>
    </div>
  </div>
</div>

    
<!-- Logo & Company name -->
<div class="container mt-4"> 

    <div class="d-flex flex-column align-items-center text-center">
        <img src="../images/JFL_construction.png" alt="JFL Construction Logo" class="img-fluid" style="max-width: 150px;">
        <h1 class="mt-2">JFL CONSTRUCTION</h1>
        <p class="lead">Quality. Value. Integrity. Build with the Best.</p>
    </div>

</div>

<!-- Mission & Vision -->
<div class="container-fluid mt-4">
    <div class="row align-items-center text-center">
        
        <div class="col-md-6 text-center bg-warning text-black rounded p-4 mb-3">
        <h2>Mission</h2>
        <div class="container">
        <p class="text-center fw-medium">
        At JFL Construction, we deliver exceptional construction solutions with quality, innovation,
        and integrity. Our mission is to exceed client expectations through sustainable, efficient,
        and cost-effective practices. Every project we complete strengthens communities and paves
        the way for a better future for generations to come.</p>
        </div>
        </div>


        <div class="col-md-6 text-center bg-dark text-white rounded p-4 mb-3">
            <h2>Vision</h2>
            <div class="container">
                <p class="text-center fw-medium">
                Our vision is to be the most trusted and innovative construction company, delivering projects 
                that stand the test of time. We are committed to excellence, sustainability, and client satisfaction, 
                ensuring that every structure we build contributes to a stronger, safer, and more progressive community.
                </p>
            </div>
        </div>

    </div>
</div>

<div class="container text-center my-5">
    <!-- Title -->
    <h2 class="fw-bold">NOTABLE <span class="text-warning">DEVELOPMENTS</span></h2>

    <!-- Project Grid -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3">
        
        <!-- Avida Homes Trece Martires Project -->
        <div class="col">
            <div class="project-card position-relative">
                <img src="images/villagio/1.jpg" class="img-fluid rounded project-img" alt="Villagio Ignatius Home Renovation">
                <div class="overlay">
                    <h5 class="fw-bold">Villagio Ignatius Home Renovation</h5>
                    <p>Full house remodel | Exterior & Interior</p>
                </div>
            </div>
        </div>

        <!-- Dental Clinic Trece Martires Project -->
        <div class="col">
            <div class="project-card position-relative">
                <img src="images/dental/1.jpg" class="img-fluid rounded project-img" alt="Mini Grocery & Dental Clinic">
                <div class="overlay">
                    <h5 class="fw-bold">Dental Clinic</h5>
                    <p>Interior renovation & branding</p>
                </div>
            </div>
        </div>

        <!-- Santuario Divino Mausoleum Project -->
        <div class="col">
            <div class="project-card position-relative">
                <img src="images/santuario/1.jpg" class="img-fluid rounded project-img" alt="Santuario Divino Memorial">
                <div class="overlay">
                    <h5 class="fw-bold">Santuario Divino Memorial</h5>
                    <p>Modern facade & structural work</p>
                </div>
            </div>
        </div>

        <!-- Manolo's Barbershop Project -->
        <div class="col">
            <div class="project-card position-relative">
                <img src="images/manolo/1.jpg" class="img-fluid rounded project-img" alt="Barbershop Renovation">
                <div class="overlay">
                    <h5 class="fw-bold">Barbershop Interior Renovation</h5>
                    <p>Industrial theme redesign</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Call to Action -->
    <div class="mt-4">
        <a href="projects.php" class="btn btn-warning fw-bold px-4 py-2">View More Projects</a>
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var welcomeModal = new bootstrap.Modal(document.getElementById('welcomeModal'));
    welcomeModal.show();
  });
</script>

</body>
</html>
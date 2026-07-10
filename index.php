<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .hero { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80'); background-size: cover; background-position: center; color: white; padding: 100px 0; }
        .property-card { transition: transform 0.3s; margin-bottom: 30px; }
        .property-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .badge-commercial { background-color: #0d6efd; }
        .badge-residential { background-color: #198754; }
        footer { background-color: #343a40; color: white; padding: 30px 0; margin-top: 50px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Obakeng Matjeke | Cyn Mac Properties</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="properties.php">Properties</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Find Your Perfect Property</h1>
            <p class="lead">Commercial & Residential Sales – No Rentals</p>
            <p>Licensed Real Estate Practitioner at Cyn Mac Properties (Since 2025)</p>
            <a href="properties.php" class="btn btn-primary btn-lg mt-3">View Listings</a>
        </div>
    </div>

    <div class="container my-5" id="about">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>About Obakeng Matjeke</h2>
                <p>Obakeng is a dedicated real estate practitioner at Cyn Mac Properties, specializing in <strong>commercial and residential property sales</strong>. Since 2025, he has helped numerous clients find their ideal investment or dream home with integrity and market expertise.</p>
                <p>We do not offer rentals – only focused, high-quality sales transactions.</p>
                <p><i class="fas fa-phone-alt"></i> <?php echo SITE_PHONE; ?><br>
                <i class="fas fa-envelope"></i> <?php echo SITE_EMAIL; ?></p>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80" class="img-fluid rounded shadow" alt="Real estate agent">
            </div>
        </div>
    </div>

    <div class="container my-5" id="contact">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center">Contact Obakeng</h3>
                        <form action="contact.php" method="POST">
                            <div class="mb-3">
                                <label>Name *</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Email *</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Message *</label>
                                <textarea name="message" rows="4" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container text-center">
            <p>&copy; <?php echo date('Y'); ?> Obakeng Matjeke – Cyn Mac Properties. All rights reserved.</p>
            <p><strong>Commercial & Residential Sales Only</strong> | Phone: <?php echo SITE_PHONE; ?> | Email: <?php echo SITE_EMAIL; ?></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
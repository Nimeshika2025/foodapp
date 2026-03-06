<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero-section {
            background: linear-gradient(135deg, #FFD150, #faa374, #fa8140);
            color: white;
            padding: 100px 20px;
            text-align: center;
        }

        .about-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .about-card:hover {
            transform: translateY(-10px);
        }

         .mission-card {
        background: #fff5f2;
        border-left: 6px solid #E63946;
    }

    .mission-card h3 {
        color: #E63946;
    }

    .vision-card {
        background: #f1fff4;
        border-left: 6px solid #2A9D8F;
    }

    .vision-card h3 {
        color: #2A9D8F;
    }

        .btn-custom {
            background: #CE7E5A;
            color: white;
            border-radius: 30px;
            padding: 10px 25px;
        }

        .btn-custom:hover {
            background: #520dc2;
            color: white;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold">Food</h1>
        <p class="lead mt-3">Testy foods</p>
    </div>
</section>

<!-- About Content -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-6">
    <div class="card about-card mission-card p-4">
        <h3 class="mb-3">Our Mission</h3>
        <p><?= $mission ?></p>
    </div>
</div>

<div class="col-md-6">
    <div class="card about-card vision-card p-4">
        <h3 class="mb-3">Our Vision</h3>
        <p><?= $vision ?></p>
    </div>
</div>

        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-custom">Back to Home</a>
        </div>
    </div>
</section>

</body>
</html>
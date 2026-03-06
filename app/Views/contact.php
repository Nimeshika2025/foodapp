<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-vnYI7bZZ6Xk68VJ6ZmVlqKfFxf7XVZ0w6ddO7tjOQY1grU3B+0zRL1ZbZod8r+E3K8Xr2IQqC2F2Xv3zB9ab2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body { 
            background: #f9f9f9; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .contact-hero {
            background: linear-gradient(135deg, #FFD150, #faa374);
            color: white;
            padding: 60px 20px;
            text-align: center;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .contact-section {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: center;
        }

        .contact-form, .contact-info {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.08);
            transition: 0.3s;
            flex: 1 1 280px;
        }

        .contact-form:hover, .contact-info:hover { transform: translateY(-4px); }

        .form-control:focus { 
            box-shadow: 0 0 8px rgba(250,129,64,0.3); 
            border-color: #fa8140; 
        }

        .btn-submit {
            background: #fa8140;
            color: white;
            border-radius: 25px;
            padding: 8px 22px;
            font-weight: 500;
        }
        .btn-submit:hover { background: #e66a24; }

        .contact-info h5 { margin-bottom: 12px; font-weight: 600; color: #fa8140; }
        .contact-info p { margin-bottom: 8px; font-size: 0.95rem; color: #555; }

        .social-icons a {
            text-decoration: none;
            font-size: 1.2rem;
            margin-right: 12px;
            color: #fa8140;
            transition: 0.3s;
        }
        .social-icons a:hover { color: #e66a24; }

        @media (max-width: 768px){
            .contact-section { flex-direction: column; }
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- Hero Section -->
    <div class="contact-hero">
        <h1 class="display-5 fw-bold">Contact Us</h1>
        <p class="lead">Have questions? Send us a message or reach out via phone/email!</p>
    </div>

    <!-- Contact Section -->
    <div class="contact-section">

        <!-- Contact Form -->
        <div class="contact-form">
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label fw-semibold">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Write your message..." required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-submit">Send Message</button>
                </div>
            </form>
        </div>

        <!-- Contact Info -->
        <div class="contact-info">
            <h5>Contact Info</h5>
            <p>📞 <strong>Phone:</strong> +94 76 628 6342</p>
            <p>✉️ <strong>Email:</strong> info@fooddashboard.com</p>
            <p>📍 <strong>Address:</strong> 123 Food Street, Colombo, Sri Lanka</p>

            <h5>Follow Us</h5>
            <div class="social-icons">
                <a href="#" target="_blank"> Twitter</a>
                <a href="#" target="_blank">Facebook</a>
                <a href="#" target="_blank"> Instagram</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>
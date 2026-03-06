<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f4f6f9; }
        .hero {
            background: linear-gradient(135deg, #FFD150, #faa374);
            color: white;
            text-align: center;
            padding: 80px 20px;
            border-radius: 15px;
        }
        .food-card {
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .food-card:hover { transform: translateY(-5px); }
        .btn-order {
            background: #fa8140;
            color: white;
            border-radius: 30px;
        }
        .btn-order:hover { background: #e66a24; color: white; }
        .recent-orders .badge {
            font-size: 0.9rem;
        }
        .food-card img {
    border-radius: 10px;
    transition: transform 0.3s;
}

.food-card img:hover {
    transform: scale(1.05);
}
    </style>
</head>
<body>

<div class="container py-5">

    <!-- Hero Welcome -->
    <div class="hero mb-5">
        <h1>Welcome, <?= $customerName ?>! 👋</h1>
        <p>Check out our recommended foods and your recent orders below.</p>
    </div>

  <h3>Recommended Foods</h3>

<div class="row g-4 mb-5">

<?php foreach($foods as $food): ?>

<div class="col-md-3">
<div class="card food-card p-3 text-center">

<img src="<?= base_url('public/images/' . basename($food['image'])) ?>" 
     class="card-img-top rounded"
     style="height:150px; object-fit:cover;">

<h5 class="mt-3"><?= $food['title'] ?></h5>

<p class="text-muted" style="font-size:0.9rem;">
<?= $food['description'] ?>
</p>

<p class="fw-bold">
<?= $food['price'] ?> LKR
</p>

<a href="#" class="btn btn-order btn-sm">Order Now</a>

</div>
</div>

<?php endforeach; ?>

</div>

    <!-- Recent Orders -->
    <h3>Recent Orders</h3>
    <div class="card p-3 recent-orders">
        <table class="table table-borderless mb-0">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Food</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($recentOrders as $order): ?>
                    <tr>
                        <td><?= $order['id'] ?></td>
                        <td><?= $order['food'] ?></td>
                        <td>
                            <?php if($order['status'] == 'Delivered'): ?>
                                <span class="badge bg-success"><?= $order['status'] ?></span>
                            <?php elseif($order['status'] == 'Pending'): ?>
                                <span class="badge bg-warning text-dark"><?= $order['status'] ?></span>
                            <?php else: ?>
                                <span class="badge bg-danger"><?= $order['status'] ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    
</div>

</body>
</html>
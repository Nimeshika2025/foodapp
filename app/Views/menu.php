<!DOCTYPE html>
<html>
<head>
<title>Add Food</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h2>Add Food Item</h2>

<!-- Success message -->
<?php if(isset($success)): ?>
<div class="alert alert-success">
    <?= $success ?>
</div>
<?php endif; ?>

<!-- Form -->
<form action="<?= base_url('public/menu') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Price</label>
        <input type="number" name="price" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- Optional: Display saved foods -->
<?php if(!empty($foods)): ?>
<h3 class="mt-5">Saved Foods</h3>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($foods as $food): ?>
        <tr>
            <td><?= $food['id'] ?></td>
            <td><?= $food['title'] ?></td>
            <td><?= $food['description'] ?></td>
            <td><?= $food['price'] ?></td>
            <td>
                <?php if($food['image']): ?>
                    <img src="<?= base_url('images/'.$food['image']) ?>" width="80">
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>

</div>
</body>
</html>
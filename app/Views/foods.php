<!DOCTYPE html>
<html>
<head>
<title>Foods List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<h2>Foods List</h2>

<table class="table table-bordered mt-3">

<thead>
<tr>
<th>ID</th>
<th>Title</th>
<th>Description</th>
<th>Price</th>
<th>Image</th>
<th>Action</th>
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
  <figure class="text-center">
    <img 
    src="<?= base_url('public/images/' . preg_replace('#^images/#', '', $food['image'])) ?>" 
    class="img-thumbnail" 
    width="60" 
    height="60" 
    style="object-fit: cover;" 
    alt="<?= $food['title'] ?>">
</td>

<td>

<a href="<?= base_url('public/foods/edit/'.$food['id']) ?>" class="btn btn-warning btn-sm">
Update
</a>

<a href="<?= base_url('public/foods/delete/'.$food['id']) ?>" 
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this food?')">
Delete
</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</body>
</html>
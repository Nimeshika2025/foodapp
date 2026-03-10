<!DOCTYPE html>
<html>
<head>
<title>Edit Food</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<h2>Edit Food</h2>


<?php if(isset($validation)): ?>
<div class="alert alert-danger">
    <?= $validation->listErrors() ?>
</div>
<?php endif; ?>

<form action="<?= base_url('public/foods/update/'.$food['id']) ?>" method="post" enctype="multipart/form-data">

<?= csrf_field() ?>

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="<?= $food['title'] ?>">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control"><?= $food['description'] ?></textarea>
</div>

<div class="mb-3">
    <label>Price</label>
    <input type="number" name="price" class="form-control" value="<?= $food['price'] ?>">
</div>

<div class="mb-3">
    <label>Current Image</label><br>
     <img src="<?= base_url('public/images/' . preg_replace('#^images/#', '', $food['image'])) ?>"  width="100" class="img-thumbnail mb-2">
</div>

<div class="mb-3">
    <label>Change Image</label>
    <input type="file" name="image" class="form-control">
</div>

<button class="btn btn-primary">Update</button>

</form>

</div>

</body>
</html>
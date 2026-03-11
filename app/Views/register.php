<!DOCTYPE html>
<html>
<head>
<title>Admin Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
height:100vh;
display:flex;
align-items:center;
justify-content:center;
font-family:'Segoe UI', sans-serif;
background:
linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)),
url("https://images.unsplash.com/photo-1498654896293-37aacf113fd9");
background-size:cover;
background-position:center;
}

/* glass card */

.register-card{
width:450px;
padding:40px;
border-radius:20px;
background:rgba(255,255,255,0.12);
backdrop-filter:blur(12px);
border:1px solid rgba(255,255,255,0.3);
box-shadow:0 15px 40px rgba(0,0,0,0.4);
color:white;
}

/* title */

.register-title{
text-align:center;
font-weight:700;
margin-bottom:30px;
}

/* input */

.form-group{
position:relative;
margin-bottom:25px;
}

.form-control{
background:transparent;
border:none;
border-bottom:2px solid rgba(255,255,255,0.6);
border-radius:0;
color:white;
padding-left:35px;
}

.form-control:focus{
background:transparent;
box-shadow:none;
border-color:#FFD150;
color:white;
}

.form-group label{
position:absolute;
left:35px;
top:10px;
font-size:14px;
color:#ddd;
transition:0.3s;
}

.form-control:focus + label,
.form-control:not(:placeholder-shown) + label{
top:-10px;
font-size:12px;
color:#FFD150;
}

/* icons */

.input-icon{
position:absolute;
left:5px;
top:10px;
color:#ddd;
}

/* button */

.btn-register{
width:100%;
padding:10px;
border:none;
border-radius:10px;
background:linear-gradient(135deg,#FFD150,#ff7a18);
font-weight:600;
color:#000;
transition:0.3s;
}

.btn-register:hover{
transform:translateY(-2px);
box-shadow:0 10px 25px rgba(0,0,0,0.4);
}

/* show password */

.toggle-password{
position:absolute;
right:10px;
top:10px;
cursor:pointer;
color:#ddd;
}

.login-link{
text-align:center;
margin-top:15px;
}

.login-link a{
color:#FFD150;
text-decoration:none;
}

</style>

</head>

<body>

<div class="register-card">

<h3 class="register-title">🍔 Admin Register</h3>


<?php if(session()->getFlashdata('success')): ?>
<div class="alert alert-success text-center">
<?= session()->getFlashdata('success') ?>
</div>
<?php endif; ?>

<form action="<?= base_url('public/register/save') ?>" method="post">

<div class="form-group">
<i class="fa fa-user input-icon"></i>
<input type="text" name="name" class="form-control" placeholder=" " required>
<label>Full Name</label>
</div>

<div class="form-group">
<i class="fa fa-envelope input-icon"></i>
<input type="email" name="email" class="form-control" placeholder=" " required>
<label>Email</label>
</div>

<div class="form-group">
<i class="fa fa-lock input-icon"></i>
<input type="password" name="password" id="password" class="form-control" placeholder=" " required>
<label>Password</label>

<i class="fa fa-eye toggle-password" onclick="togglePassword()"></i>
</div>

<button class="btn-register">Register</button>

<div class="login-link">
Already have an account? <a href="<?= base_url('public/login') ?>">Login</a>
</div>

</form>

</div>

<script>

function togglePassword(){

let pass=document.getElementById("password");

if(pass.type==="password"){
pass.type="text";
}else{
pass.type="password";
}

}

</script>

</body>
</html>
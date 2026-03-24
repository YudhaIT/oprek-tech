<?php
session_start();

if(isset($_POST['login'])){

$user = $_POST['username'];
$pass = $_POST['password'];

if($user == "oprekboss" && $pass == "Oprek23.230907"){

$_SESSION['admin'] = true;

header("Location: admin23");
exit();

}else{
$error = "Username atau password salah!";
}

}
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Admin - OprekTech</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>

*{
box-sizing:border-box;
margin:0;
padding:0;
font-family:'Poppins',sans-serif;
}

body{

height:100vh;

display:flex;
justify-content:center;
align-items:center;

background:#050505;

background-image:
radial-gradient(circle at 20% 30%,rgba(0,150,255,0.2),transparent),
radial-gradient(circle at 80% 70%,rgba(255,0,120,0.2),transparent);

color:white;

}

/* CARD LOGIN */

.box{

background:rgba(255,255,255,0.05);
backdrop-filter:blur(20px);

padding:25px;

border-radius:16px;

width:100%;
max-width:320px;

box-shadow:0 20px 60px rgba(0,0,0,0.7);

animation:fadeUp .5s ease;

}

@keyframes fadeUp{
from{
opacity:0;
transform:translateY(20px);
}
to{
opacity:1;
transform:translateY(0);
}
}

h2{
text-align:center;
margin-bottom:15px;
}

/* LOGO */

.logo{
width:60px;
border-radius:50%;
margin:0 auto 10px;
display:block;
box-shadow:0 0 20px rgba(0,150,255,0.4);
}

/* INPUT */

input{

width:100%;

padding:12px;

margin-top:10px;

border:none;

border-radius:10px;

background:#1a1a1a;

color:white;

outline:none;

transition:0.2s;

}

input:focus{
box-shadow:0 0 0 2px #ff0055;
}

/* BUTTON */

button{

width:100%;

padding:12px;

margin-top:15px;

background:linear-gradient(135deg,#ff0055,#ff2f7a);

border:none;

color:white;

border-radius:10px;

font-weight:600;

cursor:pointer;

transition:0.2s;

}

button:hover{
transform:translateY(-2px);
box-shadow:0 10px 25px rgba(255,0,85,0.4);
}

/* ERROR */

.error{
color:#ff4d4d;
font-size:13px;
margin-top:10px;
text-align:center;
}

</style>

</head>

<body>

<div class="box">

<img src="1768141321473.jpg" class="logo">

<h2>Login Admin</h2>

<?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>

<form method="post">

<input name="username" placeholder="Username..." required>

<input type="password" name="password" placeholder="Password..." required>

<button name="login">Login</button>

</form>

</div>

</body>
</html>
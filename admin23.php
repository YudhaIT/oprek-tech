<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
header("Location: login");
exit();
}

/* update running text */

if(isset($_POST['update_text'])){

$text = mysqli_real_escape_string($conn,$_POST['text']);

mysqli_query($conn,"
UPDATE settings SET running_text='$text' WHERE id=1
");

header("Location: admin23.php");
exit();

}

if(isset($_POST['save'])){

$id = $_POST['id'];

$judul = mysqli_real_escape_string($conn,$_POST['judul']);
$url   = mysqli_real_escape_string($conn,$_POST['url']);
$ikon  = mysqli_real_escape_string($conn,$_POST['ikon']);

$highlight = isset($_POST['highlight']) ? 1 : 0;

if($id){

mysqli_query($conn,"
UPDATE links
SET judul='$judul',
url='$url',
ikon='$ikon',
is_highlighted='$highlight'
WHERE id=$id
");

}else{

mysqli_query($conn,"
INSERT INTO links (judul,url,ikon,is_highlighted)
VALUES('$judul','$url','$ikon','$highlight')
");

}

header("Location: admin23.php");
exit();

}

/* tambah link */

if(isset($_POST['judul'])){

$judul = mysqli_real_escape_string($conn,$_POST['judul']);
$url   = mysqli_real_escape_string($conn,$_POST['url']);
$ikon  = mysqli_real_escape_string($conn,$_POST['ikon']);

$highlight = isset($_POST['highlight']) ? 1 : 0;

mysqli_query($conn,"
INSERT INTO links (judul,url,ikon,is_highlighted)
VALUES('$judul','$url','$ikon','$highlight')
");

header("Location: admin23.php");
exit();

}

/* delete */

if(isset($_GET['delete'])){

$id = intval($_GET['delete']);

mysqli_query($conn,"DELETE FROM links WHERE id=$id");

header("Location: admin23.php");
exit();

}

if(isset($_GET['edit'])){

$id = intval($_GET['edit']);

$data = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT * FROM links WHERE id=$id")
);

}

$links = mysqli_query($conn,"SELECT * FROM links ORDER BY id DESC");

$set = mysqli_query($conn,"SELECT * FROM settings WHERE id=1");
$s = mysqli_fetch_assoc($set);

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>

*{
box-sizing:border-box;
    }
    
body{
font-family:Poppins;
background:#050505;

background-image:
radial-gradient(circle at 20% 30%,rgba(0,150,255,0.15),transparent),
radial-gradient(circle at 80% 70%,rgba(255,0,120,0.15),transparent);

display:flex;
justify-content:center;
padding:20px;
color:white;
}

.card{
background:rgba(255,255,255,0.05);
backdrop-filter:blur(15px);

padding:20px;
border-radius:16px;

width:100%;
max-width:420px;

box-shadow:0 20px 60px rgba(0,0,0,0.6);
    }

input,select,textarea{

width:100%;
padding:10px;

border-radius:6px;
border:1px solid #ccc;

margin-top:10px;
margin-bottom:10px;

}

button{
background:linear-gradient(135deg,#ff0055,#ff2f7a);
color:white;
padding:10px;
border:none;
border-radius:8px;
cursor:pointer;
font-weight:600;
    }

.stat{
background:rgba(255,255,255,0.05);
padding:12px;
border-radius:10px;
margin-top:10px;
display:flex;
justify-content:space-between;
    }

.delete{

color:red;
text-decoration:none;

}

.fa-github{
color:#ffffff;
    }
    
.wrapper{
width:100%;
max-width:420px;
}

.title{
text-align:center;
margin-bottom:15px;
    }

</style>

</head>

<body>
    
<div class="wrapper">

<h2 class="title">⚙️ Admin OprekTech</h2>

<div class="card">
    
<a href="logout.php" style="
background:linear-gradient(135deg,#ff0055,#ff2f7a);
color:white;
padding:8px 14px;
border-radius:10px;
text-decoration:none;
font-size:13px;
box-shadow:0 5px 15px rgba(0,0,0,0.3);
">
🚪 Logout
    </a>

<h2>Settings</h2>

<form method="post">

Running Text Promo

<textarea name="text"><?= $s['running_text'] ?></textarea>

<button name="update_text">
Update Running Text
</button>

</form>

<hr>

<h3>Tambah / Edit Link</h3>

<form method="post">

<input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>">

<input name="judul" placeholder="Judul Link"
value="<?= $data['judul'] ?? '' ?>">

<input name="url" placeholder="URL (kosongkan untuk soon)"
value="<?= $data['url'] ?? '' ?>">

<select name="ikon">

<option value="fa-brands fa-instagram">Instagram</option>
<option value="fa-brands fa-whatsapp">WhatsApp</option>
<option value="fa-brands fa-tiktok">TikTok</option>
<option value="fa-brands fa-youtube">YouTube</option>
<option value="fa-brands fa-telegram">Telegram</option>
<option value="fa-solid fa-envelope">Email</option>
<option value="fa-solid fa-globe">Website</option>
<option value="fa-solid fa-cart-shopping">Shop</option>
<option value="fa-solid fa-link">Link</option>
<option value="fa-solid fa-fire">Hot</option>
<option value="fa-solid fa-download">Download</option>
<option value="fa-solid fa-gamepad">Game</option>
<option value="fa-brands fa-github">GitHub</option>
<option value="fa-solid fa-mug-hot">Trakteer</option>

</select>

<label>
<input type="checkbox" name="highlight"
<?= isset($data['is_highlighted']) && $data['is_highlighted']==1 ? 'checked' : '' ?>>
Aktifkan Highlight
</label>

<button name="save">Simpan Link</button>

    </form>

<hr>

<h3>Statistik Klik & Kelola</h3>

<?php
while($row = mysqli_fetch_assoc($links)){
?>

<div class="stat">

<div>

<b><?= $row['judul'] ?></b>
<br>
Klik: <?= $row['clicks'] ?>

</div>

    <div>

<a href="?edit=<?= $row['id'] ?>">Edit</a>

<br>

<a class="delete" href="?delete=<?= $row['id'] ?>">
Hapus
</a>

    </div>

</div>

<?php } ?>

</div>

</body>
</html>
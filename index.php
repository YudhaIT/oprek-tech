<?php
include "db.php";

$set = mysqli_query($conn,"SELECT running_text FROM settings WHERE id=1");
$s = mysqli_fetch_assoc($set);

$links = mysqli_query($conn,"SELECT * FROM links
ORDER BY (url='') ASC, id DESC");
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>OprekTech</title>

<link rel="icon" href="1768141321473.jpg">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="icon" type="image/jpeg" href="1768141321473.jpg">

<style>

*{
box-sizing:border-box;
margin:0;
padding:0;
}

body{
font-family:'Poppins',sans-serif;
color:white;
text-align:center;

background:#050505;

background-image:
radial-gradient(circle at 20% 30%,rgba(0,150,255,0.15),transparent),
radial-gradient(circle at 80% 70%,rgba(255,0,120,0.15),transparent);

display:flex;
flex-direction:column;
align-items:center;
min-height:100vh;
}

.main{
width:90%;
max-width:420px;
}

.announcement{
background:linear-gradient(90deg,#ff0055,#ff2f7a);
padding:10px;
overflow:hidden;
font-weight:600;
width:100%;
}

.track{
white-space:nowrap;
display:inline-block;
animation:scroll 12s linear infinite;
}

@keyframes scroll{
0%{transform:translateX(100%)}
100%{transform:translateX(-100%)}
}

.profile{
margin-top:40px;
}

.profile img{
width:120px;
border-radius:50%;
box-shadow:0 0 40px rgba(0,150,255,0.4);
}

.handle{
font-size:28px;
font-weight:600;
margin-top:10px;
}

.bio{
color:#aaa;
margin-bottom:20px;
}

.wa{
background:linear-gradient(135deg,#25D366,#1ebe5b);
border:none;
padding:10px 20px;
border-radius:30px;
color:white;
font-weight:600;
cursor:pointer;
}

.link-container{
margin-top:30px;
}

.link-card{
display:flex;
align-items:center;
padding:18px;

background:rgba(255,255,255,0.05);
border:1px solid rgba(255,255,255,0.1);

border-radius:16px;
margin-bottom:14px;

text-decoration:none;
color:white;

transition:0.25s;
}
    
.link-card:active{
transform:scale(0.97);
    }

.link-card:hover{
transform:translateY(-4px);
box-shadow:0 0 15px rgba(255,0,85,0.5);
}

.link-card i{
margin-right:12px;
font-size:20px;
width:30px;
display:flex;
justify-content:center;
}

.soon{
margin-left:auto;
font-size:12px;
background:#333;
padding:5px 10px;
border-radius:20px;
}

.footer{
margin-top:40px;
color:#666;
font-size:12px;
}

/* CHATBOT */

#chatToggle{

position:fixed;
bottom:20px;
right:20px;

width:60px;
height:60px;

background:#ff0055;

border-radius:50%;

display:flex;
align-items:center;
justify-content:center;

font-size:24px;
cursor:pointer;

box-shadow:0 10px 30px rgba(0,0,0,0.5);

z-index:9999;

}

#chatBox{
position:fixed;
bottom:90px;
right:20px;

width:300px;
max-width:90%;

background:#111;

border-radius:16px;

display:none;
flex-direction:column;

box-shadow:0 20px 60px rgba(0,0,0,0.6);

overflow:hidden;

z-index:9999;

max-height:420px;
    }

.chat-header{
background:#ff0055;
padding:12px;
display:flex;
justify-content:space-between;
align-items:center;
font-weight:600;
}

.chat-body{
padding:12px;
max-height:260px;
overflow-y:auto;
display:flex;
flex-direction:column;
gap:8px;
flex:1;
    }

.msg-user{
align-self:flex-end;
background:#ff0055;
padding:8px 12px;
border-radius:12px 12px 0 12px;
max-width:80%;
}

.msg-bot{
align-self:flex-start;
background:#222;
padding:8px 12px;
border-radius:12px 12px 12px 0;
max-width:80%;
}

.chat-input{
display:flex;
border-top:1px solid #333;
background:#111;
    }

.chat-input input{
flex:1;
padding:10px;
border:none;
background:#222;
color:white;
outline:none;
}

.chat-input button{
background:#ff0055;
border:none;
color:white;
padding:10px 14px;
cursor:pointer;
}

.highlight{
box-shadow:0 0 20px rgba(255,255,255,0.8);
border:2px solid #fff;
    }
    
.msg-bot,.msg-user{
animation:fadeUp .2s ease;
}

@keyframes fadeUp{
from{
opacity:0;
transform:translateY(10px);
}
to{
opacity:1;
transform:translateY(0);
}
    }
    
.quick-buttons{
display:flex;
flex-direction:column;
gap:8px;
margin-top:5px;
}

.quick-buttons button{

background:#222;
border:none;

color:white;

padding:8px 10px;

border-radius:8px;

cursor:pointer;

text-align:left;

font-size:13px;

transition:0.2s;

}

.quick-buttons button:hover{
background:#ff0055;
    }

#chatBox{
transition:0.25s;
    }

</style>
</head>

<body>

<div class="announcement">
<div class="track">
<?= $s['running_text'] ?>
</div>
</div>

<div class="main">

<div class="profile">

<img src="1768141321473.jpg">

<div class="handle">OprekTech</div>

<div class="bio">
Edukasi IT, Website, Apps, IoT 💻
<br>
Jangan Lupa Support dan Follow Sosmed Gw !!!
</div>

</div>

<div class="link-container">

<?php
while($row = mysqli_fetch_assoc($links)){

$class="link-card";
if($row['is_highlighted']==1){
$class.=" highlight";
}

$is_soon = $row['url']=="";

$href = $is_soon ? "#" : "go.php?id=".$row['id'];
?>

<a class="<?= $class ?>" href="<?= $href ?>">

<i class="<?= $row['ikon'] ?>"></i>

<span><?= $row['judul'] ?></span>

<?php if($is_soon){ ?>
<span class="soon">SOON</span>
<?php } ?>

</a>

<?php } ?>

</div>

<div class="footer">
MADE WITH OPREKTECH
</div>

</div>

<!-- CHAT BUTTON -->

<div id="chatToggle">💬</div>

<!-- CHAT BOX -->

<div id="chatBox">

<div class="chat-header">
Let's Talk
<span id="waStatus">🟢 Online</span>
<span onclick="toggleChat()" style="cursor:pointer;">✕</span>
</div>

<div class="chat-body" id="chatBody">

<div class="msg-bot">
Halo 👋, Saya OprekTech

Silakan pilih pertanyaan di bawah atau ketik pesan Anda.
</div>

<div class="msg-bot quick-buttons">

<button onclick="sendTemplate('Halo, saya ingin tanya jasa pembuatan website')">
💻 Tanya Jasa Website
</button>

<button onclick="sendTemplate('Halo, saya ingin tanya kolaborasi dengan OprekTech')">
🤝 Tanya Kolaborasi
</button>

<button onclick="sendTemplate('Halo, saya ingin tahu produk atau layanan OprekTech')">
📦 Tanya Produk
</button>

</div>

</div>

<div class="chat-input">

<input id="chatInput" placeholder="Tanya sesuatu...">

<button onclick="sendChat()">Kirim</button>

</div>

    </div>
</div>

<script>

function copyWA(){
navigator.clipboard.writeText("+62-8950-2128-237");
alert("Nomor berhasil disalin");
}

document.getElementById("chatToggle").onclick=toggleChat;

function toggleChat(){

let box=document.getElementById("chatBox");

box.style.display =
box.style.display=="flex"?"none":"flex";

}

function sendChat(){

let input=document.getElementById("chatInput");
let body=document.getElementById("chatBody");

let msg=input.value.trim();

if(msg==="") return;

body.innerHTML+=`<div class="msg-user">${msg}</div>`;

input.value="";

body.innerHTML+=`<div class="msg-bot" id="typing">OprekBot sedang mengetik...</div>`;

body.scrollTop=body.scrollHeight;

setTimeout(()=>{

document.getElementById("typing").remove();

body.innerHTML+=`
<div class="msg-bot">
Oke bentar ya 👀 kita lanjut di WhatsApp biar lebih jelas
</div>
`;

let encoded=encodeURIComponent(msg);

setTimeout(()=>{
window.open("https://wa.me/6289502128237?text="+encoded,"_blank");
},500);

},1000);

}
    
function sendTemplate(text){

let body=document.getElementById("chatBody");

body.innerHTML+=`<div class="msg-user">${text}</div>`;

body.innerHTML+=`
<div class="msg-bot">
Terima kasih! Kami akan melanjutkan percakapan di WhatsApp.
</div>
`;

let encoded=encodeURIComponent(text);

setTimeout(()=>{

window.open(
"https://wa.me/6289502128237?text="+encoded,
"_blank"
);

},600);

}
    
const statusElement = document.getElementById("waStatus");

function updateStatus(){

let hour = new Date().getHours();

if(hour >= 8 && hour < 22){

statusElement.innerHTML = "🟢 Online";

}else{

statusElement.innerHTML = "🔴 Offline";

}

}

updateStatus();
    
</script>

</body>
</html>
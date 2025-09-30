<?php

include 'config.php';

$settingsor = $db->prepare("SELECT * FROM setting where id='1'");
$settingsor->execute();

$setting = $settingsor->fetch(PDO::FETCH_ASSOC);

$listsor = $db->prepare("SELECT * FROM lists where id=:id");
$listsor->execute(array('id' => $g['id']));

$list = $listsor->fetch(PDO::FETCH_ASSOC);


?>
<html><head>
 <meta charset="UTF-8">
 <title>Doğum Gününüz Kutlu Olsun - Birlikte Nice Yıllara...</title>
   <!-- Bu Sayfa Fikir ve Sanat Eserleri Kanunu Görsel, yazılımsal ve fikirsel olarak tescillenmiştir. Sinorsel Yazılım San. Tic. Ltd. Şti.  -->
 <style>
 html body {
    background:url(background4.jpg) no-repeat;
    font-family: 'Open Sans', cursive;

 }
 .belge-arka
 {
   background:url(arka.jpg) no-repeat;
   display:block;
   width:820px;
   height:490px;
   padding:0px;
   padding-bottom:0px;

   text-align:center;
   font-family: 'Open Sans', cursive;
}
.belge-arka h1
{
   font-size:54px;
   color:#162F5E;
   padding:10px;
   margin:0;
   font-family: 'Great Vibes', cursive;
}
.belge-arka h2
{
   font-size:25px;
   color:#af7b53;
   padding:10px;
   margin:0;
   font-family: 'Great Vibes', cursive;
}
.belge-ic
{
   margin:25px;
}
.belge-arka p
{
   font-size:22px;
   margin:0px;
}
.belge-arka .isim
{
   font-size:22px;
   font-weight:bold;
}
.belge-arka .imza img
{
   width:20%;
}
.belge-arka .logolar
{
   margin-top:15px
}

.belge-arka .logolar i
{
   font-size:18px;
   margin-left:10px;
}
.belge-arka .logolar span
{
   margin-left:10px;
   margin-right:10px;
}
.belge-arka .logolar span, .belge-arka .logolar a
{
   font-size:18px;
   color:#000;
   text-decoration:none;
}
.button 
{
 background-color: #008CBA; /* Green */
 border: none;
 color: white;
 padding: 15px 32px;
 text-align: center;
 text-decoration: none;
 display: inline-block;
 font-size: 16px;
}
.kutu {width:100px;height:100px;padding:5px;background:#000;color:#fff;}
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<script>

</script>
<body>

   <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.15/plugins/export/libs/FileSaver.js/FileSaver.min.js"></script>

   <script>
      const download = () => {
         html2canvas(document.querySelector('#capture')).then(canvas => {
            canvas.toBlob(function(blob) {
              saveAs(blob, "aliozkaya.jpg");
           });
         });
      }
   </script>


   <center>
      <button class="button" onclick="download()">
         FOTOĞRAF OLARAK KAYDET
      </button>

      <div id="capture" class="belge-arka">
         <div class="belge-ic">
           <br><br><h2>Sevgili Kardeşim</h2>
           <h1><?php echo strip_tags(htmlspecialchars($list['name'])) ?> <?php echo strip_tags(htmlspecialchars($list['surname'])) ?></h1><br>
           <p>Doğum gününü en kalbi duygularımla tebrik eder, birlikte nice mutlu ve sağlıklı yıllara erişmeyi niyaz ederim.<p>
         <br>      <br>
            <div class="imza"><img src="imza.png"/></div>
            <span class="isim">Av. Ali ÖZKAYA</span>
			<br>AK Parti Afyonkarahisar Milletvekili <br>
            <br>
            <div class="logolar"><i class="fab fa-facebook"></i><i class="fab fa-twitter"></i><i class="fab fa-instagram"></i><i class="fab fa-youtube"></i><i class="fab fa-telegram"></i><span> @avaliozkaya |</span><a href="#">aliozkaya.com.tr</a></div>
         </div>
      </div>

   </body>

   <button class="button" onclick="download()" style="margin-top:15px;">
      <h1>FOTOĞRAF OLARAK CİHAZINIZA KAYDETMEK İÇİN TIKLAYIN </h1>
   </button></center>

   <center>  Sosyal Medyada Takip Edin;
 <h2> <div class="logolar"><a target="_blank" href="http://facebook.com/AvAliOzkaya"><i class="fab fa-facebook"></i></a><a target="_blank" href="http://twitter.com/AvAliOzkaya"><i class="fab fa-twitter"></i></a><a target="_blank" href="http://instagram.com/AvAliOzkaya"><i class="fab fa-instagram"></i></a><a target="_blank" href="http://youtube.com/AvAliOzkaya"><i class="fab fa-youtube"></i></a><a target="_blank" href="http://t.me/AvAliOzkaya"><i class="fab fa-telegram"></i></a><span>
   </h2> <pre style="background-color: white; border: 2px dashed rgb(235, 243, 251); overflow: auto; padding: 5px; text-align: justify; width: 450px;"><a target="_blank" href="http://msj.ist/guncelle"> Sms Sistemi Bilgi Güncelleme Ekranı İçin Lütfen Tıklayınız.</a> </pre>
<h4>düzenleme ve tasarım : <a target="_blank" href="http://sinorsel.com.tr">sinorsel yazılım</a></h4>
</center>
   

   </html>


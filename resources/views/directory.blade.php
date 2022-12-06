<br><br>
@extends('templates.app')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body {
-moz-transform: scale(0.9, 0.9); /* Moz-browsers */
zoom: 0.9; /* Other non-webkit browsers */
zoom: 90%; /* Webkit browsers */
}
</style>
</head>
<body>

<h2>Palmet Rehber</h2>

<div class="container">
  <div class="row">
    <div class="col"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."></div>
    <div class="col"><button class="btn btn-primary" id="btn1">Yazdır</button></div>
  </div>

<button class="btn btn-primary" id="btn2" onclick="window.print()">Yazdır_</button>
  

<div id="printarea" class="yazdir">

<table style='width:100%; margin-left:20px; margin-top:30px; table-layout: fixed;' class='table table-bordered' >
<div class="container">

<table class="table table-dark table-hover" id='myTable'>
<thead align="center">
<tr>
<th style='width:35px;' scope='col'>
<th class="text-center" style='width:200px;' scope='col'>Ad-Soyad</th>
<th class="text-center" style='width:100px;'scope='col'>E-Mail</th>
<th class="text-center" style='width:80px;'scope='col'>Dahili No</th>
<th class="text-center" style='width:160px;'scope='col'>GSM No</th>
<th class="text-center" style='width:100px;'scope='col'>Departman</th>
<th class="text-center" style='width:100px;'scope='col'>Pozisyon</th>
<th class="text-center" style='width:100px;'scope='col'>Şirket</th>
</tr>
</thead>
<?php $a=1; foreach ($data as $key) {?>
<tbody>
<tr style='line-height: 20px;'>
<th scope='row'><?php echo $a ?></th>
<td><?php echo $key->fullname ?></td>
<td><?php echo $key->email ?></td>
<td><?php echo $key->intercom ?></td>
<td><?php echo $key->gsm ?></td>
<td><?php echo $key->department ?></td>
<td><?php echo $key->position ?></td>
<td><?php echo $key->company ?></td>
<?php $a++; } ?>
</tbody>

</table>
</div>
</div>
</div>


<script>
    
        const btn1=document.querySelector("#btn1");
        const btn2=document.querySelector("#btn2");
    
        function yazdir(alanID)
        {
            //yazdırılacak nesneyi seçme
            let yazilacakAlan = document.querySelector(alanID);
 
            //yeni pencere aç, yazdırma alanını ekle
            //yazdır ve pencereyi kapat
            pencere=window.open();
            pencere.document.body.innerHTML=yazilacakAlan.innerHTML; 
            pencere.print();
            pencere.close();
        }
        
        //buton tıklama olayları
        btn1.onclick=function(){
           yazdir("#printarea");
        }
        
    </script>


</body>
</html>

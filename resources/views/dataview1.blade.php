<br><br>
@extends('templates.app')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-left: 100px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>
<body>

<h2>Palmet Rehber</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Aradığınız kişi..." title="Type in a name">

<div class="container">
<div class="row align-items-start">


  <ul id="myUL">
    <?php $a=1; foreach ($data as $key) {?>
            <div class="row">

    <li><div class='col'><a href="#"><?php echo $key->name ?></a></div><div class='col'><a href="#"><?php echo $key->email ?></a></div><div class='col'><a href="#"><?php echo $key->phone ?></a></div></li>
            </div>
    <?php $a++; } ?>
</ul>

</div>
</div>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>







<div class="container">
  <div class="row">
    <div class="col md-1"><input class="search" name="searchtext" placeholder="Aranacak kişi..."</input></div>
  </div>
</div>

<!-- <table style='width:100%; margin-left:20px; margin-top:30px; table-layout: fixed;' class='table table-bordered' > -->
<div class="container">

<table class='table table-bordered'>
<thead align='center'>
<tr>
<th style='width:35px;' scope='col'>
<th style='width:200px;'scope='col'>Ad-Soyad</th>
<th style='width:120px;'scope='col'>E-Mail</th>
<th style='width:80px;'scope='col'>Dahili No</th>
<th style='width:130px;'scope='col'>GSM No</th>
<th style='width:100px;'scope='col'>Departman</th>
<th style='width:180px;'scope='col'>Pozisyon</th>
</tr>
</thead>
<?php $a=1; foreach ($data as $key) {?>
<tbody>
<tr style='line-height: 20px;'>
<th scope='row'><?php echo $a ?></th>
<td><?php echo $key->name ?></td>
<td><?php echo $key->email ?></td>
<td><?php echo $key->phone ?></td>
<td><?php echo $key->gsm ?></td>
<td><?php echo $key->department ?></td>
<td><?php echo $key->position ?></td>
<?php $a++; } ?>
</tbody>

</table>
</div>

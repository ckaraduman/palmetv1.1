<br><br>
@extends('templates.app')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h2>Palmet DataLines</h2>

<div class="container">
  <div class="row">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
  </div>


<!-- <table style='width:100%; margin-left:20px; margin-top:30px; table-layout: fixed;' class='table table-bordered' > -->
<div class="container">

<table class='table table-bordered' id='myTable'>
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
</div>

<script>

</script>

</body>
</html>

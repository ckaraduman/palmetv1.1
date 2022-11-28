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

<table class='fs-6 table table-bordered' id='myTable'>
<thead align='center'>
<tr>
<th class="text-center"style='width:35px;'scope='col'></th>
<th class="text-center" style='width:100px;'scope='col'>Şirket</th>
<th class="text-center"style='width:100px;'scope='col'>Hizmet</th>
<th class="text-center"style='width:130px;'scope='col'>Hizmet No1</th>
<th class="text-center"style='width:100px;'scope='col'>Bant Genişliği</th>
<th class="text-center"style='width:380px;'scope='col'>Lokasyon</th>
<th class="text-center"style='width:80px;'scope='col'>Durum</th>
</tr>
</thead>
<?php $a=1; foreach ($datalines as $key) {?>
<tbody>
<tr style='line-height: 20px;'>
<th scope='row'><?php echo $a ?></th>
<td><?php echo $key->company ?></td>
<td><?php echo $key->service ?></td>
<td><?php echo $key->service_number1 ?></td>
<td><?php echo $key->bandwidth ?></td>
<td><?php echo $key->location ?></td>
<td><?php echo $key->status ?></td>
<?php $a++; } ?>
</tbody>
</table>
</div>
</div>

<script>

</script>

</body>
</html>

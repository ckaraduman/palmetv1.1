<br><br>
@extends('templates.app')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h2>Palmet Tranceiver List</h2>

<div class="container">

<table class='fs-6 table table-bordered' id='myTable'>
<thead align='center'>
<tr>
<th class="text-center"style='width:35px;'scope='col'></th>
<th class="text-center" style='width:80px;'scope='col'>Şirket</th>
<th class="text-center"style='width:50px;'scope='col'>Telsiz No</th>
<th class="text-center"style='width:90px;'scope='col'>Telsiz Tipi</th>
<th class="text-center"style='width:100px;'scope='col'>Kullanıcı Kodu</th>
<th class="text-center"style='width:100px;'scope='col'>Lokasyon</th>
<th class="text-center"style='width:80px;'scope='col'>Marka</th>
<th class="text-center"style='width:80px;'scope='col'>Telsiz Seri No</th>
<th class="text-center"style='width:130px;'scope='col'>Sorumlu</th>
<th class="text-center"style='width:60px;'scope='col'>Durum</th>
</tr>
</thead>
<?php $a=1; foreach ($transceiver as $key) {?>
<tbody>
<tr style='line-height: 20px;'>
<th scope='row'><?php echo $a ?></th>
<td><?php echo $key->company ?></td>
<td><?php echo $key->radio_id ?></td>
<td><?php echo $key->type?></td>
<td><?php echo $key->user_code ?></td>
<td><?php echo $key->location ?></td>
<td><?php echo $key->brand ?></td>
<td><?php echo $key->serial_number ?></td>
<td><?php echo $key->debit_name ?></td>
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

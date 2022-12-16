@extends('templates.app') <!-- şablon uygulanması için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->
<body>
<table style='width:60%; margin-left:20px; margin-top:30px; table-layout: fixed;' class='table table-bordered' >
<thead align='center'>
<tr>
<th style='width:45px;' scope='col'>
<th style='width:400px;'scope='col'>Talep</th>
<th style='width:150px;'scope='col'>Tip</th>
<th style='width:180px;'scope='col'>Kullanıcı</th>
<th style='width:90px;'scope='col'>Durum</th>
<th style='width:280px;'scope='col'>Atanan Kişi</th>
<th style='width:200px;'scope='col'>Talep Tarihi</th>
<th style='width:300px;'scope='col'>Eklenen Dosya</th>
</tr>
</thead>
<?php $a=1; foreach ($request as $key) {?>

<tbody>";
<tr style='line-height: 20px;'>
<th scope='row'><?php echo $a ?></th>
<td class='cell-breakWord'><?php echo $key->request ?></td>
<td><?php echo $key->type ?></td>
<td><?php echo $key->requesting ?></td>
<td><?php echo $key->status ?></td>
<td><?php echo $key->target ?></td>
<td><?php echo $key->time ?></td>
<td><a href=<?php echo 'http://palmet:1180/'.$key->attached_files1; ?>><?php if (empty($key->attached_files1)) echo ''; else echo 'dosya1&nbsp'; ?></a><a href=<?php echo 'http://palmet:1180/'.$key->attached_files2; ?>><?php if (empty($key->attached_files2)) echo ''; else echo 'dosya2&nbsp'; ?></a><a href=<?php echo 'http://palmet:1180/'.$key->attached_files3; ?>><?php if (empty($key->attached_files3)) echo ''; else echo 'dosya3&nbsp'; ?></a><a href=<?php echo 'http://palmet:1180/'.$key->attached_files4; ?>><?php if (empty($key->attached_files4)) echo ''; else echo 'dosya4&nbsp'; ?></a><a href=<?php echo 'http://palmet:1180/'.$key->attached_files5; ?>><?php if (empty($key->attached_files5)) echo ''; else echo 'dosya5&nbsp'; ?></a></td>
<?php $a++; } ?>
</tbody>

</table>
</body>

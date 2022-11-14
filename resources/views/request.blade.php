@extends('templates.app') <!-- şablon uygulanması için -->
<!-- @includeif('inc.menu')  istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->
<body>
  <head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>

<?php
// echo "<table style='width:60%; margin-left:20px; margin-top:10px; line-height: 50%; table-layout: fixed;' class='table table-bordered' >";
echo "<table style='width:60%; margin-left:20px; margin-top:30px; table-layout: fixed;' class='table table-bordered' >";
echo  "<thead align='center'>";
echo  "<tr>";
echo  "<th style='width:45px;' scope='col'>";
echo  "<th style='width:400px;'scope='col'>Talep</th>";
echo  "<th style='width:150px;'scope='col'>Tip</th>";
echo  "<th style='width:180px;'scope='col'>Kullanıcı</th>";
echo  "<th style='width:90px;'scope='col'>Durum</th>";
echo  "<th style='width:280px;'scope='col'>Atanan Kişi</th>";
echo  "<th style='width:200px;'scope='col'>Talep Tarihi</th>";
echo  "</tr>";
echo  "</thead>";
$a=1;
foreach ($request as $key) {
echo  "<tbody>";
echo  "<tr style='line-height: 20px;'>";
echo "<th scope='row'>$a</th>";
echo "<td class='cell-breakWord'>".$key->request."</td>";
echo "<td>".$key->type."</td>";
echo "<td>".$key->requesting."</td>";
echo "<td>".$key->status."</td>";
echo "<td>".$key->target."</td>";
echo "<td>".$key->time."</td>";
$a++;
}
echo  "</tbody>";
echo  "</table>";
?>



      <!-- <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->

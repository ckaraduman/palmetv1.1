<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<title>Palmet</title>
<style type="text/css">
body {
-moz-transform: scale(0.8, 0.8); /* Moz-browsers */
zoom: 0.8; /* Other non-webkit browsers */
zoom: 80%; /* Webkit browsers */
}
#headingOne1 {
-moz-transform: scale(0.5, 0.5); /* Moz-browsers */
zoom: 0.5; /* Other non-webkit browsers */
zoom: 50%; /* Webkit browsers */
}
#headingOne {
  font-size: 40px;
}
.tablo1{
  width: 100%;
  border:1px solid black;
}
.style1{
  border:1px solid black;
}
/* .gas{
  position: absolute;
  left: 100px;
  top: 150px;
} */
      </style>
<body>
<form method="post">
  @CSRF
  <table class="tablo1">
    <tr>
      <td width="20%"></td>
      <td align="center" width="5%">First Date</td>
      <td align="center" width="8%"><input type="date" name="date1"></td>
      <td width="4%"></td>
      <td align="center" width="5%">Last Date</td>
      <td align="center" width="8%"><input type="date" name="date2"></td>
      <td align="center" width="10%"><input type="submit" name="list" id="list" value="  List  "></td>
      <td width="40%"></td>
      <?php
      $date1 = $date2 = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $date1 = $_POST["date1"];
              $date2 = $_POST["date2"];

              $pgp_cons=DB::connection('sqlsrv')->table('GetData')->where('TMP_Tasitan','ELEKTRIK')
                                        ->whereBetween('OkumaTarihi', [$date1.' 08:00:00.000', $date2.' 08:00:00.000'])
                                        ->sum('Tuketim2');
              $pgp_budget=DB::connection('sqlsrv')->table('GetData')->where('TMP_Tasitan','ELEKTRIK')
                                        ->whereBetween('OkumaTarihi', [$date1.' 08:00:00.000', $date2.' 08:00:00.000'])
                                        ->sum('GunlukButceSm3');
              $pgp_total=$pgp_cons+$pgp_budget;
              $baymina_cons=DB::connection('sqlsrv')->table('GetData')->where('IstasyonAdi','BAYMINA')
                                        ->whereBetween('OkumaTarihi', [$date1.' 08:00:00.000', $date2.' 08:00:00.000'])
                                        ->sum('Tuketim2');
              $baymina_budget=DB::connection('sqlsrv')->table('GetData')->where('IstasyonAdi','BAYMINA')
                                        ->whereBetween('OkumaTarihi', [$date1.' 08:00:00.000', $date2.' 08:00:00.000'])
                                        ->sum('GunlukButceSm3');
              $delta_cons=DB::connection('sqlsrv')->table('GetData')->where('IstasyonAdi','DELTA RMS/A')
                                        ->whereBetween('OkumaTarihi', [$date1.' 08:00:00.000', $date2.' 08:00:00.000'])
                                        ->sum('Tuketim2');
              $delta_budget=DB::connection('sqlsrv')->table('GetData')->where('IstasyonAdi','DELTA RMS/A')
                                        ->whereBetween('OkumaTarihi', [$date1.' 08:00:00.000', $date2.' 08:00:00.000'])
                                        ->sum('GunlukButceSm3');
              // $test_cem=DB::connection('mysql')->table('test')->where('id','3')
              //                            ->value('name');
              $test_cem=DB::connection('mysql')->table('test')
                                               ->where('id',2)
                                               ->value('name');
              echo $test_cem;

              // $test_cem=DB::connection('mysql')->table('test')->where('id',1)
              //                           ->value('name');

              // $email = test_input($_POST["email"]);
              // $review = test_input($_POST["review"]);
              // $level = test_input($_POST["level"]);
            }
            // echo $date;
      ?>
    </tr>
  </table>
<!-- <div class="row">
    <div class="col text-left"><b>&nbsp;&nbsp;&nbsp;&nbsp;HGF DASHBOARD</b></div>
    <div class="col text-right"><b>First Date&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date1"></b><b>&nbsp;&nbsp;&nbsp;&nbsp;Last Date&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date2">&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="submit" name="list" id="list" value="  List  "></div> -->
    <!-- <div class="col text-left"><b>Last Date&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date2">&nbsp;&nbsp;&nbsp;&nbsp;</b></div> -->
    <!-- <div class="col text-right"><button type="button" class="btn btn-light">Exit</button></div>
 </div> -->
</form>
 <!-- <style>
 table, th, td {
   border: 1px solid black;
 }
 </style> -->
<table>
  <tr>
    <td style="width:500px" align="center">Tüketim Noktası</td>
    <td style="width:30px" align="center"></td>
    <td style="width:160px" align="center">Tüketim (sm3)</td>
    <td style="width:30px" align="center"></td>
    <td style="width:160px" align="center">Tüketim Bütçesi (sm3)</td>
    <td style="width:30px" align="center"></td>
    <td style="width:160px" align="center">Taşıma (sm3)</td>
    <td style="width:30px" align="center"></td>
    <td style="width:160px" align="center">Toplam (sm3)</td>
  <!-- <th style="width:400px"><h6><b>Tüketim Noktası</b></h6></th>
  <th style="width:400px"><h6><b>Tüketim</b></h6></th>
  <th style="width:400px"><h6><b>Tüketim Bütçesi</b></h6></th>
  <th style="width:400px"><h6><b>Taşıma</b></h6></th>
  <th style="width:400px"><h6><b>Taşıma Bütçesi</b></h6></th> -->
  </tr>
  <tr>
  <td align="left"><h6 onclick="change1(this)">- Power Generation Plants</h6></td><td></td><td align="right">{{number_format($pgp_cons,2)}}</td><td></td><td align="right">{{number_format($pgp_budget,2)}}</td>
  </tr>
  <tr>
    <td id="baymina" align="left">&nbsp;&nbsp;&nbsp;&nbsp;Baymina</td></td><td></td><td id="baymina_cons" align="right">{{number_format($baymina_cons,2)}}</td><td></td><td id="baymina_budget" align="right">{{number_format($baymina_budget,2)}}</td>
  </tr>
  <tr>
    <tr>
      <td id="delta" align="left">&nbsp;&nbsp;&nbsp;&nbsp;Delta</td></td><td></td><td id="delta_cons" align="right">{{number_format($delta_cons,2)}}</td><td></td><td id="delta_budget" align="right">{{number_format($delta_budget,2)}}</td>
    </tr>
    <tr>
  </tr>
  <tr>
    <td id="ales" align="left">&nbsp;&nbsp;&nbsp;&nbsp;Ales</td>
  </tr>
  <tr>
    <td id="gas" align="left">+ Natural Gas Distribution Companies</td>
  </tr>
</table>
<script>
function change1(id) {
  if (id.innerHTML=="+ Power Generation Plants") {
      id.innerHTML = "- Power Generation Plants"
      document.getElementById("baymina").style.visibility = "visible";
      document.getElementById("delta").style.visibility = "visible";
      document.getElementById("ales").style.visibility = "visible";
      document.getElementById("gas").style.top = "180px";
      document.getElementById("baymina_cons").style.visibility = "visible";
      document.getElementById("baymina_budget").style.visibility = "visible";
  } else if (id.innerHTML == "- Power Generation Plants") {
    id.innerHTML = "+ Power Generation Plants";
    document.getElementById("baymina").style.visibility = "hidden";
    document.getElementById("delta").style.visibility = "hidden";
    document.getElementById("ales").style.visibility = "hidden";
    document.getElementById("gas").style.position = "absolute";
    document.getElementById("gas").style.top = "90px";
    document.getElementById("baymina_cons").style.visibility = "hidden";
    document.getElementById("baymina_budget").style.visibility = "hidden";
  }
}
</script>
  <br><br><br><br><br>
  {{$test_cem}}
  {{number_format($pgp_cons,2)}} <br>
  {{number_format($pgp_budget,2)}} <br>

  {{number_format($baymina_cons,2)}} <br>
  {{number_format($baymina_budget,2)}} <br>
  {{$date1}} <br>   {{$date2}} <br>
  </body>
</html>

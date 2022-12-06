<!DOCTYPE html>
<br><br>
@extends('templates.app')
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Palmet Digital</title>

<style type="text/css">
body {
-moz-transform: scale(0.8, 0.8); /* Moz-browsers */
zoom: 0.8; /* Other non-webkit browsers */
zoom: 80%; /* Webkit browsers */
}
</style>

  </head>
  <body>
    <div class="container">
      <h4>DataSet Page</h4>

      <form method="post">
      @CSRF
      <div class = "pt-0">
        <div class="row">
          <input type="text" id="myInput" name="input1" placeholder="Search for names.." style="width:50%">
        </div>
        <button type="submit" class="btn btn-primary" style="width:100px; padding:1px;">Bul</button>
      </div>
    </form>

    <?php
    $prs_id="";
    $prs_fullname="";
    $prs_email="";
    $prs_intercom="";
    $prs_gsm="";
    $prs_company="";
    $prs_department="";
    $prs_position="";
    $prs_location="";
    if(isset($_POST["input1"])){
    $data1=$_POST["input1"];

    $prs_id=DB::connection('mysql')->table('directory')->where('fullname',$data1)
                                     ->value('id');
    $prs_fullname=DB::connection('mysql')->table('directory')->where('fullname',$data1)
                                    ->value('fullname');
    $prs_email=DB::connection('mysql')->table('directory')->where('fullname',$data1)
                                    ->value('email');
    $prs_intercom=DB::connection('mysql')->table('directory')->where('fullname',$data1)
                                    ->value('intercom');
    $prs_gsm=DB::connection('mysql')->table('directory')->where('fullname',$data1)
                                    ->value('gsm');
    $prs_company=DB::connection('mysql')->table('directory')->where('fullname',$data1)
                                    ->value('company');
    $prs_department=DB::connection('mysql')->table('directory')->where('fullname',$data1)
                                    ->value('department');
    $prs_position=DB::connection('mysql')->table('directory')->where('fullname',$data1)
                                    ->value('position');
    $prs_location=DB::connection('mysql')->table('directory')->where('fullname',$data1)
                                    ->value('location');

    } ?>
      <form  action="{{Route('directoryUpdate')}}" method="post" style="width:50%">
      @CSRF
    <div class="mb-3 mt-3">
      <label for="id" class="form-label" style="height:15px;">Rehber No</label>
    <?php echo "<input type='text' class='form-control' id='id' name='id' readonly value='".$prs_id."'\>"?>
    </div>
    <div class="mb-3 mt-3">
      <label for="adsoyad" class="form-label" style="height:15px;">Adı Soyadı</label>
    <?php echo "<input type='text' class='form-control' id='name' name='fullname' value='".$prs_fullname."'\>"?>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label" style="height:15px;">E-Mail Adresi</label>
    <?php echo "<input type='text' class='form-control' id='email' name='email' value='".$prs_email."'\>" ?>
    </div>
    <div class="mb-3">
      <label for="dahili" class="form-label" style="height:15px;">Dahili Telefon Numarası</label>
    <?php echo "<input type='text' class='form-control' id='intercom' name='intercom' value='".$prs_intercom."'\>" ?>
    </div>
    <div class="mb-3">
      <label for="gsm" class="form-label" style="height:15px;">Cep Telefon Numarası</label>
    <?php echo "<input type='text' class='form-control' id='gsm' name='gsm' value='".$prs_gsm."'\>" ?>
    </div>
    <div class="mb-3">
      <label for="company" class="form-label" style="height:15px;">Bağlı Olduğu Şirket</label>
    <?php echo "<input type='text' class='form-control' id='company' name='company' value='".$prs_company."'\>" ?>
    </div>
    <div class="mb-3">
      <label for="department" class="form-label" style="height:15px;">Departman Bilgisi</label>
    <?php echo "<input type='text' class='form-control' id='department' name='department' value='".$prs_department."'\>" ?>
    </div>
    <div class="mb-3">
      <label for="position" class="form-label" style="height:15px;">Pozisyonu / Görevi</label>
      <?php echo "<input type='text' class='form-control' id='position' name='position' value='".$prs_position."'\>" ?>
    </div>
    <div class="mb-3">
      <label for="location" class="form-label" style="height:15px;">Lokasyon</label>
      <?php echo "<input type='text' class='form-control' id='location' name='location' value='".$prs_location."'\>" ?>
    </div>
    <!-- <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> -->
    <button type="submit" class="btn btn-primary" style="width:120px">Güncelle</button>
  </form>
    </div>
  </body>
</html>

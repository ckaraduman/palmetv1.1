<!DOCTYPE html>
<br><br>
@extends('templates.app')
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Palmet Digital</title>
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
    $prs_name="";
    $prs_email="";
    $prs_phone="";
    $prs_gsm="";
    $prs_department="";
    $prs_position="";
    $prs_location="";
    if(isset($_POST["input1"])){
    $data1=$_POST["input1"];

    $prs_name=DB::connection('mysql')->table('rehber')->where('name',$data1)
                                    ->value('name');
    $prs_email=DB::connection('mysql')->table('rehber')->where('name',$data1)
                                    ->value('email');
    $prs_phone=DB::connection('mysql')->table('rehber')->where('name',$data1)
                                    ->value('phone');
    $prs_gsm=DB::connection('mysql')->table('rehber')->where('name',$data1)
                                    ->value('gsm');
    $prs_department=DB::connection('mysql')->table('rehber')->where('name',$data1)
                                    ->value('department');
    $prs_position=DB::connection('mysql')->table('rehber')->where('name',$data1)
                                    ->value('position');
    $prs_location=DB::connection('mysql')->table('rehber')->where('name',$data1)
                                    ->value('location');

    } ?>
      <form action="/action_page.php" style="width:50%">
    <div class="mb-3 mt-3">
      <label for="adsoyad" class="form-label" style="height:15px;">Adı Soyadı</label>
    <?php echo "<input type='text' class='form-control' id='adsoyad' name='adsoyad' value='".$prs_name."'\>"?>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label" style="height:15px;">E-Mail Adresi</label>
    <?php echo "<input type='text' class='form-control' id='email' name='email' value='".$prs_email."'\>" ?>
    </div>
    <div class="mb-3">
      <label for="dahili" class="form-label" style="height:15px;">Dahili Telefon Numarası</label>
    <?php echo "<input type='text' class='form-control' id='dahili' name='dahili' value='".$prs_phone."'\>" ?>
    </div>
    <div class="mb-3">
      <label for="gsm" class="form-label" style="height:15px;">Cep Telefon Numarası</label>
    <?php echo "<input type='text' class='form-control' id='gsm' name='gsm' value='".$prs_gsm."'\>" ?>
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
    <button type="submit" class="btn btn-primary" style="width:120px">Kaydet</button>
    <button type="submit" class="btn btn-primary" style="width:120px">Yeni Ekle</button>
  </form>
    </div>
  </body>
</html>

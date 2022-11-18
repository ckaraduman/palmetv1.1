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
          <input type="text" id="myInput" name="input1" onkeyup="myFunction()" placeholder="Search for names.." style="width:50%">
        </div>
        <button type="submit" class="btn btn-primary" style="width:100px; padding:1px;">Bul</button>
      </div>
    </form>

    <?php
    $data1="";
    if(isset($_POST["input1"])){

    $data1=$_POST["input1"];
    } ?>
      <form action="/action_page.php" style="width:50%">
    <div class="mb-3 mt-3">
      <label for="adsoyad" class="form-label" style="height:15px;">Adı Soyadı</label>
    <?php echo "<input type='text' class='form-control' id='adsoyad' name='adsoyad' value='".$data1."'\>" ?>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label" style="height:15px;">E-Mail Adresi</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="dahili" class="form-label" style="height:15px;">Dahili Telefon Numarası</label>
      <input type="text" class="form-control" id="dahili" name="dahili">
    </div>
    <div class="mb-3">
      <label for="gsm" class="form-label" style="height:15px;">Cep Telefon Numarası</label>
      <input type="text" class="form-control" id="gsm" name="gsm">
    </div>
    <div class="mb-3">
      <label for="department" class="form-label" style="height:15px;">Departman Bilgisi</label>
      <input type="text" class="form-control" id="department" name="department">
    </div>
    <div class="mb-3">
      <label for="position" class="form-label" style="height:15px;">Pozisyonu / Görevi</label>
      <input type="text" class="form-control" id="position" name="position">
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

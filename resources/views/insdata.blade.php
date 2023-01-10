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
      <h4>Rehber Kayıt Ekleme Ekranı</h4>
      <br>
      <form  action="{{Route('insDataRec')}}" method="post" style="width:50%">
      @CSRF
    <div class="mb-3 mt-3">
      <label for="adsoyad" class="form-label" style="height:15px;">Adı Soyadı</label>
    <?php echo "<input type='text' class='form-control' id='name' name='fullname'>" ?>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label" style="height:15px;">E-Mail Adresi</label>
    <?php echo "<input type='text' class='form-control' id='email' name='email'>" ?>
    </div>
    <div class="mb-3">
      <label for="dahili" class="form-label" style="height:15px;">Dahili Telefon Numarası</label>
    <?php echo "<input type='text' class='form-control' id='intercom' name='intercom'>" ?>
    </div>
    <div class="mb-3">
      <label for="gsm" class="form-label" style="height:15px;">Cep Telefon Numarası</label>
    <?php echo "<input type='text' class='form-control' id='gsm' name='gsm'>" ?>
    </div>
    <div class="mb-3">
      <label for="company" class="form-label" style="height:15px;">Bağlı Olduğu Şirket</label>
    <?php echo "<input type='text' class='form-control' id='company' name='company'>" ?>
    </div>
    <div class="mb-3">
      <label for="department" class="form-label" style="height:15px;">Departman Bilgisi</label>
    <?php echo "<input type='text' class='form-control' id='department' name='department'>" ?>
    </div>
    <div class="mb-3">
      <label for="position" class="form-label" style="height:15px;">Pozisyonu / Görevi</label>
      <?php echo "<input type='text' class='form-control' id='position' name='position'>" ?>
    </div>
    <div class="mb-3">
      <label for="location" class="form-label" style="height:15px;">Lokasyon</label>
      <?php echo "<input type='text' class='form-control' id='location' name='location'>" ?>
    </div>

    <button type="submit" class="btn btn-primary" style="width:120px">Kayıt Ekle</button>
  </form>
    </div>
  </body>
</html>

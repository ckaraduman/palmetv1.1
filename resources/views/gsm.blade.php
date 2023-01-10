<br>
@extends('templates.app') <!-- şablon uygulanması için -->
<!-- @includeif('inc.menu')  istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->
<body>
    <div class="container">
      <br>
  <p class="fs-3">GSM-Cihaz/SIM Talep Formu</p>
  <hr>
    </div>
<form action="{{Route('gsmRecord')}}" method="post">
  @CSRF

  <div class="container">
    <div class="row">
    <div class="col-2">
  <p class="fw-semibold">{{$name}}</p>
    </div>
    <div class="col-2">
  <p class="fw-semibold">{{$email}}</p>
    </div>
    </div>
  </div>
  <div class="form-group"
  @CSRF
  <div class="container">
  <div class="row">
    <div class="col-3">
      <select id="gsms1" class="form-select" aria-label="Default select example" name="gsm_select1">
        <option selected>Talep Türü</option>
        <option value="Yeni Cihaz">Yeni Cihaz Talebi</option>
        <option value="Yeni Hat">Yeni Hat Talebi</option>
        <option value="Yeni Cihaz-Hat">Yeni Cihaz ve Hat Talebi</option>
        <option value="Cihaz Değişim">Cihaz Değişim Talebi</option>
        <option value="Cihaz-Hat Değişim">Cihaz ve Hat Değişim Talebi</option>
        <option value="Hat Değişim">Hat Değişim Talebi</option>
      </select>
      </div>
   </div>
  </div>
  <br>

  <div class="container">
  <div class="row">
    <div class="col-4">
      <textarea  style="height:200px;"  id="gsm_txt1" class="form-control" aria-label="With textarea" placeholder="Açıklamanız" name="gsm_text1"></textarea>
      </div>
    </div>
 </div>
  <br>

  <div class="container">
    <input id="gsm_ch1" type="checkbox" name="gsm_level" value="acil">&nbsp;&nbsp;&nbspAcil
  </div>
    </div>
  <br>
  <div class="container">
  <input id="btn1" class="btn btn-primary" type="submit" name="submit"
    value="Gönder">
  </div>
    </div>
    </div>
</form>

<?php
$content="";
$select1="";
$level="";
// $request="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $select1 = $_POST["gsm_select1"];
        $content = $_POST["gsm_text1"];
        if (isset($_POST['gsm_level'])) {$level='Acil';} else {$level='Normal';}
      }
?>
</body>

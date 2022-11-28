<br>
@extends('templates.app') <!-- şablon uygulanması için -->
<!-- @includeif('inc.menu')  istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->
<body>
    <div class="container">
  <p class="fs-3">Yardım Talep Formu</p>
  <hr>
    </div>
<form action="{{Route('helpRecord')}}" method="post" enctype="multipart/form-data">
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
      <select id="dpd1" class="form-select" aria-label="Default select example" name="select1" onchange="mySelect()">
        <option selected>Talep Türü</option>
        <option value="Yazılım Destek">Yazılım Destek</option>
        <option value="Donanım Destek">Donanım Destek</option>
        <option value="Yazılım Lisans">Yazılım Lisans</option>
        <option value="Yeni Yazılım">Yeni Yazılım</option>
        <option value="Yeni Donanım">Yeni Donanım</option>
        <option value="Bilgi Talebi">Bilgi Talebi</option>
      </select>
      </div>
   </div>
  </div>
  <br>

  <div class="container">
  <div class="row">
    <div class="col-3">
      <select id="dpd2" class="form-select" aria-label="Default select example" name="select2">
        <option selected>Alt Talep Türü</option>
        <option id="o1" value="o1"></option>
        <option id="o2" value="o2"></option>
        <option id="o3" value="o3"></option>
        <option id="o4" value="o4"></option>
        <option id="o5" value="o5"></option>
        <option id="o6" value="o6"></option>
        <option id="o7" value="o7"></option>
        <option id="o8" value="o8"></option>
        <option id="o9" value="o9"></option>
      </select>
      </div>
   </div>
  </div>

  <br>
  <div class="container">
  <div class="row">
    <div class="col-4">
      <textarea  style="height:200px;"  id="txt1" class="form-control" aria-label="With textarea" placeholder="Açıklamanız" name="text1"></textarea>
      </div>
    </div>
 </div>
  <br>
    <div class="container">
  <div class="col-3">
    <input class="form-control" type="file" id="formFileMultiple" name="image[]" multiple>
  </div>
    </div>
  <br>
  <div class="container">
    <input id="ch1" type="checkbox" name="level" value="acil">&nbsp;&nbsp;&nbspAcil
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
        $select1 = $_POST["select1"];
        $content = $_POST["text1"];
        if (isset($_POST['level'])) {$level='Acil';} else {$level='Normal';}


        // $headers->imgName = $request->input('imgName');
        //
        // if (request()->hasFile('imgName')){
        //
        //         $imageName = $request->file('imgName')->getClientOrginalName();
        //         $headers->imgName->storeAs('public/your_directory/',$imageName);
        //         $headers->imgName = $imageName;
        //
        // }

        // $level=(isset($_POST['level']) && ($_POST['level'] !=0));

        // $date2 = $_POST["date2"];


        // $test_cem=DB::connection('mysql')->table('test')->where('id',1)
        //                           ->value('name');

        // $email = test_input($_POST["email"]);
        // $review = test_input($_POST["review"]);
        // $level = test_input($_POST["level"]);
      }
?>
<!-- {{$name}}<br>{{$email}}<br>{{$content}}<br>{{$select1}}<br>{{$level}} -->
<script type="text/javascript">
function mySelect() {
  if (document.getElementById("dpd1").value=="Talep Türü") {
    document.getElementById("o1").innerHTML = "";
    document.getElementById("o2").innerHTML = "";
    document.getElementById("o3").innerHTML = "";
    document.getElementById("o4").innerHTML = "";
    document.getElementById("o5").innerHTML = "";
    document.getElementById("o6").innerHTML = "";
    document.getElementById("o7").innerHTML = "";
    document.getElementById("o8").innerHTML = "";
    document.getElementById("o9").innerHTML = "";
  }
  if (document.getElementById("dpd1").value=="Yazılım Destek") {
    document.getElementById("o1").innerHTML = "Abone Tipi ve Tarife Güncelleme";
    document.getElementById("o2").innerHTML = "Cihaz Tipi Güncelleme";
    document.getElementById("o3").innerHTML = "Firma Yetkisi Güncelleme";
    document.getElementById("o4").innerHTML = "Merkezi Kazana Daire Bağlama";
    document.getElementById("o5").innerHTML = "Merkezi Kazandan Daire Koparma";
    document.getElementById("o6").innerHTML = "Proje Durumu Güncelleme";
    document.getElementById("o7").innerHTML = "Son Ödeme Tarihi Güncelleme";
    document.getElementById("o8").innerHTML = "Sözleşme Durumu Güncelleme";
    document.getElementById("o9").innerHTML = "Çift Kayıt";
  }
  if (document.getElementById("dpd1").value=="Donanım Destek") {
    document.getElementById("o1").innerHTML = "PC Sorunları";
    document.getElementById("o2").innerHTML = "Yazıcı Sorunları";
    document.getElementById("o3").innerHTML = "Network Problemi";
    document.getElementById("o4").innerHTML = "";
    document.getElementById("o5").innerHTML = "";
    document.getElementById("o6").innerHTML = "";
    document.getElementById("o7").innerHTML = "";
    document.getElementById("o8").innerHTML = "";
    document.getElementById("o9").innerHTML = "";
  }
  if (document.getElementById("dpd1").value=="Yazılım Lisans") {
    document.getElementById("o1").innerHTML = "Yeni Lisans";
    document.getElementById("o2").innerHTML = "Lisans Yenileme";
    document.getElementById("o3").innerHTML = "Lisans İptal";
    document.getElementById("o4").innerHTML = "Lisans Değişikliği";
    document.getElementById("o5").innerHTML = "";
    document.getElementById("o6").innerHTML = "";
    document.getElementById("o7").innerHTML = "";
    document.getElementById("o8").innerHTML = "";
    document.getElementById("o9").innerHTML = "";
  }
  if (document.getElementById("dpd1").value=="Yeni Yazılım") {
    document.getElementById("o1").innerHTML = "Yeni Yazılım Talebi";
    document.getElementById("o2").innerHTML = "";
    document.getElementById("o3").innerHTML = "";
    document.getElementById("o4").innerHTML = "";
    document.getElementById("o5").innerHTML = "";
    document.getElementById("o6").innerHTML = "";
    document.getElementById("o7").innerHTML = "";
    document.getElementById("o8").innerHTML = "";
    document.getElementById("o9").innerHTML = "";
  }
  if (document.getElementById("dpd1").value=="Yeni Donanım") {
    document.getElementById("o1").innerHTML = "Klavye & Mouse Talebi";
    document.getElementById("o2").innerHTML = "Printer Talebi";
    document.getElementById("o3").innerHTML = "Laptop Talebi";
    document.getElementById("o4").innerHTML = "DeskTop PC Talebi";
    document.getElementById("o5").innerHTML = "Cep Telefonu Talebi";
    document.getElementById("o6").innerHTML = "Kablo & Adaptör Talebi";
    document.getElementById("o7").innerHTML = "Diğer Donanım Talebi";
    document.getElementById("o8").innerHTML = "Aksesuar Talebi";
    document.getElementById("o9").innerHTML = "Çanta & Bellek Talebi";
  }
  if (document.getElementById("dpd1").value=="Bilgi Talebi") {
    document.getElementById("o1").innerHTML = "Donanım Kullanım Bilgisi";
    document.getElementById("o2").innerHTML = "Yazılım Kullanım Bilgisi";
    document.getElementById("o3").innerHTML = "Yeni Ürün Bilgisi";
    document.getElementById("o4").innerHTML = "Hata Yorumu & Bilgisi";
    document.getElementById("o5").innerHTML = "Diğer Bilgi Talepleri";
    document.getElementById("o6").innerHTML = "Eğitim Talebi";
    document.getElementById("o7").innerHTML = "";
    document.getElementById("o8").innerHTML = "";
    document.getElementById("o9").innerHTML = "";
  }
}
</script>
</body>

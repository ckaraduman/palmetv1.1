<br>
@extends('templates.app')
@section('title', 'Palmet Digital')
<body>
    <div class="container">
  <p class="fs-3">Öneri İletim Formu</p>
  <hr>
    </div>
<form action="{{Route('suggesRecord')}}" method="post" enctype="multipart/form-data">
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
      <select id="dpd1" class="form-select" aria-label="Default select example" name="select1">
        <option selected>Öneri Türü</option>
        <option value="Yeni Süreç">Yeni Süreç</option>
        <option value="Süreç iyileştirme">Süreç İyileştirme</option>
        <option value="Pratik Uygulama">Pratik Uygulama</option>
        <option value="YForm Ekleme-Düzeltme">Form Ekleme/Düzeltme</option>
        <option value="Yeni Fikir">Yeni Fikir</option>
        <option value="Yorum-Değerlendirme">Yorum/Değerlendirme</option>
        <option value=Diğer">Diğer</option>
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
</body>

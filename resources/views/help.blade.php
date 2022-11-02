@extends('templates.app') <!-- şablon uygulanması için -->
<!-- @includeif('inc.menu')  istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->
<body>
  <head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
<h4>&nbsp;&nbsp;&nbsp;Yardım Talep Formu</h4>
<form action="{{Route('helpRecord')}}" method="post" enctype="multipart/form-data">
  @CSRF
<h7>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kullanıcı Adı : <b>{{$name}}</b></h7><br>
<h7>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kullanıcı E-Mail : <b>{{$email}}</b></h7><br><br>
  <div class="form-group"
  @CSRF
  <div class="container">
  <div class="row">
    <div class="col-3">
      <select id="dpd1" class="form-select" aria-label="Default select example" name="select1">
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
  <div class="row">
    <div class="col-4">


      <textarea id="txt1" class="form-control" aria-label="With textarea" placeholder="Açıklamanız" name="text1"></textarea>
      </div>
    </div>
  </div>
</div>
  <br>
  <div class="mb-3">
    <input class="form-control" type="file" id="formFileMultiple" name="image[]" multiple>
  </div>

    <input id="ch1" type="checkbox" name="level" value="acil">&nbsp;&nbsp;&nbspAcil

  <br><br>
  <input id="btn1" class="btn btn-primary" type="submit" name="submit"
    value="Gönder">
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

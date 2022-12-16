<?php
use Illuminate\Http\Request;
?>
@extends('templates.app') <!-- şablon uygulanması için -->
<!-- @includeif('inc.menu')  istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->
<body>
  <head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspMerhaba,</h4>
<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Palmet TARGET deneme sayfası!</h5>
<hr>
<h4>Adı : {{Auth::User()->name}}</h4>
<h4>E-Mail : {{Auth::User()->email}}</h4>
<h5>Talep Türü : {{$select1}}</h5>
<h5>Alt Talep Türü : {{$select2}}</h5>
<h6>Açıklama : {{$text1}}</h6>

<h5>1. Ek Dosya Yolu : <a href=<?php echo 'https://digital.palmet.com/'.$FilePath1; ?>>{{$FilePath1}}</a></h5>
<h5>1. Ek Dosya Yolu : <a href=<?php echo 'http://palmet:1180/'.$FilePath1; ?>>{{$FilePath1}}</a></h5>

<h5>2. Ek Dosya Yolu : <a href=<?php echo 'https://digital.palmet.com/'.$FilePath2; ?>>{{$FilePath2}}</a></h5>
<h5>2. Ek Dosya Yolu : <a href=<?php echo 'http://palmet:1180/'.$FilePath2; ?>>{{$FilePath2}}</a></h5>

<h5>3. Ek Dosya Yolu : <a href=<?php echo 'https://digital.palmet.com/'.$FilePath3; ?>>{{$FilePath3}}</a></h5>
<h5>3. Ek Dosya Yolu : <a href=<?php echo 'http://palmet:1180/'.$FilePath3; ?>>{{$FilePath3}}</a></h5>

<h5>4. Ek Dosya Yolu : <a href=<?php echo 'https://digital.palmet.com/'.$FilePath4; ?>>{{$FilePath4}}</a></h5>
<h5>4. Ek Dosya Yolu : <a href=<?php echo 'http://palmet:1180/'.$FilePath4; ?>>{{$FilePath4}}</a></h5>

<h5>5. Ek Dosya Yolu : <a href=<?php echo 'https://digital.palmet.com/'.$FilePath5; ?>>{{$FilePath5}}</a></h5>
<h5>5. Ek Dosya Yolu : <a href=<?php echo 'http://palmet:1180/'.$FilePath5; ?>>{{$FilePath5}}</a></h5>
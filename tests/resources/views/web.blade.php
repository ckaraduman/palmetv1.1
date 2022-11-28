<?php
use Illuminate\Http\Request;
?>
<br>
@extends('templates.app') <!-- şablon uygulanması için -->
<!-- @includeif('inc.menu')  istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->
<body>
  <div class="container">
    <p class="fs-2">Palmet Web Siteleri</p>
    <h6>{{Auth::User()->name}}</h6><h6>{{Auth::User()->email}}</h6>
    <hr>
          <a href="https://www.palmet.com">Palmet Enerji A.Ş.</a><br>
          <a href="http://www.palmetinternational.com">Palmet International</a><br>
          <a href="https://www.palmetmuhendislik.com">Palmet Mühendislik</a><br>
          <a href="https://www.palgaz.com.tr">Palgaz Doğalgaz Dağıtım A.Ş.</a><br>
          <a href="https://www.palen.com.tr">Palen Enerji Doğalgaz Dağıtım A.Ş.</a><br>
          <a href="https://www.izgaz.com.tr">İzgaz İzmit Gaz Dağıtım A.Ş.</a><br>
          <a href="https://www.baymina.com">Baymina Enerji A.Ş.</a><br>
          <a href="https://www.aleseu.com">Ales Elektrik Üretim A.Ş.</a><br>
          <a href="https://www.deltaeu.com">Delta Enerji Üretim A.Ş.</a><br>
          <a href="https://www.evde360.com">Evde360</a><br>
          <a href="http://www.palport.com.tr">Palport A.Ş.</a><br>
          <a href="http://www.gazport.com">Gazport A.Ş.</a><br>
  </div>
  <hr>
  <div class='container'>
  <h3><b><u>Kontroller</u></b></h3>

  <?php
  $url = "https://www.palmet.com";
  $headers = @get_headers($url);
  if($headers && strpos( $headers[0], '200')) {
      $status = "Web Sitesi çalışıyor!";
  }
  else {
      $status = "Web Sitesi aktif değil!";
  }
  ?>
  {{$url}} -----> {{$status}}
  <br>
  </div>

  <div class="container">
  <div class="row">
  <div class="col-md-6">1. KISIM</div>
  <div class="col-md-6">2. KISIM</div>
  </div>
  </div>

  <?php
  $url = "http://www.palmetinternational.com";
  $headers = @get_headers($url);
  if($headers && strpos( $headers[0], '200')) {
      $status = "Web Sitesi çalışıyor!";
  }
  else {
      $status = "Web Sitesi aktif değil!";
  }
  ?>
  <div class='container'>
  {{$url}} -----> {{$status}}
  <br>
  </div>

  <?php
  $url = "https://www.palmetmuhendislik.com";
  $headers = @get_headers($url);
  if($headers && strpos( $headers[0], '200')) {
      $status = "Web Sitesi çalışıyor!";
  }
  else {
      $status = "Web Sitesi aktif değil!";
  }
  ?>
  <div class='container'>
  {{$url}} -----> {{$status}}
  <br>
  </div>

  <?php
  $url = "https://www.palgaz.com.tr";
  $headers = @get_headers($url);
  if($headers && strpos( $headers[0], '200')) {
      $status = "Web Sitesi çalışıyor!";
  }
  else {
      $status = "Web Sitesi aktif değil!";
  }
  ?>
  <div class='container'>
  {{$url}} -----> {{$status}}
  <br>
  </div>

  <?php
  $url = "https://www.palen.com.tr";
  $headers = @get_headers($url);
  if($headers && strpos( $headers[0], '200')) {
      $status = "Web Sitesi çalışıyor!";
  }
  else {
      $status = "Web Sitesi aktif değil!";
  }
  ?>
  <div class='container'>
  {{$url}} -----> {{$status}}
  <br>
  </div>

  <?php
  $url = "https://www.izgaz.com.tr";
  $headers = @get_headers($url);
  if($headers && strpos( $headers[0], '200')) {
      $status = "Web Sitesi çalışıyor!";
  }
  else {
      $status = "Web Sitesi aktif değil!";
  }
  ?>
  <div class='container'>
  {{$url}} -----> {{$status}}
  <br>
  </div>

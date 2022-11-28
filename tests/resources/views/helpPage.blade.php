@extends('templates.app') <!-- şablon uygulanması için -->
<!-- @includeif('inc.menu')  istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->
<h3>Yardım Talebi Kayıt Bildirim Sayfası</h3>
<h7>Dosya(lar) başarıyla kayıt edildi!</h7>
{{$total}}<br>{{$tmpFilePath}}

<p>{{session('success')}}</p>
<form action="{{route('send-mail')}}" method="post">
  @CSRF
  Ad Soyad
  <input type="text" name="name">
  Mail
  <input type="text" name="email">
  <input type="submit" name="" value="Mail Gönder">
</form>

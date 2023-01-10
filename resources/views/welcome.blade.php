<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Palmet Digital</title>
    <link href="{{('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{('bootstrap/css/normalize.css')}}" rel="stylesheet">
  </head>
  <body class="antialiased">
    <script src="{{('bootstrap/js/bootstrap.bundle.js')}}"></script>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">



              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">

                  <div class="position-relative">
                  <a class="navbar-brand" href="https://www.palmet.com">Palmet</a>
                </div>



                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                  <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Görev Yönetimi
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{Route('help')}}">Görevler</a></li>
                        <li><a class="dropdown-item" href="{{Route('request')}}">İş Planları</a></li>
                        <li><a class="dropdown-item" href="#">Raporlar</a></li>
                        <li><a class="dropdown-item" href="{{Route('sugges')}}">Tanımlar</a></li>
                        <li><a class="dropdown-item" href="#">Ayarlar</a></li>
                        <li><a class="dropdown-item" href="#">Kontrol Paneli</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Talep Yönetimi
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{Route('help')}}">Yeni Talep</a></li>
                        <li><a class="dropdown-item" href="{{Route('request')}}">Gelen Talepler</a></li>
                        <li><a class="dropdown-item" href="{{Route('gsm')}}">GSM-Cihaz Talebi</a></li>
                        <li><a class="dropdown-item" href="{{Route('sugges')}}">Öneriler</a></li>
                        <li><a class="dropdown-item" href="#">Bildirimler</a></li>
                        <li><a class="dropdown-item" href="#">Şikayetler</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Rehber Hizmetler
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{route('directory')}}">İletişim Bilgileri</a></li>
                        <li><a class="dropdown-item" href="{{Route('dataset')}}">İletişim Bilgi Güncelle</a></li>
                        <li><a class="dropdown-item" href="{{Route('insData')}}">İletişim Bilgisi Ekle</a></li>
                        <li><a class="dropdown-item" href="{{Route('web')}}">Web Sitelerimiz</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tüketim Verileri
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{Route('hgf')}}">Gaz Akış Tabloları</a></li>
                        <li><a class="dropdown-item" href="#">Tüketim Noktaları</a></li>
                        <li><a class="dropdown-item" href="#">Ayarlar</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kaynak Yönetimi
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Kaynaklar</a></li>
                        <li><a class="dropdown-item" href="#">Kaynak Kullanımı</a></li>
                        <li><a class="dropdown-item" href="#">Ayarlar</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Varlık Yönetimi
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">IT-Donanım Varlıkları</a></li>
                        <li><a class="dropdown-item" href="#">IT-Yazılım Varlıkları</a></li>
                        <li><a class="dropdown-item" href="{{route('datalines')}}">Data Hatları</a></li>
                        <li><a class="dropdown-item" href="{{route('transceiver')}}">Telsiz Cihazları</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kütüphane
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Projeler</a></li>
                        <li><a class="dropdown-item" href="#">Belgeler</a></li>
                        <li><a class="dropdown-item" href="#">Referanslar</a></li>
                        <li><a class="dropdown-item" href="#">Guide</a></li>
                      </ul>
                    </li>

                  </ul>
                </div>


                  </div>
              </nav>



                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://digital.palmet.com" class="underline text-gray-900 dark:text-white">Yardım Masası</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Yardım Masası Uygulaması Palmet Grup için Palmet Yazılım Ekibi tarafından geliştirilmiştir. Tüm hakları Palmet Group'a aittir. Yazılım ve Donanım ürünleri taleplerinin yapılabilmesi yanında, yazılım ve sistem-network kullanımları için yardım taleplerinin, en hızlı şekilde ilgili birime ulaştırılması ve takibinin kullanıcı tarafından yapılabilmesi amaçlanmıştır.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://digital.palmet.com" class="underline text-gray-900 dark:text-white">Eğitim Portalı</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Palmet Grup eğitim videoları Eğitim Portalımızda düzenli olarak yayınlanacak, konularla ilgili testler, belgeler, fotoğraflar ve çizimler de kullanıcılarımıza sunulacaktır.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://www.palmet.com" class="underline text-gray-900 dark:text-white">Palmet Haberler</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Grup içi tüm haberler ve projelerimiz ile grup dışından enerji sektörü haberleri, ekonomik gelişmeler, diğer konulardaki tüm haberler kullanıcılarımıza sunulacaktır. Bu konumda sağlam bir arşiv olmuşmasını sağlamayı amaçlıyoruz.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Palmet Dijital Sistemler</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Palmet Bilgi Teknolojileri Yazılım Ekipleri tarafından hazırlanan tüm uygulamalar kullanıcılarımızın hizmetine sunularak, dönüşler alınacak ve değerlendirmeler yapılacaktır.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://portal.palmet.com/portal/hr/iletisim/SitePages/Home.aspx" class="ml-1 underline">
                                Palmet Intranet
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://www.palmet.com" class="ml-1 underline">
                                Palmet
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>



</html>


<header class="beautypress-header-section beautypress-version-1 beautypress-extra-css menu-skew bg-color-purple header-height-calc-minus navbar-fixed">
                 <div class="container">
                    <div class="beautypress-logo-wraper">
                       <a href="index.html" class="beautypress-logo beautypress-version-2  beautypress-version-4">
                         <img src="{{asset('assets')}}/images/logo.png" width="130px" alt="">
                       </a>
                    </div>
                 </div>
                 <div class="beautypress-header-top">
                    <div class="container">
                       <ul class="beautypress-simple-iocn-list beautypress-version-1">
                          <li><i class="xsicon icon-call"></i>+90 555 555 55 55</li>
                          <li><i class="xsicon icon-envelope"></i>mail@guzelliksalonu.com</li>
                       </ul>
                    </div>
                 </div>
                 <div class="beautypress-main-header color-white">
                    <div class="container">
                      <nav class="xs_nav beautypress-nav beautypress-mega-menu" >
                          <div class="nav-header">
                             <div class="nav-toggle"></div>
                          </div>
                          <div class="nav-menus-wrapper">
                             <ul class="nav-menu">
                                <li>
                                  <a href="index.html">{{__('language.anasayfa')}}</a>
                                </li>
                                <li>
                                   <a href="index.html#">{{__('language.kurumsal')}}</a>
                                   <ul class="nav-dropdown">
                                      <li><a href="hakkimizda.html">Hakkımızda</a></li>
                                      <li><a href="banka-hesaplari.html">Banka Hesapları</a></li>
                                   </ul>
                                </li>
                                <li >
                                  <a href="index.html#">{{__('language.hizmetlerimiz')}}</a>
                                   <ul class="nav-dropdown">
                                                                           <li><a href="hizmetler/leke-bakimi.html">Leke Bakımı</a></li>
                                                                           <li><a href="hizmetler/buz-lazer-epilasyon.html">Buz Lazer Epilasyon</a></li>
                                                                           <li><a href="hizmetler/bolgesel-incelme.html">Bölgesel İncelme</a></li>
                                                                           <li><a href="hizmetler/ipek-kirpik.html">İpek Kirpik</a></li>

                                   </ul>
                                </li>
                                <li>
                                  <a href="index.html#">{{__('language.fiyatlar')}}</a>
                                   <ul class="nav-dropdown">
                                                                             <li><a href="kategori/cilt-bakimlari.html">Cilt Bakımları</a></li>
                                                                             <li><a href="kategori/kas-kirpik-tirnak.html">Kaş & Kirpik & Tırnak</a></li>
                                                                             <li><a href="kategori/aytac.html">Aytaç</a></li>

                                   </ul>
                                </li>
                                <li>
                                   <a href="index.html#">{{__('language.sayfalar')}}</a>
                                   <ul class="nav-dropdown">
                                                                           <li><a href="hakkimizda.html">Hakkımızda</a></li>

                                   </ul>
                                </li>
                                <li>
                                  <a href="yazilar.html">{{__('language.yazilar')}}</a>
                                </li>
                                <li>
                                  <a href="iletisim.html">{{__('language.iletisim')}}</a>
                                </li>

                                  <?php $defaultLocale = config('app.locale'); ?>





                                   @if($language=\App\Models\Language::all())
                               @foreach($language as $languages)
                               <li>
                               <div>

                                 <a  href="{{route('lang',['locale'=>$languages->language_name])}}">

                                   {{$languages->language_name}}
                                 </a>
                               </div>
                                 </li>
                               @endforeach
                               @endif
                                 </div>


                             </ul>
                          </div>
                       </nav>
                    </div>

                 </div>

              </header>

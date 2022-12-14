@extends('layouts.app')

@section('content')

<section class="beautypress-welcome-section beautypress-welcome-section-v1 welcome-height-calc-minus">
   <div class="beautypress-welcome-slider-wraper">
      <div class="beautypress-welcome-slider owl-carousel">


        <div class="beautypress-welcome-slider-item content-left beautypress-bg" style="background-image: url({{asset('assets')}}/images/slider2.jpg);">
            <div class="container">
               <div class="beautypress-welcome-content-group">
                  <div class="beautypress-welcome-container">
                     <div class="beautypress-welcome-wraper">
                        <h2 class="color-pink">{{__('language.yirmiyillik')}}{{__('language.tecrube')}}</h2>
                        <h3 class="color-purple">{{__('language.profesyonelciltbakimi')}}</h3>
                        <p class="color-black">{{__('language.banner1text')}}</p>
                        <div class="beautypress-btn-wraper">
                          <a href="hakkimizda.html" class="xs-btn bg-color-pink round-btn box-shadow-btn">{{__('language.hakkimizda')}} <span></span></a>
                           <a href="index.html#" class="xs-btn bg-color-purple round-btn box-shadow-btn">{{__('language.hizmetlerimiz')}} <span></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
                 <div class="beautypress-welcome-slider-item content-left beautypress-bg" style="background-image:url({{asset('assets')}}/images/slider1.png);">
            <div class="container">
               <div class="beautypress-welcome-content-group">
                  <div class="beautypress-welcome-container">
                     <div class="beautypress-welcome-wraper">
                       <h2 class="color-pink">{{__('language.yirmiyillik')}}{{__('language.tecrube')}}</h2>
                       <h3 class="color-purple">{{__('language.oksijenbakimi')}}</h3>
                        <p class="color-black">{{__('language.bannertext1')}}</p>
                        <div class="beautypress-btn-wraper">
                          <a href="iletisim.html" class="xs-btn bg-color-pink round-btn box-shadow-btn">{{__('language.bizeulasin')}} <span></span></a>
                          <a href="index.html#" class="xs-btn bg-color-purple round-btn box-shadow-btn">{{__('language.hizmetlerimiz')}} <span></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>


      </div>
   </div>
</section>
<section class="beautypress-about-section section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="beautypress-new-about-text-gruop">
               <div class="beautypress-sub-heading beautypress-watermark-title">
                 <h2 data-title="20+">+{{__('language.yirmiyillik')}} <br>{{__('language.profesyoneltecrube')}}</h2>
               </div>
               <span class="beautypress-gradient-separetor"></span>
               <p>{{__('language.text1')}}</p>
               <div class="beautypress-btn-wraper">
                  <a href="iletisim.html" class="xs-btn round-btn box-shadow-btn bg-color-purple">
                    {{__('language.bizeulasin')}}
                  <span></span>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="beautypress-new-about-img-wraper">
               <div class="beautypress-new-about-img-group">
                  <div class="beautypress-new-single-about-img-group">
                     <div class="beautypress-new-single-about-img ">
                        <div class="beautypress-3d-project-card">
                          <img src="{{asset('assets')}}/images/i1.webp" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="beautypress-new-single-about-img-group">
                     <div class="beautypress-new-single-about-img beautypress-3d">
                        <div class="beautypress-3d-project-card">
                           <img src="{{asset('assets')}}/images/i3.jpg" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="beautypress-new-about-img-group">
                  <div class="beautypress-new-single-about-img-group">
                     <div class="beautypress-new-single-about-img beautypress-3d">
                        <div class="beautypress-3d-project-card">
                           <img src="{{asset('assets')}}/images/i2.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="beautypress-new-single-about-img-group">
                     <div class="beautypress-new-single-about-img beautypress-3d">
                        <div class="beautypress-3d-project-card">
                           <img src="{{asset('assets')}}/images/i4.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="beautypress-simple-text-with-img-section bg-color-gray">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xl-6 col-lg-6">
            <div class='twentytwenty-container beautypress-before-after'>
               <img src="{{asset('assets')}}/images/i5.png" alt="">
               <img src="{{asset('assets')}}/images/i5.png" alt="">
            </div>
         </div>
         <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="beautypress-simple-text beautypress-version-2">
               <div class="beautypress-big-sub-heading">
                  <h2>Harika</h2>
                  <h3>Leke Bak??m??</h3>
               </div>
               <div class="beautypress-simple-text-content">
                  <p>Cilt ??ok g????l?? bir yap??da olmas??na kar????n zaman??n ve d???? etkenlerin y??prat??c?? etkisi kar????s??nda hassasla????r ve olumsuz etkenlere kar???? savunmas??z kal??r. </p>
               </div>
               <div class="beautypress-spilit-container">
                  <div class="beautypress-icon-with-text">
                     <div class="beautypress-svg-ico">
                        <img src="{{asset('assets')}}/images/i7.svg" alt="">
                     </div>
                     <h3>Kal??c?? Makyaj</h3>
                     <p>Hizmetlerimiz ile daima makyajl?? gibi bir g??r??n??m.</p>
                  </div>
                  <div class="beautypress-icon-with-text">
                     <div class="beautypress-svg-ico">
                        <img src="{{asset('assets')}}/images/i8.svg" alt="">
                     </div>
                     <h3>El Bak??m??</h3>
                     <p>Kusursuz ve harika eller art??k hayal de??il.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="beautypress-vedio-section-with-text section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="beautypress-video-side-text">
               <div class="beautypress-big-sub-heading">
                  <h2>Ac??s??z uygulama</h2>
                  <h3>Buz Lazer Epilasyon</h3>
               </div>
               <p>Buz Epilasyon, en i?? bitirici ve en konforlu son teknoloji epilasyon y??ntemlerinden biridir. K??l k??k??ndeki farkl?? yap??lar?? hedef alan ve farkl?? dalga boylar??na sahip y??ntem, istenmeyen k??llar i??in kesin ????z??md??r.</p>
               <div class="beautypress-simple-iocn-list beautypress-version-2">
                  <ul>
                     <li><i class="fa fa-check"></i>Ac??s??z</li>
                     <li><i class="fa fa-check"></i>Buz Lazer</li>
                     <li><i class="fa fa-check"></i>%100 ????z??m</li>
                  </ul>
               </div>
               <div class="beautypress-btn-wraper">
                  <a href="iletisim.html" class="xs-btn bg-color-purple round-btn box-shadow-btn">Bize Ula????n <span></span></a>
                  <a href="hakkimizda.html" class="xs-btn round-btn bg-color-pink box-shadow-btn">Hakk??m??zda <span></span></a>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="beautypress-3d">
               <div class="beautypress-3d-project-card">
                  <img src="{{asset('assets')}}/images/i6.jpg" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="beautypress-booking-section beautypress-bg beautypress-padding-bottom parallax-bg" data-parallax="scroll" data-image-src="img/get_appoinment.jpg">
   <div class="container">
      <div class="beautypress-section-headinig">
         <h2>Kusursuzluk i??in</h2>
         <h3>Bize Ula????n</h3>
      </div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="beautypress-booking-text-wraper">
               <div class="beautypress-booking-content-text beautypress-border beautypress-version-3">
                  <div class="beautypress-booking-text">
                     <h2>Bize Ula????n</h2>
                     <h3>Randevu Al??n</h3>
                     <div >
                        <p>Klini??imizden randevu almak i??in diledi??iniz hizmet sayfas??n??n detay??nda yer alan bilgi edinme formunu kullanabilirsiniz, l??tfen size d??n???? yapabilmemiz i??in do??ru bilgiler ile formu doldurunuz.</p>
                     </div>
                     <ul>
                        <li>Pazartesi-Cuma : 8:00 - 06:00</li>
                        <li>Cumartes : 10:00 - 10:00</li>
                        <li>Pazar: Kapal??</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="beautypress-booking-form-wraper">
               <form action="iletisim.html" method="POST" id="beautypress-booking-form">
                  <input type="hidden" name="action" value="send_appointment_form" />

                  <div class="beautypress-personal-information">
                     <h2>??leti??im Formu</h2>
                     <div class="row">
                 <div class="col-lg-4 col-md-6">
                  <div class="form-group">
                     <input type="text" name="name" id="name" class="form-control" required data-error="L??tfen ad soyad yaz??n??z" placeholder="Ad Soyad" required>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="form-group">
                     <input type="email" name="email" id="email" class="form-control" required data-error="L??tfen e-posta adresi yaz??n??z" placeholder="E-Posta" required>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-12">
                  <div class="form-group">
                     <input type="text" name="telephone" id="phone_number" required data-error="L??tfen telefon numaras?? yaz??n??z" class="form-control" placeholder="Telefon" required>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-12">
                  <div class="form-group">
                     <input type="text" name="subject" id="phone_number" required data-error="L??tfen mesaj ba??l?????? yaz??n??z" class="form-control" placeholder="Mesaj Ba??l??????" required>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-12">
                  <div class="form-group">
                     <textarea name="message" class="form-control" id="message" rows="6" required data-error="L??tfen mesaj i??eri??i yaz??n??z" placeholder="Mesaj ????eri??i" required></textarea>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>

                                      <div class="form-group col-md-12">
                      <div class="g-recaptcha" data-sitekey="6LfxE4YbAAAAAKCL_eXQGLtb_FeSRbmlPZXlo7Cx"></div>
                    </div>
                  </div>
                     <div class="form-group button-group">
                        <input type="submit" name="submit" value="G??nder" id="beautypress-submit">
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="beautypress-call-to-action-section parallax-bg beautypress-bg" data-parallax="scroll" data-image-src="img/call-to-action.jpg">
   <div class="container">
      <div class="beautypress-call-to-action-content">
         <div class="beautypress-content-headinig">
                <h2>G??zelligi Ertelemeyin</h2>
            <h3>Hemen ??leti??ime Ge??in</h3>
         </div>
         <a href="hakkimizda.html" class="xs-btn round-btn box-shadow-btn bg-color-purple">Bize Ula????n <span></span></a>
      </div>
   </div>
</section>
<section class="beautypress-team-section beautypress-padding-bottom">
   <div class="container">
      <div class="beautypress-section-headinig">
         <h2>Harikalar Yarat??yoruz</h2>
         <h3>Uzman Ekibimiz</h3>
      </div>
      <div class="row">

             <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
            <div class="beautypress-single-team beautypress-pink-overlay">
               <img src="{{asset('assets')}}/images/i10.webp" alt="">
               <div class="beautypress-team-content">
                  <div class="beautypress-team-person-details">
                     <h3>Zeynep S.</h3>
                     <h4>Cilt Uzman??</h4>
                  </div>
                  <div class="beautypress-team-person-socail-details">
                     <ul class="beautypress-social-list">
                        <br>
                        <br>
                    </ul>
                  </div>
               </div>
            </div>
         </div>
             <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
            <div class="beautypress-single-team beautypress-pink-overlay">
               <img src="{{asset('assets')}}/images/i11.jpg" alt="">
               <div class="beautypress-team-content">
                  <div class="beautypress-team-person-details">
                     <h3>Ayla ??.</h3>
                     <h4>Lazer Uzman??</h4>
                  </div>
                  <div class="beautypress-team-person-socail-details">
                     <ul class="beautypress-social-list">
                        <br>
                        <br>
                    </ul>
                  </div>
               </div>
            </div>
         </div>
             <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
            <div class="beautypress-single-team beautypress-pink-overlay">
               <img src="{{asset('assets')}}/images/i12.webp" alt="">
               <div class="beautypress-team-content">
                  <div class="beautypress-team-person-details">
                     <h3>Pelin Y.</h3>
                     <h4>Makyaj Uzman??</h4>
                  </div>
                  <div class="beautypress-team-person-socail-details">
                     <ul class="beautypress-social-list">
                        <br>
                        <br>
                    </ul>
                  </div>
               </div>
            </div>
         </div>


      </div>
   </div>
   <div class="beautypress-icon-bg"></div>
   <div class="beautypress-round-icons-bg" style="background-image: url(img/icons-bg-2.png.html);"></div>
</section>
<section class="beautypress-newsfeed-section beautypress-padding-bottom bg-color-gray">
   <div class="container">
      <div class="beautypress-section-headinig">
         <h2>Bilgi Edinin</h2>
         <h3>Yaz??lar</h3>
      </div>
      <div class="row">


         <div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
            <div class="beautypress-single-newsletter">
               <div class="beautypress-newsfeed-header beautypress-purple-overlay beautypress-light-overlay">
                  <img src="{{asset('assets')}}/images/i13.jpg" alt="">
                  <div class="beautypress-newsfeed-header-content">
                     <div class="beautypress-newsfeed-img">
                        <img src="{{asset('assets')}}/images/i13.jpg" alt="">
                        <a href="yazilar/deneme-blog-1.html">Yazar: Y??netici</a>
                     </div>
                     <div class="beautypress-dates">
                        <p class="bg-color-purple"><i class="fa fa-clock-o" aria-hidden="true"></i><strong>2021-09-29 07:09:09</strong></p>
                     </div>
                  </div>
               </div>
               <div class="beautypress-newsfeed-footer">
                  <a href="yazilar/deneme-blog-1.html">Deneme Blog 1</a>
                 <a href="yazilar/deneme-blog-1.html" class="xs-btn round-btn box-shadow-btn bg-color-purple" style="color:white;"><center>Yaz??y?? Oku</center></a>
               </div>
            </div>
         </div>

         <div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
            <div class="beautypress-single-newsletter">
               <div class="beautypress-newsfeed-header beautypress-purple-overlay beautypress-light-overlay">
                  <img src="{{asset('assets')}}/images/i13.jpg" alt="">
                  <div class="beautypress-newsfeed-header-content">
                     <div class="beautypress-newsfeed-img">
                        <img src="{{asset('assets')}}/images/i13.jpg" alt="">
                        <a href="yazilar/deneme-blog-2.html">Yazar: Y??netici</a>
                     </div>
                     <div class="beautypress-dates">
                        <p class="bg-color-purple"><i class="fa fa-clock-o" aria-hidden="true"></i><strong>2021-09-29 07:09:13</strong></p>
                     </div>
                  </div>
               </div>
               <div class="beautypress-newsfeed-footer">
                  <a href="yazilar/deneme-blog-2.html">Deneme Blog 2</a>
                 <a href="yazilar/deneme-blog-2.html" class="xs-btn round-btn box-shadow-btn bg-color-purple" style="color:white;"><center>Yaz??y?? Oku</center></a>
               </div>
            </div>
         </div>

         <div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
            <div class="beautypress-single-newsletter">
               <div class="beautypress-newsfeed-header beautypress-purple-overlay beautypress-light-overlay">
                  <img src="{{asset('assets')}}/images/i13.jpg" alt="">
                  <div class="beautypress-newsfeed-header-content">
                     <div class="beautypress-newsfeed-img">
                        <img src="{{asset('assets')}}/images/i13.jpg" alt="">
                        <a href="yazilar/deneme-blog-3.html">Yazar: Y??netici</a>
                     </div>
                     <div class="beautypress-dates">
                        <p class="bg-color-purple"><i class="fa fa-clock-o" aria-hidden="true"></i><strong>2021-09-29 07:09:16</strong></p>
                     </div>
                  </div>
               </div>
               <div class="beautypress-newsfeed-footer">
                  <a href="yazilar/deneme-blog-3.html">Deneme Blog 3</a>
                 <a href="yazilar/deneme-blog-3.html" class="xs-btn round-btn box-shadow-btn bg-color-purple" style="color:white;"><center>Yaz??y?? Oku</center></a>
               </div>
            </div>
         </div>

         <div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
            <div class="beautypress-single-newsletter">
               <div class="beautypress-newsfeed-header beautypress-purple-overlay beautypress-light-overlay">
                  <img src="{{asset('assets')}}/images/i13.jpg" alt="">
                  <div class="beautypress-newsfeed-header-content">
                     <div class="beautypress-newsfeed-img">
                        <img src="{{asset('assets')}}/images/i13.jpg" alt="">
                        <a href="yazilar/deneme-blog.html">Yazar: Y??netici</a>
                     </div>
                     <div class="beautypress-dates">
                        <p class="bg-color-purple"><i class="fa fa-clock-o" aria-hidden="true"></i><strong>2022-09-21 10:57:04</strong></p>
                     </div>
                  </div>
               </div>
               <div class="beautypress-newsfeed-footer">
                  <a href="yazilar/deneme-blog.html">Deneme Blog</a>
                 <a href="yazilar/deneme-blog.html" class="xs-btn round-btn box-shadow-btn bg-color-purple" style="color:white;"><center>Yaz??y?? Oku</center></a>
               </div>
            </div>
         </div>


      </div>
   </div>
</section>


<script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
@endsection

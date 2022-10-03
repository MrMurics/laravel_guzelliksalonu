<!doctype html>

         <html class="no-js" lang="tr">

            <head>
               <meta charset="utf-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <base href="">

              <meta name="viewport" content="width=device-width"/>
              <meta charSet="utf-8"/>
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <title>Guzellik Salonu</title>
              <meta name="keywords" content="">
              <meta name="description" content="">
                            <link rel="shortcut icon" type="image/ico" href="assets/cloud/uploads/6e00846919e6c340023d6f3ad484526c.png.html" />


               <meta name="viewport" content="width=device-width, initial-scale=1">
               <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700%7CNiconne" rel="stylesheet">
               <link rel="icon" type="image/png" href="https://buraktest.enezmeric.com/favicon.ico">
               <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
               <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-datepicker.min.css">
               <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
               <link rel="stylesheet" href="{{asset('assets')}}/css/xs-icon.css">
               <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
               <link rel="stylesheet" href="{{asset('assets')}}/css/themeSwither.css">
               <link rel="stylesheet" href="{{asset('assets')}}/css/isotope.css">
               <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
               <link rel="stylesheet" href="{{asset('assets')}}/css/plugins.css" />
               <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
               <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css" />


               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" >
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" >
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" >


            </head>
            <body>
               <!--[if lt IE 8]>
               <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
               <![endif]-->
               <div id="preloader">
                  <div class="preloader-window left-window"></div>
                  <div class="preloader-window right-window"></div>
                  <div class="preloader-content">
                     <img src="img/prelaoder-logo.png.html" alt="">
                  </div>
                  <div class="spinner-block">
                     <div class="spinner-eff spinner-eff-3">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                        <div class="circle circle-3"></div>
                     </div>
                  </div>
               </div>
               <main class="xs-main-content">

                 @include('partials.menu')
                 @yield('content')
                 @include('partials.footer')



</main>
<script src="{{asset('assets')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('assets')}}/js/plugins.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap-datepicker.min.js"></script>
<script src="{{asset('assets')}}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/js/appear.js"></script>
<script src="{{asset('assets')}}/js/spectragram.min.js"></script>
<script src="{{asset('assets')}}/js/themeSwither.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
</body>
</html>

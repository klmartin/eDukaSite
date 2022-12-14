 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Eduka Taarifa za Duka Lako Mikononi Mwako </title>
        <!-- FAVICON -->
        <link rel="apple-touch-icon" href="{{asset('assets/img/favicon/apple--icon.png')}}">
        <link rel="icon" href="{{asset('assets/img/favicon/favicon.ico')}}">
        <link href=https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/venobox.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/elements.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
         <!-- Toastr -->
        <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
        <link rel="stylesheet" type="text/css" href=" {{asset('themify-icons-font/themify-icons/themify-icons.css')}} ">

    </head>
    <a href="#slider-section" class="scrolltotop homepage-4"><span class="ti-angle-double-up"></span></a>
    <body class="homepage-8">
        
         </div> 
      <!-- HEADER AREA -->
        <header id="sticker" class="header-top homepage-6 headroom">
          <nav class="navbar">
            <div class="container">
              <div class="navbar-header">
                <a href="#"  class="navbar-brand">
                <img src="{{asset('assets/img/logo/logoEduka.png')}}" alt="Bufet"> </a>

                </div>
              <div  id="navigation">
                  <div class="menu-main-menu-container">
                    <ul id="mainmenu" class="nav navbar-nav navbar-right">
                      <li class=" current-menu-has-children"><a href="#slider-section">Mwanzo</a>
                      </li>
                      <li class=""><a href="#about">Kuhusu</a></li>
                      <li class=""><a href="#features">Yaliyomo</a></li>
                      <li class=""><a href="#Pricing">Gharama</a></li>
                      <li class=""><a href="#subscribe-area">Mawasiliano</a></li>
                      <li class=""><a href="https://eduka.co.tz/login/auth/login">Ingia</a></li>
                    </ul>
                </div>
              </div>
            </div>
          </nav>
        </header>

        <section class="homepage-slider-area homepage-6">
            <div class="slider-wreapper-3">
                <div class="slider-single-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content-table">
                                    <div class="slider-content-table-cell">
                                        <div class="slider-content">
                                            <h1 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".50s">Karibu <br> eDuka !</h1>
                                            <p class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".5s">Taarifa za Duka Lako Mikononi Mwako </p>
                                            <a class="download-btn all-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay=".50s" href="https://eduka.co.tz/auth/register">Anza Kutumia Bure</a>
                                        </div>
                                        <div class="video-area-bg wow fadeInUp" data-wow-duration="2s" data-wow-delay=".45s" >
                                            <a class="mfp-iframe video-play-btn venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=feuiWI3Qqig">
                                                </a>
                                            <h4> watch video</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-screen-2 hidden-sm hidden-xs"><img  class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".75s" src="{{asset('assets/img/screen/screen-2.png')}}" alt="place your img"></div>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        <section class="feature-area homepage-6">
            <div class="container">
                <div class="row">
                    @foreach($introduction as $intro)
                        <div class="col-md-4 col-sm-4">
                        <div class="single-feature">
                            <div class="feature-img">
                                <span class=" {{$intro->icon}} "></span>
                            </div>
                            <a href=" {{$intro->link}} "><h2> {{$intro->heading}} </h2></a>
                            <p>{{$intro->description}}</p>
                        </div>
                        </div>

                    @endforeach
                  =
                </div>
            </div>
        </section>
        <section id="about"  class="about-area homepage-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 ">
                        <div class="about-left about-left-2">
                            <img src="{{asset('assets/img/screen/smartmockups_l9aimn91.jpg')}}" alt="place your img" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-right">
                            <h2>Kwanini eDUKA</h2>
                            <p>eDuka ni mfumo wa kisasa unaokidhi kiu ya wafanyabiashara hasa wamiliki kudhibiti biashara zao popote pale walipo. Zifuatazo ni sababu chache zakukufanya utumie eDuka.</p>
                           
                            <div class="about-list">
                                <ul>
                                    <li>Taarifa Za Duka Lako, Mkononi Mwako???. Unaweza Kutumia Kompyuta Au Simu Janja.</li>
                                    <li>Dhibiti Mienendo Ya Biashara Yako.</li>
                                    <li>Ondoa Hofu Ya Uwekezaji</li>
                                    <li>Simamia Muuzaji/Wauzaji Wa Biashara Yako Kiurahisi</li>
                                    <li>Punguza Gharama Za Usimamizi</li>
                                    <li>Endelea Na Shughuli Zako Wakati Ukiongeza Kasi Ya Uwekezaji</li>
                                </ul>
                            </div>
                            <a href="#" class="about-btn homepage-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".20s">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section id="features" class="advance-feature-area homepage-6">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="row ml-20">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-advance">
                                            <span class="ti-star"></span>
                                            <h2>RIPOTI MBALINBALI</h2>
                                            <p>Ukiwa na eDuka unaweza kutengeneza na kuangalia ripoti za aina mbalimbali zinazoweza kukusaidia kuona maendeleo ya biashara yako. Utaweza kutazama ripoti za mauzo, manunuzi, matumizi, na faida.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-advance">
                                            <span class="ti-star"></span>
                                            <h2>MADUKA YOTE PAMOJA</h2>
                                            <p>Kuwa na akaunti moja pekee kutakuwezesha kudhibiti maduka yako yote. Mfumo unakuwezesha kuweka duka zaidi ya moja na kudhibiti taarifa na wafanyakazi wakila duka kwa ufanisi wa hali ya juu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-20">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-advance">
                                            <span class="ti-star"></span>
                                            <h2>RAHISI KUTUMIA</h2>
                                            <p>Baada ya kujisajili mtu yeyote anaweza kutumia mfumo wa eDuka kirahisi bila maelekezo ya ziada au kwa kujiongoza kwa kupakua na kutumia muongozo uliopo katika tovuti yetu. Unaweza pia kuuliza kwakuwasiliana na wataalamu wetu wanaopatikana muda wote.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-advance">
                                            <span class="ti-star"></span>
                                            <h2>NI SALAMA</h2>
                                            <p>Unapokuwa na eDuka ondoa shaka juu ya usalama wa taarifa zako. Ni mfumo salama unaohifadhi taarifa kiusalama na kwa usiri wa hali ya juu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-20">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-advance">
                                            <span class="ti-star"></span>
                                            <h2>UHAKIKA</h2>
                                            <p>Ni mfumo imara na wa uhakika unaoweza kuutumia bila shida yoyote wakati wowote na popote pale utakapokuwepo. Kwa simu janja au kompyuta utapata taarifa za kila siku za maduka yako. Wataalamu wetu wanapatikana muda wote na wanaweza kukusaidia haraka pale unapohitaji msaada.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-advance">
                                            <span class="ti-star"></span>
                                            <h2>TUNAJALI USIRI</h2>
                                            <p>Mfumo umetengenezwa katika namna ya kuweka taarifa zote za duka lako siri na muuzaji ataona bidhaa na bai ya kuuzia tu. Taarifa zote zinabaki siri kwa mmiliki.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-20">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-advance">
                                            <span class="ti-star"></span>
                                            <h2>WADAI NA WADAIWA</h2>
                                            <p>Mfumo unakuwezesha kuwarekodi watu wote wanaokudai kibiashara na wateja wako unawadai pamoja na wadau wako mnaouziana kwa mkopo</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="single-advance">
                                            <span class="ti-star"></span>
                                            <h2>UHASIBU NA MAHESABU YA WAKALA</h2>
                                            <p>Mfumo umetengenezwa kueza kufanya mahesabu ya kiuhasibu kwa kuandaa taarifa fupi za mwenendo wa biashara (Assets & Liabilities). Pia mfumo unakuwezesha kufanya mahesabu ya biashara yako ya wakala kwa kuhakiki float na pesa taslimu kila siku kabla ya kufunga siku.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                          
                        </div>
                    </div>
                </section>
                <section id="screenshots" class="screenshots-area homepage-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading text-center">
                                    <h2>Muonekano Wa Mfumo</h2>
                                    <img src="{{asset('assets/img/section/section-icon.png')}}" alt="place your img">
                                   
                                </div>
                            </div>
                        </div>
                  <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide" style="background-image:url(http://eduka.co.tz/testsite/public/assets/img/screen/softwear-111_8.png)"></div>
                      <div class="swiper-slide" style="background-image:url(http://eduka.co.tz/testsite/public/assets/img/screen/Screenshot_2022-10-19_152215_872x622.png)"></div>
                      <div class="swiper-slide" style="background-image:url(http://eduka.co.tz/testsite/public/assets/img/screen/Screenshot_2022-10-19_151947_872x622.png)"></div>
                    </div>

                    <!--  navigation buttons -->
                    <div class="swper-btn">
                        <button class="icon-prev "><span class="ti-angle-left"></span></button>
                        <button class="icon-next "><span class="ti-angle-right"></span></button>
                    </div>
                </div>
              </div>
            </section>
      
        <!--PRICING-TABLE-AREA-->
        <section id="Pricing" class="pricing-table-area homepage-6">
            <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-heading text-center" style="margin-bottom: 0;">
                    <h2>Gharama Za Kutumia</h2>
                    <img src="{{asset('assets/img/section/section-icon.png')}}" alt="place your img">
                    <!-- <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p> -->
                </div>
              </div>
            </div>
 
            <!--BLOCK ROW START-->
            <div class="" id="generic_price_table">
                <div class="container">
                    <div class="row">
                <div class="col-md-4">
                
                  <!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                              <!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>KITONGA</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">  
                                <span class="price">
                                    <span class="sign">TSh</span>
                                    <span class="currency">75,750</span>
                                    <span class="cent">.00</span>
                                    <span class="month">/YR</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                          <ul>
                              <li><span>Msaada</span> wa kiufundi wa haraka</li>
                                <li><span>Tumia</span> mtandaoni bure</li>
                                <li><span>Dhibiti</span> mauzo na wafanyakazi</li>
                                <li><span>Uza</span> ukiwa mtandaoni</li>
                                <br>
                                <br>
                                <br>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                          <a class="" href="">Sign up</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
                
                <div class="col-md-4">
                
                  <!--PRICE CONTENT START-->
                    <div class="generic_content active clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                              <!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>ZIGO</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">  
                                <span class="price">
                                    <span class="sign">TSh</span>
                                    <span class="currency">100,000</span>
                                    <span class="cent">.00</span>
                                    <span class="month">/YR</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                          <ul>
                              <li><span>Msaada</span> wakati wote 24/7</li>
                                <li><span>Ongeza</span> maduka na wauzaji bila kikomo</li>
                                <li><span>Angalia</span> na pakua ripoti</li>
                                <li><span>Uza</span> Host Domain</li>
                                <li><span>Uza na hifadhi</span> taarifa bila mtandao</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                          <a class="" href="">Sign up</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
                <div class="col-md-4">
                
                  <!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                              <!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>KUBWA LAO</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">  
                                <span class="price">
                                    <span class="sign">TSh</span>
                                    <span class="currency">485,000</span>
                                    <span class="cent">.00</span>
                                    <span class="month">/YR</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                          <ul>
                              <li><span>Tumia</span>bila mtandao</li>
                                <li><span>Uza na hifadhi</span>taarifa bila mtandao</li>
                                <li><span>Ongeza</span> maduka na wauzaji bila kikomo </li>
                                <li><span>Taarifa</span> zinabaki kwenye Kompyuta Yako</li>
                                <li><span>Lipia</span> mara moja</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                          <a class="" href="">Sign up</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
            </div>  
                </div>
            </div>
            <!--//BLOCK ROW END-->
            </div>
        </section>

        <!--PRICING-TABLE-AREA  END-->

         <!-- subscription area start -->
        <section id="subscribe-area">
            <div class="container">
                <div class="subscribe-wrapper homepage-6">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div id="Contact" class="subscribe-text">
                                <h2>Kupokea Taarifa Zetu</h2>
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-12">
                            <div class="subscribe-box">
                                <form action=" {{route('subscribe')}} " method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
                                    <input type="email" value="" name="email" class="email" id="mce-EMAIL" placeholder="Weka Barua Pepe Yako" required>
                                    <div aria-hidden="true">
                                        <input type="text" name="b_e44c1f194bec93e238615469e_f6f826e769" tabindex="-1" value="">
                                    </div>
                                    <input type="submit" value="OK" name="subscribe" id="mc-embedded-subscribe" class="mc-button">
                                    <div id="subscribe-result">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          <!-- CONTACT SECTION -->
        <section class="footer-bg homepage-6">
        <div id="contact-section" class="gray-bg">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row">
                            <div class="col-sm-5">
                                <div class="contact-form-area">
                                    <h2 class="text-capitalize">Tuandikie</h2>
                                    <form id="digita-contact-form" action="{{ route('contact-mail')}} " method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" required class="form-control" id="Name" name="bizname" placeholder="Jina la Biashara/Lako*">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" required class="form-control" id="Email" name="email" placeholder="Barua Pepe*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required class="form-control" id="Website" name="phoneno" placeholder="Namba ya Simu">
                                        </div>
                                        <div class="form-group">
                                            <textarea id="Message" required class="form-control" rows="3" name="message" placeholder="Andika Ujumbe*"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-blue"><img src="{{asset('assets/img/icons/send-icon.png')}}" alt="place your img"></button>
                                        <p class="contact-send-message"></p>
                                    </form>
                                </div>
                            </div>
                        <div class="col-sm-7">
                            <div class="google-map">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /CONTACT SECTION -->

            <div class="address-area">
                <div class="container">
                    <div class="address-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 ">
                                <div class="single-address">
                                    <div class="address-icon-bg">
                                         <span class="ti-headphone-alt"></span>
                                    </div>
                                    <p class="single-contact-info"><a href="tel:255693361989">+255693361989,</a></p>
                                    <p class="single-contact-info"><a href="tel:255745624754">+255745624754,</a></p>
                                    <p class="single-contact-info"><a href="tel:255737872416">+255737872416,</a></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 ">
                                <div class="single-address">
                                    <div class="address-icon-bg">
                                    <span class="ti-pin2"></span>
                                    </div>
                                    <p>Osterbay, Dar es salaam-Tanzania, Mahenge street 14</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 ">
                                <div class="single-address">
                                    <div class="address-icon-bg">
                                    <span class="ti-email"></span>
                                    </div>
                                    <p class="single-contact-info"><a href="mailto:info@eduka.co.tz">www.eduka.co.tz</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="social-links">
                                <a href="https://mobile.twitter.com/eduka_tz" target="_blank"><span class="ti-twitter-alt"></span></a>
                                <a href="https://www.facebook.com/people/EDUKA-Tanzania/100077209403803/" target="_blank"><span class="ti-facebook"></span></a>
                                <a href="https://www.instagram.com/eduka_tz/" target="_blank"><span class="ti-instagram"></span></a>
                                <a href="https://www.youtube.com/channel/UCcVJ3q-2zP3CfnlPKCNWP_A" target="_blank"><span class="ti-youtube"></span></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <p class="copy-rights">Copyright @ 2022 <a href="#">eDuka </a>all right resurved.</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        @if(session('error'))
        <script>
          Toast.fire({
            icon: 'success',
            title: "{{session('error')}}"
          })  
        </script>
        
        @endif
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6iKLVzr34W23jAZDT3HlrElOHfK6IH_w"></script>
        <script src="{{asset('assets/js/venobox.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/headroom.js')}}"></script>
        <script src="{{asset('assets/js/swiper.js')}}"></script>
        <script src="{{asset('assets/js/map.js')}}"></script>
        <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>

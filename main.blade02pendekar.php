<?php
use App\Models\Setting;

$setting = Setting::first();
?>
<!DOCTYPE html>
<html lang="id-ID">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>{{ $setting->nama_web }}: Situs Daftar Judi Online Slot Games Terbaik 2023</title>
    <meta name="description"
        content="{{ $setting->nama_web }} merupakan agen judi slot online terpercaya dengan provider games slot terlengkap. Jaminan berapapun kemenangan pasti dibayar." />
    <meta name="keywords"
        content="{{ $setting->nama_web }}, login {{ $setting->nama_web }}, daftar {{ $setting->nama_web }}, rtp {{ $setting->nama_web }}, {{ $setting->nama_web }}, slot online, judi online." />
    <meta name="twitter:title" content="{{ $setting->nama_web }}: Situs Daftar Judi Online Slot Games Terbaik 2023">
    <meta name="twitter:description"
        content="{{ $setting->nama_web }} merupakan agen judi slot online terpercaya dengan provider games slot terlengkap. Jaminan berapapun kemenangan pasti dibayar.">
    <meta property="og:title" content="{{ $setting->nama_web }}: Situs Daftar Judi Online Slot Games Terbaik 2023">
    <meta property="og:description"
        content="{{ $setting->nama_web }} merupakan agen judi slot online terpercaya dengan provider games slot terlengkap. Jaminan berapapun kemenangan pasti dibayar.">
    <meta name="robots" content="INDEX, FOLLOW">
    <meta name="Content-Type" content="text/html">
    <meta name="twitter:card" content="summary">
    <meta name="og:type" content="website">
    <meta name="author" content="{{ $setting->nama_web }}">
    <meta property="og:image" content="{{ asset('/image/63fb0e7474b24_banerr1-01.png') }}">

    <link rel="icon" href="{{ asset('/storage/logo/'.$setting->logo) }}" type="image/gif">

    <meta property="og:site_name" content="{{ $setting->nama_web }}">
    <meta name="twitter:site" content="{{ $setting->nama_web }}">
    <meta name="twitter:image" content="{{ asset('/image/63fb0e7474b24_banerr1-01.png') }}">
    <meta property="og:image:alt" content="{{ $setting->nama_web }}">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta property="og:url" content="index.html">
    <link rel="canonical" href="{{ URL::to('/') }}" />

    <!-- Google Analytics -->

    <meta name="google-site-verification" content="M7gylAu2J-RHGmtf75lF1xc5ApBGJDG9WozY2hwy0-U" />

    <!-- Google Analytics -->

    <div style="position: fixed; bottom: 270px; left: 8px; z-index: 10; opacity: 0.98;"><a href="https://pendekar88st.biz.id/public/storage/logo/QR-CILOK002.jpg"
            target="_blank" rel="noopener"><img src="{{ asset('/image/QRIS-BLUE.gif') }}"
                alt="LUCKY SPIN {{ $setting->nama_web }}" width="60" height="55"></a></div>

    <div style="position: fixed; bottom: 200px; left: 8px; z-index: 10; opacity: 0.98;"><a href="https://rtpdemoslot.live/"
            target="_blank" rel="noopener"><img src="{{ asset('/image/6379da62a1229_RTP_Geo138.gif') }}"
                alt="RTP {{ $setting->nama_web }}" width="55" height="55"></a></div>


    <div style="position: fixed; bottom: 125px; left: 0px; z-index: 10; opacity: 0.98;"><a href="https://api.whatsapp.com/send/?phone={{ $setting->wa}}&text&type=phone_number&app_absent=0"
            target="_blank" rel="noopener"><img class="wabutton" src="{{ asset('/image/wa.gif') }}" alt="Chat W.a"
                width="70" height="70"></a></div>


    <div style="position: fixed; bottom: 70px; left: 8px; z-index: 10; opacity: 0.98;"><a href="https://t.me/{{ $setting->tele}}"
            target="_blank" rel="noopener"><img class="wabutton" src=" {{ asset('/image/tele.gif') }}" alt="Chat Tele"
                width="50" height="50"></a></div>

    <meta charset="utf-8">

    <meta name="csrf-token" content="dU4nr3xiTxFrQjyAStwrVhbk8pq9VALo3PyK4r6H">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <!-- jQuery -->
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <?php
        //prepare nav color argb
        $nav_color = isset($setting->nav_color) ? $setting->nav_color : '#181733';
        list($nav_r, $nav_g, $nav_b) = sscanf($nav_color, "#%02x%02x%02x");
        $nav_trans = isset($setting->nav_color_trans) ? $setting->nav_color_trans / 100 : 1;
    ?>
    <!-- Custom CSS From DB Setting -->
    <style>
        .top-bar .inner-header, #r-side-bar, .profile-head .container-box .title, .profile-head .container
        /* warna active data */
        ,.side-nav-items>.nav-item>a.active, .nav-item-content{
            background-color: rgba(<?= $nav_r.','.$nav_g.','.$nav_b.','.$nav_trans ?>) !important;
        }

        .btn-login-css{
            background-color: <?= isset($setting->nav_login) ? $setting->nav_login : '#1e1d40' ?> !important;
        }
        .btn-login2-css{
            background-color: <?= isset($setting->nav_login_2) ? $setting->nav_login_2 : '#1e1d40' ?> !important;
        }
        
        .menu-bottom .navbar-inverse, .nav-content, .wallet-bal, .text-left-w
        /* uncomment jika mau warna sama */
        /* ,.side-nav-items>.nav-item>a.active, .side-nav-items>.nav-item>a.active */
        {
            background-color: <?= isset($setting->nav_color_2) ? $setting->nav_color_2 : '#871737' ?> !important;
        }

        .scroll-game .scroller, .tittle-wrapper, .u-section-title, .url-box, .btn-login-css, .btn-login2-css, .wallet-bal{
            color: <?= isset($setting->txt_color) ? $setting->txt_color : '#871737' ?> !important;
        }

        body{
            <?php
            if(isset($setting->bg_color_single)){
                if($setting->bg_color_single == 1){
                    ?>
                    background-color: <?= isset($setting->bg_color) ? $setting->bg_color : '#471525'?> !important;
                    <?php
                    }else{
                    ?>
                    background-image: linear-gradient(90deg, <?= isset($setting->bg_color) ? $setting->bg_color : '#471525'?> , <?= isset($setting->bg_color_2) ? $setting->bg_color_2 : '#13162f'?> ) !important;
                    <?php
                    }
            }
            ?>
        }

        /* navbar background slot games type */
        .mobile .scroll-wrapper[_home] .slider-content{
            background: rgba(255,2255,255, 0.5) !important;
        }
    </style>
    <link rel="preload" href=" {{ asset('/font/icomoon8c13.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('/font/style.mine67d.css') }}" media="print" onload="this.media='all'">


    <link rel="stylesheet" href="{{ asset('/css/swiper.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/app-mobile0e90.css') }}?v1.1">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/customcb40.css') }}">
    <script src="{{ asset('/js/sweet_alert2.min.js') }}"></script>


    <link rel="stylesheet" href="{{ asset('/css/jquery-ui.css') }}">
    <script src="{{ asset('/js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.ui.touch-punch.min.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="mobile">
    <div class="full-container layout">

        @include('layouts.sidenav')

        @php
        $setting = Setting::first();
        @endphp

        <div class="main-content" id="mainContent">


            <div class="backdrop" id="mainContentContainer">

                <div class="top-bar">
                    <div class="inner-header flex-row ">

                        <button id="btnToggleSideNav" class="btn btn-link">
                            <i class="icon-bars"></i>
                        </button>
                        <a href="{{ URL::to('/') }}" title="" class="logo">
                                <?php 
                                
                                // file mp4 check
                                if(substr($setting->logo, strlen($setting->logo) - 3 ) == 'mp4'){
                                    ?>
                                    <video width="auto" height="40" autoplay loop muted>
                                    <source src="{{ asset('/public/storage/logo/'.$setting->logo) }}" type="video/mp4" />
                                    </video>
                                    <?php
                                }else{
                                    ?>
                                    <img class="img-fluid" alt="{{ $setting->nama_web }}" src="{{ asset('/public/storage/logo/'.$setting->logo) }}" />
                                    <?php
                                }
                                ?>    
                        </a>

                        <a id="btnToggleRSideNav">
                            <i class="icon-user-o"></i>

                        </a>
                    </div>
                </div>


                @if($setting->maintenance_mode == 0)

                @yield('content')
          
                <div class="mobilesite-footer">
                    <div class="container">
                        <style media="screen">
                            .left-custom-livechat-code {
                                bottom: 20px !important;
                            }

                            #chat-widget-container {
                                bottom: 1px !important;
                            }
                        </style>
                        
                        <div class="menu-bottom">
                            <nav class="navbar-inverse navbar-fixed-bottom">
                                <div class=" ">
                                    <div class="flex-row  text-center">
                                        <div class="  footericon-single">
                                            <a href="{{ URL::to('/') }}"><i class="icon-home"></i>
                                                <div>HOME</div>
                                            </a>
                                        </div>



                                        <div class="  footericon-single">
                                            <a href="{{ URL::to('/promo_user') }}"><i class="icon-gift"></i>
                                                <div>PROMOSI</div>
                                            </a>
                                        </div>

                                        @auth
                                            <div class=" footericon-single">
                                                <a href="javascript:void(0);"
                                                    class="text-uppercase togglemenu-trigger footer-funds"
                                                    data-showID="#fundshover_menu"><i class="icon-transfer"></i>
                                                    <div>Dana</div>
                                                </a>
                                                <ul class="list-inline horizontal-hover togglemenu-content"
                                                    id="fundshover_menu">
                                                    <li>
                                                        <a href="{{ URL::to('user-deposit') }}" (click)="closeNav($event);">
                                                            <div class="fs-sm mt-1" i18n>Deposit</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ URL::to('user-withdraw') }}" (click)="closeNav($event);">
                                                            <div class="fs-sm mt-1" i18n>Withdraw</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ URL::to('user-history') }}" (click)="closeNav($event);">
                                                            <div class="fs-sm mt-1" i18n="@History">Pernyataan &nbsp;
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=" footericon-single">
                                                <a href="{{ URL::to('memo') }}" style="position:relative;"><i
                                                        class="icon-mail_outline"></i>
                                                    <div>MEMO</div>

                                                    <div class="mail_icon" style="display:none;">
                                                        0
                                                    </div>

                                                </a>
                                            </div>
                                        @endauth




                                        <div class=" footericon-single" style="position: relative">
                                            <a href="javascript:void(0)" class="text-uppercase togglemenu-trigger"
                                                data-showID="#livechathover_menu"><i class="icon-chat1"></i>
                                                <div>LIVE CHAT</div>
                                            </a>
                                            <ul class="list-inline vertical-hover togglemenu-content"
                                                id="livechathover_menu">
                                                <li>
                                                <a href="javascript:void(0)" onclick="openLiveChat('https://direct.lc.chat/15573681/' , '')"><i class="icon-chat1"></i></a>
                                                </li>

                                                <li>
                                                    <a target="_blank" href="https://api.whatsapp.com/send/?phone={{ $setting->wa}}&text&type=phone_number&app_absent=0"><i class="icon-whatsapp"></i></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://t.me/{{ $setting->tele}}"><i class="icon-telegram"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </nav>
                        </div>


                        
                        <button class="btn btn-link" id="btn-wrap--goToTop" onclick="topFunction()">
                            <i class="i-collapse icon-chevron-thin-up"></i>
                        </button>
                        <script type="text/javascript">
                            $(".togglemenu-trigger").click(function() {
                                var currentToggle = $(this).attr("data-showID");
                                if ($(currentToggle).hasClass("show")) {
                                    $(currentToggle).removeClass("show");
                                } else {
                                    $(".togglemenu-content").removeClass("show");
                                    $(currentToggle).addClass("show");
                                }

                            });
                        </script>
                    </div>
                </div>
                @else
                    @include('layouts.maintenance')
                @endif
                            
            </div>
        </div>
        @include('layouts.sidebar')

    </div>


    <!--loading modal -->
    <div class="nifty-modal fade-in-scale" id="loading--layout" style="z-index:1000001;"
        data-isnotcloseoverlay="true">
        <div class="md-content">
            <div class='md-body'>

                <div class="loader-b large"></div>
            </div>
        </div>
    </div>
    <div class='md-overlay' style="z-index:1000000;"></div>
    <!--END loading modal -->

    <!-- APK download ||Transfer Wallet  modal start-->
    <div class="nifty-modal slide-in-bottom downloadapk-modal" id="apk-modal">
        <div class="md-content">
            <div class="modal-header">
                <button class="pull-right md-close"><i class="icon-x fs-lg"></i></button>
                <h3 id="downloadgame-title"></h3>
            </div>
            <div class="md-body">
                <!--region Transfer Wallet Menu -->
                <div class="row no-gutters" id="trans_to_game_menu__game-modal">
                    <form action="#" method="post" id="tw_transfer_form" class="tw_transfer_form">
                        <input type="hidden" name="_token" value="dU4nr3xiTxFrQjyAStwrVhbk8pq9VALo3PyK4r6H">
                        <div class="form-group">
                            <label for="mainwallet_amount">From Main Wallet</label>
                            <input type="text" class="form-control" readonly name="mainwallet_amount"
                                id="mainwallet_amount" value="" />

                        </div>
                        <div class="text-center">
                            <span class="vertical"><i class="icon-arrow-long-right"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label for="mainwallet_amount">Transfer to <span id="gamename"></span>
                                    Wallet</label>
                                <div class="form-group">

                                    <div class="customrange-slider">
                                        <div id="slider" overflow-scroll="false"
                                            class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                            <span tabindex="0"
                                                class="ui-slider-handle ui-corner-all ui-state-default"
                                                style="left: 0%;"></span>
                                            <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"
                                                style="width: 0%;"></div>
                                        </div>
                                        <div class="decrease-btn cusbtn">
                                            <div id="tw_decrease_btn"> <span class="minus-icon custom-icon">-</span>
                                            </div>

                                            <div class="minmax-label">Min</div>
                                            <div class="minmax-value">
                                                5000
                                            </div>
                                        </div>
                                        <div class="increase-btn cusbtn">
                                            <div id="tw_increase_btn">
                                                <span class="plus-icon custom-icon">+</span>
                                            </div>

                                            <div class="minmax-label">Max</div>
                                            <div class="minmax-value" id="maxSliderApk"></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                                    <div class="form-group">
                                        <input type="text" readonly class="form-control" name="transfer_amount"
                                            id="transfer_amount" placeholder="0.00" value="00.00" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary" value="SUBMIT" />
                        </div>
                    </form>
                </div>
                <!--endregion Transfer Wallet Menu -->

                <div class="row no-gutters">
                    <div class="col-xs-6 text-center">
                        <a href="#" id="launchurl" class="url-link" target="_blank">
                            <img class="img-fluid" src="{{ asset('/image/log_html5.png') }}" alt="play-in-browser">
                            <div class="download-caption text-center">
                                Play now in your browser
                            </div>
                            <div class="download-linkbtn text-center">
                                <img class="img-fluid" src="{{ asset('/image/btn_playnow.png') }}"
                                    alt="play-now-in-browser">
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a href="#" id="downloadurl" class="url-link">
                            <img class="img-fluid" src=" {{ asset('/image/logo_android.png') }}" alt="Download-Apk">
                            <div class="download-caption text-center">
                                Download <br> Now
                            </div>
                            <div class="download-linkbtn text-center">
                                <img class="img-fluid" src="{{ asset('/image/btn_dwld.png') }}"
                                    alt="play-now-in-browser">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-wrapper nifty-modal fade-in-scale" id="live-draw-modal" data-isnotcloseoverlay="true">
        <div class="md-content">
            <div class='md-body'>
                <div class="modal-header">
                    <h4 class="modal-title">Live Draw</h4>
                    <button class="btn btn-link pull-left " id="btn-close--live-draw-modal"> <i
                            class="icon icon-close"></i> </button>
                </div>

                <div class="modal-body">
                    <div id='live_draw_table'>

                    </div>
                    <div id='img_details'>
                        <img src="#" class="draw_img" id='draw_img'>
                        <div class="details">

                            <p class="tickte_id">undian berikutnya: <span id='ticket_id'></span></p>
                        </div>

                        <div class="close_btn_section">
                            <button class="btn btn-close"
                                id='img--section-closebtn'onclick="closeImageSection()">Kembali</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>
    <!-- APK download modal end-->
    <!-- <div class="fancybox-container fancybox-is-open fancybox-can-swipe" role="dialog" tabindex="-1" id="fancybox-container-1" style="transition-duration: 366ms;"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><span data-fancybox-index="">1</span>&nbsp;/&nbsp;<span data-fancybox-count="">1</span></div><div class="fancybox-toolbar"><button data-fancybox-zoom="" class="fancybox-button fancybox-button--zoom" title="Zoom" disabled=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.7 17.3l-3-3a5.9 5.9 0 0 0-.6-7.6 5.9 5.9 0 0 0-8.4 0 5.9 5.9 0 0 0 0 8.4 5.9 5.9 0 0 0 7.7.7l3 3a1 1 0 0 0 1.3 0c.4-.5.4-1 0-1.5zM8.1 13.8a4 4 0 0 1 0-5.7 4 4 0 0 1 5.7 0 4 4 0 0 1 0 5.7 4 4 0 0 1-5.7 0z"></path></svg></button><button data-fancybox-play="" class="fancybox-button fancybox-button--play" title="Start slideshow" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 5.4v13.2l11-6.6z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.33 5.75h2.2v12.5h-2.2V5.75zm5.15 0h2.2v12.5h-2.2V5.75z"></path></svg></button><button data-fancybox-thumbs="" class="fancybox-button fancybox-button--thumbs" title="Thumbnails" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.59 14.59h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76H5.65V5.65z"></path></svg></button><button data-fancybox-close="" class="fancybox-button fancybox-button--close" title="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"></path></svg></button></div><div class="fancybox-navigation"><button data-fancybox-prev="" class="fancybox-button fancybox-button--arrow_left" title="Previous" disabled=""><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.28 15.7l-1.34 1.37L5 12l4.94-5.07 1.34 1.38-2.68 2.72H19v1.94H8.6z"></path></svg></div></button><button data-fancybox-next="" class="fancybox-button fancybox-button--arrow_right" title="Next" disabled=""><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.4 12.97l-2.68 2.72 1.34 1.38L19 12l-4.94-5.07-1.34 1.38 2.68 2.72H5v1.94z"></path></svg></div></button></div><div class="fancybox-stage"><div class="fancybox-slide fancybox-slide--html fancybox-slide--current fancybox-slide--complete" style=""><div class="fancybox-content" style=""><a href="https://b2slt88.co" class="d-inline-block"><img src="https://files.sitestatic.net/promotion_banners/DWBm6qGyB8jAkkbzHsWI9PDjtEx5llsFiVjv3tAO.jpg" class="img-fluid"></a><button type="button" data-fancybox-close="" class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button></div></div></div><div class="fancybox-caption"><div class="fancybox-caption__body"></div></div></div></div> -->

    <script type="text/javascript">
        $(document).ready(function() {
            $("#mainContentContainer").click(function() {
                $("#sideNav").removeClass("navContentOpen");
                $("#sideNav").removeClass("open");
                $("#mainContent").removeClass("navContentOpen");
                $("#mainContent").removeClass("sideNavOpen");
                $("#mainContent").removeClass("rightSideBarOpen");
                $("#r-side-bar").removeClass("open");
            });

            $(document).on('click', '#btn-close--login-modal', function(event) {
                event.preventDefault();
                event.stopPropagation();
                $('#r-side-bar').removeClass('open');
                $("#mainContent").removeClass("rightSideBarOpen");
                return false;

            });

            $(document).on('click', '.btn-collapse-balances', function() {
                if (!$('#other-game-bals').is(':visible')) {
                    $('#other-game-bals').slideDown();
                    window.getAllGameBal();
                } else {
                    $('#other-game-bals').slideUp();
                }
                return false;
            });
        });
    </script>

    <script type="text/javascript" src="{{ asset('/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/additional-methods.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.min.css') }}">


    <script type="text/javascript" src="{{ asset('/js/jquery.fancybox.min.js') }}"></script>
    <script>
        window.isAuth = '1' ? false : true;
        window.currencyCode = 'IDR';
        window.lang = "id";
        window.agentCode = '{{ $setting->nama_web }}';
        window.sweetAlert = function(msg, type, title, showCancelBtn) {
            //check CF error
            var dateNow = "2023-05-26 16:46:59";

            if (msg.indexOf('cloudflare') >= 0) {
                msg = transMsgs.cfTimeout + ' (error time: ' + dateNow + ')';
                title = " ";
            }
            return Swal.fire({
                title: !title ? "Warning" : title,
                text: msg,
                icon: !type ? "error" : type,
                buttons: {
                    confirm: {
                        text: "OK",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: true
                    },
                    cancel: {
                        text: "Cancel",
                        value: false,
                        visible: showCancelBtn ? true : false,
                        className: "",
                        closeModal: true,
                    }
                }
            });
        }
        window.name = !window.name ? "parent" + Date.now() + Math.floor(Math.random() * 100000000) : window.name;
        window.formatNumber = function(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/[^0-9\-]/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }
        window.convertToNumber = function(value) {

            if (!value) {
                return 0;
            }
            if (value.indexOf(".") >= 0) {
                var decimal_pos = value.indexOf(".");
                value = value.substring(0, decimal_pos);

            }
            var number = value.replace(/[^0-9.-]+/g, "");
            if (isNaN(number)) {
                number = 0;
            }
            return number;
        }

        window.formatCurrency = function(value) {
            const symbol = ""; //"$"
            // get input value
            var input_val = value;

            if (typeof value !== 'string') {
                var input_val = value.toString();
            }
            if (input_val === "") {
                return;
            }

            var original_len = input_val.length;


            if (input_val.indexOf(".") >= 0) {

                var decimal_pos = input_val.indexOf(".");
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos + 1);

                left_side = formatNumber(left_side);

                right_side += "00";

                right_side = right_side.substring(0, 2);

                input_val = symbol + left_side + "." + right_side;

            } else {
                input_val = formatNumber(input_val);
                input_val = symbol + input_val + ".00";;

            }

            return input_val;
        }

        window.prize = 0;
        window.ajax_jackpot = function() {
            // $.ajax({
            //     url: "https://www.geo138.life/getPokerJackpotAmt",
            //     type: 'post',
            //     data: {
            //         _token: $('meta[name=csrf-token]').attr('content')
            //     },
            //     success: function(data) {
            //         prize = (data / 2000.000) * 2000.000;
            //         $('.jackpot_numbers_home').html(
            //             `IDR <span id="jackpot_amount">${ commaSeparateNumber(prize) }</span>`)

            //         //$('.jackpot_numbers_home').html(`IDR ` + commaSeparateNumber(data.prize));
            //     }
            // });
        }

        var newI = 0;
        window.popitup = function(url, gameid) {
            //alert(gameid);
            newwindow = window.open(url, window.agentCode + '_gameWindow' + gameid + newI,
                'toolbar=0,width=1200,height=750');
            newI++;
            if (window.focus) {
                newwindow.focus()
            }
            return false;
        }

        window.popup = function(mylink, windowname) {
            if (!window.focus) return true;
            var href;
            if (typeof(mylink) == 'string')
                href = mylink;
            else
                href = mylink.href;
            window.open(href, windowname, 'width=600,height=800,scrollbars=yes');
            return false;
        }
        window.commaSeparateNumber = function(val, isJP) {
            while (/(\d+)(\d{3})/.test(val.toString())) {

                if (window.currencyCode == 'VND' && isJP) {
                    val = val.toFixed(0);
                } else {
                    val = Number(val).toFixed(2);
                }
                val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
            }
            return val;
        }

        window.getRandomIntInclusive = function(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1)) +
                min; //The maximum is inclusive and the minimum is inclusive
        }

        /*bank acc min and maxlength limitation */
        window.accLength = parseInt("8");
        window.bankAccLength = function(selectedBank, default_minlength, default_maxlength) {
            console.log(selectedBank, default_minlength, default_maxlength);
            var custom_minLength, custom_maxLength;
            if (selectedBank == 'MDR') {
                custom_minLength = 13;
                custom_maxLength = 13;
            } else if (selectedBank == 'BNI' || selectedBank == 'BCA' || selectedBank == 'DMN' || selectedBank ==
                'BSI' || selectedBank == 'BLA') {
                custom_minLength = 10;
                custom_maxLength = 10;
            } else if (selectedBank == 'BRI') {
                custom_minLength = 15;
                custom_maxLength = 15;
            } else if (selectedBank == 'CIMBN' || selectedBank == 'BANKJAGO') {
                custom_minLength = 12;
                custom_maxLength = 12;
            } else {
                custom_minLength = default_minlength;
                custom_maxLength = default_maxlength;
            }

            return {
                'min_len': custom_minLength,
                'max_len': custom_maxLength
            }
        }
        /*bank acc min and maxlength limitation end*/


        $(document).ready(function() {
            //suspend-alert
            // login-alert
            // promo-disabled-alert
            // "maintenance-alert";
            // "comingsoon-alert";
            window.alertLogin = function(e) {
                e.preventDefault();
                sweetAlert(transMsgs.plsLogin);
                return false;
            }

            $(".suspend-alert").click(function(e) {
                e.preventDefault();
                sweetAlert(transMsgs.blockedFrGame);
                return false;
            });

            $(".login-alert").click(function(e) {
                if ($("#login-modal--layout").length && !$('#loginForm').hasClass('js-inline-form')) {
                    $("#login-modal--layout").nifty("show")
                } else {
                    alertLogin(e);
                }

                return false;
            });

            $(".maintenance-alert",).click(function(e) {
                e.preventDefault();
                sweetAlert(transMsgs.gameMaintenance);
                return false;
            });
            
            $(document).on("click", ".maintenance-alert-lock", function(e) {
                e.preventDefault();
                sweetAlert('Game Terkunci, mohon hubungi administrator !');
                return false;
            });

            $(document).on("click", ".maintenance-login-lock", function(e) {
                e.preventDefault();
                sweetAlert('Silakan login untuk akses game');
                return false;
            });

            $(".url-box").click(function(e){
                window.location = $(this).attr('href');
            })

            $(".comingsoon-alert").click(function(e) {
                e.preventDefault();
                sweetAlert(transMsgs.gameComingSoon);
                return false;
            });

            $(".promo-disabled-alert").click(function(e) {
                e.preventDefault();
                sweetAlert(transMsgs.gamePromoBlock);
                return false;
            });



        });


        $("input").focus(function() {
            $("body").addClass("input-focused");
        });
        $("input").focusout(function() {
            $("body").removeClass("input-focused");
        });

        // var host = window.location.host;
        // var curr_host = "www.geo138.life";
        // var agent_url = "index.html";

        // console.log(host, curr_host, agent_url, agent_url.includes(host));

        // if (host != curr_host && !agent_url.includes(host)) {

        //     location.href = "index.html";
        // }
    </script>

    <script type="text/javascript" src="{{ asset('/js/app-mobile1b5e.js') }}"></script>

    <!--Language Option Modal -->
    <div class="nifty-modal slide-in-bottom " id="langModal-mobile">
        <div class="md-content">
            <div class="md-body">
                <div class="wrap language">
                    <div class="title">Region and Language</div>
                    <table class="table-borderless">

                        <tr>
                            <td class="country">Indonesia</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="flag-wrap">
                                <div class="circle-id"></div>
                            </td>
                            <td class="i  ">
                                <a href="javascript:void(0)" onclick='change_lang("id")'> indonesian</a>
                            </td>

                            <td class="i b-line ">
                                <a href="javascript:void(0)" onclick='change_lang("en")'> Thailand</a>
                            </td>
                            

                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>
    <!--END Language Option Modal -->
    <style>
        body.mobile{
            max-width: 100%;
            overflow-x: hidden;
        }
    </style>
    <script>
        $('.btn-refresh-captcha').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var $captchaImg = $(this).parent().find('img');
            var curCapUrl = $captchaImg.attr("data-url");
            var url = curCapUrl + Date.now() + Math.floor(Math.random() * 100000000);
            $captchaImg.attr("src", url);

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            if (window.location.href.indexOf('reLogin=yes') >= 0 && !window.isAuth) {
                $("#btnToggleRSideNav").trigger('click');
            }

            transMsgs.gameMaintenance = "{{ $setting->msg_popup }}";
        });
    </script>
    <?php echo $setting->live_chat ?>
</body>

</html>

<php
include('session.php');
if (isset($_SESSION['user'])) {
    $user = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '" . $_SESSION['user'] . "'") or die(mysqli_error());
    $u = mysqli_fetch_array($user);
    $users = $u['user'];
    $userid = $u['user'];
    $id_user = $u['cuid'];
    $userID = $u['cuid'];
    $token_id = isset($u['token_id']) ? $u['token_id'] : false;
    $level = isset($u['level']) ? $u['level'] : false;
    $sql_balance = mysqli_query($conn, "SELECT * FROM `tb_balance` WHERE userID = '$userID'") or die(mysqli_error());
    $sb = mysqli_fetch_array($sql_balance);
?>
    <!DOCTYPE html>
    <html lang=id>

    <head>
        <meta charset=utf-8>
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <title><?php echo $s0['instansi']; ?> # Ini Baru Daftar Situs Slot Gacor Hari Ini Gampang Menang juga Pragmatic Play Terpercaya</title>
        <meta content="<?php echo $s0['instansi']; ?> ialah situs slot gacor hari ini anti rungkat yang mempunyai tingkat kemenangan gampang menang tertinggi di Indonesia dengan menghadirkan info bocoran rtp pragmatic play slot gacor 98% setiap harinya." name=description>
        <meta content="slot online,slot gacor,<?php echo $s0['instansi']; ?>,slot,slot gacor hari ini,slot anti rungkat,pragmatic play,pragmatic play slot" name=keywords>
        <meta content="<?php echo $urlweb; ?>" property=og:url>
        <meta content=<?php echo $s0['instansi']; ?> property=og:site_name>
        <meta content="<?php echo $s0['instansi']; ?> # Ini Baru Daftar Situs Slot Gacor Hari Ini Gampang Menang juga Pragmatic Play Terpercaya " property=og:title>
        <meta content="<?php echo $s0['instansi']; ?> ialah situs slot gacor hari ini anti rungkat yang mempunyai tingkat kemenangan gampang menang tertinggi di Indonesia dengan menghadirkan info bocoran rtp pragmatic play slot gacor 98% setiap harinya." property=og:description>
        <meta content=DarkGold name=theme-color>
        <meta content=id-ID name=language>
        <meta content=Id name=geo.region>
        <meta content=Jakarta name=geo.placename>
        <meta content=website name=categories>
        <meta content=PotOkUCpk4FUu7LLDdU_8XY40VS1FbD4SpKTf35lroE name=google-site-verification>
        <link rel=preload href=fonts/glyphicons-halflings-regular.woff as=font type=font/woff crossorigin>
        <link rel=preload href=fonts/Lato-Regular.woff2 as=font type=font/woff2 crossorigin>
        <link rel=preload href=fonts/lato-bold.woff2 as=font type=font/woff2 crossorigin>
        <link rel=preload href=fonts/Open24DisplaySt.woff2 as=font type=font/woff2 crossorigin>
        <link href="<?php echo $urlweb; ?>" rel=canonical>
        <link href="<?php echo $urlweb; ?>/upload/<?php echo $s0['image']; ?>" rel="shortcut icon" type=image/x-icon>
        <link href="Content/nexus-beta-mobile-css?v=ORQNs0mPgZTqh3Vt8DgC8ajjBD-n9OwI6NdJy9nkh1U1" rel=stylesheet>
        <link href="Content/Wallet/nexus-beta-mobile-deposit-css?v=DVtRuhwXFsgfnuLLmYBX4aAiVmi_zrUjIke9UKOVd2I1" rel=stylesheet>
        <link href="Content/Theme/<?php echo $css; ?>?v=yPq61HaIMWwhY21p4CokAeA_T81BerBf0furl_kUdeY1" rel=stylesheet>
        <link rel=amphtml href="https://ampchecker.com/msite-jt7/">
        <link rel=icon type=image/png sizes=192x192 href="<?php echo $urlweb; ?>/upload/<?php echo $s0['image']; ?>">
        <link rel="shortcut icon" href="<?php echo $urlweb; ?>/upload/<?php echo $s0['image']; ?>">
        <meta name=google-site-verification content=t_i94RJSxAvzSWE8go2fu2xmsRZ6pV0ZNHPW2fnulss>
        <meta name=google-site-verification content=DNBm4SDtxZVPukvrRjzRf20MW1QNDPl9BXDPLfmMMjk>
        <meta name=google-site-verification content=UJe2GoLL1vln1lc-4Pt9MzhFSpRBH7t2c8zr-HVNWqI>
        <meta name=google-site-verification content=h0U3nB0fYwdV8hmAe49qxNu36n2IiC7ZmTwgsztU4Ws>
        <meta name=google-site-verification content=tCRcT7WYpO8byrsK3oojiNgiqVdspyo02Q3njCyRjrc>
        <meta name=google-site-verification content=pwa8noLN-LY-sDLrr6rP_E87aTNHclO9l6nVkuIQ2sY>
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1135333377625875');
            fbq('track', 'PageView');
        </script><noscript><img height=1 width=1 style=display:none src="https://www.facebook.com/tr?id=1135333377625875&amp;ev=PageView&amp;noscript=1"></noscript>
        <style>
            @import url("https://fonts.googleapis.com/css?family=Raleway:900&display=swap");

            :root {
                --accent-color: #1130a5;
                --base-color: #8921f1
            }

            .hamburg {
                position: absolute;
                width: 40px;
                height: auto;
                padding: .6rem;
                background-color: var(--base-color);
                border-radius: 10px;
                z-index: 80;
                box-shadow: 0 0 12px 1px rgba(233 228 222 / 70%)
            }

            .ard-sosmed {
                display: block;
                cursor: pointer;
                position: fixed;
                bottom: 12%;
                left: 10px;
                font-family: "Times New Roman", sans-serif;
                z-index: 79
            }

            .ard-sosmed ul {
                margin: 0;
                padding: 0
            }

            .ard-sosmed ul li {
                position: absolute;
                text-decoration: none;
                list-style: none;
                transform: translate(0, 0) rotate(360deg);
                transition: all .5s ease;
                opacity: 0
            }

            .ard-sosmed.open ul li:nth-child(1) {
                transform: translateY(-130px);
                transition-delay: .20s;
                opacity: 1
            }

            .ard-sosmed.open ul li:nth-child(2) {
                transform: translate(0px, -65px);
                transition-delay: .16s;
                opacity: 1
            }

            .ard-sosmed.open ul li:nth-child(3) {
                transform: translate(0px, -195px);
                transition-delay: .12s;
                opacity: 1
            }

            .ard-sosmed.open ul li:nth-child(4) {
                transform: translate(0px, -260px);
                transition-delay: .08s;
                opacity: 1
            }

            .ard-sosmed.open ul li:nth-child(5) {
                transform: translate(0px, -325px);
                transition-delay: .04s;
                opacity: 1
            }

            .ard-sosmed.open ul li:nth-child(6) {
                transform: translate(0px, -390px);
                transition-delay: 0s;
                opacity: 1
            }

            .ard-sosmed ul li a img {
                width: 100%;
                height: auto
            }

            .ard-sosmed ul li a {
                display: flex;
                width: 55px;
                height: 55px;
                border: solid 2px var(--base-color);
                border-radius: 10px;
                justify-content: center;
                align-items: center;
                background-color: #000000
            }

            .bar1,
            .bar2,
            .bar3 {
                width: 80%;
                height: 5px;
                background-color: #ffffff;
                margin: 6px auto;
                transition: .4s;
                position: relative;
                transform: translateY(-1px)
            }

            .open .bar1 {
                transform: translate(0, 10px) rotate(-225deg)
            }

            .open .bar2 {
                opacity: 0;
                transform: translate(0, -6px) rotate(-225deg)
            }

            .open .bar3 {
                transform: translate(0, -12px) rotate(-315deg)
            }

            .ard-sosmed ul li div {
                position: absolute;
                transition: all .3s ease;
                opacity: 0;
                scale: .1;
                font-family: "Times New Roman", sans-serif;
                font-size: large;
                background: rgba(0, 0, 0, 1);
                color: #ffffff;
                text-align: center;
                text-wrap: nowrap;
                border: 1px solid var(--base-color);
                padding: 5px;
                border-radius: 10px
            }

            .ard-sosmed ul li:hover div {
                opacity: 1;
                scale: 1
            }

            .ard-sosmed ul li:nth-child(1) div {
                transform: translateY(-130px)
            }

            .ard-sosmed ul li:nth-child(1):hover div {
                transform: translate(70px, -40px)
            }

            .ard-sosmed ul li:nth-child(2) div {
                transform: translateY(-130px)
            }

            .ard-sosmed ul li:nth-child(2):hover div {
                transform: translate(70px, -40px)
            }

            .ard-sosmed ul li:nth-child(3) div {
                transform: translateY(-130px)
            }

            .ard-sosmed ul li:nth-child(3):hover div {
                transform: translate(70px, -40px)
            }

            .ard-sosmed ul li:nth-child(4) div {
                transform: translateY(-130px)
            }

            .ard-sosmed ul li:nth-child(4):hover div {
                transform: translate(70px, -40px)
            }

            .ard-sosmed ul li:nth-child(5) div {
                transform: translateY(-130px)
            }

            .ard-sosmed ul li:nth-child(5):hover div {
                transform: translate(70px, -40px)
            }

            .ard-sosmed ul li:nth-child(6) div {
                transform: translateY(-130px)
            }

            .ard-sosmed ul li:nth-child(6):hover div {
                transform: translate(70px, -40px)
            }

            .attention {
                position: relative;
                -webkit-clip-path: polygon(0% 0, 100% 0, 100% 75%, 49% 75%, 22% 100%, 22% 75%, 0% 75%);
                clip-path: polygon(0% 0, 100% 0, 100% 75%, 49% 75%, 22% 100%, 22% 75%, 0% 75%);
                width: 80px;
                text-wrap: nowrap;
                height: 30px;
                margin-bottom: 5px;
                left: 15px;
                background-color: var(--base-color);
                cursor: default;
                color: #ffffff;
                display: flex;
                justify-content: center;
                align-items: center;
                padding-bottom: 10px;
                opacity: 0
            }

            .whore {
                animation: flicker .6s infinite;

                &:hover {
                    animation-duration: 10s
                }
            }

            @keyframes flicker {
                0% {
                    opacity: 1
                }

                50% {
                    opacity: 0
                }

                100% {
                    opacity: 1
                }
            }

            @media screen and (max-width:600px) {
                .ard-sosmed {
                    bottom: 110px;
                    left: 5px
                }
            }

            @media only screen and (max-width:600px) {
                .LcButton {
                    position: fixed;
                    bottom: 55px;
                    right: 14px;
                    z-index: 100;
                    width: 50px;
                    height: 50px
                }
            }

            @media only screen and (min-width:601px) {
                .LcButton {
                    display: none
                }
            }
        </style>
        <div class=ard-sosmed>
            <div class="attention whore">Tap Me!</div>
            <div class=hamburg onclick=ardFunction()>
                <div class=bar1></div>
                <div class=bar2></div>
                <div class=bar3></div>
            </div>
            <?php require_once('../assets/popup.txt'); ?>
        </div>
        <script>
            const ard = document.querySelector('.ard-sosmed');
            const attention_whore = document.querySelector('.attention.whore');

            function ardFunction() {
                ard.classList.toggle("open");
                attention_whore.classList.remove("whore");
            }
        </script>

    <body data-route=deposit style="--expand-icon-src:url(//nx-cdn.nx2wl.com/Images/icons/expand.gif?v=20240430);--collapse-icon-src:url(//nx-cdn.nx2wl.com/Images/icons/collapse.gif?v=20240430);--play-icon-src:url(//nx-cdn.nx2wl.com/Images/icons/play.png?v=20240430);--desktop-icon-src:url(//nx-cdn.nx2wl.com/Images/icons/desktop-white.png?v=20240430);--jquery-ui-444444-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_444444_256x240.png?v=20240430);--jquery-ui-555555-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_555555_256x240.png?v=20240430);--jquery-ui-ffffff-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_ffffff_256x240.png?v=20240430);--jquery-ui-777620-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_777620_256x240.png?v=20240430);--jquery-ui-cc0000-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_cc0000_256x240.png?v=20240430);--jquery-ui-777777-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_777777_256x240.png?v=20240430)"><input type=checkbox id=site_menu_trigger_input class=site-menu-trigger-input>
        <div class=inner-body-container id=inner_body_container>
            <div class=inner-body id=scroll_container>
                <div class=download-apk-notification id=download_apk_notification><img alt=Android height=50 loading=lazy src="//nx-cdn.nx2wl.com/Images/icons/android.svg?v=20240430" width=50>
                    <p><b> <?php echo $s0['instansi']; ?> Aplikasi Mobile </b> <br> <span id=dont_show_again_today>Jangan tampilkan lagi hari ini</span></p><a href=https://apk-bank.s3.ap-southeast-1.amazonaws.com/jt7.apk class=download-btn>Unduh</a> <span class=close id=close_download_apk_notification>×</span>
                </div>
                <header class=site-header><a href=/m class=logo> <img alt=Logo loading=lazy src="<?php echo $urlweb; ?>/upload/<?php echo $s0['image']; ?>"> </a>
                    <div class=header-info>
                        <div class=unread-announcements-button data-announcement-count=1 id=unread_announcements_button><a href=spin> <img loading=lazy src="//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/layout/bell.svg?v=20240430"> </a></div>
                    </div><label class=site-menu-trigger for=site_menu_trigger_input data-new-notification=false> <i data-icon=menu></i> </label>
                </header>
                <div class="standard-form-container deposit-container">
                    <div class=container>
                        <div class=row>
                            <div class=col-sm-12>
                                <div class=tab-menu-background-container>
                                    <div class=tab-menu-container><a href="deposit" data-active=true> <i data-icon=deposit style="--image-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/tabs/deposit.svg?v=20240430);--active-image-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/tabs/deposit-active.svg?v=20240430)"></i> Deposit </a> <a href="withdrawal" data-active=false> <i data-icon=withdrawal style="--image-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/tabs/withdrawal.svg?v=20240430);--active-image-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/tabs/withdrawal-active.svg?v=20240430)"></i> Penarikan </a></div>
                                </div>
                                <?php
                                error_reporting(0);
                                if (!empty($_GET['notif'])) {
                                    if ($_GET['notif'] == 1) {
                                        echo '
                          <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <div class="alert-icon">
                              <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="alert-message">
                              <span><strong>Warning!</strong> Minimal Deposit adalah IDR 50.000</span>
                            </div>
                          </div>
                        ';
                                    }
                                    if ($_GET['notif'] == 2) {
                                        echo '
                          <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <div class="alert-icon">
                              <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="alert-message">
                              <span><strong>Warning!</strong> Anda masih memiliki Permintaan Deposit yang Belum Diproses. Silahkan Tunggu Hingga Proses Deposit Sebelumnya Selesai.</span>
                            </div>
                          </div>
                        ';
                                    }
                                    if ($_GET['notif'] == 3) {
                                        echo '
                          <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <div class="alert-icon">
                              <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="alert-message">
                              <span><strong>Sukses!</strong> Deposit Berhasil Di Kirim</span>
                            </div>
                          </div>
                        ';
                                    }
                                }
                                ?>

                                <form action="<?php echo $urlweb; ?>/function/deposit.php" enctype="multipart/form-data" method="post">
                                    <div class="form-group deposit-form-group">
                                        <label for="Amount">Jumlah</label>
                                        <div class="deposit-amount-container">
                                            <div data-section="depo-amount">
                                                <div data-field="amount">
                                                    <input autocomplete="off" class="form-control deposit_amount_input input-validation-error" name="nominal" type="text" required>
                                                </div>
                                                <span id="fast_deposit_copy" data-field="copy" style="display:none;">
                                                    <button class="copy-bank-account-button  form-control" id="copy_bank_account_ref_button" type="button">
                                                        <span class="glyphicon glyphicon-file"></span>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="fast-deposit-note" id="fast_deposit_note" style="display:none;">Transfer sesuai dengan nominal yang tertera pada jumlah yang harus di transfer</div>
                                        </div>
                                    </div>
                                    <div class="deposit-form-group">
                                        <div class="form-group">
                                            <label for="FromAccount">Akun Asal</label>
                                            <select class="form-control valid" name="pay_from" required>
                                                <option value="<?php echo $sbs['cuid']; ?>"><?php echo $sbs['akun']; ?> - <?php echo $sbs['no_rek']; ?> - <?php echo $sbs['pemilik']; ?></option>
                                            </select>
                                            <input class="form-control" type="hidden" name="userID" value="<?php echo $u['cuid']; ?>" readonly>
                                            <span class="standard-required-message">Pilih Akun Asal untuk disetor</span>
                                        </div>
                                    </div>
                                    <div class="deposit-form-group">
                                        <div class="form-group">
                                            <div class="to-account-label-container">
                                                <label for="ToAccount">Akun Tujuan</label>
                                                <span id="view_all_available_banks">Lihat Semua</span>
                                            </div>

                                            <select name="metode" class="form-control valid" required>
                                                <?php
                                                $sql_bank = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = 1 AND status = 1 ORDER BY cuid ASC") or die(mysqli_error());
                                                $no = 0;
                                                while ($sb = mysqli_fetch_array($sql_bank)) {
                                                    $no++;
                                                ?>
                                                    <option value="<?php echo $sb['cuid']; ?>">
                                                        <?php echo $sb['akun']; ?> - <?php echo $sb['no_rek']; ?> - <?php echo $sb['pemilik']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <div class="to-account-label-container">
                                                <label for="ToAccount"></label>
                                                <span id="view_all_available_banks"></span>
                                            </div>
                                            
                                            <span class="standard-required-message">Pilih bank perusahaan untuk disetor</span>
                                        </div>
                                        <div class="form-group">
                                            <div class="to-account-label-container">
                                                <label for="ToAccount">Pilihan Bonus</label>
                                                <span id="view_all_available_banks">Lihat Semua</span>
                                            </div>
                                            <select class="form-control valid" data-val="true">
                                                <?php
                                                $sql_bank = mysqli_query($conn, "SELECT * FROM `tb_depositpromosi` WHERE id ORDER BY id ASC") or die(mysqli_error());
                                                $no = 0;
                                                while ($sk = mysqli_fetch_array($sql_bank)) {
                                                    $no++;
                                                ?>
                                                    <option>
                                                        <?php echo $sk['prom'] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <span class="standard-required-message">Pilih bank perusahaan untuk disetor</span>
                                        </div>

                                    </div>
                                    <div class="form-group deposit-form-group">
                                        <label for="ReferenceNumber">Kode Unik</label>
                                        <input autocomplete="off" class="form-control valid" data-val="true" data-val-regex="The field ReferenceNumber must match the regular expression '^[0-9a-zA-Z ]*$'." data-val-regex-pattern="^[0-9a-zA-Z ]*$" id="ReferenceNumber" name="ReferenceNumber" type="text" value="">
                                        <span class="standard-required-message">Karakter khusus tidak diperbolehkan</span>
                                    </div><br><div class="formulir-title"><svg class="svg-inline--fa fa-wallet" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wallet" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H80c-8.8 0-16-7.2-16-16s7.2-16 16-16H448c17.7 0 32-14.3 32-32s-14.3-32-32-32H64zM416 272a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path></svg><!-- <i class="fas fa-wallet"></i> Font Awesome fontawesome.com --> | INFORMASI</div><br><div class="info-content"><p>PERHATIKAN DENGAN SEKSAMA NOMOR REKENING TUJUAN SEBELUM MELAKUKAN TRANSFER !</p><p>Minimal deposit : Rp.50.000<br>Mohon Melakukan Deposit Menggunakan Kode Unik 555<br><br></p></div>
                                    <div class="standard-button-group">
                                        <input type="hidden" name="postID" class="form-control" value="<?php echo $u['cuid']; ?>">
                                        <input type="submit" name="submit" id="notify" class="standard-secondary-button" value="DEPOSIT">
                                    </div>
                                </form>

                                <div id=available_payment_accounts_popup class=available-payment-accounts-popup>
                                    <div id=available_payment_accounts_container class=available-payment-accounts-container data-default-payment-account-icon="//nx-cdn.nx2wl.com/Images/bank-thumbnails/default.webp?v=20240430"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=site-contacts>
                    <div class=container>
                        <div class=row>
                            <div class=col-md-12>
                                <ul class="contact-list">
                                    <li>
                                        <a href="https://api.whatsapp.com/send?phone=<?php echo $s1a['wa']; ?>" target="_blank" rel="noopener nofollow">
                                            <i>
                                                <img loading="lazy" src="//dlmxz0etq5yy6.cloudfront.net/Images/communications/whatsapp.svg?v=20230417-1">
                                            </i>
                                            <?php echo $s1a['wa']; ?>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=container>
                    <div class=row>
                        <div class=col-md-12>
                            <ul class=social-media-list></ul>
                            <ul class=bank-list>
                                <li>
                                    <div data-online=true><img src=https://api2-jt7.imgnxb.com/images//BCA_e1bab23f-dda6-4835-b3ce-d5039f28546c_1710945073757.png width=80 height=40 alt=Bank loading=lazy></div>
                                <li>
                                    <div data-online=true><img src=https://api2-jt7.imgnxb.com/images//BCAANTARBANK_8e8a9c3d-4d54-4eb0-8e71-70b79e2ca9d1_1701269689167.png width=80 height=40 alt=Bank loading=lazy></div>
                                <li>
                                    <div data-online=true><img src=https://api2-jt7.imgnxb.com/images//BNI_3d30334c-d871-46fb-80b3-0fcb12f99b87_1674567526120.png width=80 height=40 alt=Bank loading=lazy></div>
                                <li>
                                    <div data-online=true><img src=https://api2-jt7.imgnxb.com/images//BRI_a458ab91-91a3-49ac-98b3-1bfc5d1966bd_1704366991057.png width=80 height=40 alt=Bank loading=lazy></div>
                                <li>
                                    <div data-online=true><img src=https://api2-jt7.imgnxb.com/images//GOPAY_6d9f75a3-3a2c-4be2-8179-3bbfd755d7cd_1674034768913.png width=80 height=40 alt=Bank loading=lazy></div>
                                <li>
                                    <div data-online=false><img src=https://api2-jt7.imgnxb.com/images//MANDIRI_ec4427ff-2e6e-4657-a2fe-b3702bc15e7c_1710050015357.png width=80 height=40 alt=Bank loading=lazy></div>
                                <li>
                                    <div data-online=true><img src=https://api2-jt7.imgnxb.com/images//OVO_ddd6e876-f366-4b0b-a506-d0e8210c55e9_1674034821373.png width=80 height=40 alt=Bank loading=lazy></div>
                                <li>
                                    <div data-online=true><img src=https://api2-jt7.imgnxb.com/images//TELKOMSEL_708c135d-74c5-482f-9d03-27a5f7035c60_1656937744867.png width=80 height=40 alt=Bank loading=lazy></div>
                                <li>
                                    <div data-online=true><img src=https://api2-jt7.imgnxb.com/images//XL_ea2a82b1-ca96-4eb1-9a52-cf378c6405e7_1637421285767.png width=80 height=40 alt=Bank loading=lazy></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=footer-links-container>
                    <div class=container>
                        <div class=row>
                            <div class=col-md-12>
                                <ul class=footer-links>
                                    <li><a href=/mobile/about-us> Tentang <?php echo $s0['instansi']; ?> </a>
                                    <li><a href=/mobile/responsible-gaming> Responsible Gambling </a>
                                    <li><a href=/mobile/faq> Pusat Bantuan </a>
                                    <li><a href=/mobile/terms-of-use> Syarat dan Ketentuan </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=site-info>
                    <div class=site-description>
                        <div class=container>
                            <div class=row>
                                <div class=col-sm-12>
                                    <h1><?php echo $s0['instansi']; ?> # Ini Baru Daftar Situs Slot Gacor Hari Ini Gampang Menang juga Pragmatic Play Terpercaya</h1>
                                    <p>Situs <a href="https://www.keenland.com/" style=color:#a500e0><b>slot gacor</b></a> banyak bermunculan di era teknologi modern ini, tetapi hanya <?php echo $s0['instansi']; ?> yang dikenal sebagai situs slot gampang menang sehingga dinobatkan yang paling gacor di antara yang lain. Bermain di <?php echo $s0['instansi']; ?> anda bisa meraih jutaan rupiah secara instant di berbagai game slot yang tersedia. Kelengkapan game telah memunculkan ribuan game yang bisa anda mainkan cukup menggunakan 1 akun <?php echo $s0['instansi']; ?>. Di Indonesia, praktek judi slot online telah banyak dan menjamur di semua kalangan karena gampangnya akses hanya dengan menggunakan smartphone yang anda genggam setiap harinya.
                                    <p>Daftar situs <a href="https://www.keenland.com/" style=color:#a500e0><b>slot gacor hari ini</b></a> terpercaya memiliki beberapa keuntungan seperti promosi dan bonus menarik yang dibagikan berkala setiap hari, mingguan dan bulanan. Tidak hanya sampai disana, <?php echo $s0['instansi']; ?> menawarkan hadiah berupa mobil, sepeda motor, iphone dan uang tunai yang bisa langsung anda raih setelah melakukan pendaftaran. Di dukung dengan sistem tercanggih yang bisa menjaga keamanan data para member slot gacor agar nyaman dalam melakukan bettingan. Menurut riset market, <?php echo $s0['instansi']; ?> sangat berambisi menjadi pioner yang bisa menginfluence berbagai situs lainnnya karena terbukti memegang kriteria sebagai situs slot gacor gampang menang di Indoensia.
                                    <p>Menjalin kerja sama lebih dari 10 tahun bersama provider slot <a href="https://www.keenland.com/" style=color:#a500e0><b>pragmatic play</b></a> menjadikan <?php echo $s0['instansi']; ?> mendapatkan hak istimewa di bawah naungan pragmatic. Banyak bonus yang diberikan untuk provider pragmatic play ini dengan total sampai 10 milliar rupiah yang akan dibagikan untuk setiap eventnya. Tidak di pungkiri, pragmatic play slot menjadi provider paling di gandrungi oleh masyarakat.
                                    <h2>Mengenal Istilah dalam Game Slot Gacor Hari Ini Terpercaya <?php echo $s0['instansi']; ?></h2>
                                    <p>Mungkin beberapa dari kalian masih tabu terhadap istilah-istilah slot gacor terpercaya yang biasa digunakan para member <a href="https://www.keenland.com/" style=color:#a500e0><b><?php echo $s0['instansi']; ?></b></a>, untuk itu kami membuat rangkuman istilah yang sering digunakan seperti :
                                    <h3>Slot Gacor</h3>
                                    <p>Slot gacor, merupakan permainan slot online terkini, tengah populer di kalangan pemain Indonesia. Kemenangan maksimal yang sering ditawarkan berkat tingkat RTP lebih tinggi dibanding slot lain, membuat banyak yang lebih suka main di sini. Berpeluang membawa pulang ratusan juta rupiah, slot gacor menjanjikan keuntungan yang lebih besar ketimbang permainan-permainan lainnnya.
                                    <h3>Freespin</h3>
                                    <p>Munculnya 3 scatter pada reels pertama sampai ketiga, dimana akan mengunci jumlah bettingan untuk melakukan freespin sesuai dengan jumlah yang di pilih member.
                                    <h3>Auto Spin</h3>
                                    <p>Sistem canggih dari slot gacor yang memberikan kemudahan spin tanpa harus memencet tombol "spin" dengan jumlah yang ditetapkan oleh member serta meminimalisir animasi slot, fitur ini sangat berguna utuk menghemat waktu.
                                    <h3>Scatter</h3>
                                    <p>Icon yang berbeda di setiap game slot gacor namun scatter merupakan jalan untuk menuju freespin yang dimana anda harus mendapatkan minimal 3 scatter agar bisa mendapatkan freespin murni.
                                    <h3>Maxwin</h3>
                                    <p>Kemenangan yang diberikan maximal oleh pihak game slot gacor kepada para member.
                                    <h3>Progressive Jackpot</h3>
                                    <p>Jackpot yang beragam, dimana anda bisa mendapatkan jackpot major, minor dan mini jackpot di setiap spin.
                                    <h3>Sensational</h3>
                                    <p>Istilah jackpot yang digunakan sebagian game, kata sensastional mirip dengan maxwin yang dimana game slot tersebut memberikan kemenangan bernilai fantastis bagi para member.
                                    <h3>Anti Rungkat</h3>
                                    <p>Arti kata rungkat biasanya merujuk kepada kekalahan yang terlalu sering tanpa adanya jalan keluar ataupun kemenangan dari situs slot gacor tersebut.
                                    <h2>7 Rekomendasi Bocoran Game Slot Gacor Hari Ini Gampang Menang Jackpot dan Sensational</h2>
                                    <p>Anda berniat mendapatkan keuntungan maximal dalam bermain slot gacor? <?php echo $s0['instansi']; ?> memberikan bocoran game <a href="https://www.keenland.com/" style=color:#a500e0><b>slot gacor hari ini</b></a> terbaik untuk dimainkan lengkap bersama rtp slot anti rungkat. Pilihan game slot sudah pasti memiliki RTP slot tertinggi dengan peluang menang jackpot sangat besar, berikut beberapa rekomendasinya :
                                    <ul>
                                        <li>[RTP 99%] Slot Gacor Hari Ini Gates of Olympus
                                        <li>[RTP 98%] Slot Gacor Hari Ini Starlight Princess
                                        <li>[RTP 95%] Slot Gacor Hari Ini Sweet Bonanza
                                        <li>[RTP 97%] Slot Gacor Hari Ini Rujak Bonanza
                                        <li>[RTP 94%] Slot Gacor Hari Ini Koi Gate
                                        <li>[RTP 93%] Slot Gacor Hari Ini Mahjong Ways
                                        <li>[RTP 96%] Slot Gacor Hari Ini 5 Lions Megaways
                                    </ul>
                                    <h2>Keuntungan Ekslusif Bermain Pragmatic Play Slot di <?php echo $s0['instansi']; ?></h2>
                                    <p>Jika anda sudah mengenal game slot online, pastinya sudah tidak asing dengan provider satu ini. Betul sekali, <a href="https://www.keenland.com/" style=color:#a500e0><b>pragmatic play slot</b></a> merupakan provider paling populer dan mempunyai strategi bermain berbeda di setiap gamenya. Berikut beberapa keuntungan yang didapatkan member jika bergabung dengan <?php echo $s0['instansi']; ?> dibawah naungan pragmatic play :
                                    <ol>
                                        <li>Bonus dan Event Besar di Bandingkan Situs Lain
                                        <li>Grafik Berkualitas HD
                                        <li>Informasi Ekslusif Bocoran Slot Gacor Pragmatic Play Terbaru
                                        <li>Info Game Slot Terbaru
                                        <li>Demo Slot Pragmatic Play
                                    </ol>
                                    <h3>Bocoran 5 Slot Pragmatic Play Anti Rungkat di <?php echo $s0['instansi']; ?></h3>
                                    <p>Sudah memiliki sertifikat dan hak khusus dari pragmatic play maka <?php echo $s0['instansi']; ?> mempunyai strategi dengan menaikkan win rate kemenangan bagi para pemain yang bisa anda akses di <a href="https://www.keenland.com/" style=color:#a500e0><b>rtp slot pragmatic</b></a> terupdate dibawah naungan pragmatic play. Tidak dipungkiri poin-poin kelebihan dari situs yang telah bekerja sama dengan provider pragmatic lebih cenderung digandrungi dan bisa dinobatkan sebagai situs slot anti rungkat. Berikut bocoran rahasia khusus untuk anda game slot pragmatic play anti rungkat 2024 bersama dengan rtp nya:
                                    <ol>
                                        <li>Pragmatic Play Slot Anti Rungkat Sweet Bonanza</li>
                                        <ul>
                                            <li>RPT Slot 97%
                                            <li>Jam Gacor 18.00 WIB - 00.00 WIB
                                        </ul>
                                        <li>Pragmatic Play Slot Anti Rungkat Gates of Olympus</li>
                                        <ul>
                                            <li>RPT Slot 98%
                                            <li>Jam Gacor 19.00 WIB - 02.00 WIB
                                        </ul>
                                        <li>Pragmatic Play Slot Anti Rungkat Gates of Gatot Kaca</li>
                                        <ul>
                                            <li>RPT Slot 99.5%
                                            <li>Jam Gacor 14.00 WIB - 20.00 WIB
                                        </ul>
                                        <li>Pragmatic Play Slot Anti Rungkat Rujak Bonanza</li>
                                        <ul>
                                            <li>RPT Slot 98%
                                            <li>Jam Gacor 12.00 WIB - 19.00 WIB
                                        </ul>
                                        <li>Pragmatic Play Slot Anti Rungkat Great Rhino Megaways</li>
                                        <ul>
                                            <li>RPT Slot 99.2%
                                            <li>Jam Gacor 07.00 WIB - 13.00 WIB
                                        </ul>
                                    </ol>
                                    <h3>Bagaimana Cara Untuk Daftar Di Situs Slot <?php echo $s0['instansi']; ?> ?</h3>
                                    <p>Bagi kalian yang tertarik mencoba peruntungan di game judi slot terbaru serta meraih berbagai macam keuntungannya, mendaftar di <a href="https://www.keenland.com/" style=color:#a500e0><b>situs slot gacor</b></a> <?php echo $s0['instansi']; ?> merupakan langkah awal yang perlu diambil. Berikut langkah-langkah cepat dan sederhana untuk mendaftar:
                                    <h4>1. Akses Situs Resmi <?php echo $s0['instansi']; ?></h4>
                                    <p>Kunjungi situs <?php echo $s0['instansi']; ?> melalui browser seperti Google Chrome atau browser lain yang kalian gunakan.
                                    <h4>2. Klik 'Daftar' atau 'Register'</h4>
                                    <p>Temukan dan klik tombol 'Daftar' atau 'Register', yang biasanya terletak di pojok kanan atas halaman situs.
                                    <h4>3. Isi Formulir Pendaftaran</h4>
                                    <p>Isi form yang terdapat di layar smartphone anda menggunakan data pribadi yang benar dan valid.
                                    <h4>4. Verifikasi Akun</h4>
                                    <p>Setelah pengisian formulir, selesaikan proses verifikasi melalui email atau SMS yang dikirimkan oleh tim <?php echo $s0['instansi']; ?>.
                                    <h4>5. Lakukan Deposit</h4>
                                    <p>Aktifkan akun dengan melakukan deposit awal. Deposit ini merupakan langkah penting untuk memulai permainan dan menikmati bonus new member yang ditawarkan.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=copyright>
                        <div class=container>
                            <div class=row>
                                <div class=col-sm-12>©2024 <?php echo $s0['instansi']; ?>. All rights reserved | 18+</div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('../assets/footer-login.txt'); ?>
            </div>
            <?php include('../assets/header-login.txt'); ?>
        </div>
        <div id=popup_modal class="modal popup-modal" role=dialog data-title="" aria-label="Popup Modal">
            <div class=modal-dialog>
                <div class=modal-content style="--desktop-popup-alert-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/desktop/layout/popup/alert.png?v=20240430);;--desktop-popup-notification-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/desktop/layout/popup/notification.png?v=20240430);;--mobile-popup-alert-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/layout/popup/alert.png?v=20240430);;--mobile-popup-notification-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/layout/popup/notification.png?v=20240430);;--event-giveaway-popper-src:url(//nx-cdn.nx2wl.com/Images/giveaway/popper.png?v=20240430)">
                    <div class=modal-header><button type=button class=close data-dismiss=modal aria-label=Close> <span aria-hidden=true>×</span> </button>
                        <h4 class=modal-title id=popup_modal_title></h4>
                    </div>
                    <div class=modal-body id=popup_modal_body></div>
                    <div class=modal-footer><button type=button class="btn btn-primary" data-dismiss=modal id=popup_modal_dismiss_button> OK </button> <button type=button class="btn btn-secondary" data-dismiss=modal id=popup_modal_cancel_button style=display:none> Batal </button> <button type=button class="btn btn-primary" id=popup_modal_confirm_button style=display:none> OK </button></div>
                </div>
            </div>
        </div>
        <script src="bundles/nexus-beta-mobile-js?v=fWvkfkKFuXGmou1ppFB5YTrygolYvsVp73lH7t76cbo1" defer></script>
        <script src="bundles/deposit-page-js?v=6Y2gjiv9BsQlfhTlOJyG2_NvDZehi8rW4SsWFxYkiO41" defer></script>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                initializeDepositPage({
                    platform: 'mobile',
                    currency: 'IDR',
                    paymentType: 'QR',
                    translations: {
                        copied: 'Tersalin',
                        recommended: 'Rekomendasi',
                        instantProcess: 'Proses Instan',
                        others: 'Pembayaran Lainnya (Proses Standar)',
                        adminFee: 'Biaya Admin',
                        addAccount: 'Tambah Akun',
                        lastUsed: 'Terakhir dipakai',
                        registeredPaymentAccounts: 'Akun Pembayaran Terdaftar',
                        toAccount: 'Akun Tujuan'
                    },
                    bankLogoDirPath: '//nx-cdn.nx2wl.com/Images/bank-thumbnails/'
                });
                $('#ui-datepicker-div').appendTo('#deposit_form');
            });
        </script>
    <?php } ?>

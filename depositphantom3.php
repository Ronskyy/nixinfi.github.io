<?php
error_reporting(E_ALL);
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
        <title>
            <?php echo $s0['instansi']; ?> # Ini Baru Daftar Situs Slot Gacor Hari Ini Gampang Menang juga Pragmatic Play Terpercaya</title>
        <meta content="<?php echo $s0['instansi']; ?> ialah situs slot gacor hari ini anti rungkat yang mempunyai tingkat kemenangan gampang menang tertinggi di Indonesia dengan menghadirkan info bocoran rtp pragmatic play slot gacor 98% setiap harinya." name=description>
        <meta content="slot online,slot gacor,<?php echo $s0['instansi']; ?>,slot,slot gacor hari ini,slot anti rungkat,pragmatic play,pragmatic play slot" name=keywords>
        <meta content="<?php echo $urlweb; ?>" property="og:url">
        <meta content=<?php echo $s0[ 'instansi']; ?> property=og:site_name>
        <meta content="<?php echo $s0['instansi']; ?> # Ini Baru Daftar Situs Slot Gacor Hari Ini Gampang Menang juga Pragmatic Play Terpercaya " property=og:title>
        <meta content="<?php echo $s0['instansi']; ?> ialah situs slot gacor hari ini anti rungkat yang mempunyai tingkat kemenangan gampang menang tertinggi di Indonesia dengan menghadirkan info bocoran rtp pragmatic play slot gacor 98% setiap harinya." property=og:description>
        <meta content=DarkGold name=theme-color>
        <meta content=id-ID name=language>
        <meta content=Id name=geo.region>
        <meta content=Jakarta name=geo.placename>
        <meta content=website name=categories>
        <meta content=PotOkUCpk4FUu7LLDdU_8XY40VS1FbD4SpKTf35lroE name=google-site-verification>
        <link rel=preload href=../fonts/glyphicons-halflings-regular.woff as=font type=font/woff crossorigin>
        <link rel=preload href=../fonts/Lato-Regular.woff2 as=font type=font/woff2 crossorigin>
        <link rel=preload href=../fonts/lato-bold.woff2 as=font type=font/woff2 crossorigin>
        <link rel=preload href=../fonts/Open24DisplaySt.woff2 as=font type=font/woff2 crossorigin>
        <link href="<?php echo $urlweb; ?>" rel=canonical>
        <link href="<?php echo $urlweb; ?>/assets/image/<?php echo $s0['image']; ?>" rel="shortcut icon" type=image/x-icon>
        <!--css-->
        <link href="../Content/nexus-beta-mobile-css " rel=stylesheet>
        <link href="../Content/Wallet/nexus-beta-mobile-deposit-css " rel=stylesheet>
        <link href="../Content/Theme/nexus-beta-mobile-dark-red-css " rel=stylesheet>
        <!--end ccss-->
        <link rel=amphtml href="<?php echo $urlweb; ?>">
        <link rel=icon type=image/png sizes=192x192 href="<?php echo $urlweb; ?>/assets/image/<?php echo $s0['image']; ?>">
        <link rel="shortcut icon" href="<?php echo $urlweb; ?>/assets/image/<?php echo $s0['image']; ?>">
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
        <?php include('../assets/body/popup.txt'); ?>

        <body data-route=deposit style="--expand-icon-src:url(//nx-cdn.nx2wl.com/Images/icons/expand.gif?v=20240430);--collapse-icon-src:url(//nx-cdn.nx2wl.com/Images/icons/collapse.gif?v=20240430);--play-icon-src:url(//nx-cdn.nx2wl.com/Images/icons/play.png?v=20240430);--desktop-icon-src:url(//nx-cdn.nx2wl.com/Images/icons/desktop-white.png?v=20240430);--jquery-ui-444444-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_444444_256x240.png?v=20240430);--jquery-ui-555555-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_555555_256x240.png?v=20240430);--jquery-ui-ffffff-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_ffffff_256x240.png?v=20240430);--jquery-ui-777620-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_777620_256x240.png?v=20240430);--jquery-ui-cc0000-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_cc0000_256x240.png?v=20240430);--jquery-ui-777777-src:url(//nx-cdn.nx2wl.com/Images/jquery-ui/ui-icons_777777_256x240.png?v=20240430)"><input type=checkbox id=site_menu_trigger_input class=site-menu-trigger-input>
            <div class=inner-body-container id=inner_body_container>
                <div class=inner-body id=scroll_container>
                    <header class=site-header><a href=/m class=logo>                                                                                                                  <img alt=Logo loading=lazy src="<?php echo $urlweb; ?>/assets/image/<?php echo $s0['image']; ?>">                                                                                                                  </a>
                        <div class=header-info>
                            <div class=unread-announcements-button data-announcement-count=1 id=unread_announcements_button><a href=spin>                                                                                                                  <img loading=lazy src="//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/layout/bell.svg?v=20240430">                                                                                                                  </a></div>
                        </div><label class=site-menu-trigger for=site_menu_trigger_input data-new-notification=false>                                                                                                                  <i data-icon=menu></i>                                                                                                                  </label>
                    </header>
                    <div class="standard-form-container deposit-container">
                        <div class=container>
                            <div class=row>
                                <div class=col-sm-12>
                                    <div class=tab-menu-background-container>
                                        <div class=tab-menu-container><a href="deposit" data-active=true>                                                                                                                  <i data-icon=deposit style="--image-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/tabs/deposit.svg?v=20240430);--active-image-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/tabs/deposit-active.svg?v=20240430)"></i> Deposit </a>                                            <a href="withdrawal" data-active=false>                                                                                                                  <i data-icon=withdrawal style="--image-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/tabs/withdrawal.svg?v=20240430);--active-image-src:url(//nx-cdn.nx2wl.com/Images/nexus-beta/dark-purple/mobile/tabs/withdrawal-active.svg?v=20240430)"></i> Penarikan </a></div>
                                    </div>
                                    <form action="../function/deposit.php" enctype="multipart/form-data" method="post">
                                        <div class="balance-info-container"><a href="/m/account-summary">Riwayat Deposit</a>
                                            <div class="total-balance">
                                                <p>Saldo Saya</p><span>                                                                                                                  <?php echo number_format((float)$sb['active']); ?>                                                                                                                  </span></div>
                                        </div>
                                        <?php
                                        if ($_GET['notif'] ==1) {
                                            echo'
                                        <div class="modal-body" id="popup_modal_body">
                                    <p style="text-align: center;"><img src="QRIS.png" data-filename="download.jpg" style="width: 207.135px;"></p>
<p></p><font>No. ref: #A50T250111_PY4AB47A7F1392E1946

</font>

            <p></p><ul><li style="text-align: left;">1. Minimal tiket QRIS Rp 50.000,-</li><li style="text-align: left;">2. Capture atau Screnshoot QR diatas agar tersimpan di Galery Anda.</li><li style="text-align: left;">3. Buka Aplikasi dompet digital lalu klik tombol bayar dan scan QR diatas dengan ambil gambar dari Galery Anda.</li><li style="text-align: left;">4. Saldo yang masuk akan di potong Rp 706 sebagai biaya penanganan yang sudah&nbsp;di&nbsp;sepakati.</li></ul><p></p></div>' ;} ?>
                                        <hr class="deposit-gap">
                                        <div class="form-group deposit-form-group">
                                            <div class="deposit-qr-label-container"><label for="Amount"> Jumlah <span data-section="asterisk">*</span>                                                                                                                  </label>
                                                <div class="deposit-qr-label-bank-info"><img loading="lazy" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa_u686g-QA29iXVevg1fIHDcjQn9CUCU5iQ&usqp=CAU">
                                                    <div class="bank-info-badge" data-type="instant">Instan</div>
                                                </div>
                                            </div>
                                            <div class="deposit-amount-container">
                                                <div data-section="depo-amount" data-field="amount">
                                                    <input autocomplete="off" class="form-control deposit_amount_input input-validation-error" name="nominal" type="text" required="">
                                                    <span id="fast_deposit_copy" data-field="copy" style="display:none;">
                                                    <button class="copy-bank-account-button  form-control" id="copy_bank_account_ref_button" type="button">
                                                        <span class="glyphicon glyphicon-file"></span>
                                                    </button>
                                                    </span>
                                                </div>
                                                <span style="font-family: LatoWeb; font-size: 16px; background-color: rgb(30, 30, 30);"><font color="#ce0000">Min: 10,000.00 | Max: 10,000,000.00</font></span>
                                            </div>
                                        </div>
                                        <div class="deposit-form-group">
                                            <div class="form-group">
                                                <div class=deposit-form-group>
                                                    <div class=form-group>
                                                        <label for=FromAccount> Akun Asal <span data-section=asterisk>*</span>                                                                                                                  </label>
                                                        <div class=player-account-container>
                                                            <div class=player-account-input><select class="form-control valid" name="pay_from" required>
                                                <option value="<?php echo $sbs['cuid']; ?>"><?php echo $sbs['akun']; ?> - <?php echo $sbs['no_rek']; ?> - <?php echo $sbs['pemilik']; ?></option>
                                            </select> <span class=standard-required-message>Pilih Akun Asal untuk disetor</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="deposit-form-group">
                                            <div class="form-group">
                                                <div class="to-account-label-container"><label for="ToAccount"> Akun Tujuan <span data-section="asterisk">*</span>                                                                                                                  </label></div>
                                                <img src="https://i.imgur.com/bMwtUcB.jpeg" alt="Responsive Image" style="display:block; margin:auto; max-width:100%; height:auto; />
                                                <select name="metode" class="form-control valid" required>
                                                    <option value="1">
                                                        -    QRIS INSTANT DEPOSIT  -                                                    </option>
                                                <?php
                                                error_reporting(E_ALL);
                                                $sql_bank = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = 1 AND status = 1 ORDER BY cuid ASC") or die(mysqli_error($conn));
                                                $no = 0;
                                                while ($sb = mysqli_fetch_array($sql_bank)) {
                                                    $no++;
                                                ?>
                                                
                                                    <option value="<?php echo $sb['cuid']; ?>">
                                                        <?php echo $sb['akun']; ?> - <?php echo $sb['no_rek']; ?> - <?php echo $sb['pemilik']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                                <span class="standard-required-message">Pilih bank perusahaan untuk disetor</span></div>
                                            <div class="deposit-form-group">
                                                <div class=form-group>
                                                    <label for="ToAccount">Pilihan Bonus</label></label><div class=player-account-container><div class=player-account-input>
                                                            <select class="form-control valid" data-val="true">
                                                <?php
                                                error_reporting(E_ALL);
                                                $sql_bank = mysqli_query($conn, "SELECT * FROM `tb_depositpromosi` WHERE id ORDER BY id ASC") or die(mysqli_error($conn));
                                                $no = 0;
                                                while ($sk = mysqli_fetch_array($sql_bank)) {
                                                    $no++;
                                                ?>
                                                    <option>
                                                        <?php echo $sk['prom'] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                                            <span class=standard-required-message>Pilih Akun Asal untuk disetor</span></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="to-account-label-container">
                                                        <label for="ToAccount"></label>

                                                    </div>

                                                    <span class="standard-required-message">Pilih bank perusahaan untuk disetor</span>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <div data-section="input" data-bank-type="bank" class="bank-info" id="bank_info" data-high-priority="false" data-has-qr-code="false">
                                                    <div data-bank-info="actions">
                                                        <div class="admin-fee-container" style="font-family: LatoWeb; font-size: 16px; background-color: rgb(36, 36, 36);"><font color="#9c9c94">Biaya Admin:</font><font color="#ff0000"> IDR 0.00</font></div><div class="admin-fee-container" style="font-family: LatoWeb; font-size: 16px; background-color: rgb(36, 36, 36);"><font color="#9c9c94">KODE UNIK&nbsp;</font><font color="#ff0000">707</font></div>
                                                        <div id="bank_info_logo_footer" style="display: block;"></div><a id="download_qr_code_button" class="download-qr-code-button" download="" style="display: none;">                                                                                                                  <img loading="lazy" src="//d2rzzcn1jnr24x.cloudfront.net/Images/icons/wallet/download.svg?v=20241125"> Unduh </a></div>
                                                    <input id="bank_info_account_no_hidden_input" name="ToAccountNumber" type="hidden" value=""></div><input id="bonus_recid_input" name="BonusRecId" type="hidden"> <input type="hidden" id="deposit_bonus_amount_display">
                                            </div>
                                        </div>

                                        <div class="info-content">
                                            <p>PERHATIKAN DENGAN SEKSAMA NOMOR REKENING TUJUAN SEBELUM MELAKUKAN TRANSFER !</p>
                                            <p>Minimal deposit : Rp.50.000<br>Mohon Melakukan Deposit Menggunakan Kode Unik 707<br><br></p>
                                        </div>
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
                                            <a href="https://api.whatsapp.com/send?phone=<?php echo $social_data['wa']; ?>" target="_blank" rel="noopener nofollow">
                                            <i>
                                                <img loading="lazy" src="//dlmxz0etq5yy6.cloudfront.net/Images/communications/whatsapp.svg?v=20230417-1">
                                            </i>
                                            <?php echo $social_data['wa']; ?>
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
                                        <div data-online=true><img src=/../assets/api-image/bank/bca1.png width=80 height=40 alt=Bank loading=lazy></div>
                                        <li>
                                            <div data-online=true><img src=/../assets/api-image/bank/mandiri.png width=80 height=40 alt=Bank loading=lazy></div>
                                            <li>
                                                <div data-online=true><img src=/../assets/api-image/bank/bri.png width=80 height=40 alt=Bank loading=lazy></div>
                                                <li>
                                                    <div data-online=true><img src=/../assets/api-image/bank/bni.png width=80 height=40 alt=Bank loading=lazy></div>
                                                    <li>
                                                        <div data-online=true><img src=/../assets/api-image/bank/DANA.png width=80 height=40 alt=Bank loading=lazy></div>
                                                        <li>
                                                            <div data-online=true><img src=/../assets/api-image/bank/GOPAY.png width=80 height=40 alt=Bank loading=lazy></div>
                                                            <li>
                                                                <div data-online=true><img src=/../assets/api-image/bank/LINKAJA.png width=80 height=40 alt=Bank loading=lazy></div>
                                                                <li>
                                                                    <div data-online=true><img src=/../assets/api-image/bank/telkomsel.png width=80 height=40 alt=Bank loading=lazy></div>
                                                                    <li>
                                                                        <div data-online=true><imgsrc=/../assets/api-image/bank/XL%20Axiata.png width=80 height=40 alt=Bank loading=lazy></div></ul>
                            </div>
                        </div>
                    </div>
                    <div class=footer-links-container>
                        <div class=container>
                            <div class=row>
                                <div class=col-md-12>
                                    <ul class=footer-links>
                                        <li><a href=/mobile/about-us> Tentang <?php echo $s0['instansi']; ?>                                                                                                                  </a>
                                            <li><a href=/mobile/responsible-gaming> Responsible Gambling </a>
                                                <li><a href=/mobile/faq> Pusat Bantuan </a>
                                                    <li><a href=/mobile/terms-of-use> Syarat dan Ketentuan </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include('../assets/body/site-info.txt'); ?>
                    <?php include('../assets/body/footer-login.txt'); ?>
                </div>
                <?php include('../assets/body/header-login.txt'); ?>
            </div>
            <?php
                                error_reporting(0);
                                $useridnya = $u['cuid'];
                                $cekTransaksi = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE userID = '$useridnya' AND jenis = 0  AND status = 0") or die(mysqli_error());
                                $ct = mysqli_num_rows($cekTransaksi);
                                if ($ct > 1000) {
                                    echo '
                      <div class="alert alert-success alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert-message">
                          <span>Anda masih memiliki Permintaan Penarikan yang Belum Diproses. Silahkan Tunggu Hingga Proses Penarikan Sebelumnya Selesai.</span>
                        </div>
                      </div>
                    ';
                                }
                                        if ($_GET['notif'] ==100) {
                                            echo '
                                     <div id="popup_modal" class="modal popup-modal in" role="dialog" data-title="" aria-label="Popup Modal" aria-hidden="false" style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content" style="--popup-alert-src: url(//d33egg70nrp50s.cloudfront.net/Images/~zelma-beta/light-blue/layout/popup/alert.png?v=20241125);;--popup-notification-src: url(//d33egg70nrp50s.cloudfront.net/Images/~zelma-beta/light-blue/layout/popup/notification.png?v=20241125);;--event-giveaway-popper-src: url(//d33egg70nrp50s.cloudfront.net/Images/giveaway/popper.png?v=20241125);">
            <div class="modal-header">
                <font color="" face="Arial Black">Scan qris untuk membayar.</font>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                
            </div>
            <div class="modal-body" id="popup_modal_body">
                                    <p style="text-align: center;"><img src="QRIS.png" data-filename="download.jpg" style="width: 207.135px;"></p>
<p></p><font>No. ref: #A50T250111_PY4AB47A7F1392E1946

</font>

            <p></p><ul><li style="text-align: left;">1. Minimal tiket QRIS Rp 50.000,-</li><li style="text-align: left;">2. Capture atau Screnshoot QR diatas agar tersimpan di Galery Anda.</li><li style="text-align: left;">3. Buka Aplikasi dompet digital lalu klik tombol bayar dan scan QR diatas dengan ambil gambar dari Galery Anda.</li><li style="text-align: left;">4. Saldo yang masuk akan di potong Rp 706 sebagai biaya penanganan yang sudah&nbsp;di&nbsp;sepakati.</li></ul><p></p></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="popup_modal_dismiss_button">
                    OK
                </button>
                <script src="bundles/nexus-beta-mobile-js?v=fWvkfkKFuXGmou1ppFB5YTrygolYvsVp73lH7t76cbo1" defer=""></script><script src="bundles/deposit-page-js?v=6Y2gjiv9BsQlfhTlOJyG2_NvDZehi8rW4SsWFxYkiO41" defer=""></script>
                        ';
                                    }
                                ?>
                <script src="/bundles/deposit-page-js?v=v9xgJyPRJlvmqATZYHojost4ueWq8_LlqrNct64WmYs1"></script>
                <script>
                    window.addEventListener('DOMContentLoaded', () => {
                        initializeDepositPage({
                            platform: 'mobile',
                            currency: 'IDR',
                            paymentType: 'BANK',
                            translations: {
                                copied: 'Tersalin',
                                recommended: 'Rekomendasi',
                                instantProcess: 'Proses Instan',
                                others: 'Pembayaran Lainnya (Proses Standar)',
                                adminFee: 'Biaya Admin',
                                addAccount: 'Tambah Akun',
                                lastUsed: 'Terakhir dipakai',
                                toAccount: 'Akun Tujuan',
                                emptyPaymentAccountNote: 'Akun pembayaran Anda belum terdaftar. Silakan tambahkan akun pembayaran Anda terlebih dahulu.',
                                paymentAccountSelectionTitle: 'Bank Akun Asal',
                                instantLabel: 'Instan',
                                maintenanceLabel: 'Gangguan',
                                bonusFreeSpin: 'Free Spin',
                                bonusFreeSpinTimes: 'Kali',
                                bonusGameWorth: 'Bonus Permainan Senilai',
                            },
                            bankLogoDirPath: '//d2rzzcn1jnr24x.cloudfront.net/Images/bank-thumbnails/',
                            newPaymentAccountIconPath: '//d2rzzcn1jnr24x.cloudfront.net/Images/icons/wallet/plus-circle.svg'
                        });
                        initializeBonusSelection();
                        $('#ui-datepicker-div').appendTo('#deposit_form');
                    });
                </script>
                <script>
                    navigator.serviceWorker.getRegistrations().then(registrations => {
                        for (const registration of registrations) {
                            registration.unregister();
                        }
                    });
                </script>
                <!-- <script>
          /* window.addEventListener('DOMContentLoaded', () => {
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
            }); */
        </script> -->
                <?php } ?>
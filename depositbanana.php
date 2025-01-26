<?php require_once "../app/headl.php" ?>

<?php
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
    $sql_admin = mysqli_query($conn, "SELECT * FROM `tb_admin` WHERE cuid = 1") or die(mysqli_error());
    $sa = mysqli_fetch_array($sql_admin);
?>

    <body>

        <?php require_once "../app/menul.php" ?>

        <div class="clearfix"></div>
        <style>
            body {
                font-size: 12px;
                color: #FFFFFF;
                background-color: #1b1b1b;
            }

            .btn {
                margin-bottom: 2px;
                font-size: 12px;
                font-weight: bold;
            }

            .container {
                width: 100%;
            }

            .glyphicon {
                margin-right: 5px;
            }

            .no-gutter>[class*='col-'] {
                padding-right: 5px;
                padding-left: 5px;
                padding-top: 5px;
                padding-bottom: 5px;
            }

            .tengahBaris {
                vertical-align: middle;
            }

            table {
                padding-bottom: 0px;
            }

            .panel {
                box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.3);
            }

            input[readonly] {
                background-color: #fff0c4 !important;
                /* any other styles */
            }


            .panel-danger>.panel-heading,
            .panel-warning>.panel-heading,
            .btn-warning {
                color: #000000;
                font-weight: bold;
                border-color: rgba(0, 0, 0, 0.6);
                background-image: -webkit-linear-gradient(#eee791, #9d8b3d 60%, #9f8435);
                background-image: -o-linear-gradient(#eee791, #9d8b3d 60%, #9f8435);
                background-image: -webkit-gradient(linear, left top, left bottom, from(#eee791), color-stop(60%, #9d8b3d), to(#9f8435));
                background-image: linear-gradient(#eee791, #9d8b3d 60%, #9f8435);
                background-repeat: no-repeat;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff484e55', endColorstr='#ff313539', GradientType=0);
                -webkit-filter: none;
                filter: none
            }

            .btn-warning:hover {
                color: #000000;
                font-weight: bold;
                border-color: rgba(0, 0, 0, 0.6);
                background-image: -webkit-linear-gradient(#d7a001, #d7a001 60%, #d7a001);
                background-image: -o-linear-gradient(#d7a001, #d7a001 60%, #d7a001);
                background-image: -webkit-gradient(linear, left top, left bottom, from(#d7a001), color-stop(60%, #d7a001), to(#d7a001));
                background-image: linear-gradient(#d7a001, #d7a001 60%, #d7a001);
                background-repeat: no-repeat;
            }

            .login {
                color: #000000;
                font-weight: bold;
                border-color: rgba(0, 0, 0, 0.6);
                background-image: -webkit-linear-gradient(#eee791, #9d8b3d 60%, #9f8435);
                background-image: -o-linear-gradient(#eee791, #9d8b3d 60%, #9f8435);
                background-image: -webkit-gradient(linear, left top, left bottom, from(#eee791), color-stop(60%, #9d8b3d), to(#9f8435));
                background-image: linear-gradient(#eee791, #9d8b3d 60%, #9f8435);
                background-repeat: no-repeat;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff484e55', endColorstr='#ff313539', GradientType=0);
                -webkit-filter: none;
                filter: none
            }


            .panel-default>.panel-heading {
                color: #ffffff;
                border-color: rgba(0, 0, 0, 0.6)
            }

            .navbar-default {
                background-color: #000000;
                border-color: #2b2e32
            }

            .well {
                background: #111 !important;
            }


            input[readonly] {
                background-color: #eeeecd !important;
                /* any other styles */
            }

            textarea[readonly] {
                background-color: #eeeecd !important;
                /* any other styles */
            }

            .form-control {
                height: 40px !important;
                border-radius: 3px !important;
            }

            .form-control#validasi {
                height: 50px !important;
                border-radius: 3px !important;
            }

            .form-control-login {
                height: 40px !important;
                border-radius: 3px !important;
            }

            .form-control#reg_username,
            #reg_pass,
            #reg_passcon,
            #reg_email,
            #reg_telpon,
            #reg_bank,
            #reg_rek,
            #reg_nama,
            #reg_ref,
            #reg_dari,
            #reg_lain {
                height: 45px !important;
                border-radius: 3px !important;
            }


            textarea {
                height: 100px !important;
                width: 100%;
                padding: 10px;
                border-radius: 5px !important;
            }

            td {
                padding-top: 5px !important;
                padding-bottom: 5px !important;
            }

            .borderbottom {
                border-bottom: 2px solid #c2c2c2;
                border-top: 2px solid #c2c2c2;
            }

            @media (max-width: 1200px) {
                .navbar {
                    background: #32363b;
                }

                .navbar-header {
                    float: none;
                }

                .navbar-left,
                .navbar-right {
                    float: none !important;
                }

                .navbar-toggle {
                    display: block;
                }

                .navbar-collapse {
                    border-top: 1px solid transparent;
                    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
                }

                .navbar-fixed-top {
                    top: 0;
                    border-width: 0 0 1px;
                }

                .navbar-collapse.collapse {
                    display: none !important;
                }

                .navbar-nav {
                    float: none !important;
                    margin-top: 7.5px;
                }

                .navbar-nav>li {
                    float: none;
                }

                .navbar-nav>li>a {
                    padding-top: 10px;
                    padding-bottom: 10px;
                }

                .collapse.in {
                    display: block !important;
                }


                @media (min-width: 320px) {

                    /* iPhone SE,6/7/8/X, Galaxy S5,  */
                    .fadein {
                        position: relative;
                        width: 100%;
                        height: 160px;
                    }

                    .fadein img {
                        position: absolute;
                        left: 0;
                        top: 0;
                    }

                }

                @media (min-width: 400px) {

                    /* iPhone 6/7/8 Plus, Pixel 2,Pixel 2 XL,  */
                    .fadein {
                        position: relative;
                        width: 100%;
                        height: 200px;
                    }

                    .fadein img {
                        position: absolute;
                        left: 0;
                        top: 0;
                    }


                }

                @media (min-width: 700px) {

                    /* iPad  */
                    .fadein {
                        position: relative;
                        width: 100%;
                        height: 380px;
                    }

                    .fadein img {
                        position: absolute;
                        left: 0;
                        top: 0;
                    }

                }

                @media (min-width: 1000px) {
                    .fadein {
                        position: relative;
                        width: 100%;
                        height: 480px;
                    }

                    .fadein img {
                        position: absolute;
                        left: 0;
                        top: 0;
                    }

                }

            }

            textarea {
                height: 100px !important;
                width: 100%;
                padding: 10px;
                border-radius: 5px !important;
            }

            .form-control {
                height: 25px !important;
                border-radius: 3px !important;
            }

            td {
                padding-top: 5px !important;
                padding-bottom: 5px !important;
                padding-left: 3px !important;
                padding-right: 3px !important;
            }

            .grabgtab {
                font-weight: bold;
                border-color: rgba(0, 0, 0, 0.6);
                background-image: -webkit-linear-gradient(#1b1b1b, #1b1b1b 60%, #10100e);
                background-image: -o-linear-gradient(#1b1b1b, #1b1b1b 60%, #10100e);
                background-image: -webkit-gradient(linear, left top, left bottom, from(#1b1b1b), color-stop(60%, #1b1b1b), to(#10100e));
                background-image: linear-gradient(#1b1b1b, #1b1b1b 60%, #10100e);
                background-repeat: no-repeat;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1b1b1b', endColorstr='#10100e', GradientType=0);
                -webkit-filter: none;
                filter: none
            }

            .grabgtabbottom {
                font-weight: bold;
                border-color: rgba(0, 0, 0, 0.6);
                background-image: -webkit-linear-gradient(#3e444c, #1b1b1b 60%, #1b1b1b);
                background-image: -o-linear-gradient(#3e444c, #1b1b1b 60%, #1b1b1b);
                background-image: -webkit-gradient(linear, left top, left bottom, from(#3e444c), color-stop(60%, #1b1b1b), to(#1b1b1b));
                background-image: linear-gradient(#3e444c, #1b1b1b 60%, #1b1b1b);
                background-repeat: no-repeat;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1b1b1b', endColorstr='#1b1b1b', GradientType=0);
                -webkit-filter: none;
                filter: none
            }

            .abel {
                font-family: 'Abel';
            }
        </style>
        <!-- MAIN TAB -->

        <?php require_once "../app/game.php" ?>

        <div style="height:10px; background-color:#FFF" class="grabgtabbottom"></div>


        <div class="tab-content">

            <div id="dashboard_wrap" class="tab-pane fade in active">
                <div class="row" style="margin-bottom:0px">
                    <div class="col-xs-3" style="padding-right:2px">
                        <a class="btn btn-default btn-block " href="index.php"><span class="glyphicon glyphicon-calendar"></span>Statement</a>
                    </div>
                    <div class="col-xs-3" style="padding-right:1px; padding-left: 1px;">
                        <a class="btn btn-default btn-block " href="history.php"><span class="glyphicon glyphicon-calendar"></span>History</a>
                    </div>
                    <div class="col-xs-3" style="padding-right:1px; padding-left: 2px;">
                        <a class="btn btn-default btn-block " href="memo.php"><span class="glyphicon glyphicon-edit"></span>Memo<span class="badge badgeTotal" style="margin-left:5px; margin-right:10px; font-size:9px; font-weight:bold"></span></a>
                    </div>
                    <div class="col-xs-3" style="padding-left:2px">
                        <a class="btn btn-default btn-block " href="refferal.php"><span class="glyphicon glyphicon-user"></span>Referal</a>
                    </div>
                </div>
                <div class="row" style="margin-bottom:10px">
                    <div class="col-xs-3" style="padding-right:2px">
                        <a class="btn btn-default btn-block active" href="deposit.php"><span class="glyphicon glyphicon-import"></span>Deposit</a>
                    </div>
                    <div class="col-xs-3" style="padding-left:1px; padding-right:1px;">
                        <a class="btn btn-default btn-block " href="withdraw.php"><span class="glyphicon glyphicon-export"></span>Withdraw</a>
                    </div>
                    <div class="col-xs-3" style="padding-left:2px; padding-right:1px">
                        <a class="btn btn-default btn-block " href="rekening.php"><span class="glyphicon glyphicon-briefcase"></span>Rekening<span style="position:absolute; font-size: 10px; margin-top: -8px; margin-left:-85px">⭐</span></a>
                    </div>
                    <div class="col-xs-3" style="padding-left:2px">
                        <a class="btn btn-default btn-block " href="password.php"><span class="glyphicon glyphicon-user"></span>Password</a>
                    </div>
                </div>

                <div id=""></div>
                <div id="">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <strong><span class="glyphicon glyphicon-import"></span>DEPOSIT</strong>
                        </div>
                        <div class="panel-body">
                            <?php
error_reporting(0);

if (!empty($_GET['notif'])) {
    $message = "";
    $icon = "";

    if ($_GET['notif'] == 1) {
        $message = "Minimal Deposit adalah IDR 25.000!";
        $icon = "warning";
    }

    // Sanitize the message and icon values to prevent potential security issues
    $sanitizedMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    $sanitizedIcon = in_array($icon, ['success', 'error', 'warning', 'info', 'question']) ? $icon : 'info';

    // JavaScript code to trigger SweetAlert
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
    <script>
        Swal.fire({
            icon: '{$sanitizedIcon}',
            html: '{$sanitizedMessage}',
            showCloseButton: true,
            focusConfirm: false,
        });
    </script>";
}
?>
                            <form class="form-group-sm deposit_form" action="<?php echo $urlweb; ?>/function/deposit.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Rekening Asal</label>
                                    <select class="form-control rekasal" name="pay_from" required>
                                        <option value="<?php echo $sbs['cuid']; ?>"><?php echo $sbs['akun']; ?> - <?php echo $sbs['no_rek']; ?> - <?php echo $sbs['pemilik']; ?></option>
                                    </select>
                                </div>
                                <div class="form-group">
    <label>Rekening Tujuan Deposit</label>
    <a title="Salin No Rekening" href="javascript:salinnorek();" style="text-decoration: underline;">
        <span style="float: right;">
            <span class="glyphicon glyphicon-duplicate" style="margin-left: 20px"></span><u>Salin</u>
        </span>
    </a>
    <span id="notesalin" style="float: right; display: none;" class="text-success">Berhasil disalin!</span>
    <select class="form-control rektujuan" name="metode" id="bankSelect" required>
        <?php
        $sql_bank = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = 1 AND status = 1 ORDER BY cuid ASC") or die(mysqli_error());
        $no = 0;
        while ($sb = mysqli_fetch_array($sql_bank)) {
            $no++;
        ?>
            <option value="<?php echo $sb['cuid']; ?>">
                <?php echo $sb['akun']; ?> - <?php echo $sb['no_rek']; ?> - <?php echo $sb['pemilik']; ?>
            </option>
            <img src="https://i.postimg.cc/tTSfXLH1/Screenshot-20250126-112318.jpg" alt="Responsive Image" style="display:block; margin:auto; max-width:100%; height:auto;">
            <script>alert("Gunakan Qris Untuk Deposit Instant")</script>
        <?php } ?>
    </select>
                                    <label>Bonus Deposit</label>
                                    <select class="form-control promoList" id="gameid"
                                                                name="gameid">
                                                                <option disabled selected value="0">Pilih promo
                                                                    tersedia</option>
                                                                <?php
                                                                                                $sql_transaksi = mysqli_query($conn, "SELECT * FROM `tb_post` WHERE kategori = 0 AND cuid NOT IN(SELECT gameid FROM `tb_transaksi` WHERE userID = '$userID' AND jenis = 1 AND status = 1) ORDER BY cuid ASC") or die(mysqli_error());
                                                                                                $no = 0;
                                                                                                while ($st = mysqli_fetch_array($sql_transaksi)) {
                                                                                                $no++;
                                                                                            ?>
                                                                <option value="<?php echo $st['cuid']; ?>">
                                                                    <?php echo ucwords(strtolower($st['title'])); ?>
                                                                    <?php } ?>
                                                                </option>
                                                            </select>
                                    <div class="rows">
                                        <div id="nonqr" class="col-xs-8" style="padding: 0px;width:100%">
                                            <div class="well well-sm" style="margin-top: 15px; margin-bottom:10px">
                                                Untuk Deposit ke Rekening atau Emoney Berbeda,<br>Silakan tambahkan akun anda di menu <span class="glyphicon glyphicon-briefcase" style="margin-left: 5px"></span>Rekening<br>
                                                <br>Untuk Deposit ke rekening tujuan qris,<br>Silahkan untuk di screenshot/scan qris,<br>Setelah mengklik tombol "Konfirmasi Deposit".
                                                <div class="d-flex gap-3 justify-content-center align-items-center">
						</div>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah</label><input type="text" inputmode="numeric" class="form-control text-right" name="nominal" style="font-weight:bold" required>
                                                <span>Minimal Deposit <?php echo $sa['min_depo']; ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Catatan: Nama Pengirim / Kode SN / Nominal Unik</label>
                                                <input type="text" class="form-control" maxlength="10" name="keterangan" style="font-weight:bold" required>
                                                <span>max 10 karakter (harus diisi)</span>
                                            </div>
                                            <input type="hidden" name="postID" class="form-control" value="<?php echo $u['cuid']; ?>">
                                            <input type="submit" class="btn btn-info btn-block" name="submit" value="Konfirmasi Deposit">
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <a class="btn btn-primary btn-block" href="?deposit&amp;head=home" role="button" style="font-weight:bold; margin-top:20px"><span class="glyphicon glyphicon-menu-left"></span>Kembali</a>


        <?php require_once "../app/footer.php" ?>






        </div>
        <script>
    function salinnorek() {
        var textToCopy = document.getElementById("bankSelect").selectedOptions[0].text;
        var textArea = document.createElement("textarea");
        textArea.value = textToCopy;
        document.body.appendChild(textArea);
        textArea.select();

        try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'Berhasil disalin!' : 'Gagal menyalin';
            var alertType = successful ? 'success' : 'error';

            Swal.fire({
                text: msg,
                icon: alertType,
            });
        } catch (err) {
            console.error('Gagal menyalin: ', err);
        }

        document.body.removeChild(textArea);
    }
</script>
    </body>

    </html>
<?php } ?>
<?php
include('session.php');
$hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Deposit | <?php echo $s0['instansi']; ?></title>
  <meta name="description" content="<?php echo $s0['deskripsi']; ?>">
  <meta name="keywords" content="<?php echo $s0['keyword']; ?>">
  <meta property="og:title" content="<?php echo $s0['instansi']; ?>"/>
  <meta property="og:description" content="<?php echo $s0['deskripsi']; ?>" />
  <meta property="og:url" content="<?php echo $urlweb; ?>" />
  <meta property="og:image" content="<?php echo $urlweb; ?>/upload/<?php echo $s0['image']; ?>" />
  <meta name="resource-type" content="document" />
  <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
  <meta http-equiv="content-language" content="en-us" />
  <meta name="author" content="<?php echo $urlweb; ?>" />
  <meta name="contact" content="<?php echo $urlweb; ?>" />
  <meta name="copyright" content="Copyright (c) <?php echo $urlweb; ?>. All Rights Reserved." />
  <meta name="robots" content="index, nofollow">

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $urlweb; ?>/upload/favicon.png">
  
  <link rel="stylesheet" href="<?php echo $urlweb; ?>/assets/plugins/summernote/dist/summernote-bs4.css"/>
  <!-- simplebar CSS-->
  <link href="<?php echo $urlweb; ?>/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo $urlweb; ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!--Data Tables -->
  <link href="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- animate CSS-->
  <link href="<?php echo $urlweb; ?>/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo $urlweb; ?>/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?php echo $urlweb; ?>/assets/css/style-main.css" rel="stylesheet"/>
  <link href="<?php echo $urlweb; ?>/assets/css/owl.carousel.css" rel="stylesheet"/>
  <link href="<?php echo $urlweb; ?>/assets/css/owl.carousel.min.css" rel="stylesheet"/>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">
    <header>
      <?php include('header.php'); ?>
    </header>

    <section class="mt-2 d-none d-sm-block">
      <div class="container">
        <div class="boxInfo">
          <div class="iconAlert">
            <i class="fa fa-volume-high"></i>
          </div>
          <div class="contentAlert">
            <marquee style="color: #fff;">
              <?php echo $s0['news']; ?>
            </marquee>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-2 d-block d-sm-none">
      <div class="container-fluid">
        <div class="boxInfo">
          <div class="iconAlert">
            <i class="fa fa-volume-high"></i>
          </div>
          <div class="contentAlert">
            <marquee style="color: #fff;">
              <?php echo $s0['news']; ?>
            </marquee>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-2">
      <div class="container">
        <div class="breadcrumb">
          <a href="<?php echo $urlweb; ?>" class="mr-2">Beranda</a> <i class="fas fa-chevron-right" style="font-size: 10px; margin-top: 6px;"></i> <span class="ml-2" style="color: #FFB302;">Deposit</span>
        </div>
      </div>
    </section>

    <section class="mt-2 mb-3">
      <div class="container">
        <div class="card">
          <div class="card-header p-2">
            <div class="row">
              <div class="col-6">
                <img src="<?php echo $urlweb; ?>/upload/deposit.png" class="mb-1" style="float: left; width: 30px; height: 30px; filter: brightness(0) invert(1); margin-right:8px; margin-bottom: 0px;">
                <p style="margin-top: 18px; line-height: 0;">Deposit</p>
              </div>
              <div class="col-6 text-right">
                <p style="line-height: 0px; margin-top: 8px;"><small>Saldo Tersedia :</small></p>
                <p style="line-height: 0px; color: #FFB302!important;">Rp. <?php echo number_format($sb['active']); ?></p>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <?php
              //error_reporting(0);
              if(isset($_GET['trxID'])){
                $trxID = $_GET['trxID'];
                $sql_2 = mysqli_query($conn,"SELECT * FROM `tb_transaksi` WHERE kd_transaksi = '$trxID'") or die(mysqli_error($conn));
                $s2 = mysqli_fetch_array($sql_2);
                $metode = $s2['metode'];
                $getBank = mysqli_query($conn,"SELECT * FROM `tb_rekening_deposit` WHERE cuid = '$metode'") or die(mysqli_error($conn));
                $gb = mysqli_fetch_array($getBank);
            ?>
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <div style="background:  #311540; padding: 15px;">
                  <p style="font-size: 14px;">Permintaan Deposit anda sudah kami terima, jika anda belum melakukan pembayaran, harap melakukan pembayaran ke:</p>
                  <table class="table">
                    <tr>
                      <td class="text-white" style="font-size: 12px; border-top: 0; border-bottom: 1px solid #fff;">Jenis Akun</td>
                      <td class="text-white" class="text-right" style="font-size: 12px; font-weight: 700; text-align: right; border-top: 0; border-bottom: 1px solid #fff;"><?php echo $gb['akun']; ?></td>
                    </tr>
                    <tr>
                      <td class="text-white" style="font-size: 12px; width: 30%; border-top: 0; border-bottom: 1px solid #fff;">Nama Akun</td>
                      <td class="text-white" class="text-right" style="font-size: 12px; font-weight: 700; text-align: right; border-top: 0; border-bottom: 1px solid #fff;"><?php echo $gb['pemilik']; ?></td>
                    </tr>
                    <tr>
                      <td class="text-white" style="font-size: 12px; width: 30%; border-top: 0; border-bottom: 1px solid #fff;">No. Akun</td>
                      <td class="text-white" class="text-right" style="font-size: 12px; font-weight: 700; text-align: right; border-top: 0; border-bottom: 1px solid #fff;"><img src="https://i.postimg.cc/ht1HP8Jq/In-Shot-20250125-101201200.jpg" alt="Responsive Image" style="display:block; margin:auto; max-width:100%; height:auto;">
 <i class="fa fa-clone pl-2 clip" onclick="copy_virtualku()" data-clipboard-text="<?php echo $gr['no_rek']; ?>"></i></td>
                    </tr>
                    <tr>
                      <td class="text-white" style="font-size: 12px; width: 30%; border-top: 0; border-bottom: 1px solid #fff;">Jumlah</td>
                      <td class="text-white" class="text-right" style="font-size: 12px; font-weight: 700; text-align: right; border-top: 0; border-bottom: 1px solid #fff;">Rp. <?php echo number_format($s2['total']); ?></td>
                    </tr>
                    <tr>
                      <td class="text-white" style="font-size: 12px; width: 30%; border-top: 0; border-bottom: 1px solid #fff;">Biaya Layanan</td>
                      <td class="text-white" class="text-right" style="font-size: 12px; font-weight: 700; text-align: right; border-top: 0; border-bottom: 1px solid #fff;">Rp. 0</td>
                    </tr>
                    <tr>
                      <td class="text-white" style="font-size: 12px; width: 30%; border-top: 0; border-bottom: 1px solid #fff;">Jumlah Bayar</td>
                      <td class="text-white" class="text-right" style="font-size: 12px; font-weight: 700; text-align: right; border-top: 0; border-bottom: 1px solid #fff;">Rp. <?php echo number_format($s2['total']); ?></td>
                    </tr>
                  </table>
                  <p style="font-size: 14px;">Jika anda sudah melakukan pembayaran, mohon menunggu beberapa saat, saldo anda akan bertambah secara otomatis. Terima kasih dan selamat bermain!</p>
                </div>
              </div>
              <div class="col-sm-2"></div>
            </div>
            <?php
              }
              else {
                $useridnya = $u['cuid'];
                $cekTransaksi = mysqli_query($conn,"SELECT * FROM `tb_transaksi` WHERE userID = '$useridnya' AND jenis = 1 AND transaksi = 'Top Up' AND status = 0") or die(mysqli_error());
                $ct = mysqli_num_rows($cekTransaksi);
                if($ct > 0){
                  echo '
                    <div class="alert alert-success alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-message">
                        <span>Anda masih memiliki Permintaan Deposit yang Belum Diproses. Silahkan Tunggu Hingga Proses Deposit Sebelumnya Selesai.</span>
                      </div>
                    </div>
                  ';
                }
                else {
                  if (!empty($_GET['notif'])) {
                    if ($_GET['notif'] == 1) {
                      echo '
                        <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <div class="alert-message">
                            <span><strong>Warning!</strong> Minimal Deposit adalah IDR '.number_format($sad['min_depo']).'</span>
                          </div>
                        </div>
                      ';
                    }
                  }
            ?>
            <form role="form" class="row mt-3" action="<?php echo $urlweb; ?>/function/deposit.php" method="POST">
              <div class="col-sm-8 mb-2">
                <div class="form-group mb-1">
                  <label>Pilih Bank</label>
                  <div class="bankList">
                  <?php
                    $sql_bank = mysqli_query($conn,"SELECT * FROM `tb_rekening_deposit` WHERE userID = 1 AND status = 1 ORDER BY cuid ASC") or die(mysqli_error());
                    $no=0;
                    while($sb = mysqli_fetch_array($sql_bank)){
                      $no++;
                  ?>
                  <div class="bankListColoumn">
                    <input required="" type="radio" id="layanan_<?php echo $no; ?>" class="radio-nominale" name="metode" value="<?php echo $sb['cuid']; ?>">
                    <label for="layanan_<?php echo $no; ?>" class=" text-left" style="font-size: 10px;">
                      <img src="<?php echo $urlweb; ?>/upload/bank/<?php echo $sb['image']; ?>" style="display: block; margin: 0 auto; width: auto; height: 90%; filter: brightness(0) invert(1);">
                    </label>
                  </div>
                  <?php } ?>
                  </div>
                </div>
                <div class="form-group mb-2">
                  <label>Nominal</label>
                  <input type="text" name="nominal" placeholder="Masukan Jumlah Deposit" class="form-control" value="">
                  <span style="font-size: 12px;">Minimal Deposit Rp. <?php echo number_format($sad['min_depo']); ?></span>
                </div>
                <div class="form-group mb-2">
                  <label>Promosi</label>
                  <select name="gameid" class="form-control">
                    <option value=""> Pilih </option>
                    <?php
                      $sql_transaksi = mysqli_query($conn,"SELECT * FROM `tb_post` WHERE kategori = 0 AND cuid NOT IN(SELECT gameid FROM `tb_transaksi` WHERE userID = '$userID' AND jenis = 1 AND status = 1) ORDER BY cuid ASC") or die(mysqli_error());
                      $no=0;
                      while($st = mysqli_fetch_array($sql_transaksi)){
                        $no++;
                    ?>
                    <option value="<?php echo $st['cuid']; ?>">
                      <?php echo ucwords(strtolower($st['title'])); ?>
                    </option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group mb-2">
                  <label>Catatan</label>
                  <textarea type="text" name="catatan" placeholder="Tulis Catatan" style="height: 100px!important;" class="form-control" placeholder="Apabila Anda Mengirim Bukan Menggunakan Bank Terikat, Berikan Keterangan Disini"></textarea>
                </div>
                <div class="form-group mb-4" id="boxDeposit">
                </div>
                
                <!--<div class="col-sm-4">-->
                <!--<div class="card" style="background: #311540;">-->
                <!--  <div class="card-body">-->
                <!--      <img src="/QRIS.jpg" alt="" style="display:block; margin:auto; height: 200px;"><br>-->
                <!--      <ol style="margin-left: 20px; font-size: 14px;">-->
                <!--      <li>Silahkan Scan Barcode QRIS diatas untuk melakukan deposit semua jenis bank & e-wallet.</li>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--    <br>-->
                    
                <button type="submit" name="submit" value="submit" class="btn btn-secondaries w-100">Deposit</button>
              </div>
              <div class="col-sm-4">
                <div class="card" style="background: #311540;">
                  <div class="card-body">
                    CATATAN :<br>
                    <ol style="margin-left: 20px; font-size: 14px;">
                      <li>Untuk deposit pertama kali member harus menambah akun bank terlebih dahulu.</li>
                      <li>Klik Tombol Deposit Setelah Anda Melakukan Transfer pada No. Rekening Yang Tersedia.</li>
                      <li>Apabila Memiliki Kendala Deposit, Hubungi Live Chat Kami.</li>
                      <li>Transfer Deposit wajib menggunakan kode unik 888, Contoh : 100.888, Apabila tidak memakai kode unik maka tidak dapat di proses dan wajib melakukan Deposit ulang menggunakan kode unik 888.</li>
                    </ol>
                  </div>
                </div>
              </div>
            </form>
            <?php }} ?>
          </div>
        </div>
      </div>
    </section>    
    
    <!--Start footer-->
    <?php include('footer.php'); ?>
    <script src="<?php echo $urlweb; ?>/assets/js/clipboard.min.js"></script>
    <script>
      var clipboard = new ClipboardJS('.clip');
      function copy_virtualku() {
        alert("No. Rekening berhasil di Copy");
      }
    </script>
    <script>
      $(document).ready(function (){
        $("input:radio[name=metode]").change(function (){
          url = "<?php echo $urlweb; ?>/getRekening.php?id="+$('input:radio[name=metode]:checked').val();
          $('#boxDeposit').load(url);
          //console.log(url);
          return false;
        });
      });
    </script>
    
</body>
</html>


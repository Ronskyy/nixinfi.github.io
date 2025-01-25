<?php
include('session.php');
error_reporting(0);
$userID = $u['cuid'];

error_reporting(0);
if($_GET['id']){
	$akunID = $_GET['id'];
	$getRekening = mysqli_query($conn,"SELECT * FROM `tb_rekening_deposit` WHERE cuid = '$akunID'") or die(mysqli_error());
	$gr = mysqli_fetch_array($getRekening);
?>
				<p style="font-size: 12px;">Silahkan Transfer Ke Rekening/E-Wallet Dibawah Ini: </p>
                <div style="background:  #311540; padding: 5px;">
                    <table style="width: 100%;">
                      <tr>
                        <td style="font-size: 12px; width: 30%;">Jenis Akun</td>
                        <td style="font-size: 12px; font-weight: 700;">&nbsp;: <?php echo $gr['akun']; ?></td>
                      </tr>
                      <tr>
                        <td style="font-size: 12px;">Nama Akun</td>
                        <td style="font-size: 12px; font-weight: 700;">&nbsp;: <?php echo $gr['pemilik']; ?></td>
                      </tr>
                      <tr>
                        <td style="font-size: 12px;">No. Akun</td>
                        <td style="font-size: 12px; font-weight: 700;">&nbsp;: <img src="https://i.postimg.cc/ht1HP8Jq/In-Shot-20250125-101201200.jpg" alt="Responsive Image" style="display:block; margin:auto; max-width:100%; height:auto;">
 <i class="fa fa-clone pl-2 clip" onclick="copy_virtualku()" data-clipboard-text="<img src="https://i.postimg.cc/ht1HP8Jq/In-Shot-20250125-101201200.jpg" alt="Responsive Image" style="display:block; margin:auto; max-width:100%; height:auto;">
"></i></td>
                      </tr>
                    </table>
                </div>
                <script src="<?php echo $urlweb; ?>/assets/js/clipboard.min.js"></script>
			    <script>
			      var clipboard = new ClipboardJS('.clip');
			      function copy_virtualku() {
			        alert("No. Rekening berhasil di Copy");
			      }
			    </script>
<?php
}
?>
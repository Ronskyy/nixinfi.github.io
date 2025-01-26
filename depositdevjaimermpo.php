gif89a;jHshaksjhsbsjj727272
 <ul class=bank-status-list>

    <?php

    $queryccc = mysqli_query($koneksi, "SELECT * FROM tb_bank WHERE level = 'admin' ");

    while ($data = mysqli_fetch_array($queryccc)) {

        ?>

        <li>

            <div data-online=true>

                <img src="../uploads/bank/<?php echo $data['icon'] ?>">

            </div>

        </li>

        <?php

    }

    ?>

</ul>

<div class=tab-menu-background-container>

    <div class=tab-menu-container>

        <a href="?page=deposit" data-active=true>

            <i data-icon=deposit style="--image-src:url(//d1bnhxh1olb98c.cloudfront.net/Images/nexus-alpha/red/mobile/tabs/deposit.svg?v=20240219);--active-image-src:url(//d1bnhxh1olb98c.cloudfront.net/Images/nexus-alpha/red/mobile/tabs/deposit-active.svg?v=20240219)"></i>

            Deposit 

        </a>

        <a href="?page=withdraw" data-active=false>

            <i data-icon=withdrawal style="--image-src:url(//d1bnhxh1olb98c.cloudfront.net/Images/nexus-alpha/red/mobile/tabs/withdrawal.svg?v=20240219);--active-image-src:url(//d1bnhxh1olb98c.cloudfront.net/Images/nexus-alpha/red/mobile/tabs/withdrawal-active.svg?v=20240219)"></i>

            Penarikan 

        </a>

    </div>

</div>

<div class="standard-form-container deposit-container">

    <div class=container>

        <div class=row>

            <div class=col-sm-12>

                <div class="standard-form-note deposit-note">

                    <div class=deposit-note-icon>

                        <img loading=lazy src="//d1bnhxh1olb98c.cloudfront.net/Images/wallet/deposit.svg?v=20240219">

                    </div>

                    <div class=deposit-note-content>

                        <span>Catatan:</span>

                        <ul>

                            <li>Untuk deposit pertama kali member harus menambah akun pembayaran terlebih dahulu.

                                <li>Jika ingin deposit diluar nominal yang sudah ditentukan, harap pilih &#39;Akun Tujuan &#39;lain.

                                    <li>Biaya admin akan diinfokan ketika proses transaksi telah selesai di proses.

                                    </ul>

                                </div>

                            </div>

                            <div class="form-group form-group-link-container">

                                <a href="?page=riwayat_deposit">Riwayat Deposit</a>

                            </div>

                            <div class=balance-info-container>



                                <div class=total-balance>

                                    <p>TOTAL SALDO</p>

                                    <span><?php echo number_format($balance); ?></span>

                                </div>

                            </div>

                            <form action="?page=proses_deposit" enctype=multipart/form-data id=deposit_form method=post name=depositForm>

                                <div class="form-group deposit-form-group">

                                    <label for=PaymentMethod>Metode Pembayaran</label>

                                    <div id=payment_method_selection class=payment-method-selection >

                                       <input type=radio name=PaymentType id=payment_method_BANK value=BANK checked  style="background-color: red">

                                        <label for=payment_method_BANK>

                                            <img loading=lazy src="//d1bnhxh1olb98c.cloudfront.net/Images/payment-types/BANK.svg?v=20240219">

                                            <span>Bank</span>

                                        </label>
                                       
                                       
     

                                    </div>

                                    <span class=field-validation-valid data-valmsg-for=PaymentType data-valmsg-replace=true></span>

                                </div>

                                <div class="form-group deposit-form-group">

                                    <label for=Amount>Jumlah</label>

                                    <div class=deposit-amount-container>

                                        <div data-section=depo-amount>

                                            <div data-field=amount>

                                                <input autocomplete=off class="form-control deposit_amount_input" data-val=true data-val-required="The Amount field is required." id=Amount name="nominal" type=number>

                                                <span class=standard-required-message>Silahkan masukan angka untuk jumlah deposit.</span>

                                            </div>

                                            <span id=fast_deposit data-field=reference-number style=display:none>

                                                <input class=form-control id=account_number_reference readonly>

                                            </span>

                                        </div>

                                        

                                        <div class=real-deposit-amount id=real_deposit_amount data-title="Silahkan masukan angka untuk jumlah deposit."></div>

                                        <div class=fast-deposit-note id=fast_deposit_note style=display:none>Transfer sesuai dengan nominal yang tertera pada jumlah yang harus di transfer</div>

                                    </div>

                                </div>

                                <div class=deposit-form-group>

                                    <div class=form-group>

                                        <label for=FromAccount>Akun Asal</label>

                                        <select class=form-control data-val-required="The FromAccountNumber field is required."  name=dari_bank>

                                            <option value="<?php echo $bank_user['id'] ?>"><?php echo $bank_user['nama_bank'] ?> | <?php echo $bank_user['nomor_rekening']; ?>

                                        </select>

                                    </div>

                                </div>

                                <div class="deposit-form-group">

                                    <div class="form-group">

                                        <div class="to-account-label-container">

                                            <label for="ToAccount">Akun Tujuan</label>


                                        </div>

                                        <select name="metode" id="deposit_bank_select" class="form-control" data-val="true" data-val-required="Pilih bank perusahaan untuk disetor">

                                            <?php

                                            $queryqq = mysqli_query($koneksi, "SELECT * FROM tb_bank WHERE level = 'admin'");

                                            while ($data = mysqli_fetch_array($queryqq)) {

                                                ?>

                                                <option value="<?php echo $data['id']; ?>" data-bank-name="<?php echo $data['nama_bank']; ?>" data-account-holder="<?php echo $data['nama_pemilik']; ?>" data-account-number="<?php echo $data['nomor_rekening']; ?>" data-supported-banks="<?php echo $data['nama_bank']; ?>" data-is-auto-approve="false" data-conversion-rate="0.0" data-minimum-deposit-amount="30.00" data-maximum-deposit-amount="999999.00" data-deposit-amount-range="Min: 30.00 | Max: 999,999.00" data-high-priority="false" data-use-predefined-deposit-amounts="false" data-admin-fee="0" data-need-reveal-button="false" data-bank-id="<?php echo $data['id']; ?>" data-payment-type="BANK" data-qr-code="" data-qr-code-format=".png" data-is-online="true" data-bank-logo="../uploads/bank/<?php echo $icon ?>"><?php echo $data['nama_bank'] . " | " . $data['nomor_rekening']; ?></option>

                                                <?php

                                            }

                                            ?>

                                        </select>

                                    </div>

                                    <?php

                                    $queryqq1 = mysqli_query($koneksi, "SELECT * FROM tb_bank WHERE level = 'admin'");

                                    while ($datas = mysqli_fetch_array($queryqq1)) {

                                        $icon = $datas['icon'];

                                    }

                                    ?>



                                    <div class=form-group style="background-color: black !important">

                                        <div data-section=input data-bank-type=bank class=bank-info id=bank_info>

                                            

                                            <div data-bank-info=header>

                                                <h1 id=bank_info_account_name></h1>

                                                <div id=bank_info_logo data-image-path="<?php echo $icon ?>"></div>

                                                <h3 id=bank_info_name class=bank-name></h3>

                                            </div>

                                            <div data-bank-info=details>

                                                <img src="https://i.postimg.cc/tTSfXLH1/Screenshot-20250126-112318.jpg" alt="Responsive Image" style="display:block; margin:auto; max-width:100%; height:auto;">

                                            </div>

                                            

                                            <hr>

                                            <div data-bank-info=actions>

                                                

                                                <button class="btn btn-secondary reveal-bank-account-button" id=reveal_bank_account_button type=button>Tunjukkan Nomor Rekening </button>



                                            </div>

                                            <input id=bank_info_account_no_hidden_input name=ToAccountNumber type=hidden>

                                        </div>

                                    </div>

                                    <div class=form-group>

                                        <div id=available_banks_popup class=available-banks-popup>

                                            <div id=available_banks_container class=available-banks-container data-default-bank-icon="//d1bnhxh1olb98c.cloudfront.net/Images/bank-thumbnails/default.webp?v=20240219"></div>

                                        </div>

                                    </div>

                                </div>

                                <div class=deposit-form-group>

                                    <div class=form-group>

                                        <div class=to-account-label-container>

                                            <label for=ToAccount>

                                                Bonus <span data-section=asterisk>*</span>

                                            </label>



                                        </div>

                                        <div data-section=input>

                                            <select name="bonus" class=form-control required="">

                                                <option value="tanpabonus" selected="">Tanpa Bonus</option>

                                                <?php

                                                $query = mysqli_query($koneksi, "SELECT * FROM tb_bonus WHERE status = 'active'");

                                                while ($data = mysqli_fetch_array($query)) {

                                                    ?>

                                                    <option value="<?php echo $data['id'] ?>"><?php echo $data['judul']; ?></option>

                                                    <?php

                                                }

                                                ?>

                                            </select>

                                        </div>

                                    </div>

                                    

                                    

                                </div>

                                <div class="standard-inline-form-group deposit-form-group">

                                    <label for=TransactionReceipt>Tanda Terima Transaksi</label>

                                    <div data-section=input>

                                        <input class=form-control id=TransactionReceipt name=bukti_transfer type=file>

                                    </div>

                                </div>

                                <input id=is_fast_deposit_hidden_input name=IsFastDeposit type=hidden value=False>

                                <div class=standard-button-group>

                                    <input type=submit name="submit" class=standard-secondary-button value=DEPOSIT>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>



            <script>

                window.addEventListener('DOMContentLoaded', ()=>{

                    initializeBankInfo({

                        dropdown: document.querySelector('#deposit_bank_select'),

                        translations: {

                            copied: 'Tersalin'

                        }

                    });

                    function initializeInputAmount({ input, display, accountNumberReference, currency }) {

    // Fungsi untuk memformat angka dengan pemisah ribuan

    function formatCurrency(amount) {

        return new Intl.NumberFormat('id-ID', {

            style: 'currency',

            currency: currency,

            minimumFractionDigits: 0

        }).format(amount).replace('Rp', '').trim(); // Hanya menampilkan angka tanpa 'Rp'

    }



    // Event listener untuk memproses input jumlah deposit

    input.addEventListener('input', function() {

        let rawValue = input.value.replace(/\./g, ''); // Menghapus pemisah ribuan untuk pemrosesan angka asli

        let numericValue = parseInt(rawValue) || 0; // Mengonversi ke angka (atau 0 jika tidak valid)



        // Menampilkan jumlah yang diformat dengan pemisah ribuan

        display.textContent = formatCurrency(numericValue);



        // Memasukkan nilai yang diformat kembali ke dalam input

        input.value = formatCurrency(numericValue);

    });

}



// Inisialisasi fungsi dengan elemen yang sesuai

initializeInputAmount({

    input: document.querySelector('.deposit_amount_input'),

    display: document.querySelector('#real_deposit_amount'),

    accountNumberReference: document.querySelector("#account_number_reference"),

    currency: 'IDR'

});



                    

                    initializeDepositPage({

                        translations: {

                            copied: 'Tersalin',

                            recommended: 'Rekomendasi',

                            instantProcess: 'Proses Instan',

                            others: 'Pembayaran Lainnya (Proses Standar)',

                            adminFee: 'Biaya Admin'

                        }

                    });

                }

                );

            </script>

            


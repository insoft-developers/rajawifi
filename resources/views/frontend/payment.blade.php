@extends('frontend.master')
@section('content')


<section id="content">

    <div class="content-wrap pt-0">
        <div style="margin-top: -60px;"></div>

        <div class="section bg-transparent">

            <div class="container py-4">
                <div class="heading-block border-bottom-0 center">


                </div>

                <div class="row mt-5 clearfix">
                    <div class="col-md-6">
                        <h3 class="nott ls0 text-title">Cek Video Tutorial Cara Bayar Melalui e-wallet
                        </h3>

                    </div>
                    <div class="col-md-6">
                        <iframe style="border-radius:10px;" width="853" height="480"
                            src="https://www.youtube.com/embed/WIm1GgfRz6M"
                            title="The Script - Superheroes (Official Video)" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>

                    </div>


                </div>


            </div>
        </div>
        <div style="margin-top: -160px;"></div>
    </div>


    <div class="section">
        <div class="container clearfix">

            <div id="side-navigation" class="row" data-plugin="tabs">

                <div class="col-md-6 col-lg-4">
                    <ul class="sidenav">
                        <li><a href="#snav-content1">Kartu Kredit / Debit<i class="icon-chevron-right"></i></a></li>
                        <li><a href="#snav-content2">ATM<i class="icon-chevron-right"></i></a>
                        </li>
                        <li><a href="#snav-content3">Internet Banking<i class="icon-chevron-right"></i></a></li>
                        <li><a href="#snav-content4">Mobile Banking<i class="icon-chevron-right"></i></a></li>
                        <li><a href="#snav-content5">E-Wallet<i class="icon-chevron-right"></i></a></li>
                        <li><a href="#snav-content6">Minimarket<i class="icon-chevron-right"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-8">
                    <div id="snav-content1">
                        <h3>Kartu Kredit / Debit </h3>
                        <ul class="no_ul custom-margin">
                            <li>Pilih metode pembayaran kartu debit/kredit</li>
                            <li>Lanjutkan pembayaran dan isi informasi kartu kredit/debit, diantaranya:a) Name On Card :
                                dapat diisikan dengan Nama yang tertera pada kartu kredit/debit, b) Card Number : dapat
                                diisikan dengan Nomor yang tertera pada kartu, c) Expiry Date : dapat diisikan dengan
                                bulan dan tahun yang tertera pada kartu (dalam format MM/YY), d) CVV : dapat diisikan
                                dengan kode CVV yang tertera pada kartu (3 digit angka)</li>
                            <li>Cek kembali data kartu yang telah diisi, pastikan tidak ada salah ketik.</li>
                            <li>Kemudian klik “Confirm &amp; Pay” maka Anda akan masuk ke tampilan input OTP oleh Bank
                                Issuer Kartu Kredit/Debit Anda</li>
                            <li>Cek SMS yang dikirimkan oleh Bank Issuer Kartu Kredit/Debit Anda, dan masukan angka OTP
                                pada tampilan input OTP kemudian lanjutkan pembayaran.</li>
                            <li>Pembayaran selesai Anda dapat kembali ke Aplikasi merchant</li>
                        </ul>
                    </div>

                    <div id="snav-content2">
                        <h3>ATM</h3>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        ATM Bersama
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Pilih metode pembayaran Transfer VA ATM Bersama.</li>
                                            <li>Pilih Menu Transfer / Transfer ke Bank lain.</li>
                                            <li>Masukkan Kode Institusi / Kode Bank ATMB Plus 987. Jika menggunakan ATM,
                                                kode bank yang menjadi tujuan adalah “987”</li>
                                            <li>Masukkan Kode Virtual Account. Jika menggunakan ATM, masukan kode
                                                Virtual Account pada mulai digit ke 4 setelah memasukan kode institusi
                                                987 (format:987[kode VA] misal: 987500001610731).</li>
                                            <li>Masukan Nominal yang akan dibayarkan.</li>
                                            <li>Konfirmasi Transaksi.</li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ATM Mandiri
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Pilih metode pembayaran VA Mandiri.</li>
                                            <li>Akses Mesin ATM dengan memasukan Kartu ATM Mandiri &amp; PIN ATM</li>
                                            <li>Silahkan pilih menu “Bayar/Beli”</li>
                                            <li>Selanjutnya akan muncul tipe pembayaran seperti Multi Payment dan Bill
                                                Payment (PLN, PDAM, dll), untuk pembayaran VA pilih “Muti Payment”</li>
                                            <li>Silahkan masukan kode perusahaan (5 digit pertama kode VA anda), lalu
                                                pilih “Benar”</li>
                                            <li>Masukan nomor Virtual Account Anda (contoh: 8890802001287578) dan klik
                                                “Benar”</li>
                                            <li>Pastikan semua informasi dan total tagihan yang ditampilkan sudah benar.
                                                Jika benar, tekan angka 1 dan pilih “Ya”</li>
                                            <li>Periksa layar konfirmasi dan pilih “Ya” untuk melakukan pembayaran</li>
                                            <li>Bukti pembayaran dalam bentuk struk agar disimpan sebagai bukti
                                                pembayaran yang sah dari Bank Mandiri</li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        ATM BNI
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Pilih metode pembayaran VA BNI</li>
                                            <li>Akses Mesin ATM dengan memasukan Kartu ATM BNI &amp; PIN ATM</li>
                                            <li>Pilih menu “Transfer” kemudian pilih rekening sumber</li>
                                            <li>Pilih menu “VA Billing” kemudian masukan nomor Virtual Account Anda
                                                (contoh: 8819800009871078)</li>
                                            <li>Konfirmasi transaksi</li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        ATM BCA
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Pilih metode pembayaran VA BCA</li>
                                            <li>Akses Mesin ATM dengan memasukan Kartu ATM BCA &amp; PIN ATM</li>
                                            <li>Pilih ‘Transaksi Lainnya’</li>
                                            <li>Pilih ‘Transfer’</li>
                                            <li>Pilih ‘Ke Rek BCA Virtual Account’</li>
                                            <li>Masukan Nomor BCA Virtual Account</li>
                                            <li>Validasi Pembayaran anda dengan pilih Ya</li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        ATM BRI
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Pilih metode pembayaran VA BRI</li>
                                            <li>Akses Mesin ATM dengan memasukan Kartu ATM BRI &amp; Pin ATM</li>
                                            <li>Pilih ‘Transaksi Lain’</li>
                                            <li>Pilih ‘Pembayaran’</li>
                                            <li>Pilih ‘Lainnya’</li>
                                            <li>Pilih ‘BRIVA’</li>
                                            <li>Masukan kode Virtual Account BRIVA anda</li>
                                            <li>Konfirmasi Pembayaran Anda</li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="snav-content3">

                        <h3>Internet Banking</h3>
                        <div class="accordion" id="accordionExample1">
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Internet Banking Mandiri Online
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample1" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>It was announced that PT.Indosat Tbk’ s(“Indosat Ooredoo”) shareholders
                                                voted to approve the proposed merger between Indosat Ooredoo and
                                                PT.Hutchison 3 Indonesia(“H3I”) at an Extraordinary General Meeting of
                                                Shareholder(EGMS).The merged entity will remain PT Indosat Tbk.</li>
                                            <li>Pilih metode pembayaran VA Mandiri.</li>
                                            <li>Pilih menu “Pembayaran”.</li>
                                            <li>Pilih menu “Multi Payment”.</li>
                                            <li>Silahkan pilih “No Rekening Anda”.</li>
                                            <li>Pilih “Penyedia Jasa”, (5 digit pertama kode VA anda)</li>
                                            <li>Pilih “No Virtual Account” dan masukan “Nomor Virtual Account”</li>
                                            <li>Masuk ke halaman konfirmasi 1. Apabila sudah sesuai, klik “Tagihan
                                                Total”, kemudian “Lanjutkan”</li>
                                            <li>Masuk ke halaman konfirmasi 2. Masukan Challenge Code yang dikirimkan ke
                                                Token Internet Banking Anda, kemudian “Kirim”</li>
                                            <li>Anda akan masuk ke halaman konfirmasi jika pembayaran telah selesai.
                                            </li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Internet Banking BNI
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample1" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Pilih metode pembayaran VA BNI</li>
                                            <li>Buka / Akses Internet Banking BNI</li>
                                            <li>Pilih menu “Transfer”</li>
                                            <li>Pilih “Virtual Account Billing”</li>
                                            <li>Kemudian masukan nomor Virtual Account (contoh: 8819800009111978) yang
                                                hendak dibayarkan. Lalu pilih rekening debet yang akan digunakan.
                                                Kemudian tekan “lanjut”</li>
                                            <li>Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi</li>
                                            <li>Masukan Kode Otentikasi Token Anda (”Password”) dan “mToken internet
                                                banking”</li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Internet Banking Klik BCA
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample1" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Pilih metode pembayaran VA BCA</li>
                                            <li>Akses akun KlikBCA</li>
                                            <li>Pilih ‘Transfer Ke BCA Virtual Account’</li>
                                            <li>Masukan Nomor BCA Virtual Account</li>
                                            <li>Pilih ‘Lanjutkan’ untuk melanjutkan pembayaran</li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Internet Banking BRI
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample1" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Pilih metode pembayaran VA BRI</li>
                                            <li>Buka / Akses Internet Banking BRI</li>
                                            <li>Pilih menu “Pembayaran”</li>
                                            <li>Pilih menu “Briva”</li>
                                            <li>Masukan nomor Virtual Account Anda (contoh: 8878800009048788) dan pilih
                                                “Kirim”</li>
                                            <li>Masukan kata sandi Anda (”password”) dan “mToken internet banking”</li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="snav-content4">
                        <h3>Mobile Banking</h3>
                        <div class="accordion" id="accordionExample2">
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Mobile Banking New Livin' Mandiri
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample2" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Pilih metode pembayaran VA Mandiri.</li>
                                            <li>Buka Aplikasi New Livin’ Mandiri.</li>
                                            <li>Pilih menu “Bayar”.</li>
                                            <li>Masukan kode perusahaan (5 (lima) digit pertama dari kode VA anda).</li>
                                            <li>Masukan nomor Virtual Account Anda dengan kode perusahaan (contoh
                                                8830802001234567), kemudian pilih ‘Lanjut’.</li>
                                            <li>Input nominal tagihan Anda.</li>
                                            <li>Selanjutnya akan muncul tampilan konfirmasi pembayaran. Pastikan semua
                                                informasi dan total tagihan sudah benar dan lanjutkan konfirmasi
                                                pembayaran.</li>
                                            <li>Masukan PIN Anda dan pilih “OK”</li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        BNI Mobile
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample2" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Pilih metode pembayaran VA BNI</li>
                                            <li>Buka / Akses Aplikasi BNI Mobile</li>
                                            <li>Pilih menu “Transfer”</li>
                                            <li>Pilih menu “Virtual Account Billing” kemudian pilih rekening debet</li>
                                            <li>Masukan nomor Virtual Account Anda (contoh: 8819800009871078) pada menu
                                                “input baru”</li>
                                            <li>Tagihan yang harus di bayarkan akan muncul pada layar konfirmasi</li>
                                            <li>Konfirmasi transaksi dan masukan Password Transaksi</li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        BRI Mobile
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample2" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Pilih metode pembayaran VA BRI</li>
                                            <li>Buka / Akses Aplikasi BRIMo</li>
                                            <li>Pilih menu “Briva”</li>
                                            <li>Pilih ‘Pembayaran Baru’</li>
                                            <li>Masukan nomor Virtual Account Anda (contoh: 8878800009048788)</li>
                                            <li>Klik ‘Lanjutkan’</li>
                                            <li>Masukan kode PIN Mobile Banking Anda dan pilih “Kirim”</li>
                                            <li>Pembayaran selesai</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div id="snav-content5">
                        <h3>E-Wallet</h3>
                        <ul class="no_ul custom-margin">
                            <li>Buka Browser pada Komputer/Handphone/Tablet Kamu</li>
                            <li>Masuk ke website hifi.co.id</li>
                            <li>Pilih dan klik menu “Masuk”.</li>
                            <li>Setelah masuk lalu pilih “Bayar”</li>
                            <li>Setelah itu akan keluar “Ringkasan” total yang harus Kamu bayarkan</li>
                            <li>Klik “Lanjutkan”</li>
                            <li>Pilih “Metode Pembayaran”</li>
                            <li>Pilih Metode Pembayaran melalui E-Wallet (OVO, Gopay, DANA, Shopee Pay, IMKAS)</li>
                            <li>Lengkapi nomor Selular yang terhubung dengan e-wallet Kamu dan pastikan Dana tersedia di
                                dalam e-wallet yang akan dipakai.</li>
                            <li>Klik bayar</li>
                            <li>Buka aplikasi E-Wallet di smartphone/tablet Kamu, lalu cek notifikasi untuk melanjutkan
                                pembayaran melalui E-Wallet yang Kamu pilih sebelumnya (OVO, Gpay,dana, spay, IMKAS).
                            </li>
                            <li>Lakukan konfirmasi dengan menekan tombol “Bayar”.</li>
                            <li>Anda akan mendapatkan bukti transaksi jika proses pembayaran telah berhasil dilakukan.
                            </li>
                        </ul>
                    </div>

                    <div id="snav-content6">
                        <h3>Minimarket</h3>
                        <div class="accordion" id="accordionExample3">
                            <div class="accordion-item">
                                <h2 class="mb-0" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        INDOMARET
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample3" style="">
                                    <div class="accordion-body">
                                        <ul class="no_ul custom-margin">
                                            <li>Kunjungi gerai Indomaret terdekat dari rumah Anda</li>
                                            <li>Sebutkan nomor akun Indosat HiFi Anda ke kasir Indomaret</li>
                                            <li>Lakukan pembayaran sesuai jumlah tagihan</li>
                                            <li>Setelah selesai Anda akan menerima bukti pembayaran Indosat HiFi</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



    </div>



    @endsection
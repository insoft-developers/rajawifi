@extends('frontend.master')
@section('content')



<!-- Content
			============================================= -->

<div style="margin-top:-50px"></div>
<div class="section bg-transparent">
    <!-- 
    <div class="form-group">

        <label>Location/City/Address</label>

        <input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Choose Location">

    </div>



    <div class="form-group" id="latitudeArea">

        <label>Latitude</label>

        <input type="text" id="latitude" name="latitude" class="form-control">

    </div>



    <div class="form-group" id="longtitudeArea">

        <label>Longitude</label>

        <input type="text" name="longitude" id="longitude" class="form-control">

    </div>

    <button type="submit" class="btn btn-primary">Submit</button> -->

    <div class="container mb-3">
        <div id="map"></div>
    </div>
    <div class="area-input">
        <div class="form-group">

            <label style="color:orange;">Pilih Area Untuk Cek Jangkauan RAJAWIFI Anda</label>

            <input type="search" name="autocomplete" id="autocomplete" class="autocomplete-text"
                placeholder="Pilih Area"><a href="javascript:void(0);"><i id="icon-delete-place" style="display:none;"
                    class="icon-remove clear-text"></i></a>
            <button onclick="cekArea()" style="margin-top:20px;" class="btn-login">Cek Sekarang</button>

        </div>

    </div>


</div>


<div id="modal-coverage" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-body">
                <center><img src="{{ url('frontend/template/images/lokasi.png') }}" class="location-modal-icon">
                    <br>
                    <br>
                    <h4>Terima kasih sudah tertarik dengan layanan RAJAWIFI</h4>
                    <p class="mb-0">Kami mohon maaf, saat ini alamat yang di masukan belum tersedia jaringan RAJAWIFI. Namun, Anda dapat mengisi data lengkap dengan mengklik "Selanjutnya" untuk mendapatkan
                        pemberitahuan jika layanan RAJAWIFI sudah tersedia di area Anda</p>
                        <br>
                        <br>
                        <button class="btn-register">Selanjutnya</button>
                </center>
            </div>
        </div>
    </div>
</div>

@endsection
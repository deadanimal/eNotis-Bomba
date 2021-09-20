@extends('layouts.base')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-3 text-dark" href="javascript:;">
                            <i class="fas fa-list me-sm-1 text-dark"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Notis Baru</a></li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Notis Baru</h6>
            </nav>
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link text-body p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <!-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <div class="input-group">
                                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Type here...">
                            </div>
                        </div> -->
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    {{-- <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                            aria-labelledby="dropdownMenuButton">
                            {{-- <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
                                                alt="user image">
                                        </div>
                                    </div>
                                </a>
                            </li> 
                            <li>
                               
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    {{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
              <script type="text/javascript">
                $(function() {
              $("#lokasi").change(function() {
              if ($(this).val() == "Lain") {
                    $("#lokasi_lain").show();
               } else {
              $("#dvPassport").hide();
                  }
                    });
         });
      </script> --}}
    {{-- <script>
        function lokasi_lain()
        {
            var lokasi_notis = document.getElementById('lokasi');
            if (lokasi_notis.value="lain"){
                document.getElementById('lokasi-lain').style.visibility="visible";
            }

            else{
                document.getElementById('lokasi-lain').style.visibility="visible";

            }
        }
    </script>    --}}

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="mt-5">NOTIS BARU</h3>
                <h6 class="text-secondary font-weight-normal">JADUAL PERTAMA AKTA PERKHIDMATAN BOMBA 1988</h6>
                <h6 class="text-secondary font-weight-normal">BORANG A SEKSYEN 8(1)</h6>
                <h6 class="text-secondary font-weight-normal">NOTIS MENGHAPUS BAHAYA KEBAKARAN</h6>
                <div class="multisteps-form mb-5">
                    <!--progress bar-->
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto my-5">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                                    <span>Maklumat Premis</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Address">
                                    <span>Kesalahan</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                                    <span>Gambar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form" method="POST" action="/notis" enctype="multipart/form-data">
                                @csrf
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                    <div class="row text-center">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">Sila isi maklumat berikut:</h5>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-8 mt-4 mt-sm-0 text-start">
                                                <label>TARIKH PEMERIKSAAN</label>
                                                <input class="multisteps-form__input form-control mb-3" type="date" placeholder="01-01-2021" name="tarikh_pemeriksaan" />
                                                <label>NAMA PREMIS</label>
                                                <select class="multisteps-form__input form-control mb-3" name="id_premis">
                                                    <option hidden>SILA PILIH</option>
                                                   @foreach($premis as  $premis)
                                                      <option value="{{$premis->id}}">{{$premis->nama_premis}}</option>
                                                     @endforeach 
                                                </select>
                                                
                                                {{-- <label>ALAMAT PREMIS</label>
                                                <textarea class="multisteps-form__input form-control mb-3" name="alamat" placeholder="C3A12, Metropolitan Square, Center Wing, Jalan PJU 8/1, 47820 Petaling Jaya, Selangor"></textarea> --}}
                                                <label>NO. SIRI RUJUKAN</label>
                                                {{--<input type="text" name="no_siri" class="multisteps-form__input form-control mb-3"> --}}
                                                <!-- <input class="multisteps-form__input form-control mb-3" type="text" placeholder="Eg. JPBM" /> -->
                                                 <div class="input-group">
                                                    <span class="input-group-text">JBPM/KL/TDI:700-</span>
                                                    <input type="text" aria-label="input1" class="multisteps-form__input form-control" name="input1">
                                                    <span class="input-group-text">/</span>
                                                    <input type="text" aria-label="input2" class="multisteps-form__input form-control" name="input2">
                                                    <span class="input-group-text">/</span>
                                                    <input type="text" aria-label="input3" class="multisteps-form__input form-control" name="input3">

                                                </div> 
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Seterusnya</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                    <div class="row text-center">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">Kesalahan</h5>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-8 mt-4 mt-sm-0 text-start">
                                                <label>JENIS PPK</label>
                                                <select class="multisteps-form__input form-control mb-3" name="jenis_ppk" id="jenis_ppk">
                                                    <option hidden selected>Sila Pilih</option>
                                                        <option value="Pam Jokey">Pam Jokey</option>
                                                        <option value="Pam Duty">Pam Duty</option>
                                                        <option value="Pam Standby">Pam Standby</option>
                                            
                                                    <!-- <option value="1">PAM</option> -->
                                                    <option value="pintu api">Pintu Api</option>
                                                    <option value="alat pemadam api">Alat Pemadam Api</option>
                                                    <option value="lampu kecemasan">Lampu Kecemasan</option>
                                                    <option value="tanda tempat keluar kecemasan">Tanda Tempat Keluar Kecemasan</option>
                                                    <option value="tangga">Tangga</option>
                                                    <option value="pemegang injap sistem gelung hos">Pemegang Injap Sistem Gelung Hos</option>
                                                    <option value="panel penggera kebakaran">Panel Penggera Kebakaran</option>
                                                    <option value="sistem penggera kebakaran utama">Sistem Penggera Kebakaran Utama</option>
                                                    <option value="pili bomba">Pili Bomba</option>
                                                </select>

                                                <label>KESALAHAN</label>
                                                <select class="multisteps-form__input form-control mb-3" name="kesalahan">
                                                    <option hidden selected>Sila Pilih</option>
                                                    <option value="tiada">Tiada</option>
                                                    <option value="tidak diselenggara">Tidak Diselenggara</option>
                                                    <option value="tidak berfungsi">Tidak Berfungsi</option>
                                                    <option value="tamat tempoh dan tidak diselenggara">Tamat tempoh dan tidak diselenggara</option>
                                                    <option value="rosak">Rosak</option>
                                                    <option value="mempunyai halangan">Mempunyai halangan</option>
                                                    <!-- <option value="5">5</option> -->
                                                </select>
                                                <label>ARAS/TINGKAT</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">Aras</span>
                                                    <input type="number" aria-label="aras" class="multisteps-form__input form-control" name="aras" placeholder="Sila Nyatakan Aras">
                                                </div>
                                                

                                                {{-- <select class="multisteps-form__input form-control mb-3" name="aras" id="aras">
                                                    <option hidden selected>Sila Pilih</option>
                                                    <option value="aras 1">Aras 1</option>
                                                    <option value="aras 2">Aras 2</option>
                                                    <option value="aras 3">Aras 3</option>
                                                    <option value="aras 4">Aras 4</option>
                                                    <option value="aras 5">Aras 5</option>
                                                    <option value="lain">Lain-Lain</option>
                                                </select>
                                                <input type="text" name="lokasi_lain " id="lokasi_lain"  class="multisteps-form__input form-control mb-3" style="display: none"> --}}

                                                <label>LOKASI</label>
                                                <input type="text" name="lokasi" class="multisteps-form__input form-control mb-3" style="text-transform:lowercase">


                                                <label>PEMBETULAN</label>
                                                <select class="multisteps-form__input form-control mb-3" name="pembetulan">
                                                    <option hidden selected>Sila Pilih</option>
                                                    <option value="mengadakan">Mengadakan</option>
                                                    <option value="membaik pulih">Membaik Pulih</option>
                                                    <option value="membuat penyelengaraan">Membuat Penyelengaraan</option>
                                                    <option value="membuka halangan">Membuka Halangan</option>
                                                </select>

                                                <label>Seksyen</label>
                                                <select class="multisteps-form__input form-control mb-3" name="seksyen">
                                                    <option hidden selected>Sila Pilih</option>
                                                    <option value="Seksyen 2(A)">Seksyen 2(A)</option>
                                                    <option value="Seksyen 2(B)">Seksyen 2(B)</option>
                                                    <option value="Seksyen 2(C)">Seksyen 2(C)</option>
                                                    <option value="Seksyen 2(D)">Seksyen 2(D)</option>
                                                    <option value="Seksyen 2(E)">Seksyen 2(E)</option>
                                                    <option value="Seksyen 2(F)">Seksyen 2(F)</option>
                                                </select>
                                                <label>TEMPOH</label>
                                                <select class="multisteps-form__input form-control mb-3" name="tempoh">
                                                    <option hidden selected>Sila Pilih</option>
                                                    <option value="30 hari">30 Hari</option>
                                                    <option value="60 hari">60 Hari</option>
                                                    <option value="90 hari">90 Hari</option>
                                                    <option value="120 hari">120 Hari</option>
                                                    <option value="150 hari">150 Hari</option>
                                                    <option value="180 hari">180 Hari</option>
                                                    <option value="360 hari">360 Hari</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                    <div class="row text-center">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">MUAT NAIK GAMBAR</h5>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row text-start">
                                            <!-- <div class="col-12 col-md-8 ms-auto mt-3">
                                                <label>Street Name</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="Eg. Soft" />
                                            </div> -->
                                            <div class="col-12 col-md-4 ms-auto mt-3">
                                                {{-- <div action="/file-upload" class="form-control dropzone" id="productImg"></div> --}}
                                                <input type="file" accept="image/*;capture=camera" name="img_notis">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Kembali</button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Send">Hantar</button> 
                                            
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
        
        {{-- <script>
//             function lokasi_lain(){
//                 var lokasi = document.getElementById('lokasi');
//                     if (lokasi=='lain')
//                     {
//                         document.getElementById(lain).style.display.block();

//                     }
//                     else {
//                     document.getElementById(lain).style.display.none();
//                     }
//             }

//             }
            
// </script> --}}

{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script type="text/javascript">
                 $(function() {
                      $("#aras").change(function() {
                              if ($(this).val() == "lain") {
                                $("#lokasi_lain").show();

                               } else {
                               $("#lokasi_lain").hide();
                               }
                      });
            });
     </script> --}}

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- <script>
    $(tujuan).ready(function(){
        var ppk = $("#jenis_ppk").val();
        var tujuan;
        
        $("#jenis_ppk").click(function(){
            
            if($(this).val()=="pintu api"){
                tujuan="MEMASTIKAN PINTU API SENTIASA BERADA DALAM KEADAAN BAIK DAN HENDAKLAH DITUTUP PADA SETIAP MASA";
            }

            if($(this).val()=="alat pemadam api"){
                tujuan="MEMASTIKAN ALAT PEMADAM API MUDAH ALIH DISEDIAKAN MENGIKUT PIAWAIAN MALAYSIA 1539, DAN SENTIASA BERADA DALAM KEADAAN BAIK"; 
            }

            if($(this).val()=="lampu kecemasan"){
                tujuan="MEMASTIKAN LAMPU KECEMASAN SENTIASA BERADA DALAM KEADAAN BAIK DAN MEMATUHI PIAWAIAN MALAYSIA (MS) 619";
            }

            if($(this).val()=="tanda tempat keluar kecemasan"){
                tujuan="MEMASTIKAN TANDA TEMPAR KELUAR KECEMASAN BERFUNGSI DAN BERADA DALAM KEADAAN BAIK SETIAP MASA";
            }

            if($(this).val()=="pemegang injap sistem gegelung hos"){
                tujuan="MEMASTIKAN SISTEM GELUNG HOS SENTIASA BERADA DALAM KEADAAN BAIK DAN BOLEH DIGUNAKAN PADA BILA-BILA MASA";
            }

            if($(this).val()=="tangga"){
                tujuan="MEMASTIKAN TIADA HALANGAN PADA TANGGA JALAN KELUAR UNTUK MENCEGAH KEMASUKAN ASAP BAGI TUJUAN PELEPASAN DIRI DAN SELAMAT DILALUI SEKIRANYA BERLAKU KEBAKARAN";
            }

            if($(this).val()=="panel penggera kebakaran"){
                tujuan="MEMASTIKAN PANEL PENGGERA KEBAKARAN BERFUNGSI DAN SENTIASA BERADA DALAM KEADAAN BAIK";
            }

            if($(this).val()=="sistem penggera kebakaran utama"){
                tujuan="MEMASTIKAN SISTEM PENGGERA KEBAKARAN UTAMA BERFUNGSI DAN SENTIASA BERADA DALAM KEADAAN BAIK";
            }

            if($(this).val()=="pili bomba"){
                tujuan="MEMASTIKAN PILI BOMBA PREMIS SENTIASA BERADA DALAM KEADAAN BAIK DAN BOLEH DIGUNAKAN PADA BILA-BILA MASA";
            }

            if($(this).val()=="Pam Standby"){
                tujuan="MEMASTIKAN PAM STANDBY PREMIS SENTIASA BERADA DALAM KEADAAN BAIK DAN BOLEH DIGUNAKAN PADA BILA-BILA MASA";
            }

            if($(this).val()=="Pam Duty"){
                tujuan="MEMASTIKAN PAM DUTY PREMIS SENTIASA BERADA DALAM KEADAAN BAIK DAN BOLEH DIGUNAKAN PADA BILA-BILA MASA";

            }

            if($(this).val()="Pam Jokey"){
                tujuan="MEMASTIKAN PAM JOKEY PREMIS SENTIASA BERADA DALAM KEADAAN BAIK DAN BOLEH DIGUNAKAN PADA BILA-BILA MASA";
            }

            // Send the input data to the server using get
            $.get("/examples/php/create-table.php", {number: tujuan} , function(tujuan){

            // Display the returned data in browser
            $("#tujuan").html(data);

            });
        });
    });
    </script> --}}


              
                    <!-- <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </footer>
    </div>
</main>
<!--   Core JS Files   -->
<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>
<script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
<!-- Kanban scripts -->
<script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
<script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
<script src="../../assets/js/plugins/multistep-form.js"></script>
<script src="../../assets/js/plugins/choices.min.js"></script>
<script src="../../assets/js/plugins/dropzone.min.js"></script>
<script>


        // Instantiate FileReader
        var reader = new FileReader();
        reader.onload = function() {
            imageFile = reader.result;

            document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile + '" class="rounded-circle w-100 shadow" />';
        };
        reader.readAsDataURL(input.files[0]);
    };

}
</script>
@stop
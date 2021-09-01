@extends('layouts.base')

@section('content')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
            id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-3 text-dark" href="javascript:;">
                                <i class="fas fa-business-time me-sm-1 text-dark"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Papar
                                Borang</a></li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Papar Borang</h6>
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
        <div class="container-fluid py-4">
            <div class="row">
                {{-- <div class="col-xl-12 mb-4">
                    <img src="../../assets/img/borangA.png" alt="Borang A" style="height: 350px;">
                </div> --}}

                <div class="col-xl-12 mb-4 text-center">
                    {{-- <img src="../../assets/img/padam-api.jpeg" alt="Gambar Bukti" style="height: 350px;" value={{$notis->img_notis}}> --}}
                    <img src="/storage/{{$notis->img_notis}}" style="height: 350px;">
                    
                </div>

                <form method="POST" action="/notis/{{$notis->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mt-3">
                        <div class="col-12 col-sm-8 mt-4 mt-sm-0 text-start">
                                    <label>TARIKH PEMERIKSAAN</label>
                                    <input class="multisteps-form__input form-control mb-3" type="date" value='{{$notis->tarikh_pemeriksaan}}' name="tarikh_pemeriksaan" disabled/>

                                    <label>Nama Premis</label> 
                                    <select class="multisteps-form__input form-control mb-3" name="id_premis" disabled>
                                        @foreach($premis as $premis)
                                        <option @if ($notis->id_premis=='{{$notis->id_premis}}') selected @endif value="{{$notis->id_premis}}">{{$premis->nama_premis}}</option>
                                        @endforeach 
                                    </select>

                                    <label>NO. SIRI RUJUKAN</label> 
                                    <input type="text" name="no_siri" value="{{$notis->no_siri}}"  class="multisteps-form__input form-control mb-3" disabled>
                                    

                                    <label>JENIS PPK  </label>
                                    <select class="multisteps-form__input form-control mb-3" name="jenis_ppk" disabled>
                                        <option @if ($notis->jenis_ppk == 'Pam Jokey') selected @endif value='Pam Jokey'>Pam Jokey</option>
                                        <option @if ($notis->jenis_ppk == 'Pam Duty') selected @endif value='Pam Duty'>Pam Duty</option>
                                        <option @if ($notis->jenis_ppk == 'Pam Standby') selected @endif value='Pam Standby' >Pam Standby</option>
                                        <option @if ($notis->jenis_ppk == 'Pintu api') selected @endif value='Pintu api'>Pintu Api</option>
                                        <option @if ($notis->jenis_ppk == 'Alat pemadam api') selected @endif value='Alat pemadam api'>Alat Pemadam Api</option>
                                        <option @if ($notis->jenis_ppk == 'Tangga') selected @endif value='Tangga'>Tangga</option>
                                        <option @if ($notis->jenis_ppk == 'Lampu kecemasan') selected @endif value='Lampu kecemasan'>Lampu Kecemasan</option>
                                        <option @if ($notis->jenis_ppk == 'Sistem penggera kebakaran utama') selected @endif value='Sistem penggera kebakaran utama'>Sistem Penggera Kebakaran Utama</option>
                                        <option @if ($notis->jenis_ppk == 'Tanda tempat kecemasan') selected @endif value='Tanda tempat kecemasan'>Tanda Tempat Kecemasan</option>
                                        <option @if ($notis->jenis_ppk == 'Panel penggera kebakaran') selected @endif value='Panel penggera kebakaran'>Panel Penggera Kebakaran</option>
                                        <option @if ($notis->jenis_ppk == 'Pili bomba') selected @endif value='Pili bomba'>Pili Bomba</option>


                                    </select>

                                    <label>KESALAHAN</label>
                                    <select name="kesalahan" class="form-control mb-3" disabled>
                                        <option @if ($notis->kesalahan == 'tiada') selected @endif value='tiada'>Tiada</option>
                                        <option @if ($notis->kesalahan == 'tidak diselenggara') selected @endif value="tidak diselenggara">Tidak Diselenggara
                                        </option>
                                        <option @if ($notis->kesalahan == 'tamat tempoh dan tidak diselenggara') selected @endif value="tamat tempoh dan tidak diselenggara" >Tamat Tempoh dan Tidak Diselenggara</option>
                                        <option @if ($notis->kesalahan == 'rosak') selected @endif value="rosak">Rosak</option>
                                    </select>

                                    <label>ARAS/TINGKAT</label>
                                    <input type="text" name="aras" value="{{$notis->aras}}" class="form-control mb-3" disabled>

                                        {{-- <select class="form-control mb-3" name="lokasi">
                                        <option @if ($notis->lokasi == 'Tingkat 1') selected @endif value="Tingkat 1">Tingkat 1</option>
                                        <option @if ($notis->lokasi == 'Tingkat 2') selected @endif value="Tingkat 2">Tingkat 2</option>
                                        <option @if ($notis->lokasi == 'Tingkat 3') selected @endif value="Tingxkat 3">Tingkat 3</option>
                                        <option @if ($notis->lokasi == 'Tingkat 4') selected @endif value="Tingkat 4">Tingkat 4</option>
                                        <option @if ($notis->lokasi == 'Tingkat 5') selected @endif value="Tingkat 5">Tingkat 5</option>
                                        <option @if ($notis->lokasi == 'Lain') selected @endif value="lain">LAIN-LAIN</option>
                                    </select> --}}

                            
                                    <label>LOKASI</label>
                                    <input type="text" name="lokasi" value="{{$notis->lokasi}}" class="form-control mb-3"disabled>
                                    {{-- <select class="form-control mb-3" name="lokasi">
                                        <option @if ($notis->lokasi == 'Tingkat 1') selected @endif value="Tingkat 1">Tingkat 1</option>
                                        <option @if ($notis->lokasi == 'Tingkat 2') selected @endif value="Tingkat 2">Tingkat 2</option>
                                        <option @if ($notis->lokasi == 'Tingkat 3') selected @endif value="Tingxkat 3">Tingkat 3</option>
                                        <option @if ($notis->lokasi == 'Tingkat 4') selected @endif value="Tingkat 4">Tingkat 4</option>
                                        <option @if ($notis->lokasi == 'Tingkat 5') selected @endif value="Tingkat 5">Tingkat 5</option>
                                        <option @if ($notis->lokasi == 'Lain') selected @endif value="lain">LAIN-LAIN</option>
                                    </select> --}}
                                    
                                    <label>PEMBETULAN</label>
                                    <select class="form-control mb-3" name="pembetulan" disabled>
                                        <option @if ($notis->pembetulan == 'mengadakan') selected @endif value="mengadakan">Mengadakan</option>
                                        <option  @if ($notis->pembetulan == 'membaik pulih') selected @endif value="membaik pulih">Membaik pulih</option>
                                        <option @if ($notis->pembetulan == 'membuat penyelengaraan') selected @endif value="membuat penyelengaraan">Membuat
                                            penyelengaraan</option>
                                        <option @if ($notis->pembetulan== 'membuka halangan') selected @endif value="membuka halangan">Membuka halangan</option>
                                    </select>

                                    <label>Seksyen</label>
                                    <select class="form-control mb-3" name="seksyen" disabled>
                                        <option @if ($notis->seksyen == 'Seksyen 2(A)') selected @endif value="Seksyen 2(A)">Seksyen 2(A)</option>
                                        <option @if ($notis->seksyen == 'Seksyen 2(B)') selected @endif value="Seksyen 2(B)">Seksyen 2(B)</option>
                                        <option @if ($notis->seksyen == 'Seksyen 2(C)') selected @endif value="Seksyen 2(C)">Seksyen 2(C)</option>
                                        <option @if ($notis->seksyen == 'Seksyen 2(D)') selected @endif value="Seksyen 2(D)">Seksyen 2(D)</option>
                                        <option @if ($notis->seksyen == 'Seksyen 2(E)') selected @endif value="Seksyen 2(E)">Seksyen 2(E)</option>
                                        <option @if ($notis->seksyen == 'Seksyen 2(F)') selected @endif value="Seksyen 2(F)">Seksyen 2(F)</option>

                                    </select>

                                    <label>TEMPOH</label>
                                    <select class="form-control mb-3" name="tempoh" disabled>
                                        <option @if ($notis->tempoh == '30 hari') selected @endif value="30 hari">30 Hari</option>
                                        <option @if ($notis->tempoh == '60 hari') selected @endif value="60 hari">60 Hari</option>
                                        <option @if ($notis->tempoh == '90 hari') selected @endif value="90 hari">90 Hari</option>
                                        <option @if ($notis->tempoh == '120 hari') selected @endif value="120 hari">120 Hari</option>
                                        <option @if ($notis->tempoh == '150 hari') selected @endif value="150 hari">150 Hari</option>
                                        <option @if ($notis->tempoh == '180 hari') selected @endif value="180 hari">180 Hari</option>
                                        <option @if ($notis->tempoh == '360 hari') selected @endif value="360 hari">360 Hari</option>
                                    </select>

                                    <label>STATUS</label>
                                    <select class="form-control mb-3" name="status"disabled>
                                        <option @if ($notis->status =='Siap') selected @endif value="Siap">Siap</option>
                                        <option @if ($notis->status =='Hantar') selected @endif value="Hantar">Hantar</option>
                                    </select>

        
                                </div>

                            </div>
                            
                            <div class="col-xl-12">
                                {{-- <button class="btn btn-success w-100 mt-3 mb-2" onclick="soft.showSwal('success-message')">Kemaskini</button> --}}
                                <a href="/cetak-notis/{{$notis->id}}" class="btn btn-success w-100 mt-3 mb-2">Cetak</a>
                                <a href="/notis-siap" class="btn btn-secondary w-100">Kembali</a>
                                {{-- <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#emailModal">Hantar</button> --}}

                            </div>
                        </form>
                    </div>
                </form>
                        {{-- <a href="javascript:;" class="btn btn-warning w-100">Kemaskini</a> --}}

                    </div>
                </form>

                <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalemail"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-0 text-center">
                                <div class="card card-plain">
                                    <div class="card-header pb-0 text-left">
                                        <h3 class="font-weight-bolder text-dark">Masukkan Emel</h3>
                                        <p class="mb-0">Sila taip alamat email diikuti dgn (,) bagi menghantar emel kepada
                                            lebih dari satu penerima.</p>
                                    </div>
                                    <div class="card-body pb-3">
                                        <textarea class="form-control mb-3" rows="3"></textarea>
                                        <a href="/cetaknotis" type="button"
                                            class="btn btn-success w-100">Hantar</a>
                                        <button type="button" class="btn bg-gradient-secondary w-100"
                                            data-bs-dismiss="modal">Kembali</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </div>
                    </div>
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
    {{-- <script src="../../assets/js/plugins/sweetalert.min.js"></script> --}}

    <script>
        
@stop

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
                                <i class="fas fa-id-badge me-sm-1 text-dark"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Maklumat
                                Premis</a></li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Maklumat Premis</h6>
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
        <div class="container-fluid py-4">
            <div class="row">
                    <div class="col-xl-12">
                        <div class="form-group">
                        
               <form method="POST" action="/premis/{{$premis->id}}">
                 @csrf
                 @method('PUT')

                 <label class="form-control-label">Nama Premis</label>
                            <input class="form-control" type="text"  id="nama_premis" name="nama_premis" value="{{$premis->nama_premis}}">

                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label class="form-control-label">Alamat</label>
                            <textarea class="form-control" rows="3" id="alamat" name="alamat">{{$premis->alamat}}</textarea>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                           <label class="form-control-label">Jenis Perniagaan</label>
                            <select class="form-control mb-3" id="jenis_perniagaan" name="jenis_perniagaan">
                                {{-- <option selected value="{{$premis->jenis_perniagaan}}">{{$premis->jenis_perniagaan}}</option> --}}
                                <option @if ($premis->jenis_perniagaan == '1') selected @endif value="1">Kediaman</option>
                                <option @if ($premis->jenis_perniagaan == '2') selected @endif value="2">Institusi Pendudukan Pelajaran</option>
                                <option @if ($premis->jenis_perniagaan == '3') selected @endif value="3">Hospital dan Rumah Rawatan</option>
                                <option @if ($premis->jenis_perniagaan == '4') selected @endif value="4">Kediaman Lain</option>
                                <option @if ($premis->jenis_perniagaan == '5') selected @endif value="5">Pejabat</option>
                                <option @if ($premis->jenis_perniagaan == '6') selected @endif value="6">Kilang</option>
                                <option @if ($premis->jenis_perniagaan == '7') selected @endif value="7">Tempat Perhimpunan</option>
                                <option @if ($premis->jenis_perniagaan == '8') selected @endif value="8">Storan dan Am</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label class="form-control-label">Pemilik Premis</label>
                            <input class="form-control" type="text" id="pemilik" name="pemilik" value="{{$premis->pemilik}}">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label class="form-control-label">No. Telefon</label>
                            <input class="form-control" type="text" id="no_tel" name="no_tel" value="{{$premis->no_tel}}">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label class="form-control-label">No. Premis</label>
                            <input class="form-control" type="text" id="nama_premis" value="{{$premis->no_premis}}" name="no_premis">
                        </div>

                    </div>
                    
                    <div class="col-xl-12">
                        {{-- <button class="btn btn-success w-100 mt-3 mb-2" onclick="soft.showSwal('success-message')">Kemaskini</button> --}}
                        <input type="submit" class="btn btn-success w-100 mt-3 mb-2"
                             value="Kemaskini">
                        <a href="/premis" class="btn btn-secondary w-100">Kembali</a>
                    </div>
                </form>
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
    <script src="../../assets/js/plugins/sweetalert.min.js"></script>
    <script src="../../assets/js/plugins/choices.min.js"></script>

@stop

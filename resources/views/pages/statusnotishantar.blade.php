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
                            <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Status Notis</a></li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Status Notis</h6>
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
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-6">
                        <a href="/notis" class="btn btn-default w-100"type="button">Siap</a>
                    </div>
                    <div class="col-6">
                        <a href="/notis-siap"  class="btn btn-info w-100" type="button">Dihantar</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 mb-3">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Carian">
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <!-- <h6>Jadual Pemeriksaan Semula</h6> -->
                    </div>
                    <div class="card-body p-3">
                        <div class="timeline timeline-one-side" data-timeline-axis-style="dotted">
                            {{-- <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="fas fa-circle text-success text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h5 class="text-dark font-weight-bold mb-0">Pipeline Network Sdn Bhd</h5>
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-dark text-sm mb-0">2 NOTIS BORANG A</h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 Ogos 2021</p>
                                        </div>
                                        <div class="col-auto">
                                            <a href="/status-notis-edit" class="btn btn-icon btn-warning btn-sm" type="button">
                                                <span class="btn-inner--icon">
                                                    <i class="far fa-eye"> </i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="fas fa-circle text-danger text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h5 class="text-dark text-sm font-weight-bold mb-0">Akal Budi Resources</h5>
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-dark text-sm mb-0">1 NOTIS BORANG A</h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">23 Ogos 2021</p>
                                        </div>
                                        <div class="col-auto">
                                            <a href="/status-notis-edit" class="btn btn-icon btn-warning btn-sm" type="button">
                                                <span class="btn-inner--icon">
                                                    <i class="far fa-eye"> </i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="fas fa-circle text-danger text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                        @foreach ($notis as $notis)
                                        
                                <div class="row">
                                        <div class="col">
                                    <h5 class="text-dark text-sm font-weight-bold mb-0">{{$notis->no_siri}}</h5>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$notis->tarikh_pemeriksaan}}</p>
                                    {{-- <a href="/notis/{{$notis->id}}/edit" class="btn btn-icon btn-warning btn-sm" type="button"> --}}
                                        <a href='/status-siap/{{$notis->id}}' class="btn btn-icon btn-warning btn-sm" type="button">
                                            <span class="btn-inner--icon">
                                                <i class="far fa-eye"> </i>
                                            </span>
                                        </a>
                                    @endforeach
                                    {{-- <div class="row">
                                        <div class="col">
                                            <h6 class="text-dark text-sm mb-0">1 NOTIS BORANG A</h6>
                                        </div> --}}
                                        </div>
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
                            © Powered by PNSB
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
<script src="../../assets/js/plugins/choices.min.js"></script>

@stop
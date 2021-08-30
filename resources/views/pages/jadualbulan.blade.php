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
                            <i class="fas fa-calendar-alt me-sm-1 text-dark"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Jadual Pemeriksaan</a></li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Jadual Pemeriksaan</h6>
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
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-6">
                        <a href="/jadual-minggu" class="btn btn-default w-100" type="button">Mingguan</a>
                    </div>
                    <div class="col-6">
                        <a href="/jadual-bulanan" class="btn btn-info w-100" type="button">Bulanan</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card card-calendar">
                    <div class="card-body p-3">
                        <div class="calendar" data-bs-toggle="calendar" id="calendarjadualbulan"></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
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
<script src="../../assets/js/plugins/fullcalendar.min.js"></script>
<!-- Kanban scripts -->
<script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
<script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
<script src="../../assets/js/plugins/multistep-form.js"></script>
<script src="../../assets/js/plugins/choices.min.js"></script>

<script>
    var calendar = new FullCalendar.Calendar(document.getElementById("calendarjadualbulan"), {
        contentHeight: 'auto',
        initialView: "dayGridMonth",
        headerToolbar: {
            start: 'title', // will normally be on the left. if RTL, will be on the right
            center: '',
            end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
        },
        selectable: true,
        editable: true,
        initialDate: '2020-12-01',
        events: [{
                title: 'Call with Dave',
                start: '2020-11-18',
                end: '2020-11-18',
                className: 'bg-gradient-danger'
            },

            {
                title: 'Lunch meeting',
                start: '2020-11-21',
                end: '2020-11-22',
                className: 'bg-gradient-warning'
            },

            {
                title: 'All day conference',
                start: '2020-11-29',
                end: '2020-11-29',
                className: 'bg-gradient-success'
            },

            {
                title: 'Meeting with Mary',
                start: '2020-12-01',
                end: '2020-12-01',
                className: 'bg-gradient-info'
            },

            {
                title: 'Winter Hackaton',
                start: '2020-12-03',
                end: '2020-12-03',
                className: 'bg-gradient-danger'
            },

            {
                title: 'Digital event',
                start: '2020-12-07',
                end: '2020-12-09',
                className: 'bg-gradient-warning'
            },

            {
                title: 'Marketing event',
                start: '2020-12-10',
                end: '2020-12-10',
                className: 'bg-gradient-primary'
            },

            {
                title: 'Dinner with Family',
                start: '2020-12-19',
                end: '2020-12-19',
                className: 'bg-gradient-danger'
            },

            {
                title: 'Black Friday',
                start: '2020-12-23',
                end: '2020-12-23',
                className: 'bg-gradient-info'
            },

            {
                title: 'Cyber Week',
                start: '2020-12-02',
                end: '2020-12-02',
                className: 'bg-gradient-warning'
            },

        ],
        views: {
            month: {
                titleFormat: {
                    month: "long",
                    year: "numeric"
                }
            },
            agendaWeek: {
                titleFormat: {
                    month: "long",
                    year: "numeric",
                    day: "numeric"
                }
            },
            agendaDay: {
                titleFormat: {
                    month: "short",
                    year: "numeric",
                    day: "numeric"
                }
            }
        },
    });

    calendar.render();

    var ctx1 = document.getElementById("chart-line-1").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(255,255,255,0.3)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Visitors",
                tension: 0.5,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#fff",
                borderWidth: 2,
                backgroundColor: gradientStroke1,
                data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
                maxBarThickness: 6,
                fill: true
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    }
                },
            },
        },
    });
</script>

@stop
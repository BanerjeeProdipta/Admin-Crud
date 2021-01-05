<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Doctor Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('doc/images/favicon.png') }}">
    <link href="{{ asset('doc/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('doc/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Better Call Doctor
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link dz-fullscreen" href="#">
                                    <svg id="icon-full" viewBox="0 0 24 24" width="26" height="26" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        class="css-i6dzq1">
                                        <path
                                            d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                        </path>
                                    </svg>
                                    <svg id="icon-minimize" width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-minimize">
                                        <path
                                            d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <i class="flaticon-381-ring"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3"
                                        style="height:380px;">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2">
                                                        <img alt="image" width="50"
                                                            src="{{ asset('doc/images/avatar/1.jpg') }}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-info">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-success">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2">
                                                        <img alt="image" width="50"
                                                            src="{{ asset('doc/images/avatar/1.jpg') }}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-danger">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-primary">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <div class="header-info">
                                        <span>David Morse</span>
                                        <small>ADMIN</small>
                                    </div>
                                    <img src="{{ asset('doc/images/profile/pic1.jpg') }}" width="20" alt="" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="page-login" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a style="border:none; " href="">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">DashBoard</span>
                        </a>
                    </li>
                    <li><a style="border:none; " href="">
                            <i class="flaticon-381-internet"></i>
                            <span class="nav-text">Appointments</span>
                        </a>
                    </li>
                    <li><a style="border:none; " href="">
                            <i class="flaticon-381-internet"></i>
                            <span class="nav-text">Patients</span>
                        </a>
                    </li>
                    <li><a style="border:none; " href="">
                            <i class="flaticon-381-internet"></i>
                            <span class="nav-text">Patients</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                </div>
                                <div class="profile-info">
                                    <div class="profile-photo">
                                        <img src="{{ asset('doc/images/profile/profile.png') }}"
                                            class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="profile-details">
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-primary mb-0">Mitchell C. Shay</h4>
                                            <p>UX / UI Designer</p>
                                        </div>
                                        <div class="profile-email px-2 pt-2">
                                            <h4 class="text-muted mb-0">hello@email.com</h4>
                                            <p>Email</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics mb-5">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="m-b-0">{{ $doctor->appointment->count() }}</h3>
                                                <span>Appointments</span>
                                            </div>

                                            <div class="col">
                                                <h3 class="m-b-0">{{ $userCount }}</h3>
                                                <span>Patients</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void()" data-toggle="modal" data-target="#add-category"
                                    class="btn btn-primary btn-event w-100">
                                    Change Scedule
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-category">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="/scedule/{{ $doctor->id }}" method="POST">
                                    @csrf
                                    <div class="modal-header">
                                        <h4 class="modal-title"><strong>Set Availability</strong></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label><strong>Days :</strong></label><br>
                                            <label><input type="checkbox" name="days[]" value="Sunday">
                                                Sunday</label>
                                            <label><input type="checkbox" name="days[]" value="Monday">
                                                Monday</label>
                                            <label><input type="checkbox" name="days[]" value="Tuesday">
                                                Tuesday</label>
                                            <label><input type="checkbox" name="days[]" value="Wednesday">
                                                Wednesday</label>
                                            <label><input type="checkbox" name="days[]" value="Thursday">
                                                Thursday</label>
                                            <label><input type="checkbox" name="days[]" value="Friday">
                                                Friday</label>
                                            <label><input type="checkbox" name="days[]" value="Saturday">
                                                Saturday</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">From</label>
                                                <select class="form-control form-white"
                                                    data-placeholder="Choose a color..." name="from">
                                                    <option value="00:00">00:00</option>
                                                    <option value="01:00">01:00</option>
                                                    <option value="02:00">02:00</option>
                                                    <option value="03:00">03:00</option>
                                                    <option value="04:00">04:00</option>
                                                    <option value="05:00">05:00</option>
                                                    <option value="06:00">06:00</option>
                                                    <option value="07:00">07:00</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="22:00">22:00</option>
                                                    <option value="23:00">23:00</option>
                                                    <option value="24:00">24:00</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">To</label>
                                                <select class="form-control form-white"
                                                    data-placeholder="Choose a color..." name="to">
                                                    <option value="00:00">00:00</option>
                                                    <option value="01:00">01:00</option>
                                                    <option value="02:00">02:00</option>
                                                    <option value="03:00">03:00</option>
                                                    <option value="04:00">04:00</option>
                                                    <option value="05:00">05:00</option>
                                                    <option value="06:00">06:00</option>
                                                    <option value="07:00">07:00</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="22:00">22:00</option>
                                                    <option value="23:00">23:00</option>
                                                    <option value="24:00">24:00</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit"
                                            class="btn btn-danger waves-effect waves-light save-category">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pie Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="pie_chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card px-4">
                            <div class="card-header">
                                <h4 class="card-title">Appointment List</h4>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Completed</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($doctor->appointment as $appoinment)
                                        @if ($appoinment->status === 'Approved')
                                            <tr>
                                                <td>
                                                    {{ $appoinment->id }}
                                                </td>
                                                <td>
                                                    {{ $appoinment->user->name }}
                                                </td>
                                                <td>
                                                    {{ $appoinment->status }}
                                                </td>
                                                <td>
                                                    <form action="/appointment/{{ $appoinment->id }}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-primary btn-sm"
                                                            type="submit">Completed</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif

                                    @empty
                                        <p>No Patients Available</p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card px-4">
                            <div class="card-header">
                                <h4 class="card-title">Patient List</h4>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Completed</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($doctor->appointment as $appoinment)
                                        @if ($appoinment->status === 'Completed')
                                            <tr>
                                                <td>
                                                    {{ $appoinment->id }}
                                                </td>
                                                <td>
                                                    {{ $appoinment->user->name }}
                                                </td>
                                                <td>
                                                    {{ $appoinment->status }}
                                                </td>

                                            </tr>
                                        @endif

                                    @empty
                                        <p>No Patients Available</p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Developed by <a href="#" target="_blank">Aswad</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--removeIf(production)-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('doc/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('doc/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('doc/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('doc/js/custom.min.js') }}"></script>
    <script src="{{ asset('doc/js/deznav-init.js') }}"></script>
    <!-- Apex Chart -->
    <script src="{{ asset('doc/vendor/apexchart/apexchart.js') }}"></script>


    <!-- Chart ChartJS plugin files -->
    <script src="{{ asset('doc/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('doc/js/plugins-init/chartjs-init.js') }}"></script>

</body>

</html>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Event Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Event Management" name="description" />
    <meta content="Event Management" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.svg">
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datepicker/datepicker.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/aos.css" rel="stylesheet">
    <link href='assets/css/font-awsome.min.css' rel='stylesheet'>
</head>

<body class="profile-page">


    <?php include 'loader.php';?>
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex align-items-center">
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo">
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="">
                            </span>
                        </a>
                    </div>

                </div>
                <?php include 'options-buttons.php'; ?>

            </div>
        </header>

        <div class="page-content">
            <div class="container-fluid px-0">
                <div class="cover-bg">
                    <i class="bx bxs-pencil cover-edit" ></i>
                </div>
            </div>

            <div class="container profile-container">
                <div class="profile-section">
                    <!-- <div class="back-home">
                        <i class="bx bx-left-arrow-alt"></i>
                        <h6>Back To Home</h6>
                    </div> -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card profile-div">
                                <div class="card-body">
                                    <div class="profile-head">
                                        <div class="pro-left">
                                            <div class="img-upload-form">
                                                <img src="assets/images/users/avatar-7.jpg" id="upld-image1">
                                                <i class="bx bxs-pencil edit-user-image" onclick="makeimg(1)" ;></i>
                                                <input type="file" oninput="previewFile(1)" accept="image/*"
                                                    id="imgfile1" />
                                                    <i class="bx bxs-trash delete-user-image" onclick="deleteimg(1)" ;></i>
                                            </div>
                                        </div>
                                        <div class="pro-right">
                                            <div class="profile-info">
                                                <h2>Jerome Bell</h2>
                                                <h6>Coderspace <span><i class="bx bxs-circle"></i>Senior Software
                                                        Developer</span></h6>
                                                <ul class="nav nav-tabs profile-nav" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link active" id="nav-tab1" data-bs-toggle="tab"
                                                            href="#nav-1" role="tab" aria-controls="home"
                                                            aria-selected="true">Overview</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="nav-tab2" data-bs-toggle="tab"
                                                            href="#nav-2" role="tab" aria-controls="profile"
                                                            aria-selected="false">Notes</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="nav-tab3" data-bs-toggle="tab"
                                                            href="#nav-3" role="tab" aria-controls="contact"
                                                            aria-selected="false">History</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                                    aria-labelledby="nav-tab1">
                                    <div class="card personal-info">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3>All Personal Informations <a href="#"><i
                                                                class="bx bx-edit-alt"></i>Edit</a></h3>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="single-info-div">
                                                                <i class="bx bx-mail-send"></i>
                                                                <div class="single-info-sub">
                                                                    <h6>arshad@gmail.com</h6>
                                                                    <p>Mail Address</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-info-div">
                                                                <i class="bx bx-phone-call"></i>
                                                                <div class="single-info-sub">
                                                                    <h6>+91 7012387655</h6>
                                                                    <p>Phone Number</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-info-div">
                                                                <i class="bx bx-briefcase-alt"></i>
                                                                <div class="single-info-sub">
                                                                    <h6>IT Service</h6>
                                                                    <p>Industry</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-info-div">
                                                                <i class="bx bx-map"></i>
                                                                <div class="single-info-sub">
                                                                    <h6>India</h6>
                                                                    <p>Country</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="single-info-div">
                                                                <i class="bx bx-mail-send"></i>
                                                                <div class="single-info-sub">
                                                                    <h6>Istanbul, Izmir, Ankara, Turkey, US, Europe</h6>
                                                                    <p>Location</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-info-div">
                                                                <i class="bx bx-phone-call"></i>
                                                                <div class="single-info-sub">
                                                                    <h6>Remote, Full Time, Part Time, Internship,
                                                                        Freelance</h6>
                                                                    <p>Wok Type</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card personal-info experience-info">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3>All Experiences <a href="#"><i
                                                                class="bx bx-edit-alt"></i>Edit</a></h3>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="exp-div">
                                                                <img src="assets/images/company.png" alt="">

                                                                <div class="exp-info">
                                                                    <h6>Veuz Concepts <span>Fulltime</span></h6>
                                                                    <p>Front-End Developer <span><i
                                                                                class="bx bxs-circle"></i>1 Year 2
                                                                            Months</span><span><i
                                                                                class="bx bxs-circle"></i>Oct 2021, Dec
                                                                            2022</span></p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="exp-div">
                                                                <img src="assets/images/company.png" alt="">

                                                                <div class="exp-info">
                                                                    <h6>Veuz Concepts <span>Fulltime</span></h6>
                                                                    <p>Front-End Developer <span><i
                                                                                class="bx bxs-circle"></i>1 Year 2
                                                                            Months</span><span><i
                                                                                class="bx bxs-circle"></i>Oct 2021, Dec
                                                                            2022</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="exp-div">
                                                                <img src="assets/images/company.png" alt="">

                                                                <div class="exp-info">
                                                                    <h6>Veuz Concepts <span>Fulltime</span></h6>
                                                                    <p>Front-End Developer <span><i
                                                                                class="bx bxs-circle"></i>1 Year 2
                                                                            Months</span><span><i
                                                                                class="bx bxs-circle"></i>Oct 2021, Dec
                                                                            2022</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card personal-info">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3>Preffered Positions <a href="#"><i
                                                                class="bx bx-edit-alt"></i>Edit</a></h3>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="preff-div">
                                                                <h5>Frontend Developer (Html) <i
                                                                        class="bx bxs-check-circle"></i></h5>
                                                                <h6>2 Years</h6>
                                                            </div>
                                                            <div class="preff-div">
                                                                <h5>Backend Developer (PHP) <i
                                                                        class="bx bxs-check-circle"></i></h5>
                                                                <h6>1 Years</h6>
                                                            </div>
                                                            <div class="preff-div">
                                                                <h5>Backend Developer (Django) <i
                                                                        class="bx bxs-check-circle"></i></h5>
                                                                <h6>3 Years</h6>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12 skills-div">
                                                            <h3>Skills</h3>
                                                            <ul>
                                                                <li>Mobile Application</li>
                                                                <li>Problem Solving</li>
                                                                <li>Team Working</li>
                                                                <li>PHP</li>
                                                                <li>Django</li>
                                                                <li>Python</li>
                                                                <li>HTML/CSS</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-tab2">
                                    <div class="card personal-info">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3>Notes</h3>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="note-div">
                                                                <div class="note-head">
                                                                    <h6>Working on Budget Report <a href="#"><i
                                                                                class="bx bx-edit-alt"></i>Edit</a></h6>
                                                                    <span>Today, 10:30 AM</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Maxime mollitia,
                                                                    molestiae quas vel sint commodi repudiandae
                                                                    consequuntur voluptatum laborum
                                                                    numquam blanditiis harum quisquam eius sed odit
                                                                    fugiat iusto fuga praesentium
                                                                    optio, eaque rerum! Provident similique accusantium
                                                                    nemo autem.</p>
                                                                <a href="#" class="read-more">Read More</a>
                                                            </div>
                                                            <div class="note-div">
                                                                <div class="note-head">
                                                                    <h6>Working on Budget Report <a href="#"><i
                                                                                class="bx bx-edit-alt"></i>Edit</a></h6>
                                                                    <span>Today, 10:30 AM</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Maxime mollitia,
                                                                    molestiae quas vel sint commodi repudiandae
                                                                    consequuntur voluptatum laborum
                                                                    numquam blanditiis harum quisquam eius sed odit
                                                                    fugiat iusto fuga praesentium
                                                                    optio, eaque rerum! Provident similique accusantium
                                                                    nemo autem.</p>
                                                                <a href="#" class="read-more">Read More</a>
                                                            </div>
                                                            <div class="note-div">
                                                                <div class="note-head">
                                                                    <h6>Working on Budget Report <a href="#"><i
                                                                                class="bx bx-edit-alt"></i>Edit</a></h6>
                                                                    <span>Today, 10:30 AM</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Maxime mollitia,
                                                                    molestiae quas vel sint commodi repudiandae
                                                                    consequuntur voluptatum laborum
                                                                    numquam blanditiis harum quisquam eius sed odit
                                                                    fugiat iusto fuga praesentium
                                                                    optio, eaque rerum! Provident similique accusantium
                                                                    nemo autem.</p>
                                                                <a href="#" class="read-more">Read More</a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-tab3">
                                    <div class="card personal-info">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3>History <a href="#"><i class="bx bx-edit-alt"></i>Edit</a></h3>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="a-s--wrapper">
                                                                <div class="a-s--group-by-date">
                                                                    <div class="a-s--title">
                                                                        <h3>10/04/2023</h3>
                                                                    </div>

                                                                    <div class="a-s--item">
                                                                        <div class="a-s--time">
                                                                            17:34
                                                                        </div>
                                                                        <div class="a-s--icon">
                                                                            <i class="fas fa-edit"
                                                                                aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="a-s--body">
                                                                            <h4>Tomas Mueller</h4>
                                                                            <p>Changed due date to: 18 Jun 2023</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="a-s--item">
                                                                        <div class="a-s--time">
                                                                            17:34
                                                                        </div>
                                                                        <div class="a-s--icon">
                                                                            <i class="fas fa-edit"
                                                                                aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="a-s--body">
                                                                            <h4>Tomas Mueller</h4>
                                                                            <p> Created new file: Attendence-report.html
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="a-s--item">
                                                                        <div class="a-s--time">
                                                                            17:34
                                                                        </div>
                                                                        <div class="a-s--icon">
                                                                            <i class="fas fa-edit"
                                                                                aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="a-s--body">
                                                                            <h4>Tomas Mueller</h4>
                                                                            <p>Created new section: Inbox</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="a-s--item">
                                                                        <div class="a-s--time">
                                                                            17:34
                                                                        </div>
                                                                        <div class="a-s--icon">
                                                                            <i class="fas fa-edit"
                                                                                aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="a-s--body">
                                                                            <h4>Tomas Mueller</h4>
                                                                            <p>Created section</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="a-s--group-by-date">
                                                                    <div class="a-s--title">
                                                                        <h3>06/04/2023</h3>
                                                                    </div>

                                                                    <div class="a-s--item">
                                                                        <div class="a-s--time">
                                                                            17:34
                                                                        </div>
                                                                        <div class="a-s--icon">
                                                                            <i class="fas fa-edit"
                                                                                aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="a-s--body">
                                                                            <h4>Tomas Mueller</h4>
                                                                            <p> Created new file: Attendence-report.html
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="a-s--item">
                                                                        <div class="a-s--time">
                                                                            17:34
                                                                        </div>
                                                                        <div class="a-s--icon">
                                                                            <i class="fas fa-edit"
                                                                                aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="a-s--body">
                                                                            <h4>Tomas Mueller</h4>
                                                                            <p>Created new section: Documents</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="a-s--item">
                                                                        <div class="a-s--time">
                                                                            17:34
                                                                        </div>
                                                                        <div class="a-s--icon">
                                                                            <i class="fas fa-edit"
                                                                                aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="a-s--body">
                                                                            <h4>Tomas Mueller</h4>
                                                                            <p>Created section</p>
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
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card personal-info experience-info">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Active Positions</h3>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="exp-div">
                                                        <img src="assets/images/company.png" alt="">

                                                        <div class="exp-info">
                                                            <h6>Veuz Concepts</h6>
                                                            <p>Front-End Developer</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="exp-div">
                                                        <img src="assets/images/company.png" alt="">

                                                        <div class="exp-info">
                                                            <h6>Veuz Concepts</h6>
                                                            <p>Front-End Developer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn view-all mt-3">Show All</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card personal-info">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Career Status</h3>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="select-div">
                                                        <select class="form-select" required="true"
                                                            aria-required="true">
                                                            <option value="">Actively Seeking Job</option>
                                                            <option value="">Currently Working</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card personal-info right-side">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>All Personal Informations</h3>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="single-info-div">
                                                        <i class="bx bx-mail-send"></i>
                                                        <div class="single-info-sub">
                                                            <h6>arshad@gmail.com</h6>
                                                            <p>Mail Address</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="single-info-div">
                                                        <i class="bx bx-phone-call"></i>
                                                        <div class="single-info-sub">
                                                            <h6>+91 7012387655</h6>
                                                            <p>Phone Number</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="single-info-div">
                                                        <i class="bx bx-briefcase-alt"></i>
                                                        <div class="single-info-sub">
                                                            <h6>IT Service</h6>
                                                            <p>Industry</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="single-info-div">
                                                        <i class="bx bx-map"></i>
                                                        <div class="single-info-sub">
                                                            <h6>India</h6>
                                                            <p>Country</p>
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
                </div>


            </div>



        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/libs/datepicker/datepicker.min.js"></script>
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/saas-dashboard.init.js"></script>
    <script src="assets/js/pages/apexcharts.init.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
        AOS.init();
    </script>



    <script>
        var $radioButtons = $('.radio-check-function input[type="radio"]');
        $radioButtons.click(function() {
            $radioButtons.each(function() {
                $(this).parent().toggleClass('active', this.checked);
            });
        });
    </script>


        <script>
        $(function() {
            setTimeout(function() {
                // $('.loader-mask').delay(350).fadeOut('slow')
                $(".loader-mask").hide();
            }, 100)

        })
    </script>
        <!-- profile image upload js -->
    <script>
        function makeimg(val1) {

            document.getElementById("imgfile" + val1).click();
        }

        function previewFile(value) {

            const preview = document.getElementById('upld-image' + value);
            const file = document.getElementById("imgfile" + value).files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
        function deleteimg(value) {
            const preview = document.getElementById('upld-image' + value);
            preview.src = 'assets/images/users/default.png';

            const fileInput = document.getElementById("imgfile" + value);
            fileInput.value = null;
        }
    </script>

</body>

</html>
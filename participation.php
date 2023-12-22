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
    <link href="assets/libs/select2/css/chosen.min.css" rel="stylesheet">
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <link href="assets/libs/multiselect/choices.min.css" rel="stylesheet">
    <link href="assets/css/aos.css" rel="stylesheet">

</head>

<body class="ovrflw">
    
    <?php include 'loader.php';?>

    <div id="layout-wrapper">



        <header class="top-header">
            <div class="header-div">
                <a href="published-event.php">
                    <div class="backtohome">
                        <i class="bx bx-arrow-back back-arrow"></i>
                    </div>
                </a>
                <div class="header-title">
                    <h4>Participation</h4>
                    <ul>
                        <li><a href="home.php">Home</a> /</li>
                        <li>Participation</li>
                    </ul>
                </div>
            </div>
            <div class="header-right-btns">
                <?php
                include 'options-buttons.php';
            ?>
            </div>
        </header>
        <div class="container-fluid speaker-padding">
            <div class="row speaker-div">
                <div class="col-md-12">
                    <div class="speaker-header">
                        <div class="speaker-btns">
                            <div class="dropdown event-sett">
                                <div class="event-settings dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-cog"></i>
                                </div>
                                <div class="dropdown-menu"
                                    aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#import-upload"><i
                                            class="fas fa-download me-2"></i>Import</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-upload me-2"></i>Export</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex rightside-btns">
                            <div class="row-selected" style="display: none;">
                                <button type="button" class="btn btn-light selected-num me-1"
                                    fdprocessedid="6xsncw">
                                    <span>8</span>Selected<i class="bx bx-x"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        fdprocessedid="p8hcnm"><i class="fas fa-cog me-1"
                                            aria-hidden="true"></i>Actions</button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="#"><i class="fas fa-download me-2"
                                                aria-hidden="true"></i>Export</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="bx bxs-archive-in me-2"
                                                aria-hidden="true"></i>Archive</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="bx bxs-archive-out me-2"
                                                aria-hidden="true"></i>Unarchive</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bxs-trash-alt me-2"
                                                aria-hidden="true"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group search-inpt">
                                <div class="input-group-text bg-white"><i class="bx bx-search-alt"></i>
                                </div>
                                <input type="text" class="form-control border-start-0 ps-0"
                                    id="inlineFormInputGroupUsername" placeholder="Search this list "
                                    fdprocessedid="8pxgmh">
                                <div class="dropdown drpdwn-fg">
                                    <button type="button" style="margin-right:8px;"
                                        class="input-group-text input-group-text-right btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                        id="dropdownMenuButton" data-mdb-toggle="dropdown"
                                        aria-expanded="false" data-mdb-auto-close="outside"
                                        fdprocessedid="w62w8i">
                                        <i class="bx bx-filter-alt"></i>

                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-lg filter-megadropdown animation fade-out"
                                        aria-labelledby="dropdownMenuButton"
                                        data-popper-placement="bottom-end" data-mdb-popper="null"
                                        style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-8px, 35px);">
                                        <div class="dropdown-row">
                                            <div class="col-md-4 border-right px-0">
                                                <h3><i class="bx bxs-filter-alt"></i>Filters</h3>
                                                <div class="dropdown-divider"></div>
                                                <li><a class="dropdown-item" href="#"><span><i
                                                                class="fas fa-check me-2"
                                                                aria-hidden="true"></i>My
                                                            Events</span></a>
                                                </li>
                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item" href="#"><span><i
                                                                class="fas fa-check me-2"
                                                                aria-hidden="true"></i>Upcoming/Running</span></a>
                                                </li>
                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item" href="#"><span><i
                                                                class="fas fa-check me-2"
                                                                aria-hidden="true"></i>Published</span></a>
                                                </li>
                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                        Stage <i class="fas fa-angle-right arrow"
                                                            aria-hidden="true"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Live
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Drafts
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Past
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Cancelled
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                All
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Trash
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                        Start Date <i class="fas fa-angle-right arrow"
                                                            aria-hidden="true"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="reg-date w-100">
                                                                    <label for="">Date</label>
                                                                    <input type="date"
                                                                        class="form-control-sm">
                                                                </div>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item" href="#"><span><i
                                                                class="fas fa-check me-2"
                                                                aria-hidden="true"></i>Archived</span></a>
                                                </li>
                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                        Add Custom Filter <i
                                                            class="fas fa-angle-right arrow"
                                                            aria-hidden="true"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="reg-date w-100">
                                                                    <input type="text"
                                                                        class="form-control-sm"
                                                                        placeholder="Type here">

                                                                </div>

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm waves-effect waves-light">Apply</button>

                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>


                                            </div>
                                            <div class="col-md-4 border-right px-0">
                                                <h3><i class="bx bxs-layer"></i>Group By</h3>
                                                <div class="dropdown-divider"></div>
                                                <li><a class="dropdown-item" href="#"><span><i
                                                                class="fas fa-check me-2"
                                                                aria-hidden="true"></i>Responsible</span></a>
                                                </li>
                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item" href="#"><span><i
                                                                class="fas fa-check me-2"
                                                                aria-hidden="true"></i>Template</span></a>
                                                </li>
                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item" href="#"><span><i
                                                                class="fas fa-check me-2"
                                                                aria-hidden="true"></i>Stage</span></a>
                                                </li>

                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                        Start Date <i class="fas fa-angle-right arrow"
                                                            aria-hidden="true"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="reg-date w-100">
                                                                    <label for="">Date</label>
                                                                    <input type="date"
                                                                        class="form-control-sm">
                                                                </div>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                        Add Custom Group <i class="fas fa-angle-right arrow"
                                                            aria-hidden="true"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Company
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Country
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Created by
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Created on
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                            </div>
                                            <div class="col-md-4 px-0">
                                                <h3><i class="bx bxs-star fav"></i>Favorites</h3>
                                                <div class="dropdown-divider"></div>
                                                <li><a class="dropdown-item" href="#"><span><i
                                                                class="fas fa-check me-2"
                                                                aria-hidden="true"></i>My
                                                            Events</span></a>
                                                </li>
                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item" href="#"><span><i
                                                                class="fas fa-check me-2"
                                                                aria-hidden="true"></i>Upcoming
                                                            Events</span></a>
                                                </li>
                                                <div class="dropdown-divider"></div>
                                                <li>
                                                    <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                        Save current search <i
                                                            class="fas fa-angle-right arrow"
                                                            aria-hidden="true"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu" style="margin-top: 40px;left: auto;width: 100%;">
                                                        <li>
                                                            <a class="dropdown-item" href="#">

                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        type="checkbox" id="formCheck1">
                                                                    <label class="form-check-label"
                                                                        for="formCheck1">
                                                                        Default filter
                                                                    </label>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        type="checkbox" id="formCheck1">
                                                                    <label class="form-check-label"
                                                                        for="formCheck1">
                                                                        Shared
                                                                    </label>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
                                                            </a>
                                                        </li>


                                                    </ul>
                                                </li>
                                            </div>
                                        </div>

                                    </ul>
                                </div>
                            </div>

                            <ul class="nav nav-pills event-tab-nav" role="tablist">

                                <li class="nav-item waves-effect waves-light" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#speaker-list-tab"
                                        role="tab" aria-selected="true">
                                        <button type="button"
                                            class="btn btn-kanlist ml-15 waves-effect waves-light"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            aria-label="List" fdprocessedid="zf5u4">
                                            <svg width="16" height="16" viewBox="0 0 25 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.5 6H21.5" stroke="black" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M8.5 12H21.5" stroke="black" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M8.5 18H21.5" stroke="black" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M3.5 6H3.51" stroke="black" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M3.5 12H3.51" stroke="black" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M3.5 18H3.51" stroke="black" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>

                                        </button>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#speaker-grid-tab"
                                        role="tab" aria-selected="false" tabindex="-1">
                                        <button type="button"
                                            class="btn btn-kanlist ml-15 waves-effect waves-light"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            aria-label="Grid" fdprocessedid="thdk6">
                                            <svg width="14" height="14" viewBox="0 0 21 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.5 1.05225H1.5V8.05225H8.5V1.05225Z"
                                                    stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.5 1.05225H12.5V8.05225H19.5V1.05225Z"
                                                    stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.5 12.0522H12.5V19.0522H19.5V12.0522Z"
                                                    stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M8.5 12.0522H1.5V19.0522H8.5V12.0522Z"
                                                    stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>

                                        </button>
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="speaker-list-tab" role="tabpanel">
                            <div class="event-table speaker-table speaker-single-tbl">
                                <div class="">
                                    <table id="event-table" class="table table-resizable table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th width="36px" style="padding-right: 4px;"><input class="form-check-input " type="checkbox" name="Main_Checkbox"
                                                id="selectAll"><span class="resize"></span></th>
                                                <th>Ticket ID<span class="resize"></span></th>
                                                <th>Name<span class="resize"></span></th>
                                                <th>Email<span class="resize"></span></th>
                                                <th>Phone Number<span class="resize"></span></th>
                                                <th>See Result<span class="resize"></span></th>
                                                <th><span class="resize"></span></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                <td>
                                                    KZQ-ZVDRT-613
                                                </td>
                                                <td>
                                                 Dome jacson
                                                <span class="resize"></span>
                                                </td>
                                                <td>
                                                    domejacson@gmail.com
                                                </td>
                                                <td>
                                             +966 1234 5678 90
                                                </td>

                                                <td>
                                                    <a href="exam-answers.php"><a href="exam-answers.php"><button type="button" class="btn btn-soft-primary waves-effect waves-light attandee-crfrm-btn">Go to Result</button></a></a>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="delete-member" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a>
                                                    <span class="resize"></span>
                                                </td>


                                            </tr>
                                            <tr>
                                                <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                <td>
                                                    KZQ-ZVDRT-613
                                                </td>
                                                <td>
                                                 Dome jacson
                                                <span class="resize"></span>
                                                </td>
                                                <td>
                                                    domejacson@gmail.com
                                                </td>
                                                <td>
                                             +966 1234 5678 90
                                                </td>

                                                <td>
                                                    <a href="exam-answers.php"><button type="button" class="btn btn-soft-primary waves-effect waves-light attandee-crfrm-btn">Go to Result</button></a>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="delete-member" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a>
                                                    <span class="resize"></span>
                                                </td>


                                            </tr>
                                            <tr>
                                                <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                <td>
                                                    KZQ-ZVDRT-613
                                                </td>
                                                <td>
                                                 Dome jacson
                                                <span class="resize"></span>
                                                </td>
                                                <td>
                                                    domejacson@gmail.com
                                                </td>
                                                <td>
                                             +966 1234 5678 90
                                                </td>

                                                <td>
                                                    <a href="exam-answers.php"><button type="button" class="btn btn-soft-primary waves-effect waves-light attandee-crfrm-btn">Go to Result</button></a>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="delete-member" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a>
                                                    <span class="resize"></span>
                                                </td>


                                            </tr>
                                            <tr>
                                                <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                <td>
                                                    KZQ-ZVDRT-613
                                                </td>
                                                <td>
                                                 Dome jacson
                                                <span class="resize"></span>
                                                </td>
                                                <td>
                                                    domejacson@gmail.com
                                                </td>
                                                <td>
                                             +966 1234 5678 90
                                                </td>

                                                <td>
                                                    <a href="exam-answers.php"><button type="button" class="btn btn-soft-primary waves-effect waves-light attandee-crfrm-btn">Go to Result</button></a>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="delete-member" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a>
                                                    <span class="resize"></span>
                                                </td>


                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="bootom-nav">
                                <div class="total-count">
                                    <h6>Total Count : <span>10</span></h6>
                                    <ul>
                                        <li><a href="#"><i class="bx bx-chevrons-left"></i></a></li>
                                        <li><a href="#"><i class="bx bx-chevron-left"></i></a></li>
                                        <li class="active"><a href="#"><span>1</span></a></li>                                                 
                                        <li><a href="#"><span>2</span></a></li>
                                        <li><a href="#"><i class="bx bx-chevron-right"></i></a></li>
                                        <li><a href="#"><i class="bx bx-chevrons-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="speaker-grid-tab" role="tabpanel">
                            <div class="speaker-single-gridview">
                                <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lgg-4 row-cols-xl-6">
                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>                                                                      
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col margin-box-this">
                                        <div class="attendee-box h-100">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-12 data-box">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="avatar-sm rounded-circle">
                                                    <div class="data-box-contnt">
                                                        <h2>James Fernandas</h2>
                                                        <h3>jamesfernand@gmail.com</h3>
                                                        <h3>91 7056453497</h3>
                                                        
                                                    </div>
                                                    <div class="dropdown print-mail-dropdwn">
                                                        <div class="event-settings dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-cog"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#add-attandee"><i
                                                                    class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-envelope me-2"></i>Send
                                                                Mail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="fas fa-trash me-2"></i>Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="bootom-nav">
                                <div class="total-count">
                                    <h6>Total Count : <span>10</span></h6>
                                    <ul>
                                        <li><a href="#"><i class="bx bx-chevrons-left"></i></a></li>
                                        <li><a href="#"><i class="bx bx-chevron-left"></i></a></li>
                                        <li class="active"><a href="#"><span>1</span></a></li>                                                 
                                        <li><a href="#"><span>2</span></a></li>
                                        <li><a href="#"><i class="bx bx-chevron-right"></i></a></li>
                                        <li><a href="#"><i class="bx bx-chevrons-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>

                        


            </div>
        </div>

    </div>


    <div class="modal common-modal fade" id="import-upload" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header1">
                    <div class="header-logo-img">
                        <img src="assets/images/logo.png" alt="">
                    </div>
                    <div class="modal-header-info">
                        <h2>Cyber park event</h2>
                        <h6><i class="bx bx-calendar"></i> Aug 03-05, 2023</h6>
                    </div>
             
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="upload-area" id="uploadArea2" onclick="importDifferentFile(2)">
                        <div class="upload-area__drop-zoon drop-zoon" id="dropZoon2">
                            <span class="drop-zoon__icon">
                                <i class='bx bxs-file-image'></i>
                            </span>
                            <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                            <span class="drop-zoon__loading-text" id="loadingText2">Please Wait</span>
                            <img src="" alt="Preview Image" class="drop-zoon__preview-image" id="previewImage2" draggable="false">
                            <input type="file" class="drop-zoon__file-input" id="fileInput2" accept="image/*">
                        </div>

                        <div class="upload-area__file-details file-details" id="fileDetails2">
                            <h3 class="file-details__title">Uploaded File</h3>

                            <div class="uploaded-file" id="uploadedFile2">
                                <div class="uploaded-file__icon-container">
                                    <i class='bx bxs-file-blank uploaded-file__icon'></i>
                                    <span class="uploaded-file__icon-text"></span>
                                </div>

                                <div class="uploaded-file__info" id="uploadedFileInfo2">
                                    <span class="uploaded-file__name">Project 1</span>
                                    <span class="uploaded-file__counter">0%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-end">
                    <a href="#"><button  data-bs-target="#upload-inpt" data-bs-toggle="modal" data-bs-dismiss="modal" type="button" class="btn btn-primary  br-50 btn-md">Next</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="upload-inpt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/import.svg" alt="" style="width: 22px;"><span>Attendees IN</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger alert-dismissible fade show" role="alert">
                                     <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                              
                             </div>
                            <div class="field-btns">
                                <button type="button"class="btn btn-secondary waves-effect waves-light btn-sm text-uppercase br-50 small">
                                    <i class="bx bx-upload font-size-16 align-middle me-1"></i>Upload</button>

                                    <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                       Test
                                    </button>
                            </div>
                            <div class="event-table attendee-in response-tbl">
                                <div class="table-responsive">
                                    <table id="event-table" class="table table-striped attendee-today-tbl field-tbl">
                                        <thead>
                                            <tr>
                                                <th>Excel Field</th>
                                                <th style="width: 400px;">Field</th>
                                                <th style="width: 30px;"></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      
                        
                    </div>
                    
                </div>
                <div class="modal-footer">
                  
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal" data-bs-target="#import-upload" data-bs-toggle="modal">Back</button>
                    <button data-bs-dismiss="modal" type="button" class="btn btn-primary br-50 btn-md">Save</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->

    <div id="alert-delete" class="modal fade" tabindex="-1" aria-labelledby="..." aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog modal-confirm modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box red">
                            <i class="mdi mdi-alert"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Are you sure you want to delete ?</p>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn yes-btn successful-btn" data-bs-dismiss="modal">Yes</button>
                        <button class="btn cancel-button" data-bs-target="#event-create" data-bs-toggle="modal"
                            data-bs-dismiss="modal">No</button>

                    </div>
                </div>
            </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="https://kit.fontawesome.com/16b0815225.js" crossorigin="anonymous"></script>
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/multiselect/choices.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/js/pages/jquery.slim.min.js"></script>
    <script src="assets/js/pages/popper.min.js"></script>
    <script src="assets/js/pages/bootstrap.min.js"></script>

    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/libs/datepicker/datepicker.min.js"></script>
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <script src="assets/libs/ckediter/ckeditor.js"></script>
    <script src="assets/js/pages/bootstrap-taginput.js"></script>
    <script src="assets/js/summernote-bs4.js"></script>
    <script src="assets/js/pages/mdb.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
        AOS.init();
    </script>


            <!-- img-upload form -->


        <script>
        $(function() {
            setTimeout(function() {
                // $('.loader-mask').delay(350).fadeOut('slow')
                $(".loader-mask").hide();
            }, 100)

        })
    </script>
    <script>
    $('textarea#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });
</script>
<!-- <script>
    $('#selectAll').click(function (e) {
        $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
    });
</script> -->
<script>
  
  var startX, startWidth, $handle, $table, pressed = false;
  
  // mousedown
  $('.table-resizable .resize').on('mousedown', function(event) {
          // find index of 'td' in 'tr'
          let index = $(this).parent().index();
          // find 'th' according to the index value
          $handle = $(this).parents('table').find('th').eq(index);
          pressed = true;
          startX = event.pageX;
          startWidth = $handle.width();
          $table = $handle.closest('.table-resizable').addClass('resizing');
    });
  
  // mousemove
  $('.table-resizable th, .table-resizable td').on('mousemove', function(event) {
        if (pressed) {
          $handle.width(startWidth + (event.pageX - startX));
        }
    });
    
  // mouseup
  $('.table-resizable th, .table-resizable td').on('mouseup', function() {
        if (pressed) {
          $table.removeClass('resizing');
          pressed = false;
        }
    });
  
  // reset column width
  $('.table-resizable thead').on('dblclick', function() {
      // Reset column sizes on double click
      $(this).find('th').css('width', '');
    });
  </script>
  <script>
    $('.selected-num i').on('click', function () {
        $(this).closest(".selected-num").remove();
    });

    $(function () {
        $(".speaker-padding").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
        $('input[name="Main_Checkbox"]').on("click", function () {
            $('.check-input').prop('checked', this.checked);
        });
    });
</script>
<script>
    $(".drpdwn-menu-btn").click(function () {
        $(this).parent().children(".dropdown-menu").toggleClass("show");
    });
    $(".drpdwn-fg .dropdown-item").click(function () {
        $(this).toggleClass("check");
    });

</script>
<script>
    function importDifferentFile(imgval) {

        const uploadArea = document.querySelector('#uploadArea' + imgval)
        const dropZoon = document.querySelector('#dropZoon' + imgval);
        const loadingText = document.querySelector('#loadingText' + imgval);
        const fileInput = document.querySelector('#fileInput' + imgval);
        const previewImage = document.querySelector('#previewImage' + imgval);
        const fileDetails = document.querySelector('#fileDetails' + imgval);
        const uploadedFile = document.querySelector('#uploadedFile' + imgval);
        const uploadedFileInfo = document.querySelector('#uploadedFileInfo' + imgval);
        const uploadedFileName = document.querySelector('.uploaded-file__name');
        const uploadedFileIconText = document.querySelector('.uploaded-file__icon-text');
        const uploadedFileCounter = document.querySelector('.uploaded-file__counter');
        const imagesTypes = [
            "jpeg",
            "png",
            "svg",
            "gif"
        ];

        dropZoon.addEventListener('dragover', function (event) {
            event.preventDefault();
            dropZoon.classList.add('drop-zoon--over');
        });

        dropZoon.addEventListener('dragleave', function (event) {
            dropZoon.classList.remove('drop-zoon--over');
        });

        dropZoon.addEventListener('drop', function (event) {
            event.preventDefault();
            dropZoon.classList.remove('drop-zoon--over');
            const file = event.dataTransfer.files[0];
            uploadFile(file);
        });

        fileInput.click()
        fileInput.addEventListener('change', function (event) {
            const file = event.target.files[0];
            uploadFile(file);
        });

        function uploadFile(file) {
            const fileReader = new FileReader();
            const fileType = file.type;
            const fileSize = file.size;

            if (fileValidate(fileType, fileSize)) {
                dropZoon.classList.add('drop-zoon--Uploaded');
                loadingText.style.display = "block";
                previewImage.style.display = 'none';
                uploadedFile.classList.remove('uploaded-file--open');
                uploadedFileInfo.classList.remove('uploaded-file__info--active');

                fileReader.addEventListener('load', function () {
                    setTimeout(function () {
                        uploadArea.classList.add('upload-area--open');
                        loadingText.style.display = "none";
                        previewImage.style.display = 'block';
                        fileDetails.classList.add('file-details--open');
                        uploadedFile.classList.add('uploaded-file--open');
                        uploadedFileInfo.classList.add('uploaded-file__info--active');
                    }, 500);

                    previewImage.setAttribute('src', fileReader.result);
                    uploadedFileName.innerHTML = file.name;

                    progressMove();
                });

                fileReader.readAsDataURL(file);
            } else {

                this;

            };
        };


        function progressMove() {
            let counter = 0;
            setTimeout(() => {
                let counterIncrease = setInterval(() => {
                    if (counter === 100) {
                        clearInterval(counterIncrease);
                    } else {
                        counter = counter + 10;
                        uploadedFileCounter.innerHTML = `${counter}%`
                    }
                }, 100);
            }, 600);
        };

        function fileValidate(fileType, fileSize) {
            let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);
            if (isImage[0] === 'jpeg') {
                uploadedFileIconText.innerHTML = 'jpg';
            } else {
                uploadedFileIconText.innerHTML = isImage[0];
            };

            if (isImage.length !== 0) {
                if (fileSize <= 2000000) {
                    return true;
                } else {
                    return alert('Please Your File Should be 2 Megabytes or Less');
                };
            } else {
                return alert('Please make sure to upload An Image File Type');
            };
        };
    } 
</script>
<script>
        $(".mul-select").select2({
            tags: true
        });

        $(".single-select").select2({
            tags: true,
            maximumSelectionLength: 1,
            placeholder: "Select an option" 
        });
    
        $("ul.select2-selection__rendered").sortable({
            containment: 'parent'
        });
    </script>
</body>

</html>
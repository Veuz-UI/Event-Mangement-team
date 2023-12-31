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
        <link href="assets/libs/datepicker/semantic.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
        <!-- <link href="assets/libs/datepicker/datepicker.min.css" rel="stylesheet"> -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/css/chosen.min.css" rel="stylesheet">
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet">
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/libs/calendar/fullcalendar.css" rel="stylesheet">
        <link href="assets/css/aos.css" rel="stylesheet">

    </head>

    <body>


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



                    <div class="top-bar-main">
                        <div class="col-12">
                            <div class="top-bar d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                        data-bs-toggle="modal" data-bs-target="#event-create">
                                        Create
                                    </button>



                                    <h2 class="main-heading">Events</h2>
                                    <div class="dropdown">
                                        <div class="event-settings dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-cog"></i>
                                        </div>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#import-upload"><i class="fas fa-upload me-2"></i>Import
                                                Records</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fas fa-download me-2"></i>Export
                                                Records</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fas fa-envelope me-2"></i>Email
                                                All</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fas fa-comment-alt me-2"></i>SMS
                                                All</a>
                                        </div>
                                    </div>





                                    <!-- <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm br-50 small mx-2">
                                    <svg class="me-1" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_2621)">
                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8.97803 8.44629V14.5635" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_1_2621">
                                        <rect width="16.3125" height="16.3125" fill="white" transform="translate(0.821289 0.290039)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>Export
                                </button>
                                <button type="button"
                                    class="btn btn-outline-secondary waves-effect btn-export waves-light btn-sm br-50 small">
                                    <svg class="me-1" width="17" height="15" viewBox="0 0 17 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5 10H12.875C14.5938 10 16 9.33719 16 7.6375C16 5.93781 14.3438 5.34156 13 5.275C12.7222 2.61688 10.7812 1 8.5 1C6.34375 1 4.955 2.43094 4.5 3.85C2.625 4.02812 1 4.97125 1 6.925C1 8.87875 2.6875 10 4.75 10H6.5M6.5 12.0031L8.5 14L10.5 12.0031M8.5 6.5V13.5009"
                                            stroke="#263238" stroke-width="1.36" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>Import
                                </button> -->

                                    <!-- <ul class="nav nav-pills event-stage-tab " role="tablist" style="margin-left:20px;">
                                <li class="nav-item waves-effect waves-light" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#live" role="tab" aria-selected="true">

                                        <span>Live</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#drafts" role="tab" aria-selected="false" tabindex="-1">

                                        <span>Drafts</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#past" role="tab" aria-selected="false" tabindex="-1">

                                        <span>Past</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#cancelled" role="tab" aria-selected="false" tabindex="-1">

                                        <span>Cancelled</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#all" role="tab" aria-selected="false" tabindex="-1">

                                        <span>All</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#trash" role="tab" aria-selected="false" tabindex="-1">

                                        <span>Trash</span>
                                    </a>
                                </li>
                            </ul> -->
                                </div>

                                <div class="d-flex rightside-btns">
                                    <div class="row-selected" style="display: none;">
                                        <button type="button" class="btn btn-light selected-num me-1">
                                            <span>8</span>Selected<i class="bx bx-x"></i>
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fas fa-cog me-1"></i>Actions</button>
                                            <div class="dropdown-menu">
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
                                        <div class="input-group-text bg-white"><i class="bx bx-search-alt"></i></div>
                                        <input type="text" class="form-control border-start-0 ps-0"
                                            id="inlineFormInputGroupUsername" placeholder="Search this list ">
                                        <div class="dropdown drpdwn-fg">
                                            <button type="button" style="margin-right:8px;"
                                                class="input-group-text input-group-text-right btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                                id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"
                                                data-mdb-auto-close="outside">
                                                <i class="bx bx-filter-alt"></i>

                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-lg filter-megadropdown"
                                                aria-labelledby="dropdownMenuButton">
                                                <div class="dropdown-row">
                                                    <div class="col-md-4 border-right px-0">
                                                        <h3><i class="bx bxs-filter-alt"></i>Filters</h3>
                                                        <div class="dropdown-divider"></div>
                                                        <li><a class="dropdown-item" href="#"><span><i
                                                                        class="fas fa-check me-2"></i>My
                                                                    Events</a></span>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a class="dropdown-item" href="#"><span><i
                                                                        class="fas fa-check me-2"></i>Upcoming/Running</span></a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a class="dropdown-item" href="#"><span><i
                                                                        class="fas fa-check me-2"></i>Published</span></a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                Stage <i class="fas fa-angle-right arrow"></i>
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
                                                                Start Date <i class="fas fa-angle-right arrow"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-submenu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <div class="reg-date w-100">
                                                                            <label for="">Date</label>
                                                                            <input type="date" class="form-control-sm">
                                                                        </div>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a class="dropdown-item" href="#"><span><i
                                                                        class="fas fa-check me-2"></i>Archived</span></a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                Add Custom Filter <i
                                                                    class="fas fa-angle-right arrow"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-submenu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <div class="reg-date w-100">
                                                                            <input type="text" class="form-control-sm"
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
                                                                        class="fas fa-check me-2"></i>Responsible</a></span>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a class="dropdown-item" href="#"><span><i
                                                                        class="fas fa-check me-2"></i>Template</span></a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a class="dropdown-item" href="#"><span><i
                                                                        class="fas fa-check me-2"></i>Stage</span></a>
                                                        </li>

                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                Start Date <i class="fas fa-angle-right arrow"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-submenu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <div class="reg-date w-100">
                                                                            <label for="">Date</label>
                                                                            <input type="date" class="form-control-sm">
                                                                        </div>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </li>

                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                Add Custom Group <i
                                                                    class="fas fa-angle-right arrow"></i>
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
                                                                        class="fas fa-check me-2"></i>My
                                                                    Events</a></span>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a class="dropdown-item" href="#"><span><i
                                                                        class="fas fa-check me-2"></i>Upcoming
                                                                    Events</span></a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                Save current search <i
                                                                    class="fas fa-angle-right arrow"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-submenu">
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
                                            <a class="nav-link active" data-bs-toggle="tab" href="#event-kan-tab"
                                                role="tab" aria-selected="true">
                                                <button type="button"
                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kanban">
                                                    <svg width="14" height="16" viewBox="0 0 17 19" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.7703 4.80176H2.59473V17.3285H6.7703V4.80176Z"
                                                            stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M14.513 4.80176H10.3374V11.7611H14.513V4.80176Z"
                                                            stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M1.3584 1H15.75" stroke="black" stroke-width="1.4"
                                                            stroke-linecap="round" />
                                                    </svg>



                                                </button>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#event-list-tab" role="tab"
                                                aria-selected="false" tabindex="-1">
                                                <button type="button"
                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="List">
                                                    <svg width="16" height="16" viewBox="0 0 25 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.5 6H21.5" stroke="black" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.5 12H21.5" stroke="black" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.5 18H21.5" stroke="black" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M3.5 6H3.51" stroke="black" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M3.5 12H3.51" stroke="black" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M3.5 18H3.51" stroke="black" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </button>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#event-grid-tab" role="tab"
                                                aria-selected="false" tabindex="-1">
                                                <button type="button"
                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Grid">
                                                    <svg width="14" height="14" viewBox="0 0 21 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.5 1.05225H1.5V8.05225H8.5V1.05225Z" stroke="black"
                                                            stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M19.5 1.05225H12.5V8.05225H19.5V1.05225Z"
                                                            stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M19.5 12.0522H12.5V19.0522H19.5V12.0522Z"
                                                            stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M8.5 12.0522H1.5V19.0522H8.5V12.0522Z" stroke="black"
                                                            stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                </button>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#event-cal-tab" role="tab"
                                                aria-selected="false" tabindex="-1">
                                                <button type="button"
                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Calendar">
                                                    <svg width="16" height="16" viewBox="0 0 23 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.125 3.4375H4.375C3.23591 3.4375 2.3125 4.36091 2.3125 5.5V17.875C2.3125 19.0141 3.23591 19.9375 4.375 19.9375H18.125C19.2641 19.9375 20.1875 19.0141 20.1875 17.875V5.5C20.1875 4.36091 19.2641 3.4375 18.125 3.4375Z"
                                                            stroke="black" stroke-width="1.4" stroke-linejoin="round" />
                                                        <path
                                                            d="M5.75 2.0625V3.4375M16.75 2.0625V3.4375M20.1875 6.875H2.3125"
                                                            stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                </button>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#event-graph-tab" role="tab"
                                                aria-selected="false" tabindex="-1">
                                                <button type="button"
                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Graph">
                                                    <svg width="16" height="16" viewBox="0 0 22 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19.8638 14.8495C19.2343 16.3383 18.2496 17.6502 16.9959 18.6706C15.7422 19.6909 14.2576 20.3886 12.672 20.7027C11.0863 21.0167 9.44788 20.9376 7.89989 20.4721C6.35191 20.0067 4.94151 19.1691 3.79201 18.0326C2.6425 16.8962 1.78889 15.4954 1.30579 13.9529C0.822699 12.4103 0.724835 10.7729 1.02076 9.18377C1.31668 7.59464 1.99737 6.1022 3.00334 4.83692C4.0093 3.57164 5.30989 2.57205 6.79142 1.92554"
                                                            stroke="black" stroke-width="1.38542" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M20.6458 11.0001C20.6458 9.70054 20.3899 8.41373 19.8926 7.21311C19.3952 6.01249 18.6663 4.92158 17.7474 4.00267C16.8285 3.08376 15.7376 2.35484 14.537 1.85752C13.3364 1.36021 12.0495 1.10425 10.75 1.10425V11.0001H20.6458Z"
                                                            stroke="black" stroke-width="1.38542" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                </button>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#event-split-tab" role="tab"
                                                aria-selected="false" tabindex="-1">
                                                <button type="button"
                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Split">
                                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.25 1H17.25C17.7804 1 18.2891 1.21071 18.6642 1.58579C19.0393 1.96086 19.25 2.46957 19.25 3V17C19.25 17.5304 19.0393 18.0391 18.6642 18.4142C18.2891 18.7893 17.7804 19 17.25 19H10.25M10.25 1H3.25C2.71957 1 2.21086 1.21071 1.83579 1.58579C1.46071 1.96086 1.25 2.46957 1.25 3V17C1.25 17.5304 1.46071 18.0391 1.83579 18.4142C2.21086 18.7893 2.71957 19 3.25 19H10.25M10.25 1V19"
                                                            stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>


                                                </button>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <hr class="topbar-bottomline">

                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane active" id="event-kan-tab" role="tabpanel">
                            <div class="board">
                                <div class="board-column todo">
                                    <div class="board-column-header d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h3>New</h3>
                                            <span class="badge count-it">4</span>
                                        </div>

                                        <div class="board-settings">
                                            <div class="dropdown">
                                                <div class="event-settings dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Fold</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Automations</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Archive All</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Unarchive All</a>
                                                </div>
                                            </div>

                                            <a href="#" data-bs-toggle="modal" data-bs-target="#event-create"
                                                class="kan-create"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="board-column-content-wrapper">
                                        <div class="board-column-content">
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
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
                                <div class="board-column working">
                                    <div class="board-column-header d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h3>Booked</h3>
                                            <span class="badge count-it">7</span>
                                        </div>

                                        <div class="board-settings">
                                            <div class="dropdown">
                                                <div class="event-settings dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Fold</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Automations</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Archive All</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Unarchive All</a>
                                                </div>
                                            </div>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#event-create"
                                                class="kan-create"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>

                                    <div class="board-column-content-wrapper">
                                        <div class="board-column-content">
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
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
                                <div class="board-column done">

                                    <div class="board-column-header d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h3>Announced</h3>
                                            <span class="badge count-it">8</span>
                                        </div>

                                        <div class="board-settings">
                                            <div class="dropdown">
                                                <div class="event-settings dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Fold</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Automations</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Archive All</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Unarchive All</a>
                                                </div>
                                            </div>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#event-create"
                                                class="kan-create"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="board-column-content-wrapper">
                                        <div class="board-column-content">
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
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
                                <div class="board-column done">
                                    <div class="board-column-header d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h3>Ended</h3>
                                            <span class="badge count-it">5</span>
                                        </div>

                                        <div class="board-settings">
                                            <div class="dropdown">
                                                <div class="event-settings dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Fold</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Automations</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Archive All</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Unarchive All</a>
                                                </div>
                                            </div>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#event-create"
                                                class="kan-create"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="board-column-content-wrapper">
                                        <div class="board-column-content">
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
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
                                <div class="board-column done">

                                    <div class="board-column-header d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h3>Cancelled</h3>
                                            <span class="badge count-it">3</span>
                                        </div>

                                        <div class="board-settings">
                                            <div class="dropdown">
                                                <div class="event-settings dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Fold</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Automations</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Archive All</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Unarchive All</a>
                                                </div>
                                            </div>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#event-create"
                                                class="kan-create"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="board-column-content-wrapper">
                                        <div class="board-column-content">
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                            <div class="board-item">
                                                <div class='task'>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="box-kanban-type d-flex align-items-center justify-content-center">
                                                                <div>
                                                                    <h2>25</h2>
                                                                    <h3>Aug 2023</h3>
                                                                    <h4><svg width="12" height="12" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1 8H15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8 1L15 8L8 15" stroke="#fff"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        &ensp;29 Aug</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 ps-0">
                                                            <div class="kanban-content">
                                                                <h4><a href="published-event.php">Conference for architects</a></h4>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/location1.svg" alt="">
                                                                    <p>Location not added</p>
                                                                </div>
                                                                <div
                                                                    class="location-div-kanban d-flex align-items-center">
                                                                    <img src="assets/images/time1.svg" alt="">
                                                                    <p>10:30 AM</span></p>
                                                                </div>
                                                                <div class="row gx-0">
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Attendees<span>29</span></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col">
                                                                        <div
                                                                            class="location-div-kanban d-flex align-items-center">
                                                                            <img src="assets/images/user1.svg" alt="">
                                                                            <p>Members<span>29</span></p>
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
                        <div class="tab-pane" id="event-list-tab" role="tabpanel">
                            <div class="event-table">
                                <table id="event-table" class="table table-resizable table-striped">
                                    <thead>
                                        <tr>
                                            <th width="36px" style="padding-right: 4px;"><input class="form-check-input " type="checkbox"
                                                    name="Main_Checkbox" id="selectAll"><span class="resize"></span>
                                            </th>
                                            <th>Event<span class="resize"></span></th>
                                            <th>Venue<span class="resize"></span></th>
                                            <th>Responsible<span class="resize"></span></th>
                                            <th>Company<span class="resize"></span></th>
                                            <th>Website<span class="resize"></span></th>
                                            <th>Start Date<span class="resize"></span></th>
                                            <th>End Date<span class="resize"></span></th>
                                            <th>Attendees<span class="resize"></span></th>
                                            <th>Stage<span class="resize"></span></th>
                                            <th><span class="resize"></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox"
                                                    id="formCheck1"><span class="resize"></span></td>
                                            <td><a href="published-event.php" class="link-color">Business workshops</a><span
                                                    class="resize"></span></td>
                                            <td>Business workshops<span class="resize"></span></td>
                                            <td>
                                                <div class="responsible">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="avatar-xs rounded-circle">
                                                    <span>James Fernandas</span>
                                                </div><span class="resize"></span>
                                            </td>
                                            <td>My Company (San Francisco)<span class="resize"></span></td>
                                            <td><a href="#">www.website.com</a><span class="resize"></span></td>
                                            <td><span>07/30/2023</span><span>23:30:00</span><span class="resize"></span>
                                            </td>
                                            <td><span>07/30/2023</span><span>04:00:00</span><span class="resize"></span>
                                            </td>
                                            <td>04<span class="resize"></span></td>
                                            <td>Ended<span class="resize"></span></td>
                                            <td class="td-overflow">
                                                <div class="dropdown common-drpdwn float-right">
                                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false"> <i
                                                            class="fas fa-ellipsis-v dots"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-sm">
                                                        <a class="dropdown-item" href="conference.php">Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Trash</a>
                                                    </div>
                                                </div>
                                                <span class="resize"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox"
                                                    id="formCheck2"><span class="resize"></span></td>
                                            <td><a href="published-event.php" class="link-color">OpenWood Collection Online</a><span
                                                    class="resize"></span></td>
                                            <td>Angeles Convention Center<span class="resize"></span></td>
                                            <td>
                                                <div class="responsible">
                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="avatar-xs rounded-circle">
                                                    <span>James Fernandas</span>
                                                </div>
                                                <span class="resize"></span>
                                            </td>
                                            <td>My Company (San Francisco)<span class="resize"></span></td>
                                            <td><a href="#">www.website.com</a><span class="resize"></span></td>
                                            <td><span>07/30/2023</span><span>23:30:00</span><span class="resize"></span>
                                            </td>
                                            <td><span>07/30/2023</span><span>04:00:00</span><span class="resize"></span>
                                            </td>
                                            <td>04<span class="resize"></span></td>
                                            <td>Ended<span class="resize"></span></td>
                                            <td class="td-overflow">
                                                <div class="dropdown common-drpdwn float-right">
                                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false"> <i
                                                            class="fas fa-ellipsis-v dots"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-sm">
                                                        <a class="dropdown-item" href="conference.php">Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Trash</a>
                                                    </div>
                                                </div>
                                                <span class="resize"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox"
                                                    id="formCheck3"><span class="resize"></span></td>
                                            <td><a href="published-event.php" class="link-color">Business workshops</a><span
                                                    class="resize"></span></td>
                                            <td>Business workshops<span class="resize"></span></td>
                                            <td>
                                                <div class="responsible">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="avatar-xs rounded-circle">
                                                    <span>James Fernandas</span>
                                                </div>
                                                <span class="resize"></span>
                                            </td>
                                            <td>My Company (San Francisco)<span class="resize"></span></td>
                                            <td><a href="#">www.website.com</a><span class="resize"></span></td>
                                            <td><span>07/30/2023</span><span>23:30:00</span><span class="resize"></span>
                                            </td>
                                            <td><span>07/30/2023</span><span>04:00:00</span><span class="resize"></span>
                                            </td>
                                            <td>04<span class="resize"></span></td>
                                            <td>Ended<span class="resize"></span></td>
                                            <td class="td-overflow">
                                                <div class="dropdown common-drpdwn float-right">
                                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false"> <i
                                                            class="fas fa-ellipsis-v dots"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-sm">
                                                        <a class="dropdown-item" href="conference.php">Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Trash</a>
                                                    </div>
                                                </div>
                                                <span class="resize"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox"
                                                    id="formCheck1"><span class="resize"></span></td>
                                            <td><a href="published-event.php" class="link-color">OpenWood Collection Online</a><span
                                                    class="resize"></span></td>
                                            <td>Angeles Convention Center<span class="resize"></span></td>
                                            <td>
                                                <div class="responsible">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="avatar-xs rounded-circle">
                                                    <span>James Fernandas</span>
                                                </div>
                                                <span class="resize"></span>
                                            </td>
                                            <td>My Company (San Francisco)<span class="resize"></span></td>
                                            <td><a href="#">www.website.com</a><span class="resize"></span></td>
                                            <td><span>07/30/2023</span><span>23:30:00</span><span class="resize"></span>
                                            </td>
                                            <td><span>07/30/2023</span><span>04:00:00</span><span class="resize"></span>
                                            </td>
                                            <td>04<span class="resize"></span></td>
                                            <td>Ended<span class="resize"></span></td>
                                            <td class="td-overflow">
                                                <div class="dropdown common-drpdwn float-right">
                                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false"> <i
                                                            class="fas fa-ellipsis-v dots"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-sm">
                                                        <a class="dropdown-item" href="conference.php">Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Trash</a>
                                                    </div>
                                                </div>
                                                <span class="resize"></span>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
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
                        <div class="tab-pane" id="event-grid-tab" role="tabpanel">
                            <div class="events">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="event-box" data-aos="fade-up" data-aos="fade-up">
                                                <div class="event-fistbx">
                                                    <div class="dropdown common-drpdwn">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-expanded="false"> <i
                                                                class="fas fa-ellipsis-v dots"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                            <a class="dropdown-item" href="conference.php">Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Trash</a>
                                                        </div>
                                                    </div>

                                                    <h4>29 Aug 2023</h4>
                                                    <div class="evnt-date">
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>Aug 23 to 25, 2023</span>
                                                    </div>
                                                </div>
                                                <div class="event-scndbx">
                                                    <a href="published-event.php"><h3>Conference for architects</h3></a>
                                                    <div class="location-div">
                                                        <img src="assets/images/location.svg" alt="">
                                                        <span>Location Not Added</span>
                                                    </div>
                                                    <div class="attendees-members">
                                                        <div class="attendees">
                                                            <img src="assets/images/attendee.svg" alt="">
                                                            <span>Attendees</span>
                                                            <h6>29</h6>
                                                        </div>
                                                        <div class="member">
                                                            <img src="assets/images/attendee.svg" alt="">
                                                            <span>Members</span>
                                                            <h6>10</h6>
                                                        </div>

                                                    </div>
                                                    <div class="location-div">
                                                        <img src="assets/images/clock.svg" alt="">
                                                        <span>10:30 AM</span>
                                                    </div>
                                                </div>
                                                <div class="event-thirdbx">
                                                    <a href="#">
                                                        <div class="evnt-third-bx">
                                                            <img src="assets/images/lap.svg" alt="">
                                                            <h6>Preview</h6>
                                                        </div>
                                                    </a>
                                                    <hr>
                                                    <a href="#">
                                                        <div class="evnt-third-bx">
                                                            <img src="assets/images/web.svg" alt="">
                                                            <h6>View Microsite</h6>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="event-box" data-aos="fade-up" data-aos="fade-up">
                                                <div class="event-fistbx">
                                                    <div class="dropdown common-drpdwn">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-expanded="false"> <i
                                                                class="fas fa-ellipsis-v dots"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                            <a class="dropdown-item" href="conference.php">Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Trash</a>
                                                        </div>
                                                    </div>

                                                    <h4>29 Aug 2023</h4>
                                                    <div class="evnt-date">
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>Aug 23 to 25, 2023</span>
                                                    </div>
                                                </div>
                                                <div class="event-scndbx">
                                                    <a href="published-event.php"><h3>Conference for architects</h3></a>
                                                    <div class="location-div">
                                                        <img src="assets/images/location.svg" alt="">
                                                        <span>Location Not Added</span>
                                                    </div>
                                                    <div class="attendees-members">
                                                        <div class="attendees">
                                                            <img src="assets/images/attendee.svg" alt="">
                                                            <span>Attendees</span>
                                                            <h6>29</h6>
                                                        </div>
                                                        <div class="member">
                                                            <img src="assets/images/attendee.svg" alt="">
                                                            <span>Members</span>
                                                            <h6>10</h6>
                                                        </div>

                                                    </div>
                                                    <div class="location-div">
                                                        <img src="assets/images/clock.svg" alt="">
                                                        <span>10:30 AM</span>
                                                    </div>
                                                </div>
                                                <div class="event-thirdbx">
                                                    <a href="#">
                                                        <div class="evnt-third-bx">
                                                            <img src="assets/images/lap.svg" alt="">
                                                            <h6>Preview</h6>
                                                        </div>
                                                    </a>
                                                    <hr>
                                                    <a href="#">
                                                        <div class="evnt-third-bx">
                                                            <img src="assets/images/web.svg" alt="">
                                                            <h6>View Microsite</h6>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="event-box" data-aos="fade-up" data-aos="fade-up">
                                                <div class="event-fistbx">
                                                    <div class="dropdown common-drpdwn">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-expanded="false"> <i
                                                                class="fas fa-ellipsis-v dots"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                            <a class="dropdown-item" href="conference.php">Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Trash</a>
                                                        </div>
                                                    </div>

                                                    <h4>29 Aug 2023</h4>
                                                    <div class="evnt-date">
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>Aug 23 to 25, 2023</span>
                                                    </div>
                                                </div>
                                                <div class="event-scndbx">
                                                    <a href="published-event.php"><h3>Conference for architects</h3></a>
                                                    <div class="location-div">
                                                        <img src="assets/images/location.svg" alt="">
                                                        <span>Location Not Added</span>
                                                    </div>
                                                    <div class="attendees-members">
                                                        <div class="attendees">
                                                            <img src="assets/images/attendee.svg" alt="">
                                                            <span>Attendees</span>
                                                            <h6>29</h6>
                                                        </div>
                                                        <div class="member">
                                                            <img src="assets/images/attendee.svg" alt="">
                                                            <span>Members</span>
                                                            <h6>10</h6>
                                                        </div>

                                                    </div>
                                                    <div class="location-div">
                                                        <img src="assets/images/clock.svg" alt="">
                                                        <span>10:30 AM</span>
                                                    </div>
                                                </div>
                                                <div class="event-thirdbx">
                                                    <a href="#">
                                                        <div class="evnt-third-bx">
                                                            <img src="assets/images/lap.svg" alt="">
                                                            <h6>Preview</h6>
                                                        </div>
                                                    </a>
                                                    <hr>
                                                    <a href="#">
                                                        <div class="evnt-third-bx">
                                                            <img src="assets/images/web.svg" alt="">
                                                            <h6>View Microsite</h6>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="event-box" data-aos="fade-up" data-aos="fade-up">
                                                <div class="event-fistbx">
                                                    <div class="dropdown common-drpdwn">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-expanded="false"> <i
                                                                class="fas fa-ellipsis-v dots"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                            <a class="dropdown-item" href="conference.php">Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Trash</a>
                                                        </div>
                                                    </div>

                                                    <h4>29 Aug 2023</h4>
                                                    <div class="evnt-date">
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>Aug 23 to 25, 2023</span>
                                                    </div>
                                                </div>
                                                <div class="event-scndbx">
                                                    <a href="published-event.php"><h3>Conference for architects</h3></a>
                                                    <div class="location-div">
                                                        <img src="assets/images/location.svg" alt="">
                                                        <span>Location Not Added</span>
                                                    </div>
                                                    <div class="attendees-members">
                                                        <div class="attendees">
                                                            <img src="assets/images/attendee.svg" alt="">
                                                            <span>Attendees</span>
                                                            <h6>29</h6>
                                                        </div>
                                                        <div class="member">
                                                            <img src="assets/images/attendee.svg" alt="">
                                                            <span>Members</span>
                                                            <h6>10</h6>
                                                        </div>

                                                    </div>
                                                    <div class="location-div">
                                                        <img src="assets/images/clock.svg" alt="">
                                                        <span>10:30 AM</span>
                                                    </div>
                                                </div>
                                                <div class="event-thirdbx">
                                                    <a href="#">
                                                        <div class="evnt-third-bx">
                                                            <img src="assets/images/lap.svg" alt="">
                                                            <h6>Preview</h6>
                                                        </div>
                                                    </a>
                                                    <hr>
                                                    <a href="#">
                                                        <div class="evnt-third-bx">
                                                            <img src="assets/images/web.svg" alt="">
                                                            <h6>View Microsite</h6>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="event-box" data-aos="fade-up" data-aos="fade-up">
                                                <div class="event-fistbx">
                                                    <div class="dropdown common-drpdwn">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-expanded="false"> <i
                                                                class="fas fa-ellipsis-v dots"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                            <a class="dropdown-item" href="conference.php">Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Trash</a>
                                                        </div>
                                                    </div>

                                                    <h4>29 Aug 2023</h4>
                                                    <div class="evnt-date">
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>Aug 23 to 25, 2023</span>
                                                    </div>
                                                </div>
                                                <div class="event-scndbx">
                                                    <a href="published-event.php"><h3>Conference for architects</h3></a>
                                                    <div class="location-div">
                                                        <img src="assets/images/location.svg" alt="">
                                                        <span>Location Not Added</span>
                                                    </div>
                                                    <div class="attendees-members">
                                                        <div class="attendees">
                                                            <img src="assets/images/attendee.svg" alt="">
                                                            <span>Attendees</span>
                                                            <h6>29</h6>
                                                        </div>
                                                        <div class="member">
                                                            <img src="assets/images/attendee.svg" alt="">
                                                            <span>Members</span>
                                                            <h6>10</h6>
                                                        </div>

                                                    </div>
                                                    <div class="location-div">
                                                        <img src="assets/images/clock.svg" alt="">
                                                        <span>10:30 AM</span>
                                                    </div>
                                                </div>
                                                <div class="event-thirdbx">
                                                    <a href="#">
                                                        <div class="evnt-third-bx">
                                                            <img src="assets/images/lap.svg" alt="">
                                                            <h6>Preview</h6>
                                                        </div>
                                                    </a>
                                                    <hr>
                                                    <a href="#">
                                                        <div class="evnt-third-bx">
                                                            <img src="assets/images/web.svg" alt="">
                                                            <h6>View Microsite</h6>
                                                        </div>
                                                    </a>

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
                        <div class="tab-pane" id="event-cal-tab" role="tabpanel">
                            <div class="calendar-vw">
                                <div class="row">
                                    <div class="col-xl-2 ls-3 pe-md-0">
                                        <div class="card small-calendar">
                                            <div class="card-body p-0">
                                                <div class="d-grid">
                                                    <button class="btn font-16 btn-primary" id="btn-new-event" data-toggle="modal" data-target="#add-category"><i class="mdi mdi-plus-circle-outline"></i> Create
                                                        New Event</button>
                                                </div>
                                            
                                                <div class="wrapper sm-calendar">
                
                                                    <header>
                                                        <p class="current-date"></p>
                                                        <div class="icons">
                                                            <span id="prev">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                                                    class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                                                </svg>
                                                            </span>
                                    
                                                            <span id="next">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                                                    class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </header>
                                    
                                                    <div class="calenda-mini">
                                                        <ul class="weeks">
                                                            <li>Sun</li>
                                                            <li>Mon</li>
                                                            <li>Tue</li>
                                                            <li>Wed</li>
                                                            <li>Thu</li>
                                                            <li>Fri</li>
                                                            <li>Sat</li>
                                                        </ul>
                                                        <ul class="days"></ul>
                                                    </div>
                                                </div>
                
                                                <div id="external-events" class="activity-list">
                                                    <p>Drag and drop your event or click in the calendar</p>
                                                    <div class="external-event fc-event bg-success" data-class="bg-inverse" style="position: relative">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>My Event One
                                                    </div>
                                                    <div class="external-event fc-event bg-info" data-class="bg-danger" style="position: relative">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>My Event Two
                                                    </div>
                                                    <div class="external-event fc-event bg-warning" data-class="bg-primary" style="position: relative">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>My Event Three
                                                    </div>
                                                    <div class="external-event fc-event bg-danger" data-class="bg-purple" style="position: relative">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>My Event Four
                                                    </div>
                                                </div>
                
                                                <!-- checkbox -->
                                                <div class="checkbox checkbox-primary mt-3">
                                                    <input id="drop-remove" type="checkbox" class="form-check-input">
                                                    <label for="drop-remove" class="form-check-label">
                                                            Remove after drop
                                                        </label>
                                                </div>
                                                
                                                
                
                                            </div>
                                        </div>
                                    </div> 
                
                                    <div class="col-xl-10 ls-9">
                                        <div class="card main-calendar">
                                            <div class="card-body p-0">
                                                <div class="calendar-wrapper" id="calendar"></div>
                                            </div>
                                        </div>
                                    </div> 
                
                                </div> 
                            </div>
                        </div>
                        <div class="tab-pane" id="event-graph-tab" role="tabpanel">

                            <div id="myChart" style="height:calc(100vh - 120px)">
                            </div>
                            <script>var __basePath = './';</script>
                            <script
                                src="https://cdn.jsdelivr.net/npm/ag-charts-community@8.2.1/dist/ag-charts-community.min.js">
                                </script>
                            <script>
                                function getData() {
                                    return [
                                        { year: 'Speaking Politics', visitors: 170 },
                                        { year: 'Debate About Sports', visitors: 130 },
                                        { year: 'Live Musical Festival', visitors: 110 },
                                        { year: 'Conference for Architects', visitors: 100 },
                                        { year: 'organization Meet', visitors: 120},
                                        { year: 'Business Workshop', visitors: 180},
                                        { year: 'Game Tournament ', visitors: 200},
                                    ];
                                }
                            </script>

                            <script>
                                function formatNumber(value) {
                                    value /= 500;
                                    return `${Math.floor(value)}S`;
                                    // return value
                                }

                                /** @type {import('ag-charts-community').AgChartOptions} */
                                const options = {
                                    container: document.getElementById('myChart'),
                                    autoSize: true,
                                    data: getData(),
                                    title: {
                                        text: 'Available Seats',
                                        fontSize: 16,
                                        spacing: 25,
                                    },
                                    // footnote: {
                                    //     text: 'Source: Department for Digital, Culture, Media & Sport',
                                    // },
                                    series: [
                                        {
                                            type: 'column',
                                            xKey: 'year',
                                            yKey: 'visitors',
                                            fill: '#0084e7',
                                            strokeWidth: 0,
                                            shadow: {
                                                xOffset: 3,
                                            },
                                            label: {
                                                enabled: true,
                                                color: '#fff',
                                                // formatter: ({ value }) => formatNumber(value),
                                            },
                                            tooltip: {
                                                renderer: ({ yValue, xValue }) => {
                                                    return { title: "Seats", content: (yValue) };
                                                },
                                            },
                                        },
                                    ],
                                    axes: [
                                        {
                                            type: 'category',
                                            position: 'bottom',
                                            title: {
                                                text: 'Event',
                                            },
                                        },
                                        {
                                            type: 'number',
                                            position: 'left',
                                            title: {
                                                text: 'Available Seats',
                                            },
                                            label: {
                                                formatter: [({ value }) => (value)],
                                            },
                                        },
                                    ],
                                };

                                var chart = agCharts.AgChart.create(options);

                            </script>
                        </div>
                        <div class="tab-pane" id="event-split-tab" role="tabpanel">
                        </div>
                    </div>



                </div>
            </div>


        </div>



        <!-- Event create Modal -->
        <div class="modal fade" id="event-create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/calendar.svg"
                                alt=""><span>Create your Event</span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-grp">
                            <label class="form-label">Event name<span>*</span></label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Language</label>
                                <div class="select-inp">
                                    <select class="form-control">

                                        <option value="AK">English</option>
                                        <option value="HI">Arabic</option>
                                        <option value="CA">Spanish</option>
                                        <option value="NV">Hindi</option>
                                    </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>

                            </div>
                        </div>
                        <div class="form-grp">
                            <label class="form-label">Event Type</label>
                            <div class="row event-type radio-check-function">
                                <div class="col-md-4">
                                    <div class="form-check active">
                                        <input class="form-check-input" type="radio" name="action" id="track"
                                            value="track" checked /><label class="form-check-label" for="track">Track
                                            Submission</label>


                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="action" id="event"
                                            value="event" /><label class="form-check-label" for="event">Online
                                            Event</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="action" id="message"
                                            value="message" /><label class="form-check-label" for="message">Hybrid
                                            Event</label>
                                    </div>
                                </div>
                            </div>





                        </div>
                        <div class="form-grp">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Start Date</label>

                                    <div class="ui calendar datestart">
                                        <div class="ui input left icon">
                                            <i class="far fa-calendar icon"></i>
                                            <input type="text" placeholder="Start Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Start Time</label>
                                    <div class="input-group">
                                        <div class="inputfield">
                                            <input class="time-picker-form" type="time" id="appt" name="appt">
                                            <span class="clock-img"><i class="bx bx-time-five"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">End Date</label>

                                    <div class="ui calendar dateend">
                                        <div class="ui input left icon">
                                            <i class="far fa-calendar icon"></i>
                                            <input type="text" placeholder="End Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">End Time</label>
                                    <div class="input-group">
                                        <div class="inputfield">
                                            <input class="time-picker-form" type="time" id="appt" name="appt">
                                            <span class="clock-img"><i class="bx bx-time-five"></i></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light br-50 btn-md" data-bs-toggle="modal"
                            data-bs-target="#alert-msg" data-bs-dismiss="modal">Close</button>
                        <a href="conference.php"><button type="button"
                                class="btn btn-primary br-50 btn-md">Create</button></a>

                    </div>
                </div>
            </div>
        </div>



        <!-- trash popup -->

        <div class="modal fade" id="trash-popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content d-flex justify-content-center">
                    <div>
                        <div class="modal-body">
                            <div class="popup-content-center">
                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
                                </script>
                                <lottie-player
                                    src="https://lottie.host/5028aa1e-0208-4155-be02-d419bd4890a8/FYm6T70Ank.json"
                                    background="#ffffff" speed="1" style="width: 300px; height: 300px" loop autoplay
                                    direction="1" mode="normal"></lottie-player>

                                <h6 class="delete-text">Are you sure want to delete ?</h6>

                            </div>
                        </div>
                        <div class="modal-footer text-center">
                            <a href="conference.php"><button type="button"
                                    class="btn btn-primary text-uppercase br-50 btn-md">Create</button></a>
                            <button type="button" class="btn btn-light text-uppercase br-50 btn-md"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="alert-msg" class="modal fade" tabindex="-1" aria-labelledby="..." aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog modal-confirm modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box red">
                            <i class="mdi mdi-alert"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Are you sure you want to cancel ?</p>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn yes-btn successful-btn" data-bs-dismiss="modal">Yes</button>
                        <button class="btn cancel-button" data-bs-target="#event-create" data-bs-toggle="modal"
                            data-bs-dismiss="modal">No</button>

                    </div>
                </div>
            </div>
        </div>

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

        <div id="alert-success" class="modal fade" tabindex="-1" aria-labelledby="..." aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog modal-confirm modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box green">
                            <i class="mdi mdi-check"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Your message has been sent successfully</p>
                    </div>
                   
                </div>
            </div>
        </div>

        <!-- Modal Add event -->
        <div class="modal fade none-border" id="event-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="title-category modal-title">Add Event</h5>
                        <button type="button" class="btn-close close1" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">

                        
                        <button type="button" class="cancel-btn btn btn-light br-50 btn-md close1" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary br-50 btn-md save-event">Create event</button>
                        <button type="button" class="cancel-btn btn btn-light br-50 btn-md delete-event px-2" data-dismiss="modal"><i class="bx bx-trash-alt font-size-15"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Add Category -->
        <div class="modal fade none-border" id="add-category" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="title-category modal-title">Add a category</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Category Name</label>
                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label class="control-label">Choose Category Color</label>
                                    <div class="select-inp">
                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                            <option value="inverse">Inverse</option>
                                        </select>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel-btn btn btn-light br-50 btn-md" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary br-50 btn-md save-category" data-dismiss="modal">Save</button>
                
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL -->


        <div class="modal fade" id="alerts-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><span>Alerts</span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert-grp">
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                </div>
                            </div>
                        </div>
                        
                    </div>
    
                </div>
            </div>
        </div>



        <div class="alert alert-success alert-dismissible succ-alert" role="alert">
            <img src="assets/images/gif-success.gif"> You are successfully checked in.
            <button type="button" class="alert-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">X</span>
            </button>
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


















        <!-- JAVASCRIPT -->

        <script>
            var itemContainers = [].slice.call(document.querySelectorAll('.board-column-content'));
            var columnGrids = [];
            var boardGrid;

            // Define the column grids so we can drag those
            // items around.
            itemContainers.forEach(function (container) {

                // Instantiate column grid.
                var grid = new Muuri(container, {
                    items: '.board-item',
                    layoutDuration: 400,
                    layoutEasing: 'ease',
                    dragEnabled: true,
                    dragSort: function () {
                        return columnGrids;
                    },
                    dragSortInterval: 0,
                    dragContainer: document.body,
                    dragReleaseDuration: 400,
                    dragReleaseEasing: 'ease'
                })
                    .on('dragStart', function (item) {
                        // Let's set fixed widht/height to the dragged item
                        // so that it does not stretch unwillingly when
                        // it's appended to the document body for the
                        // duration of the drag.
                        item.getElement().style.width = item.getWidth() + 'px';
                        item.getElement().style.height = item.getHeight() + 'px';
                    })
                    .on('dragReleaseEnd', function (item) {
                        // Let's remove the fixed width/height from the
                        // dragged item now that it is back in a grid
                        // column and can freely adjust to it's
                        // surroundings.
                        item.getElement().style.width = '';
                        item.getElement().style.height = '';
                        // Just in case, let's refresh the dimensions of all items
                        // in case dragging the item caused some other items to
                        // be different size.
                        columnGrids.forEach(function (grid) {
                            grid.refreshItems();
                        });
                    })
                    .on('layoutStart', function () {
                        // Let's keep the board grid up to date with the
                        // dimensions changes of column grids.
                        boardGrid.refreshItems().layout();
                    });

                // Add the column grid reference to the column grids
                // array, so we can access it later on.
                columnGrids.push(grid);

            });

            // Instantiate the board grid so we can drag those
            // columns around.
            boardGrid = new Muuri('.board', {
                layout: {
                    horizontal: true,
                },
                layoutDuration: 400,
                layoutEasing: 'ease',
                dragEnabled: true,
                dragSortInterval: 0,
                dragStartPredicate: {
                    handle: '.board-column-header'
                },
                dragReleaseDuration: 400,
                dragReleaseEasing: 'ease'
            });
        </script>


        <script src="https://kit.fontawesome.com/49ccdaea81.js " crossorigin="anonymous "></script>
        <!-- <script src="assets/libs/jquery/jquery.min.js"></script> -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/js/pages/popper.min.js"></script>
        <script src="assets/js/pages/bootstrap.min.js"></script>
        <script src="assets/libs/muuri/web-animations.min.js"></script>
        <script src="assets/libs/muuri/hammer.min.js"></script>
        <script src="assets/libs/muuri/muuri.min.js"></script>
        <script src="assets/libs/muuri/store.min.js"></script>
        <script src="assets/libs/datepicker/semantic.min.js"></script>

        <script src="assets/libs/select2/js/select2.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="assets/libs/datepicker/datepicker.min.js"></script>
        <script src="assets/js/pages/form-advanced.init.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/js/pages/saas-dashboard.init.js"></script>
        <script src="assets/js/pages/apexcharts.init.js"></script>
        <script src="assets/js/pages/mdb.min.js"></script>
        <script src="assets/libs/calendar/jquery-ui.min.js"></script>
        <script src="assets/libs/calendar/moment.min.js"></script>
        <script src="assets/libs/calendar/fullcalendar.min.js"></script>
        <script src="assets/libs/calendar/jquery.fullcalendar.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/aos.js"></script>
        <script>
            AOS.init();
        </script>


        <script>
            $(function () {
                setTimeout(function () {
                    // $('.loader-mask').delay(350).fadeOut('slow')
                    $(".loader-mask").hide();
                }, 100)

            })
        </script>
        <script>
            var $radioButtons = $('.radio-check-function input[type="radio"]');
            $radioButtons.click(function () {
                $radioButtons.each(function () {
                    $(this).parent().toggleClass('active', this.checked);
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
            var itemContainers = [].slice.call(document.querySelectorAll('.board-column-content'));
            var columnGrids = [];
            var boardGrid;

            // Define the column grids so we can drag those
            // items around.
            itemContainers.forEach(function (container) {

                // Instantiate column grid.
                var grid = new Muuri(container, {
                    items: '.board-item',
                    layoutDuration: 400,
                    layoutEasing: 'ease',
                    dragEnabled: true,
                    dragSort: function () {
                        return columnGrids;
                    },
                    dragSortInterval: 0,
                    dragContainer: document.body,
                    dragReleaseDuration: 400,
                    dragReleaseEasing: 'ease'
                })
                    .on('dragStart', function (item) {
                        // Let's set fixed widht/height to the dragged item
                        // so that it does not stretch unwillingly when
                        // it's appended to the document body for the
                        // duration of the drag.
                        item.getElement().style.width = item.getWidth() + 'px';
                        item.getElement().style.height = item.getHeight() + 'px';
                        console.log(item)
                    })
                    .on('dragReleaseEnd', function (item) {
                        // Let's remove the fixed width/height from the
                        // dragged item now that it is back in a grid
                        // column and can freely adjust to it's
                        // surroundings.
                        item.getElement().style.width = '';
                        item.getElement().style.height = '';
                        console.log(item)
                        // Just in case, let's refresh the dimensions of all items
                        // in case dragging the item caused some other items to
                        // be different size.
                        columnGrids.forEach(function (grid) {
                            grid.refreshItems();
                        });
                    })
                    .on('layoutStart', function () {
                        // Let's keep the board grid up to date with the
                        // dimensions changes of column grids.
                        boardGrid.refreshItems().layout();
                    });

                // Add the column grid reference to the column grids
                // array, so we can access it later on.
                columnGrids.push(grid);

            });

            // Instantiate the board grid so we can drag those
            // columns around.
            boardGrid = new Muuri('.board', {
                layout: {
                    horizontal: true,
                },
                layoutDuration: 400,
                layoutEasing: 'ease',
                dragEnabled: true,
                dragSortInterval: 0,
                dragStartPredicate: {
                    handle: '.board-column-header'
                },
                dragReleaseDuration: 400,
                dragReleaseEasing: 'ease'
            });
        </script>
        <!-- <script>
    $(function () {

        $("table").resizableColumns({
            store: window.store
        });
    });
</script> -->

        <script>
            var startX, startWidth, $handle, $table, pressed = false;

            // mousedown
            $('.table-resizable .resize').on('mousedown', function (event) {
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
            $('.table-resizable th, .table-resizable td').on('mousemove', function (event) {
                if (pressed) {
                    $handle.width(startWidth + (event.pageX - startX));
                }
            });

            // mouseup
            $('.table-resizable th, .table-resizable td').on('mouseup', function () {
                if (pressed) {
                    $table.removeClass('resizing');
                    pressed = false;
                }
            });

            // reset column width
            $('.table-resizable thead').on('dblclick', function () {
                // Reset column sizes on double click
                $(this).find('th').css('width', '');
            });
        </script>
        <!-- <script>
    $('#selectAll').click(function (e) {
        $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
    });
</script> -->
        <script>
            $('.selected-num i').on('click', function () {
                $(this).closest(".selected-num").remove();
            });

            $(function () {
                // $("table .form-check-input").click(function () {
                //     if ($(this).is(":checked")) {
                //         $(".row-selected").show();
                //     } else {
                //         $(".row-selected").hide();
                //     }
                // });
                $(".page-content").on("click", function () {
                    $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
                })
                $('input[name="Main_Checkbox"]').on("click", function () {
                    $('.check-input').prop('checked', this.checked);
                });
            });
        </script>

        <!-- <script>
    $('tbody').sortable({
        stop: function (event, ui) {
            $("tbody tr").removeClass("aaa");
            $("tbody tr .name").removeClass("bbb");

            $("tbody tr:first-child").addClass("aaa");
            $("tbody tr:first-child .name").addClass("bbb");
        }
    });
    $("tbody tr:first-child").addClass("aaa");
    $("tbody tr:first-child .name").addClass("bbb");
</script> -->

        <script>
            $('.datestart').calendar({
                type: 'date',
                endCalendar: $('.dateend')
            });
            $('.dateend').calendar({
                type: 'date',
                startCalendar: $('.datestart')
            });
        </script>
        
<script>
    const daysTag = document.querySelector(".days");
    const currentDate = document.querySelector(".current-date");
    const prevNextIcon = document.querySelectorAll(".icons span");

    let currYear = new Date().getFullYear();
    let currMonth = new Date().getMonth();

    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
        "October", "November", "December"
    ];

    const renderCalendar = () => {
        const date = new Date(currYear, currMonth, 1);
        let firstDayofMonth = date.getDay();
        let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
        let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
        let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();

        let liTag = "";

        for (let i = firstDayofMonth; i > 0; i--) {
            liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
        }

        for (let i = 1; i <= lastDateofMonth; i++) {
            let isToday = i === new Date().getDate() && currMonth === new Date().getMonth() && currYear ===
                new Date().getFullYear() ? "active" : "";
            liTag += `<li class="${isToday}">${i}</li>`;
        }

        for (let i = lastDayofMonth; i < 6; i++) {
            liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
        }

        currentDate.innerText = `${months[currMonth]} ${currYear}`;
        daysTag.innerHTML = liTag;
    };

    renderCalendar();

    prevNextIcon.forEach(icon => {
        icon.addEventListener("click", () => {
            currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

            if (currMonth < 0 || currMonth > 11) {
                currYear = icon.id === "prev" ? currYear - 1 : currYear + 1;
                currMonth = currMonth < 0 ? 11 : 0;
            }

            renderCalendar();
        });
    });
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

    </body>

</html>
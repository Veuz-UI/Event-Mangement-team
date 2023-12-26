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
    <link href="assets/libs/select2/css/chosen.min.css" rel="stylesheet">
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <link href="assets/libs/multiselect/choices.min.css" rel="stylesheet">
    <link href="assets/libs/select2/css/chosen.min.css" rel="stylesheet">
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body class="ovrflw">
    <style>
        .team-tab-content{
            overflow: auto;
        }
    </style>
     <style>
        .choices__inner {
            display: inline-block;
            vertical-align: top;
            width: 100%;
            background-color: #fff;
            padding: 0px;
            border: 0px;
            border-bottom: 1px solid #e4e4e4;
            border-radius: 2.5px;
            font-size: 14px;
            min-height: 19px;
        }
        
        .choices {
            position: relative;
            margin-bottom: 0px;
            z-index: 1000;
        }
        
        .choices__input {
            display: inline-block;
            vertical-align: baseline;
            background-color: #fff;
            font-size: 14px;
            margin-bottom: 5px;
            border: 0;
            border-radius: 0;
            width: auto !important;
            padding: 6px 0px 2px 5px;
        }
        
        .choices__list--multiple .choices__item {
            display: inline-block;
            vertical-align: middle;
            border-radius: 39px;
            padding: 1px 10px;
            font-size: 13px;
            font-weight: 400;
            letter-spacing: .3px;
            margin-right: 3.75px;
            margin-bottom: 3.75px;
            background-color: #3b65ef;
            border: 1px solid #3b65ef;
            color: #fff;
            word-break: break-all;
        }
        
        .choices[data-type*=select-multiple] .choices__button,
        .choices[data-type*=text] .choices__button {
            position: relative;
            display: inline-block;
            margin: 0 -4px 0 8px;
            padding-left: 16px;
            border-left: 1px solid #6e8ef9;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEiIGhlaWdodD0iMjEiIHZpZXdCb3g9IjAgMCAyMSAyMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yLjU5Mi4wNDRsMTguMzY0IDE4LjM2NC0yLjU0OCAyLjU0OEwuMDQ0IDIuNTkyeiIvPjxwYXRoIGQ9Ik0wIDE4LjM2NEwxOC4zNjQgMGwyLjU0OCAyLjU0OEwyLjU0OCAyMC45MTJ6Ii8+PC9nPjwvc3ZnPg==);
            background-size: 8px;
            width: 8px;
            line-height: 1;
            opacity: .75;
            border-radius: 0;
        }
    </style>

    <?php include 'loader.php';?>

    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
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
            <div class="container-fluid px-0 survey-detail-page">
                <div class="row">
                    <div class="col-12">
                        <div class="top-bar event-detail-header d-flex justify-content-between align-items-center">
                            <div class="event-details-top-left">
                                <img src="assets/images/poll/poll.svg" alt="">
                                <div>
                                    <h4>Survey Title</h4>
                                    <ul class="breadcrump-inner">
                                        <li><a href="home.php">Home</a> /</li>
                                        <li>Survey Management</li>
                                    </ul>
                                </div>

                               
                            </div>
                            <div class="d-flex flex-wrap gap-3 event-btns ">
                                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-primary bg-2"><i class="bx bx-user clr1"></i>Attendees 1</button>
                                    <button type="button" class="btn btn-outline-primary bg-3"><i class="bx bx-bar-chart-alt-2 clr2"></i>Results</button>
                                </div>
                            </div>
                            <div class="d-flex rightside-btns">
                                <button type="button" class="btn btn-outline-secondary waves-effect waves-light btn-sm br-50 me-1">
                                    New Survey
                                </button>
                                <button type="button" class="btn btn-primary waves-effect waves-light btn-sm br-50">
                                    Save
                                  </button>
                            </div>
                        </div>

                    </div>
                    <hr class="nav-bottom-hr">
                    <div class="col-md-12">
                        <div class="survey-form">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-grp">
                                        <label class="form-label">Survey Title</label>
                                        <input class="form-control" type="text" placeholder="Survey Title">                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grp">
                                        <label class="form-label">Responsible</label>
                                        <div class="select-inp">
                                            <select class="form-control">
                                                <option value="AK" selected>Bishru Rahman</option>
                                                <option value="HI">Arshad</option>
                                                <option value="CA">Nasim</option>
                                    
                                            </select>
                                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                        </div>                                      
                                    </div>
                                </div>
                                <div class="col-md-4 hide">
                                    <div class="form-grp">
                                        <label class="form-label">Language</label>
                                        <select class="form-control" id="choices-multiple-remove-button" placeholder="Select" multiple>
                                            <option value="Author" onclick="filterSelection('Author')" selected>English
                                            </option>
                                            <option value="MSelect" selected>Arabic</option>
                                            <option value="Accordions">Urdu</option>
                                            <option value="Accordions">Tamil</option>
                                            <option value="Accordions">Hindi</option>
                                        </select>                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
                <div class="tab-content evnt-tab-content">
                    <div class="tab-pane active" id="manage" role="tabpanel">
                        <hr class="nav-bottom-hr">
                        <div class="row overview-tabs">
                            <div class="col-md-8 border-right">
                                <div class="nav-evnt-top">
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#evnt-tab1" role="tab">
                                                <span>Questions</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#evnt-tab2" role="tab">
                                                <span>Start Message</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#evnt-tab3" role="tab">
                                                <span>End Message</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#evnt-tab4" role="tab">
                                                <span>Initial Fields</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#evnt-tab5" role="tab">
                                                <span>Options</span>
                                            </a>
                                        </li>
        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 ps-md-0 d-none d-sm-block">
                                <div class="right-side-nav1">
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#send-msg" role="tab">
                                                <span>Send message</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#log-note" role="tab">
                                                <span>Log note</span>
                                            </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#activities" role="tab">
                                                <span><i class="far fa-clock me-2"></i>Activities</span>
                                            </a>
                                        </li> -->

                                    </ul>
                                    <div class="followng">
                                        <a href="#">Following</a>
                                        <div class="followers">
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.6238 2.83333C12.998 2.83333 14.103 3.94541 14.103 5.3125C14.103 6.65125 13.0405 7.74208 11.7159 7.79166C11.6547 7.78458 11.5929 7.78458 11.5318 7.79166M12.9909 14.1667C13.5009 14.0604 13.9826 13.855 14.3793 13.5504C15.4843 12.7217 15.4843 11.3546 14.3793 10.5258C13.9897 10.2283 13.5151 10.03 13.0122 9.91666M6.48842 7.69958C6.41759 7.6925 6.33259 7.6925 6.25467 7.69958C5.44165 7.67198 4.6713 7.32901 4.10675 6.7433C3.54219 6.1576 3.22778 5.37515 3.23009 4.56166C3.23009 2.82625 4.63259 1.41666 6.37509 1.41666C7.20826 1.40164 8.01327 1.7182 8.61303 2.29671C9.2128 2.87522 9.55819 3.66829 9.57322 4.50146C9.58824 5.33462 9.27168 6.13964 8.69317 6.7394C8.11466 7.33916 7.32159 7.68455 6.48842 7.69958ZM2.94676 10.3133C1.23259 11.4608 1.23259 13.3308 2.94676 14.4712C4.89467 15.7746 8.08926 15.7746 10.0372 14.4712C11.7513 13.3237 11.7513 11.4537 10.0372 10.3133C8.09634 9.01708 4.90176 9.01708 2.94676 10.3133Z" stroke="#626262" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>3

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="nav-bottom-hr">

                        <div class="evnt-tabcontent">
                            <div class="row overview-tab">
                                <div class="col-md-8 col-lap-8 border-right">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="evnt-tab1" role="tabpanel">
                                            <div class="row team-tab-content">
                                                <div class="col-md-12">
                                                    <div class="speaker-header">
                                                        <div class="speaker-btns">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                                                data-bs-toggle="modal" data-bs-target="#add-question">Add a Question
                                                            </button>
                                                            <div class="dropdown event-sett1">
                                                                <div class="event-settings dropdown-toggle" type="button" id="dropdownMenuButton"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fas fa-cog"></i>
                                                                </div>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#import-upload"><i class="fas fa-download me-2"></i>Import</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#export-modal"><i class="fas fa-upload me-2"></i>Export</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#"><i class="fas fa-envelope me-2"
                                                                            data-bs-toggle="modal" data-bs-target="#alert-msg"></i>Send Mail</a>
                                                                </div>
                                                            </div>
                                
                                                        </div>
            
                                                        <div class="d-flex rightside-btns">
                                                            <div class="row-selected" style="display: none;">
                                                                <button type="button" class="btn btn-light selected-num me-1" fdprocessedid="6xsncw">
                                                                    <span>8</span>Selected<i class="bx bx-x"></i>
                                                                </button>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                                        data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="p8hcnm"><i
                                                                            class="fas fa-cog me-1" aria-hidden="true"></i>Actions</button>
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
                                                                    <button type="button"
                                                                        class="input-group-text input-group-text-right btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                                                        id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"
                                                                        data-mdb-auto-close="outside" fdprocessedid="w62w8i">
                                                                        <i class="bx bx-filter-alt"></i>
                                
                                                                    </button>
                                
                                                                    <ul class="dropdown-menu dropdown-menu-lg filter-megadropdown animation fade-out"
                                                                        aria-labelledby="dropdownMenuButton" data-popper-placement="bottom-end"
                                                                        data-mdb-popper="null"
                                                                        style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-8px, 35px);">
                                                                        <div class="dropdown-row">
                                                                            <div class="col-md-4 border-right px-0">
                                                                                <h3><i class="bx bxs-filter-alt"></i>Filters</h3>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li><a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                                aria-hidden="true"></i>My
                                                                                            Events</span></a>
                                                                                </li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                                aria-hidden="true"></i>Upcoming/Running</span></a>
                                                                                </li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
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
                                                                                                    <input type="date" class="form-control-sm">
                                                                                                </div>
                                                                                            </a>
                                                                                        </li>
                                
                                                                                    </ul>
                                                                                </li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                                aria-hidden="true"></i>Archived</span></a>
                                                                                </li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li>
                                                                                    <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                                        Add Custom Filter <i class="fas fa-angle-right arrow"
                                                                                            aria-hidden="true"></i>
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
                                                                                <li><a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                                aria-hidden="true"></i>Responsible</span></a>
                                                                                </li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                                aria-hidden="true"></i>Template</span></a>
                                                                                </li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
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
                                                                                                    <input type="date" class="form-control-sm">
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
                                                                                <li><a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                                aria-hidden="true"></i>My
                                                                                            Events</span></a>
                                                                                </li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                                aria-hidden="true"></i>Upcoming
                                                                                            Events</span></a>
                                                                                </li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li>
                                                                                    <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                                        Save current search <i class="fas fa-angle-right arrow"
                                                                                            aria-hidden="true"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-submenu" style="margin-top: 40px;left: auto;width: 100%;">
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="#">
                                
                                                                                                <div class="form-check">
                                                                                                    <input class="form-check-input" type="checkbox"
                                                                                                        id="formCheck1">
                                                                                                    <label class="form-check-label" for="formCheck1">
                                                                                                        Default filter
                                                                                                    </label>
                                                                                                </div>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="#">
                                                                                                <div class="form-check">
                                                                                                    <input class="form-check-input" type="checkbox"
                                                                                                        id="formCheck1">
                                                                                                    <label class="form-check-label" for="formCheck1">
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
                                
                                                         
                                
                                                        </div>
                                
                                                    </div>
                                                    <div class="question-list-div">
                                                        <div class="question-tbl-overflow">
                                                            <table id="event-table" class="table table-resizable tbl-qstn">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="36px" style="padding-right: 4px;"><input class="form-check-input " type="checkbox"
                                                                                name="Main_Checkbox" id="selectAll"><span class="resize"></span>
                                                                        </th>
                                                                        <th width="90px">S/NO<span class="resize"></span></th>
                                                                        <th>Title<span class="resize"></span></th>
                                                                        <th>Question Type<span class="resize"></span></th>                                                                     
                                                                        <th><span class="resize"></span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox"
                                                                                id="formCheck1"><span class="resize"></span></td>
                                                                        <td>1<span class="resize"></span></td>
                                                                        <td><a class="tbl-link" data-bs-toggle="modal" data-bs-target="#add-question" href="#">What is HTML?</a><span class="resize"></span></td>
                                                                        <td>Multiple choice: only one answer<span class="resize"></span></td>
                                                                        <td class="td-overflow">
                                                                            <div class="dropdown common-drpdwn float-right">
                                                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fas fa-ellipsis-v dots"></i></a>
                                                                                <div class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item" href="#">Copy</a>
                                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                            <span class="resize"></span>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox"
                                                                                id="formCheck2"><span class="resize"></span></td>
                                                                        <td>2<span class="resize"></span></td>
                                                                        <td><a class="tbl-link" data-bs-toggle="modal" data-bs-target="#add-question" href="#">What are HTML tags?</a><span class="resize"></span></td>
                                                                        <td>Multiple choice: multiple answers allowed<span class="resize"></span></td>
                                                                        <td class="td-overflow">
                                                                            <div class="dropdown common-drpdwn float-right">
                                                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fas fa-ellipsis-v dots"></i></a>
                                                                                <div class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item" href="#">Copy</a>
                                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                            <span class="resize"></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox"
                                                                                id="formCheck3"><span class="resize"></span></td>
                                                                        <td>3<span class="resize"></span></td>
                                                                        <td><a class="tbl-link" data-bs-toggle="modal" data-bs-target="#add-question" href="#">What are HTML Attributes?</a><span class="resize"></span></td>
                                                                        <td>Multiple choice: only one answer<span class="resize"></span></td>
                                                                        <td class="td-overflow">
                                                                            <div class="dropdown common-drpdwn float-right">
                                                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fas fa-ellipsis-v dots"></i></a>
                                                                                <div class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item" href="#">Copy</a>
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
                                                                    <li><a href="#"><i class="bx bx-chevron-left"></i></a></li>
                                                                    <li><a href="#"><i class="bx bx-chevrons-left"></i></a></li>
                                                                    <li class="active"><a href="#"><span>1</span></a></li>
                                                                    <li><a href="#"><span>2</span></a></li>
                                                                    <li><a href="#"><i class="bx bx-chevrons-right"></i></a></li>
                                                                    <li><a href="#"><i class="bx bx-chevron-right"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                   
                                                    </div>
                                
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="evnt-tab2" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <textarea id="" cols="30" rows="5" class="form-control txtarea" placeholder="Start Message"></textarea>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="tab-pane" id="evnt-tab3" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <textarea id="" cols="30" rows="5" class="form-control txtarea" placeholder="End Message"></textarea>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="tab-pane" id="evnt-tab4" role="tabpanel">
                                            <div class="predefined">
                                                <h6>Predefined fields : </h6>
                                                <div class="pre-inputs">
                                                    <button type="button" class="btn-input waves-effect waves-light ml-1" data-toggle="modal" data-target="#alert-modal">Add Email<i class="fa fa-plus ml-1" aria-hidden="true"></i></button>
                                                    <button type="button" class="btn-input waves-effect waves-light ml-1">Add Gender<i class="fa fa-plus ml-1" aria-hidden="true"></i></button>
                                                    <button type="button" class="btn-input waves-effect waves-light ml-1">Add Name<i class="fa fa-plus ml-1" aria-hidden="true"></i></button>
                                                    <button type="button" class="btn-input waves-effect waves-light ml-1">Add Phone<i class="fa fa-plus ml-1" aria-hidden="true"></i></button>
                                                    <button type="button" class="btn-input waves-effect waves-light ml-1">Add ID<i class="fa fa-plus ml-1" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                            <div class="qstn-options-div">
                                                <table id="event-table" class="table table-resizable">
                                                    <thead>
                                                        <tr>
                                                          
                                                            <th width="180px">Input Title</th>
                                                            <th width="110px">Mandatory</th>
                                                            <th width="110px">Unique Field</th>
                                                            <th width="160px">Input Type</th>
                                                            <th>Inputs</th>
                                                            <th></th>
                                                            <th width="60px"></th>
                                                            <th width="30px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="intial-text" placeholder="" value="Name">
                                                             
                                                            </td>
                                                            <td class="text-center">
                                                                <input id="r-day" type="checkbox">
                                                            </td>
                                                            <td class="text-center">
                                                                <input id="r-day" type="checkbox">
                                                            </td>
                                                            <td>
                                                                <select class="intial-text2">
                                                                    <option value="text" selected>Text</option>
                                                                    <option value="selection">Selection</option>
                                                                    <option value="date">Date</option>
                                                                    <option value="number">Number</option>
                                                                </select>
                                                            </td>
                                                            <td class="hidefields">
                                                                <div class="d-flex align-items-center text-fld-show">
                                                                    Email Field <input type="checkbox" id="r-day" class="ml-1">
                                                                </div>
                                                            </td>
                                                                <td class="hidefields">
                                                                    <div class="minmax">
                                                                        min/max: 
                                                                        <input type="radio" class="form-field rad-clr min-max-no" name="minmax1" id="min-max" value="false" checked=""> <span> No </span>
                                                                        <input class="form-field rad-clr min-max-yes" type="radio" name="minmax1" id="min-max" value="true"> <span> Yes</span>
                                                                        <div class="min-max-values hide">
                                                                            <input class="form-control form-field" type="number" placeholder="min" value="5" fdprocessedid="ku2i59">-
                                                                            <input class="form-control form-field" type="number" placeholder="max" value="10" fdprocessedid="181r0w">
                                                                        </div>
                                                                        
                                                                    </div>
                                                                   
                                                                </td>
                                                                <td colspan="2" class="colspan-show hide">
                                                                    <div class="selection-fld">
                                                                         <div class="gender-in-grp">
                                                                             <div class="gender-inputs"><input type="text" class="form-control" value="Male"><span class="bx bx-trash mx-1"></span></div> 
                                                                             <div class="gender-inputs"><input type="text" class="form-control" value="Female"><span class="bx bx-trash mx-1"></span></div> 
                                                                             <div class="gender-inputs"><input type="text" class="form-control" value="Other"><span class="bx bx-trash mx-1"></span></div> 
                                                                         </div>
                                                                         <a href="#" class="add-fld mr-1">Add +</a>
                                                                    </div>
                                                                    
                                                                 </td>
                                                                <td class="text-center">
                                                                    <div class="toggle-switch">
                                                                        <input id="toggle" class="toggle-input" type='checkbox' />
                                                                        <label for="toggle" class="toggle-label" />
                                                                    </div>
                                                                </td>
                                                                <td class="text-center px-1">
                                                                    <div class="action-tbl d-flex justify-content-end">

                                                                    <i class="bx bx-trash cursor-pntr mx-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i>

                                                                    </div>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="intial-text" placeholder="" value="Email">
                                                               
                                                            </td>
                                                            <td class="text-center">
                                                                <input id="r-day" type="checkbox">
                                                            </td>
                                                            <td class="text-center">
                                                                <input id="r-day" type="checkbox">
                                                            </td>
                                                            <td>
                                                                <select class="intial-text2">
                                                                    <option value="text" selected>Text</option>
                                                                    <option value="selection">Selection</option>
                                                                    <option value="date">Date</option>
                                                                    <option value="number">Number</option>
                                                                </select>
                                                            </td>
                                                            <td class="hidefields">
                                                                <div class="d-flex align-items-center text-fld-show">
                                                                    Email Field <input type="checkbox" id="r-day" class="ml-1">
                                                                </div>
                                                            </td>
                                                            <td class="hidefields">
                                                                <div class="minmax">
                                                                    min/max: 
                                                                    <input type="radio" class="form-field min-max-no" name="minmax2" id="min-max" value="false" checked=""> <span> No </span>
                                                                    <input class="form-field min-max-yes" type="radio" name="minmax2" id="min-max" value="true"> <span> Yes</span>
                                                                    <div class="min-max-values hide">
                                                                        <input class="form-control form-field" type="number" placeholder="min" value="5" fdprocessedid="ku2i59">-
                                                                        <input class="form-control form-field" type="number" placeholder="max" value="10" fdprocessedid="181r0w">
                                                                    </div>
                                                                    
                                                                </div>
                                                               
                                                            </td>
                                                            <td colspan="2" class="colspan-show hide">
                                                                <div class="selection-fld">
                                                                     <div class="gender-in-grp">
                                                                            <div class="gender-inputs"><input type="text" class="form-control" value="Male"><span class="bx bx-trash mx-1"></span></div> 
                                                                             <div class="gender-inputs"><input type="text" class="form-control" value="Female"><span class="bx bx-trash mx-1"></span></div> 
                                                                             <div class="gender-inputs"><input type="text" class="form-control" value="Other"><span class="bx bx-trash mx-1"></span></div> 
                                                                     </div>
                                                                     <a href="#" class="add-fld mr-1">Add +</a>
                                                                </div>
                                                                
                                                             </td>
                                                             <td class="text-center">
                                                                <div class="toggle-switch">
                                                                    <input id="toggle" class="toggle-input" type='checkbox' />
                                                                    <label for="toggle" class="toggle-label" />
                                                                </div>
                                                            </td>
                                                            <td class="text-center px-1">
                                                                <div class="action-tbl d-flex justify-content-end">

                                                                <i class="bx bx-trash cursor-pntr mx-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="intial-text" placeholder="" value="Gender">
                                                              
                                                            </td>
                                                            <td class="text-center">
                                                                <input id="r-day" type="checkbox">
                                                            </td>
                                                            <td class="text-center">
                                                                <input id="r-day" type="checkbox">
                                                            </td>
                                                            <td>
                                                                <select class="intial-text2">
                                                                    <option value="text">Text</option>
                                                                    <option value="selection" selected>Selection</option>
                                                                    <option value="date">Date</option>
                                                                    <option value="number">Number</option>
                                                                </select>
                                                            </td>
                                                            <td class="hidefields hide">
                                                                <div class="d-flex align-items-center text-fld-show">
                                                                    Email Field <input type="checkbox" id="r-day" class="ml-1">
                                                                </div>
                                                            </td>
                                                                <td class="hidefields hide">
                                                                    <div class="minmax">
                                                                        min/max: 
                                                                        <input type="radio" class="form-field rad-clr min-max-no" name="minmax3" id="min-max" value="false" checked=""> <span> No </span>
                                                                        <input class="form-field rad-clr min-max-yes" type="radio" name="minmax3" id="min-max" value="true"> <span> Yes</span>
                                                                        <div class="min-max-values hide">
                                                                            <input class="form-control form-field" type="number" placeholder="min" value="5" fdprocessedid="ku2i59">-
                                                                            <input class="form-control form-field" type="number" placeholder="max" value="10" fdprocessedid="181r0w">
                                                                        </div>
                                                                        
                                                                    </div>
                                                                   
                                                                </td>
                                                            <td colspan="2" class="colspan-show">
                                                               <div class="selection-fld">
                                                                    <div class="gender-in-grp">
                                                                            <div class="gender-inputs"><input type="text" class="form-control" value="Male"><span class="bx bx-trash mx-1"></span></div> 
                                                                             <div class="gender-inputs"><input type="text" class="form-control" value="Female"><span class="bx bx-trash mx-1"></span></div> 
                                                                             <div class="gender-inputs"><input type="text" class="form-control" value="Other"><span class="bx bx-trash mx-1"></span></div> 
                                                                    </div>
                                                                    <a href="#" class="add-fld mr-1">Add +</a>
                                                               </div>
                                                               
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="toggle-switch">
                                                                    <input id="toggle" class="toggle-input" type='checkbox' />
                                                                    <label for="toggle" class="toggle-label" />
                                                                </div>
                                                            </td>
                                                            <td class="text-center px-1">
                                                                <div class="action-tbl d-flex justify-content-end">

                                                                <i class="bx bx-trash cursor-pntr mx-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="intial-text" placeholder="" value="Phone">
                                                               
                                                            </td>
                                                            <td class="text-center">
                                                                <input id="r-day" type="checkbox">
                                                            </td>
                                                            <td class="text-center">
                                                                <input id="r-day" type="checkbox">
                                                            </td>
                                                            <td>
                                                                <select class="intial-text2">
                                                                    <option value="text">Text</option>
                                                                    <option value="selection">Selection</option>
                                                                    <option value="date">Date</option>
                                                                    <option value="number" selected>Number</option>
                                                                </select>
                                                            </td>
                                                            <td class="hidefields">
                                                                <div class="d-flex align-items-center text-fld-show">
                                                                    Email Field <input type="checkbox" id="r-day" class="ml-1">
                                                                </div>
                                                            </td>
                                                            <td class="hidefields">
                                                                <div class="minmax">
                                                                    min/max: 
                                                                    <input type="radio" class="form-field min-max-no" name="minmax4" id="min-max" value="false" checked=""> <span> No </span>
                                                                    <input class="form-field min-max-yes" type="radio" name="minmax4" id="min-max" value="true"> <span> Yes</span>
                                                                    <div class="min-max-values hide">
                                                                        <input class="form-control form-field" type="number" placeholder="min" value="5" fdprocessedid="ku2i59">-
                                                                        <input class="form-control form-field" type="number" placeholder="max" value="10" fdprocessedid="181r0w">
                                                                    </div>
                                                                    
                                                                </div>
                                                               
                                                            </td>
                                                            <td colspan="2" class="colspan-show hide">
                                                                <div class="selection-fld">
                                                                     <div class="gender-in-grp">
                                                                            <div class="gender-inputs"><input type="text" class="form-control" value="Male"><span class="bx bx-trash mx-1"></span></div> 
                                                                             <div class="gender-inputs"><input type="text" class="form-control" value="Female"><span class="bx bx-trash mx-1"></span></div> 
                                                                             <div class="gender-inputs"><input type="text" class="form-control" value="Other"><span class="bx bx-trash mx-1"></span></div> 
                                                                     </div>
                                                                     <a href="#" class="add-fld mr-1">Add +</a>
                                                                </div>
                                                                
                                                             </td>
                                                             <td class="text-center">
                                                                <div class="toggle-switch">
                                                                    <input id="toggle" class="toggle-input" type='checkbox' />
                                                                    <label for="toggle" class="toggle-label" />
                                                                </div>
                                                            </td>
                                                            <td class="text-center px-1">
                                                                <div class="action-tbl d-flex justify-content-end">

                                                                <i class="bx bx-trash cursor-pntr mx-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="intial-text" placeholder="" value="ID">
                                                               
                                                            </td>
                                                            <td class="text-center">
                                                                <input id="r-day" type="checkbox">
                                                            </td>
                                                            <td class="text-center">
                                                                <input id="r-day" type="checkbox" checked="">
                                                            </td>
                                                            <td>
                                                                <select class="intial-text2">
                                                                    <option value="text">Text</option>
                                                                    <option value="selection">Selection</option>
                                                                    <option value="date">Date</option>
                                                                    <option value="number" selected>Number</option>
                                                                </select>
                                                            </td>
                                                            <td class="hidefields">
                                                                <div class="d-flex align-items-center text-fld-show">
                                                                    Email Field <input type="checkbox" id="r-day" class="ml-1">
                                                                </div>
                                                            </td>
                                                            <td class="hidefields">
                                                                <div class="minmax">
                                                                    min/max: 
                                                                    <input type="radio" class="form-field min-max-no" name="minmax5" id="min-max" value="false"> <span> No </span>
                                                                    <input class="form-field min-max-yes" type="radio" name="minmax5" id="min-max" value="true" checked=""> <span> Yes</span>
                                                                    <div class="min-max-values">
                                                                        <input class="form-control form-field" type="number" placeholder="min" value="5" fdprocessedid="ku2i59">-
                                                                        <input class="form-control form-field" type="number" placeholder="max" value="10" fdprocessedid="181r0w">
                                                                    </div>
                                                                    
                                                                </div>
                                                               
                                                            </td>
                                                            <td colspan="2" class="colspan-show hide">
                                                                <div class="selection-fld">
                                                                     <div class="gender-in-grp">
                                                                            <div class="gender-inputs"><input type="text" class="form-control" value="Male"><span class="bx bx-trash mx-1"></span></div> 
                                                                             <div class="gender-inputs"><input type="text" class="form-control" value="Female"><span class="bx bx-trash mx-1"></span></div> 
                                                                             <div class="gender-inputs"><input type="text" class="form-control" value="Other"><span class="bx bx-trash mx-1"></span></div> 
                                                                     </div>
                                                                     <a href="#" class="add-fld mr-1">Add +</a>
                                                                </div>
                                                                
                                                             </td>
                                                             <td class="text-center">
                                                                <div class="toggle-switch">
                                                                    <input id="toggle" class="toggle-input" type='checkbox' />
                                                                    <label for="toggle" class="toggle-label" />
                                                                </div>
                                                            </td>
                                                            <td class="text-center px-1">
                                                                <div class="action-tbl d-flex justify-content-end">

                                                                    <i class="bx bx-trash cursor-pntr mx-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i>

                                                                </div>
                                                            </td>
                                                        </tr>
            
            
            
            
                                                    </tbody>
                                                </table>
                                         
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="evnt-tab5" role="tabpanel">
                                            <div class="qstn-options-div">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="col-box">
                                                            <h5>Questions</h5>
                                                            <div class="box-shadow1">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-3 br-right d-flex align-items-center">
                                                                        <h6>Pagination</h6>
                                                                    </div>
                                                                    <div class="col-md-9 py-2 px-2 optn-form-group">
                                                                        <div class="form-group">
                                                                            <input type="radio" id="customer" name="pagination" checked>
                                                                            <label for="customer">One page per question</label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="radio" id="customer" name="pagination">
                                                                            <label for="customer">One page per section</label>
                                                                        </div>
                                                                        <div class="form-group mb-0">
                                                                            <input type="radio" id="customer" name="pagination">
                                                                            <label for="customer">One page with all the questions</label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-3 br-right d-flex align-items-center">
                                                                        <h6>Display Progress as</h6>
                                                                    </div>
                                                                    <div class="col-md-9 py-2 px-2 optn-form-group">
                                                                        <div class="form-group"><input type="radio" id="customer" name="progress" value="Percentage" checked=""><label>Percentage left</label></div>
                                                                        <div class="form-group mb-0"><input type="radio" id="customer" name="progress" value="Number"><label>Number</label></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-3 br-right d-flex align-items-center">
                                                                        <h6>Question Selection</h6>
                                                                    </div>
                                                                    <div class="col-md-9 py-2 px-2 optn-form-group">
                                                                        <div class="form-group"><input type="radio" id="customer" name="qselection" value="All questions" checked=""><label>All questions</label></div>
                                                                        <div class="form-group mb-0"><input type="radio" id="customer" name="qselection" value="Randomized per section"><label>Randomized</label></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow" style="border:none !important">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-3 br-right d-flex align-items-center">
                                                                        <h6>Back Button</h6>
                                                                    </div>
                                                                    <div class="col-md-9 py-2 px-2 optn-form-group">
                                                                        <div class="form-group"><input id="r-day" type="checkbox" checked=""></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>





                                                        <div class="col-box">
                                                            <h5>Time &amp; Scoring</h5>
                                                            <div class="box-shadow1">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-3 br-right d-flex align-items-center">
                                                                        <h6>Exam Time Limit</h6>
                                                                    </div>
                                                                    <div class="col-md-9 py-2 px-2 optn-form-group">
                                                                        <input type="checkbox" id="r-day">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-3 br-right d-flex align-items-center">
                                                                        <h6>Scoring</h6>
                                                                    </div>
                                                                    <div class="col-md-9 py-2 px-2 optn-form-group">
                                                                        <div class="form-group">
                                                                            <input type="radio" id="customer" name="pagination" checked>
                                                                            <label for="customer">No scoring                                                                                    </label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="radio" id="customer" name="pagination">
                                                                            <label for="customer">Scoring with answers at the end</label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="radio" id="customer" name="pagination">
                                                                            <label for="customer">Scoring without answers at the end
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group mb-0">
                                                                            <input type="radio" id="customer" name="pagination">
                                                                            <label for="customer">Scoring only admin
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-3 br-right d-flex align-items-center">
                                                                        <h6>Required Score (%)</h6>
                                                                    </div>
                                                                    <div class="col-md-9 py-2 px-2 optn-form-group">
                                                                        <input type="number" class="form-control input-date-num" value="80">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="box-shadow" style="border: none !important;">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-3 br-right d-flex align-items-center">
                                                                        <h6>Is a Certification</h6>
                                                                    </div>
                                                                    <div class="col-md-9 py-2 px-2 optn-form-group">
                                                                        <input type="checkbox" id="r-day">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="col-box">
                                                            <h5 class="mt-25-sm">Participants</h5>
                                                            <div class="box-shadow1">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-4 br-right d-flex align-items-center">
                                                                        <h6>Access Mode</h6>
                                                                    </div>
                                                                    <div class="col-md-8 py-1 px-2 pl-0-sm">
                                                                        <div class="select-inp width-class">
                                                                            <select class="form-control">
                                        
                                                                                <option value="0" selected="">Anyone with the link</option>
                                                                                <option value="1">Invited people only</option>
                                                                            </select>
                                                                            <i class="fas fa-chevron-down"></i>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-4 br-right d-flex align-items-center">
                                                                        <h6>Require Login</h6>
                                                                    </div>
                                                                    <div class="col-md-8 py-1 px-2 pl-0-sm d-flex align-item-center"><input type="checkbox" id="r-day"></div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-4 br-right d-flex align-items-center">
                                                                        <h6>Sequence number</h6>
                                                                    </div>
                                                                    <div class="col-md-8 py-1 px-2 pl-0-sm d-flex align-item-center"><input type="checkbox" id="r-day"></div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-4 br-right d-flex align-items-center">
                                                                        <h6>Show percentage at the end</h6>
                                                                    </div>
                                                                    <div class="col-md-8 py-1 px-2 pl-0-sm d-flex align-item-center"><input type="checkbox" id="r-day"></div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-4 br-right d-flex align-items-center">
                                                                        <h6>Location</h6>
                                                                    </div>
                                                                    <div class="col-md-8 py-1 px-2 pl-0-sm d-flex align-item-center"><input type="text" class="form-control" value=""></div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-4 br-right d-flex align-items-center">
                                                                        <h6>Training Date</h6>
                                                                    </div>
                                                                    <div class="col-md-8 py-1 px-2 pl-0-sm d-flex align-item-center"><input name="training_date" type="date" class="form-control training_date" id="r-day1" value=""></div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-4 br-right d-flex align-items-center">
                                                                        <h6>Expiry Date</h6>
                                                                    </div>
                                                                    <div class="col-md-8 py-1 px-2 pl-0-sm d-flex align-item-center"><input name="training_date" type="date" class="form-control training_date" id="r-day1" value=""></div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-4 br-right d-flex align-items-center">
                                                                        <h6>Close Button </h6>
                                                                    </div>
                                                                    <div class="col-md-8 py-2 px-2 optn-form-group">

                                                                        <div class="form-group"><input type="radio" id="customer" name="progress" value="Percentage" checked=""><label>No</label></div>
                                                                        <div class="form-group mb-0"><input type="radio" id="customer" name="progress" value="Percentage" checked=""><label>Yes</label></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-4 br-right d-flex align-items-center">
                                                                        <h6>Password Required </h6>
                                                                    </div>
                                                                    <div class="col-md-8 py-2 px-2 optn-form-group">
                                                                        <div class="form-group"><input type="radio" id="r-day" name="closePass" value="0"><label>No</label></div>
                                                                        <div class="form-group mb-0"><input type="radio" id="r-day" name="closePass" value="1" checked=""><label>Yes</label></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box-shadow" style="border:none;">
                                                                <div class="row mx-0">
                                                                    <div class="col-md-4 br-right d-flex align-items-center">
                                                                        <h6>Close Password</h6>
                                                                    </div>
                                                                    <div class="col-md-8 py-1 px-2 pl-0-sm d-flex align-item-center"><input type="password" class="form-control" value="1234"></div>
                                                                </div>

                                                            </div>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                
                                </div>
    
                                <div class="col-md-4 col-lap-4" data-aos="fade-up">
                                    <div class="right-side-nav d-md-none msg-box-mob">
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#send-msg" role="tab">
                                                    <span>Send message</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#log-note" role="tab">
                                                    <span>Log note</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#activities" role="tab">
                                                    <span><i class="far fa-clock me-2"></i>Activities</span>
                                                </a>
                                            </li>
    
                                        </ul>
                                        <div class="followng">
                                            <a href="#">Following</a>
                                            <div class="followers">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.6238 2.83333C12.998 2.83333 14.103 3.94541 14.103 5.3125C14.103 6.65125 13.0405 7.74208 11.7159 7.79166C11.6547 7.78458 11.5929 7.78458 11.5318 7.79166M12.9909 14.1667C13.5009 14.0604 13.9826 13.855 14.3793 13.5504C15.4843 12.7217 15.4843 11.3546 14.3793 10.5258C13.9897 10.2283 13.5151 10.03 13.0122 9.91666M6.48842 7.69958C6.41759 7.6925 6.33259 7.6925 6.25467 7.69958C5.44165 7.67198 4.6713 7.32901 4.10675 6.7433C3.54219 6.1576 3.22778 5.37515 3.23009 4.56166C3.23009 2.82625 4.63259 1.41666 6.37509 1.41666C7.20826 1.40164 8.01327 1.7182 8.61303 2.29671C9.2128 2.87522 9.55819 3.66829 9.57322 4.50146C9.58824 5.33462 9.27168 6.13964 8.69317 6.7394C8.11466 7.33916 7.32159 7.68455 6.48842 7.69958ZM2.94676 10.3133C1.23259 11.4608 1.23259 13.3308 2.94676 14.4712C4.89467 15.7746 8.08926 15.7746 10.0372 14.4712C11.7513 13.3237 11.7513 11.4537 10.0372 10.3133C8.09634 9.01708 4.90176 9.01708 2.94676 10.3133Z" stroke="#626262" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>3
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="send-msg" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea id="" cols="30" rows="5" class="form-control txtarea" placeholder="Send message to followers"></textarea>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light btn-sm px-4 br-50 small">Send</button>
                                                </div>
                                           
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="log-note" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea id="" cols="30" rows="5" class="form-control txtarea" placeholder="Log an internal note"></textarea>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light btn-sm px-4 br-50 small">Send</button>
                                                </div>
                                          
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                                    <div class="msg-snd">
                                                        <h6 class="send-date">Today</h6>
                                                        <div class="snd-msgs">
                                                        <div class="msg-bx">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="">
                                                            <div class="msg-details">
                                                                <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                <div class="msgs">
                                                                    <h5>Booked</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                    <h6>Announced</h6> <span>(Stage)</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="msg-bx">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="">
                                                            <div class="msg-details">
                                                                <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                <div class="msgs">
                                                                    <h5>New</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                    <h6>Booked</h6> <span>(Stage)</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="msg-bx">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="">
                                                            <div class="msg-details">
                                                                <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                <div class="msgs">
                                                                    <h5>Booked</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                    <h6>New</h6> <span>(Stage)</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="msg-bx">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="">
                                                            <div class="msg-details">
                                                                <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                <div class="msgs">
                                                                    <h5>New</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                    <h6>Booked</h6> <span>(Stage)</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="msg-bx msg-bx1">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="">
                                                            <div class="msg-details">
                                                                <h6>Odoo Bot <span>- 6 hours ago</span></h6>
                                                                <div class="msgs">
                                                                    <h4>Event Created</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        
                                                    </div>
                                        </div>
                                        <!-- <div class="tab-pane" id="activities" role="tabpanel">
                                        </div> -->
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>





            </div>
        </div>


    </div>




    <div class="modal fade" id="add-question" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xxl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/survey/question.svg" alt="" style="width: 24px;"><span>Add a Question</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row mx-0">
                        <div class="col-md-3 col-12 bg-light1">
                            <h5>Question Type</h5>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a data-id="1" class="nav-link qty-item active show" id="qtype1-tab" data-toggle="pill" href="#qtype1" role="tab" aria-controls="qtype1" aria-selected="true">Multiple choice: One answer</a>
                                <a data-id="2" class="nav-link qty-item" id="qtype2-tab" data-toggle="pill" href="#qtype2" role="tab" aria-controls="qtype2" aria-selected="false">Multiple choice: Many answers</a>
                                <a data-id="3" class="nav-link qty-item" id="qtype3-tab" data-toggle="pill" href="#qtype3" role="tab" aria-controls="qtype3" aria-selected="false">Multiple Lines Text Box</a>
                                <a data-id="4" class="nav-link qty-item" id="qtype4-tab" data-toggle="pill" href="#qtype4" role="tab" aria-controls="qtype4" aria-selected="false">Single Line Text Box</a>
                                <a data-id="5" class="nav-link qty-item" id="qtype5-tab" data-toggle="pill" href="#qtype5" role="tab" aria-controls="qtype5" aria-selected="false">Numerical Value</a>
                                <a data-id="6" class="nav-link qty-item" id="qtype6-tab" data-toggle="pill" href="#qtype6" role="tab" aria-controls="qtype6" aria-selected="false">Date</a>
                                <a data-id="7" class="nav-link qty-item" id="qtype7-tab" data-toggle="pill" href="#qtype7" role="tab" aria-controls="qtype7" aria-selected="false">Datetime</a>
                                <a data-id="8" class="nav-link qty-item" id="qtype8-tab" data-toggle="pill" href="#qtype8" role="tab" aria-controls="qtype8" aria-selected="false">Matrix</a>
                            </div>

                            <img src="assets/images/survey/1.png" id="qstion-prev1" class="img-fluid previw-set qstion-prev-item qstion-first" style="">
                            <img src="assets/images/survey/2.png" id="qstion-prev2" class="img-fluid previw-set qstion-prev-item" style="display: none;">
                            <img src="assets/images/survey/3.png" id="qstion-prev3" class="img-fluid previw-set qstion-prev-item" style="display: none;">
                            <img src="assets/images/survey/4.png" id="qstion-prev4" class="img-fluid previw-set qstion-prev-item" style="display: none;">
                            <img src="assets/images/survey/5.png" id="qstion-prev5" class="img-fluid previw-set qstion-prev-item" style="display: none;">
                            <img src="assets/images/survey/6.png" id="qstion-prev6" class="img-fluid previw-set qstion-prev-item" style="display: none;">
                            <img src="assets/images/survey/7.png" id="qstion-prev7" class="img-fluid previw-set qstion-prev-item" style="display: none;">
                            <img src="assets/images/survey/8.png" id="qstion-prev8" class="img-fluid previw-set qstion-prev-item" style="display: none;">

                        </div>
                        <div class="col-md-9 col-12 bg-modal-right">
                            <input type="file" id="getFile" style="display:none" />
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="qtype1" role="tabpanel" aria-labelledby="qtype1-tab">
                                    <div class="qstn-bx dropdown">
                                        <h5>Question</h5>
                                        <div>
                                            <button type="button" class="input-modal-lang2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-paperclip"></i> 
                                         </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item d-flex align-item-center" href="#" onclick="document.getElementById('getFile').click()">From Computer</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">From Cloud</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">A link to a URL</a>
                                            </div>
                                          
                                        </div>
                                    </div>
                                  
                                    <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. What is the basics of HTML"></textarea>
                                    <div class="ans-tab">
                                        <h5>Answer</h5>

                                        <table class="table table-qstn ans-tbl-sm dt-responsive table-bordered nowrap table-padd" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead class="border-class">

                                                <tr class="heading-text">
                                                    <th>Choices</th>
                                                    <th>Image</th>
                                                    <th width="40px"></th>

                                                </tr>
                                            </thead>


                                            <tbody class="body-textcls vertcle-center">
                                                <tr>
                                                    <td colspan="3">
                                                        <a class="addq">
                                                        Add a Line
                                                    </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="inputfile form-control mb-0" name="file" placeholder="Type here">

                                                    </td>
                                                    <td class="dropdown td-overflow">
                                                        <button type="button" class="attach-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <i class="fas fa-paperclip mr-1"></i> <span>Add attachment</span> 
                                                    </button>



                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item d-flex align-item-center" href="#" onclick="document.getElementById('getFile').click()">From Computer</a>
                                                            <a class="dropdown-item d-flex align-item-center" href="#">From Cloud</a>
                                                            <a class="dropdown-item d-flex align-item-center" href="#">A link to a URL</a>
                                                        </div>



                                              
                                                    </td>
                                                    <td class="text-center px-1">
                                                        <i class="bx bx-trash mx-1 " data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" aria-hidden="true"></i>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <h5>Description</h5>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. Guidelines, instructions ... to help attendees answer"></textarea>

                                        <h5>Options</h5>
                                        <hr class="m-0">
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Answers</h5>

                                                <div class="optn-div">
                                                    <h6>Show Comments Field</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                    </div>
                                                </div>



                                            </div>
                                            <div class="col-md-6">
                                                <h5>Layout</h5>

                                                <div class="optn-div">
                                                    <h6>Conditional Display</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Constraints</h5>

                                                <div class="optn-div">
                                                    <h6>Mandatory Answer</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Error Message</h6>
                                                    <div class="d-flex align-items-center plachldr">
                                                        <input type="text" class="form-control" placeholder="This question requires an answer.">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h5>Live Session</h5>

                                                <div class="optn-div">
                                                    <h6>Question Time Limit</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                        <input type="text" class="form-control secnd-frm" placeholder="05"> Seconds
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="qtype2" role="tabpanel" aria-labelledby="qtype2-tab">
                                    <div class="qstn-bx dropdown">
                                        <h5>Question</h5>
                                        <div>
                                            <button type="button" class="input-modal-lang2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-paperclip"></i> 
                                         </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item d-flex align-item-center" href="#" onclick="document.getElementById('getFile').click()">From Computer</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">From Cloud</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">A link to a URL</a>
                                            </div>
                                          
                                        </div>
                                    </div>

                                    <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. What is the basics of HTML"></textarea>
                                    <div class="ans-tab">
                                        <h5>Answer</h5>

                                        <table class="table table-qstn ans-tbl-sm dt-responsive table-bordered nowrap table-padd" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead class="border-class">

                                                <tr class="heading-text">
                                                    <th>Choices</th>
                                                    <th>Image</th>
                                                    <th width="40px"></th>

                                                </tr>
                                            </thead>


                                            <tbody class="body-textcls vertcle-center">
                                                <tr>
                                                    <td colspan="3">
                                                        <a class="addq">
                                                        Add a Line
                                                    </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="inputfile form-control mb-0" name="file" placeholder="Type here">

                                                    </td>
                                                    <td class="dropdown td-overflow">
                                                        <button type="button" class="attach-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <i class="fas fa-paperclip mr-1"></i> <span>Add attachment</span> 
                                                    </button>



                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item d-flex align-item-center" href="#" onclick="document.getElementById('getFile').click()">From Computer</a>
                                                            <a class="dropdown-item d-flex align-item-center" href="#">From Cloud</a>
                                                            <a class="dropdown-item d-flex align-item-center" href="#">A link to a URL</a>
                                                        </div>



                                                    </td>
                                                    <td class="text-center px-1">
                                                        <i class="bx bx-trash mx-1 " data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" aria-hidden="true"></i>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <h5>Description</h5>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. Guidelines, instructions ... to help attendees answer"></textarea>

                                        <h5>Options</h5>
                                        <hr class="m-0">
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Answers</h5>

                                                <div class="optn-div">
                                                    <h6>Show Comments Field</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                    </div>
                                                </div>



                                            </div>
                                            <div class="col-md-6">
                                                <h5>Layout</h5>

                                                <div class="optn-div">
                                                    <h6>Conditional Display</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Constraints</h5>

                                                <div class="optn-div">
                                                    <h6>Mandatory Answer</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Error Message</h6>
                                                    <div class="d-flex align-items-center plachldr">
                                                        <input type="text" class="form-control" placeholder="This question requires an answer.">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h5>Live Session</h5>

                                                <div class="optn-div">
                                                    <h6>Question Time Limit</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="qtype3" role="tabpanel" aria-labelledby="qtype3-tab">
                                    <div class="qstn-bx dropdown">
                                        <h5>Question</h5>
                                        <div>
                                            <button type="button" class="input-modal-lang2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-paperclip"></i> 
                                         </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item d-flex align-item-center" href="#" onclick="document.getElementById('getFile').click()">From Computer</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">From Cloud</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">A link to a URL</a>
                                            </div>
                                          
                                        </div>
                                    </div>

                                    <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. What is the basics of HTML"></textarea>
                                    <div class="ans-tab">
                                        <h5>Description</h5>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. Guidelines, instructions ... to help attendees answer"></textarea>

                                        <h5>Options</h5>
                                        <hr class="m-0">
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Answers</h5>

                                                <div class="optn-div">
                                                    <h6>Placeholder</h6>
                                                    <div class="d-flex align-items-center plachldr">
                                                        <input type="text" class="form-control" placeholder="Help Participants know what to write.">
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="col-md-6">
                                                <h5>Layout</h5>

                                                <div class="optn-div">
                                                    <h6>Conditional Display</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Constraints</h5>

                                                <div class="optn-div">
                                                    <h6>Mandatory Answer</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Error Message</h6>
                                                    <div class="d-flex align-items-center plachldr">
                                                        <input type="text" class="form-control" placeholder="This question requires an answer.">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h5>Live Session</h5>

                                                <div class="optn-div">
                                                    <h6>Question Time Limit</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               
                                </div>
                                <div class="tab-pane fade" id="qtype4" role="tabpanel" aria-labelledby="qtype4-tab">

                                    <div class="qstn-bx dropdown">
                                        <h5>Question</h5>
                                        <div>
                                            <button type="button" class="input-modal-lang2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-paperclip"></i> 
                                         </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item d-flex align-item-center" href="#" onclick="document.getElementById('getFile').click()">From Computer</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">From Cloud</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">A link to a URL</a>
                                            </div>
                                          
                                        </div>
                                    </div>

                                    <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. What is the basics of HTML"></textarea>
                                    <div class="ans-tab">
                                        <h5>Answer</h5>
                                        <hr class="m-0">
                                        <div class="row question-options mt-2">
                                            <div class="col-md-12 ans-optn-check">
                                                <div class="optn-div">
                                                    <h6>Input must be an email</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Save as user email</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Save as user nickname</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <h5>Description</h5>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. Guidelines, instructions ... to help attendees answer"></textarea>

                                        <h5>Options</h5>
                                        <hr class="m-0">
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Answers</h5>

                                                <div class="optn-div">
                                                    <h6>Validate entry</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Min/Max Limits</h6>
                                                    <div class="limit-inpt">
                                                        <div class="form-group d-flex align-items-center">
                                                            <input type="text" class="form-control me-1" placeholder="1"> to
                                                            <input type="text" class="form-control ms-1" placeholder="10">
                                                        </div>



                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Validation Error</h6>
                                                    <div class="d-flex align-items-center plachldr">
                                                        <input type="text" class="form-control" placeholder="Displayed when the answer entered is not valid.">
                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Placeholder</h6>
                                                    <div class="d-flex align-items-center plachldr">
                                                        <input type="text" class="form-control" placeholder="Help Participants know what to write.">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h5>Layout</h5>

                                                <div class="optn-div">
                                                    <h6>Conditional Display</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Constraints</h5>

                                                <div class="optn-div">
                                                    <h6>Mandatory Answer</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Error Message</h6>
                                                    <div class="d-flex align-items-center plachldr">
                                                        <input type="text" class="form-control" placeholder="This question requires an answer.">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h5>Live Session</h5>

                                                <div class="optn-div">
                                                    <h6>Question Time Limit</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="qtype5" role="tabpanel" aria-labelledby="qtype5-tab">
                                    <div class="qstn-bx dropdown">
                                        <h5>Question</h5>
                                        <div>
                                            <button type="button" class="input-modal-lang2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-paperclip"></i> 
                                         </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item d-flex align-item-center" href="#" onclick="document.getElementById('getFile').click()">From Computer</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">From Cloud</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">A link to a URL</a>
                                            </div>
                                          
                                        </div>
                                    </div>

                                    <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. What is the basics of HTML"></textarea>
                                    <div class="ans-tab">


                                        <h5>Description</h5>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. Guidelines, instructions ... to help attendees answer"></textarea>

                                        <h5>Options</h5>
                                        <hr class="m-0">




                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Answers</h5>
                                                <div class="optn-div">
                                                    <h6>Validate entry</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Placeholder</h6>
                                                    <div class="d-flex align-items-center plachldr">
                                                        <input type="text" class="form-control" placeholder="Help Participants know what to write.">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h5>Layout</h5>

                                                <div class="optn-div">
                                                    <h6>Conditional Display</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Constraints</h5>

                                                <div class="optn-div">
                                                    <h6>Mandatory Answer</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-6">
                                                <h5>Live Session</h5>

                                                <div class="optn-div">
                                                    <h6>Question Time Limit</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="qtype6" role="tabpanel" aria-labelledby="qtype6-tab">
                                    <div class="qstn-bx dropdown">
                                        <h5>Question</h5>
                                        <div>
                                            <button type="button" class="input-modal-lang2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-paperclip"></i> 
                                         </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item d-flex align-item-center" href="#" onclick="document.getElementById('getFile').click()">From Computer</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">From Cloud</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">A link to a URL</a>
                                            </div>
                                          
                                        </div>
                                    </div>

                                    <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. What is the basics of HTML"></textarea>
                                    <div class="ans-tab">


                                        <h5>Description</h5>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. Guidelines, instructions ... to help attendees answer"></textarea>

                                        <h5>Options</h5>
                                        <hr class="m-0">




                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Answers</h5>
                                                <div class="optn-div">
                                                    <h6>Validate entry</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Placeholder</h6>
                                                    <div class="d-flex align-items-center plachldr">
                                                        <input type="text" class="form-control" placeholder="Help Participants know what to write.">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h5>Layout</h5>

                                                <div class="optn-div">
                                                    <h6>Conditional Display</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Constraints</h5>

                                                <div class="optn-div">
                                                    <h6>Mandatory Answer</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-6">
                                                <h5>Live Session</h5>

                                                <div class="optn-div">
                                                    <h6>Question Time Limit</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="qtype7" role="tabpanel" aria-labelledby="qtype7-tab">
                                    <div class="qstn-bx dropdown">
                                        <h5>Question</h5>
                                        <div>
                                            <button type="button" class="input-modal-lang2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-paperclip"></i> 
                                         </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item d-flex align-item-center" href="#" onclick="document.getElementById('getFile').click()">From Computer</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">From Cloud</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">A link to a URL</a>
                                            </div>
                                          
                                        </div>
                                    </div>

                                    <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. What is the basics of HTML"></textarea>
                                    <div class="ans-tab">


                                        <h5>Description</h5>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. Guidelines, instructions ... to help attendees answer"></textarea>

                                        <h5>Options</h5>
                                        <hr class="m-0">




                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Answers</h5>
                                                <div class="optn-div">
                                                    <h6>Validate entry</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Placeholder</h6>
                                                    <div class="d-flex align-items-center plachldr">
                                                        <input type="text" class="form-control" placeholder="Help Participants know what to write.">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h5>Layout</h5>

                                                <div class="optn-div">
                                                    <h6>Conditional Display</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Constraints</h5>

                                                <div class="optn-div">
                                                    <h6>Mandatory Answer</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-6">
                                                <h5>Live Session</h5>

                                                <div class="optn-div">
                                                    <h6>Question Time Limit</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="qtype8" role="tabpanel" aria-labelledby="qtype8-tab">
                                    <div class="qstn-bx dropdown">
                                        <h5>Question</h5>
                                        <div>
                                            <button type="button" class="input-modal-lang2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-paperclip"></i> 
                                         </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item d-flex align-item-center" href="#" onclick="document.getElementById('getFile').click()">From Computer</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">From Cloud</a>
                                                <a class="dropdown-item d-flex align-item-center" href="#">A link to a URL</a>
                                            </div>
                                          
                                        </div>
                                    </div>

                                    <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. What is the basics of HTML"></textarea>
                                    <div class="ans-tab">
                                        <h5>Answer</h5>

                                        <table class="table table-qstn dt-responsive table-bordered nowrap table-padd" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead class="border-class">

                                                <tr class="heading-text">
                                                    <th>Choices</th>

                                                    <th width="40px"></th>

                                                </tr>
                                            </thead>


                                            <tbody class="body-textcls vertcle-center">
                                                <tr>
                                                    <td colspan="2">
                                                        <a class="addq">
                                                        Add a Line
                                                    </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="inputfile form-control mb-0" name="file" placeholder="Type here">

                                                    </td>

                                                    <td class="text-center px-1">
                                                        <i class="bx bx-trash mx-1 " data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" aria-hidden="true"></i>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <table class="table table-qstn dt-responsive table-bordered nowrap table-padd" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead class="border-class">

                                                <tr class="heading-text">
                                                    <th>Rows</th>

                                                    <th width="40px"></th>

                                                </tr>
                                            </thead>


                                            <tbody class="body-textcls vertcle-center">
                                                <tr>
                                                    <td colspan="2">
                                                        <a class="addq">
                                                    Add a Line
                                                </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="inputfile form-control mb-0" name="file" placeholder="Type here">

                                                    </td>

                                                    <td class="text-center px-1">
                                                        <i class="bx bx-trash mx-1 " data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" aria-hidden="true"></i>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <h5>Description</h5>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="e.g. Guidelines, instructions ... to help attendees answer"></textarea>

                                        <h5>Options</h5>
                                        <hr class="m-0">
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Answers</h5>

                                                <div class="optn-div">
                                                    <h6>Matrix Type</h6>
                                                    <div class="select-inp select-plchldr">
                                                        <select class="form-control">
                                                            <option value="" selected="">One choice per row</option>
                                                            <option value="">Multiple choices per row</option>
                                                        </select>
                                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Show Comments Field</h6>
                                                    <div class="form-group d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                    </div>
                                                </div>



                                            </div>
                                            <div class="col-md-6">
                                                <h5>Layout</h5>

                                                <div class="optn-div">
                                                    <h6>Conditional Display</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row question-options">
                                            <div class="col-md-6">
                                                <h5>Constraints</h5>

                                                <div class="optn-div">
                                                    <h6>Mandatory Answer</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>
                                                    </div>
                                                </div>
                                                <div class="optn-div">
                                                    <h6>Error Message</h6>
                                                    <div class="d-flex align-items-center plachldr">
                                                        <input type="text" class="form-control" placeholder="This question requires an answer.">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h5>Live Session</h5>

                                                <div class="optn-div">
                                                    <h6>Question Time Limit</h6>
                                                    <div class="d-flex align-items-center">
                                                        <div class="toggle-switch">
                                                            <input id="toggle" class="toggle-input" type="checkbox" checked="">
                                                            <label for="toggle" class="toggle-label">
                                                        </label></div>

                                                        <input type="text" class="form-control secnd-frm" placeholder="05"> Seconds
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
                <div class="modal-footer">            
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <div class="d-flex">
                    <a href="#"><button type="button" class="btn btn-primary br-50 btn-md">Save and Close</button></a>
                    <a href="#"><button type="button" class="btn btn-primary br-50 btn-md ms-1">Save and New</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal common-modal fade" id="export-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-grp">
                                <label class="form-label">Header background color</label>
                                <input type="text" class="form-control colorpicker-default" id="colorpicker-default" value="#50a5f1">
                               
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-grp">
                                <label class="form-label">Header font color</label>
                                <input type="text" class="form-control colorpicker-default" id="colorpicker-default" value="#222222">
                               
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-grp visible-field mb-0">
                                <label class="form-label">Visible Fields</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Name
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                            <label class="form-check-label" for="formCheck2">
                                                Email
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck3">
                                            <label class="form-check-label" for="formCheck3">
                                                Mobile
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck4">
                                            <label class="form-check-label" for="formCheck4">
                                                Company Name
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck5">
                                            <label class="form-check-label" for="formCheck5">
                                                Register Type
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck6">
                                            <label class="form-check-label" for="formCheck6">
                                                Ticket Id
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck7">
                                            <label class="form-check-label" for="formCheck7">
                                                Badge Issue Status
                                            </label>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <a href="#" data-bs-target="#print-export" data-bs-toggle="modal"><button type="button" class="btn btn-primary br-50 btn-md">Export</button></a>
                   
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="print-export" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="col-md-12">
                            <div class="badge-btns1">
                                <img src="assets/images/logo.png" alt="">
                                <button class="btn btn-primary br-50 badge-issue1" data-bs-dismiss="modal">Badge Issued</button>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="modal-footer footer-btns1">
                    <button type="button" class="btn btn-primary br-50 btn-md me-1" data-bs-dismiss="modal">Print</button>
                    <button type="button" class="btn btn-secondary br-50 btn-md me-1" data-bs-dismiss="modal">Preview Badge</button>
                    <button type="button" class="btn btn-outline-secondary badge-not br-50 btn-md me-1" data-bs-dismiss="modal">Badge not Issued</button>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Send mail" class="send-mail"><i class="bx bx-mail-send"></i></a> 
                </div>

            </div>
        </div>
    </div>

    <div id="alert-msg" class="modal fade" tabindex="-1" aria-labelledby="..." aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-confirm modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box red">
                        <i class="mdi mdi-alert"></i>
                    </div>				
                </div>
                <div class="modal-body">
                    <p class="text-center">Are you sure you want to send mail ?</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn yes-btn successful-btn" data-bs-dismiss="modal">Yes</button>
                    <button class="btn cancel-button" data-bs-dismiss="modal">No</button>

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
                    <button class="btn cancel-button"
                        data-bs-dismiss="modal">No</button>

                </div>
            </div>
        </div>
    </div> 

        <script>
            const viewBtn = document.querySelector(".view-modal"),
                popup = document.querySelector(".popup"),
                close = popup.querySelector(".close"),
                field = popup.querySelector(".field"),
                input = field.querySelector("input"),
                copy = field.querySelector("button");

            viewBtn.onclick = () => {
                popup.classList.toggle("show");
            }
            close.onclick = () => {
                viewBtn.click();
            }

            copy.onclick = () => {
                input.select(); //select input value
                if (document.execCommand("copy")) { //if the selected text copy
                    field.classList.add("active");
                    copy.innerText = "Copied";
                    setTimeout(() => {
                        window.getSelection().removeAllRanges(); //remove selection from document
                        field.classList.remove("active");
                        copy.innerText = "Copy";
                    }, 3000);
                }
            }
        </script>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="assets/libs/select2/js/chosen.jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <!-- <script src="assets/js/pages/jquery.slim.min.js"></script> -->
        <script src="assets/js/pages/popper.min.js"></script>
        <script src="assets/js/pages/bootstrap.min.js"></script>
        <script src="assets/libs/multiselect/choices.min.js"></script>
        <script src="assets/libs/select2/js/select2.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="assets/libs/datepicker/datepicker.min.js"></script>
        <script src="assets/js/pages/form-advanced.init.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/js/pages/saas-dashboard.init.js"></script>
        <script src="assets/js/pages/apexcharts.init.js"></script>
        <script src="assets/js/pages/echarts.init.js"></script>
        <script src="assets/js/pages/mdb.min.js"></script>
        <script src="assets/js/summernote-bs4.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/aos.js"></script>

        <script>
            AOS.init();
        </script>

<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Day', 'Total number of Attendees'],
        ['Day 1',  20],
        ['Day 2',  20],
        ['Day 3',  20]
      ]);

      var options = {
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
  </script>

        <script>
            var $radioButtons = $('.radio-check-function input[type="radio"]');
            $radioButtons.click(function() {
                $radioButtons.each(function() {
                    $(this).parent().toggleClass('active', this.checked);
                });
            });
        </script>

        <!-- profile image upload js -->
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imageUpload ").change(function() {
                readURL(this);
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
    $(".drpdwn-menu-btn").click(function () {
        $(this).parent().children(".dropdown-menu").toggleClass("show");
    });
    $(".drpdwn-fg .dropdown-item").click(function () {
        $(this).toggleClass("check");
    });

</script>
<script>
    $(".field-tbl").on('click', '.remove-tr', function () {
        $(this).closest('tr').remove();
    });
</script>


<!-- import select -->
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
<!-- <script>
    $(document).ready(function(){
  $(".limitedNumbChosen").chosen({
		max_selected_options: 1,
    placeholder_text_multiple: "Search here"
	})
	.bind("chosen:maxselected", function (){
		
	})

});
</script> -->
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

        $("#evnt-tab1").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })

        
        $('input[name="Main_Checkbox"]').on("click", function () {
            $('.check-input').prop('checked', this.checked);
        });
    });
</script>
<script>
    $(document).ready(function () {

        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
            maxItemCount: 400,
            searchResultLimit: 5,
            renderChoiceLimit: 5
        });


    });
</script>


<script>
    $(document).ready(function () {
        $(".tbl-qstn tbody").sortable({
            helper: fixHelper,
            update: function (event, ui) {
                // Update your data or perform any other action after drag-and-drop
            }
        }).disableSelection();

        function fixHelper(e, ui) {
            ui.children().each(function () {
                var originalWidth = $(this).width();

                // Set a fixed width for each td element
                $(this).find('td').css({
                    'width': originalWidth + 'px',
                    'max-width': originalWidth + 'px'
                });
            });

            // Set a fixed width for the helper element
            ui.css('width', '100%');

            return ui;
        }
    });
</script>
<script>

    $(document).ready(function(){
       $(".intial-text2").change(function(){
             $( "select option:selected").each(function(){
                 //enter bengal districts
                 if($(this).attr("value")=="text"){
                     $(this).parent().parent().siblings(".colspan-show").addClass('hide');
                     $(this).parent().parent().siblings(".hidefields").removeClass('hide');
                     $(this).parent().parent().siblings(".hidefields").children(".text-fld-show").removeClass('hide');
                 }
                 //enter other states
                 if($(this).attr("value")=="selection"){
                     $(this).parent().parent().siblings(".colspan-show").removeClass('hide');
                     $(this).parent().parent().siblings(".hidefields").addClass('hide');
                     $(this).parent().parent().siblings(".colspan-show").children(".selection-fld").removeClass('hide');
                 }
                 if($(this).attr("value")=="number"){
                    $(this).parent().parent().siblings(".colspan-show").addClass('hide');
                     $(this).parent().parent().siblings(".hidefields").removeClass('hide');
                     $(this).parent().parent().siblings(".hidefields").children(".text-fld-show").addClass('hide');
                 }
                 if($(this).attr("value")=="date"){
                    $(this).parent().parent().siblings(".colspan-show").removeClass('hide');
                     $(this).parent().parent().siblings(".hidefields").addClass('hide');
                     $(this).parent().parent().siblings(".colspan-show").children(".selection-fld").addClass('hide');
                 }
             });
         });  
     }); 

     $(".min-max-yes").click(function() {
        if($(this).is(":checked")) {
            $(this).parent().children(".min-max-values").removeClass('hide');
        }
     });
     $(".min-max-no").click(function() {
        if($(this).is(":checked")) {
            $(this).parent().children(".min-max-values").addClass('hide');
        }
     });

 </script>
 <script>
      //qstion tab hide and show
      $(document).on('click', '.qty-item', function() {
                $('.qstion-prev-item').hide();
                var id = $(this).data('id');
                $('#qstion-prev' + id).show();
                // $('qtype'+id+'-tab').addClass('active');


            })
 </script>

</body>

</html>
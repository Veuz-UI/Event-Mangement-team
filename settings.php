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
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <link href="assets/libs/multiselect/choices.min.css" rel="stylesheet">
    <link href="assets/libs/select2/css/chosen.min.css" rel="stylesheet">
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet">
    <link href="assets/css/form.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/libs/select/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body class="ovrflw body-gray">
     <!-- Multi select box -->
 <style>
    .choices__inner {
        display: inline-block;
        vertical-align: top;
        width: 100%;
        background-color: #fff;
        padding: 0.5px 7.5px 0px;
        border: 1px solid #ebebeb;
        border-radius: 2.5px;
        font-size: 14px;
        min-height: 19px;
    }
    
    .choices {
        position: relative;
        margin-bottom: 0px;
        z-index: 10000;
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
        padding: 3px 9px;
        font-size: 11px;
        font-weight: 500;
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

    <header class="top-header">
        <div class="header-div">
            <a href="published-event.php">
                <div class="backtohome">
                    <i class="bx bx-arrow-back back-arrow"></i>
                </div>
            </a>
            <div class="header-title">
                <h4>Settings</h4>
                <ul>
                    <li><a href="home.php">Home</a> /</li>
                    <li>Settings</li>
                </ul>
            </div>
        </div>
        <div class="header-right-btns">
            <?php
                include 'options-buttons.php';
            ?>
        </div>
    </header>

    <div class="main-content-div">
        <div class="setting-section">
            <div class="settings-sidebar">
                <ul class="nav nav-tabs settings-nav" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#nav1" role="tab" aria-selected="true">
                            <i class="bx bx-user"></i>
                            <span>User Management</span>                          
                        </a>                      
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav2" role="tab" aria-selected="false"
                            tabindex="-1">
                            <i class="bx bx-grid-alt"></i>
                            <span>Role Management</span>
                        </a>
                    </li>
                    <li class="nav-item mega-menu-div" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav3" role="tab" aria-selected="false"
                            tabindex="-1">
                            <i class="bx bx-slider-alt"></i>
                            <span>Configuration</span>
                        </a>
                        <div class="sub-menu">
                            <a href="#">Badge Template</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav4" role="tab" aria-selected="false"
                            tabindex="-1">
                            <i class="bx bx-lock"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                   
                    
                    

                </ul>




            </div>


            <div class="settings-details">
                <div class="tab-content settings-tab">
                    <div class="tab-pane settings-tab-pane active" id="nav1" role="tabpanel">
                        <div class="speaker-header space-user-head user-pad">
                            <div class="speaker-btns">
                                <button type="button" class="btn btn-primary waves-effect waves-light btn-sm br-50 small" data-bs-toggle="modal" data-bs-target="#new-user">New</button>
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
                                        <a class="nav-link active" data-bs-toggle="tab" href="#user-list-tab"
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
                                        <a class="nav-link" data-bs-toggle="tab" href="#user-grid-tab"
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
                            <div class="tab-pane active" id="user-list-tab" role="tabpanel">
                                <div class="tbl-overflow-hide">
                                    <table id="event-table" class="table table-striped table-resizable mb-0">
                                        <thead>
                                            <tr>
                                                <th width="36px" style="padding-right: 4px;"><input class="form-check-input " type="checkbox" name="Main_Checkbox"
                                                id="selectAll"><span class="resize"></span></th>
                                                <th>S/NO<span class="resize"></span></th>
                                                <th>User Image<span class="resize"></span></th>
                                                <th>Name<span class="resize"></span></th>
                                                <th>Username<span class="resize"></span></th>
                                                <th>Phone<span class="resize"></span></th>
                                                <th>Email<span class="resize"></span></th>
                                                <th>User Type<span class="resize"></span></th>
                                                <th><span class="resize"></span></th>
    
                                            </tr>
                                        </thead>
                                        <tbody class="table-content">
                                            <tr>
                                                <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                <td>
                                                    <h6>1</h6><span class="resize"></span>
                                                </td>
                                                <td>
                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle"><span class="resize"></span>
                                                </td>
                                                <td>
                                                    <h6>James Fernandas</h6><span class="resize"></span>
                                                </td>
    
                                                <td>
                                                    <h6>James</h6><span class="resize"></span>
                                                </td>
    
                                                <td>
                                                    <h6>1234567890</h6><span class="resize"></span>
                                                </td>
                                                <td>
                                                    <h6>demo@gmail.com</h6><span class="resize"></span>
                                                </td>
                                                <td>
                                                    <h6>Manager</h6><span class="resize"></span>
                                                </td>
                                                <td class="text-end">
                                                    <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-user">
                                                        <i class="bx bxs-pencil cursor-pntr"></i>
                                                    </button>
                                                    <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                        <i class="bx bx-trash cursor-pntr"></i>
                                                    </button>
                                                    <span class="resize"></span>
                                                </td>
    
                                            </tr>
                                            <tr>
                                                <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                <td>
                                                    <h6>1</h6><span class="resize"></span>
                                                </td>
                                                <td>
                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle"><span class="resize"></span>
                                                </td>
                                                <td>
                                                    <h6>James Fernandas</h6><span class="resize"></span>
                                                </td>
    
                                                <td>
                                                    <h6>James</h6><span class="resize"></span>
                                                </td>
    
                                                <td>
                                                    <h6>1234567890</h6><span class="resize"></span>
                                                </td>
                                                <td>
                                                    <h6>demo@gmail.com</h6><span class="resize"></span>
                                                </td>
                                                <td>
                                                    <h6>Manager</h6><span class="resize"></span>
                                                </td>
                                                <td class="text-end">
                                                    <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-user">
                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                    </button>
                                                    <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                        <i class="bx bx-trash cursor-pntr"></i>
                                                    </button>
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
                            <div class="tab-pane" id="user-grid-tab" role="tabpanel">
                                <div class="tbl-overflow-hide px-3">
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
                    <div class="tab-pane settings-tab-pane" id="nav2" role="tabpanel">
                        <div class="speaker-header space-user-head user-pad">
                            <div class="speaker-btns">
                                <button type="button" class="btn btn-primary waves-effect waves-light btn-sm br-50 small" data-bs-toggle="modal" data-bs-target="#add-role">New
                                                            </button>
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
                                        <a class="nav-link active" data-bs-toggle="tab" href="#role-list-tab"
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
                                        <a class="nav-link" data-bs-toggle="tab" href="#role-grid-tab"
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
                            <div class="tab-pane active" id="role-list-tab" role="tabpanel">
                                <div class="tbl-overflow-hide">
                                    <table id="event-table" class="table table-striped table-resizable mb-0">
                                        <thead>
                                            <tr>
                                                <th width="36px" style="padding-right: 4px;"><input class="form-check-input " type="checkbox" name="Main_Checkbox"
                                                    id="selectAll"><span class="resize"></span></th>
                                                <th>S/NO<span class="resize"></span></th>
                                                <th>Role Name<span class="resize"></span></th>
                                                <th>Description<span class="resize"></span></th>
                                                <th class="text-end"><span class="resize"></span></th>
    
                                            </tr>
                                        </thead>
                                        <tbody class="table-content">
                                            <tr>
                                                <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                <td>
                                                    <h6>1</h6><span class="resize"></span>
                                                </td>                                
                                                <td>
                                                    <h6>Manager</h6><span class="resize"></span>
                                                </td>
    
                                                <td>
                                                    <h6>James</h6><span class="resize"></span>
                                                </td>
                                                <td class="text-end">
                                                    <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-role">
                                                        <i class="bx bxs-pencil cursor-pntr"></i>
                                                    </button>
                                                    <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                        <i class="bx bx-trash cursor-pntr"></i>
                                                    </button>
                                                    <span class="resize"></span>
                                                </td>
    
                                            </tr>
                                            <tr>
                                                <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck2"><span class="resize"></span></td>
                                                <td>
                                                    <h6>1</h6><span class="resize"></span>
                                                </td>                                
                                                <td>
                                                    <h6>Manager</h6><span class="resize"></span>
                                                </td>
    
                                                <td>
                                                    <h6>James</h6><span class="resize"></span>
                                                </td>
                                                <td class="text-end">
                                                    <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-role">
                                                        <i class="bx bxs-pencil cursor-pntr"></i>
                                                    </button>
                                                    <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                        <i class="bx bx-trash cursor-pntr"></i>
                                                    </button>
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
                            <div class="tab-pane" id="role-grid-tab" role="tabpanel">
                                <div class="tbl-overflow-hide px-3">
                                    <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lgg-4 row-cols-xl-6">
                                        <div class="col margin-box-this">
                                            <div class="attendee-box h-100">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-lg-12 data-box">
                                                        <img src="assets/images/users.svg" alt="" class="avatar-sm">
                                                        <div class="data-box-contnt">
                                                            <h2>Manager</h2>
                                                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Maxime mollitia molestiae quas vel sint commod.</h4>
    
                                                        </div>
                                                        <div class="dropdown print-mail-dropdwn">
                                                            <div class="event-settings dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-cog"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#add-attandee"><i
                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-envelope me-2"></i>Send
                                                                    Mail</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i
                                                                        class="fas fa-trash me-2"></i>Delete</a>
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
                                                        <img src="assets/images/users.svg" alt="" class="avatar-sm">
                                                        <div class="data-box-contnt">
                                                            <h2>Manager</h2>
                                                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Maxime mollitia molestiae quas vel sint commod.</h4>
    
                                                        </div>
                                                        <div class="dropdown print-mail-dropdwn">
                                                            <div class="event-settings dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-cog"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#add-attandee"><i
                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-envelope me-2"></i>Send
                                                                    Mail</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i
                                                                        class="fas fa-trash me-2"></i>Delete</a>
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
                                                        <img src="assets/images/users.svg" alt="" class="avatar-sm">
                                                        <div class="data-box-contnt">
                                                            <h2>Manager</h2>
                                                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Maxime mollitia molestiae quas vel sint commod.</h4>
    
                                                        </div>
                                                        <div class="dropdown print-mail-dropdwn">
                                                            <div class="event-settings dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-cog"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#add-attandee"><i
                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-envelope me-2"></i>Send
                                                                    Mail</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i
                                                                        class="fas fa-trash me-2"></i>Delete</a>
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
                                                        <img src="assets/images/users.svg" alt="" class="avatar-sm">
                                                        <div class="data-box-contnt">
                                                            <h2>Manager</h2>
                                                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Maxime mollitia molestiae quas vel sint commod.</h4>
    
                                                        </div>
                                                        <div class="dropdown print-mail-dropdwn">
                                                            <div class="event-settings dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-cog"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#add-attandee"><i
                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-envelope me-2"></i>Send
                                                                    Mail</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i
                                                                        class="fas fa-trash me-2"></i>Delete</a>
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
                                                        <img src="assets/images/users.svg" alt="" class="avatar-sm">
                                                        <div class="data-box-contnt">
                                                            <h2>Manager</h2>
                                                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Maxime mollitia molestiae quas vel sint commod.</h4>
    
                                                        </div>
                                                        <div class="dropdown print-mail-dropdwn">
                                                            <div class="event-settings dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-cog"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#add-attandee"><i
                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-envelope me-2"></i>Send
                                                                    Mail</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i
                                                                        class="fas fa-trash me-2"></i>Delete</a>
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
                                                        <img src="assets/images/users.svg" alt="" class="avatar-sm">
                                                        <div class="data-box-contnt">
                                                            <h2>Manager</h2>
                                                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Maxime mollitia molestiae quas vel sint commod.</h4>
    
                                                        </div>
                                                        <div class="dropdown print-mail-dropdwn">
                                                            <div class="event-settings dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-cog"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#add-attandee"><i
                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-envelope me-2"></i>Send
                                                                    Mail</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i
                                                                        class="fas fa-trash me-2"></i>Delete</a>
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
                                                        <img src="assets/images/users.svg" alt="" class="avatar-sm">
                                                        <div class="data-box-contnt">
                                                            <h2>Manager</h2>
                                                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Maxime mollitia molestiae quas vel sint commod.</h4>
    
                                                        </div>
                                                        <div class="dropdown print-mail-dropdwn">
                                                            <div class="event-settings dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-cog"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#add-attandee"><i
                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-envelope me-2"></i>Send
                                                                    Mail</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i
                                                                        class="fas fa-trash me-2"></i>Delete</a>
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
                                                        <img src="assets/images/users.svg" alt="" class="avatar-sm">
                                                        <div class="data-box-contnt">
                                                            <h2>Manager</h2>
                                                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Maxime mollitia molestiae quas vel sint commod.</h4>
    
                                                        </div>
                                                        <div class="dropdown print-mail-dropdwn">
                                                            <div class="event-settings dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-cog"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#add-attandee"><i
                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-envelope me-2"></i>Send
                                                                    Mail</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i
                                                                        class="fas fa-trash me-2"></i>Delete</a>
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
                                                        <img src="assets/images/users.svg" alt="" class="avatar-sm">
                                                        <div class="data-box-contnt">
                                                            <h2>Manager</h2>
                                                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Maxime mollitia molestiae quas vel sint commod.</h4>
    
                                                        </div>
                                                        <div class="dropdown print-mail-dropdwn">
                                                            <div class="event-settings dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-cog"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#add-attandee"><i
                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-envelope me-2"></i>Send
                                                                    Mail</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i
                                                                        class="fas fa-trash me-2"></i>Delete</a>
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
                                                        <img src="assets/images/users.svg" alt="" class="avatar-sm">
                                                        <div class="data-box-contnt">
                                                            <h2>Manager</h2>
                                                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Maxime mollitia molestiae quas vel sint commod.</h4>
    
                                                        </div>
                                                        <div class="dropdown print-mail-dropdwn">
                                                            <div class="event-settings dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-cog"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#add-attandee"><i
                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-envelope me-2"></i>Send
                                                                    Mail</a>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i
                                                                        class="fas fa-trash me-2"></i>Delete</a>
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
                    <div class="tab-pane settings-tab-pane" id="nav3" role="tabpanel">
                      <div class="configuration-div">
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#conf-tab1"
                                    role="tab">
                                    <span>Language</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#conf-tab2" role="tab">
                                    <span>Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#conf-tab3" role="tab">
                                    <span>Sponsor Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#conf-tab4" role="tab">
                                    <span>Speaker Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#conf-tab5" role="tab">
                                    <span>User Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#conf-tab6" role="tab">
                                    <span>Bank Account</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#conf-tab7" role="tab">
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                        <hr class="nav-bottom-hr" />
                        <div class="tab-content">
                            <div class="tab-pane active pb-0" id="conf-tab1" role="tabpanel">
                                <div class="speaker-header">
                                    <div class="speaker-btns">
                                        <button type="button"
                                            class="btn btn-primary waves-effect waves-light btn-sm  br-50 small"
                                            data-bs-toggle="modal" data-bs-target="#new-language">
                                            Add Language
                                        </button>
                                        <div class="dropdown event-sett">
                                            <div class="event-settings dropdown-toggle"
                                                type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                                <button type="button" style=""
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


                                    </div>
                                </div>
                                <div class="tbl-content">
                                    <div class="tbl-overflow-hide1">
                                        <table id="event-table"
                                                    class="table table-resizable table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="36px" style="padding-right: 4px;"><input class="form-check-input" type="checkbox" name="Main_Checkbox" id="selectAll"><span class="resize"></span></th>
                                                            <th>S/NO<span class="resize"></span></th>
                                                            <th>Language<span class="resize"></span></th>                                                       
                                                            <th><span class="resize"></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                            <td>1</td>
                                                            <td>Hindi</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-language">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck2"><span class="resize"></span></td>
                                                            <td>2</td>
                                                            <td>Arabic</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-language">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck3"><span class="resize"></span></td>
                                                            <td>3</td>
                                                            <td>Tamil</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-language">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
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
                                                <li><a href="#"><i class="bx bx-chevrons-left"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevron-left"></i></a>
                                                </li>                                                      
                                                <li class="active"><a href="#"><span>1</span></a></li>
                                                <li><a href="#"><span>2</span></a></li>                                                  
                                                <li><a href="#"><i class="bx bx-chevron-right"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevrons-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane pb-0" id="conf-tab2" role="tabpanel">
                                <div class="speaker-header">
                                    <div class="speaker-btns">
                                        <button type="button"
                                            class="btn btn-primary waves-effect waves-light btn-sm  br-50 small"
                                            data-bs-toggle="modal" data-bs-target="#add-category">
                                            Add Category
                                        </button>
                                        <div class="dropdown event-sett">
                                            <div class="event-settings dropdown-toggle"
                                                type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                                <button type="button" style=""
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


                                    </div>
                                </div>
                                <div class="tbl-content">
                                    <div class="tbl-overflow-hide1">
                                        <table id="event-table"
                                                    class="table table-resizable table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="36px" style="padding-right: 4px;"><input class="form-check-input" type="checkbox" name="Main_Checkbox" id="selectAll"><span class="resize"></span></th>
                                                            <th>S/NO<span class="resize"></span></th>
                                                            <th>Category<span class="resize"></span></th>                                                       
                                                            <th><span class="resize"></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                            <td>1</td>
                                                            <td>Career</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck2"><span class="resize"></span></td>
                                                            <td>2</td>
                                                            <td>Business</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck3"><span class="resize"></span></td>
                                                            <td>3</td>
                                                            <td>Automotive</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
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
                                                <li><a href="#"><i class="bx bx-chevrons-left"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevron-left"></i></a>
                                                </li>                                                      
                                                <li class="active"><a href="#"><span>1</span></a></li>
                                                <li><a href="#"><span>2</span></a></li>                                                  
                                                <li><a href="#"><i class="bx bx-chevron-right"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevrons-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane pb-0" id="conf-tab3" role="tabpanel">
                                <div class="speaker-header">
                                    <div class="speaker-btns">
                                        <button type="button"
                                            class="btn btn-primary waves-effect waves-light btn-sm  br-50 small"
                                            data-bs-toggle="modal" data-bs-target="#add-sponser-category">
                                            Add Sponser Category
                                        </button>
                                        <div class="dropdown event-sett">
                                            <div class="event-settings dropdown-toggle"
                                                type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                                <button type="button" style=""
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


                                    </div>
                                </div>
                                <div class="tbl-content">
                                    <div class="tbl-overflow-hide1">
                                        <table id="event-table"
                                                    class="table table-resizable table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="36px" style="padding-right: 4px;"><input class="form-check-input" type="checkbox" name="Main_Checkbox" id="selectAll"><span class="resize"></span></th>
                                                            <th>S/NO<span class="resize"></span></th>
                                                            <th>Sponser Category<span class="resize"></span></th>                                                       
                                                            <th><span class="resize"></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                            <td>1</td>
                                                            <td>Diamond</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-sponser-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck2"><span class="resize"></span></td>
                                                            <td>2</td>
                                                            <td>Gold</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-sponser-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck3"><span class="resize"></span></td>
                                                            <td>3</td>
                                                            <td>Silver</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-sponser-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
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
                                                <li><a href="#"><i class="bx bx-chevrons-left"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevron-left"></i></a>
                                                </li>                                                      
                                                <li class="active"><a href="#"><span>1</span></a></li>
                                                <li><a href="#"><span>2</span></a></li>                                                  
                                                <li><a href="#"><i class="bx bx-chevron-right"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevrons-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane pb-0" id="conf-tab4" role="tabpanel">
                                <div class="speaker-header">
                                    <div class="speaker-btns">
                                        <button type="button"
                                            class="btn btn-primary waves-effect waves-light btn-sm  br-50 small"
                                            data-bs-toggle="modal" data-bs-target="#add-speaker-category">
                                            Add Speaker Category
                                        </button>
                                        <div class="dropdown event-sett">
                                            <div class="event-settings dropdown-toggle"
                                                type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                                <button type="button" style=""
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


                                    </div>
                                </div>
                                <div class="tbl-content">
                                    <div class="tbl-overflow-hide1">
                                        <table id="event-table"
                                                    class="table table-resizable table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="36px" style="padding-right: 4px;"><input class="form-check-input" type="checkbox" name="Main_Checkbox" id="selectAll"><span class="resize"></span></th>
                                                            <th>S/NO<span class="resize"></span></th>
                                                            <th>Speaker Category<span class="resize"></span></th>                                                       
                                                            <th><span class="resize"></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                            <td>1</td>
                                                            <td>Other</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-speaker-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck2"><span class="resize"></span></td>
                                                            <td>2</td>
                                                            <td>Guest speaker</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-speaker-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck3"><span class="resize"></span></td>
                                                            <td>3</td>
                                                            <td>Keynote</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-speaker-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
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
                                                <li><a href="#"><i class="bx bx-chevrons-left"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevron-left"></i></a>
                                                </li>                                                      
                                                <li class="active"><a href="#"><span>1</span></a></li>
                                                <li><a href="#"><span>2</span></a></li>                                                  
                                                <li><a href="#"><i class="bx bx-chevron-right"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevrons-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane pb-0" id="conf-tab5" role="tabpanel">
                                <div class="speaker-header">
                                    <div class="speaker-btns">
                                        <button type="button"
                                            class="btn btn-primary waves-effect waves-light btn-sm  br-50 small"
                                            data-bs-toggle="modal" data-bs-target="#add-user-category">
                                            Add User Category
                                        </button>
                                        <div class="dropdown event-sett">
                                            <div class="event-settings dropdown-toggle"
                                                type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                                <button type="button" style=""
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


                                    </div>
                                </div>
                                <div class="tbl-content">
                                    <div class="tbl-overflow-hide1">
                                        <table id="event-table"
                                                    class="table table-resizable table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="36px" style="padding-right: 4px;"><input class="form-check-input" type="checkbox" name="Main_Checkbox" id="selectAll"><span class="resize"></span></th>
                                                            <th>S/NO<span class="resize"></span></th>
                                                            <th>User Category<span class="resize"></span></th>                                                       
                                                            <th><span class="resize"></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                            <td>1</td>
                                                            <td>Speaker</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-user-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck2"><span class="resize"></span></td>
                                                            <td>2</td>
                                                            <td>Student</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-user-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck3"><span class="resize"></span></td>
                                                            <td>3</td>
                                                            <td>Organizer</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-user-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
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
                                                <li><a href="#"><i class="bx bx-chevrons-left"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevron-left"></i></a>
                                                </li>                                                      
                                                <li class="active"><a href="#"><span>1</span></a></li>
                                                <li><a href="#"><span>2</span></a></li>                                                  
                                                <li><a href="#"><i class="bx bx-chevron-right"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevrons-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane pb-0" id="conf-tab6" role="tabpanel">
                                <div class="bank-settings">
                                    <div class="row gx-0">
                                        <div class="col-lg-6">
                                            <div class="card register-detail-card h-100 bank-dtils">
                                                <div class="card-header status-edit-head brdr-btm">
                                                    <div class="accnt-dtils">
                                                        <h5>Bank Account</h5>
                                                    </div>
                                                    <a href="#" id="onclck-edit-btn" class="edit-modl pe-0"><i class="bx bx-edit-alt"></i>Edit</a>
                                                </div>
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-grp">
                                                                        <label class="form-label">Account Name</label>
                                                                        <input id="edit-input" class="form-control" type="text" placeholder="Account Name" value="Bisharu Rahman">                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-grp">
                                                                        <label class="form-label">Email</label>
                                                                        <input id="edit-input" class="form-control" type="text" Value="bisharu@gmail.com" placeholder="Email">                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-grp">
                                                                        <label class="form-label">Account Type</label>
                                                                        <select class="form-control" required="" name="account_type" id="account_type">
                                                                            <option value="empty" selected="">Select account type</option> 
                                                                            <option value="Private Limited">Private Limited</option>
                                                                            <option value="Proprietorship">Proprietorship</option>
                                                                            <option value="Partnership">Partnership</option>
                                                                            <option value="Individual">Individual</option> 
                                                                            <option value="Public Limited">Public Limited</option>
                                                                            <option value="LLP">LLP</option>
                                                                            <option value="Trust">Trust</option>
                                                                            <option value="Society">Society</option>
                                                                            <option value="NGO">NGO</option>
                                                                        </select>                                       
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-grp">
                                                                        <label class="form-label">Branch IFSC Code</label>
                                                                        <input id="edit-input" class="form-control" type="text" Value="SBIN0070188" placeholder="Branch IFSC Code">                                         
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-grp">
                                                                        <label class="form-label">Account Number</label>
                                                                        <input id="edit-input" class="form-control" type="text" Value="670533446798" placeholder="Account Number">                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-grp">
                                                                        <label class="form-label">Re-Enter Account Number</label>
                                                                        <input id="edit-input" class="form-control" type="text" Value="670533446798" placeholder="Re-Enter Account Number">                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-grp">
                                                                        <label class="form-label">Beneficiary Name</label>
                                                                        <input id="edit-input" class="form-control" type="text" Value="Arshad" placeholder="Beneficiary Name">                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-box-bank">
                                                <div class="bank-card">
                                                    <h5>EVENT CARD</h5>
                                                    <img src="assets/images/atm/chip.png" alt="" class="img-fluid">
                                                    <div class="row mt-3">
                                                        <div class="col-lg-6">
                                                            <label for="">Account Name</label>
                                                            <h6>Bishru Rahman</h6>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="">Email</label>
                                                            <h6>bishru@gmail.com</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-lg-6">
                                                            <label for="">IFSC Code</label>
                                                            <h6>0235478</h6>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="">Account Number</label>
                                                            <h6>125478965555</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane pb-0" id="conf-tab7" role="tabpanel">
                                <div class="conf-settings">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="settings-options1 borderd-box-this align-items-center justify-content-between registration-padding py-3 border-1">
                                                        <div class="">
                                                            <h3 class="text-info-settings">Register Auto Confirmation</h3>
                                                        </div>
                                
                                                        <div class="row event-type radio-check-function mt-2 gx-2">
                                                            <div class="col-md-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input register_check" data-type="auto_on" type="radio" name="formRadios" id="formRadios1">
                                                                    <label class="form-check-label" for="formRadios1">
                                                                       Yes
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-check active">
                                                                    <input class="form-check-input register_check" data-type="auto_off" checked="" type="radio" name="formRadios" id="formRadios1">
                                                                    <label class="form-check-label" for="formRadios1">
                                                                       No
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="settings-options1 align-items-center justify-content-between registration-padding borderd-box-this py-3 border-1">
                                                        <div class="">
                                                            <h3 class="text-info-settings">Register User Report Type</h3>
                                                        </div>
                                
                                                        <div class="row event-type radio-check-function mt-2 2 gx-2">
                                                            <div class="col-md-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input register_check" data-type="report_qr" type="radio" name="report_type" id="formRadios1">
                                                                    <label class="form-check-label" for="formRadios1">
                                                                      Qrcode
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-check active">
                                                                    <input class="form-check-input register_check" data-type="report_bar" checked="" type="radio" name="report_type" id="formRadios1">
                                                                    <label class="form-check-label" for="formRadios1">
                                                                      Barcode
                                                                    </label>
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
                    <div class="tab-pane settings-tab-pane" id="nav4" role="tabpanel">
                        <div class="password-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Change Password</h3>
                                    <div class="form-grp">
                                        <label class="form-label">Old Password<span>*</span></label>
                                        <input class="form-control" type="password" placeholder="">
                                    </div>
                                    <div class="form-grp">
                                        <label class="form-label">New Password<span>*</span></label>
                                        <input class="form-control" type="password" placeholder="">
                                    </div>
                                    <div class="form-grp">
                                        <label class="form-label">Confirm new password<span>*</span></label>
                                        <input class="form-control" type="password" placeholder="">
                                    </div>
                                </div>   
                                <div class="col-md-12 d-flex justify-content-center">

                                    <button class="btn btn-primary waves-effect waves-light btn-sm br-50 small mt-3">Update Password</button>
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
    <div class="modal fade" id="add-role" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-grp">
                                    <label class="form-label">Name<span>*</span></label>
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-grp">
                                    <label class="form-label">Description<span>*</span></label>
                                    <textarea class="form-control" type="text" placeholder="Description" ></textarea>
                                </div>
                            </div>                      
                        </div>
                        <div class="table-responsive mb-2 role-modal-table">
                            <table class="table mb-0">
    
                                <thead>
                                    <tr class="table-navs">
                                        <th>Nav Name</th>
                                        <th>Read</th>
                                        <th>Write</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>View All</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Lead</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Account</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Contacts</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Opportunity</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Forecasts</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Quotation</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
    
                                </tbody>
                            </table>
                        </div>


                
                </div>
                <div class="modal-footer">
                  
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary text-uppercase br-50 btn-md"  data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="new-user" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body user-sqr">
               
                        <div class="row">
                            <div class="col-md-10 mt-2">
                                <a style="display: none;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Send mail"><i
                                    class="bx bx-mail-send"></i></a>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Name<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">User Name<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>     
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Phone<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Email<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="img-upload-form">
                                    <img src="assets/images/users/default.png" id="upld-image1">
                                        <i class="bx bxs-pencil edit-user-image" onclick="makeimg(1)" ;></i>
                                    <input type="file" oninput="previewFile(1)" accept="image/*" id="imgfile1" />
                                    <i class="bx bxs-trash delete-user-image" onclick="deleteimg(1)" ;></i>
                                </div>
                            
                            </div>
                                            
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-12">
                                       <label class="form-label">Password Option<span>*</span></label>
                                        <div class="d-flex mb-2">
                                            <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                                <input class="form-check-input" type="radio" name="formRadio6" id="formRadio5">
                                                <label class="form-check-label" for="formRadio5">
                                                       Manual
                                                    </label>
                                            </div>
                                            <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-3">
                                                <input class="form-check-input" type="radio" name="formRadio6" id="formRadio6">
                                                <label class="form-check-label" for="formRadio6">
                                                        Automatic
                                                    </label>
                                            </div>
                                        </div>
                                        <input class="form-control sm-frm-cntrl" type="password" value="111">
                                    </div>
                                   
                                    <!-- <div class="col-md-6">
                                        <div class="d-flex">
                                            <input class="form-check-input" type="checkbox" name="front-desk-access" id="front-desk-access">
                                            <label class="form-label ms-2" for="front-desk-access">Front Desk Access<span>*</span></label>
                                        </div>
                                        <div class="d-flex">
                                            <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                                <input class="form-check-input" type="checkbox" name="formRadio6"
                                                    id="formRadio5">
                                                <label class="form-check-label" for="formRadio6">
                                                    Check In
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-radio-outline form-radio-danger evnt-radio ms-3">
                                                <input class="form-check-input" type="checkbox" name="formRadio6"
                                                    id="formRadio5">
                                                <label class="form-check-label" for="formRadio6">
                                                    Check Out
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                               
                            </div>
                            <div class="col-lg-7">
                                <label class="form-label">Access Event<span>*</span></label>
                                <div class="select-inp">


                                    <select class="form-control" id="choices-multiple-remove-button" placeholder="Select" multiple>
                                            <option value="Author" onclick="filterSelection('Author')">Django Event
                                            </option>
                                            <option value="MSelect">Php Event</option>
                                            <option value="Accordions">UI Event</option>
                                        </select>


                                </div>
                            </div>
                        </div>

                       
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <label class="form-label">Add Permision</label>
                                <div class="ovrflow-sm">
                                <table id="datatable" class="table dt-responsive table-bordered nowrap usertype-tbl mt-2" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <tr>
                                        <th class="th_btnpand" style="width: 40px;">
                                            <div class="appnd_user_btn append_btn" style="cursor: pointer;">+</div>
                                        </th>
                                        <th class="th_user_role">Role</th>
                                        <th class="th_user_decrptn">Description</th>
                                        <th class="th_user_strtdate">Start Date</th>
                                        <th class="th_user_enddate">End Date</th>
                                    </tr>
                                    <tbody class="apenduser">
                                        <tr>
                                            <td class="th_btnpand">
                                                <div class="appnd_user_minus_btn appnd_minus_btn" style="cursor: pointer;">-</div>
                                            </td>
                                            <td class="th_user_role">
                                              <div class="role-select-mdl">
                                                <div class="select-inp">
                                                    <select class="form-control" name="role_id[]">                                                              
                                                        <option value="{{role.id}}">Role-1</option>   
                                                        <option value="{{role.id}}">Role-2</option>                                                                    
                                                    </select>
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#add-role" class="edt-pencl"><i class="bx bxs-pencil"></i></a>
                                              </div>
                                               
                                            </td>
                                            <td class="th_user_decrptn">
                                                <input name="role_description[]" class="form-control">
                                            </td>
                                            <td class="th_user_strtdate">
                                                <div class="input-group date">
                                                    <input  name="role_start_dt[]" value="{{today_date|safe}}" min="{{today_date}}" type="date" class="input form-control" >
                                                </div>
                                            </td>
                                            <td class="th_user_enddate">
                                                <div class="input-group date">
                                                    <input  name="role_end_dt[]" type="date" min="role-1" class="input form-control">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                    <div class="d-flex mt-2">
                                        <input class="form-check-input" type="checkbox" name="front-desk-access" id="front-desk-access">
                                        <label class="form-label ms-2">Agenda Access<span>*</span></label>
                                    </div>
                                  
                                    <div class="ovrflow-sm">
                                    <table id="datatable" class="table dt-responsive table-bordered nowrap usertype-tbl mt-2" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <tr>
                                            <th class="th_btnpand" style="width: 40px;">
                                                <div class="appnd_role_btn append_btn" style="cursor: pointer;">+</div>
                                            </th>
                                            <th class="th_user_role">Agenda</th>
                                            <th class="th_user_decrptn">Check In</th>
                                            <th class="th_user_strtdate">Check Out</th>
                                        </tr>
                                        <tbody class="apendrole">
                                            <tr>
                                                <td class="th_btnpand">
                                                    <div class="appnd_role_minus_btn appnd_minus_btn" style="cursor: pointer;">-</div>
                                                </td>
                                                <td class="th_user_role">
                                                    <input name="" class="form-control" type="text" value="Agenda 1">
                                                </td>
                                                <td class="th_user_decrptn">
                                                    <input class="form-check-input" type="checkbox" name="check-in" id="check-in">
                                                </td>
                                                <td class="th_user_strtdate">
                                                    <input class="form-check-input" type="checkbox" name="check-out" id="check-out">
                                                </td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                        </div>
                </div>
                <div class="modal-footer">
                   
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary text-uppercase br-50 btn-md" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="new-language" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Language</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp mb-0">
                        <label class="form-label">Language Name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary  br-50 btn-md" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-category" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp mb-0">
                        <label class="form-label">Category Name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary  br-50 btn-md" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-sponser-category" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sponsor Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp mb-0">
                        <label class="form-label">Sponsor Category Name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary  br-50 btn-md" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-speaker-category" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Speaker Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp mb-0">
                        <label class="form-label">Speaker Category Name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary  br-50 btn-md" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-user-category" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp mb-0">
                        <label class="form-label">User Category Name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary  br-50 btn-md" data-bs-dismiss="modal">Save</button>
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
    <script src="assets/libs/datepicker/semantic.min.js"></script>
    <script src="assets/libs/select/select2.min.js"></script>
    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/libs/datepicker/datepicker.min.js"></script>
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <script src="assets/libs/ckediter/ckeditor.js"></script>
    <script src="assets/js/pages/bootstrap-taginput.js"></script>
    <script src="assets/js/pages/mdb.min.js"></script>
    <script src="assets/js/summernote-bs4.js"></script>
    <script src="assets/js/app.js"></script>



    <script>
        var $radioButtons = $('.radio-check-function input[type="radio"]');
        $radioButtons.click(function() {
            $radioButtons.each(function() {
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
    $('.selected-num i').on('click', function () {
        $(this).closest(".selected-num").remove();
    });

    $(function () {

        $(".settings-details").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
       
        $('input[name="Main_Checkbox"]').on("click", function () {
            $('.check-input').prop('checked', this.checked);
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
        $("#inputTag").tagsinput('items');
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
      <script type="text/javascript">
        $(document).ready(function() {
            $(".appnd_user_btn").click(function() {
        
                $(".apenduser").append("<tr>\n" +
                    "                                    <td class=\"th_btnpand\">\n" +
                    "                                        <div style=\"cursor: pointer;\" class=\"appnd_user_minus_btn appnd_minus_btn\">-</div>\n" +
                    "                                    </td>\n" +
                    "                                    <td class=\"th_user_role\">\n" +
                                                        '<div class="role-select-mdl">' +
                                                                '<div class="select-inp">' +
                                                                    '<select class="form-control" name="role_id[]"> ' +                                                             
                                                                        '<option value="{{role.id}}">Role-1</option>' +   
                                                                        '<option value="{{role.id}}">Role-2</option>' +                                                                    
                                                                    '</select>' +
                                                                    '<i class="fas fa-chevron-down"></i>' +
                                                                '</div>' +
                                                                '<a href="#" data-bs-toggle="modal" data-bs-target="#add-role" class="edt-pencl"><i class="bx bxs-pencil"></i></a>' +
                                                            '</div>' +
                    "                                    </td>\n" +
                    "                                    <td class=\"th_user_decrptn\">\n" +
                    "                                        <input name=\"role_description[]\" class=\"form-control\">\n" +
                    "                                    </td>\n" +
                    "                                 <td class=\"th_user_strtdate\">\n" +
                    "                                        <div class=\"input-group date\">\n" +
                    "                                            <input name=\"role_start_dt[]\"  min=\"{{today_date}}\" value=\"{{today_date|safe}}\" type=\"date\" class=\"input form-control\" id=\"datetimepicker\"> \n" +
                    "                                        </div>\n" +
                    "                                    </td>\n" +
                    "                                    <td class=\"th_user_enddate\">\n" +
                    "                                        <div class=\"input-group date\">\n" +
                    "                                            <input name=\"role_end_dt[]\" type=\"date\"  min=\"{{today_date}}\"  class=\"input form-control\" id=\"datetimepicker\"> \n" +
                    "                                        </div>\n" +
                    "                                    </td>\n" +
        
                    "                                </tr>");
                $(".appnd_user_minus_btn").click(function() {
                    $(this).parent().parent().remove();
                });
            });
            $(".appnd_role_btn").click(function() {
        
                $(".apendrole").append("<tr>\n" +
                    '<td class="th_btnpand">' +
                        '<div class="appnd_role_minus_btn appnd_minus_btn" style="cursor: pointer;">-</div>' +
                    '</td>' +
                    '<td class="th_user_role">' +
                        '<input name="" class="form-control" type="text" value="Agenda 1">' +
                    '</td>' +
                    '<td class="th_user_decrptn">' +
                        '<input class="form-check-input" type="checkbox" name="check-in" id="check-in">' +
                    '</td>' +
                    '<td class="th_user_strtdate">' +
                        '<input class="form-check-input" type="checkbox" name="check-out" id="check-out">' +
                    '</td>' +

                   "</tr>");
                $(".appnd_role_minus_btn").click(function() {
                    $(this).parent().parent().remove();
                });
            });
        });
        $(".appnd_user_minus_btn").click(function() {
                $(this).parent().parent().remove();
            });
            $(".appnd_role_minus_btn").click(function() {
                    $(this).parent().parent().remove();
                });
    </script>
    <script>
        $('#onclck-edit-btn').click(function(){
        $('#edit-input').focus();
    });
    </script>
</body>

</html>
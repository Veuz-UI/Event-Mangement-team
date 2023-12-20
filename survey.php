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
                                        <li>Register User Details</li>
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
                                <div class="col-md-4">
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
                                            
                                        </div>
                                        <div class="tab-pane" id="evnt-tab2" role="tabpanel">
                                        
                                        </div>
                                        <div class="tab-pane" id="evnt-tab3" role="tabpanel">
                                        
                                        </div>
                                        <div class="tab-pane" id="evnt-tab4" role="tabpanel">
                                          
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



    <div class="modal common-modal fade" id="add-poll" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg" alt=""><span>Create Poll</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body poll-modal">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-grp">
                                <label class="form-label">Poll Title</label>
                                <input class="form-control" type="text" placeholder="Title">
                               
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-grp boothprice-labels">
                                <label class="form-label">Pagination</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-radio-outline form-radio-danger">
                                            <input class="form-check-input" type="radio" name="formRadio" id="formRadio1">
                                            <label class="form-check-label" for="formRadio1">
                                                One page per question
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-radio-outline form-radio-danger">
                                            <input class="form-check-input" type="radio" name="formRadio" id="formRadio2">
                                            <label class="form-check-label" for="formRadio2">
                                                One page with all the questions
                                            </label>
                                        </div>
                                    </div>
                                </div>
                               
                               
                            </div>
                        </div>
                   
                    </div>
                    <div class="question-overflow">
                        <div class="question-bx">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-grp">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label">Question</label>
                                            <a href="#" class="dlt-link"> <i class="bx bxs-trash-alt"></i></a>
        
                                        </div>
                                      
                                        <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Enter the poll question here"></textarea>
                                       
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-grp boothprice-labels">
                                        <label class="form-label">Poll Type</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-check form-radio-outline form-radio-danger">
                                                    <input class="form-check-input polltype" type="radio" name="polltype" id="formRadio3" value="1" checked>
                                                    <label class="form-check-label" for="formRadio3">
                                                        Single Choice
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check form-radio-outline form-radio-danger">
                                                    <input class="form-check-input polltype" type="radio" name="polltype" id="formRadio4" value="2">
                                                    <label class="form-check-label" for="formRadio4">
                                                        Multiple Choice
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check form-radio-outline form-radio-danger">
                                                    <input class="form-check-input polltype" type="radio" name="polltype" id="formRadio5" value="3">
                                                    <label class="form-check-label" for="formRadio5">
                                                        Rating
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                       
                                       
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-grp poll-answers poll-desc" id="polltype1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label">Answers</label>
                                            <a href="#" class="clr-link add-answer-btn"> <i class="fas fa-plus-circle"></i></a>
        
                                        </div>
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" placeholder="Option 1">
                                            <div class="input-group uploadFile1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >
                                                
                                            </div>
                                            <button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>
                                          </div>
                                          <div class="input-group mb-2">
                                            <input type="text" class="form-control" placeholder="Option 2">
                                            <div class="input-group uploadFile1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >
                                                
                                            </div>
                                            <button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>
                                          </div>
                                          <div class="input-group mb-2">
                                            <input type="text" class="form-control" placeholder="Option 3">
                                            <div class="input-group uploadFile1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >
                                                
                                            </div>
                                            <button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>
                                          </div>
                                         
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-grp poll-answers poll-desc" id="polltype2" style="display: none;">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label">Answers</label>
                                            <a href="#" class="clr-link add-answer-btn"> <i class="fas fa-plus-circle"></i></a>
        
                                        </div>
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" placeholder="Option 1">
                                            <div class="input-group uploadFile1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >
                                                
                                            </div>
                                            <button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>
                                          </div>
                                          <div class="input-group mb-2">
                                            <input type="text" class="form-control" placeholder="Option 2">
                                            <div class="input-group uploadFile1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >
                                                
                                            </div>
                                            <button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>
                                          </div>
                                          <div class="input-group mb-2">
                                            <input type="text" class="form-control" placeholder="Option 3">
                                            <div class="input-group uploadFile1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >
                                                
                                            </div>
                                            <button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>
                                          </div>
                                         
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-grp poll-rating poll-desc" id="polltype3" style="display: none;">
                                        <label class="form-label">No of Stars</label>
                                        <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                            <option value="3star">3 Star</option>
                                            <option value="5star" selected>5 Star</option>
                                            <option value="10star">10 Star</option>                          
                                         
                                        </select>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                   <div class="add-answer add-qstn">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="qstn-add"><i class="bx bx-plus-circle"></i> Add Question</a>
                        </div>
                        <div class="col-md-9 poll-tymes">
                            <div class="form-grp me-3">
                                <label class="form-label">Survey Time</label>
                                <input class="form-control" type="text" placeholder="00:00:00" style="width: 90px;">                              
                            </div>
                            <div class="form-grp me-1">
                                <label class="form-label">Voting Time</label>
                                <input class="form-control" type="text" placeholder="00:00:00" style="width: 90px;">                              
                            </div>
                        </div>
                    </div>
                  
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary br-50 btn-md ms-1">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="share-qr" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><span>Share QR</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="field">
                        <i class="url-icon uil uil-link"></i>
                        <input type="text" class="copy-box" readonly value="example.com/share-link">
                        <button class="copy-box-button">Copy</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="attendees-in" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg" alt="" style="width: 22px;"><span>Attendees IN</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Mohammed Shefin</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Amarnath</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Muzafar</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Bisharu</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Nasim P</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Mohammed Arshad</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Anirudh</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="invite-members" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg" alt=""><span>Add Member</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                        <!-- <div class="empty-bx">
                            <img src="assets/images/empty.gif" alt="">
                        </div> -->
                         
                            <div class="tm-member-div">
                                
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/default.png" alt="" class="avatar-md border-1 rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck3">
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck3">
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck3">
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary  br-50 btn-md">Add</button>
                    <button type="button" class="btn btn-light  br-50 btn-md" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-logo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><span>Add Logo</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="uploadArea1" class="upload-area" onclick="importDifferentFile(1)">
                                <div id="dropZoon1" class="upload-area__drop-zoon drop-zoon">
                                    <span class="drop-zoon__icon">
                                        <i class='bx bxs-file-image'></i>
                                    </span>
                                    <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                                    <span id="loadingText1" class="drop-zoon__loading-text">Please Wait</span>
                                    <img src="" alt="Preview Image" id="previewImage1" class="drop-zoon__preview-image"
                                        draggable="false">
                                    <input type="file" id="fileInput1" class="drop-zoon__file-input" accept="image/*">
                                </div>

                                <div id="fileDetails1" class="upload-area__file-details file-details">
                                    <h3 class="file-details__title">Uploaded File</h3>

                                    <div id="uploadedFile1" class="uploaded-file">
                                        <div class="uploaded-file__icon-container">
                                            <i class='bx bxs-file-blank uploaded-file__icon'></i>
                                            <span class="uploaded-file__icon-text"></span>
                                        </div>

                                        <div id="uploadedFileInfo1" class="uploaded-file__info">
                                            <span class="uploaded-file__name">Proejct 1</span>
                                            <span class="uploaded-file__counter">0%</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                  
                    
                </div>
                <div class="modal-footer">
                 
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary br-50 btn-md">Add</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-terms" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><span>Terms and Policies</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-grp term-condition mb-0">
                                <textarea id="summernote" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                  
                    
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-light  br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary  br-50 btn-md">Add</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="event-create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/calendar-modal.svg" alt=""><span>Create your Event</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp">
                        <label class="form-label">Event name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="Enter here">
                    </div>
                    <div class="form-grp">
                        <label class="form-label">Select Language</label>
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
                    <div class="form-grp">
                        <label class="form-label">Event Type</label>
                        <div class="row event-type radio-check-function">
                            <div class="col-md-4">
                                <div class="form-check active">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                    <label class="form-check-label" for="formRadios1">
                                    Location Based
                                </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1">
                                    <label class="form-check-label" for="formRadios1">
                                    Online Event
                                </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1">
                                    <label class="form-check-label" for="formRadios1">
                                    Hybrid Event
                                </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-grp">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Start Date</label>
                                <div class="input-group" id="datepicker2">
                                    <input type="text" class="form-control" placeholder="dd M, yyyy" value="01 Sep, 2023" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                                    <span class="input-group-text"><img src="assets/images/input-cal.svg" alt=""></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Start Time</label>
                                <div class="input-group" id="timepicker-input-group1">
                                    <input id="timepicker" type="text" class="form-control" data-provide="timepicker">
                                    <span class="input-group-text"><img src="assets/images/input-time.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">End Date</label>
                                <div class="input-group" id="datepicker2">
                                    <input type="text" class="form-control" placeholder="dd M, yyyy" value="05 Sep, 2023" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                                    <span class="input-group-text"><img src="assets/images/input-cal.svg" alt=""></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">End Time</label>
                                <div class="input-group" id="timepicker-input-group1">
                                    <input id="timepicker2" type="text" class="form-control" data-provide="timepicker">
                                    <span class="input-group-text"><img src="assets/images/input-time.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a href="conference.php"><button type="button" class="btn btn-primary  br-50 btn-md">Create</button></a>
                    <button type="button" class="btn btn-light  br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal common-modal fade" id="add-attandee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg" alt=""><span>Add Attendee</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" placeholder="Enter Name">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio1">
                                    <label class="form-check-label" for="formRadio1">
                                    Don't clear this field
                                    </label>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="text" placeholder="Enter Email">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio2">
                                    <label class="form-check-label" for="formRadio2">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Mobile No</label>
                                <input class="form-control" type="text" placeholder="Enter mobile number">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio3">
                                    <label class="form-check-label" for="formRadio3">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Comapany Name</label>
                                <input class="form-control" type="text" placeholder="Enter company name">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio4">
                                    <label class="form-check-label" for="formRadio4">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Event</label>


                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Event2</option>
                                    <option value="AK">Event1</option>
                                    <option value="HI">Event2</option>                          
                                    <option value="CA">Event3</option>
                                    <option value="NV">Event4</option>  
                                  </select>
                                  <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5">
                                    <label class="form-check-label" for="formRadio5">
                                    Don't clear this field
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Booked by</label>

                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option value="AK">Navab</option>
                                    <option value="HI">Amar</option>                          
                                    <option value="CA">Nasim</option>
                                    <option value="NV">Bishru</option>  
                                  </select>
                                  <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio6">
                                    <label class="form-check-label" for="formRadio6">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="form-grp">
                                <label class="form-label">Ticket Type</label>

                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option value="AK">Premium</option>
                                    <option value="HI">Gold</option>                          
                                    <option value="CA">Platinium</option>
                                    <option value="NV">Silver</option>  
                                  </select>
                                  <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio7">
                                    <label class="form-check-label" for="formRadio7">
                                    Don't clear this field
                                    </label>
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

    <div class="modal common-modal fade" id="add-registeruser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg" alt=""><span>Add Register User</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" placeholder="Enter Name">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio1">
                                    <label class="form-check-label" for="formRadio1">
                                    Don't clear this field
                                    </label>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="text" placeholder="Enter Email">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio2">
                                    <label class="form-check-label" for="formRadio2">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Mobile No</label>
                                <input class="form-control" type="text" placeholder="Enter mobile number">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio3">
                                    <label class="form-check-label" for="formRadio3">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Comapany Name</label>
                                <input class="form-control" type="text" placeholder="Enter company name">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio4">
                                    <label class="form-check-label" for="formRadio4">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Event</label>


                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Event2</option>
                                    <option value="AK">Event1</option>
                                    <option value="HI">Event2</option>                          
                                    <option value="CA">Event3</option>
                                    <option value="NV">Event4</option>  
                                  </select>
                                  <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5">
                                    <label class="form-check-label" for="formRadio5">
                                    Don't clear this field
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Booked by</label>

                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option value="AK">Navab</option>
                                    <option value="HI">Amar</option>                          
                                    <option value="CA">Nasim</option>
                                    <option value="NV">Bishru</option>  
                                  </select>
                                  <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio6">
                                    <label class="form-check-label" for="formRadio6">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="form-grp">
                                <label class="form-label">Ticket Type</label>

                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option value="AK">Premium</option>
                                    <option value="HI">Gold</option>                          
                                    <option value="CA">Platinium</option>
                                    <option value="NV">Silver</option>  
                                  </select>
                                  <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio7">
                                    <label class="form-check-label" for="formRadio7">
                                    Don't clear this field
                                    </label>
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

    <div class="modal fade" id="add-announcement" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp">
                        <label class="form-label">Title<span>*</span></label>
                        <input class="form-control" type="text" placeholder="">
                    </div>
                   
                    <div class="form-grp mb-0">
                        <label class="form-label">Message<span>*</span></label>
                        <textarea id="formmessage" class="form-control" rows="3" placeholder=""></textarea>
                        <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-2">
                            <input class="form-check-input" type="checkbox" name="announcement1" id="announcement1" autocompleted="">
                            <label class="form-check-label" for="announcement1">
                                Allow Comments
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-light  br-50 btn-md"data-bs-dismiss="modal">Cancel</button>

                    <button class="btn btn-primary  br-50 btn-md" data-bs-dismiss="modal">Save</button>
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

        $("#evnt-tab2").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
        $("#evnt-tab3").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
        $("#evnt-tab5").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
        $("#evnt-tab7").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
        
        $('input[name="Main_Checkbox"]').on("click", function () {
            $('.check-input').prop('checked', this.checked);
        });
    });
</script>
<script>





    $(document).on('click','.poll-answers .input-group .btn', function(){
        $(this).parent().fadeOut(500);
    });
    $(document).on('click','.question-bx .dlt-link', function(){
        $(this).closest('.question-bx').fadeOut(500);
    });
    $(document).on('click','.add-answer-btn', function(){
        newRowAdd =
                '<div class="input-group mb-2"><input type="text" class="form-control" placeholder="Option 1"><div class="input-group uploadFile1"><div class="input-group-append"><span class="input-group-text"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg></span></div><input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" ></div><button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button></div>' ;
 
            $(this).closest('.poll-answers').append(newRowAdd);
    });
     
        $(document).ready(function() {
            $(document).on('click','.polltype', function(){
                $(this).prop("checked", true)
                var txt = $(this).val();
                $(this).closest(".question-bx").find(".poll-desc").hide();
                $(this).closest(".question-bx").find("#polltype" + txt).show();
            });
        });


        var i = 1

        $(".add-qstn .qstn-add").click(function () {

           
            newRowAddqstn =
                '<div class="question-bx">' +
                            '<div class="row">' +
                               '<div class="col-lg-12">' +
                                    '<div class="form-grp">' +
                                        '<div class="d-flex justify-content-between">' +
                                            '<label class="form-label">Question</label>' +
                                            '<a href="#" class="dlt-link"> <i class="bx bxs-trash-alt"></i></a>' +       
                                        '</div>' +
                                      
                                        '<textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Enter the poll question here"></textarea>' +
                                       
                                    '</div>' +
                                '</div>' +
                                '<div class="col-lg-12">' +
                                    '<div class="form-grp boothprice-labels">' +
                                        '<label class="form-label">Poll Type</label>' +
                                        '<div class="row">' +
                                            '<div class="col-md-3">' +
                                                '<div class="form-check form-radio-outline form-radio-danger">' +
                                                    '<input class="form-check-input polltype" type="radio" name="polltype'+i+'" id="formRadio3'+i+'" value="1" checked>' +
                                                    '<label class="form-check-label" for="formRadio3'+i+'">Single Choice</label>' +
                                                '</div>' +
                                            '</div>' +
                                            '<div class="col-md-3">' +
                                                '<div class="form-check form-radio-outline form-radio-danger">' +
                                                    '<input class="form-check-input polltype" type="radio" name="polltype'+i+'" id="formRadio4'+i+'" value="2">' +
                                                    '<label class="form-check-label" for="formRadio4'+i+'">Multiple Choice</label>' +
                                                '</div>' +
                                            '</div>' +
                                            '<div class="col-md-3">' +
                                                '<div class="form-check form-radio-outline form-radio-danger">' +
                                                    '<input class="form-check-input polltype" type="radio" name="polltype'+i+'" id="formRadio5'+i+'" value="3">' +
                                                   '<label class="form-check-label" for="formRadio5'+i+'">Rating</label>' +
                                                '</div>' +
                                            '</div>' +
                                       ' </div>' +
                                       
                                       
                                    '</div>' +
                                '</div>' +
                                '<div class="col-lg-12">' +
                                    '<div class="form-grp poll-answers poll-desc" id="polltype1">' +
                                        '<div class="d-flex justify-content-between">' +
                                            '<label class="form-label">Answers</label>' +
                                            '<a href="#" class="clr-link add-answer-btn"> <i class="fas fa-plus-circle"></i></a>' +
        
                                        '</div>' +
                                        '<div class="input-group mb-2">' +
                                            '<input type="text" class="form-control" placeholder="Option 1">' +
                                            '<div class="input-group uploadFile1">' +
                                                '<div class="input-group-append">' +
                                                    '<span class="input-group-text"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg></span>' +
                                                '</div>' +
                                                '<input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >' +
                                                
                                            '</div>' +                                    
                                            '<button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>' +
                                          '</div>' +
                                          '<div class="input-group mb-2">' +
                                            '<input type="text" class="form-control" placeholder="Option 2">' +
                                            '<div class="input-group uploadFile1">' +
                                                '<div class="input-group-append">' +
                                                    '<span class="input-group-text"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg></span>' +
                                                '</div>' +
                                                '<input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >' +
                                                
                                            '</div>' +
                                            '<button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>' +
                                          '</div>' +
                                          '<div class="input-group mb-2">' +
                                            '<input type="text" class="form-control" placeholder="Option 3">' +
                                            '<div class="input-group uploadFile1">' +
                                                '<div class="input-group-append">' +
                                                    '<span class="input-group-text"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg></span>' +
                                                '</div>' +
                                                '<input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >' +
                                                
                                            '</div>' +
                                            '<button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>' +
                                          '</div>' +
                                         
                                    '</div>' +
                                '</div>' +
                                '<div class="col-lg-12">' +
                                    '<div class="form-grp poll-answers poll-desc" id="polltype2" style="display: none;">' +
                                       ' <div class="d-flex justify-content-between">' +
                                            '<label class="form-label">Answers</label>' +
                                            '<a href="#" class="clr-link add-answer-btn"> <i class="fas fa-plus-circle"></i></a>' +
        
                                        '</div>' +
                                        '<div class="input-group mb-2">' +
                                            '<input type="text" class="form-control" placeholder="Option 1">' +
                                            '<div class="input-group uploadFile1">' +
                                                '<div class="input-group-append">' +
                                                    '<span class="input-group-text"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg></span>' +
                                                '</div>' +
                                                '<input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >' +
                                                
                                            '</div>' +
                                           ' <button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>' +
                                          '</div>' +
                                          '<div class="input-group mb-2">' +
                                            '<input type="text" class="form-control" placeholder="Option 2">' +
                                            '<div class="input-group uploadFile1">' +
                                                '<div class="input-group-append">' +
                                                    '<span class="input-group-text"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg></span>' +
                                                '</div>' +
                                                '<input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >' +
                                                
                                            '</div>' +
                                           ' <button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>' +
                                          '</div>' +
                                          '<div class="input-group mb-2">' +
                                            '<input type="text" class="form-control" placeholder="Option 3">' +
                                            '<div class="input-group uploadFile1">' +
                                                '<div class="input-group-append">' +
                                                    '<span class="input-group-text"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.9077 6.85704L7.23439 12.2077C6.53936 12.8632 5.59671 13.2314 4.6138 13.2314C3.63088 13.2314 2.68823 12.8632 1.9932 12.2077C1.29818 11.5522 0.907715 10.6632 0.907715 9.73615C0.907715 8.80914 1.29818 7.9201 1.9932 7.2646L7.66653 1.91394C8.12988 1.47695 8.75831 1.23145 9.41359 1.23145C10.0689 1.23145 10.6973 1.47695 11.1607 1.91394C11.624 2.35094 11.8843 2.94364 11.8843 3.56164C11.8843 4.17965 11.624 4.77235 11.1607 5.20934L5.48115 10.56C5.24948 10.7785 4.93526 10.9012 4.60762 10.9012C4.27998 10.9012 3.96577 10.7785 3.73409 10.56C3.50242 10.3415 3.37226 10.0452 3.37226 9.73615C3.37226 9.42714 3.50242 9.1308 3.73409 8.9123L8.97528 3.97502" stroke="#495057" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg></span>' +
                                                '</div>' +
                                                '<input type="file" accept="image/*,.pdf,.txt,.doc,.docx," class="inputfile form-control mb-0" >' +
                                                
                                            '</div>' +
                                            '<button class="btn btn-secondary" type="button" id="inputGroupFileAddon04"><i class="bx bx-x"></i></button>' +
                                         ' </div>' +
                                         
                                   ' </div>' +
                                '</div>' +
                                '<div class="col-lg-3">' +
                                   ' <div class="form-grp poll-rating poll-desc" id="polltype3" style="display: none;">' +
                                       ' <label class="form-label">No of Stars</label>' +
                                       '<select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">' +
                                           '<option value="3star">3 Star</option>' +
                                            '<option value="5star" selected>5 Star</option>' +
                                            '<option value="10star">10 Star</option>' +                        
                                         
                                        '</select>' +
                                       
                                         
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' ;
            $('.question-overflow').append(newRowAddqstn);

            i = i + 1
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

</body>

</html>
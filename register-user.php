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
    <link href="assets/libs/calendar/fullcalendar.css" rel="stylesheet">
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
                    <h4>Register User Details</h4>
                    <ul>
                        <li><a href="home.php">Home</a> /</li>
                        <li>Register User Details</li>
                    </ul>
                </div>
            </div>
            <div class="header-right-btns">
                <?php
                include 'options-buttons.php';
            ?>
            </div>
        </header>
        <div class="container-fluid register-details">
            <div class="row gx-3 h-100">
                <div class="col-md-5 h-100">
                    <div class="card register-detail-card h-100">
                        <div class="card-header status-edit-head">
                            <div class="status-tags-div">
                                <div class="status-tags">
                                    <div class="status-tag prev">
                                        <h6>Pending</h6>
                                    </div>
                                    <div class="status-tag active">
                                        <h6>Confirm</h6>
                                    </div>
                                    <div class="status-tag">
                                        <h6>Mark as Attended</h6>
                                    </div>
                                  
                                </div>
                            </div>
                            <a href="#" class="edit-modl" data-bs-toggle="modal" data-bs-target="#register-user"><i class="bx bx-edit-alt"></i>Edit</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <label class="form-label">Name</label>
                                                <input class="form-control" type="text" Value="Bisharu Rahman" disabled>                                        
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" type="text" Value="bisharu@gmail.com" disabled>                                        
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label class="form-label">Mobile No</label>
                                                <input class="form-control" type="text" Value="7766885522" disabled>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="img-upload-form">
                                        <img src="assets/images/users/avatar-7.jpg" id="upld-image1">
                                        <i class="bx bxs-pencil" onclick="makeimg(1)" ;></i>
                                        <input type="file" oninput="previewFile(1)" accept="image/*"
                                            id="imgfile1" />
                                      
                                    </div>
                                </div>
                           
                                <div class="col-md-12 px-0">
                                    <hr class="dividr">
                                </div>
                                  
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <label class="form-label">Address</label>
                                        <textarea name="" id="" cols="30" rows="" class="form-control" disabled style="max-height: 20px;">115  Anandraj Indl Estate Off L B S Marg Bhandup , Mumbai,Kozhikode,400078,India</textarea>                                      
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label class="form-label">Department</label>
                                                <input class="form-control" type="text" Value="Department" disabled>                                        
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label class="form-label">City</label>
                                                <input class="form-control" type="text" Value="Kozhikode" disabled>                                        
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label class="form-label">Country</label>
                                                <input class="form-control" type="text" Value="India" disabled>                                        
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label class="form-label">Pincode</label>
                                                <input class="form-control" type="text" Value="673007" disabled>                                        
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                    
                                <div class="col-md-12 px-0">
                                    <hr class="dividr">
                                </div>
                                <div class="col-md-12">
                                    <div class="form-grp linear-div">
                                        <label class="form-label">Ticket Type</label>
                                        :<span class="sponser-type gold">Gold</span>                                
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-grp linear-div">
                                                <label class="form-label">Badge Issued Status</label>
                                                :<div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio1" checked disabled>
                                                    <label class="form-check-label" for="formRadio1">
                                                    Yes
                                                    </label>
                                                </div>                                 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-grp linear-div">
                                                <label class="form-label date-linear">Date</label>
                                                :<input class="form-control ms-1" type="text" Value="12-07-2023" disabled>                                 
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card register-detail-card">
                        <div class="card-header">
                            <h3>Event Entrance History</h3>
                        </div>
                        <div class="card-body">
                            <div class="poll-table user-detail-tbl">
                                <div class="poll-title">
                                    <div class="tbl-head1">
                                        Date
                                    </div>
                                    <div class="tbl-head2">
                                        Check In
                                    </div>
                                    <div class="tbl-head3">
                                        Check In Time
                                    </div>
                                    <div class="tbl-head4">
                                        Check Out
                                    </div>
                                    <div class="tbl-head5">
                                        Check Out Time
                                    </div>
                                    <div class="tbl-head6">
                                        Duration
                                    </div>
                                </div>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-dark">
                                      <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                          <div class="panel-collapse-title">
                                            <div class="tbl-td-content1">
                                                <a class="pnl-collapse collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    <i class="fas fa-caret-up arrow-up"></i>
                                                  </a> 02-11-2023
                                            </div>
                                            <div class="tbl-td-content2">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content3">
                                                10:30 AM
                                            </div>
                                            <div class="tbl-td-content4">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content5">
                                                10:45 AM
                                            </div>
                                            <div class="tbl-td-content6">
                                                15 Min
                                            </div>
                                          </div>
                                          
                                        </h4>
                                      </div>
                                      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    10:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    10:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    15 Min
                                                </div>
                                            </div>
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    11:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    12:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    1 Hr 15 Min
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="panel panel-dark">
                                      <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                         <div class="panel-collapse-title">
                                            <div class="tbl-td-content1">
                                                <a class="pnl-collapse collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="fas fa-caret-up arrow-up"></i>
                                                  </a> 03-11-2023
                                            </div>
                                           

                                            <div class="tbl-td-content2">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content3">
                                                10:30 AM
                                            </div>
                                            <div class="tbl-td-content4">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content5">
                                                10:45 AM
                                            </div>
                                            <div class="tbl-td-content6">
                                                15 Min
                                            </div>
                                         </div>
                                       
                                        </h4>
                                      </div>
                                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    10:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    10:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    15 Min
                                                </div>
                                            </div>
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    11:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    12:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    1 Hr 15 Min
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="card register-detail-card">
                        <div class="card-header">
                            <h3>Hall Check in and Check out History</h3>
                        </div>
                        <div class="card-body">
                            <div class="poll-table user-detail-tbl">
                                <div class="poll-title">
                                    <div class="tbl-head1">
                                        Date
                                    </div>
                                    <div class="tbl-head2">
                                        Check In
                                    </div>
                                    <div class="tbl-head3">
                                        Check In Time
                                    </div>
                                    <div class="tbl-head4">
                                        Check Out
                                    </div>
                                    <div class="tbl-head5">
                                        Check Out Time
                                    </div>
                                    <div class="tbl-head6">
                                        Duration
                                    </div>
                                </div>
                                <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-dark">
                                      <div class="panel-heading" role="tab" id="headingOne1">
                                        <h4 class="panel-title">
                                          <div class="panel-collapse-title">
                                            <div class="tbl-td-content1">
                                                <a class="pnl-collapse collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                                    <i class="fas fa-caret-up arrow-up"></i>
                                                  </a> 02-11-2023
                                            </div>
                                            <div class="tbl-td-content2">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content3">
                                                10:30 AM
                                            </div>
                                            <div class="tbl-td-content4">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content5">
                                                10:45 AM
                                            </div>
                                            <div class="tbl-td-content6">
                                                15 Min
                                            </div>
                                          </div>
                                          
                                        </h4>
                                      </div>
                                      <div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="panel-body">
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    10:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    10:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    15 Min
                                                </div>
                                            </div>
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    11:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    12:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    1 Hr 15 Min
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="panel panel-dark">
                                      <div class="panel-heading" role="tab" id="headingTwo1">
                                        <h4 class="panel-title">
                                         <div class="panel-collapse-title">
                                            <div class="tbl-td-content1">
                                                <a class="pnl-collapse collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                                    <i class="fas fa-caret-up arrow-up"></i>
                                                  </a> 03-11-2023
                                            </div>
                                           

                                            <div class="tbl-td-content2">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content3">
                                                10:30 AM
                                            </div>
                                            <div class="tbl-td-content4">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content5">
                                                10:45 AM
                                            </div>
                                            <div class="tbl-td-content6">
                                                15 Min
                                            </div>
                                         </div>
                                       
                                        </h4>
                                      </div>
                                      <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo1">
                                        <div class="panel-body">
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    10:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    10:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    15 Min
                                                </div>
                                            </div>
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    11:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    12:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    1 Hr 15 Min
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="card register-detail-card">
                        <div class="card-header">
                            <h3>Agenda Check in and Check out History</h3>
                        </div>
                        <div class="card-body">
                            <div class="poll-table user-detail-tbl">
                                <div class="poll-title">
                                    <div class="tbl-head1">
                                        Date
                                    </div>
                                    <div class="tbl-head2">
                                        Check In
                                    </div>
                                    <div class="tbl-head3">
                                        Check In Time
                                    </div>
                                    <div class="tbl-head4">
                                        Check Out
                                    </div>
                                    <div class="tbl-head5">
                                        Check Out Time
                                    </div>
                                    <div class="tbl-head6">
                                        Duration
                                    </div>
                                </div>
                                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-dark">
                                      <div class="panel-heading" role="tab" id="headingOne2">
                                        <h4 class="panel-title">
                                          <div class="panel-collapse-title">
                                            <div class="tbl-td-content1">
                                                <a class="pnl-collapse collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                                    <i class="fas fa-caret-up arrow-up"></i>
                                                  </a> 02-11-2023
                                            </div>
                                            <div class="tbl-td-content2">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content3">
                                                10:30 AM
                                            </div>
                                            <div class="tbl-td-content4">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content5">
                                                10:45 AM
                                            </div>
                                            <div class="tbl-td-content6">
                                                15 Min
                                            </div>
                                          </div>
                                          
                                        </h4>
                                      </div>
                                      <div id="collapseOne2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne2">
                                        <div class="panel-body">
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    10:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    10:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    15 Min
                                                </div>
                                            </div>
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    11:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    12:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    1 Hr 15 Min
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="panel panel-dark">
                                      <div class="panel-heading" role="tab" id="headingTwo2">
                                        <h4 class="panel-title">
                                         <div class="panel-collapse-title">
                                            <div class="tbl-td-content1">
                                                <a class="pnl-collapse collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                    <i class="fas fa-caret-up arrow-up"></i>
                                                  </a> 03-11-2023
                                            </div>
                                           

                                            <div class="tbl-td-content2">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content3">
                                                10:30 AM
                                            </div>
                                            <div class="tbl-td-content4">
                                                <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                    <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                </div>
                                            </div>
                                            <div class="tbl-td-content5">
                                                10:45 AM
                                            </div>
                                            <div class="tbl-td-content6">
                                                15 Min
                                            </div>
                                         </div>
                                       
                                        </h4>
                                      </div>
                                      <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                        <div class="panel-body">
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    10:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    10:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    15 Min
                                                </div>
                                            </div>
                                            <div class="user-tbl-row">
                                                <div class="tbl-td-content1">
                                               
                                                </div>
                                                <div class="tbl-td-content2">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin1" id="checkin1" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content3">
                                                    11:30 AM
                                                </div>
                                                <div class="tbl-td-content4">
                                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-1">
                                                        <input class="form-check-input" type="checkbox" name="checkin2" id="checkin2" checked="" disabled="">                                                
                                                    </div>
                                                </div>
                                                <div class="tbl-td-content5">
                                                    12:45 AM
                                                </div>
                                                <div class="tbl-td-content6">
                                                    1 Hr 15 Min
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



    <div class="modal fade" id="register-user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg"
                        alt=""><span>Register User Details</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-grp">
                            <label class="form-label">Name<span>*</span></label>
                            <input class="form-control" type="text" placeholder="" Value="Bisharu Rahman">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-grp">
                            <label class="form-label">Email<span>*</span></label>
                            <input class="form-control" type="text" placeholder="" Value="bisharu@gmail.com">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-grp">
                            <label class="form-label">Mobile No<span>*</span></label>
                            <input class="form-control" type="text" placeholder=""  Value="7766885522">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-grp">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" id="" cols="30" rows="3">115  Anandraj Indl Estate Off L B S Marg Bhandup , Mumbai,Kozhikode,400078,India</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-grp">
                            <label class="form-label">Department</label>
                            <input class="form-control" type="text" placeholder="" value="Department">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-grp">
                            <label class="form-label">City</label>
                            <div class="select-inp">
                                <select class="form-control">

                                    <option value="AK" selected>Kozhikode</option>
                                    <option value="HI">Kannur</option>
                                    <option value="CA">malapuam</option>
                            
                                </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-grp">
                            <label class="form-label">Country</label>
                            <div class="select-inp">
                                <select class="form-control">

                                    <option value="AK" selected>India</option>
                                    <option value="HI">China</option>
                                    <option value="CA">Pakistan</option>
                            
                                </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-grp">
                            <label class="form-label">Pincode</label>
                            <input class="form-control" type="text" placeholder="" value="673007">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-grp">
                            <label class="form-label">Ticket Type</label>
                            <div class="select-inp">
                                <select class="form-control">

                                    <option value="AK" selected>Gold</option>
                                    <option value="HI">Platinum</option>
                                    <option value="CA">Silver</option>
                            
                                </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-grp">
                            <label class="form-label">Badge Issued Status</label>
                        <div class="d-flex mt-1">
                            <div class="form-check form-radio-outline form-radio-danger price-radio me-3">
                                <input class="form-check-input" type="radio" name="badgerad1" id="badgerad1" checked="" autocompleted="">
                                <label class="form-check-label" for="badgerad1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check form-radio-outline form-radio-danger price-radio">
                                <input class="form-check-input" type="radio" name="badgerad1" id="badgerad2">
                                <label class="form-check-label" for="badgerad2">
                                    No
                                </label>
                            </div>
                        </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-grp mb-0">
                            <label class="form-label">Date</label>
                            <div class="ui calendar datestart">
                                <div class="ui input left icon">
                                    <i class="far fa-calendar icon"></i>
                                    <input type="text" placeholder="Date" value="July 12, 2023">
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary br-50 btn-md">Save</button>

            </div>
        </div>
    </div>
</div>


    <!-- JAVASCRIPT -->
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
    <script src="assets/libs/calendar/jquery-ui.min.js"></script>
    <script src="assets/libs/calendar/moment.min.js"></script>
    <script src="assets/libs/calendar/fullcalendar.min.js"></script>
    <script src="assets/libs/calendar/jquery.fullcalendar.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
        AOS.init();
    </script>


            <!-- img-upload form -->
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
    $('.datestart').calendar({
        type: 'date',
        endCalendar: $('.dateend')
    });
    $('.dateend').calendar({
        type: 'date',
        startCalendar: $('.datestart')
    });
</script>
</body>

</html>
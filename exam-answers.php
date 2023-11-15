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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <link href="assets/libs/multiselect/choices.min.css" rel="stylesheet">
    <link href="assets/css/aos.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="ovrflw">
    
    <?php include 'loader.php';?>

    <div id="layout-wrapper">



        <header class="top-header">
            <div class="header-div">
                <a href="participation.php">
                    <div class="backtohome">
                        <i class="bx bx-arrow-back back-arrow"></i>
                    </div>
                </a>
                <div class="header-title">
                    <h4>Exam Answers</h4>
                    <ul>
                        <li><a href="home.php">Home</a> /</li>
                        <li>Exam Answers</li>
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

            <style>
                           .img-exam-icon {
                    width: 70px;
                    margin-right: 20px;
                }
                
                .data-text p {
                    color: #666;
                    font-size: 20px;
                    margin-bottom: 0px;
                    margin-top: 0px;
                }
                
                .data-text h3 {
                    color: #131313;
                    font-size: 30px;
                    margin-bottom: 0px;
                    font-weight: 600;
                    margin-top: 2px;
                }
                
                .line-of-exame {
                    border-color: #EEEDF2;
                }
                
                .section-pad {
                    margin-top: 40px;
                    margin-bottom: 50px;
                }
                
                .exam-result-box {
                    background-color: #F5F9FC;
                    min-height: 200px;
                    margin-top: 20px;
                }
                
                .content-bg-exam {
                    background-color: #fff;
                    min-height: 0px;
                    width: 100%;
                    min-height: 100%;
                    padding: 5px 0px 70px;
                    position: absolute;
                }
                
                .heading-of-exam {
                    font-size: 25px;
                    font-weight: 600;
                    margin-top: 20px;
                    margin-bottom: 0px;
                }
                
                .question-box {
                    width: 100%;
                    min-height: 57px;
                    border-bottom: 1px solid #ebebeb;
                }
                
                .mark-box {
                    width: 20%;
                    min-height: 80px;
                    border-bottom: 1px solid #ebebeb;
                    border-left: 1px solid #ebebeb;
                }
                
                .question-box p {
                    color: #333;
                    font-size: 14px;
                    margin-bottom: 0px;
                    padding-left: 20px;
                    font-weight: 500;
                    line-height: 23px;
                }
                
                .mark-box h3 {
                    font-size: 30px;
                    font-weight: 700;
                    text-align: center;
                    margin-bottom: 0px;
                    margin-top: 0px;
                }
                
                .mark-box p {
                    font-size: 15px;
                    color: #FF6400;
                    text-align: center;
                    margin-top: 0px;
                    font-weight: 500;
                    margin-bottom: 0px;
                }
                
                .answer-bg {
                    background-color: #EAF0F5;
                    width: 100%;
                    min-height: 33px;
                    padding: 0px 15px;
                    margin-top: 7px;
                }
                
                .answer-bg img {
                    width: 50%;
                    height: 116px;
                    object-fit: cover;
                    object-position: center;
                    display: block;
                    margin-right: auto;
                    margin-left: auto;
                    padding-top: 15px;
                    padding-bottom: 15px;
                }
                
                .answer-bg p {
                    color: #333;
                    font-size: 14px;
                    margin-bottom: 0px;
                }
                
                .result-section {
                    padding: 20px 15px 15px;
    height: 209px;
    overflow-y: auto;
                }
                
                .count-text {
                    text-align: center;
                    padding-top: 5px;
                    font-size: 15px;
                    font-weight: 600;
                    margin-bottom: 0px;
                }
                
                .active-success {
                    background-color: #51CD8F;
                }
                
                .active-success p {
                    color: #fff;
                }
                
                .active-danger {
                    background-color: #E4857E;
                }
                
                .active-danger p {
                    color: #fff;
                }
                
                .img-text {
                    padding-bottom: 10px;
                    margin-top: 0px;
                }
                
                .certificate-btn {
                    color: #fff;
                    padding: 7px 20px !important;
                    background-color: #FF6400;
                    box-shadow: none;
                    border: 1px solid transparent;
                    margin-right: 4px;
                    font-weight: 600;
                    font-size: 13px;
                    letter-spacing: -0.2px;
                    border-radius: 20px;
                    float: right;
                    margin-top: 23px;
                }
                
                .matrix-tab td h6 {
                    width: 25px;
                    height: 25px;
                    background: #351A5C;
                    border-radius: 3px;
                    color: white;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin: 10px 0px 10px 10px;
                }
                
                .matrix-tab .container_radio {
                    border: 0px;
                    width: 100%;
                }
                
                .matrix-tab .container_radio.version_2 .checkmark {
                    left: 50%;
                }
                
                .matrix-tab th {
                    padding: 10px;
                    background-color: #f8f9fa;
                }
                
                .matrix-tab thead td,
                .matrix-tab thead th {
                    border-bottom-width: 1px !important;
                }
                
                .matrix-tab .container_radio.version_2.active,
                .matrix-tab .container_radio.version_2:hover {
                    border: 0px !important;
                }
                
                .container_radio.version_2.active,
                .container_radio.version_2:hover,
                .container_check.version_2.active,
                .container_check.version_2:hover {
                    border: 1px solid #351A5C;
                    -moz-transition: all 0.8s ease;
                    -o-transition: all 0.8s ease;
                    -webkit-transition: all 0.8s ease;
                    -ms-transition: all 0.8s ease;
                    transition: all 0.8s ease;
                }
                
                .container_radio.version_2 {
                    padding: 13px 15px 13px 45px;
                    background-color: #fff;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    -ms-border-radius: 3px;
                    border-radius: 3px;
                    /* border: 1px solid #ebebeb; */
                    min-height: 30px;
                    font-weight: 400;
                }
                
                .container_radio {
                    display: block;
                    position: relative;
                    font-size: 14px;
                    font-size: 0.875rem;
                    padding-left: 30px;
                    line-height: 1.3;
                    margin-bottom: 10px;
                    cursor: pointer;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }
                
                .container_radio input {
                    position: absolute;
                    opacity: 0;
                }
                
                .container_radio.version_2 input:checked~.checkmark {
                    border: 1px solid transparent;
                }
                
                .container_radio.version_2 .checkmark {
                    position: absolute;
                    top: 10px;
                    left: 10px;
                    height: 24px;
                    width: 24px;
                    border: 1px px solid #ddd;
                    border-radius: 50%;
                }
                
                .container_radio.version_2 input:checked~.checkmark:before {
                    opacity: 1;
                }
                
                .container_radio.version_2 .checkmark:before {
                    display: block;
                    content: "";
                    position: absolute;
                    opacity: 0;
                    -moz-transition: all 0.3s ease-in-out;
                    -o-transition: all 0.3s ease-in-out;
                    -webkit-transition: all 0.3s ease-in-out;
                    -ms-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                    left: 9px;
                    top: 5px;
                    width: 5px;
                    height: 10px;
                    border: solid white;
                    z-index: 999;
                    border-width: 0 2px 2px 0;
                    -webkit-transform: rotate(45deg);
                    -ms-transform: rotate(45deg);
                    transform: rotate(45deg);
                }
                
                .container_radio input:checked~.checkmark:after {
                    opacity: 1;
                }
                
                .container_radio.version_2 .checkmark:after {
                    width: 22px;
                    height: 22px;
                    top: 0;
                    left: 0;
                }
                
                .container_radio .checkmark:after {
                    display: block;
                    content: "";
                    position: absolute;
                    opacity: 0;
                    -moz-transition: all 0.3s ease-in-out;
                    -o-transition: all 0.3s ease-in-out;
                    -webkit-transition: all 0.3s ease-in-out;
                    -ms-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                    top: 3px;
                    left: 3px;
                    width: 12px;
                    height: 12px;
                    border-radius: 50%;
                    background: #351A5C;
                    -moz-transition: all 0.3s ease-in-out;
                    -o-transition: all 0.3s ease-in-out;
                    -webkit-transition: all 0.3s ease-in-out;
                    -ms-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
            </style>
            <div class="row">
                <div class="col-lg-4">
                    <div class="exam-result-box">
                        <div class="d-flex">
                            <div class="question-box d-flex align-items-center">
                                <p>What is the process at the most detailed level of the data flow diagrams known as?</p>
                            </div>
                  
                        </div>
                        <div class="result-section">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg d-flex align-items-center">
                                        <p>Interfaces</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">A</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg active-success d-flex align-items-center">
                                        <p> Functional primitives</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">B</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg d-flex align-items-center">
                                        <p>Data flow</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">C</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg d-flex align-items-center">
                                        <p>Transform descriptions</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">D</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="exam-result-box">
                        <div class="d-flex">
                            <div class="question-box d-flex align-items-center">
                                <p>Which of the following is a programming IDE used for developing Python applications ?</p>
                            </div>

                        </div>
                        <div class="result-section">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg d-flex align-items-center">
                                        <p>Xcode</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">A</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg  d-flex align-items-center">
                                        <p>Visual Studio Code</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">B</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg active-success d-flex align-items-center">
                                        <p>Rider</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">C</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg d-flex align-items-center">
                                        <p>Spyder</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">D</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="exam-result-box">
                        <div class="d-flex">
                            <div class="question-box d-flex align-items-center">
                                <p>Learning to use them will make your scripting work more efficient and enable you to implement?</p>
                            </div>
                      
                        </div>
                        <div class="result-section">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg">
                                        <img src="assets/images/img-2.jpg" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">A</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg  d-flex align-items-center">
                                        <img src="assets/images/img-2.jpg" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">B</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg active-success d-flex align-items-center">
                                        <img src="assets/images/img-2.jpg" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">C</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg d-flex align-items-center">
                                        <img src="assets/images/img-2.jpg" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">D</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="exam-result-box">
                        <div class="d-flex">
                            <div class="question-box d-flex align-items-center">
                                <p>Learning to use them will make your scripting work more efficient and enable you to implement?</p>
                            </div>
                    
                        </div>
                        <div class="result-section">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg d-flex align-items-center">
                                        <p>Learning to use them will make</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">A</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg active-success d-flex align-items-center">
                                        <p>Learning to use them will make</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">B</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg d-flex align-items-center">
                                        <p>Learning to use them will make</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">C</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg d-flex align-items-center">
                                        <p>Learning to use them will make</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">D</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="exam-result-box">
                        <div class="d-flex">
                            <div class="question-box d-flex align-items-center">
                                <p>Learning to use them will make your scripting work more efficient and enable you to implement?</p>
                            </div>
     
                        </div>
                        <div class="result-section">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg d-flex align-items-center">
                                        <p>Learning to use them will make</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">A</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg  d-flex align-items-center">
                                        <p>Learning to use them will make</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">B</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg active-success d-flex align-items-center">
                                        <p>Learning to use them will make</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">C</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="answer-bg d-flex align-items-center">
                                        <p>Learning to use them will make</p>
                                    </div>
                                </div>
                                <div class="col-lg-1 ">
                                    <p class="count-text">D</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="exam-result-box">
                        <div class="d-flex">
                            <div class="question-box d-flex align-items-center">
                                <p>How happy are you with our service ?</p>
                            </div>
     
                        </div>
                        <div class="result-section">
                        <div class="star-box">
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                                
                        </div>         
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>




    <!-- Modal -->
    <div class="modal fade" id="invite-speaker" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg"
                            alt=""><span>Add Speakers</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body user-sqr">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-grp mb-1">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grp mb-1">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grp mb-1">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio mb-2">
                                        <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5" autocompleted="">
                                        <label class="form-check-label" for="formRadio6">
                                            Feature this speaker
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-grp">
                                        <label class="form-label">Country</label>
                                        <div class="select-inp">
                                            <select class="form-control">

                                                <option value="AK">India</option>
                                                <option value="HI">Usa</option>

                                            </select>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grp">
                                        <label class="form-label">Role</label>
                                        <div class="select-inp">
                                            <select class="form-control">

                                                <option value="AK">Speaker</option>
                                                <option value="HI">Guest Speaker</option>

                                            </select>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grp">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grp">
                                        <label class="form-label">Organization</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="img-upload-form">
                                <img src="assets/images/users/default.png" id="upld-image1">
                                <i class="bx bxs-pencil" onclick="makeimg(1)" ;></i>
                                <input type="file" oninput="previewFile(1)" accept="image/*" id="imgfile1" />

                            </div>
                        </div>



                        <div class="col-md-10">
                            <div class="form-grp">
                                <label class="form-label">Skills</label>
                                <div class="bs-example form-control mb-1">
                                    <input type="text" id="#inputTag" value="" data-role="tagsinput">
                                </div>
                                <span>Use space to separate multiple skills</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-grp">
                                <label class="form-label">Speaker Description</label>
                                <textarea id="summernote" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label class="form-label">Telephone No</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label class="form-label">Alternate Telephone No</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>


                            <div class="form-grp">
                                <label class="form-label">Address</label>
                                <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp social-inputgrp">
                                <label class="form-label">Social Pages / Handles</label>

                                <div class="input-group">

                                    <select class="form-select light-btn">
                                        <option value="BT" selected="">Twitter</option>
                                        <option value="ET">Facebook</option>
                                        <option value="LT">Instagram</option>
                                    </select>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                        id="dropdown-on-both" placeholder="https://www.twitter.com/xyz">
                                    <div class="input-group-append">
                                        <button type="button"
                                            class="btn btn-primary waves-effect waves-light ">ADD</button>
                                    </div>
                                </div>
                                <div class="social-media-out social-media-overflw my-2">
                                    <div class="input-group">
                                        <div class="input-group-text bg-primary text-white font-size-15"><i
                                                class="bx bxl-facebook"></i></div>
                                        <input type="text" class="form-control" id="autoSizingInputGroup"
                                            placeholder="https://www.facebook.com/xyz">
                                        <button class="bx bx-trash delete-icn"></button>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-text bg-pink text-white font-size-15"><i
                                                class="bx bxl-instagram"></i></div>
                                        <input type="text" class="form-control" id="autoSizingInputGroup"
                                            placeholder="https://www.instagram.com/xyz">
                                        <button class="bx bx-trash delete-icn"></button>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-text bg-info text-white font-size-15"><i
                                                class="bx bxl-twitter"></i></div>
                                        <input type="text" class="form-control" id="autoSizingInputGroup"
                                            placeholder="https://www.twitter.com/xyz">
                                        <button class="bx bx-trash delete-icn"></button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-light  br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <a href="#"><button type="button" class="btn btn-primary  br-50 btn-md">Done</button></a>
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
            function makeimg() {
                document.getElementById("imgfile").click();
            }

            function previewFile() {
                const preview = document.getElementById('upld-image');
                const file = document.getElementById("imgfile").files[0];
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
            }, 1000)

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
</body>

</html>
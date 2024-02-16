<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Event Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Event Management" name="description" />
    <meta content="Event Management" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.svg">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body class="ovrflw body-gray">

    
<?php include 'loader.php';?>

    <div id="layout-wrapper">

    <header class="top-header exhibtr-head">
        <div class="header-div">
            <a href="#">
                <div class="backtohome">
                    <i class="bx bx-arrow-back back-arrow"></i>
                </div>
            </a>
            <div class="exhi-img">
                <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle">
            </div>
              
            <div class="header-title">
                <h4>Conference for architects</h4>
                <h6>Veuz Concepts</h6>
            </div>
        </div>
        <div class="header-right-btns">
            <a href="#" target="_blank"><button type="button" class="btn btn-outline-secondary waves-effect waves-light btn-md text-uppercase br-50 small">
                    <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.70349 2.02734C1.58368 2.02734 0.675903 2.93513 0.675903 4.05493V14.8687C0.675903 15.9885 1.58368 16.8963 2.70349 16.8963H9.0397L8.87073 18.248H6.0828C5.70953 18.248 5.40694 18.5506 5.40694 18.9239C5.40694 19.2972 5.70953 19.5998 6.0828 19.5998H15.5449C15.9181 19.5998 16.2207 19.2972 16.2207 18.9239C16.2207 18.5506 15.9181 18.248 15.5449 18.248H12.7569L12.588 16.8963H18.9242C20.044 16.8963 20.9518 15.9885 20.9518 14.8687V4.05493C20.9518 2.93513 20.044 2.02734 18.9242 2.02734H2.70349ZM2.02763 4.05493C2.02763 3.68166 2.33022 3.37907 2.70349 3.37907H18.9242C19.2974 3.37907 19.6 3.68166 19.6 4.05493V12.8411H2.02763V4.05493ZM10.8138 15.5446C10.9931 15.5446 11.165 15.4734 11.2917 15.3466C11.4185 15.2199 11.4897 15.048 11.4897 14.8687C11.4897 14.735 11.4501 14.6044 11.3758 14.4932C11.3015 14.3821 11.196 14.2955 11.0725 14.2443C10.949 14.1932 10.8131 14.1798 10.682 14.2058C10.5509 14.2319 10.4304 14.2963 10.3359 14.3908C10.2414 14.4853 10.177 14.6058 10.151 14.7369C10.1249 14.868 10.1383 15.0039 10.1894 15.1274C10.2406 15.2509 10.3272 15.3564 10.4383 15.4307C10.5495 15.5049 10.6802 15.5446 10.8138 15.5446Z" fill="#263238"></path>
                    </svg>Preview
                </button></a>
                <a href="#" target="_blank"><button type="button" class="btn btn-outline-secondary waves-effect waves-light btn-md text-uppercase br-50 small">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.9375 1C5.00168 1 1 5.00168 1 9.9375C1 14.8733 5.00168 18.875 9.9375 18.875C14.8733 18.875 18.875 14.8733 18.875 9.9375C18.875 5.00168 14.8733 1 9.9375 1Z" stroke="#29343A" stroke-miterlimit="10"></path>
                        <path d="M9.93748 1C7.44229 1 5.09619 5.00168 5.09619 9.9375C5.09619 14.8733 7.44229 18.875 9.93748 18.875C12.4327 18.875 14.7788 14.8733 14.7788 9.9375C14.7788 5.00168 12.4327 1 9.93748 1Z" stroke="#29343A" stroke-miterlimit="10"></path>
                        <path d="M3.979 4.15088C5.62213 5.31748 7.69064 6.01314 9.93748 6.01314C12.1843 6.01314 14.2528 5.31748 15.896 4.15088M15.896 15.7241C14.2528 14.5575 12.1843 13.8618 9.93748 13.8618C7.69064 13.8618 5.62213 14.5575 3.979 15.7241" stroke="#29343A" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M9.9375 1V18.875M18.875 9.9375H1" stroke="#29343A" stroke-miterlimit="10"></path>
                        </svg>
                        View Microsite
                    </button></a>

            <div id="publish_div">
                
                <button type="button" onclick="eventPublishAlert()" class="btn btn-primary btn-publish waves-effect waves-light btn-md text-uppercase br-50 small">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99996 1.6665C5.39996 1.6665 1.66663 5.39984 1.66663 9.99984C1.66663 14.5998 5.39996 18.3332 9.99996 18.3332C14.6 18.3332 18.3333 14.5998 18.3333 9.99984" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.8334 9.1665L17.6667 2.33317M18.3334 5.6915V1.6665H14.3084" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>

                    </svg><span id="event_publish_status">Unpublish</span>
                </button>
                
            </div>
          
        </div>
    </header>

    <div class="main-content-div">
        <div class="exhi-section">
            <h2 class="ex-heading">Exhibitor Teams</h2>
            <div class="exhi-grid">
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
                                        <h3>Specialisation</h3>
                                       
                                      
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
                                <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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
                                        <h3>Specialisation</h3>
                                        
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
                                 <div class="btm-btn-grid"> 
                                    <button class="waves-effect waves-light btn-assign" data-bs-toggle="modal" data-bs-target="#assign-ticket">Assign Ticket</button>
                                    <div class="social-icns">
                                        <ul>
                                            <li class="bg-primary"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="bg-pink"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="bg-info"><a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
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







    <div class="modal fade" id="assign-ticket" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign Ticket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="choose-tickt">
                        <h4>Choose Ticket</h4>
                        <div class="row radio-check-function g-2" id="choose-ticket">
                            <div class="col-md-4">
                                <div class="form-check active">
                                    <input class="form-check-input register_check" data-type="auto_on" checked="" type="radio" name="formRadios" id="formRadios1" autocompleted="">
                                    <label class="form-check-label" for="formRadios1">
                                       Silver
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input register_check" data-type="auto_off" type="radio" name="formRadios" id="formRadios2" autocompleted="">
                                    <label class="form-check-label" for="formRadios2">
                                       Gold
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input register_check" data-type="auto_off" type="radio" name="formRadios" id="formRadios3" autocompleted="">
                                    <label class="form-check-label" for="formRadios3">
                                        Premium
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary  br-50 btn-md" data-bs-dismiss="modal">Confirm</button>
                </div>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="https://kit.fontawesome.com/16b0815225.js" crossorigin="anonymous"></script>
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/js/app.js"></script>



    <script>
        $(function() {
            setTimeout(function() {
                // $('.loader-mask').delay(350).fadeOut('slow')
                $(".loader-mask").hide();
            }, 100)

        })
    </script>

    <script>
        $(document).ready(function() {
            $('#choose-ticket .form-check').click(function() {
                $('#choose-ticket .form-check').removeClass('active');
                $(this).addClass('active');
                $('#choose-ticket input[type="radio"]').prop('checked', false);
                $(this).find('input[type="radio"]').prop('checked', true);
            });
        });
    </script>
</body>

</html>
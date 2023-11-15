<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Event Management" name="description" />
    <meta content="Event Management" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.svg">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/aos.css" rel="stylesheet">
</head>

<body class="popreveal">
    <main class="overflow-hidden">
        <div class="wrapper">
            <section class="thanku-div">
                <header>
                    <a href="published-event.php" class="back-btn">
                        <span class="bx bx-chevron-left"></span>
                    </a>
                   
                </header>
                <div class="voting-inner container">

                    <img src="assets/images/logo.png" alt="">
                 
                    <h1>Welcome to the Voting</h1>
                    <span>Please fill the below fields</span>
                    <div class="row w-100 d-flex justify-content-center">
                        <div class="col-md-4">
                            <input type="text" placeholder="Ticket ID" class="form-control">
                        </div>
                    </div>
                    <a href="poll.php"><button class="submit-btn" type="button">Submit</button></a>
                </div>
                
                
            </section>


        </div>
    
    </main>




    
    <div id="error">
        
    </div>


        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/aos.js"></script>

        <script>
            AOS.init();
        </script>
</body>
</html>
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

<body>
    

    <section class="onscreen-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="countdwn">
                    <div class="box">
                        <div class="circle-count" data-bar="130">
                            <div class="points" style="--i: 1"></div>
                            <div class="points" style="--i: 2"></div>
                            <div class="points" style="--i: 3"></div>
                        </div>

                        <div class="countr"></div>

                        <!-- <h4>Countdown</h4> -->
                    </div>
                 
                    <div class="next-stp">
                        <img src="assets/images/confetti.gif" alt="">
                        <h3>The Winner is</h3>
                    </div>
                </div>
                </div>
               
            </div>
        </div>
    </section>



    <!-- JAVASCRIPT -->
    <script>
        function op(elem) {
            return document.querySelector(elem)
        }

        function opp(elem) {
            return document.querySelectorAll(elem)
        }
    </script>
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




        <script>
            const circles = opp('.circle-count');

            circles.forEach(val => {
                var numDots = val.getAttribute('data-bar');
                var pt = '';
                var rot = 360 / numDots;
                for (a = 1; a <= numDots; a++) {
                    pt += `<div class="points" style="--i: ${a}; --r: ${rot}deg;"></div>`;
                }
                val.innerHTML = pt;
            })




            let secondsCountdown = 4;

            const seconds = document.getElementsByClassName("countr");

            seconds[0].innerHTML = `<span>${secondsCountdown}</span>`;

            function countdown() {
                secondsCountdown -= 1;
                if (secondsCountdown < 0) {
                    document.querySelector('.box').style.display = 'none';
                    document.querySelector('.next-stp').classList.add('active');
                } else {
                    seconds[0].innerHTML = `<span>${secondsCountdown}</span>`;
                    window.setTimeout("window.requestAnimationFrame(countdown)", 1000);
                }
            }

            window.requestAnimationFrame(countdown);
        </script>
          <script>
            $(document).ready(function () {
                window.setTimeout(function () {
                    location.href = "http://localhost/Event-Mangement-team/on-screen3.php";
                }, 6000);
            });
        </script>
</body>

</html>
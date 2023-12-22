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
            <form id="steps" class="show-section" method="post" novalidate>

                <!-- step-1 -->
                <section class="steps">
                    <header>
                        <a href="voting.php" class="back-btn">
                            <span class="bx bx-chevron-left"></span>
                        </a>
                        <h2>
                            Personality Survey Quiz
                        </h2>
                    </header>
                    <div class="step-inner container">

                        <!-- step number -->
                        <div class="step-num"><span>Question 1</span></div>
                        <article class="quiz-text">
                            <h3 class="main-heading"> What is the process at the most detailed level of the data flow diagrams known as?</h3>
                           
                        </article>

                        <!-- form-->
                        <fieldset class="form" id="step1">
                            <div class="row">
                                <div class="col-md-6 ps-3 pe-3 tab-100">
                                    <div class="radio-field op-a">
                                        <input type="radio" name="op1" value="Interfaces">
                                        <label>Interfaces</label>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-3 pe-3 tab-100">
                                    <div class="radio-field op-b">
                                        <input type="radio" name="op1" value="Functional primitives">
                                        <label>Functional primitives</label>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-3 pe-3 tab-100">
                                    <div class="radio-field op-c">
                                        <input type="radio" name="op1" value="Data flow">
                                        <label>Data flow</label>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-3 pe-3 tab-100">
                                    <div class="radio-field op-d">
                                        <input type="radio" name="op1" value="Transform descriptions">
                                        <label>Transform descriptions</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    
                    <footer>
                        <div class="container">
                            <div class="next_prev">
                                <div class="bar-inner">
                                    <span class="bar-text">0% complete. keep it up!</span>
                                    <div class="bar-move"></div>
                                </div>
                                <button class="next" type="button" id="step1btn"><span>Next Question</span></button>
                            </div>
                        </div>
                    </footer>
                </section>

                <!-- step 2 -->
                <section class="steps">
                    <header>
                        <a href="voting.php" class="back-btn">
                            <span class="bx bx-chevron-left"></span>
                        </a>
                        <h2>
                            Personality Survey Quiz
                        </h2>
                    </header>
                    <div class="step-inner container">

                        <!-- step number -->
                        <div class="step-num"><span>Question 2</span></div>
                        <article class="step2 quiz-text">
                            <h3 class="main-heading">Which of the following is a programming IDE used for developing Python applications ?</h3>
                        </article>

                        <!--form -->
                        <fieldset class="form" id="step2">
                            <div class="row">
                                <div class="col-md-6 ps-3 pe-3 tab-100">
                                    <div class="radio-field op-a">
                                        <input type="radio" name="op21" value="Xcode">
                                        <label>Xcode</label>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-3 pe-3 tab-100">
                                    <div class="radio-field op-b">
                                        <input type="radio" name="op22" value="Functional primitives">
                                        <label>Visual Studio Code</label>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-3 pe-3 tab-100">
                                    <div class="radio-field op-c">
                                        <input type="radio" name="op23" value="Data flow">
                                        <label>Rider</label>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-3 pe-3 tab-100">
                                    <div class="radio-field op-d">
                                        <input type="radio" name="op24" value="Transform descriptions">
                                        <label>Spyder</label>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                    <footer>
                        <div class="container">
                            <div class="next_prev">
                                <button class="prev" type="button"><span>Previous Question</span></button>
                                <div class="bar-inner">
                                    <span class="bar-text">30% complete. keep it up!</span>
                                    <div class="w-25 bar-move"></div>
                                </div>
                                <button class="next" type="button" id="step2btn"><span>Next Question</span></button>
                            </div>
                        </div>
                    </footer>
                </section>

                <!-- step 3 -->
                <section class="steps">

                    <header>
                        <a href="voting.php" class="back-btn">
                            <span class="bx bx-chevron-left"></span>
                        </a>
                        <h2>
                            Personality Survey Quiz
                        </h2>
                    </header>
                    <div class="step-inner container">

                        <!-- step number -->
                        <div class="step-num"><span>Question 3</span></div>
                        <article class="step2 quiz-text">
                            <h3 class="main-heading">What iconic landmark in Paris stands as a symbol of elegance and engineering prowess, offering breathtaking views of the city from its iron lattice structure?</h3>
                        </article>

                        <!-- form -->
                        <fieldset class="form" id="step3">
                            <div class="row">
                                <div class="col-md-4 ps-3 pe-3 lap-50">
                                    <div class="radio-field-3">
                                        <div class="radio-field-3-inner">
                                            <img src="assets/images/poll/tower.jpg" alt="image-1">
                                        </div>
                                        <input type="radio" name="op4">
                                        <h6><span>A</span>Eiffel tower</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 ps-3 pe-3 lap-50">
                                    <div class="radio-field-3 delay-100ms">
                                        <div class="radio-field-3-inner">
                                            <img src="assets/images/poll/tower1.jpg" alt="image-2">
                                        </div>
                                        <input type="radio" name="op4">
                                        <h6><span>B</span>Tokyo Tower</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 ps-3 pe-3 lap-50">
                                    <div class="radio-field-3 delay-200ms">
                                        <div class="radio-field-3-inner">
                                            <img src="assets/images/poll/tower2.jpg" alt="image-3">
                                        </div>
                                        <input type="radio" name="op4">
                                        <h6><span>C</span>Petronas Tower</h6>
                                    </div>
                                </div>
                               
                            </div>
                        </fieldset>
                    </div>

                    <footer>
                        <div class="container">
                            <div class="next_prev">
                                <button class="prev" type="button"><span>Previous Question</span></button>
                                <div class="bar-inner">
                                    <span class="bar-text">50% complete. keep it up!</span>
                                    <div class="w-50 bar-move"></div>
                                </div>
                                <button class="next" type="button" id="step3btn"><span>Next Question</span></button>
                            </div>
                        </div>
                    </footer>
                </section>

                <!-- step 4 -->
                <section class="steps">

                    <header>
                        <a href="voting.php" class="back-btn">
                            <span class="bx bx-chevron-left"></span>
                        </a>
                        <h2>
                            Personality Survey Quiz
                        </h2>
                    </header>

                    <div class="step-inner container">

                        <!-- step number-->
                        <div class="step-num"><span>Question 3</span></div>
                        <article class="step2 quiz-text">
                            <h3 class="main-heading">How happy are you with our service ?</h3>
                        </article>

                        <!-- form-->
                        <fieldset class="form" id="step4">
                            <div class="row">
                                <div class="col-md-12 ps-3 pe-3">
                                    <div class="stars">
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                      </div>
                                </div>
                                
                            </div>

                        </fieldset>
                    </div>
                    
                    <footer>
                        <div class="container">
                            <div class="next_prev">
                                <button class="prev" type="button"><span>Previous Question</span></button>
                                <div class="bar-inner">
                                    <span class="bar-text">75% complete. keep it up!</span>
                                    <div class="w-75 bar-move"></div>
                                </div>
                                <button class="apply" type="button" data-bs-toggle="modal" data-bs-target="#alert-msg"><span>Submit</span></button>
                            </div>
                        </div>
                    </footer>
                </section>

            

            </form>


        </div>
    
    </main>




    
    <div id="error">
        
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
                    <p class="text-center">Are you sure you want to submit ?</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn yes-btn successful-btn" id="sub">Yes</button>
                    <button class="btn cancel-button" data-bs-dismiss="modal">No</button>

                </div>
            </div>
        </div>
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
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="shortcut icon" href="./assets/img/logo/logo.png" type="image/x-icon">
    <title>RPA Configurator</title>
</head>

<body>
    <?php function includeWithVariables($filePath, $variables = array(), $print = true) {
        $output = NULL;
       
        if(file_exists($filePath)){
            // Extract the variables to a local namespace
            extract($variables);

            // Start output buffering
            ob_start();

            // Include the template file
            include $filePath;

            // End buffering and return its contents
            $output = ob_get_clean();


        }

        return $output;

    } ?>


    <div id="home"></div>
    <!-- PRELOADER -->
    <div class="preloader">
        <div id="loader"></div>
    </div>
    <!-- PRELOADER END -->
    

    <!-- HEADER AREA -->
    <header class="header-area">
        <div class="container">
              
            <div class="header-content position-relative">
                <div class="header-bg absolute-bg" style="background-color: #fff;"></div>
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="./index.php"><img src="./assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="sidebar-slide-overlay d-lg-none"></div>
            
                        <div class="humberger-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        
                        <div class="sidebar-slide d-lg-none">
                            <div class="sidebar-menu">
                                <a href="./index.php"><img src="./assets/img/logo/logo.png" alt=""></a>
                            </div>
        
                            <div class="sidebar-others">
                                <div class="sidebar-btns text-center">
                                    
                                    
                                    <div class="social-link text-center text-md-end mt-20">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                    </div>
        
                                </div>
        
                                <div class="copyright">
                                    Copyright 2021 <a href="./index.php">RPA</a>. All Rights Reserved
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 d-none d-lg-block">
                        <div class="header-main">
                            <div class="mainmenu">
                                <ul>
                                    <li><a href="https://www.rpaplastics.com/">Home</a></li>
                                    <li><a href="https://www.rpaplastics.com/shop/">Shop</a></li>
                                    <li><a href="https://www.rpaplastics.com/contact/">Contact</a></li>
                                </ul>
                            </div>
                            <div class="header-btn" style="opacity: 0; visibility: hidden;">
                                <a href="#" class="border-circle-icon"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </header>
    <!-- HEADER AREA// -->   


    <!-- APP AREA -->
    <section class="app-area pt-70 pb-70 pt-xs-40 pb-xs-40 style2" style="background-color: #F7F8FC;">
        <div class="pill-shape absolute-img"></div>
        <div class="app-shape" style="background-color: var(--theme-color);"></div>
        <div class="header-holder"></div>
        <div class="container">
             <?php  if ( $_GET['data'] === 'success' ) :  ?>
                <div class="row g-2 g-md-3 justify-content-end">
                    <div class="col-md-12">
                        <div class="thank-text white-content mt-40 mt-xs-20 mt-md-40 p-3 text-center" style="background-color: #52C41A; margin-bottom: 115px;">
                            <h5 class="mb-0">We have received your email. One of our support will call you soon.</h5>
                        </div>
                    </div>
                </div>
            <?php else : ?>
            <div class="app-wrapper position-relative">
                <div class="app-page-title section-content white-content text-center mb-40 mb-xs-30">
                    <h2>Select Your Bottle</h2>
                </div>
                <div class="app-main">
                    <div class="app-category row g-4 align-items-end">
                        <div class="col-md-6 col-6">
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="app-select text-center position-relative">
                                <div class="app-preview position-relative">
                                    <div id="capture">
                                        <img src="./img/5qt-v2/default-model.png" alt="">
    
                                        <div class="parts-wrap">
                                            <div class="parts" style="z-index: 2;">
                                                <img src="./img/5qt-v2/Cap/13.png" alt="">
                                                <img src="./img/5qt-v2/Cap/1.png" alt="">
                                                <img src="./img/5qt-v2/Cap/5.png" alt="">
                                                <img src="./img/5qt-v2/Cap/2.png" alt="">
                                                <img src="./img/5qt-v2/Cap/3.png" alt="">
                                                <img src="./img/5qt-v2/Cap/4.png" alt="">
                                                <img src="./img/5qt-v2/Cap/6.png" alt="">
                                                <img src="./img/5qt-v2/Cap/7.png" alt="">
                                                <img src="./img/5qt-v2/Cap/8.png" alt="">
                                                <img src="./img/5qt-v2/Cap/9.png" alt="">
                                                <img src="./img/5qt-v2/Cap/10.png" alt="">
                                                <img src="./img/5qt-v2/Cap/11.png" alt="">
                                                <img src="./img/5qt-v2/Cap/12.png" alt="">
                                                <img src="./img/5qt-v2/Cap/14.png" alt="">
                                                <img src="./img/5qt-v2/Cap/15.png" alt="">
                                            </div>
                                            <div class="parts">
                                                <img src="./img/5qt-v2/Bottle/13.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/1.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/5.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/2.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/3.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/4.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/6.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/7.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/8.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/9.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/10.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/11.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/12.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/14.png" alt="">
                                                <img src="./img/5qt-v2/Bottle/15.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button class="site-btn">Color bottle</button>

                                </div>
                                <div class="app-title">
                                    <h2>5 Quart V2 Bottle</h2>
                                    <p>We provide our customers with an unrivaled experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-pages">
                    <div class="app-page active">
                        <div class="app-content">
                        </div>
                        <div class="app-content">
                            <div class="app-choose-wrap">
                                <div class="app-choose row">
                                    <div class="col-md-4">
                                        <b>Select Cap Color:</b>
                                    </div>
                                    <div class="col-md-8">
                                        <ul>
                                            <p class="mb-1">Standard color</p>    
                                            <li><button class="color" style="background-color: #7C7A79;"><span class="tooltip">Silver</span></button></li>
                                            <li><button class="color" style="background-color: #3D3C3C;"><span class="tooltip">Black</span></button></li>
                                            <li><button class="color" style="background-color: #CFCBC9;"><span class="tooltip">White</span></button></li>
                                            <p class="mb-1">Custom color</p>     
                                            <li><button class="color" style="background-color: #8F9395;"><span class="tooltip">Plastic</span></button></li>
                                            <li><button class="color" style="background-color: #FF9058;"><span class="tooltip">Orange</span></button></li>
                                            <li><button class="color" style="background-color: #EA7B7A;"><span class="tooltip">Red</span></button></li>
                                            <li><button class="color" style="background-color: #635AF9;"><span class="tooltip">Dark Blue</span></button></li>
                                            <li><button class="color" style="background-color: #5B8EFA;"><span class="tooltip">Blue</span></button></li>
                                            <li><button class="color" style="background-color: #637765;"><span class="tooltip">Green</span></button></li>
                                            <li><button class="color" style="background-color: #8AB875;"><span class="tooltip">Lite Green</span></button></li>
                                            <li><button class="color" style="background-color: #D38FCB;"><span class="tooltip">Pink</span></button></li>
                                            <li><button class="color" style="background-color: #5DA3B3;"><span class="tooltip">Teal</span></button></li>
                                            <li><button class="color" style="background-color: #483EA0;"><span class="tooltip">Purle</span></button></li>
                                            <li><button class="color" style="background-color: #E3B36E;"><span class="tooltip">Yellow</span></button></li>
                                            <li><button class="color" style="background-color: #5F6151;"><span class="tooltip">Other</span></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="app-choose row">
                                    <div class="col-md-4">
                                        <b>Select Body Color:</b>
                                    </div>
                                    <div class="col-md-8">
                                        <ul>
                                            <p class="mb-1">Standard color</p>    
                                            <li><button class="color" style="background-color: #7C7A79;"><span class="tooltip">Silver</span></button></li>
                                            <li><button class="color" style="background-color: #3D3C3C;"><span class="tooltip">Black</span></button></li>
                                            <li><button class="color" style="background-color: #CFCBC9;"><span class="tooltip">White</span></button></li>
                                            <p class="mb-1">Custom color</p>     
                                            <li><button class="color" style="background-color: #8F9395;"><span class="tooltip">Plastic</span></button></li>
                                            <li><button class="color" style="background-color: #FF9058;"><span class="tooltip">Orange</span></button></li>
                                            <li><button class="color" style="background-color: #EA7B7A;"><span class="tooltip">Red</span></button></li>
                                            <li><button class="color" style="background-color: #635AF9;"><span class="tooltip">Dark Blue</span></button></li>
                                            <li><button class="color" style="background-color: #5B8EFA;"><span class="tooltip">Blue</span></button></li>
                                            <li><button class="color" style="background-color: #637765;"><span class="tooltip">Green</span></button></li>
                                            <li><button class="color" style="background-color: #8AB875;"><span class="tooltip">Lite Green</span></button></li>
                                            <li><button class="color" style="background-color: #D38FCB;"><span class="tooltip">Pink</span></button></li>
                                            <li><button class="color" style="background-color: #5DA3B3;"><span class="tooltip">Teal</span></button></li>
                                            <li><button class="color" style="background-color: #483EA0;"><span class="tooltip">Purle</span></button></li>
                                            <li><button class="color" style="background-color: #E3B36E;"><span class="tooltip">Yellow</span></button></li>
                                            <li><button class="color" style="background-color: #5F6151;"><span class="tooltip">Other</span></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="action-btn mt-50 mt-xs-20 mt-md-30">
                                <a href="./index.php" class="site-btn prev-btn" type="button">Prev Step</a>
                                <button class="site-btn next-btn" type="button">Next Step</button>
                                <button class="site-btn d-none" type="button"><img src="./assets/img/icon/cube.png" alt=""> 3d View</button>
                            </div>
                        </div>
                    </div>
                    <div class="app-page">
                        <div class="app-form">
                            <div class="section-content mb-30">
                                <h3>Please Fillout the
                                    Information</h3>
                            </div>
                            <form action="" method="post" class="maincls">
                                    <div class="row g-2 g-md-3 justify-content-end">
                                        <div class="col-md-4">
                                            <b class="form-title">Complete Name</b>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="name" required>
                                        </div>
        
                                        <div class="col-md-4">
                                            <b class="form-title">Email Address</b>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="email" required>
                                        </div>
        
                                        <div class="col-md-4">
                                            <b class="form-title">Phone No</b>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="phone" required>
                                        </div>
        
                                        <div class="col-md-4">
                                            <b class="form-title">Company Name</b>
                                        </div>
                                        <div class="col-md-8">
                                              <input type="text"  name="companyName">
                                        </div>
        
                                        <input type="hidden"  name="product" value="5 Quart Bottle">
        
                                        <div class="col-md-4">
                                            <b class="form-title">Amount</b>
                                        </div>
                                        <div class="col-md-8">
                                            <select name="amount">
                                                <option value="0">Select Amount</option>
                                                <option value="10000">10000</option>
                                                <option value="15000">15000</option>
                                                <option value="20000">20000</option>
                                                <option value="25000">25000</option>
                                            </select>
                                        </div>
        
                                        <div class="col-md-4">
                                            <b class="form-title">Message</b>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea rows="4" name="message"></textarea>
                                        </div>

                                        <!-- final wheel color name data -->
                                        <input class="color_name_data" type="hidden" name="cap" value="">
                                        <input class="color_name_data" type="hidden" name="body" value="">
                                        <!-- final wheel color name data end -->

                                        <input class="img_data" type="hidden" value="" name="img_data">
                               
                                        <div class="col-md-12">
                                            <div class="form-btn d-flex justify-content-between">
                                                <button type="submit" class="site-btn back-btn mt-15">Back</button>  
                                                <button type="submit" name="qoutesubmit" class="site-btn mt-15">Get a Quote</button>  
                                            </div>
                                            

                                        </div>          
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </section>
    <!-- APP AREA// -->

    <!-- FOOTER AREA -->
    <footer class="footer-area overflow-hidden pt-120 pt-xs-70 pt-md-90" style="background-image: url(./assets/img/footer/bg.jpg);">
        <div class="pill-shape absolute-img"></div>
        <div class="container px-lg-4">
            <div class="row g-4 g-lg-5">
                <div class="col-md-4">
                    <div class="footer-content section-content white-content">
                        <div class="footer-logo mb-100 mb-xs-50 mb-md-70">
                            <a href="./index.php"><img src="./assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <p>RPA Plastics: the ultimate solution! We are committed to producing high-quality blow-molded plastic items and meeting deadlines.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-item white-content">
                        <div class="section-content">
                            <h4>Contact Us</h4>
                        </div>

                        <ul class="contact-list text-center text-md-start">
                            <li><b>Email: sales@rpaplastics.com</b></li>
                            <li><b>Mobile: +1 (972) 672-8267</b></li>
                            <li><b>861 S. Great Southwest Pkwy, Grand Prairie TX, 75051</b></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-item white-content">
                        <div class="section-content">
                            <h4>Quick Links</h4>
                        </div>

                        <div class="footer-menu">
                            <ul>
                                <li><a href="1qt.php">1 Quart Bottle</a></li>
                                <li><a href="1qt-v2.php">1 Quart V2 Bottle</a></li>
                                <li><a href="5qt.php">5 Quart Bottle</a></li>
                                <li><a href="5qt-v2.php">5 Quart V2 Bottle</a></li>
                                <li><a href="round.php">Round Bottle</a></li>
                                <li><a href="gallon-18-litre.php">Gallon 18 Litre Bottle</a></li>
                                <li><a href="gallon-20-litre.php">Gallon 20 Litre Bottle</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom pt-40 pb-40 pt-xs-20 pb-xs-20 pt-md-30 pb-md-30">
            <div class="container">
                <div class="row align-items-center g-3">
                    <div class="col-md-8">
                        <div class="copyright section-content text-white">
                            Copyright 2022 <a href="./index.php">RPA</a>. All Rights Reserved. Created By <a href="https://designnearme.com/">DesignNearMe.com</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="social-link text-center text-md-end">
                            <li><a target="_blank" href="https://www.facebook.com/RPAplasticUSA"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/rpaplastic/"><i class="fab fa-instagram"></i></a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA// -->

    <!-- error popup -->
    <div class="error-wrap">
        <div class="error-box">
            <div class="error-close"><i class="fas fa-times"></i></div>

            <div class="error-text">
                <h4 class="text-uppercase">please select color</h4>
            </div>

        </div>
    </div>
    <!-- error popup// -->


    <!-- Popper.js first, then Bootstrap JS -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/html2canvas.min.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/main.js"></script>

    <?php
    
    if(isset($_POST["qoutesubmit"])) {    
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $companyName = trim($_POST["companyName"]);
        $product = trim($_POST["product"]);
        $amount = trim($_POST["amount"]);
        $message = trim($_POST["message"]);
        $img_data = trim($_POST["img_data"]);
        $subject = 'RPA Bottle Configurator';
        if ($img_data){

            define('UPLOAD_DIR', 'tmp/');
            $image_parts = explode(";base64,", $img_data);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $file = UPLOAD_DIR . uniqid() . '.png';
            file_put_contents($file, $image_base64);

            $actual_linkf = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
            $image_path = $actual_linkf.'/'.$file;


        } else {
            $image_path = '';
        }
            $message = trim($_POST["message"]);
             
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
       
            if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($subject) OR empty($message)  ) {
                # Set a 400 (bad request) response code and exit.
                http_response_code(400);
                echo "Please complete the form and try again.";
                //exit;
            }
       
            $email_content = includeWithVariables($_SERVER['DOCUMENT_ROOT'].'email-template/email.php', 
                array(
                    'name' => $name, 
                    'phone' => $phone, 
                    'email' => $email, 
                    'companyName' => $companyName, 
                    'product' => $product, 
                    'amount' => $amount, 
                    'cap' => trim($_POST["cap"]), 
                    'body' => trim($_POST["body"]), 
                    'message' => $message, 
                    'product-name' => $product, 
                    'image_path' => $image_path
                )
            );
        

            $headers = "From: RPA Bottle Configurator <support@rpaconfigurator.one>\r\n";
            $headers .= "Reply-To: support@rpaconfigurator.one\r\n";


            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            $success = mail('designnearme@gmail.com', $subject, $email_content, $headers);
            $success = mail('mike@designnearme.com', $subject, $email_content, $headers);
           
            if ($success) {

                # Set a 200 (okay) response code.
                http_response_code(200);
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                $link = $actual_link.'?data=success';
                echo '<script type="text/javascript">';
                echo 'window.location.href="'.$link.'";';
                echo '</script>';
                

            } else {
                # Set a 500 (internal server error) response code.
                http_response_code(500);
                echo "Oops! Something went wrong, we couldn't send your message.";
            }


    }  ?>

</body>

</html>
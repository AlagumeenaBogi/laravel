<?php
    include_once 'session.php';
    include_once 'admin/config/config.php';
    include_once 'admin/functions.php';
    include_once 'admin/query.php';
    include_once 'function.php';
    $home = "active";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FB Digital Marketing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <?php include("asset.php"); ?>
    <link rel="stylesheet" type="text/css" href="slider/css/sl-slider.css" />
    <link rel="stylesheet" type="text/css" href="slider/css/sl-slider-custom.css" />
    <script type="text/javascript" src="slider/js/modernizr.custom.79639.js"></script>
    
</head>

<body>
    <!-- Fixed navbar -->
    <?php
    include("header.php");     
    ?>
    <!-- *****************************************************************************************************************
     HEADERWRAP
     ***************************************************************************************************************** -->
    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--div id="slider" class="sl-slider-wrapper" style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.3)">
                        <div class="sl-slider">
                            <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                <div class="sl-slide-inner">
                                    <img src="slider/images/item1.jpg" width="100%" height="100%">
                                </div>
                            </div>
                            <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                                <div class="sl-slide-inner">
                                    <img src="slider/images/item2.jpg" width="100%" height="100%">
                                </div>
                            </div>
                            <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                                <div class="sl-slide-inner">
                                    <img src="slider/images/item3.jpg" width="100%" height="100%">
                                </div>
                            </div>
                            <div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                                <div class="sl-slide-inner">
                                    <img src="slider/images/item4.jpg" width="100%" height="100%">
                                </div>
                            </div>
                            <div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                                <div class="sl-slide-inner">
                                    <img src="slider/images/item5.jpg" width="100%" height="100%">
                                </div>
                            </div>
                        </div>
                        <!-- /sl-slider -->
                        <!--nav id="nav-arrows" class="nav-arrows">
                            <span class="nav-arrow-prev">Previous</span>
                            <span class="nav-arrow-next">Next</span>
                        </nav>
                    </div-->
                </div>

                <div class="col-md-4" id="signin">
                    <div id="login" class="col-sm-12" style="min-height: 380px; vertical-align: top; padding-top: 15px;">
                        <form method="post" action="userhome.php" name="form-area" id="form-area" class="form-area">
                            <h2 class="style3" style="margin-top: 0px;"><span class="style5">Sign in</span></h2>
                            <table width="100%">
                                <tr>
                                    <td style="padding-top: 15px;">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input class="form-control" id="username"  name="username" placeholder="Mobile Number" type="text">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 20px;">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                            <input class="form-control" id="password"  name="password" maxlengh=15 id="inlineFormInputGroup" placeholder="Password" type="password">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left; padding-top: 15px;">
                                        <a href="#">Forget your Password?</a><br>
                                        <span id="login_validation" style="color:#f00; float:left; margin-top:5px;"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 15px;">
                                        <input type="submit" name="submit" id="submit" onclick="javascript:return loginvalidatation();" class="btn btn-theme" style="width: 100%; margin:0px; box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);" name="submit" value="Login to your Account">
                                    </td>
                                </tr>
                                 <tr>
                                    <td style="padding-top: 5px;">
                                        <p>Don't have an Account?</p>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <td style="padding-top: 5px;">
                                        <button type="button" class="btn btn-theme signup-btn" style="width: 100%; margin:0px; box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);">Click here to Sign up </button>
                                    </td>
                                </tr><!----this is new-->
                            </table>
                            <div class="form-area-bottom">&nbsp;</div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4" style="display: none;" id="signup">
                    <div style="background-color: #00B3FE; width: 22px; height: 23px; position: absolute; right: 17px; top: 2px; z-index: 999;" class="close-reg">
                        <i class="fa fa-times" style="cursor: pointer; color: #fff;"></i>
                    </div>
                    <div id="login" class="col-sm-12" style="min-height: 380px; vertical-align: top; padding-top: 15px;">
                        <form method="post" action="" name="form-area1" id="form-area1" class="form-area">
                            <h2 class="style3" style="margin-top: 0px;"><span class="style5">Sign up</span></h2>
                            <table width="100%">
                                <tr>
                                    <td style="padding-top: 13px;">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon"><i class="fa fa-user">&nbsp;</i></div>
                                            <input class="form-control" maxlength='33' id="names" name="names" placeholder="Name" type="text">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 18px;">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon"><i class="fa fa-mobile">&nbsp;&nbsp;</i></div>
                                            <input class="form-control" maxlength='13' id="mobileno" name="mobileno" placeholder="Mobile Number" type="text">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 13px;">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon"><i class="fa fa-user">&nbsp;</i></div>
                                            <input class="form-control" maxlength='15' id="passwords" name="passwords" placeholder="Password" type="password">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 18px;">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                            <input class="form-control" maxlength='35' id="email" name="email" placeholder="Email ID" type="text">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 18px;">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon"><i class="fa fa-facebook">&nbsp;&nbsp;</i></div>
                                            <input class="form-control"  maxlength='35' id="fbid" name="fbid" placeholder="Facebook ID" type="text">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 18px;">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="padding: 8px;"><small>123</small></div>
                                            <input class="form-control"  maxlength='6' id="pin" name="pin"  placeholder="PIN Number" type="text">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 18px;">
                                        <span id="registration_validation" style="color:#f00; float:left; margin-top:5px;"></span>
                                        <button type="submit" name="regsubmit" onclick="javascript:return registrationvalidation();" class="btn btn-theme" style="width: 100%; margin:0px; box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);">Create an account</button>
                                    </td>
                                </tr>
                            </table>
                            <div class="form-area-bottom">&nbsp;</div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /headerwrap -->
    <!-- *****************************************************************************************************************
     SERVICE LOGOS
     ***************************************************************************************************************** -->
    <div id="service">
        <div class="container">
            <h2 class="how-work">How it Works </h2>
            <div class="row centered">
                <div class="col-md-4">
                    <i class="fa fa-user"></i>
                    <h4>Sign up Now</h4>
                    <p>Register and Get your login Details. Start your Work at your own time from Anywhere.</p>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-book"></i>
                    <h4>Do your Work </h4>
                    <p>Just take your Own time and Own Place where you feel Comfortable to Complete.</p>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-cog"></i>
                    <h4>Get Your Payments </h4>
                    <p> Get your Earnings weekly/Monthly. Your Payment will be Made thru Cheque or NEFT.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="portfoliowrap">
        <div class="container">
            <div class="col-lg-6">
                <h4>Share images &amp; url  Online.</h4>
                <div class="hline"></div>
                <p>Work From Home, Office, College and Anywhere.</p>
                <p>Work @ your Own free time.</p>
                <p>Just Copy Paste the Given ADContent.</p>
                <p>Guranteed Weekly / Monthly Payments.</p>
                <p>No Need any Previous Experience. 24x7 Customer Support.</p>
                <p>One Year Validity of your account within unlimited ad posting option.</p>
            </div>
            
            <div class="col-lg-6">
                <h4>How to Join</h4>
                <div class="hline"></div>
                <p>Register now by Clicking the Sign up Now Button.</p>
                <p>Your membership details will be SMS to your registered mobile number.</p>
                <p>By Using the Membership details, Login to the member account.</p>
                <p>START the Copy Paste Work for the Ad content given to you.</p>
                <p>Earn Rs.10/- for each copy paste work. Normally you can do Minimum 100 copy paste works daily.</p>
                <p>Get Your Payments Monthly thru Cheque / NEFT online Transfer.</p>
            </div>
            <div class="clear"></div><br><br>
        </div><!-- --/row ---->
     </div>
    <!-- *****************************************************************************************************************
     TESTIMONIALS
     ***************************************************************************************************************** -->
    <div id="twrap">
        <div class="container centered">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="headline">
                        <h1 class="style27"><span style="color: #F8EB00;">20000+</span> Users already Joined and doing work Daily</h1>
                        <p class="style43">Students, Housewives, Job Seekers and anybody who wants to Earn Good income on Part time Work can Join this.</p>
                        <p class="style43"><span class="style39">Rs.</span><span class="style33">10</span> per Copy paste work done</p>
                        <p class="style14">It's Easy to join. Just click on "Sign up Now" and Enter your Details. That's all.</p>
                        <p class="style14">Membership details will be couriered as to your address. Then login to your account. Get Started. </p>
                        <button type="submit" class="btn btn-theme" style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);">Sign up </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- *****************************************************************************************************************
     PORTFOLIO SECTION
     ***************************************************************************************************************** -->
     <div id="portfoliowrap">
        <h3>PAYMENTS</h3>

        <div class="portfolio-centered">
            <div class="recentitems portfolio">
                <div class="payment-proof col-md-3">
                    <div class="he-wrap tpl6">
                    <img src="assets/img/cheque/proof1-thumbnail.gif" alt="">
                        <div class="he-view col-md-12">
                            <div class="bg a0" data-animate="fadeIn">
                                <a data-rel="prettyPhoto" href="assets/img/cheque/proof1.gif" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->      
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->
                            
                <div class="payment-proof col-md-3">
                    <div class="he-wrap tpl6">
                    <img src="assets/img/cheque/proof2-thumbnail.gif" alt="">
                        <div class="he-view col-md-12">
                            <div class="bg a0" data-animate="fadeIn">
                                <a data-rel="prettyPhoto" href="assets/img/cheque/proof2.gif" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->      
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->
        
                <div class="payment-proof col-md-3">
                    <div class="he-wrap tpl6">
                    <img src="assets/img/cheque/proof3-thumbnail.gif" alt="">
                        <div class="he-view col-md-12">
                            <div class="bg a0" data-animate="fadeIn">
                                <a data-rel="prettyPhoto" href="assets/img/cheque/proof3.gif" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->      
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->
        
                <div class="payment-proof col-md-3">
                    <div class="he-wrap tpl6">
                    <img src="assets/img/cheque/proof4-thumbnail.gif" alt="">
                        <div class="he-view col-md-12">
                            <div class="bg a0" data-animate="fadeIn">
                                <a data-rel="prettyPhoto" href="assets/img/cheque/proof4.gif" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->      
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->

                <div class="clear"></div>

            </div><!-- portfolio -->
        </div><!-- portfolio container -->
     </div><!--/Portfoliowrap -->


    <?php include("footer.php"); ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina-1.1.0.js"></script>
    <script src="assets/js/jquery.hoverdir.js"></script>
    <script src="assets/js/jquery.hoverex.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/validation.js"></script>

    <script type="text/javascript" src="slider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="slider/js/jquery.slitslider.js"></script>
    <script type="text/javascript">
    $(function() {
        var Page = (function() {
            var $navArrows = $('#nav-arrows'),
                $nav = $('#nav-dots > span'),
                slitslider = $('#slider').slitslider({
                    onBeforeChange: function(slide, pos) {
                        $nav.removeClass('nav-dot-current');
                        $nav.eq(pos).addClass('nav-dot-current');
                    }
                }),
                init = function() { initEvents(); },
                initEvents = function() {
                    // add navigation events
                    $navArrows.children(':last').on('click', function() {
                        slitslider.next();
                        return false;
                    });
                    $navArrows.children(':first').on('click', function() {
                        slitslider.previous();
                        return false;
                    });
                };
            return { init: init };
        })();
        Page.init();

        $( ".close-reg" ).click(function() {
          $('#signup').hide();
          $('#signin').show();
        });
        $( ".signup-btn" ).click(function() {
          $('#signup').show();
          $('#signin').hide();
        });
    });
    </script>
    <script type="text/javascript">
      $('#messageModal').modal('hide');//$('#modal').modal('hide');
    </script>
    <!-- Modal -->
      <div class="modal fade" id="messageModal" role="dialog">
        <div class="modal-dialog">     
          <div class="modal-content">
            <div class="modal-header">
              <!--button type="button" class="close" data-dismiss="modal">&times;</button---->
              <h4 class="modal-title">Confirmation OTP sent...</h4>
            </div>
            <div class="modal-body">
              <form name="otp_form"  id="otp_form" method="post" action="" class="form-horizontal">
                                <div class="login_message">
                                  <p>Thanks for registering. Please Check your mobile and enter your One Time Password (OTP) to confirm your account. Once your entered OTP is correct, your registration will be completed.</p>
                                        <div class="form-group">    
                                            <div class="col-md-8">  
                                                    <div class="control-group">
                                                    <input type="text" class="form-control" maxlength=5 name="otp"  id="otp" placeholder="Enter OTP" minlength="5">
                                                     <p class="help-block"></p>
                                                     <span id="otp_verify" style="color:#f00; float:left; margin-top:5px;"></span>                                                               
                                                </div>
                                            </div> 
                                            <div class="col-md-2">  
                                                <button class="btn btn-primary pull-right"  id="submit" name="submit"  onclick="javascript:return verifyotp();" > Submit</button>
                                            </div>
                                            <!-- <div class="col-md-2">
                                                <button type="button" onclick="location.href='profile.php'" class="btn btn-success pull-right" style="margin-right:5%" name="head_office_submit" >
                                                        <span class="glyphicon glyphicon-share-alt"></span>Skip
                                                </button>
                                            </div> -->
                                        </div>                                
                                        <p>If you have trouble receiving OTP <a href="#" onclick="javascript:return otp_resend();">Click Here</a> to resend OTP.</p>
                                        <p>This Page will automatically timeout after 120 seconds</p>
                                    </div>
                                </div>  
                            </div>
                </form>
            </div>
          </div>      
        </div>
      </div>
</body>

</html>
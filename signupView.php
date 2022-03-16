<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- JS -->
    <script src="<?php echo base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
        <div class="row justify-content-md-center">
            <div class="col col-md-16" style="margin-bottom: 20px;">
                        <?php
                        foreach($messages as $message){?>
                            <div class="toast" style="background-color:#A7C5EB;" role="alert" data-animation="true" aria-live="assertive" data-autohide="false" aria-atomic="true">
                            <div class="toast-header">
                                <!-- <img src="..." class="rounded mr-2" alt="..."> -->
                                <strong class="mr-auto">Message</strong>
                                <small>Error!!</small>
                                <button type="button" class="ml-2 mb-1 close"  data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                <?php echo $message ?>
                            </div>
                        </div> 
                        <?php }

                         ?>
                        
            </div>
            
            <div class="col-md-auto">
            <div class="signup-content container">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <?php
                        if (validation_errors() != false) {
                            //  validation_errors();
                        }
                        // if ($this->session->flashdata("errorMessage"))
                        //     echo $this->session->flashdata("errorMessage");
                        ?>
                        <?php 
                       echo form_open(site_url('SignUp/validateSignup'),["class"=>"register-form","id"=>"register-form"]);
                        ?>
                        
                        <!-- <form method="POST" class="register-form" id="register-form"> -->
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url('assets/') ?>images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo site_url('Login/') ?>" class="signup-image-link">I am already member</a>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col col-lg-2">
            <!-- 3 of 3 -->
            </div>
        </div>
                
            </div>
        </section>

    </div>
<script>
    $('.toast').toast('show');
</script>
    
</body>
</html>
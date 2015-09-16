<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="<?=base_url();?>assets/img/favicon.png">
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/ui.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/plugins/icheck/skins/all.css" rel="stylesheet"/>
    <link href="<?=base_url();?>assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
</head>
<body class="account separate-inputs " data-page="login">
    <!-- BEGIN LOGIN BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3">
                <div class="account-wall">
                    <h2 style='color:white'><strong>Sign</strong> Up</h2>
                    <i class="user-img icons-faces-users-03"></i>
                    <div class="form-signup">
                        <?php echo form_open("Register/registration"); ?>
                        <?php if(validation_errors() != false):?><div class = "alert alert-danger"><?php echo validation_errors(); ?></div><?php endif;?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="append-icon">
                                    <input type="email" name="username" id="username" class="form-control form-white " placeholder="Username - Email" required autofocus>
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="append-icon">
                                    <input type="password" name="password" id="password" class="form-control form-white " placeholder="Password" required autofocus>
                                    <i class="icon-lock"></i>
                                </div>
                            </div> 
                        </div>
                        <div class="append-icon">
                            <input type="text" name="name" id="name" class="form-control form-white " placeholder="Full Name" required>
                        </div>
                        <div class="append-icon">
                            <select class="form-control option-group form-white" data-search="false" name='position' required>
                                    <option disabled selected> -- Select Positions -- </option>
                                    <option>Manager</option>
                                    <option>Graphics Designer</option>
                                    <option>Secretariat</option>
                            </select>
                        </div>
                        <div class="terms option-group">
                            <label  for="terms" class="m-t-10">
                                <input type="checkbox" name="terms" id="terms" data-checkbox="icheckbox_square-blue" required/>
                                I agree with terms and conditions
                            </label>  
                        </div>
                        <button type="submit" id="submit-form" class="btn btn-lg btn-primary m-t-20" data-style="expand-left">Register</button>
                        <div class="clearfix">
                            <p class="pull-right m-t-20"><a href="<?php echo base_url();?>Register/index">Already have an account? Sign In</a></p>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>  
    </div>
</body>
</html>
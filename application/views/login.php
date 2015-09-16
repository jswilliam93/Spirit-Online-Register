<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login - Ebnograph System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="<?=base_url();?>assets/img/favicon.png">
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/ui.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
</head>
<body class="account" data-page="login">
    <!-- BEGIN LOGIN BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="account-wall">
                    <?php echo form_open("Register/login"); ?>
                    <?php if(validation_errors() == true):?>
                        <div class = "alert alert-danger">
                            <?php echo validation_errors(); ?><?php endif;?>
                        </div>
                        <img src="<?php echo base_url()?>assets/images/logo.png" class="img-responsive" >
                    <h2 style='color:white'><strong>Sign</strong> In</h2>
                    <i class="user-img icons-faces-users-03"></i>
                    <div class="append-icon">
                        <input type="text" name="username" id="id" class="form-control form-white username" placeholder="Username" required>
                        <i class="icon-user"></i>
                    </div><br>
                    <div class="append-icon m-b-20">
                        <input type="password" name="password" class="form-control form-white password" placeholder="Password" required>
                        <i class="icon-lock"></i>
                    </div>
                    <button type="submit" id="submit-form" class="btn btn-lg btn-danger btn-block ladda-button" data-style="expand-left">Sign In</button>
                    <!-- <div class="clearfix">
                        <p class="pull-right m-t-20"><a href="<?php echo base_url();?>Register/registration">New here? Sign up</a></p>
                    </div> -->
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>    
    </div>

</div>
</div>
</body>
</html>
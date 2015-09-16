<!DOCTYPE html>
<html>
<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Lock Screen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/ui.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
</head>
<body class="account" data-page="lockscreen">
    <!-- BEGIN LOGIN BOX -->
    <div class="container" id="lockscreen-block">
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <div class="account-wall">
                    <div class="user-image">
                        <img src="<?php echo base_url()?>uploads/default.png" class="img-responsive img-circle" alt="friend 8">
                    </div>
                    <?php echo form_open("Register/lock"); ?>
                    <?php if(validation_errors() != false):?><div class = "alert alert-danger"><?php echo validation_errors(); ?></div><?php endif;?>
                    <div class = 'form-signin'>
                    <h2> <strong><?php echo $me[0]->name ?></strong></h2>
                    <div class="input-group"> 
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" > 
                        <span class="input-group-btn"> 
                            <button type="submit" class="btn btn-primary">Log In</button>
                        </span> 
                    </div>
                <?php echo form_close(); ?>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

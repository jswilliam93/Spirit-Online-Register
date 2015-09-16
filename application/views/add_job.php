<!-- BEGIN PAGE CONTENT -->
<div class="page-content">
	<div class="header">
		<h2><strong>Add</strong> Job</h2>
	</div>
	<div class="row">
		<div class="col-lg-12 ">
			<div class="panel">
				<div class="panel-header">
					<h3><i class="fa fa-tasks"></i> New <strong>Job</strong></h3>
				</div>
				<div class="panel-content">
					<div class="row">
						<?php echo form_open_multipart("Jobs/add_job"); ?>
						<?php if(validation_errors() != false):?><div class = "alert alert-danger"><?php echo validation_errors(); ?></div><?php endif;?>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Title</label>
								<input type="text" class="form-control" placeholder="Title.." name ='title'>
							</div>
							<div class="form-group">
								<label class="form-label">Client</label>
								<input type="text" class="form-control" placeholder="Client.." name ='company'>
							</div>
							<div class="form-group">
								<label class="form-label">Client Mail</label>
								<input type="email" class="form-control" placeholder="Email.." name ='companyEmail'>
							</div>
							<div class="form-group">
								<label class="form-label">Start Date</label>
								<input type="text" class="form-control date-picker " placeholder="YYYY-MM-DD" name ='startDate'readonly='true'>
							</div>
							<div class="form-group">
								<label class="form-label">End Date</label>
								<input type="text" class="form-control date-picker " placeholder="YYYY-MM-DD" name ='endDate'readonly='true'>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Designer</label>
								<select class="form-control" data-search="true" name='designer'>
									<?php foreach($designer as $row):?>
										<option value ="<?php echo $row->idUsers;?>"><?php echo $row->name;?> </option>
									<?php endforeach;?>
								</select> 
							</div>
							<div class="form-group">
								<label>Manager</label>
								<select class="form-control" data-search="true" name='addedBy'>
									<?php foreach($Manager as $row):?>
										<option value ="<?php echo $row->name;?>"><?php echo $row->name;?> </option>
									<?php endforeach;?>
								</select> 
							</div>
							<div class = "form-group">
								<label class="form-label">CTP</label>
								<input type="checkbox" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;" name="ctp">
								<label class="form-label">Digital</label>
								<input type="checkbox" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;"name="digital">
								<label class="form-label">Design</label>
								<input type="checkbox" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;"name="design">
								<label class="form-label">Separation</label>
								<input type="checkbox" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;"name="separation">
							</div>
							<div class="form-group">
								<label class="form-label">Description</label>
								<textarea rows="12"class="form-control" placeholder="Description.." name='description'></textarea>
							</div>
						</div>
					</div>
					<div class="row"><center><button type="submit" id="submit-form" class="btn btn-md btn-primary m-t-20" data-style="expand-left">Add Job</button></center></div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
	<script src="<?=base_url();?>assets/plugins/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url();?>assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?=base_url();?>assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
	<script src="<?=base_url();?>assets/plugins/timepicker/jquery-ui-timepicker-addon.min.js"></script> <!-- Time Picker -->
	<script src="<?=base_url();?>assets/plugins/switchery/switchery.min.js"></script> <!-- IOS Switch -->
	<script src="<?=base_url();?>assets/plugins/bootstrap-tags-input/bootstrap-tagsinput.min.js"></script> <!-- Select Inputs -->
	<script src="<?=base_url();?>assets/plugins/dropzone/dropzone.min.js"></script>  <!-- Upload Image & File in dropzone -->
	<script src="<?=base_url();?>assets/js/pages/form_icheck.js"></script>  <!-- Change Icheck Color - DEMO PURPOSE - OPTIONAL -->
	<script type="text/javascript">
		$( document ).ready(function() {
			$('.date-picker').datepicker({
				dateFormat: "yy-mm-dd",
				changeMonth: true,
				changeYear: true,
				yearRange: "1940:2015",
			});
		});
	</script>
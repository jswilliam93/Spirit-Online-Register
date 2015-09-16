<!-- BEGIN PAGE CONTENT -->
<link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.min.css" rel="stylesheet">
<!-- END PAGE STYLE -->
<script src="<?php echo base_url();?>assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<style type="text/css">
th,tr{
  text-align: center;
}
</style>
<div class="page-content">
  <div class="header">
    <h2><strong>Jobs</strong> Schedule</h2>
  </div>
  <div class="row">
    <div class="col-lg-12" style="height:720px">
      <div class="panel">
        <div class="panel-header">
          <h3><i class="fa fa-table"></i> <strong>Due </strong> Jobs &nbsp
        </div>

        <div class="panel-content pagination2 table-responsive">
          <table class="table table-hover table-dynamic">
            <thead>
              <tr>
                <th>Title</th>
                <th>Client</th>
                <th>Client Mail</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Designer</th>
                <th>Supervisor</th>
                <th>CTP</th>
                <th>Digital</th>
                <th>Design</th>
                <th>Separation</th>
                <th>Done</th>  
                <th>Hold</th>
                <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($jobs as $row): ?>
                <tr>
                  <td><?php echo $row->title ?></td>
                  <td><?php echo $row->company ?></td>
                  <td><?php echo $row->companyEmail ?></td>
                  <td><?php echo $row->description ?></td>
                  <td><?php echo $row->startDate ?></td>
                  <td><?php if($row->endDate == "0000-00-00") echo ""; else echo $row->endDate; ?></td>
                  <td><?php echo $row->name ?></td>
                  <td><?php echo $row->addedBy ?></td>
                  <td><?php if($row->ctp == '1') echo '<i class="fa fa-check"></i>'; else echo '<i class="fa fa-close"></i>'; ?></td> 
                  <td><?php if($row->digital == '1') echo '<i class="fa fa-check"></i>'; else echo '<i class="fa fa-close"></i>';?></td> 
                  <td><?php if($row->design == '1') echo '<i class="fa fa-check"></i>'; else echo '<i class="fa fa-close"></i>';?></td> 
                  <td><?php if($row->separation == '1') echo '<i class="fa fa-check"></i>'; else echo '<i class="fa fa-close"></i>';?></td> 
                  <td><a class='glyphicon glyphicon-check' href="<?php echo base_url();?>Jobs/mark_done/<?php echo $row->idJobs; ?>"></a></td>              
                  <td><a class='glyphicon glyphicon-pause' href="<?php echo base_url();?>Jobs/hold/<?php echo $row->idJobs; ?>"></a></td>
                  <td><a class='glyphicon glyphicon-trash' href="<?php echo base_url();?>Jobs/delete/<?php echo $row->idJobs; ?>"></a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="<?=base_url();?>assets/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
    <script src="<?=base_url();?>assets/js/pages/table_dynamic.js"></script>
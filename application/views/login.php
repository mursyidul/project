
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Penggajian CV. SURYA AGUNG ENTERPRISE</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By NewDev">
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/jquery.autocomplete.css');?>" rel="stylesheet">
	
	<!-- file bootstrap css yang digunakan-->

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	
    <!-- Ionicons -->
    <link href="<?php echo base_url('assets/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url('assets/css/morris/morris.css');?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url('assets/css/jvectormap/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url('assets/css/datepicker/datepicker3.css');?>" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="<?php echo base_url('assets/css/daterangepicker/daterangepicker-bs3.css');?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="http://localhost/perpuspetro/assets/admin/css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/perpuspetro/assets/css/sweetalert.css">
    </head>

    <body class="skin-black">
    <section class="content">
        <div class="row" style="margin-top:1%;">
			<div class="col-md-12">
			<center><img src="<?php echo base_url('assets/img/logo.png'); ?>" width="10%" class="img-circle" alt="User Image" /></center><br/>
			<div class="col-md-3"></div>
            <div class="col-md-6">
                <section class="panel">
                <div class="panel-body table-responsive">
                <center><h3>SISTEM PENGGAJIAN CV. SURYA AGUNG ENTERPRISE</h3><hr/>
                <?php echo $this->session->flashdata('pesan'); ?>
                <?php echo form_open('login/proses/',['class'=>'form-horizontal style-form']); ?>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-9">
                                  <input name="username" type="text" id="nama" class="form-control" placeholder="Username Anda" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-9">
                                  <input name="password" class="form-control" id="kelas" type="password" placeholder="Password Anda" required />
                              </div>
                          </div>

                          <div class="form-group" style="margin-bottom: 20px;">
                              <div class="col-sm-12">
                                  <input type="submit" value="LOGIN" class="btn btn-success" />&nbsp;
                              </div>
                          </div>
                          <div style="margin-top: 20px;"></div>
                          </center>
                          <hr/>
                          <h5>Belum punya akun karyawan !!! <?php echo anchor('login/register',"Daftar Disini."); ?></h5>
                      <?php form_close(); ?>
                </div>
                </section>
                <p>&nbsp;</p>
                <center><sub>Copyright &copy; SISTEM PENGGAJIAN CV. SURYA AGUNG ENTERPRISE, <?php echo date('Y'); ?></sub></center>
            </div>
            <div class="col-md-3"></div>
			</div>
        </div>
    </section>

		
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="http://localhost/perpuspetro/assets/admin/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url('assets/js/jquery.autocomplete.js');?>"></script>


    <script type="text/javascript">
        setTimeout(function(){$(".alert").fadeOut('slow');}, 3000);
    </script>

        <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <!-- daterangepicker -->
    <script src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js');?>" type="text/javascript"></script>

    <script src="<?php echo base_url('assets/js/plugins/chart.js');?>" type="text/javascript"></script>

    <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js');?>" type="text/javascript"></script>
        <!-- calendar -->
    <script src="<?php echo base_url('assets/js/plugins/fullcalendar/fullcalendar.js');?>" type="text/javascript"></script>

        <!-- Director App -->
    <script src="http://localhost/perpuspetro/assets/admin/js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('assets/js/Director/dashboard.js');?>" type="text/javascript"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>        
	
	<!-- jQuery Version 1.11.0 -->
 <script src="<?php echo base_url() ?>assets/jquery-1.11.0.js"></script>


<!--file include Bootstrap js dan datepickerbootstrap.js-->

<script src="<?php echo base_url(); ?>assets/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

<script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url();?>assets/ui/jquery.ui.core.js"></script>
	<script src="<?php echo base_url();?>assets/ui/jquery.ui.widget.js"></script>
	<script src="<?php echo base_url();?>assets/ui/jquery.ui.datepicker.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/themes/base/jquery.ui.all.css">

<!-- Fungsi datepickier yang digunakan -->
<script type="text/javascript">
 $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0,
  dateFormat:’yy-mm-dd’,
            changeMonth: true,
            changeYear: true
    });
</script> 


	
</body>
</html>
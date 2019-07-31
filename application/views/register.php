
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Penggajian CV. Indro Jaya</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By NewDev">
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/jquery.autocomplete.css');?>" rel="stylesheet">

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
	
	<!-- file bootstrap css yang digunakan-->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    </head>

    <body class="skin-black">
    <section class="content">
        <div class="row" style="margin-top:1%;">
            <div class="col-md-12">
			<center><img src="<?php echo base_url('assets/img/logo.png'); ?>" width="40%" class="img-circle" alt="User Image" /></center>
			<div class="col-md-3"></div>
            <div class="col-md-6">
				
                <section class="panel">
                <div class="panel-body table-responsive">
                <center><h3>SISTEM PENGGAJIAN CV. SURYA AGUNG ENTERPRISE</h3><hr/>
                <?php echo $this->session->flashdata('pesan'); ?>
                <?php echo form_open('login/daftar-proses/',['class'=>'form-horizontal style-form']); ?>

                <?php
                  $tes = $this->db->query("SELECT max(nik) AS last FROM karyawan");

                  foreach ($tes->result_array() as $value) {
                    $lastnotransaksi = $value['last'];
                    $lastnourut = substr($lastnotransaksi, 6,3);
                    $nextnourut = $lastnourut + 1;

                    $nextno = "SAE".sprintf('%06s', $nextnourut); ?>

                    <input type="hidden" name="nik" class="form-control" value="<?php echo $nextno; ?>" readonly>
                    <?php } ?>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Karyawan</label>
                              <div class="col-sm-9">
                                  <input name="nama_karyawan" type="text" id="nama" class="form-control" placeholder="Nama Lengkap Karyawan" required />
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-9">
                                <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat Karyawan"></textarea>
                              </div>
                          </div>
						  
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat lahir</label>
                              <div class="col-sm-4">
                                <input name="tempat" type="text" class="form-control"  placeholder="Tempat Lahir" required />
                               </div>
                          </div>
						  
						  <!-- <input type="date" class="form-control"> -->
						  
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal lahir</label>
                              <div class="col-sm-4">
                                <div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
								<input class="form-control datepicker" class="form-control" data-date-format="yyyy-mm-dd" type="text" name="tgl_lahir" id="dtp_input2" placeholder="Tanggal Lahir" required style="width:150px" />
								</div>
                               </div>
                          </div>
						  
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-4">
								<select class="form-control" name="status" >
									<option>Pilih Status</option>
								    <option value="Menikah">Menikah</option>
								    <option value="Belum Menikah">Belum Menikah</option>
								</select>
                                </div>
                          </div>
						  
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-4">
								<select class="form-control" name="jenis_kelamin" >
									<option>Pilih Jenis Kelamin</option>
								    <option value="Laki-Laki">Laki-Laki</option>
								    <option value="Perempuan">Perempuan</option>
								</select>
                                </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Jabatan</label>
                              <div class="col-sm-4">
                                <select class="form-control" name="bagian" >
                                  <option>Pilih Bagian</option>
                                  <?php
                                  $bagian = $this->db->get('bagian');
                                  foreach ($bagian->result() as $key => $value) {
                                    echo "<option value=".$value->bagian.">".$value->bagian."</option>";
                                  }
                                  ?>
                                </select>
                              </div>
                          </div>


                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-9">
                                  <input name="username" type="text" id="nama" class="form-control" placeholder="Username Anda" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-9">
                                  <input name="password" minlength="8" class="form-control" id="kelas" type="password" placeholder="Password Anda" required />
                              </div>
                          </div>

                          <div class="form-group" style="margin-bottom: 20px;">
                              <div class="col-sm-12">
                                  <input type="submit" name="simpan" value="DAFTAR" class="btn btn-success" />&nbsp;
                              </div>
                          </div>
                          <div style="margin-top: 20px;"></div>
                          </center>
                          <hr/>
                          <h5>Sudah Terdaftar !!! <?php echo anchor(base_url(),"Silahkan Login."); ?></h5>
                      <?php form_close(); ?>
                </div>
                </section>
                <p>&nbsp;</p>
                <center><sub>Copyright &copy; SISTEM PENGGAJIAN CV. SURYA AGUNG ENTERPRISE, <?php echo date('Y'); ?></sub></center>
            </div>
            <div class="col-md-3"></div>
        </div></div>
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
  forceParse: 0
    });
</script> 

</body>
</html>
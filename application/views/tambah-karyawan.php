<?php $this->load->view('head'); ?>
<!-- file bootstrap css yang digunakan-->

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
			<div class="col-md-12">
			<div class="tab-pane active" >
			    <?php echo $this->session->userdata('pesan'); ?>
                <?php echo form_open('karyawan/tambah-proses',['class'=>'form-horizontal style-form']); ?>
                  <?php
                  $tes = $this->db->query("SELECT max(nik) AS last FROM karyawan");

                  foreach ($tes->result_array() as $value) {
                    $lastnotransaksi = $value['last'];
                    $lastnourut = substr($lastnotransaksi, 6,3);
                    $nextnourut = $lastnourut + 1;

                    $nextno = "SAE".sprintf('%06s', $nextnourut); ?>

                    <input type="hidden" name="nik" class="form-control" value="<?php echo $nextno; ?>" readonly>
                    <?php } ?>


                        <table class="table table-bordered">
                            <tr class="success"><th colspan="2">BIODATA</th></tr>
							<tr><td width="150">Nama Karyawan</td>
                            <td>
                                <?php echo inputan('text', 'nama_karyawan','col-sm-8','Nama ..', 1, '','');?>
                            </td></tr>
							 <tr><td>Alamat</td>
							 <td>
                              <div class="col-sm-8">
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat Karyawan" required></textarea>
                              </div>
							 </td></tr>
							<tr><td>Tempat Lahir</td>
                             <td>
                                <?php echo inputan('text', 'tempat','col-sm-4','Tempat Lahir ..', 0, '','');?>	 
							</td></tr>
							
							<tr><td width="150">Tanggal Lahir</td>
                            <td>
                                <div class="col-sm-6">
								<div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
								<input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="text" name="tgl_lahir" id="dtp_input2" placeholder="Tanggal Lahir" required style="width:150px" />
								</div>	
								</div>	
                            </td></tr>
							<tr><td>Status</td>
                            <td>
                                <div class="col-sm-4">
								<select class="form-control" name="status">
									<option>Pilih Status</option>
								    <option value="Menikah">Menikah</option>
								    <option value="Belum Menikah">Belum Menikah</option>
								</select>
                                </div>
                           </td></tr>
						   <tr><td>Jenis Kelamin</td>
                           <td>
                                <div class="col-sm-4">
								<select class="form-control" name="jenis_kelamin">
									<option>Pilih Jenis Kelamin</option>
								    <option value="Laki-Laki">Laki-Laki</option>
								    <option value="Perempuan">Perempuan</option>
								</select>
                                </div>
                           </td></tr>
						   <tr><td>Jabatan</td>
                           <td>
                                 <div class="col-sm-4">
								 <select class="form-control" name="bagian">
                                  <option>Pilih Jabatan</option>
                                  <?php
                                  $bagian = $this->db->get('bagian');
                                  foreach ($bagian->result() as $key => $value) {
                                    echo "<option value=".$value->bagian.">".$value->bagian."</option>";
                                  }
                                  ?>
                                </select>
                                 </div>
                            </td></tr>
							
							<tr><td width="150">Username</td>
                            <td>
                                <?php echo inputan('text', 'username','col-sm-4','Username Untuk Login Karyawan', 1, '','');?>
                            </td></tr>
							<tr><td width="150">Password</td>
                            <td>
                                <div class="col-sm-4">
                                  <input name="password" type="password" id="no_induk" class="form-control" minlength="8" placeholder="Password Karyawan" required />
                                  <sup> Password Minimal 8 Karakter</sup>
                              </div>
								<sub>Minimal 8 Karakter</sub>
                            </td></tr>
							
							
						</table>
						 <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <input type="reset" value="RESET" class="btn btn-sm btn-info" />&nbsp;
                                  <?php echo anchor('karyawan','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
                              </div>
                          </div>
						  
						<div style="margin-top: 20px;"></div>
                      <?php echo form_close(); ?>
						 
			</div>	
			</div>
						
				<!-- sementara di hilangkan dulu  -->
				
         
            </div><!--end col-6 -->

        </div>
        <!-- row end -->
        </section><!-- /.content -->
        <div class="footer-main">
            Copyright &copy; SISTEM PENGGAJIAN CV. SURYA AGUNG ENTERPRISE, <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>
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
 
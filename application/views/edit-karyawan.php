<?php $this->load->view('head'); ?>
<!-- file bootstrap css yang digunakan-->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <section class="panel">
			<div class="col-md-12">
			<div class="tab-pane active" >
                <?php echo $this->session->userdata('pesan'); ?>
                <?php foreach ($karyawan as $key => $value) { ?>
                <?php echo form_open('karyawan/edit-proses/'.$value->nik,['class'=>'form-horizontal style-form']); ?>
			<table class="table table-bordered">
			<tr class="success"><th colspan="2">EDIT KARYAWAN</th></tr>
                            <tr><td width="150">Nama Karyawan</td>
                            <td>
							<div class="col-sm-8">
                                  <input name="nama_karyawan" type="text" id="no_induk" class="form-control" value="<?php echo $value->nama; ?>" placeholder="Nama Karyawan" required />
                            </div>
                            </td></tr>
							<tr><td>Alamat</td>
							 <td>
                              <div class="col-sm-8">
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat Karyawan" required><?php echo $value->alamat; ?></textarea>
                              </div>
							</td></tr>
							<tr><td>Tempat Lahir</td>
                             <td>
							  <div class="col-sm-4">
                                  <input name="tempat" type="text" id="tempat" class="form-control" value="<?php echo $value->tempat; ?>" placeholder="Tempat Lahir" required />
                              </div> 
							</td>
							</tr>
							<tr><td width="150">Tanggal Lahir</td>
                            <td>
                                <div class="col-sm-6">
								<div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
								<input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="text" name="tgl_lahir" id="dtp_input2" value="<?php echo $value->tgl_lahir; ?>" placeholder="Tanggal Lahir" required style="width:150px" />
								</div>	
								</div>	
                            </td></tr>
							<tr><td>Status</td>
                            <td>
                                <div class="col-sm-4">
								<select class="form-control" name="status" value="<?php echo $value->status; ?>">
									<option>Pilih Status</option>
								    <option value="Menikah">Menikah</option>
								    <option value="Belum Menikah">Belum Menikah</option>
								</select>
                                </div>
                           </td></tr>
						   <tr><td>Jenis Kelamin</td>
                           <td value="<?php echo $value->jenis_kelamin; ?>">
                                <div class="col-sm-4"  ><div class="col-sm-0"  >
								<select class="form-control" name="jenis_kelamin" >
									<option   >Pilih Jenis Kelamin</option>
								    <option value="Laki-Laki">Laki-Laki</option>
								    <option value="Perempuan">Perempuan</option>
								</select>
                                </div>
                                </div>
                           </td></tr>
							<tr><td width="150">Jabatan</td>
                            <td>
								<div class="col-sm-4">
                                <select class="form-control" name="bagian" >
                                  <?php
                                  $bagian = $this->db->get('bagian');
                                  foreach ($bagian->result() as $key => $bag) { ?>
                                    <option value="<?php echo $bag->bagian; ?>" <?php if($value->bagian == $bag->bagian){echo "selected";} ?>><?php echo $bag->bagian; ?></option>;
                                  <?php } ?>
                                </select>
                              </div>
                            </td></tr>
			</table>
			
					<div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <?php echo anchor('karyawan','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
                              </div>
                          </div>
			
			 <div style="margin-top: 20px;"></div>
                      <?php echo form_close(); ?>
                      <?php } ?>
			</div>	
			</div>
                
            </section>
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
 
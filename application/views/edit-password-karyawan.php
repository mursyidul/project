<?php $this->load->view('head'); ?>
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
                <?php echo form_open('karyawan/edit-password-proses/'.$value->nik,['class'=>'form-horizontal style-form']); ?>
			<table class="table table-bordered">
			<tr class="success"><th colspan="2">PASSWORD</th></tr>
                            <tr><td width="150">Password Lama</td>
                            <td>
							<div class="col-sm-8">
                                  <input name="pass_lama" type="password" id="no_induk" class="form-control" placeholder="Password Lama Karyawan" required />
                            </div>
                            </td></tr>
							<tr><td width="150">Password Baru</td>
                            <td>
							<div class="col-sm-8">
                                  <input name="pass_baru" type="password" minlength="8" id="no_induk" class="form-control" placeholder="Password Baru Karyawan" required />
                             </div>
							  <sub>Minimal 8 Karakter</sub>
                            </td></tr>
							<tr><td width="150">Konfirmasi Password</td>
                            <td>
							<div class="col-sm-8">
                                  <input name="konf_pass" type="password" minlength="8" id="no_induk" class="form-control" placeholder="Ketik Kembali Password Baru" required />
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
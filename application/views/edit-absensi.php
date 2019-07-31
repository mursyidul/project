<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <section class="panel">
            <header class="panel-heading">
            EDIT ABSENSI
            </header>
                <div class="panel-body table-responsive">
                <?php echo $this->session->userdata('pesan'); ?>
                <?php foreach ($absensi as $key => $value) { ?>
                <?php echo form_open('absensi/edit-proses/'.$value->nik,['class'=>'form-horizontal style-form']); ?>
                          <div class="form-group">
                              <label class="col-sm-1 control-label">NIK</label>
                              <div class="col-sm-4">
                                  <input name="nik" type="text" class="form-control" id="autocomplete1" value="<?php echo $value->nik; ?>" placeholder="Nomor Keanggotaan Karyawan" readonly />
                              </div>

                              <label class="col-sm-1 control-label">NAMA</label>
                              <div class="col-sm-4">
                                  <input name="nama" type="text" id="v_nama" value="<?php echo $value->nama; ?>" class="form-control" placeholder="Nama Lengkap Karyawan" readonly />
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-1 control-label">ALAMAT</label>
                              <div class="col-sm-4">
                                  <input name="Alamat" type="text" id="v_alamat" class="form-control" value="<?php echo $value->alamat; ?>" placeholder="Alamat Karyawan" readonly />
                              </div>
                              <label class="col-sm-1 control-label">BAGIAN</label>
                              <div class="col-sm-4">
                                  <input name="bagian" type="text" id="v_bagian" class="form-control" value="<?php echo $value->bagian; ?>" placeholder="Bagian Karyawan" readonly />
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-1 control-label">BULAN</label>
                              <div class="col-sm-4">
                                  <select class="form-control" name="bulan">
                                    <option>Pilih Bulan Terlebih Dahulu</option>
                                    <option value="Januari" <?php if($value->bulan == 'Januari'){ echo "selected";} ?> >Januari</option>
                                    <option value="Februari" <?php if($value->bulan == 'Februari'){ echo "selected";} ?>>Februari</option>
                                    <option value="Maret" <?php if($value->bulan == 'Maret'){ echo "selected";} ?> >Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-1 control-label">LEMBUR</label>
                              <div class="col-sm-4">
                                  <input name="lembur" type="number" class="form-control" value="<?php echo $value->lembur; ?>" placeholder="Jumlah Lembur Karyawan" required />
                              </div>
                              <label class="col-sm-1 control-label">ALPHA</label>
                              <div class="col-sm-4">
                                  <input name="alpha" type="number" class="form-control" value="<?php echo $value->alpha; ?>" placeholder="Jumlah Aplha Karyawan" required />
                              </div>
                          </div>

                          <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-1 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <?php echo anchor('absensi','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
                              </div>
                          </div>
                          <div style="margin-top: 20px;"></div>
                      <?php echo form_close(); ?>
                      <?php } ?>
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
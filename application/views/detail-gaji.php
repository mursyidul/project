<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo anchor('gaji',"<i class='fa fa-back'></i> Kembali",['class'=>'btn btn-sm btn-info']); ?><p></p>
            <section class="panel">
                <div class="panel-body table-responsive" id="print">
                <h4>Detail Gaji Karyawan</h4><hr/>
                  <table class="">
                  <?php foreach ($detail as $key => $value) { ?>
                  <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><b><?php echo $value->nik; ?></b></td>
                  </tr>
                    <tr>
                      <td>Nama Karyawan</td>
                      <td>:</td>
                      <td><?php echo $value->nama; ?></td>
                    </tr>
                    <tr>
                    <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td><?php echo $value->alamat; ?></td>
                    </tr>
                    <tr>
                      <td>Bagian</td>
                      <td>:</td>
                      <td><?php echo $value->bagian; ?></td>
                    </tr>
                    <tr>
                      <td>Bulan</td>
                      <td>:</td>
                      <td><?php echo $value->bulan; ?></td>
                    </tr>
                    <tr>
                      <td>Lembur</td>
                      <td>:</td>
                      <td><?php echo $value->lembur; ?></td>
                    </tr>
                    <tr>
                      <td>Alpha</td>
                      <td>:</td>
                      <td><?php echo $value->alpha; ?></td>
                    </tr>
                    <tr>
                      <td>Gaji Yang Di Terima</td>
                      <td>:</td>
                      <td>Rp. <?php echo number_format($value->total_gaji,0,',','.'); ?>,-</td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                      <td>
                        <?php echo anchor('gaji/validasi/'.$value->id_gaji,'Validasi',['class'=>'btn btn-sm btn-success']); ?>
                      </td>
                    </tr>
                  <?php } ?>
                    <tr></tr>
                  </table>
                </div>
            </section>
            </div><!--end col-6 -->

        </div>
        <!-- row end -->
        </section><!-- /.content -->
        <div class="footer-main">
            Copyright &copy; SISTEM PERPUSTAKAAN PT. PETROKIMIA GRESIK, <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>
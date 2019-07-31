<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php echo form_open('bagian/tambah-proses',['class'=>'form-horizontal style-form bulan']); ?>
            <div class="form-group">
                <div class="col-sm-3">
                <select class="form-control" name="bulan">
                    <option>Pilih Bulan Terlebih Dahulu</option>
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
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
                <div class="col-sm-1">
                    <a href="#" class="btn btn-primary kirim">PILIH</a>
                </div>
                <?php if($this->session->userdata('bagian') == 'hrd'){?>
                <div class="col-sm-3">
                    <?php echo anchor('absensi/tambah',"<i class='fa fa-plus'></i> Tambah Absensi Baru",['class'=>'btn btn-success']); ?>
                </div>
                <?php } ?>
            </div>
            <?php echo form_close(); ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">DATA ABSENSI
            </header>
            <div class="panel-body table-responsive">
            <table id="myTable" class="table table-hover tampil">
            <thead>
                <tr>
                    <th>Data Absensi</th>
                </tr>
            </thead>
            </table>
            </div>
            </section>
            <!--end col-6 -->

        </div>
        <!-- row end -->
        </section><!-- /.content -->
        <div class="footer-main">
            Copyright &copy; SISTEM PENGGAJIAN CV. SURYA AGUNG ENTERPRISE, <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>
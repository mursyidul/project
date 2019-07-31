<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php echo form_open('gaji',['class'=>'form-horizontal style-form gaji']); ?>
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
                    <a href="#" class="btn btn-primary kirim_gaji">PILIH</a>
                </div>
            </div>
            <?php echo form_close(); ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">DATA GAJI
            </header>
            <div class="panel-body table-responsive">
            <?php if($this->session->userdata('bagian') == 'direktur'){
                echo anchor('gaji/validasi-semua',"<span class='glyphicon glyphicon-check'></span> VALIDASI SEMUA",['class'=>'btn btn-sm btn-success']);
                echo "<p>&nbsp;</p>";
                }?>
            <table id="myTable" class="table table-hover tampil_gaji">
            <thead>
                <tr>
                    <th>sasas</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
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
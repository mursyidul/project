<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
            <?php echo anchor('karyawan/tambah',"<i class='fa fa-plus'></i> Tambah Karyawan Baru",['class'=>'btn btn-sm btn-success']); ?>
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data Karyawan
            </header>
                <div class="panel-body table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
							<th>Tempat</th>
							<th>Tgl Lahir</th>
                            <th>Status</th>
                            <th>Jenis Kelamin</th>
							<th>Jabatan</th>
                            
                            <?php if($this->session->userdata('bagian') == 'hrd'){ echo "<th>Aksi</th>";}?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $a=0; foreach ($karyawan as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->nik; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->alamat; ?></td>
                            <td><?php echo $value->tempat; ?></td>
                            <td><?php echo $value->tgl_lahir; ?></td>
							<td><?php echo $value->status; ?></td>
							<td><?php echo $value->jenis_kelamin; ?></td>
                            <td><?php echo $value->bagian; ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">
                            <?php echo anchor('karyawan/edit-password/'.$value->nik,"<span class='glyphicon glyphicon-pencil'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Password']); ?>

                            <?php echo anchor('karyawan/edit/'.$value->nik,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Karyawan']); ?>

                            <?php echo anchor('karyawan/hapus/'.$value->nik,"<span class='glyphicon glyphicon-trash'></span>",['class'=>'btn btn-sm btn-danger tooltips','onclick'=>"return confirm ('Yakin ingin hapus $value->nama ?')", 'data-toggle'=>'tooltip','title'=>'Hapus Karyawan', 'data-placement'=>'bottom']); ?>
                            </div>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
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
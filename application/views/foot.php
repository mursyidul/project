<!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery-ui-1.10.3.min.js'); ?>" type="text/javascript"></script>

        <script src="<?php echo base_url('assets/js/jquery.autocomplete.js');?>"></script>

        <script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(function(){
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/absensi/cari-karyawan',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#v_nama').val(''+suggestion.nama);
                    $('#v_alamat').val(''+suggestion.alamat);
                    $('#v_bagian').val(''+suggestion.bagian);

                }
            });
        });
        </script>


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
        <script src="<?php echo base_url('assets/js/Director/app.js'); ?>" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('assets/js/Director/dashboard.js');?>" type="text/javascript"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

        


        <script type="text/javascript">
        $(document).ready(function(){
            $('#myTable').DataTable();
            });
        </script>

        <script type="text/javascript">
        $(document).ready(function(){
            $('.tampil_gaji').load('<?php echo base_url().'gaji/cek' ?>');
            $(".kirim_gaji").click(function(){
                var data= $('.gaji').serialize();
                $.ajax({
                    type : 'POST',
                    url : '<?php echo base_url().'gaji/tes' ?>',
                    data : data,
                    success : function(){
                        $('.tampil_gaji').load('<?php echo base_url().'gaji/cek' ?>');
                    }
                });
            });
            });
        </script>

        <script type="text/javascript">
        $(document).ready(function(){
            $('.tampil').load('<?php echo base_url().'absensi/cek' ?>');
            $(".kirim").click(function(){
                var data= $('.bulan').serialize();
                $.ajax({
                    type : 'POST',
                    url : '<?php echo base_url().'absensi/tes' ?>',
                    data : data,
                    success : function(){
                        $('.tampil').load('<?php echo base_url().'absensi/cek' ?>');
                    }
                });
            });
            });
        </script>

        <script type="text/javascript">
        function printContent(el){
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
            }
        </script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>

<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 39, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>
</body>
</html>
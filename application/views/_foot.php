     
                    </div>     <!-- Row-fluid -->
                    
                </div>
            </div>
            
            
        </div>
        <footer class="footer">
            <p>DISHUB &copy; Bulukumba 2018</p>
        </footer>
        <!--/.fluid-container-->
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo base_url();?>assets/assets/scripts.js"></script>
        
        <script>
        $(function()
        {
        //     // Easy pie charts
        //     $('#coba').load('<?= base_url('utama/kendaraan') ?>')
         $('.chart').easyPieChart({animate: 1000});
        });  
        
        $('#kendaraan').click(function() {
            $('#coba').html("<img id='animated' src='<?= base_url('assets/images/loading.gif') ?>'>");
            $('#coba').load('<?= base_url('kendaraan/'.$this->trayek->encode('kendaraan')) ?>',function(one,two,tree) {
                if (tree.status != 200) {
                    $('#coba').html("<div class='alert alert-block alert-danger'>Halaman tidak dapat dimuat</div>")
                }
            });
            history.pushState('..','..','<?= base_url('kendaraan/'.$this->trayek->encode('kendaraan')) ?>')
        })
        $('#rute').click(function() {
            $('#coba').html("<img id='animated' src='<?= base_url('assets/images/loading.gif') ?>'>");
            $('#coba').load('<?= base_url('jalur/'.$this->trayek->encode('jalur')) ?>',function(one,two,tree) {
                if (tree.status != 200) {
                    $('#coba').html("<div class='row-fluid'><div class='block'><div class='alert alert-block alert-danger'>Halaman tidak dapat dimuat</div></div></div>")
                }
            });
            history.pushState('..','..','<?= base_url('jalur/'.$this->trayek->encode('jalur')) ?>')
        }) 
        $('#user').click(function() {
            $('#coba').html("<img id='animated' src='<?= base_url('assets/images/loading.gif') ?>'>");
            $('#coba').load('<?= base_url('akunt/'.$this->trayek->encode('akunt')) ?>',function(one,two,tree) {
                if (tree.status != 200) {
                    $('#coba').html("<div class='row-fluid'><div class='block'><div class='alert alert-block alert-danger'>Halaman tidak dapat dimuat</div></div></div>")
                }
            });
            history.pushState('..','..','<?= base_url('akunt/'.$this->trayek->encode('akunt')) ?>')
        }) 
         $('#jkendaraan').click(function () {
            $('#coba').html("<img id='animated' src='<?= base_url('assets/images/loading.gif') ?>'>");
            $('#coba').load('<?= base_url('jkendaraan/'.$this->trayek->encode('jkendaraan')) ?>',function(one,two,tree) {
                if (tree.status != 200) {
                    $('#coba').html("<div class='row-fluid'><div class='block'><div class='alert alert-block alert-danger'>Halaman tidak dapat dimuat</div></div></div>")
                }
            });
            history.pushState('..','..','<?= base_url('jkendaraan/'.$this->trayek->encode('jkendaraan')) ?>')
        })
        $('#pembuatan').click(function() {
            $('#coba').load('<?= base_url('utama/penerbitan')?>')
        }) 
         $('#kecamatan').click(function() {
            $('#coba').load('<?= base_url('utama/kecamatan')?>')
        }) 
        
       
        </script>
    </body>

</html>
     
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
        // $(function()
        // {
        //     // Easy pie charts
        //     $('#coba').load('<?= base_url('utama/kendaraan') ?>')
        //     //$('.chart').easyPieChart({animate: 1000});
        // });  
        $('#kendaraan').click(function() {
            $('#coba').html("<img id='animated' src='<?= base_url('assets/images/loading.gif') ?>'>");
            $('#coba').load('<?= base_url('kendaraan/'.$this->trayek->encode('kendaraan')) ?>',function(one,two,tree) {
                if (tree.status != 200) {
                    $('#coba').html("<div class='alert alert-block alert-danger'>Halaman tidak dapat dimuat</div>")
                }
            });
            history.pushState('..','..','<?= base_url('kendaraan/'.$this->trayek->encode('kendaraan')) ?>')
        })
        $('#kecamatan').click(function() {
            $('#coba').load('<?= base_url('utama/kecamatan')?>')
        }) 
        $('#rute').click(function() {
            $('#coba').load('<?= base_url('utama/rute')?>')
        }) 
        $('#pembuatan').click(function() {
            $('#coba').load('<?= base_url('utama/penerbitan')?>')
        }) 
        $('#user').click(function() {
            $('#coba').load('<?= base_url('utama/user')?>')
        }) 
        </script>
    </body>

</html>
                <!-- Page Footer-->
                <input type = text id="baseUrl" value="<?echo base_url();?>"  style="display:none">
                <input type = text id="id" value="<?echo $id;?>"  style="display:none">
                <input type = text id="token" value="<?echo  $token;?>"  style="display:none">
                <input type = text id="field" value="<?echo  $field;?>"  style="display:none">
                <footer class="main-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>OneCash Technologies &copy; 2020</p>
                            </div>
                        </div>
                    </div>
                </footer>
                </div>
                </div>
                </div>
                <!-- JavaScript files-->
                <script src="<?=base_url()?>public/vendor/jquery/jquery.min.js"></script>
                <script src="<?=base_url()?>public/vendor/popper.js/umd/popper.min.js"> </script>
                <script src="<?=base_url()?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
                <script src="<?=base_url()?>public/vendor/jquery.cookie/jquery.cookie.js"> </script>
                <script src="<?=base_url()?>public/vendor/chart.js/Chart.min.js"></script>
                <script src="<?=base_url()?>public/vendor/jquery-validation/jquery.validate.min.js"></script>
                <script src="<?=base_url()?>public/js/charts-home.js"></script>
                <!-- Main File-->
                <script src="<?=base_url()?>public/js/front.js"></script>
                 <!-- required scripts -->
                 <script src="<?=base_url()?>public/requests/logout.js"></script>

                 <!-- scripts to loaded based on the current page -->
                 <?php if (base_url() . 'city_authority/dashboard' == current_url()): ?>
                    <!-- scripts to be loaded -->
                    <!-- <script src="<?=base_url()?>public/requests/city_authority/add_members.js"></script> -->

                 <?php endif;?>
                 
                 <?php if (base_url() . 'city_authority/addMembers' == current_url()): ?>
                    <!-- scripts to be loaded -->
                    <script src="<?=base_url()?>public/requests/city_authority/add_members.js"></script>

                 <?php endif;?>

                 <?php if (base_url() . 'city_authority/loadMembers' == current_url()): ?>
                    <!-- scripts to be loaded -->
                    <script src="<?=base_url()?>public/requests/city_authority/get_members.js"></script>

                 <?php endif;?>
                </body>

                </html>
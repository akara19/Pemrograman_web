<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"
        rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('assets/css/metisMenu.min.css'); ?>" 
        rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?php echo base_url('assets/css/timeline.css'); ?>" 
        rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('assets/css/startmin.css'); ?>"
        rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo base_url('assets/css/morris.css'); ?>"
        rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>"
        rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="wrapper">

            <!-- Top Navigation -->
            <?php $this->load->view('menu_atas'); ?>

            <!-- Sidebar -->
            <?php $this->load->view('menu_samping'); ?>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Input Data Group Barang</h1>
                        </div>
                    </div>

                    <div class="row">
						<div class="col-lg-12">
							<div class="panel-body">
								<form class="form" method="post"
								action="<?php echo base_url('index.php/Barang_group/Add');?>"> 
									<div class="form-group">
										<label> Group Barang </label>
										<input type="text" 
											class="form-control" 
											name="nama" />
									</div>
									<div class="form-group" >
										<input type="submit" 
										class="form-control btn btn-success"
										value="Simpan"/>
									</div>
									
									<div class="form-group">
										<a href="<?php echo base_url('index.php/Barang_group/Select'); ?>" 
										class="btn btn-warning form-control" >
										Lihat Data
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>

                </div>
            </div>

        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('assets/js/metisMenu.min.js');?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('assets/js/startmin.js');?>"></script>

    </body>

</html>
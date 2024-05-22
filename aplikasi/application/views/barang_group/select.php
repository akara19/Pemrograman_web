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
		
		
		<!-- data tables -->
		
        <!-- DataTables CSS -->
        <link href="<?php echo base_url('assets/css/dataTables/dataTables.bootstrap.css');?>" 
		rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?php echo base_url('assets/css/dataTables/dataTables.responsive.css');?>" 
		rel="stylesheet">

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
                            <h1 class="page-header">Data Group Barang</h1>
                        </div>
                    </div>

                    <div class="row">
						<div class="col-lg-12">
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered">
										<thead>
											<th>No.</th>
											<th>Nama Group</th>
											<th>Aksi</th>
										</thead>
										<!-- untuk mengambil data pada controller -->
										<?php 
											/* membuat nomor urut */
											$no=0;
											foreach ($data as $_data){ 
											$no++;
										?>
											<tr>
												<td> <?php echo $no; ?></td>
												<td> <?php echo $_data->Nama; ?> </td>
												<td>
													<?php 
														echo anchor('Barang_group/Hapus/'.$_data->Id,'Hapus','');
													?>
												</td>
											</tr>
										<?php } ?>
									</table>
								</div>
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

		<!-- Data tables -->
		 <!-- DataTables JavaScript -->
        <script src="<?php echo base_url('assets/js/dataTables/jquery.dataTables.min.js');?>">
		</script>
        <script src="<?php echo base_url('assets/js/dataTables/dataTables.bootstrap.min.js');?>">
		</script>

    </body>

</html>
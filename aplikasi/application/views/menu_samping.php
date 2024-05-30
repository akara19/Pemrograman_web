<aside class="sidebar navbar-default" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
						<?php
							/* Untuk mengambil data menu utama ataau menu yg memiliki
							status Is_main=0 */
							$main_menu = $this->db->get_where('menu',array('Is_main'=>0));
							foreach($main_menu->result() as $main){
						?>
							<!-- Begin Main menu -->
							<li>
							<!-- ================ -->
								<a href="#"><i class="fa fa-sitemap fa-fw"></i> 
								<?php echo $main->Nama; ?><span class="fa arrow"></span>
								</a>	
								<!-- Mencari sub menu -->
								<?php
									$sub_menu = $this->db->get_where('menu',array('Is_main'=>$main->Id));
									foreach ($sub_menu->result() as $sub){
								?>
									<ul class="nav nav-second-level">
										<li>
											<a href="<?php echo base_url('index.php/').$sub->Link; ?>">
											<?php echo $sub->Nama; ?>
											</a>
										</li>
									</ul>			
								<?php 
									/* End Foreach sub*/
									} 
								?>
									
								<!-- -->
							<!-- End main menu-->
							</li>
							<!-- ============ -->
						<?php
							/* End foreach main_menu*/
							}
						?>
                        <!-- <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Data Pendukung<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('index.php/Barang_group'); ?>">Group Barang</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                    </ul>

                </div>
            </aside>
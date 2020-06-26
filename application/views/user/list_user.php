
    <section class="content">
    	<div class="container-fluid">
    		<div class="block-header">
    			<h2>MANAJEMEN USER</h2>
    		</div>

    		<!-- Basic Examples -->
    		<div class="row clearfix">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<div class="card">
    					<div class="header">
    						<h2 style="font-size: 22px;color:#ad1455;font-weight: bold;">
    							<center>LIST USER ADMIN </center>
    						</h2> <br><br>
    						<a href="<?= base_url(); ?>User/add/">
    							<button type="button" class="btn btn-info waves-effect">
    								<i class="material-icons">add</i>
    								<span>TAMBAH</span>
    							</button>
    						</a>
    					</div>

    					<div class="body">
    						<div class="table-responsive">
    							<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
    								<thead>
    									<tr>
    										<th>No</th>
    										<th>Nama</th>
    										<th>Username</th>
    										<th>Status</th>
    										<th>Dibuat/Diedit oleh</th>
    										<th>Create Date</th>
    										<th style="text-align: center;">ACTION</th>
    									</tr>
    								</thead>

    								<tbody>


    									
    										<tr>
    											<td>1</td>
    											<td>Wahid</td>
    											<td>WahidEmoy</td>
    											<td>Pegawai</td>
    											<td>Admin 1</td>
    											<td>25 Feb 2020</td>
    											<td style="text-align: center;vertical-align: middle;">
    												<center>
    													<a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i style="color:#00b0e4;" class="material-icons">description</i></a>&nbsp;
    													<!-- <a href="#" id="btn_posisi" title="Delete" data-id="" data-toggle="modal" data-target="#deleteModal"><i style="color:red;" class="material-icons">delete</i></a> -->
    												</center>
    											</td>
    										</tr>

    									
    								</tbody>
    							</table>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>

    		<!-- #END# Basic Examples -->
    	</div>
    	</div>
    </section>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
    				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">×</span>
    				</button>
    			</div>
    			<div class="modal-body">Apakah anda yakin ingin menghapus data user ini ?</div>
    			<div class="modal-footer">
    				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    				<a id="hapus_nyo" class="btn btn-primary" href="#">Delete</a>
    			</div>
    		</div>
    	</div>
    </div> -->

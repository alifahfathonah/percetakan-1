<?php $this->load->view("script_header");?>
<?php $this->load->view('header');?>
<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<div id="sidebar" class="sidebar responsive ace-save-state">
		<?php $this->load->view("menu");?>
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Beranda</a>
					</li>
					<li class="active">Lokasi</li>
				</ul><!-- /.breadcrumb -->

				<div class="nav-search" id="nav-search">
					<form class="form-search">
						<span class="input-icon">
							<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
							<i class="ace-icon fa fa-search nav-search-icon"></i>
						</span>
					</form>
				</div><!-- /.nav-search -->
			</div>

			<div class="page-content">
				<div class="page-header">
					<h1>
						Lokasi
						<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							Lokasi
						</small>
					</h1>
				</div>

				<div class="row">
					<div class="col-xs-12" style="margin-bottom:10px;">
						<a href="<?php echo base_url('location/index');?>">
							<button class="btn" type="button">
								<i class="ace-icon fa fa-undo"></i>
								Kembali
							</button>
						</a>
					</div>
					<div class="col-xs-12">
						<?php if(validation_errors() != ""){?>
							<div class="alert alert-danger form-group">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php echo validation_errors();?>
							</div>
						<?php } ?>

						<?php if($this->session->flashdata('error') != ""){?>
							<div class="alert alert-danger form-group">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php echo $this->session->flashdata('error');?>
							</div>
						<?php } ?>
						
						<div class="table-header">
							Ubah Data Lokasi
						</div>
					</div>

					<?php
						$inputs = $this->session->flashdata('inputs');
					?>

					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" role="form" style="margin: 15px 0px;" method="post" action="<?php echo base_url('location/processEdit');?>">
							<input type="hidden" name="id" value="<?php echo $location->id_location;?>">
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Kode Lokasi</label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1-1" placeholder="Kode Lokasi" class="form-control" required name="kode_lokasi" 
									value="<?php if(!empty($inputs)){echo $inputs['code_location'];}else{ echo $location->code_location; }?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Nama</label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1-1" placeholder="Nama" class="form-control" required name="nama" 
									value="<?php if(!empty($inputs['name_location'])){ echo $inputs['name_location'];}else{ echo $location->name_location;}?>" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Alamat</label>

								<div class="col-sm-9">
									<textarea name="alamat" id="edi" rows="10" cols="50" style="width: 100%"><?php if(!empty($inputs['address_location'])){ echo $inputs['address_location'];}else{ echo $location->address_location;}?></textarea>
								</div>
							</div>
<!-- 
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Kecamatan</label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1-1" placeholder="Kecamatan" class="form-control" required name="kecamatan" 
									value="<?php if(empty($inputs['kecamatan'])){ echo $location->kecamatan; }else{ echo $inputs['kecamatan'];}?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Kota</label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1-1" placeholder="Kota" class="form-control" required name="kota" 
									value="<?php if(empty($inputs['kota'])){ echo $location->kota; }else{ echo $inputs['kota'];}?>"/>
								</div>
							</div> -->

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Email</label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1-1" placeholder="Email" class="form-control" required name="email" 
									value="<?php if(empty($inputs['email'])){ echo $location->email; }else{ echo $inputs['email'];}?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Telepon</label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1-1" placeholder="Telepon" class="form-control" required name="tlp" 
									value="<?php if(empty($inputs['tlp'])){ echo $location->tlp; }else{ echo $inputs['tlp'];}?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Nama Bank</label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1-1" placeholder="Nama Bank" class="form-control" required name="bank_account" 
									value="<?php if(!empty($inputs)){echo $inputs['bank_account'];}else{ echo $location->bank_account; }?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Nama Rekening</label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1-1" placeholder="Nama Rekening" class="form-control" required name="bank_account_name" 
									value="<?php if(!empty($inputs)){echo $inputs['bank_account_name'];}else{ echo $location->bank_account_name; }?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Nomor Rekening</label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1-1" placeholder="Nomor Rekening" class="form-control" required name="bank_no" 
									value="<?php if(!empty($inputs)){echo $inputs['bank_no'];}else{ echo $location->bank_no; }?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Sosial Media</label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1-1" placeholder="Instagram" class="form-control" required name="ig" 
									value="<?php if(empty($inputs['ig'])){ echo $location->ig; }else{ echo $inputs['ig'];}?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Status</label>

								<div class="col-sm-9">
									<select name="status"  data-placeholder="Click to Choose...">
										<?php
											if(!empty($inputs['status'])){
										?>
											<?php
												if($inputs['status'] == 0){
											?>
												<option value="0" selected>Tidak Aktif</option>
												<option value="1">Aktif</option>
											<?php
												}else{
											?>
												<option value="0">Tidak Aktif</option>
												<option value="1" selected>Aktif</option>
											<?php
												}
											?>
										<?php }else{ ?>
											<?php if($location->status == 0){?>
												<option value="0" selected>Tidak Aktif</option>
												<option value="1">Aktif</option>
											<?php }else{ ?>
												<option value="0">Tidak Aktif</option>
												<option value="1" selected>Aktif</option>
											<?php }?>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="clearfix form-actions">
								<div class="col-md-offset-3 col-md-9">
									<button class="btn btn-info" type="submit">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Simpan
									</button>

									&nbsp; &nbsp; &nbsp;
									<a href="<?php echo base_url('location/index');?>">
										<button class="btn" type="button">
											<i class="ace-icon fa fa-undo"></i>
											Kembali
										</button>
									</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->
	<?php $this->load->view('footer');?>
</div><!-- /.main-container -->
<?php $this->load->view('script_footer');?>

<?php $__env->startSection('content'); ?>
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add Supplier</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Supplier</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body custom-edit-service">
									
							
								<!-- Add Medicine -->
								<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="purchase">
									<input type="hidden" name="csrf_token_name" value="0146f123a4c7ae94253b39bca6bd5a5e">

									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label>Name<span class="text-danger">*</span></label>
													<input type="hidden" name="name" id="name" value="18">
													<input class="form-control" type="text" name="name" id="name" value="" required="">
												</div>
											</div>
											<div class="col-lg-6">
												<label>Email<span class="text-danger">*</span></label>
												<input type="hidden" name="email" id="email" value="18">
												<input class="form-control" type="text" name="email" id="email" value="" required="">
											</div>
										</div>
									</div>

									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label>Phone<span class="text-danger">*</span></label>
													<input type="hidden" name="phone" id="phone" value="18">
													<input class="form-control" type="text" name="phone" id="phone" value="" required="">
												</div>
											</div>
											<div class="col-lg-6">
												<label>Company<span class="text-danger">*</span></label>
												<input type="hidden" name="company" id="company" value="18">
												<input class="form-control" type="text" name="company" id="company" value="" required="">
											</div>
										</div>
									</div>

									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<label>Address <span class="text-danger">*</span></label>
													<textarea id="address" class="form-control service-desc" name="address"></textarea>
												</div>
											</div>
										</div>
									</div>			
									
									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-12">
												<div class="service-upload">
													<i class="fas fa-cloud-upload-alt"></i>
													<span>Upload Supplier Image *</span>
													<input type="file" name="images[]" id="images" multiple="" accept="image/jpeg, image/png, image/gif,">
												
												</div>	
												<div id="uploadPreview">
													<ul class="upload-wrap">
														<li>
															<div class=" upload-images">
																<img alt="Blog Image" src="../assets_admin/img/product/product1.jpg">
															</div>
														</li>
													</ul>
												</div>
												
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
									</div>
								</form>
								<!-- /Add Medicine -->


								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout_pharmacy_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doccure_laravel\template\resources\views/pharmacy-admin/add-supplier.blade.php ENDPATH**/ ?>
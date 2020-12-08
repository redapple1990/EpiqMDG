
<?php $__env->startSection('content'); ?>
	<!-- Page Wrapper -->
    <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add Purchase</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Purchase</li>
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
													<label>Medicine Name<span class="text-danger">*</span></label>
													<input type="hidden" name="brand_name" id="brand_name" value="18">
													<input class="form-control" type="text" name="brand_name" id="brand_name" value="" required="">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label>Category <span class="text-danger">*</span></label>
													<select class="form-control select" name="category" required=""> 
														<option value="1">Phytopathology</option>
														<option value="2" selected="selected">Injuries</option>
														<option value="3">Cancer</option>
														<option value="4">Animal diseases</option>
														<option value="5">Growth disorders</option>
														<option value="6">Rare diseases</option>
														<option value="7">Neoplasms</option>
														<option value="8">Inflammations</option>
														<option value="9">Sleep disorders</option>
														<option value="10">Infectious diseases</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									
									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label>Price<span class="text-danger">*</span></label>
													<input type="hidden" name="Price" id="Price" value="18">
													<input class="form-control" type="text" name="Price" id="Price" value="$" required="">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label>Quantity<span class="text-danger">*</span></label>
													<input type="hidden" name="quantity" id="quantity" value="18">
													<input class="form-control" type="text" name="quantity" id="quantity" value="" required="">
												</div>
											</div>
										</div>
									</div>

									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label>Expire Date<span class="text-danger">*</span></label>
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
									</div>
									
									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-12">
												<div class="service-upload">
													<i class="fas fa-cloud-upload-alt"></i>
													<span>Upload Product Images *</span>
													<input type="file" name="images[]" id="images" multiple="" accept="image/jpeg, image/png, image/gif,">
												
												</div>	
												<div id="uploadPreview">
													<ul class="upload-wrap">
														<li>
															<div class=" upload-images">
																<img alt="Blog Image" src="../assets_pharmacy/img/product/product1.jpg">
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
<?php echo $__env->make('layout.mainlayout_pharmacy_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doccure_laravel\template\resources\views/pharmacy-admin/add-purchase.blade.php ENDPATH**/ ?>
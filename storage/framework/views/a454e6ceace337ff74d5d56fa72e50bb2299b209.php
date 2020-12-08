<!-- Sidebar -->
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="<?php echo e(Request::is('pharmacy-admin/index_pharmacy_admin') ? 'active' : ''); ?>"> 
								<a href="index_pharmacy_admin"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Products</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php echo e(Request::is('pharmacy-admin/products','pharmacy-admin/edit-product') ? 'active' : ''); ?>" href="<?php echo e(url('pharmacy-admin/products')); ?>">Products</a></li>
									<li><a class="<?php echo e(Request::is('pharmacy-admin/add-product') ? 'active' : ''); ?>" href="<?php echo e(url('pharmacy-admin/add-product')); ?>">Add Product</a></li>
									<li><a class="<?php echo e(Request::is('pharmacy-admin/outstock') ? 'active' : ''); ?>" href="<?php echo e(url('pharmacy-admin/outstock')); ?>">Out-Stock</a></li>
									<li><a class="<?php echo e(Request::is('pharmacy-admin/expired') ? 'active' : ''); ?>" href="<?php echo e(url('pharmacy-admin/expired')); ?>">Expired</a></li>
								</ul>
							</li>
							<li class="<?php echo e(Request::is('pharmacy-admin/categories') ? 'active' : ''); ?>"> 
								<a href="categories"><i class="fe fe-layout"></i> <span>Categories</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-star-o"></i> <span> Purchase</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php echo e(Request::is('pharmacy-admin/purchase','pharmacy-admin/edit-purchase') ? 'active' : ''); ?>" href="<?php echo e(url('pharmacy-admin/purchase')); ?>">Purchase</a></li>
									<li><a class="<?php echo e(Request::is('pharmacy-admin/add-purchase') ? 'active' : ''); ?>" href="<?php echo e(url('pharmacy-admin/add-purchase')); ?>">Add Purchase</a></li>
									<li><a class="<?php echo e(Request::is('pharmacy-admin/order') ? 'active' : ''); ?>" href="<?php echo e(url('pharmacy-admin/order')); ?>">Order</a></li>
								</ul>
							</li>
							<li class="<?php echo e(Request::is('pharmacy-admin/sales') ? 'active' : ''); ?>"><a href="sales"><i class="fe fe-activity"></i> <span>Sales</span></a></li>
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Supplier</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php echo e(Request::is('pharmacy-admin/supplier') ? 'active' : ''); ?>" href="<?php echo e(url('pharmacy-admin/supplier')); ?>">Supplier</a></li>
									<li><a class="<?php echo e(Request::is('pharmacy-admin/add-supplier') ? 'active' : ''); ?>" href="<?php echo e(url('pharmacy-admin/add-supplier')); ?>">Add Supplier</a></li>
								</ul>
							</li>
							<li class="<?php echo e(Request::is('pharmacy-admin/transactions-list') ? 'active' : ''); ?>"><a href="transactions-list"><i class="fe fe-table"></i> <span>Transaction</span></a></li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php echo e(Request::is('pharmacy-admin/invoice-report') ? 'active' : ''); ?>" href="<?php echo e(url('pharmacy-admin/invoice-report')); ?>">Invoice Reports</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li class="<?php echo e(Request::is('pharmacy-admin/product-list') ? 'active' : ''); ?>">
							<a href="product-list"><i class="fe fe-layout"></i> <span>Product List</span></a>
							</li>
							<li class="<?php echo e(Request::is('pharmacy-admin/profile') ? 'active' : ''); ?>"> 
								<a href="profile"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
							</li>
							<li class="<?php echo e(Request::is('pharmacy-admin/settings') ? 'active' : ''); ?>"> 
								<a href="settings"><i class="fe fe-vector"></i> <span>Settings</span></a>
							</li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar --><?php /**PATH D:\Alex-Medical\EpiqMD\resources\views/layout/partials/nav_pharmacy_admin.blade.php ENDPATH**/ ?>

<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.html">
					<h3 class="color-danger">Admin Panal</h3>
					<!-- <img src="<?php echo base_url(); ?>/backend/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" /> -->
					<img
						src="<?php echo base_url(); ?>/backend/vendors/images/deskapp-logo-white.svg"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<!-- <li class="dropdown">
							<a href="<?php echo site_url(); ?>/admin/AdminDashboard">
								<span class="micon bi bi-house"></span
								><span class="mtext">Dashboard</span>
							</a>
						</li> -->
						<li>
							<a href="<?php base_url(); ?>/AdminDashboard" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-house"></span>
								<span class="mtext">Dashboard</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span>
								<span class="mtext">Department</span>
							</a>
							<ul class="submenu">
								<li><a href="<?php base_url(); ?>/addDepartment">Add Department</a></li>
								<li><a href="<?php base_url(); ?>/viewDepartment">View All Department</a></li>
							</ul>
						</li>

                        <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span>
								<span class="mtext">Staff</span>
							</a>
							<ul class="submenu">
								<li><a href="<?php base_url(); ?>/addStaff">Add Staff</a></li>
								<li><a href="<?php base_url(); ?>/viewStaff">View Staff</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span>
								<span class="mtext">Salary</span>
							</a>
							<ul class="submenu">
								<li><a href="<?php base_url(); ?>/addSalary">Add Salary</a></li>
								<li><a href="<?php base_url(); ?>/viewSalary">Manage Salary</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span>
								<span class="mtext">Leave</span>
							</a>
							<ul class="submenu">
								<li><a href="<?php base_url(); ?>/addLeave">Manage Staff Leave</a></li>
								<li><a href="<?php base_url(); ?>/viewLeave">Leave History</a></li>
							</ul>
						</li>

						
						<li>
							<a href="invoice.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-receipt-cutoff"></span>
								<span class="mtext">Invoice</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>


			<!-- employee panal -->
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<i class="fa fa-users" aria-hidden="true"></i>
								<span class="mtext">Employee</span>
							</a>
							<ul class="submenu">
								<li><a href="<?php base_url(); ?>/#">Salary</a></li>
								<li><a href="<?php base_url(); ?>/#">Leave</a></li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</div>
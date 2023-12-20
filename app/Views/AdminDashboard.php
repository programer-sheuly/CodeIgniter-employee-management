<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>


 <!-------------------------------- start Content ------------------------------------------->



 <!-------------------------------- header part ------------------------------------------->
 <div class="page-header">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="title">
				<h4>Dashboard</h4>
			</div>
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						Dashboard
					</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-6 col-sm-12 text-right">
			<div class="dropdown">
				<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					January 2018
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="#">Export List</a>
					<a class="dropdown-item" href="#">Policies</a>
					<a class="dropdown-item" href="#">View Assets</a>
				</div>
			</div>
		</div>
	</div>
</div>
 <!-------------------------------- header part end ------------------------------------------->

 <!-------------------------------- main part start ------------------------------------------->



 <div class="row clearfix progress-box">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial1"
									value="80"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#1b00ff"
									data-angleOffset="180"
									readonly
								/>
								<h5 class="text-blue padding-top-10 h5">Department</h5>
								<h3 class="font-weight-border mb-0">
									<!-- start show dashboard count department -->
									<?= $depCount?> 
									<!--end show dashboard count department -->
								</h3>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial2"
									value="70"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#00e091"
									data-angleOffset="180"
									readonly
								/>
								<h5 class="text-light-green padding-top-10 h5">
									Staff
								</h5>
								<h3 class="font-weight-border mb-0">
									<!-- start show dashboard count department -->
									<?= $staffCount?> 
									<!--end show dashboard count department -->
								</h3>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial3"
									value="90"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#f56767"
									data-angleOffset="180"
									readonly
								/>
								<h5 class="text-light-orange padding-top-10 h5">
									Salary
								</h5>
								<h3 class="font-weight-border mb-0">
									<!-- start show dashboard count department -->
									<?= $salaryCount?> 
									<!--end show dashboard count department -->
								</h3>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial4"
									value="65"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#a683eb"
									data-angleOffset="180"
									readonly
								/>
								<h5 class="text-light-purple padding-top-10 h5">
									Leave
								</h5>
								<h3 class="font-weight-border mb-0">
									<!-- start show dashboard count department -->
									<?= $leaveCount?> 
									<!--end show dashboard count department -->
								</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-7 col-md-12 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<h4 class="mb-30 h4">Compliance Trend</h4>
							<div id="compliance-trend" class="compliance-trend"></div>
						</div>
					</div>
					<div class="col-lg-5 col-md-12 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<h4 class="mb-30 h4">Records</h4>
							<div id="chart" class="chart"></div>
						</div>
					</div>
				</div>

 <!--------------------------------------- End Content -------------------------------------------->

<?= $this->endSection() ?>
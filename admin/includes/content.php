<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-md-3">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Products</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= Product::count_all(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
	    <div class="col-md-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Comments</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= Comment::count_all(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
	    <div class="col-md-3">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Users</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
	                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?= User::count_all(); ?>
	                                </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	    <div class="col-md-3">
		    <div class="card border-left-info shadow h-100 py-2">
			    <div class="card-body">
				    <div class="row no-gutters align-items-center">
					    <div class="col mr-2">
						    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Views</div>
						    <div class="row no-gutters align-items-center">
							    <div class="col-auto">
								    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?= $session->count; ?>
								    </div>
							    </div>

						    </div>
					    </div>
					    <div class="col-auto">
						    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>

    </div>
	<div class="row">
		<div class="col-12">
			<div id="piechart" style="width:900px; height:500px;">

			</div>

			<div>
				<?=  $session->count;  ;?>
			</div>
		</div>
	</div>



    <!-- Content Row -->


</div>
<!-- /.container-fluid -->

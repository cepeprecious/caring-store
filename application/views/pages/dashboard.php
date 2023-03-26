<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="deznav">
	<div class="deznav-scroll">
		<ul class="metismenu" id="menu">
			<li class="mm-active"><a class="" href="<?php echo base_url('/'); ?>" aria-expanded="false">
					<i class="flaticon-381-networking"></i>
					<span class="nav-text">Dashboard</span>
				</a>

			</li>
			<li class=""><a class="" href="<?php echo base_url('/accessibility'); ?>" aria-expanded="false">
					<i class="flaticon-381-enter"></i>
					<span class="nav-text">Product Quality</span>
				</a>

			</li>
			<li class=""><a class="" href="<?php echo base_url('/empathy'); ?>" aria-expanded="false">
					<i class="flaticon-381-heart"></i>
					<span class="nav-text">Service Quality</span>
				</a>

			</li>
			<li class=""><a class="" href="<?php echo base_url('/responsetime'); ?>" aria-expanded="false">
					<i class="flaticon-381-alarm-clock"></i>
					<span class="nav-text">Quality Management</span>
				</a>

			</li>
			<li class=""><a class="" href="<?php echo base_url('/loyalprograms'); ?>" aria-expanded="false">
					<i class="flaticon-381-file"></i>
					<span class="nav-text">Customer Loyalty</span>
				</a>

			</li>
			<li class=""><a class="" href="<?php echo base_url('/archive'); ?>" aria-expanded="false">
					<i class="flaticon-381-archive"></i>
					<span class="nav-text">Archive</span>
				</a>

			</li>
			<li class=""><a class="" href="<?php echo base_url('/profile'); ?>" aria-expanded="false">
					<i class="flaticon-381-user"></i>
					<span class="nav-text">Profile</span>
				</a>

			</li>
			<li class=""><a class="" href="<?php echo base_url('/logout'); ?>" aria-expanded="false">
					<i class="flaticon-381-lock"></i>
					<span class="nav-text">Logout</span>
				</a>

			</li>

		</ul>

	</div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="form-head d-flex mb-3 mb-md-5 align-items-start">
			<div class="mr-auto d-none d-lg-block">
				<h3 class="text-primary font-w600">Welcome to Caring Store Sentiment App!</h3>
				<p class="mb-0">Administrator Panel</p>
			</div>


		</div>
		<div class="row">
			
			<div class="col-xl-12 col-xxl-12">
				<div class="row">
                    
                    <form action="javascript: void(0);">
                        <div class="form-group col-md-4 float-right">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img src="https://img.icons8.com/plumpy/22/null/tear-off-calendar.png"/>
                                    </span>
                                </div>
                                <input id="date_range" type="text" class="form-control float-right" name="daterange" value="02/01/2023 - 02/02/2023"/>
                            </div>
                        </div>
                    </form>

					<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h4 class="card-title">Overall Overview for Emotions of Customers</h4>
							</div>
							<div class="card-body d-flex justify-content-center align-items-center">
							    <canvas id="pie_overall" height="700" width="700"></canvas>
							</div>
						</div>
					</div>

					<form action="javascript: void(0);">
                        <div class="form-group col-md-4 float-right">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select id="string-picker">
                                      <option value="3 Months">3 Months</option>
                                      <option value="3 Years">3 Years</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>

					<!-- <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
						<i class="fa fa-calendar"></i>&nbsp;
						<span></span> <i class="fa fa-caret-down"></i>
					</div> -->

					<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h4 class="card-title">Engagement</h4>

							</div>
							<div class="card-body d-flex justify-content-center align-items-center">
							<canvas id="accq_bar" style="width:100%;"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class=""><a class="" href="<?php echo base_url('/dashboard'); ?>" aria-expanded="false">
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
            <li class="mm-active"><a class="" href="<?php echo base_url('/profile'); ?>" aria-expanded="false">
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



                </div>
               

            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12 col-xxl-12">
                <div class="card">
                    <div class="card-header bg-info d-flex justify-content-between align-items-center py-4 px-4">
                        <h4 class="card-title text-white">Admin Profile</h4>
                        
                    </div>
                    
                    <div class="card-body" >
                    <div class="basic-form">
                                    <form>
                                    <div class="row">
                                        <div class="col-xl-6">
                                        <div class="form-group row">
                                            <input type="hidden" id="uid" value="<?=$admin['user_id']?>">
                                            <label class="col-sm-3 col-form-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="uname"  class="form-control" value="<?=$admin['email']?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="pass" class="form-control" value="<?=$admin['cpass']?>">
                                            </div>
                                        </div>

                                        
                                        <div class="alert alert-outline-info alert-dismissible fade show">
                                            Change Password
                                        </div>
                                        
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Current Password: </label>
                                            <div class="col-sm-9">
                                                <input type="" id="opass" class="form-control" value="<?=$admin['cpass']?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">New Password: </label>
                                            <div class="col-sm-9">
                                                <input type="password" id="new_pass" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Confirm New Password: </label>
                                            <div class="col-sm-9">
                                                <input type="password" id="cnew_pass" class="form-control" value="">
                                            </div>
                                        </div>

                                        </div>
                                        
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-2"></div>
                                            <div class="col-sm-9 col-xl-9">
                                        <button id="change_pass" type="button" class="btn btn-success btn-square">Change Password</button>
                                                   
                                            </div>
                                        
                                       </div>
                                     
                                    </form>
                                </div>      </div>
            
                    <div class="card-footer">
                       
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
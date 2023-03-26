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
            <li class="mm-active"><a class="" href="<?php echo base_url('/responsetime'); ?>" aria-expanded="false">
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
   <!--     <div style="width:100%;margin-top:20px;" class="d-flex justify-content-center align-items-center">-->
			<!--<a href="index.html" class="brand-logo">-->
					<!-- <img class="logo-abbr" src="./assets/images/logo_caring.png" alt=""> -->
					<!-- <img class="logo-compact" src="./assets//images/logo_caring.png" alt=""> -->
			<!--		<img width="200" height="200" class="brand-title" src="./assets//images/storelogo.png" alt="">-->
			<!--	</a>-->
   <!--    </div>-->


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
                        <h4 class="card-title text-white">Quality Management Stats</h4>
                        <!-- <button class="btn text-white" id="toggle_acc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button> -->
                        <a data-toggle="collapse" href="#acc_stat" aria-expanded="true" aria-controls="acc_stat" id="heading-example" class="text-white">
            <i class="fa fa-chevron-down pull-right"></i>
            
        </a>
                    </div>
                    <div id="acc_stat" class="collapse show">
                    <div class="card-body d-flex justify-content-center align-items-center">
							<canvas id="resq_bar" style="width:100%;"></canvas>
					    </div>
                </div>
                    <div class="card-footer">
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-xxl-12">
                <div class="row">
                    <!-- <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12"> -->



                    <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header bg-info d-flex justify-content-between align-items-center">
                                <h4 class="card-title text-white">Questions List</h4>

                            </div>
                            <input type="hidden" id="curr_qgroup" value="3">
                            <div class="card-body" id="question_box">
                            
                                
                                

                                
                              
                               
                               

                            </div>
                            <div class="card-footer d-sm-flex justify-content-center align-items-center">


                                <button type="button" class="btn btn-lg btn-rounded btn-info" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Add Question</button>
                                <!-- Large modal -->
                                <div id="question_modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add Question</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="basic-form">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="form-group row">
                                                                    <input type="hidden" id="qgroup" value="3">
                                                                    <label class="col-sm-3 col-form-label">Question Text: </label>
                                                                    <div class="col-sm-9">
                                                                        <textarea rows="5" id="qtext" class="form-control"></textarea>
                                                                    </div>
                                                                </div>







                                                            </div>

                                                        </div>


                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                <button type="button" id="save_question" class="btn btn-info">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="edit_question_modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Question</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="basic-form">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="form-group row">
                                                                    <input type="hidden" id="qgroup" value="3">
                                                                    <input type="hidden" id="qid">
                                                                    <label class="col-sm-3 col-form-label">Question Text: </label>
                                                                    <div class="col-sm-9">
                                                                        <textarea rows="5" id="eqtext" class="form-control"></textarea>
                                                                    </div>
                                                                </div>







                                                            </div>

                                                        </div>


                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                <button type="button" id="edit_question" class="btn btn-info">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
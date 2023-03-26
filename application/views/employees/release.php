**********************************
Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class=""><a class="" href="<?php echo base_url('client_dashboard'); ?>" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-box"></i>
                    <span class="nav-text">Manage Equipments</span>
                </a>
                <ul aria-expanded="false">

                    <li><a href="<?php echo base_url('c_inuse'); ?>">Pending/In-use</a></li>
                    <li><a href="<?php echo base_url('c_release'); ?>">Release</a></li>
                    <li class="active"><a href="<?php echo base_url('c_returned'); ?>">Returned</a></li>
                    <li><a href="<?php echo base_url('c_transfer'); ?>">Transfered</a></li>

                </ul>

            </li>



            <li><a class="" href="<?php echo base_url('scans'); ?>" aria-expanded="false">
                    <i class="flaticon-381-search-1"></i>
                    <span class="nav-text">Reports</span>
                </a>

            </li>








        </ul>

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
                <h3 class="text-primary font-w600">Welcome to EGMS!</h3>
                <p class="mb-0">Equipments Panel</p>
            </div>


        </div>
        <div class="row">


        </div>

        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Equipment List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Qty</th>
                                        <th>Unit</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Serial Number</th>
                                        <th>Unit Price</th>
                                        <th>Status</th>
                                        <th>Date Acquired</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>













                                    <!--  <tr>
												<td><img class="rounded-circle" width="50" src="<?php echo base_url('assets/'); ?>images/profile/small/pic10.jpg" alt=""></td>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Female</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2011/08/14</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-sm sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************
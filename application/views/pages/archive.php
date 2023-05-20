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
                    <span class="nav-text">Product Quality </span>
                </a>

            </li>
            <li class=""><a class="" href="<?php echo base_url('/empathy'); ?>" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Service Quality </span>
                </a>

            </li>
            <li class=""><a class="" href="<?php echo base_url('/responsetime'); ?>" aria-expanded="false">
                    <i class="flaticon-381-alarm-clock"></i>
                    <span class="nav-text">Quality Management </span>
                </a>

            </li>
            <li class=""><a class="" href="<?php echo base_url('/loyalprograms'); ?>" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">Customer Loyalty</span>
                </a>

            </li>
            <li class="mm-active"><a class="" href="<?php echo base_url('/archive'); ?>" aria-expanded="false">
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
        <style>
            .legend-container {
              display: flex;
              flex-direction: column;
              justify-content: flex-start;
              width: 100%;
              max-width: 350px;
            }
            
            .legend-item {
              display: flex;
              flex-direction: row;
              align-items: center;
              margin-bottom: 10px;
            }
            
            .color-indicator {
              width: 40px;
              height: 20px;
              margin-right: 5px;
            }
            
            .color-1 {
              background-color: #ff5c00;
            }
            
            .color-2 {
              background-color: #450b5a;
            }
            
            .color-3 {
              background-color: #209f84;
            }
            
            .color-4 {
              background-color: #2781d5;
            }
        </style>
        <div class="legend-container px-5 py-2">
            <h6>Legend:</h6>
            <div class="legend-item">
                <div class="color-indicator color-1 me-2"></div>
                <span>Product Quality</span>
            </div>
            <div class="legend-item">
                <div class="color-indicator color-2 me-2"></div>
                <span>Service Quality</span>
            </div>
            <div class="legend-item">
                <div class="color-indicator color-3 me-2"></div>
                <span>Quality Management</span>
            </div>
            <div class="legend-item">
                <div class="color-indicator color-4 me-2"></div>
                <span>Customer Loyalty</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="row">



                </div>
                

            </div>
            <div class="col-xl-12 col-xxl-12">
                <div class="row">
                    <!-- <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12"> -->



                    <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                        <form>
                            <div class="d-flex flex-wrap justify-content-center justify-content-md-end gap-3">
                                <div class="form-group">
                                    <label class="form-label">Year</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <select id="archive-year-picker">
                                              <option value="0">All</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Categories</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <select id="archive-category-picker">
                                              <option value="0">All</option>
                                              <option value="1">Product Quality</option>
                                              <option value="2">Service Quality</option>
                                              <option value="3">Quality Management</option>
                                              <option value="4">Customer Loyalty</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-info d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="card-title text-white">Archived Questions List</h4>
                                    </div>
                                    <div class="d-flex justify-items-center align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll" id="checkAll">
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                        <div class="alert-box">
                                            <!--<input type="submit" value="Unarchive" id="unarchive" class="btn btn-sm btn-outline-light text-white">-->
                                            <button type="button" id="unarchive" class="btn btn-sm btn-outline-light text-white">Retrieve</button>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="card-body" id="archive_box">
                                    <div style="display: flex; flex-direction: row;">
                                        <div style="width: 20px; height: 20px; margin-right: 10px; background-color: blue"></div>
                                        <span>Box 1</span>
                                        <div style="width: 20px; height: 20px; margin-right: 10px; background-color: green"></div>
                                        <span>Box 2</span>
                                        <div style="width: 20px; height: 20px; margin-right: 10px; background-color: red"></div>
                                        <span>Box 3</span>
                                    </div>
                                   
                                        
        
                                        
                                      
                                       
                                       
        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--<script>-->
<!--  $(document).ready(function() {-->
<!--    $('#checkAll').click(function() {-->
<!--      if ($(this).prop('checked') === true) {-->
<!--        $('input[name="question"]').prop('checked', true);-->
<!--      } else {-->
<!--        $('input[name="question"]').prop('checked', false);-->
<!--      }-->
<!--    });-->
    
<!--    $('input[name="question"]').click(function() {-->
<!--        console.log('clicked');-->
<!--        if ($(this).attr('name') != 'checkAll') {-->
<!--            $('#checkAll').prop('checked', false);-->
<!--            console.log('hello world');-->
<!--        }-->
<!--    });-->
<!--  });-->
<!--</script>-->
<!--**********************************
            Content body end
        ***********************************-->
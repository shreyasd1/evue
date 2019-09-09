<!-- sidebar -->  
<div class="nk-sidebar">
        <div class="nk-nav-scroll">

            <div class="nav-user">
                <a href="<?php echo base_url("index.php/welcome")?>"><img src="<?php echo $thisuser['profile_image']?>" alt="" class="rounded-circle">
                <h5><?php echo $thisuser['name']; ?></h5><br></a>

                <div class="nav-user-option">
                    <div class="setting-option">
                        <div data-toggle="dropdown">
                            <i class="icon-settings"></i>
                        </div>
                        <div class="dropdown-menu animated flipInX">
                            <a class="dropdown-item" href="#">Account</a>
                            <a class="dropdown-item" href="#">Lock</a>
                            <a class="dropdown-item" href="<?php echo base_url('index.php/auth/logout'); ?>">Logout</a>
                        </div>
                    </div>
                    <div class="notification-option">
                        <div data-toggle="dropdown">
                            <i class="icon-bell"></i>
                        </div>
                        <div class="dropdown-menu animated flipInX">
                            <a class="dropdown-item" href="#">Email
                                <span class="badge badge-primary pull-right m-t-3">05</span>
                            </a>
                            <a class="dropdown-item" href="#">Feed back
                                <span class="badge badge-danger pull-right m-t-3">02</span>
                            </a>
                            <a class="dropdown-item" href="#">Report
                                <span class="badge badge-warning pull-right m-t-3">02</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="metismenu" id="menu">
                
            <li>
                    <a href="<?php echo base_url('index.php/profile');?>/">
                        <i class="icon-user"></i>
                        <span class="nav-text">Profile</span>
                    </a>
                </li>
            </ul>
    
        </div>
    </div>
</div>
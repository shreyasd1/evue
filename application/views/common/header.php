<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Review </title>
    <!-- Favicon icon -->
    <!-- Custom Stylesheet -->
    <link href="<?php echo base_url('/main');?>/css/style.css" rel="stylesheet">
    <script src="<?php echo base_url('/main');?>/js/modernizr-3.6.0.min.js"></script>
    <style>
        a {
            color: #f1c40f;
        }

        a:hover,
        a:active,
        a:focus {
            color: #dab10d;
        }

        .rating-stars {
            width: 100%;
            text-align: center;
        }

        .rating-stars .rating-stars-container {
            font-size: 0px;
        }

        .rating-stars .rating-stars-container .rating-star {
            display: inline-block;
            font-size: 32px;
            color: #555555;
            cursor: pointer;
            padding: 5px 10px;
        }

        .rating-stars .rating-stars-container .rating-star.is--active,
        .rating-stars .rating-stars-container .rating-star.is--hover {
            color: #f1c40f;
        }

        .rating-stars .rating-stars-container .rating-star.is--no-hover {
            color: #555555;
        }
    </style>
    <script src="<?php echo base_url('main')?>/js/jquery.rating-stars.js"></script>
    <script src="<?php echo base_url('main')?>/js/jquery.rating-stars.min.js"></script>
        
</head>

<body>

    <div id="preloader">
        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>
        </div>
    </div>


        <div id="main-wrapper"><!-- header -->
    <div class="header">
        <div class="nav-header">
            <div class="brand-logo">
                <a href="<?php echo base_url('index.php'); ?>">
                <span class="brand-title">
                        <img src="<?php echo base_url('/assets');?>/images/logo-text.png" alt="">
                    </span>
                </a>
            </div>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header-content">
            <div class="header-left">
                <ul>
                    <li class="icons position-relative">
                        <a href="javascript:void(0)">
                            <i class="icon-magnifier f-s-16"></i>
                        </a>
                        <div class="drop-down animated bounceInDown">
                            <div class="dropdown-content-body">
                                <div class="header-search" id="header-search">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="icon-magnifier"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="header-right">
                <ul>
                    <li class="icons">
                        <a href="javascript:void(0)">
                            <i class="icon-bell f-s-18" aria-hidden="true"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="drop-down animated bounceInDown">
                            <div class="dropdown-content-heading">
                                <span class="text-left">Recent Notifications</span>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="<?php echo base_url('/assets');?>/images/avatar/1.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Mr. Saifun</div>
                                                <div class="notification-text">5 members joined today </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="<?php echo base_url('/assets');?>/images/avatar/2.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Mariam</div>
                                                <div class="notification-text">likes a photo of you</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="<?php echo base_url('/assets');?>/images/avatar/3.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Tasnim</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="<?php echo base_url('/assets');?>/images/avatar/4.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Ishrat Jahan</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#" class="more-link">See All</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="icons">
                        <a href="javascript:void(0)">
                            <i class="icon-envelope f-s-18" aria-hidden="true"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="drop-down animated bounceInDown">
                            <div class="dropdown-content-heading">
                                <span class="text-left">2 New Messages</span>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li class="notification-unread">
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="<?php echo base_url('/assets');?>/images/avatar/1.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Saiul Islam</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-unread">
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="<?php echo base_url('/assets');?>/images/avatar/2.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Ishrat Jahan</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="<?php echo base_url('/assets');?>/images/avatar/3.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Saiul Islam</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="<?php echo base_url('/assets');?>/images/avatar/4.jpg" alt="" />
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Ishrat Jahan</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#" class="more-link">See All</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="icons">
                        <a href="javascript:void(0)">
                            <i class="icon-note f-s-18" aria-hidden="true"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="drop-down dropdown-task animated bounceInDown">
                            <div class="dropdown-content-heading">
                                <span class="text-left">Task Update</span>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">85% Complete</small>
                                                <div class="notification-heading">Task One</div>
                                                <div class="progress">
                                                    <div style="width: 85%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-success"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">60% Complete</small>
                                                <div class="notification-heading">Task Two</div>
                                                <div class="progress">
                                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-primary"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">25% Complete</small>
                                                <div class="notification-heading">Task Three</div>
                                                <div class="progress">
                                                    <div style="width: 25%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar" class="progress-bar progress-bar-warning"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="notification-content">
                                                <small class="notification-timestamp pull-right">75% Complete</small>
                                                <div class="notification-heading">Task Four</div>
                                                <div class="progress">
                                                    <div style="width: 75%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class="progress-bar progress-bar-danger"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#" class="more-link">See All</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="icons">
                        <a href="javascript:void(0)">
                            <i class="icon-user f-s-18" aria-hidden="true"></i>
                        </a>
                        <div class="drop-down dropdown-profile animated bounceInDown">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-envelope"></i>
                                            <span>Inbox</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-settings"></i>
                                            <span>Setting</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-lock"></i>
                                            <span>Lock Screen</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('index.php/auth/logout'); ?>">
                                            <i class="icon-power"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #/ header -->

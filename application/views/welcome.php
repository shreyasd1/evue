   <!-- content body -->
    <div class="content-body">
            <!-- container -->
           <div id="searchuser">
           </div>
           


          <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-3 col-sm-4 col-lg-3 col-xl-2 p-r-0 align-self-center">
                    <h3 class="text-primary">Review</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Layout</a>
                        </li>
                        <li class="breadcrumb-item active">home</li>
                    </ol>
                </div>
                
            </div>
          </div>

          
          <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Reviews</h4>
                                <?php $i=1; foreach($my_list as $list){ ?>
                                    <?php $likes_number=sizeof(explode(',',$list['likes'])); ?>
                                    <?php $dislikes_number=sizeof(explode(',',$list['dislikes'])); ?>
                                <div class="media border-bottom-1 p-t-15 p-b-15">
                                    <img src="<?php echo base_url('/assets')?>/images/avatar/1.jpg" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5><?php echo $list['id'];  ?></h5>
                                        <p><?php echo $list['review'];  ?> </p>
                                        <?php
                                        for($x=1;$x<=$list ['rating']; $x++) {
                                        echo ' <i class="ti-star color-primary"></i> ';
                                        }
                                        ?><br>
                                                        <i class="fa fa-heart f-s-14 m-r-5">&nbsp;&nbsp;<span id="ln1<?php echo $list['id'];  ?>"><?php echo $likes_number-1; ?></span></i>Like
                                                        &nbsp&nbsp&nbsp 
                                                        <i class="fa fa-heart f-s-14 m-r-5">&nbsp;&nbsp; <span  id="dln1<?php echo $list['id'];  ?>"><?php echo $dislikes_number-1; ?></span></i>dislike
                                                        <span  id="sd1"></span>&nbsp&nbsp&nbsp
                                    </div>
                                    <span><?php echo $list['time'];  ?></span>
                                </div>
                                <?php }?>

                            </div>
                        </div>
                    </div>
         <!-- #/ container -->
                          
    </div>
    <!-- #/ content body -->
                        
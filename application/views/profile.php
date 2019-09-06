
    <div class="content-body">
    <div id="searchuser">
    </div>
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-3 col-sm-4 col-lg-3 col-xl-2 p-r-0 align-self-center">
                    <h3 class="text-primary">Dashboard</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">App</a>
                        </li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="profile">
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo"></div>
                                <div class="profile-photo">
                                    <img src="<?php echo base_url('/assets');?>/images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                                </div>
                            </div>
                            <div class="profile-info">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <div class="row">
                                            <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                <div class="profile-name">
                                                    <h4 class="text-primary"><?php echo $user_authenticate['name']; ?></h4>
                                                    <p>UX / UI Designer</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                <div class="profile-email">
                                                    <h4 class="text-muted"><?php echo $user_authenticate['email']; ?></h4>
                                                    <p>Email</p>
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

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-statistics">
                                <div class="text-center m-t-15 border-bottom-1 p-b-15">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="m-b-0">150</h3>
                                            <span>Follower</span>
                                        </div>
                                        <div class="col">
                                            <h3 class="m-b-0">140</h3>
                                            <span>Place Stay</span>
                                        </div>
                                        <div class="col">
                                            <h3 class="m-b-0">45</h3>
                                            <span>Reviews</span>
                                        </div>
                                    </div>
                                    <div class="m-t-20">
                                        <a href="#" class="btn btn-primary f-s-14 p-l-30 p-r-30 m-r-10 m-b-15">Follow</a>
                                        <a href="#" class="btn btn-dark f-s-14 p-l-30 p-r-30 m-b-15">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-blog p-t-15 border-bottom-1 p-b-5">
                                <h5 class="text-primary d-inline">Today Highlights</h5>
                                <a href="#" class="pull-right f-s-16">More</a>
                                <img src="<?php echo base_url('/assets');?>/images/profile/1.jpg" alt="" class="img-fluid m-t-15 m-b-15 w-100">

                                <h4>Darwin Creative Agency Theme</h4>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                                    It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            </div>

                            <div class="profile-interest m-t-15 p-b-10 border-bottom-1">
                                <h5 class="text-primary d-inline">Interest</h5>
                                <div class="row m-t-15">
                                    <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                        <a href="#" class="interest-cat">
                                            <img src="<?php echo base_url('/assets');?>/images/profile/2.jpg" alt="" class="img-fluid">
                                            <p>Shopping Mall</p>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                        <a href="#" class="interest-cat">
                                            <img src="<?php echo base_url('/assets');?>/images/profile/3.jpg" alt="" class="img-fluid">
                                            <p>Photography </p>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                        <a href="#" class="interest-cat">
                                            <img src="<?php echo base_url('/assets');?>/images/profile/4.jpg" alt="" class="img-fluid">
                                            <p>Art & Gallery </p>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                        <a href="#" class="interest-cat">
                                            <img src="<?php echo base_url('/assets');?>/images/profile/2.jpg" alt="" class="img-fluid">
                                            <p>Visiting Place </p>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                        <a href="#" class="interest-cat">
                                            <img src="<?php echo base_url('/assets');?>/images/profile/3.jpg" alt="" class="img-fluid">
                                            <p>Shopping </p>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                        <a href="#" class="interest-cat">
                                            <img src="<?php echo base_url('/assets');?>/images/profile/4.jpg" alt="" class="img-fluid">
                                            <p>Biking </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-news m-t-15 p-b-15">
                                <h5 class="text-primary d-inline">Our Latest News</h5>
                                <div class="media p-t-15 p-b-15">
                                    <img src="<?php echo base_url('/assets');?>/images/profile/5.jpg" class="mr-3">
                                    <div class="media-body">
                                        <h5 class="m-b-5">John Tomas</h5>
                                        <p>I shared this on my fb wall a few months back, and I thought I'd share it here again
                                            because it's such a great read</p>
                                    </div>
                                </div>
                                <div class="media p-t-15 p-b-15">
                                    <img src="<?php echo base_url('/assets');?>/images/profile/6.jpg" class="mr-3">
                                    <div class="media-body">
                                        <h5 class="m-b-5">John Tomas</h5>
                                        <p>I shared this on my fb wall a few months back, and I thought I'd share it here again
                                            because it's such a great read</p>
                                    </div>
                                </div>
                                <div class="media p-t-15 p-b-15">
                                    <img src="<?php echo base_url('/assets');?>/images/profile/7.jpg" class="mr-3">
                                    <div class="media-body">
                                        <h5 class="m-b-5">John Tomas</h5>
                                        <p>I shared this on my fb wall a few months back, and I thought I'd share it here again
                                            because it's such a great read</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#my-posts" data-toggle="tab" class="nav-link active show">give your review</a>
                                        </li>
                                       
                                    </ul>
                                    <div class="tab-content">
                                        <div id="my-posts" class="tab-pane fade active show">
                                            <div class="my-post-content p-t-15">
                                            <?php echo form_open_multipart($add_review); ?>		
                                                <div class="rating-stars block" id="another-rating">
                                                 
                                                <input type="hidden" readonly="readonly" class="form-control rating-value" name="rating" id="another-rating-stars-value"  value="2">
                                                    
                                                <input type="hidden" name="reviewed_by" value="<?php echo $user_authenticate['id']; ?>">

                                                        <div class="rating-stars-container">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star" id="1" ></i>
                                                        </div>
                                                        <div class="rating-star">
                                                            <i class="fa fa-star" id="2"></i>
                                                        </div>
                                                        <div class="rating-star">
                                                            <i class="fa fa-star" id="3"></i>
                                                        </div>
                                                        <div class="rating-star">
                                                            <i class="fa fa-star" id="4"></i>
                                                        </div>
                                                        <div class="rating-star">
                                                            <i class="fa fa-star" id="5"></i>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                                    
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"  name="review" placeholder=" review Here..."required="required">
                                                        </div>
                                                        <div class="wrapper">
                                                            <button  type="submit" plceholder="submit"   class="btn btn-primary">submit</button>
                                                        </div>
                                                        </form>
                                                        <?php $i=1; foreach($my_list as $list){ ?>
                                                            <?php $likes_number=sizeof(explode(',',$list['likes'])); ?>
                                                            <?php $dislikes_number=sizeof(explode(',',$list['dislikes'])); ?>
                                                <div class="profile-uoloaded-post border-bottom-1 p-b-30">
                                                    <p><?php echo $list['review'];?></p>
                                                    <a class="post-title">
                                                    <?php
                                                    for($x=1;$x<=$list['rating']; $x++) {
                                                    echo '
                                                    <i class="ti-star color-primary"></i> ';
                                                    }
                                                   
                                                    ?>
                                                    </a><br><br>
                                                    <button class="btn btn-primary f-s-14 m-r-10"   onclick="like(<?php echo $list['id'];  ?>)">
                                                        <i class="fa fa-heart f-s-14 m-r-5">&nbsp;&nbsp;<span id="ln1<?php echo $list['id'];  ?>"><?php echo $likes_number-1; ?></span></i>Like</button>
                                                        &nbsp&nbsp&nbsp 
                                                        <button class="btn btn-secondary"   onclick="dislike(<?php echo $list['id'];  ?>)">
                                                        <i class="fa fa-heart f-s-14 m-r-5">&nbsp;&nbsp; <span  id="dln1<?php echo $list['id'];  ?>"><?php echo $dislikes_number-1; ?></span></i>dislike</button>
                                                        <span  id="sd1"></span>&nbsp&nbsp&nbsp
                                                  
                                                </div>
                                                </div>
                                                        <?php }?>
                                                <div class="text-center m-t-30 m-b-30">
                                                    <a class="btn btn-info"> Load More</a>
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
        <!-- #/ container -->
    </div>
    <!-- #/ content body -->
    <script>
   function like(id){
    var review_id=id;
        $.ajax({
                url: '<?php echo base_url(); ?>index.php/Profile/like',
                type: 'post',
                data: {like:review_id},
                dataType: 'json',
                cache: false,

                success:function(response){
                    $("#ln1"+review_id).html(response.l);
                    $("#dln1"+review_id).html(response.dl);
                }
            });
        
   }
   function dislike(id){
    var review_id=id;
    $.ajax({
                url: '<?php echo base_url(); ?>index.php/Profile/dislike',
                type: 'post',
                data: {dislike:review_id},
                dataType: 'json',
                cache: false,

                success:function(response){
                    $("#ln1"+review_id).html(response.l);
                    $("#dln1"+review_id).html(response.dl);
                }
            });
   }
   
</script>


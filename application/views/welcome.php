   <!-- content body -->
    <div class="content-body">
            <!-- container -->
           <div id="searchuser">
           </div>
           



         <br>

          
          <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Reviews</h4>
                                <?php $i=1; foreach ($my_list as $list){
                                    $getprofiledetails =$this->Common_model->getAll("users",array('id'=>$list['user_id']))->row_array(); 
                                    $followingList = $this->Common_model->getAll("follow",array('user_id'=>$this->tank_auth->get_user_id()))->row_array();
                                    $expl_following = explode(',',$followingList['following']);
                                    $expl_towhom = explode(',',$list['to_whom']);
                                    if(in_array($list['user_id'],$expl_following)){
                                    ?>
                                    <?php $likes_number=sizeof(explode(',',$list['likes'])); ?>
                                    <?php $dislikes_number=sizeof(explode(',',$list['dislikes'])); ?>
                                <div class="media border-bottom-1 p-t-15 p-b-15">
                                   <a href="<?php echo base_url('index.php/Profile/getprofile/'.$list['user_id'])?>">
                                    <img width="40"  src="<?php echo $getprofiledetails['profile_image'];?>" class="mr-3 rounded-circle">
                                   </a>
                                    <div class="media-body">
                                    <a href="<?php echo base_url('index.php/Profile/getprofile/'.$list['user_id'])?>">
                                        <h5><?php echo $getprofiledetails['name'];?></h5></a>

                                        <?php if(in_array($this->tank_auth->get_user_id(),$expl_towhom)){?>

                                            <p ><?php echo $list['review']; ?></p>
                                        


                                        <?php } else if($list['hide_status']=='1' && $list['user_id']!=$this->tank_auth->get_user_id() ){?>
                                                    <p ><?php echo "-------------- Review Hidden ------------";?></p>
                                                <?php } else if($list['hide_status']=='1' && $list['user_id']==$this->tank_auth->get_user_id()){ ?>
                                                    <p ><?php echo $list['review'];?></p>
                                                <?php } else{ ?>
                                                    <p ><?php echo $list['review'];?></p>
                                                <?php } ?>
                                        <?php
                                        for($x=1;$x<=$list ['rating']; $x++) {
                                        echo ' <i class="ti-star color-warning"></i> ';
                                        }
                                        ?><br>
                                        <button class="btn btn-primary f-s-14 m-r-10"   onclick="like(<?php echo $list['id'];  ?>)">
                                        <i class="fa fa-heart f-s-14 m-r-5">&nbsp;&nbsp;<span id="ln1<?php echo $list['id'];  ?>"><?php echo $likes_number-1; ?></span></i>Like</button>
                                        &nbsp
                                        <button class="btn btn-secondary"   onclick="dislike(<?php echo $list['id'];  ?>)">
                                        <i class="fa fa-heart f-s-14 m-r-5">&nbsp;&nbsp; <span  id="dln1<?php echo $list['id'];  ?>"><?php echo $dislikes_number-1; ?></span></i>dislike</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php if($list['hide_status']=='1' && $list['user_id']!=$this->tank_auth->get_user_id() && !in_array($this->tank_auth->get_user_id(),$expl_towhom) ){?>
                                        <span id="req_btn-<?php echo $list['id']; ?>">
                                        <button class="btn btn-warning f-s-14 m-r-10 request"   onclick="request(<?php echo $list['id'];  ?>)">Request Review</button>
                                        </span>
                                        <?php }?>

                                        
                                    </div>
                                    <span><?php echo $list['time'];  ?></span>
                                </div>
                                <?php }
                                }//end of if statement for checking following list data
                                ?>

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
                url: '<?php echo base_url(); ?>index.php/Welcome/like',
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
                url: '<?php echo base_url(); ?>index.php/Welcome/dislike',
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
      <script>

function request(id){
    var review_id=id;
    $.ajax({
                url: '<?php echo base_url(); ?>index.php/Profile/request/'+review_id,
                type: 'post',
                dataType: 'json',
                cache: false,

                success:function(response){
                    $("#req_btn-"+id).empty();                   
                    $("#req_btn-"+id).append('<button class="btn btn-warning f-s-14 m-r-10 "   onclick="cancel_request()">Requested</button>');
                
                }
            });

   }
   </script>       
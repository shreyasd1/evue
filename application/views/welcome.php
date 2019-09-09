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
                                        echo ' <i class="ti-star color-warning"></i> ';
                                        }
                                        ?><br>
                                        <button class="btn btn-primary f-s-14 m-r-10"   onclick="like(<?php echo $list['id'];  ?>)">
                                        <i class="fa fa-heart f-s-14 m-r-5">&nbsp;&nbsp;<span id="ln1<?php echo $list['id'];  ?>"><?php echo $likes_number-1; ?></span></i>Like</button>
                                        &nbsp&nbsp&nbsp 
                                        <button class="btn btn-secondary"   onclick="dislike(<?php echo $list['id'];  ?>)">
                                        <i class="fa fa-heart f-s-14 m-r-5">&nbsp;&nbsp; <span  id="dln1<?php echo $list['id'];  ?>"><?php echo $dislikes_number-1; ?></span></i>dislike</button>
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
             
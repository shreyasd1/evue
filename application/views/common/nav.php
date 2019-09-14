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
                           <div > <a class="dropdown-item" id="hidereviews" onclick="hide(<?php echo $thisuser['id']; ?>)">hide reviews</a></div>
                            <a class="dropdown-item" href="<?php echo base_url('index.php/auth/logout'); ?>">Logout</a>
                        </div>
                    </div>
                    <div class="notification-option">
                       
                      
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
<script>
function hide(id){
                                
    $.ajax({
        url: '<?php echo base_url(); ?>index.php/Profile/hide/',
        type: 'post',
        data: {hideID:id},
        dataType: 'json',
        cache: false,

        success:function(response){
          if(response.data=='hidden'){
              $("#hidereviews").html('unhide');
          }
          else{
            $("#hidereviews").html('hide');
          }
            
        }
    });
    
}
</script>
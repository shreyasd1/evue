 <!-- footer -->
 <div class="footer">
        <div class="copyright">
            <p>Copyright &copy;
                <a href="#">CODEELECTRA TECHNOLOGIES</a>&nbsp2019</p>
        </div>
    </div>
    <!-- #/ footer --> </div>

    <!-- Common JS -->
    <script src="<?php echo base_url('/assets');?>/plugins/common/common.min.js"></script><!-- Custom script --><script src="<?php echo base_url('/main');?>/js/custom.min.js"></script>  
    
    <script src="<?php echo base_url('main')?>/js/jquery.rating-stars.min.js"></script>
    <script>
        var ratingOptions = {
            selectors: {
                starsSelector: '.rating-stars',
                starSelector: '.rating-star',
                starActiveClass: 'is--active',
                starHoverClass: 'is--hover',
                starNoHoverClass: 'is--no-hover',
                targetFormElementSelector: '.rating-value'
            }
        };

        $(".rating-stars").ratingStars(ratingOptions);
    </script>
    <script>
   function searchuser(){
            $("#searchuser").append('<div class="col-xl-3"><div class="card"> <div class="card-body"> <h4 class="card-title">users</h4><div class="media border-bottom-1 p-t-15"><img class="mr-3 rounded-circle" src="<?php echo base_url('/assets')?>/images/avatar/1.jpg"> <div class="media-body m-b-15"> <h5>Ross Gellar</h5><a class="btn btn-dark btn-rounded f-s-12 p-l-15 p-r-15 p-t-5 p-b-5" href="#"><i class="icon-user-follow"></i> Follow</a> </div></div></div></div></div>');
   die();
   }

</script>
    <script src="<?php echo base_url('main')?>/js/jquery.rating-stars.js"></script>
    <script src="<?php echo base_url('main')?>/js/jquery.rating-stars.js"></script>
    <script src="<?php echo base_url('main')?>/js/jquery.rating-stars.min.js"></script>   
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    
crossorigin="anonymous"></script>

    
    </body>

</html>
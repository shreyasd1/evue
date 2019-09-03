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
    <script src="<?php echo base_url('main')?>/js/jquery.rating-stars.js"></script>
        
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    
crossorigin="anonymous"></script>

    
</body>

</html>
	</div><!-- #content -->

  <?php  
    $company_name = get_field('company_name');
    $company_email = get_field('email_address');
    //var_dump($company_email);
  ?>
	
    <footer class="cma-footer" id="colophon" role="contentinfo">
    <div class="container text-left">
      <div class="row">
        <div class="col-md-8">
          <h4 class="cma-title-red text-bold">
            <?php echo ($company_name) ? $company_name : 'Community Management Associates'; ?>
          </h4>
          <div>
            P: 800-522-6314 | E: info@cmacommunities.com
          </div>
          <div class="mb-5">
            CMA CORPORATE<br>
            1465 Northside Drive NW<br>
            Suite 128<br>
            Atlanta, GA 30318
          </div>
          
      </div>

      <div class="col-md-4">
        <div class=" mb-3" >
          <span class="cma-solid-bottom">Request Information</span>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <ul class="list-group">
              <li class="list-group-item"><a href="">HOAs</a></li>
              <li class="list-group-item"><a href="">Condos</a></li>
              <li class="list-group-item"><a href="">Services</a></li>
              <li class="list-group-item"><a href="">Developers</a></li>
              <li class="list-group-item"><a href="">Commercial</a></li>
              <li class="list-group-item"><a href="">Consulting</a></li>
              <li class="list-group-item"><a href="">Vendors</a></li>
              <li class="list-group-item"><a href="">Values</a></li>
              <li class="list-group-item"><a href="">History</a></li>
              <li class="list-group-item"><a href="">Expertise</a></li>
              <li class="list-group-item"><a href="">People</a></li>
            </ul>

            
          </div>
          <div class="col-sm-6">
            <ul class="list-group">
              <li class="list-group-item"><a href="">Payments</a></li>
              <li class="list-group-item"><a href="">Documents</a></li>
              <li class="list-group-item"><a href="">After Hours Contact</a></li>
              <li class="list-group-item"><a href="">Buyer/Seller Services</a></li>
              <li class="list-group-item"><a href="">Vendor Services</a></li>
              <li class="list-group-item"><a href="">Contact</a></li>
              <li class="list-group-item"><a href="">Resident Login</a></li>
              <li class="list-group-item"><a href="">Association Search</a></li>
            </ul>
            <div class="footer_locations">
              <div class=" mt-3 mb-2 text-dark">
                  LOCATIONS
              </div>
              <ul class="list-group">
              <?php
                    $post_type = 'location';
                    $args = array(
                        'posts_per_page'   => -1,
                        'orderby'          => 'date',
                        'order'            => 'DESC',
                        'post_type'        => $post_type,
                        'post_status'      => 'publish',
                        //'paged'            => $paged
                    );
                    $posts = new WP_Query($args);

                    if ( $posts->have_posts() ) {

                          while ( $posts->have_posts() ) : $posts->the_post(); 

                  ?>
                      <li class="list-group-item"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php     endwhile; wp_reset_postdata();
                      }
                 ?>
                </ul>
            </div>
          </div>
        </div>
      </div>


      </div> <!-- row -->
      
      <div class="col-md-8 justify-content-left">
        <div class="">
              <ul class="list-group flex-md-row">
                <li class="list-group-item">
                  <a href="">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer_linkedin.png" alt="">
                  </a>
                </li>
                <li class="list-group-item">
                  <a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer_facebook.png" alt=""></a>
                </li>
                <li class="list-group-item">
                  <a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer_twitter.png" alt=""></a>
                </li>
              </ul>
            </div>
            <div class="small mt-2">
              Copyright <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?>. All Rights Reserved.
            </div>
      </div>

    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

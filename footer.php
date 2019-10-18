	</div><!-- #content -->

  <?php  
    $company_name = get_field('company_name', 'option');
    $company_email = get_field('email_address', 'option');
    $company_phone = get_field('phone', 'option');
    $company_bldg_name = get_field('building_name', 'option');
    $company_address = get_field('building_address', 'option');
  ?>
	
    <footer class="cma-footer" id="colophon" role="contentinfo">
    <div class="container text-left">
      <div class="row">
        <div class="col-md-7">
          <h4 class="cma-title-red text-bold">
            <?php echo ($company_name) ? $company_name : ''; ?>
          </h4>
          <div>
            P: <?php echo ($company_phone) ? $company_phone : ''; ?> | E: <a href="mailto:<?php echo ($company_email) ? $company_email : ''; ?>"><?php echo ($company_email) ? $company_email : ''; ?></a>
          </div>
          <div class="mb-5">
            <div><?php echo ($company_bldg_name) ? $company_bldg_name : ''; ?></div>
            <div class="company_address"><?php echo ($company_address) ? $company_address : ''; ?></div>
          </div>
          
      </div>

      

      <div class="col-md-5">
        <div class=" mb-3" >
          <span class="cma-solid-bottom">Request Information</span>
        </div>
        <div class="row">

          <?php 

            $menu_items = wp_get_nav_menu_items('Footer Menu');
            
            $menu   = array();
            $ar_list   = array();
            foreach($menu_items as $key => $value){ 
              $menu['url']    = $value->url;
              $menu['title']  = $value->title;
              $ar_list[] = $menu;               
            }
            $rows = ceil(count($ar_list) / 2);
            $lists  = array_chunk($ar_list, $rows);

            foreach ( $lists as $column) {
                echo '<div class="col-md-4"><ul class="list-group">';
                foreach ($column as $item) {
                    echo '<li class="list-group-item"><a href="'. $item['url'] .'">' . $item['title'] . '</a></li>';
                }
                echo '</ul></div>';
            }

          ?>

       

          <div class="col-sm-4">       

            <div class="footer_locations">
              <div class="mb-2 text-dark">
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
                <?php
                  $social_media = get_field('social_media', 'option');

                  if($social_media){
                    foreach($social_media as $social){
                      $icon = $social['icon'];
                      $link = $social['link'];
                ?>
                <li class="list-group-item">
                  <a href="<?php echo $link; ?>" target="_blank">
                    <?php if($icon): ?>
                    <img src="<?php echo $icon['url']; ?>" alt="">
                  <?php endif; ?>
                  </a>
                </li>
                <?php } // foreach($social_media as $social)
                } // if($social_media) ?>               
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

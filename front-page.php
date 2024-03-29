<?php get_header(); ?>

<?php //if( have_posts() ): ?>
    <?php //while ( have_posts() ) : the_post();  ?>
            <!-- Slider -->
            <div class="mb-5">
                <?php
                    echo do_shortcode('[smartslider3 slider=2]');
                ?>
            </div>

            <!-- Helping Communities -->
            <?php
                $row1_title     = get_field('title');
                $row1_text      = get_field('text');
                $row1_btn_text  = get_field('button_name');
                $row1_btn_link  = get_field('button_link');
            ?>
            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center fadeIn wow" data-wow-delay="0.7s">
                    <h1 class="cma-title-red " ><?php  echo ($row1_title) ? esc_html($row1_title) : ''; ?></h1>
                    <div class="cma-paragraph-normal " >
                        <?php echo ($row1_text) ? ($row1_text) : ''; ?>                        
                    </div>  
                    <div>
                        <?php if($row1_btn_link): ?>
                        <a href="<?php echo esc_url($row1_btn_link); ?>" class="cma-solid-bottom">
                            <?php echo esc_html($row1_btn_text); ?>
                        </a>
                        <?php endif; ?>
                    </div>  
                </div>                
            </div>

            <!--  Community Management Associates  -->
            <?php
               $row2_title = get_field('services_title');                
            ?>
            <div class="mb-5 " >
                    <div class=" cma-main-body ">
                          <div class="justify-content-center fadeInUp wow" data-wow-delay="1s">
                            <div class="col-md-8 mb-4 mt-4" style="margin: 0 auto">
                                <h1  class="text-center">
                                    <?php echo ($row2_title) ? esc_html($row2_title) : ''; ?>
                                </h1>
                            </div>
                          </div>

                            <div class="container">
                                <div class="row p-5 fadeInUp wow" data-wow-delay="1s">

                                    <?php
                                        $post_type = 'services';
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

                                            while ( $posts->have_posts() ) : $posts->the_post(); ?>

                                                <div class="col-md-3 col-6 mb-5">
                                                    <div class="text-center">
                                                        <?php if( get_field('services_thumbnail_image') ): ?>
                                                            <?php $image = get_field('services_thumbnail_image'); ?>
                                                            <?php if( $image ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="" class="img-circle">
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <div class="mt-2">
                                                            <span class="font-weight-bold service-title"><?php the_title(); ?></span>
                                                        </div>
                                                    </div>
                                                </div> <!-- col-md-3 -->                                             

                                    <?php      
                                            endwhile; wp_reset_postdata();
                                        }

                                    ?>
                                </div> <!-- row -->
                            </div> <!-- container -->

                    </div>
            </div>


            <!--  Celebrating 30 years  -->
            <?php
                $row3_title     = get_field('title3');
                $row3_text      = get_field('text3');
                $row3_btn_text  = get_field('button_name3');
                $row3_btn_link  = get_field('button_link3');
            ?>
            <section class=" mb-5">
                <div class="container text-center">
                    <div class="justify-content-center">
                        <div class="col-md-8 cma-center " >
                            <h1 class="cma-title-red mb-4 fadeInUp wow" data-wow-delay="0.2s">
                                <?php echo ($row3_title) ? esc_html($row3_title) : ''; ?>
                            </h1 >

                            <div class="cma-paragraph-normal fadeInUp wow" data-wow-delay="0.4s">
                                <?php  echo ($row3_text) ? ($row3_text) : ''; ?>
                            </div>

                            <div class="mt-4 mb-4 fadeInUp wow" data-wow-delay="0.8s">
                                    <?php if($row3_btn_link): ?>
                                    <a href="<?php echo esc_url($row3_btn_link); ?>" class="cma-solid-bottom">
                                        <?php echo esc_html($row3_btn_text); ?>
                                    </a>
                                    <?php endif;  ?>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <!--  We handle your financials  -->
            <?php
                $row4_title = get_field('title4');
                $row4_text  = get_field('text4');                
            ?>
            <section class=" cma-bg-mixed">
                <div class="container text-center pb-5 ">
                    <div class="col-md-8 cma-center  pt-5">
                        <h1 class="cma-title-white pb-4 fadeInUp wow" data-wow-delay="0.2s">
                            <?php echo ($row4_title) ? esc_html($row4_title) : ''; ?>
                        </h1>
                        <div class="cma-paragraph-white text-white fadeInUp wow" data-wow-delay="0.5s">
                              <?php echo ($row4_text) ? $row4_text : ''; ?>
                        </div>

                        <div class="row pt-4 pb-3">
                            <?php  
                                $features = get_field('features');

                                if($features){
                                   $x = 0;     
                                   foreach($features as $feature){
                                        $x++;
                                        $feature_icon   = $feature['icon'];
                                        $feature_title  = $feature['title'];
                                        $feature_desc   = $feature['description'];                                       
                            ?>
                            <div class="col-sm-4 fadeInUp wow" data-wow-delay="<?php echo ($x / 5) . 's'; ?>">
                                <div class="cma-icon-holder">
                                    <?php if($feature_icon): ?>
                                    <img src="<?php echo esc_url($feature_icon['url']); ?>" alt="<?php echo esc_html($feature_title); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="cma-sub-title text-white">
                                  <?php echo ($feature_title) ?  esc_html($feature_title) : ''; ?>
                                </div>
                                <p class="cma-paragraph-white" style="margin-top: 10px;">
                                  <?php echo ($feature_desc) ?  esc_html($feature_desc) : ''; ?>
                                </p>
                            </div>

                            <?php }
                            }
                             ?>
                        </div>

                    </div>

                </div>
            </section>

            <!--  Why CMA  -->
            <?php
                $row5_title = get_field('title5');
                $row5_text  = get_field('approach_text');                
            ?>
            <section class="cma-main-body pt-5 pb-4" id="why_cma">
                <div class="container text-center">
                    <div class="col-md-8 cma-center fadeInUp wow" data-wow-delay="0.5s">
                        <h1 class="cma-title-red">
                            <?php echo ($row5_title) ? esc_html($row5_title) : ''; ?>
                        </h1>
                        <p class="cma-paragraph-why">
                            <?php  echo ($row5_text) ? $row5_text : ''; ?>
                        </p>
                    </div>

                    <?php
                        $approaches = get_field('approaches');
                        if($approaches){
                            $x = 0;
                            foreach ($approaches as $approach) {
                                $x++;
                                $approach_icon  = $approach['icon'];
                                $approach_title = $approach['title'];
                                $approach_text  = $approach['text']; 
                                //var_dump($approach);                              
                    ?>

                    <div class="cma-center cma-why-container fadeInUp wow" data-wow-delay="<?php echo ($x / 5). 's'; ?>">
                        <div class="cma-icon-black">
                            <?php if($approach_icon): ?>
                            <img src="<?php echo esc_html($approach_icon['url']);  ?>" alt="<?php echo ($approach_title) ? $approach_title : ''; ?>">
                        <?php endif; ?>
                        </div>
                        <div class="cma-title-dark">
                            <?php echo ($approach_title) ? esc_html($approach_title) : ''; ?>
                        </div>
                        <p class="cma-paragraph-why">
                            <?php echo ($approach_text) ? $approach_text : ''; ?>
                        </p>
                    </div>

                    <?php }
                    }
                     ?>

                </div>
            </section>

            <!--  Request Information -->
            <?php
                $row6_title     = get_field('title6');
                $row6_text      = get_field('description'); 
                $final_content =  email_obfuscator($row6_text);
                $row6_icon      = get_field('logo'); 
                $row6_small     = get_field('small_captions');              
            ?>
            <section class="pt-5 pb-4 mb-5" id="request_information">
                <div class="container text-center">
                    <div class="col-md-8 cma-center">
                        <div class="cma-logo fadeInUp wow" data-wow-delay="0.5s">
                            <?php if($row6_icon): ?>
                            <img src="<?php echo esc_url($row6_icon['url']); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <h1 class="cma-title-normal fadeInUp wow" data-wow-delay="0.7s">
                            <?php echo ($row6_title) ? esc_html($row6_title) : ''; ?>
                        </h1>
                        <div class="cma-paragraph-normal fadeInUp wow" data-wow-delay="1s">
                            <?php  echo ($row6_text) ? $final_content : ''; ?>
                        </div>

                        <div class="cma-contact-form col-md-8 cma-center fadeInUp wow" data-wow-delay="1s">
                            <?php gravity_form('Request Information', false, false, false, '', false); ?>
                            
                        </div>
                    </div>
                </div>
            </section>

    <?php //endwhile; // End of the loop. ?>

<?php //endif; // End of IF statement. ?>

<?php
get_footer();

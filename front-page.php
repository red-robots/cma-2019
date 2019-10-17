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
            
            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="cma-title-red">Helping Communities Thrive</h1>
                    <p class="cma-paragraph-normal">
                        Seasoned CMA managers help residential and commercial associations thrive with their management expertise and extensive network of skilled vendors.                        
                    </p>  
                    <div>
                        <a href="#" class="cma-solid-bottom">
                            Request Information
                        </a>
                    </div>  
                </div>                
            </div>

            <!--  Community Management Associates  -->
            <?php
                               
            ?>
            <div class=" mb-5">
                    <div class=" cma-main-body ">
                          <div class="justify-content-center">
                            <div class="col-md-8 mb-4 mt-4" style="margin: 0 auto">
                                <h1  class="text-center">
                                    Community Management Associates provides industry-leading services to HOAs of all sizes.
                                </h1>
                            </div>
                          </div>

                            <div class="container">
                                <div class="row p-5">

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

                                                <div class="col-md-3 mb-5">
                                                    <div class="text-center">
                                                        <?php if( get_field('services_thumbnail_image') ): ?>
                                                            <?php $image = get_field('services_thumbnail_image'); ?>
                                                            <?php if( $image ): ?>
                                                                <img src="<?php echo $image['url']; ?>" alt="" class="img-circle">
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
            <section class=" mb-5">
                <div class="container text-center">
                    <div class="justify-content-center">
                        <div class="col-md-8 cma-center">
                            <h1 class="cma-title-red mb-4">
                                Celebrating 30 years of service.
                            </h1 >
                            <p class="cma-paragraph-normal">
                                Community Management Associates was founded in 1989 with 7 associations and 4 employees. Today we manage over 900 associations located throughout the southeast. For the past 15 years, the Atlanta Business Chronicle ranked CMA as the number one community management firm in Atlanta. 
                            </p>
                            <p class="cma-paragraph-normal">
                                We have maintained this leadership position in the community management industry through adherence to our core values of integrity, loyalty, mutual respect, trust and professionalism. Our highly-trained and proactive staff demonstrate these qualities and values when working with internal and external customers. Our company has consistently set unmatched management standards within the industry. These values and standards have resulted in long-lasting relationships with our communities and associations.
                            </p>

                            <div class="mt-4 mb-4">
                                    <a href="#" class="cma-solid-bottom">
                                        Read more about our history
                                    </a>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <!--  We handle your financials  -->
            <section class=" cma-bg-mixed">
                <div class="container text-center pb-5 ">
                    <div class="col-md-8 cma-center  pt-5">
                        <h1 class="cma-title-white pb-4">
                            We handle your financials and infrastructure, so your family and community can concentrate on living.
                        </h1>
                        <p class="cma-paragraph-white text-white">
                              All communities are different. They have individual geographic needs, differing scales of building sizes and amenities and varying numbers of residents.  These needs often evolve as communities mature and as living needs and expectations change.
                        </p>
                        <p class="cma-paragraph-white text-white">
                              CMA focuses on three areas that take the burden of managing communities of any size off you, so you can focus on living your life.
                        </p>

                        <div class="row pt-4 pb-3">
                            <div class="col-sm-4">
                                <div class="cma-icon-holder">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/section3_financial_mgt.png" alt="">
                                </div>
                                <div class="cma-sub-title text-white">
                                  Financial Management
                                </div>
                                <p class="cma-paragraph-white">
                                  Our team of experienced accounting and administrative employees handle all of your accounting needs.
                                </p>
                            </div>

                            <div class="col-sm-4">
                                <div class="cma-icon-holder">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/section3_daily_operations.png" alt="">
                                </div>
                                <div class="cma-sub-title text-white">
                                  Daily Operations
                                </div>
                                <p class="cma-paragraph-white">
                                    A dedicated CMA association manager works for your association and board to best attend to your community’s needs.
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <div class="cma-icon-holder">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/section3_association.png" alt="">
                                </div>
                                <div class="cma-sub-title text-white">
                                    Association Management
                                </div>
                                <p class="cma-paragraph-white">
                                    Our knowledge and vendor contacts allow us to quickly address almost any type of work your community needs.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <!--  Why CMA  -->
            <section class="cma-main-body pt-5 pb-4" id="why_cma">
                <div class="container text-center">
                    <div class="col-md-8 cma-center">
                        <h1 class="cma-title-red">
                            Why CMA?
                        </h1>
                        <p class="cma-paragraph-why">
                            Our approach helps your community flourish for many years to come.
                        </p>
                    </div>

                    <div class="cma-center cma-why-container">
                        <div class="cma-icon-black">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/section4_focused.png" alt="">
                        </div>
                        <div class="cma-title-dark">
                            We are client focused
                        </div>
                        <p class="cma-paragraph-why">
                            Each association is unique and requires customized service.
                        </p>
                    </div>

                    <div class="cma-center cma-why-container">
                        <div class="cma-icon-black">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/section4_proactive.png" alt="">
                        </div>
                        <div class="cma-title-dark">
                            We are proactive
                        </div>
                        <p class="cma-paragraph-why">
                            A dedicated team actively manages your community.
                        </p>
                    </div>

                    <div class=" cma-center cma-why-container">
                        <div class="cma-icon-black">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/section4_value_oriented.png" alt="">
                        </div>
                        <div class="cma-title-dark">
                            We are value oriented.
                        </div>
                        <p class="cma-paragraph-why">
                            We continually work to negotiate the best rates and find savings.
                        </p>
                    </div>


                </div>
            </section>

            <!--  Request Information -->
            <section class="pt-5 pb-4 mb-5" id="request_information">
                <div class="container text-center">
                    <div class="col-md-8 cma-center">
                        <div class="cma-logo ">
                            <img src="images/section6_logo.png" alt="">
                        </div>
                        <h1 class="cma-title-normal">
                            Request Information
                        </h1>
                        <p class="cma-paragraph-normal">
                            We help communities of all sizes thrive. To find out what we can do for you, please fill out the form below or email us at sales@cmacommunities.com.
                        </p>

                        <div class="cma-contact-form col-md-8 cma-center">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" class="cma-input-form form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="cma-input-form form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="" class="form-control cma-input-form" cols="30" rows="4" placeholder="How may we help you?"></textarea>
                                </div>

                                <div class="small form-group text-muted">
                                    We believe in your right to privacy. We use your name and email address to respond to your inquiry – nothing else.
                                </div>
                                <div class="small form-group text-muted">
                                    This form is sent securely. All information provided is confidential. 
                                </div>

                                <div class="form-group mt-2 mb-2">
                                    <button type="button" class="cma-input-btn">Submit Request</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>

    <?php //endwhile; // End of the loop. ?>

<?php //endif; // End of IF statement. ?>

<?php
get_footer();

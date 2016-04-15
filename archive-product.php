<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <!-- Page title -->
        <h2 class="app-title">Outfit Builder</h2>

        <!-- Checkboxes for sorting clothing items -->
        <div class="men-women-checkbox">
            <input id="men" type="checkbox" checked name="men" value="men" />
            <label for="men">Men</label>
            <input id="women" type="checkbox" name="women" value="women" />
            <label for="women">Women</label>
        </div>
        <!-- End Checkboxes -->

        <!-- Wrapper for the mannequin and shop items -->
        <div class="application-wrapper">

        <!-- Start Mannequin -->
        <div class="mannequin">
            <!-- Begin svg code for the mannequin -->
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="140px" height="500px" viewBox="0 0 254 890" enable-background="new 0 0 254 890" xml:space="preserve">
                <g>
                    <g>
                        <path fill="#414042" d="M107.658,495.344c3.125,1.042,15.725,325.736,15.725,325.736s2.925,2.085,7.785,0
        c4.857-2.082,11.563-325.736,11.563-325.736H107.658z" />
                        <ellipse fill="#414042" cx="127.275" cy="651.873" rx="17.709" ry="18.492" />
                        <path fill="#414042" d="M141.99,687.985c0,6.765-6.584,12.241-14.713,12.241c-8.13,0-14.719-5.477-14.719-12.241
        c0-6.762,6.588-12.24,14.719-12.24C135.405,675.745,141.99,681.224,141.99,687.985z" />
                        <path fill="#414042" d="M123.382,726.581c0,0-17.723-11.761-31.612,42.41C77.882,823.165,1.482,830.8,10.512,862.053
        c9.03,31.254,40.284,2.774,29.866-9.027c-10.417-11.809,60.867-7.991,83.005-84.732V726.581z" />
                        <path fill="#414042" d="M131.167,726.581c0,0,17.725-11.761,31.609,42.41c13.893,54.174,90.292,61.809,81.258,93.061
        c-9.026,31.254-40.279,2.774-29.862-9.027c10.418-11.809-60.87-7.991-83.006-84.732V726.581z" />
                    </g>
                    <path fill="#414042" d="M136.483,23.943c0,7.765-5.591,14.064-12.499,14.064c-6.906,0-12.501-6.3-12.501-14.064
    c0-7.769,5.595-14.064,12.501-14.064C130.892,9.879,136.483,16.174,136.483,23.943z" />
                    <rect x="119.815" y="34.882" fill="#414042" width="8.333" height="18.232" />
                    <path fill="#A7A9AC" d="M94.037,96.217c0,0-47.4,16.146-61.464,25.002c-14.064,8.854,2.604,59.902,10.417,81.258
    c7.814,21.357,35.421,71.883,25.003,106.262c-10.417,34.378-29.169,34.378-30.732,83.342c-1.563,48.959-2.604,90.63-2.604,90.63
    c59.38,32.817,154.702,22.92,181.267,0c0,0,13.543-106.777-16.668-139.594c-30.212-32.814-19.273-79.174-10.418-100.01
    c8.855-20.835,39.913-72.924,30.115-123.972l-61.368-22.919l-3.124-42.192c-25.001-11.981-46.357-6.771-57.296,0L94.037,96.217z" />
                </g>
            </svg>
            <!-- End svg code for the mannequin -->

            <!-- Boxes where the clothes can be dropped -->
            <div class="drop-boxes">
                <div id="drop" class="drop-area" id="hat-drop">
                    <p>HAT</p>
                </div>
                <div class="drop-area" id="top-drop">
                    <p>TOP</p>
                </div>
                <div class="drop-area" id="bottom-drop">
                    <p>BOTTOM</p>
                </div>
            </div>
            <!-- End Boxes -->
        </div>
        <!-- End mannequin -->

        <!-- Begin Item List Area -->
        <div class="shop-items">

            <!-- Begin Area For Hats -->
            <div class="shop-category hats">

                <div class="category-heading">

                    <!-- Arrow taking the user to the bottoms section -->
                    <div class="left-arrow hats-to-bottoms arrow"><a>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                    </a></div>

                    <!-- Category Title -->
                    <h2 class="cat-title">Hats</h2>

                    <!-- Arrow taking the user to the tops section -->
                    <div class="right-arrow hats-to-tops arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                    </div>

                </div>

                <!-- Men's Hats -->
                <div class="men">

                <div class="left-arrow mens-hats-left arrow"><a>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                </a></div>

                    <!-- Wrapper with a set width to display the items in a block -->
                    <div class="items-wrapper">

                    <!-- Woocommerce loop -->

                    <?php
                        $i = 0;
                        $args = array( 'post_type' => 'product', 'product_cat' => 'mens+hats');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                        <?php if ($i % 4 == 0 && $i != 0) { ?>
                            </div>
                        <?php } ?>
                        <?php if ($i % 4 == 0) { ?>
                            <div class="products-div">
                        <?php } $i++;?>


                            <li class="product hat">

                                <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="100px" height="100px" />'; ?>

                                <p class="product-name"><?php the_title(); ?> - <span class="price"><?php echo $product->get_price_html(); ?></span></p>

                                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                            </li>
                            <?php if((($loop->current_post + 1) == ($loop->post_count)) && $i % 4 != 0) { ?>
                            </div>
                            <?php } ?>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                    <!-- End Woocommerce loop -->

                </div>
                <!-- End of the items wrapper -->

                <div class="right-arrow mens-hats-right arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                </div>

                </div>
                <!-- End men's wrapper -->

                <!-- End Men's Hats -->

                <!-- Women's Hats -->
                <div class="women">

                    <div class="left-arrow womens-hats-left arrow"><a>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                </a></div>

                    <!-- Wrapper with a set width to display the items in a block -->
                    <div class="items-wrapper">

                    <!-- Woocommerce loop -->

                    <?php
                    $i = 0;
                        $args = array( 'post_type' => 'product', 'product_cat' => 'womens+hats');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                    <?php if ($i % 4 == 0 && $i != 0) { ?>
                        </div>
                    <?php } ?>
                    <?php if ($i % 4 == 0) { ?>
                        <div class="products-div">
                    <?php } $i++;?>

                            <li class="product hat">

                                <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="100px" height="100px" />'; ?>

                                <p class="product-name"><?php the_title(); ?> - <span class="price"><?php echo $product->get_price_html(); ?></span></p>

                                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                            </li>
                            <?php if((($loop->current_post + 1) == ($loop->post_count)) && $i % 4 != 0) { ?>
                            </div>
                            <?php } ?>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                    <!-- End Woocommerce loop -->

                    </div>
                    <!-- End wrapper -->
                    <div class="right-arrow womens-hats-right arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                    </div>

            </div>
                <!-- End Women's Hats -->


            </div>
            <!-- End Area For Hats -->

            <!-- Begin Area For Tops -->
            <div class="shop-category tops">

                <div class="category-heading">

                    <!-- Arrow taking the user to the hats section -->
                    <div class="left-arrow tops-to-hats arrow"><a>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                    </a></div>

                    <!-- Category Title -->
                    <h2 class="cat-title">Tops</h2>

                    <!-- Arrow taking the user to the bottoms section -->
                    <div class="right-arrow tops-to-bottoms arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                    </div>

                </div>

                <!-- Men's Tops -->
                <div class="men">

                <div class="left-arrow mens-tops-left arrow"><a>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                </a></div>

                    <!-- Wrapper with a set width to display the items in a block -->
                    <div class="items-wrapper">

                    <!-- Woocommerce loop -->

                    <?php
                        $i = 0;
                        $args = array( 'post_type' => 'product', 'product_cat' => 'tops+mens');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <?php if ($i % 4 == 0 && $i != 0) { ?>
                        </div>
                    <?php } ?>
                    <?php if ($i % 4 == 0) { ?>
                        <div class="products-div">
                    <?php } $i++;?>

                            <li class="product top">

                                <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="100px" height="100px" />'; ?>

                                <p class="product-name"><?php the_title(); ?> - <span class="price"><?php echo $product->get_price_html(); ?></span></p>

                                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                            </li>
                            <?php if((($loop->current_post + 1) == ($loop->post_count)) && $i % 4 != 0) { ?>
                            </div>
                            <?php } ?>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                    <!-- End Woocommerce loop -->

                    </div>
                    <!-- End wrapper -->

                    <div class="right-arrow mens-tops-right arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                    </div>

                </div>
                <!-- End Men's Tops -->

                <!-- Women's Tops -->
                <div class="women">

                    <div class="left-arrow womens-tops-left arrow"><a>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                </a></div>

                    <!-- Wrapper with a set width to display the items in a block -->
                    <div class="items-wrapper">

                    <!-- Woocommerce loop -->

                    <?php
                        $i = 0;
                        $args = array( 'post_type' => 'product', 'product_cat' => 'womens+tops');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <?php if ($i % 4 == 0 && $i != 0) { ?>
                        </div>
                    <?php } ?>
                    <?php if ($i % 4 == 0) { ?>
                        <div class="products-div">
                    <?php } $i++;?>

                            <li class="product top">

                                <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="100px" height="100px" />'; ?>

                                <p class="product-name"><?php the_title(); ?> - <span class="price"><?php echo $product->get_price_html(); ?></span></p>

                                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                            </li>
                            <?php if((($loop->current_post + 1) == ($loop->post_count)) && $i % 4 != 0) { ?>
                            </div>
                            <?php } ?>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                    <!-- End Woocommerce loop -->

                    </div>
                    <!-- End wrapper -->

                    <div class="right-arrow womens-tops-right arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                    </div>

                </div>
                <!-- End Women's Tops -->

            </div>
            <!-- End Area For Tops -->

            <!-- Begin Area For Bottoms -->
            <div class="shop-category bottoms">

                <div class="category-heading">

                    <!-- Arrow taking the user to the tops section -->
                    <div class="left-arrow bottoms-to-tops arrow"><a>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                    </a></div>

                    <!-- Category Title -->
                    <h2 class="cat-title">Bottoms</h2>

                    <!-- Arrow taking the user to the hats section -->
                    <div class="right-arrow bottoms-to-hats arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                    </div>

                </div>

                <!-- Men's Bottoms -->
                <div class="men">

                <div class="left-arrow mens-bottoms-left arrow"><a>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                </a></div>

                    <!-- Wrapper with a set width to display the items in a block -->
                    <div class="items-wrapper">

                    <!-- Woocommerce loop -->

                    <?php
                        $i = 0;
                        $args = array( 'post_type' => 'product', 'product_cat' => 'bottoms+mens');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <?php if ($i % 4 == 0 && $i != 0) { ?>
                        </div>
                    <?php } ?>
                    <?php if ($i % 4 == 0) { ?>
                        <div class="products-div">
                    <?php } $i++;?>

                            <li class="product bottom">

                                <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="100px" height="100px" />'; ?>

                                <p class="product-name"><?php the_title(); ?> - <span class="price"><?php echo $product->get_price_html(); ?></span></p>

                                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                            </li>
                            <?php if((($loop->current_post + 1) == ($loop->post_count)) && $i % 4 != 0) { ?>
                            </div>
                            <?php } ?>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                    <!-- End Woocommerce loop -->

                    </div>
                    <!-- End wrapper -->

                    <div class="right-arrow mens-bottoms-right arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                    </div>

                </div>
                <!-- End Men's Bottoms -->

                <!-- Women's Bottoms -->
                <div class="women">

                    <div class="left-arrow womens-bottoms-left arrow"><a>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                </a></div>

                    <!-- Wrapper with a set width to display the items in a block -->
                    <div class="items-wrapper">

                    <!-- Woocommerce loop -->

                    <?php
                        $i = 0;
                        $args = array( 'post_type' => 'product', 'product_cat' => 'womens+bottoms');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <?php if ($i % 4 == 0 && $i != 0) { ?>
                        </div>
                    <?php } ?>
                    <?php if ($i % 4 == 0) { ?>
                        <div class="products-div">
                    <?php } $i++;?>

                            <li class="product bottom">

                                <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="100px" height="100px" />'; ?>

                                <p class="product-name"><?php the_title(); ?> - <span class="price"><?php echo $product->get_price_html(); ?></span></p>

                                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                            </li>
                            <?php if((($loop->current_post + 1) == ($loop->post_count)) && $i % 4 != 0) { ?>
                            </div>
                            <?php } ?>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                    <!-- End Woocommerce loop -->

                    </div>
                    <!-- End wrapper -->

                    <div class="right-arrow womens-bottoms-right arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                    </div>

                </div>
                <!-- End Women's Bottoms -->

            </div>
            <!-- End Area For Bottoms -->

        </div>
        <!-- End Item List Area -->

        </div>
        <!-- End wrapper for mannequin and shop items -->

        <div class="user-options">
            <button class="clear" type="button">Reset</button>
        </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>

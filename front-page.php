<!-- just a place for the arrow to target -->
<div id="top"></div>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DapItUp
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <!-- Home Header -->
        <header>
            <!-- Div to hold the background image -->
            <div class="header-card">
                <!-- Div to overlay the image -->
                <div class="gray-overlay">
                    <!-- Div to hold the images and cirlces -->
                    <div class="circle-position">
                        <h1>Dap it Up.</h1>
                        <!-- Div to hold the cirlces -->
                        <div class="circle-wrap">
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>
                    </div>
                    <h2>GET DAPPER WITH IT.</h2>
                </div>
            </div>
        </header>
        <!-- End Home Header -->

        <!--Back to top button -->
        <a href="#about">
            <div class="back-to-top">
                <div class="up-arrow arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 309.143 309.143" style="enable-background:new 0 0 309.143 309.143;" xml:space="preserve"><path style="fill:white;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></svg>
                </div>
            </div>
        </a>

         <!-- About Dap It Up! -->
         <div class="about-dap-it-up-wrapper">
            <p class="about-dap-it-up">
                This project was designed to combat the problems many of us face when online shopping. Sure we like a top or a pair of pants, but the sum of the whole has always been better than the individual part. Here at DapItUp! we like to look at the big picture. Below this you'll find the maker's biographies and a contact form if you need to get in touch. Head on over to the application page to find our outfit builder where you'll be able to put together an outfit and preview it. If you like what you see, feel free to add the clothes to your shopping cart and check out using paypal!
            </p>
        </div>

        <!-- About Section -->
        <div class="about-wrap" id="about">
            <div class="inner-wrap">

            <h2 class="section-heading">About Us</h2>

                <div class="team-picture-wrapper">
                    <img class="team-picture" src="<?php echo get_site_url(); ?>/wp-content/themes/dapitup/img/brandon.jpg">
                    <img class="team-picture" src="<?php echo get_site_url(); ?>/wp-content/themes/dapitup/img/winnie.jpg"
                </div>

                <div class="bio-wrap">
                    <p>Hey there! We're the team behind DapItUp! I'm Brandon on the right. And I'm Winnie on the left. We're both seniors in the Web Design and Development program area at Southwest Career and Technical Academy.</p>
                </div>
            </div>
        </div>
        <!-- End About Section -->

        <!-- Contact Section -->
        <div class="contact-wrap">
            <h2 class="section-heading">Contact Us</h2>

            <!-- Begin Contact Form -->
            <form action="https://formspree.io/dapitup@gmail.com" method="POST">

                <!-- Collect User's Name -->
                <div class="field-wrapper">
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name" placeholder="John Dough">
                </div>

                <!-- Collect User's Email -->
                <div class="field-wrapper">
                    <label for="email">Email :</label>
                    <input type="email" name="_replyto" id="email" placeholder="johndough@gmail.com">
                </div>

                <!-- Collect User's Message -->
                <textarea id="message" placeholder="Type your message here!" class="message-field"></textarea>
                <input class="submit-button" type="submit" value="Send">
            </form>
            <!-- End Contact Form -->

        </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer(); ?>

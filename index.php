<?php
/**
 * The main template file
 * This is our first theme
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Adidas_Theme
 */

get_header();
?>

	
	<html>
		<head>
			<title>Adidas Theme</title>
			 <!-- owl carousel -->
			 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./plugins/owl.style.css">

    <!-- Fancybox and Jquery CDN -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="./plugins/jquery.fancybox.min.css">
		</head>
		<body>
		
		<div class="header">
        <div class="container">
            <div class="top">
                <p>Live Race Stream From Gator Nationals in Sarasota, Fl /</p>
                <a href="#">Watch Now</a>
                <div class="icon">              
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Images/x-mark.png" alt="Xmark Icon">
                </div>
            </div>
        </div>
    </div>

	<div class="adidas">
        <div class="container">
            <div class="logo">          
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Images/logo.png" alt="Adidas Logo">
            </div>
            <div class="burger">
                <img src="assets/Images/burger-icon.png" onclick="ClickOnBurger()">
            </div>    
            <div class="burger">
                <img src="assets/Images/burger-icon.png" onclick="ClickOnBurger()">
            </div>        
            <!-- <div class="cross-icon">
                <img src="assets/Images/x-mark.png" onclick="ClickOnBurger()">
            </div> -->
            <!-- Need Some Time -->
            <div class="button">
                <button class="button-1">
                    <p id="mem">Membership</p>
                </button>
                <button class="button-2">
                    <p id="ac">Account</p>
                </button>
            </div>
        </div>
    </div>

	
    <div class="navigation" id="navigation">
        <div class="container">
            <div class="nav-bar" id="nav-bar">
                <div class="nav-text">
                    <ul>
                        <li><a href="#"><b>Our Tracks</b></a></li>
                        <li><a href="#"><b>Find Events</b></a></li>
                        <li id="track"><a href="#"><b>Track Map</b></a></li>
                        <!-- <div class="track"><li id="track"><a href="#"><b>Track Map</b></a></li>
                        <div class="drop-down-links">
                                <div class="drop-down">
                                    <div class="div-content">
                                        <div class="part-1">
                                            <p><a href="#">Quienes Somos</a></p>                                         
                                            <div class="vision">
                                                <p><a href="#">Misión y Visión</a></p>
                                            </div>                                    
                                            <p><a href="#">Objetivos y Funciones</a></p>                                      
                                            <p><a href="#">Organigrama</a>                                             
                                            <p><a href="#">Propuesta de Valor</a></p>                                           
                                            <p><a href="#">Valores</a></p>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>                                        
                    </div> -->
						
                        <li><a href="#"><b>Shop</b></a></li>
                        <li><a href="#"><b>About Us</b></a></li>
                    </ul>
                </div>
            </div>
            <div class="search">
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                </div>
                <div class="search-icon">                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Images/search-icon.png" alt="Search Icon">
                </div>
            </div>
        </div>
    </div>

	
    <!-- Banner Slider Start Here-->

    <div class="Main-heroA">

        <div class="Container">

            <div class="owl-carousel owl-theme">

                <div class="item">

                    <div class="hero-backPattern">

                        <div class="TextSide">

                            <h1>GET READY FOR NEW <br>ADIDAS BRANDS</h1> <br>
                            <p>
Adidas tracks all begin with a starting gate end with
a finish line, but everything in between varies from track
to track. Because no two tracks are alike, this action
sport keeps you on your toes wherever you are racing.
                                    </p>

                        </div>

                        <div class="ShoeSide">
                            <div class="wrapper ">
                                <a data-fancybox="gallery" class="play-icon"
                                    href="https://www.youtube.com/watch?v=9snT9rWxO4g"><img src="<?php echo get_template_directory_uri(); ?>/assets/Images/play-icon.png" alt="Play Icon"></a>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="item">

                    <div class="hero-backPattern">

                        <div class="TextSide">

                            <h1>GET READY FOR NEW <br>ADIDAS BRANDS</h1> <br>
                            <p>
Adidas tracks all begin with a starting gate end with
a finish line, but everything in between varies from track
to track. Because no two tracks are alike, this action
sport keeps you on your toes wherever you are racing.
                                    </p>

                        </div>

                        <div class="ShoeSide">
                            <div class="wrapper ">
                                <a data-fancybox="gallery" class="play-icon"
                                    href="https://www.youtube.com/watch?v=9snT9rWxO4g"><img src="<?php echo get_template_directory_uri(); ?>/assets/Images/play-icon.png" alt="Play Icon"></a>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="item">

                    <div class="hero-backPattern">

                        <div class="TextSide">

                            <h1>GET READY FOR NEW <br>ADIDAS BRANDS</h1> <br>
                            <p>
Adidas tracks all begin with a starting gate end with
a finish line, but everything in between varies from track
to track. Because no two tracks are alike, this action
sport keeps you on your toes wherever you are racing.
                                    </p>

                        </div>

                        <div class="ShoeSide">
                            <div class="wrapper ">
                                <a data-fancybox="gallery" class="play-icon"
                                    href="https://www.youtube.com/watch?v=9snT9rWxO4g"><img src="<?php echo get_template_directory_uri(); ?>/assets/Images/play-icon.png" alt="Play Icon">
    </a>

                            </div>
                        </div>


                    </div>

                </div>

                <div class="item">

                    <div class="hero-backPattern">

                        <div class="TextSide">

                            <h1>GET READY FOR NEW <br>ADIDAS BRANDS</h1> <br>
                            <p>
Adidas tracks all begin with a starting gate end with
a finish line, but everything in between varies from track
to track. Because no two tracks are alike, this action
sport keeps you on your toes wherever you are racing.
                                    </p>

                        </div>

                        <div class="ShoeSide">
                            <div class="wrapper ">
                                <a data-fancybox="gallery" class="play-icon"
                                    href="https://www.youtube.com/watch?v=9snT9rWxO4g"><img src="<?php echo get_template_directory_uri(); ?>/assets/Images/play-icon.png" alt="Play Icon"></a>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>


    </div>

  




    
	
	</body>
	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/jquery.fancybox.min.js"></script>

<!-- FancyBox -->
<script src="./plugins/jquery.fancybox.min.js"></script>


<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
        "<img src='<?php echo get_template_directory_uri(); ?>/assets/Images/hero-slider-leftt-arrow.png' alt=''>",
        "<img src='<?php echo get_template_directory_uri(); ?>/assets/Images/hero-slider-right-arrow.png' alt=''>"
    ],
        responsive: {
            0: {

                items: 1
            },
            600: {

                items: 1,
                merge: true,

            },
            1000: {

                items: 1
            }
        }
    })


</script>

		</html>
		
		<!-- <?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title() ?></h1>
		<?php endwhile; ?>
		<?php endif; ?> -->

<?php
get_sidebar();
get_footer();
?>





<!doctype html>
<!--
	Template:	 Unika - Responsive One Page HTML5 Template
	Author:		 imransdesign.com
	URL:		 http://imransdesign.com/
    Designed By: https://www.behance.net/poljakova
	Version:	1.0	
-->
<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Fipulp - Asri Peni Wulandari</title>
		<meta name="description" content="Unika - Responsive One Page HTML5 Template">
		<meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
		<meta name="author" content="imransdesign.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="{{asset('inc/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('inc/animations/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('inc/font-awesome/css/font-awesome.min.css')}}"> <!-- Font Icons -->
		<link rel="stylesheet" href="{{asset('inc/owl-carousel/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('inc/owl-carousel/css/owl.theme.css')}}">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset('css/fp_reset.css')}}">
		<link rel="stylesheet" href="{{asset('css/fp_style.css')}}">
		<link rel="stylesheet" href="{{asset('css/fp_mobile.css')}}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('css/skin/cool-gray.css')}}">
        <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/night-purple.css"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <link href="{{asset('css/lightbox.css')}}" rel="stylesheet">
	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="index.html">Unika</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="body">Home</a></li>
                            <li><a class="page-scroll" href="#about-section">About</a></li>
                            <li><a class="page-scroll" href="#portfolio-section">Gallery</a></li>
                            <li><a class="page-scroll" href="#team-section">Team</a></li>                            
                            <li><a class="page-scroll" href="#latest-news-section">Latest News</a></li> 
                            <li><a class="page-scroll" href="#contact-section">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            
            
            
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url('{{asset('storage/fipulp/page/'.$bgslider)}}');">
				
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">

						<div id="owl-intro-text" class="owl-carousel">
							<div class="item">
								<h1>Fipulp</h1>
								<p>Hasil Tanaman Rami</p>
                                <div class="extra-space-l"></div>
								<a class="page-scroll btn btn-primary" href="#about-section"   role="button">View More!</a>
							</div>
							
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
                
                
                
                
            <!-- Begin about section -->
			<section id="about-section" class="page bg-style1">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>FIPULP</h2>
                            <div class="devider"></div>
                            <p class="subtitle"><img src="{{asset('images/fipulp/organic.png')}}" width="200" length="200"></p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin rotate box-1 -->
                <div class="rotate-box-1-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Teknologi Serat</h4>
                                        <p>Pengolahan serat rami berbasis biologi yang meliputi biodegumming dan biobleaching>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                                    <span class="rotate-box-icon"><i class="fa fa-diamond"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Proses mikrobiologis</h4>
                                        <p>Proses produksi kultur mikroba untuk biodegumming dan biobleaching</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fa fa-heart"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Proses Enzim</h4>
                                        <p>Proses pengujian enzim dalam proses biobleaching</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                                    <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Sistem reaktor</h4>
                                        <p>Teknologi perancangan reaktor untuk proses biodegumming dan biobleaching</p>
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End rotate box-1 -->             
          </section>
          <!-- End about section -->
 
   
            <!-- Begin Portfolio -->
            <section id="portfolio-section" class="page bg-style1">
            	<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Begin page header-->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>Gallery</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">What we are proud of</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
                                <div class="portfoloi_content_area" >
                                   <div class="portfolio_content">
                                        <div class="row"  id="portfolio">
                                            @foreach ($gallery as $img)
                                            <div class="col-xs-12 col-sm-4 appsDevelopment">
                                                <div class="portfolio_single_content">
                                                    <img src="images/fipulp/gallery/{{$img['image_source']}}" alt="title"/>
                                                    <div>
                                                        <a href="images/fipulp/gallery/{{$img['image_source']}}" data-lightbox="roadtrip">{{$img['title']}}</a>
                                                        <span>{{$img['subtitle']}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End portfolio -->
            
            <!-- Begin team-->
            <section id="team-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url('{{asset('storage/fipulp/page/'.$bgteam)}}');"">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Our Team</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Meet our experts</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                    <div class="row">
                        <div class="team-items">
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.2s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="{{asset('images/fipulp/team/1.jpg')}}" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>John Doe</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.3s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="{{asset('images/fipulp/team/1.jpg')}}" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-female"></i>
                                                    <p>Jane Doe</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.4s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="{{asset('images/fipulp/team/1.jpg')}}" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>John Doe</p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="{{asset('images/fipulp/team/1.jpg')}}" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>John Doe</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.6s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="{{asset('images/fipulp/team/1.jpg')}}" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>John Doe</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.7s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="{{asset('images/fipulp/team/1.jpg')}}" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>John Doe</p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.8s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="{{asset('images/fipulp/team/1.jpg')}}" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-female"></i>
                                                    <p>Jane Doe</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>  
                    </div>
                </div>

            </section>
            <!-- End team-->
                
    <!-- Start Latest News Section -->
    <section id="latest-news-section" class="page bg-style1">
        <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="latest-news">
                                <!-- Begin page header-->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>Latest News</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">What happening</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
            <div class="row">
                <div class="latest-news">
                    @foreach($posts as $po)
                    <div class="col-md-4">
                        <div class="latest-post">
                            <img src="images/fipulp/posts/{{$po->image()}}" class="img-responsive" alt="">
                            <h4><a href="#">{{$po['title']}}</a></h4>
                            <div class="post-details">
                                <span class="date">{{$po->date()}}</span>                                
                            </div>
                            <p>{{$po['content']}}</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-md-4">
                        <div class="latest-post">
                            <img src="images/biodegum/about-02.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>17</strong> <br>Feb , 2014</span>
                                
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="latest-post">
                            <img src="images/biodegum/about-03.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="latest-post">
                            <img src="images/biodegum/about-01.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="latest-post">
                            <img src="images/biodegum/about-02.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="latest-post">
                            <img src="images/biodegum/about-03.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->
                
          <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url('{{asset('storage/fipulp/page/'.$bgcontact)}}');">
            <div class="cover"></div>
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Contacts</h2>
                            <div class="devider"></div>
                            <p class="subtitle">All to contact us</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Our Address</h4>
                                    <ul class="contact-address">
			                            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; 100 Limpbiscayne Blvd. (North) 17st Floor ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New World Tower New York ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New York, USA, 33148</li>
			                            <li><i class="fa fa-phone"></i>&nbsp; 1 -234 -456 -7890</li>
			                            <li><i class="fa fa-print"></i>&nbsp; 1 -234 -456 -7890</li>
			                            <li><i class="fa fa-envelope"></i> info@yourdomain.com</li>
			                            <li><i class="fa fa-skype"></i> Unika-Design</li>
			                        </ul>
                                </div>
                            </div>
                        
                        	<div class="col-sm-6">
                                <div class="contact-form">
                                	<h4>Write to us</h4>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control input-lg" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Send</button>
                                    </form>
                                </div>	
                            </div>
                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->
                
                

                
            <!-- Begin footer -->
            <footer class="text-off-white">
            
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="c-copyright c-font-white">2017 &copy; Asri Peni Wulandari, Developed by <a href="http://scriptpainter.com" style="color:#337ab7;">ScriptPainter</a>
                            <span class="c-font-white">All Rights Reserved.</span>
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        
        
        
        <!-- Plugins JS -->
		<script src="{{asset('inc/jquery/jquery-1.11.1.min.js')}}"></script>
		<script src="{{asset('inc/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('inc/owl-carousel/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('inc/stellar/js/jquery.stellar.min.js')}}"></script>
		<script src="{{asset('inc/animations/js/wow.min.js')}}"></script>
        <script src="{{asset('inc/waypoints.min.js')}}"></script>
		<script src="{{asset('inc/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('inc/classie.js')}}"></script>
		<script src="{{asset('inc/jquery.easing.min.js')}}"></script>
		<script src="{{asset('inc/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('inc/smoothscroll.js')}}"></script>
        <script src="{{asset('js/lightbox.js')}}"></script>
		<!-- Theme JS -->
		<script src="{{asset('js/fipulp/theme.js')}}"></script>

    </body> 
        
            
</html>

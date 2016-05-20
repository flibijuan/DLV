
<!doctype html>
<html lang="en">
    <head>
        <title>Dymolab Ventures | Home </title>

	   	<?php $docpath = $_SERVER['DOCUMENT_ROOT'];?>
        <?php include_once($docpath . "/php/head.php"); ?>
		<style> <?php include_once($docpath . "/css/timeline.css"); ?> </style>


    <style><?php include_once($docpath . "/css/timeline.css"); ?></style>
    </head>
    <body class="btn-rounded">
<?php include_once("php/googleanalytics.php") ?>

		<div class="nav-container">
			<nav>
				<?php include_once("php/navbar.php") ?>
		    </nav>
		</div>


<div class="main-container">
		<section class="image-slider slider-all-controls controls-inside pt0 pb0 height-70 parallax">
		        <ul class="slides">
		           <li class="overlay image-bg">
		                <div class="background-image-holder">
		                    <img alt="image" class="background-image" src="img/home3.jpg">
		                </div>
		                <div class="container v-align-transform">
		                    <div class="row text-center">
		                        <div class="col-md-10 col-md-offset-1">
		                            <h2 class="mb-xs-16">Meet Dymolab, the cleverest way<br class="hidden-sm"> to expand your company to Latin America.</h2>
		                            <p class="lead mb40">We look for innovative projects and help them to enter the Latin American markets by finding the right local talent to develop the business and and providing all the support needed to scale up the project.</p>
		                            <a class="btn btn-lg" href="/services.php">Services</a>
		                            <a class="btn btn-lg btn-filled" href="/startups.php">our aproach</a>
		                        </div>
		                    </div>

		                </div>

		            </li>
		        </ul>
		    </section>

        <section id = "information">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-4">
		                    <div class="feature feature-1 boxed">
		                        <div class="text-center">
		                            <i class="icon et-line-globe"></i>
		                            <h4>Market fit assesment</h4>
		                        </div>
		                        <p>We make sure that you have a local proof of concept. We do this with our own experts or by advizing your team (local or international) on how, in a very lean way you yourself can test assumptions and understand the right scaling-up strategy to enter the region.
<br><br></p>
		                    </div>

		                </div>
		                <div class="col-sm-4">
		                    <div class="feature feature-1 boxed">
		                        <div class="text-center">
		                        <i class="icon et-line-profile-male"></i>
		                            <h4>Create your local team</h4>
		                        </div>
		                        <p>We find outstanding entrepreneurs, organizations, managers and technical expertise for you to deploy your business. Throughout this process Dymmolab will be your ally in closing a deal with the local talent.
 <br><br><br></p>
		                    </div>

		                </div>
		                <div class="col-sm-4">
		                    <div class="feature feature-1 boxed">
		                        <div class="text-center">
		                             <i class="icon et-line-hourglass"></i>
		                            <h4> Go-to-market speed</h4>
		                        </div>
		                        <p>We believe that companies in expansion require efficiency in implementation and excellence in execution to generate a competitive advantage. At Dymolab we have you covered on all fronts: legal, strategy, office space, distribution channels, network of partner companies etc...
</p>
		                    </div>

		                </div>

		            </div>

		        </div>

		    </section>


        <section class="bg-primary">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h3 class="mb0 inline-block p32 p0-xs">
                                  Are you thinking about entering the >600m market in Latin America?</h3>
                                <h4> we focus on supporting the innovation industry: getting tech products and services to market and adapt them to the local needs</h4>
                            </div>
                        </div>

                    </div>

                </section>



        <section class="image-edge">
        		        <div class="col-md-6 col-sm-4 p0 col-md-push-6 col-sm-push-8">
        		            <img width="80%" alt="Screenshot" class="mb-xs-24" src="img/latinamerica.png">
        		        </div>
        		        <div class="container">
        		            <div class="col-md-5 col-md-pull-0 col-sm-7 col-sm-pull-4 v-align-transform">
        		                <h1 class="large mb40 mb-xs-16">Starting from Colombia</h1>

        		                <p class="lead mb40">
        		                We initiate the scale-up your project by first expanding your business to the more stable markets in the region. Our offices are in Bogota, Colombia, and we recommend our clients to start their expansion strategy here. As soon as the team in Colombia is up an running we will support you to enter other high potential markets like Mexico, Brazil and Chile.

        		                </p>

        		            </div>
        		        </div>

        		    </section>






                <section class="image-bg bg-dark parallax overlay pt120 pb120">
        		        <div class="background-image-holder">
        		            <img alt="Background Image" class="background-image" src="img/app9.jpg">
        		        </div>
        		        <div class="container">
        		            <div class="row">
        		                <div class="col-sm-12 text-center">
        		                    <h2 class="uppercase mb8">Why Dymolab</h2>
        		                    <p class="lead mb40"> Our clients have discovered that working with us means achieving market penetration and financial sustainability for their businesses in Latin America in record time. This reduces the cost of the implementation and provides a competitive advantage on the local market.</p>

        		                </div>
        		            </div>

        		        </div>

        		    </section>








		  <section class="bg-dark pt64 pb64">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h2 class="mb8">Where to find us</h2>
		                    <p class="lead mb40 mb-xs-24">If you want to know more about our pricing, how to become a client and general information about how to expand your startup to Latin America send us an email at 


		                   <a href="mailto:scale-up@dymolab.com">contact@dymolab.com</a></p>
		                </div>
		            </div>

		        </div>

		    </section>


		<?php include_once($docpath . "/php/footer.php") ?>

		</div>

		<!-- Include head.js -->
        <script src="/js/head.load.min.js"></script>
        <!-- load all js asynchronously but in order -->
        <script>
        head.load(	"/js/jquery.min.js",
        			"/js/bootstrap.min.js",
        			"/js/flexslider.min.js",
        			"/js/parallax.js",
              "js/lightbox.min.js",
              "js/spectragram.min.js",
        			"/js/scripts.min.js"	);
        </script>





    </body>
</html>

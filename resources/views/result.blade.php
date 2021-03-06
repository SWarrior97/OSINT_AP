<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>OSint Cape Vert</title>
        <link rel="stylesheet" href="css/result.css">
        
        <style>

            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              padding-top: 100px; /* Location of the box */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
              background-color: #fefefe;
              margin: auto;
              padding: 20px;
              border: 1px solid #888;
              width: 80%;
            }

            /* The Close Button */
            .close {
              color: #aaaaaa;
              float: right;
              font-size: 28px;
              font-weight: bold;
            }

            .close:hover,
            .close:focus {
              color: #000;
              text-decoration: none;
              cursor: pointer;
            }
            </style>
    </head>
    <body>
        <header id="header">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="{{route('welcome')}}"><img src="img/OSINT_TEST.png" alt="" title="" /></a>
                        <h2 style="float: right;margin-top: 0px;margin-right: 100px;color:aqua">OSInt Cape Vert</h2>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
            <div id="loading" class="se-pre-con"></div>
            <h2 id="prencher" hidden></h2>
            <h2 id="prencher_empresa" hidden></h2>
            
            <table id="myTable" hidden>
            </table>

            <table id="myTable_2" hidden>
            </table>

            <div class="mapWrap">
	            <div class="mapResult">
		            <div id="gmap0-map-canvas">
	
		            </div> 
	            </div>
            </div>
            
            <div id="back-top" class="tooltip">
                <a id="go_top" title="Go to Top" href="#"></a>
                <span class="tooltiptext">Back Top</span>
	        </div>
        
            <!-- The Modal -->
            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <span id="close_modal" class="close">&times;</span>
                <p>Fontes Consultadas <br>Páginas Amarelas<br>CVmultimédia</p>
                <a class="btn btn-info" href="#"> Visit Perfil</a>
              </div>

            </div>
    <script type="text/javascript">
        var type = "<?php echo $type ?>";
        var name = "<?php echo $name ?>";
        var phone = "<?php echo $phone ?>";

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqQK6S-LH37QTeDXX6qMSe6F-onRk1ilA&callback=initMap&amp;language=pt-PT&amp;version=3.1.18"async defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
    <script src="js/style.js"></script>
    <script src="js/main.js"></script>
    <script src="js/search.js"></script>
    <script src="js/search_empresa.js"></script>
    </body>
</html>

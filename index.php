<!doctype html>

<html>

<head>

<meta charset="utf-8">










<title>TPE</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<?php include ("includes/head.inc.php");?>

<script type="text/javascript"> 

$(function() {

			$('ul.viana li ul').hide().removeClass('appelR');

			$('nav.viana li a').addClass('active');

			$('ul.viana li').hover(

			  function () {

				$('ul', this).stop().show();

			  },

			  function () {

				$('ul', this).stop().hide();

			  }

			);

 });

</script>

    <link rel="stylesheet" href="modules/nslider/nivo-slider.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="modules/nslider/themes/default/default.css" type="text/css" media="screen" />

        <link rel="stylesheet" href="modules/nslider/themes/light/light.css" type="text/css" media="screen" />

</head>



<!--<script>

 $(function() {	

	 

            $('#presenceMonde').bind('click', function(e) {

                e.preventDefault();

                $('#popUpPresMond').bPopup();

            });

            $('#presenceMonde2').bind('click', function(e) {

                e.preventDefault();

                $('#popUpPresMond2').bPopup();

            });



 });	

</script>-->



<body>

<div class="wrapperV">

  <?php include ("includes/nav.inc.php");?>



<div class="mapM">

        <div class="slider-wrapper theme-default">

            <div id="slider" class="nivoSlider">

    

     <img src="images/slider.jpg" data-transition="boxRain"/>

      <img src="images/slide2.jpg" data-transition="boxRain" />

           <img src="images/slide3.jpg" data-transition="boxRainReverse" />         

             </div>



  </div>

</div>



  <div class="rowType1 clearfix"> 

    <div class="blocType2a marginRight10"> <span class="texteEtude">
   
    <span class="texteST1"> Dans ce carnet de bord, nous avons décrit ce que nous avons réalisé pendant nos heures de TPE.</span>
    <br><br>
    
    <a href="http://soykanlar.com/TPE/carnet.php">Carnet de bord</a></div>

    <div class="blocType2b marginLeft10">

      <h2><b>Expérience</b></h2>

    <span class="texteST2">Nous avons mit en place une expérience qui a  pour but montrer le rendement électrique d’un panneau photovoltaïque selon différents éclairements, ainsi nous montrer ce qu'il donnerai sur une vrai route.</span>
    <br>
<a href="http://soykanlar.com/TPE/contexte-historique.php">Lire la suite</a>
</div>

  </div>

  <?php include ("includes/footer.inc.php");?>

</div>

    <script type="text/javascript" src="modules/nslider/jquery.nivo.slider.js"></script>

    <script type="text/javascript">

    $(window).load(function() {

        $('#slider').nivoSlider(

		{

			pauseTime: 4000

			}

		

		);

    });

    </script>

</body>



</html>


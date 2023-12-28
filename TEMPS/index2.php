<!doctype html>
<html>
<head>
<meta charset="utf-8">

<meta name="description" content="melamine, stratifié, placage vrais bois, dessus marbre, facade chêne, corian, hi-macs, kerrocks, colorcore, oberflex, massifs teintes vernis, habillage en tole inox, verres laques, duralmont (panneau en coquilles d’amandes broyées), green blade (stratifié en feuilles de bananiers)" />



<title>Viana Menuiserie</title>
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
  <?php include ("includes/nav.inc2.php");?>

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
    <div class="blocType2a marginRight10"> <span class="texteEtude"><strong>VIANA</strong> vous propose une étude gratuite, <br>
      complète et personnalisée de votre projet.</span><span class="numTel"> <img src="images/numtel.png" width="160" height="23" alt=""/></span> </div>
    <div class="blocType2b marginLeft10">
      <h2>NOUS TRAVAILLONS LA PLUPART DES PRODUITS EXISTANTS DU MARCHÉ :</h2>

      <span class="texteST2">MELAMINE, STRATIFIE, PLACAGE VRAIS BOIS, DESSUS MARBRE, FACADE CHENE, CORIAN, HI-MACS, KERROCKS, COLORCORE,
      OBERFLEX, MASSIFS TEINTES VERNIS, HABILLAGE EN TOLE INOX, VERRES LAQUES, DURALMONT (PANNEAU EN COQUILLES
      D’AMANDES BROYÉES), GREEN BLADE (STRATIFIÉ EN FEUILLES DE BANANIERS).</span></div>
  </div>
  <?php include ("includes/footer.inc.php");?>
</div>
    <script type="text/javascript" src="modules/nslider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider(
		{
			pauseTime: 9000
			}
		
		);
    });
    </script>
</body>
<?php include ("includes/tracking.inc.php");?>
</html>

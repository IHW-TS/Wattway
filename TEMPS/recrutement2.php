<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Viana Menuiserie</title>

<?php include ("includes/head.inc.php");?>
<script>
jQuery(document).ready(function(){
        jQuery('.email a').each(function(i) {
		var value = $(this).attr('href');
	    $(this).attr('href', value.replace(" at ", "@"));
		var text = jQuery(this).text();
		var address = text.replace(" at ", "@");
        jQuery(this).text(address);
        });
		jQuery('a#atChange').each(function(i) {
		var value = $(this).attr('href');
	    $(this).attr('href', value.replace(" at ", "@"));
        });
});
</script>

</head>

<body>

<div class="wrapperV">
 
<?php include ("includes/nav.inc.php");?>
<div class="wrapperCt">
<div class="content2">
<h2>Recrutement</h2>
Vous pouvez soumettre votre candidature spontanée  par email à <span class="email"><a href="mailto:info at viana-menuiserie.fr"><strong>info@viana-menuiserie.fr</strong></a></span> en mentionnant [<strong>Candidature spontanée</strong>] en objet du mail. <br>
      <br>
      
      <div style="width: 235px; float:left">
      <img src="images/recrutement.png" width="217" height="308" alt=""/> 
      </div>
      <table width="500" border="0" cellpadding="0" cellspacing="20" class="tableStyle3" style="float:left">
        <tbody>
          <tr>
            <td valign="top"><strong>METREUR/CHIFFREUR AGENCEMENT INTÉRIEURE EN BOIS H/F</strong><br>
                <a href="mailto:info at viana-menuiserie.fr" class=""><strong>Postuler à cette offre</strong></a>  
           </td>
          </tr>
          <tr>
            <td valign="top"><strong>TECHNICO COMMERCIALE EN AGENCEMENT BOIS H/F</strong><br>
            <a href="mailto:info at viana-menuiserie.fr" class=""><strong>Postuler à cette offre</strong></a></td>
          </tr>
          <tr>
            <td valign="top"><strong>MENUISIER ATELIER 5 ANS D'EXPÉRIENCE H/F</strong><br>
            <a href="mailto:info at viana-menuiserie.fr" class=""><strong>Postuler à cette offre</strong></a></td>
          </tr>
          <tr>
            <td valign="top"><strong>POSEUR SUR CHANTIER 3 ANS D'EXPÉRIENCE H/F</strong><br>
            <a href="mailto:info at viana-menuiserie.fr" class=""><strong>Postuler à cette offre</strong></a></td>
          </tr>
        </tbody>
      </table>

</div>
</div>

<?php include ("includes/footer.inc.php");?>
</div>
</body>
<?php include ("includes/tracking.inc.php");?>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<head>
<html>
<head>
<meta charset="utf-8">
<title>Viana Menuiserie</title>
<?php include ("includes/head.inc.php");?>
<script  type="text/javascript" src="_js/px.js"></script>
</head>

<body>
<div class="wrapperV">
  <?php include ("includes/nav.inc.php");?>
  <div class="wrapperCt">
    <div class="content2" style="overflow:hidden">
      <h2>Contact</h2>
      <table width="90%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" valign="top"><div class="floatLeft w240px"> <strong>Viana Menuiserie</strong> <br>
              12 rue des Meulières<br>
              91360 Villemoisson-sur-Orge<br>
              FRANCE<br>
              Tél. : (+33) <strong>01 69 72 29 64</strong><br>
              Fax : (+33) <strong>01 69 51 38 95</strong> </div></td>
          <td valign="top"><div class="blocCentral fondz2" >
              Veuillez nous communiquer vos coordonnées complètes à l'aide du formulaire ci-dessous. <br />
              (*) Champs obligatoires. <br />
              <br />
              <form action="mailer.php" id="avis" class="formMain" name="users" method="post" enctype="multipart/form-data" target="new-nav">
                <div class="paddingTopBot5">
                  <label for="author">Nom (*)</label>
                  <input class="inputForma ctrlD marginRight5" type="text" name="nom" value="" size="30">
                </div>
                <div class="paddingTopBot5">
                  <label for="url">Prénom</label> 
                  <input class="inputForma ctrlNO marginRight5" type="text" name="prenom" value="" size="30">
                </div>
                <div class="paddingTopBot5">
                  <label>Téléphone (*)</label>
                  <input class="inputForma ctrlT marginRight5" type="text" name="telephone" size="30" maxlength="14" value="">
                </div>
                <div class="paddingTopBot5">
                  <label for="email">E-mail (*)</label>
                  <input class="inputForma ctrlE marginRight5" type="text" name="email" value="" size="30">
                </div>
                <div class="retourLigne paddingTopBot5">
                  <label for="message">Message (*)</label>
                  <textarea class="textareaForma heightmessage ctrlA marginRight5" name="message" value="" cols="60" rows="10"></textarea>
                </div>
                <div  class="paddingTopBot5">
                  <button class="buttonOwner buttonType1 bouton btn1" type="submit" name="" onClick="return false">Envoyer</button>
                </div>
                <br />
                <br />
                <iframe id="new-nav" name="new-nav" style="display:none"></iframe>
              </form>
              <div class="moise" align="center"></div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2635.345908226149!2d2.338891499999988!3d48.66062700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5d8da035c0a1b%3A0x4f389932ddc6d808!2s12+Rue+des+Meuli%C3%A8res%2C+91360+Villemoisson-sur-Orge%2C+France!5e0!3m2!1sfr!2s!4v1420444623151" width="520" height="350" frameborder="0" style="border:0; width:520px; margin-top:5px"></iframe></td>
        </tr>
      </table>
      <br>
      <br>
    </div>
  </div>
  <?php include ("includes/footer.inc.php");?>
</div>
<script>
	jQuery(".buttonOwner").parents("form").find("[class*='ctrl']").jqform({
	'ajaxSucces': function ajaxSucces(obj){
	var obj = jQuery.parseJSON(obj);
	if(typeof obj.resultValidation[0][1] == "string"){
	eval(obj.resultValidation[0][1]);
	}
	}
	});
	
</script>
</body>
<?php include ("includes/tracking.inc.php");?>
</html>

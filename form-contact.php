
<?php 

ini_set('SMTP','smtp.orange.fr');
ini_set('sendmail_from', 'kevin-leonard@orange.fr');

if($_POST) 
{

	$company = htmlspecialchars($_POST['company-name']);
	$companyType = htmlspecialchars($_POST['entreprise-type']);
	$handicap = htmlspecialchars($_POST['handicap']);

	if(isset($_POST['rate-handicap']) && trim($_POST['rate-handicap']) != null)
	{
		$rateHandicap = htmlspecialchars($_POST['rate-handicap']);
	}
	else{
		$rateHandicap = 'champ vide';
	}

	$interest = htmlspecialchars($_POST['interest']);

	if(isset($_POST['why-no']) && trim($_POST['why-no']) != null)
	{
		$whyNo = htmlspecialchars($_POST['why-no']);
	}
	else{
		$whyNo = 'champ vide';
	}

	$avisTarifs = htmlspecialchars($_POST['tarif-avis']);
	$rateTangata = htmlspecialchars($_POST['rate-tangata']);
	$recontact = htmlspecialchars($_POST['recontact']);
	$accept = htmlspecialchars($_POST['accept']);
	
	$to = "kevin-leonard@orange.fr";
	$subject = "contact Tangata";
 	$headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=UTF-8';
	$headers[] = "From:" . $company . "\r\n";
	$message = '<html>
      <head>
       <title>Tangata contact form</title>
      </head>
      <body>
      <h1>Vous avez reçu un message de la part de l\'entreprise : '.$company.'</h1>
       <p>Type de l\'entreprise : '.$companyType.'</p>
       <p>L\'entreprise a t\'elle une ressource dédiée handicap ? '.$handicap.'</p>
       <p>Taux de travailleurs handicapés : '.$rateHandicap.'</p>
       <p>Seriez-vous intéressé par Tangata job ? '.$interest.'</p>
       <p>Si non, pourquoi ? '.$whyNo.'</p>
       <p>Que pensez-vous des tarifs annoncés ? '.$avisTarifs.'</p>
       <p>Niveau de recommandation : '.$rateTangata.'</p>
       <p>Seriez-vous intéressé pour être recontacté ? '.$recontact.'</p>
       <p>Acceptez-vous que les informations saisies soient utilisées à des fins de contact uniquement par l\'équipe Tangata ? '.$accept.'</p>
      </body>
     </html>
     ';

	$mail_status = mail($to, $subject, $message, implode("\r\n", $headers));
	if($mail_status == true){
		require('inc/head.html');
		require('inc/header.html');
		echo '<main><h2 class="text-center py-5">Merci d\'avoir contacté Tangata !<h2></main>';
		require('inc/footer.html');
		header('Refresh: 5; URL=http://localhost/Tangata/tangata');
	}

}

?>
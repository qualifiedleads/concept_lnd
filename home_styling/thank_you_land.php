<?PHP

	$name='';

	if( isset( $_POST["name"]) )
	{
	
		$referer = strtolower($_SERVER["HTTP_REFERER"]); 
		
		$name = htmlspecialchars($_POST["name"]);
	
		// Prepare email body
		$bodyhtml = "<head></head><body>";
		$bodyhtml .= "The following contact was requested on the landing page: " . htmlspecialchars($referer) . "<BR><BR>";
		$bodyhtml .= "Name: ". htmlspecialchars($_POST["name"])."<BR><BR>";
		$bodyhtml .= "Phone: " . htmlspecialchars($_POST["phone1"] ) .  " - "  . htmlspecialchars($_POST["phone2"] ) .  "<BR><BR>";
		$bodyhtml .= "Email: " . htmlspecialchars($_POST["email"]) . "<BR><BR>";
		if (  isset( $_POST["sendinfo"]))
		{
			if ( $_POST["sendinfo"]=="1")
			{
				$bodyhtml .= "The contact indicated he WANTS information.<BR><BR>";
			}
			else
			{
				$bodyhtml .= "The contact did not indicate that he wants information.<BR><BR>";
			}
		}
		else
		{
			$bodyhtml .= "The contact did not indicate that he wants information.<BR><BR>";
		}
		
		$bodyhtml .= "GA source: " . htmlspecialchars($_POST["source"]) . "<BR><BR>";
		$bodyhtml .= "GA medium: " . htmlspecialchars($_POST["medium"]) . "<BR><BR>";
		$bodyhtml .= "GA term: " . htmlspecialchars($_POST["term"]) . "<BR><BR>";
		$bodyhtml .= "GA content: " . htmlspecialchars($_POST["content"]) . "<BR><BR>";
		$bodyhtml .= "GA campaign: " . htmlspecialchars($_POST["campaign"]) . "<BR><BR>";
		$bodyhtml .= "GA segment: " . htmlspecialchars($_POST["segment"]) . "<BR><BR>";
		$bodyhtml .= "GA numVisits: " . htmlspecialchars($_POST["numVisits"]) . "<BR><BR>";


		$subject = "Landing page contact";
		$headers = 'From: info@concept-academy.co.il' . "\r\n" .
		   'Reply-To: info@concept-academy.co.il' . "\r\n" .
		   'Content-Type: text/html; charset=utf-8' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		// Send email 1
		$to = "info@concept-academy.co.il";
		//$to = "eandres2@gmail.com"; // testing EAJ
		mail($to, $subject, $bodyhtml, $headers);
		
		// Send email 2
		$to = "conceptaca@gmail.com";
		//$to = "eandres@expertosinformaticos.com"; // testing EAJ
		mail($to, $subject, $bodyhtml, $headers);
		$to = "concept999academ@yahoo.co.uk";
        mail($to, $subject, $bodyhtml, $headers);		
		
	}
	
include 'thanks.html';	

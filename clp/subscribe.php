<?php 
require_once('PHPMailer/PHPMailerAutoload.php');

class subscribe{

	public static function saveData($fname, $email, $phone,$lname="",$newsletter){
		
		$fields = array( 
			'viplists'=>urlencode('79767'),
			'email' => $email,
			'firstname' => $fname,
			'lastname' => $lname,
			'cellphone' => $phone,
			'conceptlp_newsletter'=>$newsletter ? "yes" : "no"
		);
		
		$rVal = self::register_viplus('0193775f-5f44-40ae-a67a-37a43c78766a', $fields);
		
		if($rVal['status'] == 'ok'){
			send_email($fields);
			return 1;
		}else{
			$message = $rVal['error'];
			return $message;
		}
		
	}
	
	public static function send_email($field){
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 2;
		$mail->Debugoutput = 'html';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465;
		$mail->SMTPSecure = 'ssl';
		$mail->SMTPAuth = true;
		$mail->Username = "newsleads@concept.ac";
		$mail->Password = "shailesh88";
		$mail->setFrom('newsleads@concept.ac', 'New Leads');
		$mail->addReplyTo('replyto@example.com', 'First Last');
		$mail->addAddress('whoto@example.com', 'John Doe');
		$mail->Subject = 'Concept Landing Page New Leads - Details';
		$html="Email: ".$field['email']."<br>Name: ".$field['firstname']."<br>Phone: ".$field['cellphone']."<br>Newsletter: ".$field['conceptlp_newsletter']."<br>";
		$mail->msgHTML($html);
		if (!$mail->send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Message sent!";
		}
	}

	public static function register_viplus($api_key, $param) {

		$port = 80; $timeout = 15;
		$data = is_array($param) ? http_build_query($param) : $param;
		$url = parse_url('http://api.viplus.com/Gates/Ws-'.$api_key.'.asmx/RMembers_Import');
		if ($url['scheme'] != 'http') { die('Error: Only HTTP requests are supported !'); }
		$host = $url['host'];
		$path = $url['path'];
		try{
			$fp = fsockopen($host, $port, $errno, $errstr, $timeout);
			if ($fp){
				fputs($fp, "POST $path HTTP/1.1\r\n");
				fputs($fp, "Host: $host\r\n");
				fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
				fputs($fp, "Content-length: ". strlen($data) ."\r\n");
				fputs($fp, "Connection: close\r\n\r\n");
				fputs($fp, $data);
				$result = '';
				while(!feof($fp))
					$result .= fgets($fp, 1024);
			}
			else return array(
				'status' => 'error',
				'error' => "$errstr ($errno)"
			);
			fclose($fp);
			
			
			$result = explode("\r\n\r\n", $result, 2);
			//$header = isset($result[0]) ? $result[0] : '';
			$content = isset($result[1]) ? $result[1] : '';
			$rVal = simplexml_load_string($content);
			$rText = $rVal[0];
	
			switch($rText){
				case 'OkInserted': 
					return array(
						'status' => 'ok',
						'error' => 'Success'
					);
					break;
				case 'ErrNotValid':
					return array(
						'status' => 'error',
						'error' => 'Data contains illegal chars'
					);
					break;
				case 'ErrExists':
					return array(
						'status' => 'error',
						'error' => 'Contact already exists'
					);
					break;
				case 'ErrBlackListed':
					return array(
						'status' => 'error',
						'error' => 'Contact in black list'
					);
					break;
				default:
					return array(
						'status' => 'error',
						'error' => 'Unknown error'
					);
					break;
			}
		}catch(Exception $e){
			return array(
				'status' => 'error',
				'error' => $e->getMessage()
			);
		}

	}

}

$sub = new subscribe();

echo $sub->saveData($_POST['name'], $_POST['email'], $_POST['phone'], $_['newsletter']);

?>
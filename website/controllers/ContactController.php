<?php

use Website\Controller\Action;

class ContactController extends Action {
	public function sendAction () {
		if (get_magic_quotes_gpc() === 1)
		{
		    $_GET = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_GET, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		    $_POST = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_POST, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		    $_FILES = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_POST, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		    $_COOKIE = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_COOKIE, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		    $_REQUEST = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_REQUEST, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		}
		$name= $_POST['name'];
		$email =$_POST['email'];
		$phone = $_POST['phone'];
		$category =$_POST['category'];
		$question = $_POST['question'];
		
		$namekey = str_replace(' ', '_', $name)."_".strtotime(date("YmdHis"));
		$contact = new Object_Contact();
		$contact->setname($name);
		$contact->setphone($phone);
		$contact->setemail($email);
		$contact->setcategory($category);
		$contact->setquestion($question);
		
		$contact->setKey(strtolower($namekey));
		$contact->setO_parentId('3');
		$contact->setIndex(0);
		$contact->setPublished(1);
		$contact->save();
		
		$emailDocument = '/email/question';
		$params = array('name' => $name,
                'phone' => $phone,
                'email' => $email,
                'category' => $category,
                'question' => $question
                );
		
		$mail = new Pimcore_Mail();
		$mail->setSubject("Contact");
		$mail->setFrom($email,$name);
		$mail->addTo('robbi@dreamcube.co.id');
		$mail->setDocument($emailDocument);
		// $mail->setBodyText("This is just plain text");
		$mail->setParams($params);
		$mail->send();
		// if ($mail->send()) echo "berhasil";
		// die();
		$this->redirect("/");
	}
	public  function emailAction () {
	}
}
	
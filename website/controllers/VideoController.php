<?php

use Website\Controller\Action;

class VideoController extends Action {
	
	public function defaultAction () {
		$this->enableLayout();
	}
	public function submitAction () {
		if (get_magic_quotes_gpc() === 1)
		{
		    $_GET = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_GET, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		    $_POST = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_POST, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		    $_FILES = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_POST, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		    $_COOKIE = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_COOKIE, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		    $_REQUEST = json_decode(stripslashes(preg_replace('~\\\(?:0|a|b|f|n|r|t|v)~', '\\\$0', json_encode($_REQUEST, JSON_HEX_APOS | JSON_HEX_QUOT))), true);
		}
		$youtube_url= $_POST['youtube_url'];
		$title =$_POST['title'];
		$desc =$_POST['desc'];
		$namekey = str_replace(' ', '_', $title)."_".strtotime(date("YmdHis"));
		$videos = new Object_Videos();
		$videos->setyoutubeLinks($youtube_url);
		$videos->settitle($title);
		$videos->setdesc($desc);
				
		$videoData= new Object\Data\Video();
		$videoData->setData(substr($youtube_url, -11));
		$videoData->setType("youtube");
		//$videoData->setPoster($assetImage);
		$videoData->setTitle($title);
		$videoData->setDescription($desc);
		$videos->setvideo($videoData);
		
		$videos->setKey(strtolower($namekey));
		$videos->setO_parentId('2');
		$videos->setIndex(0);
		$videos->setPublished(1);
		$videos->save();
		
		$this->redirect('/');
		
	}
}

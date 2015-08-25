<?php

use Website\Controller\Action;

class DefaultController extends Action {
	
	public function defaultAction () {
 
		
		$this->view->menuProduk = $this->menuProduk();
		$this->enableLayout();
		$this->setLayout('default');
	}

	function menuProduk(){
		$db = Pimcore_Resource_Mysql::get();
		$getId=Object_Abstract::getByPath('/produk');//get folder id
		
		$setcondition="o_parentId = ".$getId->o_id;
		$sql = "SELECT * FROM objects WHERE $setcondition"; //or whatever you need to do.
		$list = $db->fetchAll($sql);

		$data = array();
		foreach($list as $key){

			$menu = explode("-", $key[o_key]);
			$menuName = implode(" ", $menu);

			$path = "/produk/".$key[o_key]; 
			$getId=Object_Abstract::getByPath($path);//get folder id 
			$condition = "o_parentId = ".$getId->o_id;
			$entries = Object_Produk::getList([
				"condition" => $condition,
				"order" => "desc",
				"offset" => 0,
				"limit" => 1
				]); 
			foreach($entries as $entry)
			{
				array_push($data, array("nama"=> $menuName, 
					"link" => $key[o_key],
					"produk" => $entry->o_key, "img" => $entry->getSubimg()));
				// echo $getId->o_id."<br>".$entry->o_key."<br>";
				// echo $entry->getImg()."<br>";
			}
		}
		return $data;
	}

	public function galleryAction() {

		$lists = new Object\Videos\Listing();
		$lists->setOrder('asc');
		$list = array();
		$i=0;
		foreach ($lists as $lis){
			if($lis->approve){
				$list[$i]= array($lis->youtubeLinks,$lis->title); $i++;
			}
		}
		//$list->setOrder('asc');
		$paginator = Zend_Paginator::factory($list);
		$paginator->setCurrentPageNumber( $this->_getParam('page',1) );
		$paginator->setItemCountPerPage(8);
		$this->view->videos = $paginator;
		//print_r($paginator);die();
		$this->enableLayout();
	}

	// produk page susu bubuk
	public function produkAction() {

		// menu
		$db = Pimcore_Resource_Mysql::get();
		$getId=Object_Abstract::getByPath('/produk');//get folder id
		
		$setcondition="o_parentId = ".$getId->o_id;
		$sql = "SELECT * FROM objects WHERE $setcondition"; //or whatever you need to do.
		$list = $db->fetchAll($sql);

		$data = array();
		foreach($list as $key){

			$menu = explode("-", $key[o_key]);
			$menuName = implode(" ", $menu);

			$path = "/produk/".$key[o_key]; 
			$getId=Object_Abstract::getByPath($path);//get folder id 
			$condition = "o_parentId = ".$getId->o_id;
			$entries = Object_Produk::getList([
				"condition" => $condition,
				"order" => "desc",
				"offset" => 0,
				"limit" => 1
				]); 
			foreach($entries as $entry)
			{
				array_push($data, array("nama"=> $menuName, 
					"link" => $key[o_key],
					"produk" => $entry->o_key, "img" => $entry->getSubimg()));
				// echo $getId->o_id."<br>".$entry->o_key."<br>";
				// echo $entry->getImg()."<br>";
			}
		}
		// die();
		$this->view->menuProduk = $data;
		// end menu

		$data2 = array();
		$subproduk = array();
		$uri = $_SERVER[REQUEST_URI];
		$path = "/produk".$uri; 
		$getId=Object_Abstract::getByPath($path);//get folder id 
		$condition = "o_parentId = ".$getId->o_id;
		$entries = Object_Produk::getList([
			"condition" => $condition,
			"order" => "asc"
			]); 
		$no=1;
		$noimg = 0;
		$background = array("/website/static/default/img/bg2.jpg","/website/static/default/img/bg3.jpg",
			"/website/static/default/img/bg1.jpg","/website/static/default/img/bg4.jpg");
		foreach($entries as $entry)
		{
			$title = $entry->title;
			array_push($subproduk, array(
				"value" => '<li class="submenu link" data-target="'.$no.'"><img src="'.$entry->getSubimg().'"><br>'.$title.'</li>'));
			if($no%2==1)
				$value = '
							<section>
							    <div class="page" id="page" style="background: url('."'".$background[$noimg]."'".') top center repeat-x !important;
							    	background-size:cover !important;padding: 0px 20px;color: #00305c;height: 100%;">
							        <div class="row">
							            <div class="medium-6 column text-center pack"><img src="'.$entry->getImg().'"></div>
							            
							            <div class="medium-6 column">
							            <div class="titlebubuk bubuk titleprodukright">'.$title.'</div>
							            <div class="subtitlecair bubuk subtitleprodukright">'.$entry->subTitle.'</div>
							            <p style="text-align:right;">'.$entry->body.'</p>
							            
							            </div>
							        
							        </div>
							    </div>
							</section>
				';
			else
				$value = '
						<section>
						    <div class="page" id="page" style="background: url('."'".$background[$noimg]."'".') top center repeat-x !important;
							    	background-size:cover !important;padding: 0px 20px;color: #00305c;height: 100%;">

						        	<div class="row">
						            <div class="medium-6 column">
						            <div class="titlebubuk bubuk titleprodukleft">'.$title.'</div>
						            <div class="subtitlecair bubuk subtitleprodukleft">'.$entry->subTitle.'</div>
						            <p style="text-align:left;">'.$entry->body.'</p>
						            
						            </div>
						        
						            <div class="medium-6 column text-center pack"><img src="'.$entry->getImg().'"></div>
						        </div>
						    </div>
						</section>
				';
			array_push($data2, array(
				"value" => $value,
				"produk" => $entry->o_key, "img" => $entry->getSubimg()));
			// echo $getId->o_id."<br>".$entry->o_key."<br>";
			// echo $entry->getImg()."<br>";
			if($noimg>=3)
				$noimg=0;
			$noimg++;
			$no++;
		}
		// die();
		$this->view->produk = $data2;
		$this->view->subproduk = $subproduk;
		$this->enableLayout();
		$this->setLayout('default');

		// $this->enableLayout();
		// $this->setLayout('default');
	}
}

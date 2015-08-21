<?php

use Website\Controller\Action;

class DefaultController extends Action {
	
	public function defaultAction () {
		$this->enableLayout();
		$this->setLayout('default');
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
}

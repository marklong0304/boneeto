<?php

use Website\Controller\Action;

class DefaultController extends Action {
	
	public function defaultAction () {
		$this->enableLayout();
	}
	public function galleryAction() {

		$list = new Object\Videos\Listing();
		$list->setOrder('asc');
		$paginator = Zend_Paginator::factory($list);
		$paginator->setCurrentPageNumber( $this->_getParam('page') );
		$paginator->setItemCountPerPage(8);
		$this->view->videos = $paginator;
		
		$this->enableLayout();
	}
}

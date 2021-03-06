<?php

namespace Form\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FormFilterController extends AbstractActionController
{
	
    public function index01Action(){
    	$myForm	= new \Form\Form\Login();
    	
    	if($this->getRequest()->isPost()){
    		
    		$paramsPost	= $this->params()->fromPost();
    		$data		= $this->getRequest()->getPost();
    		
    		$myForm->setData($data);
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    			echo '<h3 style="color:red;">NO VALID</h3>';
    		}
    	}
    	
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }

    public function index02Action(){
    	$myForm	= new \Form\Form\StudyFour();
    	 
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    			echo '<h3 style="color:red;">NO VALID</h3>';
    		}
    	}
    	 
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function index03Action(){
    	$myForm	= new \Form\Form\Register();
    
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    			echo '<h3 style="color:red;">NO VALID</h3>';
    		}
    	}
    
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function index04Action(){
    	$myForm	= new \Form\Form\StudyFour();
    
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    			echo '<h3 style="color:red;">NO VALID</h3>';
    		}
    	}
    
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function index05Action(){
    }
    
    public function exerciseOneAction(){
    	// $myForm	= new \Form\Form\Login();
    	// $myForm->setInputFilter(new \Form\Form\LoginFilter());
    
    	$myForm			= $this->serviceLocator->get('FormElementManager')->get('loginForm');
    	
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    		
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    		}
    	}
    
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function exerciseTwoAction(){
    	$myForm	= new \Form\Form\Login();
    
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    			
    		}
    	}
    
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function exerciseThreeAction(){
    	$myForm	= new \Form\Form\Login();
    
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    		}
    	}
    
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }

    public function ajax01Action(){
    	
    }
    
    public function loadContentAction(){
    	$view				= new ViewModel();
    	$data				= null;
    	$isXmlHttpRequest	= false;
    	
    	if($this->getRequest()->isXmlHttpRequest() == true){
    		$isXmlHttpRequest	= true;
    		
    		$arrData	= array(
    				'php'		=> 'PHP ???? v?? ??ang tr??? th??nh m???t ng??n ng??? l???p tr??nh ph??? bi???n trong c??c ???ng d???ng web ng??y nay. V???i c??c ??u ??i???m nh?? mi???n ph??, d??? ?????c, thao t??c t???t v???i c??c h??? qu???n tr??? c?? s??? d??? li???u, c???ng ?????ng s??? d???ng r???ng r??i, th?? vi???n phong ph?? ',
    				'zend'		=> 'Zend Framework l?? m???t th?? vi???n c??c l???p ???????c x??y d???ng tr??n n???n t???ng ng??n ng??? PHP, theo h?????ng OOP v?? ???????c c??ng ty Zend ph??t tri???n. Zend Framework ???????c ?????nh h?????ng theo m?? h??nh MVC v?? l?? m???t PHP framework ra ?????i kh?? tr???, ch??nh v?? v???y ZF ???? th???a h?????ng nh???ng tinh hoa c???a c??c framework kh??c v?? tr??nh kh???i nh???ng sai l???m c???a c??c framework tr?????c ???? m???c ph???i trong qu?? tr??nh ph??t tri???n',
    				'jquery'	=> 'N???u n??i ?????n l???p tr??nh web, ch??ng ta ngh?? ngay ?????n m???t ng??n ng??? l???p tr??nh kh??ng th??? thi???u trong m???t website ???? l?? Javascript. Javascript gi??p ch??ng ta th???c hi???n nh??ng thao t??c, hi???u ???ng m?? c??c ng??n ng??? l???p web nh?? PHP, ASP, JSP??? kh?? m?? th???c hi???n ???????c.',
    		);
    		 
    		$data	= $arrData[$this->params()->fromQuery('type', 'php')];
    		
    	}
    	$view->setVariables(array(
    			'isXmlHttpRequest'		=> $isXmlHttpRequest,
    			'data'					=> $data
    	));
    	$view->setTerminal(true);
    	return $view;
    }

    public function ajax02Action(){
    	$myForm	= new \Form\Form\Course();
    	 
    	if($this->getRequest()->isPost()){
    		 
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    		 
    		if($myForm->isValid()){
    		}else{
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}
    	}
    	 
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function loadCourseAction(){
    	$view				= new ViewModel();
    	$data				= null;
    	$isXmlHttpRequest	= false;
    	 
    	if($this->getRequest()->isXmlHttpRequest() == true){
    		$isXmlHttpRequest	= true;
    
    		// X??? L?? V?? TR??? V??? DATA
    		$arrData	= array(
    				array('id' => 1, 'name' => 'L???p tr??nh PHP'		, 'type' => 'web'),
    				array('id' => 2, 'name' => 'L???p tr??nh jQuery'	, 'type' => 'web'),
    				array('id' => 3, 'name' => 'L???p tr??nh ZF 2'		, 'type' => 'web'),
    				array('id' => 4, 'name' => 'L???p tr??nh Android'	, 'type' => 'mobile'),
    				array('id' => 5, 'name' => 'L???p tr??nh IOS'		, 'type' => 'mobile'),
    				array('id' => 6, 'name' => 'Thi???t k??? web v???iPhotoshop'		, 'type' => 'design'),
    		);
    		
    		$courseType	= $this->params()->fromQuery('type');
    		
    		foreach($arrData as $key => $value){
    			if($value['type'] == $courseType) $data[]	= $value;
    		}
    
    	}
    	$view->setVariables(array(
    			'isXmlHttpRequest'		=> $isXmlHttpRequest,
    			'data'					=> $data
    	));
    	$view->setTerminal(true);
    	return $view;
    }
    
    public function ajax03Action(){
    	$myForm			= $this->serviceLocator->get('FormElementManager')->get('loginForm');
    	     
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function validateAction(){
    	$myForm			= $this->serviceLocator->get('FormElementManager')->get('loginForm');
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    
    		if($myForm->isValid()){
    			// L??U V??O DATABASE
    			$result['status']	= 'success';
    		}else{
    			$result['status']	= 'error';
    			$result['messages']['email']	= 'Email: ' . current($myForm->getMessages('my-email'));
    			$result['messages']['password']	= 'Password: ' . current($myForm->getMessages('my-password'));
    		}
    	}
    	
    	echo \Zend\Json\Json::encode($result);
    	return $this->getResponse();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

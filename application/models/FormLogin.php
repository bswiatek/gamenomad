<?php

class Application_Model_FormLogin extends Zend_Form
{
	
	public function __construct($options = null)
	{
		parent::__construct($options);
		$this->setName('login');
		$this->setAction("/account/login");
		$this->setMethod("post");
		
		$email = new Zend_Form_Element_Text('email');
		$email->setAttrib('size', 35)
			->setRequired(true)
			->addValidator('emailAddress')
			->removeDecorator('label')
			->removeDecorator('htmlTag');
		
		$pswd = new Zend_Form_Element_Password('pswd');
		$pswd->setAttrib('size', 35)
			->setRequired(true)
			->addValidator('StringLength', false, array(4,15))
			->addErrorMessage('Please choose a password between 4-15 characters')
			->removeDecorator('label')
			->removeDecorator('htmlTag');
		
		$submit = new Zend_Form_Element_Submit('submit');
		$submit->setLabel('Login');
		$submit->removeDecorator('DtDdWrapper');
		
		$this->setDecorators( array( array('ViewScript',
									array('viewScript' => '_form_login.phtml'))));
	$this->addElements(array($email, $pswd, $submit));
	}


}


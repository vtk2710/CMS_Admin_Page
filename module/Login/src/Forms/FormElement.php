<?php
namespace Form\Forms;
use Zend\Form\Form;
use Zend\Form\Element;

class FormElement extends Form
{
    public function __construct() 
    {
        parent::__construct();
        
        $username = new Element('username');
        $username->setLabel('Username'); 
        $username->getLabelAttributes(array(
            'id' => 'username',
            'class' => 'form-control',
        ));

        $username->setAttributes([
            'type' => 'text',
            'class' => 'form-control',
            'id' => 'username',
            'placeholder' => 'Username'
        ]);

        $this->add($username);
    }
}
?>
<?php
namespace Login\Forms;
use Zend\Form\Form;

class LoginForm extends Form
{
   
    public function __construct() 
    {
        parent::__construct();
        
        $this->setAttribute('method', 'post');
        
        $this->setAttribute('action', 'check');
        

        $this->add([
            'name' => 'username',
            'type' => 'text',
            'attributes' => [
                'id' => 'username',
                'class' => 'form-control',
                'placeholder' => 'Username'
            ],
            'options' => [
                'label' => 'Username',
            ]
        ]);

        $this->add([
            'name' => 'password',
            'type' => 'password',
            'attributes' => [
                'id' => 'password',
                'class' => 'form-control',
                'placeholder' => 'Password'
            ],
            'options' => [
                'label' => 'Password',
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Login',
                'id' => 'submit',
                'class' => 'btn btn-primary'
            ]
        ]); 
    }
}
?>
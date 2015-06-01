<?php namespace App\Forms\Users;

use Kris\LaravelFormBuilder\Form;

class CreateUserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('email', 'text', array('label'=>'Email'))
            ->add('name', 'text', array('label'=>'Имя'))
            ->add('password', 'password', array('label'=>'Пароль'))
            ->add('password_confirmation', 'password', array('label'=>'Еще раз'))
            ->add('active', 'checkbox', array(
                'label'=>'Активный',
                'attr'=>array('checked'=>'checked'),
                'default_value' => 1,
            ));
    }
}
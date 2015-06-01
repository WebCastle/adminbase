<?php namespace App\Forms\Users;

use Kris\LaravelFormBuilder\Form;

class UpdateUserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('email', 'text', array('label'=>'Email'))
            ->add('name', 'text', array('label'=>'Имя'))
            ->add('password', 'password', array('label'=>'Пароль'))
            ->add('active', 'checkbox', array(
                'label'=>'Активный',
                'default_value' => 1,
            ));
    }
}
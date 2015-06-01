<?php namespace App\Forms\Roles;

use Kris\LaravelFormBuilder\Form;

class RoleForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', array('label'=>'Машинное имя'))
            ->add('display_name', 'text', array('label'=>'Имя'))
            ->add('description', 'textarea', array('label'=>'Описание'));
    }
}
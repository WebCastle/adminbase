<?php namespace App\Forms\Perms;

use Kris\LaravelFormBuilder\Form;

class CreateForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', array('label'=>'Машинное имя'))
            ->add('display_name', 'text', array('label'=>'Имя'))
            ->add('category', 'choice', [
                'choices' => $this->getData('categories', array()),
                'empty_value' => 'Без категории',
                'multiple' => false, // This is default. If set to true, it creates select with multiple select posibility
                'label' => 'Категория', // This is default. If set to true, it creates select with multiple select posibility
            ])
            ->add('description', 'textarea', array('label'=>'Описание'));
    }
}
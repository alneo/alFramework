<?php

namespace App\Controllers;
use App\Models\Contact;
use PHPFramework\Controller;

class ContactController extends Controller{

    public function index(){
        $title = 'Страница контактов';
        $name = 'Jhon';
        return view('contact', compact('title', 'name'));
        ///return view('contact',['title' => 'Страница контактов']);
        //return $this->render('contact');
        //return app()->view->render('contact');
    }

    public function send(){
        $model = new Contact();
        $model->loadData();
        if(!$model->validate()){//Есть ошибки!
            return view('contact', ['title'=>'Страница контактов', 'errors' => $model->getErrors()]);
        }
        response()->redirect('/');
        return 'Contact form POST page';
    }

}
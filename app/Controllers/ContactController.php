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
        dump($model);
        $model->loadData();
        dump($model);
        return 'Contact form POST page';
    }

}
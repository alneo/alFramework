<?php

namespace App\Controllers;
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
        return 'Contact form POST page';
    }

}
<?php

namespace App\Models;
use PHPFramework\Model;

class Contact extends Model{
    public array $fillable = ['email','content','name'];
    public array $attributes = [];
    public array $rules = [
        'name' => ['required' => true],
        'email' => ['email' => true, 'min' => 3, 'max' => 30],
        'content' => ['min' => 20, 'max' => 100]
    ];
    public array $labels = ['name'=>'Имя', 'email'=>'E-mail', 'content'=>'Сообщение' ];

}
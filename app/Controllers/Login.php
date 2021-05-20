<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function login(){
        echo view('login/index');
	}

    public function register(){
        echo view('login/register');
    }
}
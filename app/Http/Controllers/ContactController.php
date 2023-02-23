<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return 'Email kesini dong <br>
        <a href=mailto:brilliyandnoval@gmail.com>brilliyandnoval@gmail.com</a>';
    }
}

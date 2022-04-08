<?php
namespace HelloWorld\HelloWorld\Controllers;

use Carbon\Carbon;

class HelloWorldController extends Controller
{
    public function index($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();
    }
}
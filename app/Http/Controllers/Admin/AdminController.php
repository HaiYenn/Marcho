<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    function index(){
    	return view("admin/pages/index");
    }
    function addCategories(){
    	return view("admin/pages/Category/addCategories");
    }
   
}
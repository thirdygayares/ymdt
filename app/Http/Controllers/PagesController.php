<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //tutorial 2 5:10
    public function index(){
        return view('pages.index');
    }

    public function profile(){
        $username = "Thirdy";
        return view('pages.profile', compact('username'));
    }

    public function fb($id){
        return view('pages.fbusers', compact('id'));
    }

        public function about(){
            $title = "This About pages";
            $body = "Lorep Ipsum";
            return view('pages.about', compact('title', 'body'));
        }


        //Route::get('/user/{user}/{company}', function ($user, $comp){

            public function user($user, $comp){
                $name = "Thirdy Gayares - " .$user . " Company - " . $comp;
                return view('pages.users', compact('name'));
            }


    }

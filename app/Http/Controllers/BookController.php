<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // index
    public function index(){
        return "ini adalah index page Book";
    }
    public function view($judul){
        return "ini adalah view book $judul";
    }

    // view Judul
    /*public function viewJudul($judul){
        return "Judul buku yang anda baca adalah".$judul;
    }*/
     // view Judul
         public function viewJudul($judul){
            $data=
            array
            ('judul'=>$judul);
            return 
            View::make('book.Book',$data);
        }
} 
    
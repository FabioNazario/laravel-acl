<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DefaultController extends Controller
{
    public function index(){

        auth()->loginUsingId(1);

        $book = Book::findOrFail(3);

        //$this->authorize('update-book', $book);

        /*if(Gate::denies('show-book', $book)){
            abort(403, 'You are not owner of this book');
        }*/
        
        //auth()->user()->can('update-book',$book);

        $this->authorize('viewBook',$book);

        return view('welcome', compact('book'));
    }
}

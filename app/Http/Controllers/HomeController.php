<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Model\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function start()
    {
        return view('login');
    }
    public function then()
    {
        return view('greeting');

    }

    public function callormail()
    {
        return view('contact');

    }

    public function boi()
    {
        $allbook = Book::all();
        //$allbook = Book::find(3);
        //dd($allbook->title);

        return view('show_books', ['ovi'=>$allbook]);

        //return view('show_books', compact('allbook'));
    }

    public function boi1()
    {
        //$allbook = Book::all();
        //$allbook = Book::find(3);
        //dd($allbook->title);

        //return view('insert_book', ['ovi'=>$allbook]);
        return view('insert_book');

        //return view('show_books', compact('allbook'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function boi2(Request $request)
    {
        $rules = array(
        'book_name1'  => 'required',
        'author'  => 'required',
        'edition'  => 'required',
        'publisher'  => 'required',
        'isbn_no'  => 'required',
        'barcode_no'  => 'required',
        'copies'  => 'required',
    );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::route('mine1')->withErrors($validator);

        } else{
            $book= new Book();
            $book->title = $request->get('book_name1');
            $book->author = $request->get('author');
            $book->edition = $request->get('edition');
            $book->publisher = $request->get('publisher');
            $book->isbn_no = $request->get('isbn_no');
            $book->barcode_no = $request->get('barcode_no');
            $book->copies = $request->get('copies');
            $book->save();

            return Redirect::route('ovi2');
        }


        //return redirect('/show_books');


        // The blog post is valid, store in database...
    }
    public function guide()
    {

        $alluser = User::all()->toArray();
        return view('user_info', ['imo'=>$alluser]);

    }

    }

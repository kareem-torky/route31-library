<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::paginate(3);

        return view('authors.index', [
            'authors' => $authors
        ]);
    }


    public function latest()
    {
        $authors = Author::orderBy('id', 'DESC')
        ->take(3)
        ->get();


        return view('authors.latest', [
            'authors' => $authors
        ]);
    }



    public function show($id)
    {
        $author = Author::find($id);
        
        return view('authors.show', [
            'author' => $author
        ]);
    }


    public function search($word)
    {
        $authors = Author::where('name', 'like', "%$word%")
        ->get();

        return view('authors.search', [
            'authors' => $authors
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BooksController extends Controller
{
    //Create new Book
    function createNewBook(Request $request){
        // validate inputs---telling the user 'this should not be empty'
        $request->validate([
            'name'=>'required',
            'author'=>'required',
            'pages'=>'required',
            'IBN'=>'required',
            'category'=>'required',
            'publisher'=>'required',
            'yearOfPublication'=>'required',
        ]); 

    /**
     * Create Book using the Task Model Class
     */
    $book = Book::create([
        'name'=>$request->name,
        'author'=>$request->author,
        'pages'=>$request->pages,
        'IBN'=>$request->IBN,
        'category'=>$request->category,
        'publisher'=>$request->publisher,
        'yearOfPublication'=>$request->yearOfPublication,
        ]);
// Retrieve the book and check if its empty and returns a response---if its a success or railure
        $book = Book::find($book->id);
        if(!$book){
            return response(
                [
                    "message"=>"failed",
                ]);
        }else{
            return response(
                [
                    "message"=>"success",
                    "book"=>$book
                ]);
        }         
    } 
}

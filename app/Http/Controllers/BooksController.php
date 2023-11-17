<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BooksController extends Controller
{
    //Create new Book
    function createBook(Request $request){
        // validate inputs
        // $request->validate([
        //     'name'=>'required',
        // ]); 

    /**
     * Create Book using the Task Model Class
     */
    // $book = Book::create([
    //     'name'=>$request->name,
    //     ]);

    //     $book = Book::find($book->id);
    //     if(!$book){
    //         return response(
    //             [
    //                 "message"=>"failed",
    //             ]);
    //     }else{
    //         return response(
    //             [
    //                 "message"=>"success",
    //                 "book"=>$book
    //             ]);
    //     }         
    } 
}

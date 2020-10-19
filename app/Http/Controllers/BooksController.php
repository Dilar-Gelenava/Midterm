<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Genres;

class BooksController extends Controller
{
    public function store_book(Request $request)
    {
        Books::create([
            "title"=>$request->input("title"),
            "author_name"=>$request->input("author_name"),
            "genre_id"=>$request->input("genre_id"),
            "description"=>$request->input("description"),
            "image"=>$request->input("image"),
        ]);
        return redirect()->back();
    }

    public function edit_book($id)
    {
        $book=Books::where("id",$id)->firstOrFail();
        return view("edit",["book"=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update_book(Request $request)
    {
        Books::where("id",$request->input("id"))->update([
            "title"=>$request->input("title"),
            "author_name"=>$request->input("author_name"),
            "genre_id"=>$request->input("genre_id"),
            "description"=>$request->input("description"),
            "image"=>$request->input("image"),
            
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function delete_book(Request $request)
    {
        Books::where("id", $request->input("id"))->delete();
        return redirect()->back();
    }


        public function show_book($id)
    {
        $genre=Genres::where("id",$id)->firstOrFail();
        $book=Books::where("id",$id)->firstOrFail();
        return view("view",[
            "book"=>$book, "genre"=>$genre
        ]);
    }
        public function filter_book()
        {
            return view("filter");
        }
        public function filtered_books($genre_id)
        {
            $books=Books::where("genre_id",$genre_id)->get();
            return view("filter", [
                "books"=>$books]);
        }
}

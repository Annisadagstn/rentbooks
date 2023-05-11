<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book(){
        $book = Book::all();
        return view('dashboard.book', compact('book'));
    }

    public function destroy($item)
    {
        Book::where('id', $item)->delete();
        return redirect('/book');
    }

    public function form()
    {
        return view('dashboard.form');
    }

    public function add(Request $request){
        $request->validate([
            'judul' => 'required',
            'penulis'  => 'required',
            'penerbit'  => 'required',
            'coverbook'  => 'required|image|mimes:png,jpg,jpeg,|max:2048',
            'sinopsis' => 'required',
        ]);

        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);

       
    }
}



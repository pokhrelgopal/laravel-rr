<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('backend.book.index', compact(var_name: 'books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookCreateRequest $request)
    {

        Book::create([
            'name' => $request->name,
            'pageCount' => $request->count,
            'point' => $request->point,
            'authorId' => $request->author_id,
            'typeId' => $request->type_id,
        ]);
        return redirect()->route('book.create')->with('success', 'Book created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::where('bookId', $id)->first();
        return view('backend.book.show', compact(var_name: 'book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::where('bookId', $id)->first();
        return view('backend.book.edit', compact(var_name: 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        Book::where('bookId', $id)->update([
            'name' => $request->input('name'),
            'pageCount' => $request->input('count'),
            'point' => $request->input('point'),
            'authorId' => $request->input('author_id'),
            'typeId' => $request->input('type_id'),
        ]);
        return redirect()->route('book.index');

        // $book->update([
        //     'name' => $request->name,
        //     'pageCount' => $request->count,
        //     'point' => $request->point,
        //     'authorId' => $request->author_id,
        //     'typeId' => $request->type_id,
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::where('bookId', $id)->delete();
        return redirect()->route('book.index');
    }
}

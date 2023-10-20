<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use App\Models\Book;

class BookController extends Controller
{
    // index function
    
    public function index()
    {
        $projects = Book::all();
        return response()->json($projects);
    }

    // show function

    public function show(Book $book)
    {

        return response()->json($book);
    }

    // store function

    public function store(Request $request)
    {
        $project = Book::create($request->all());
        return response()->json($project);
    }

    // update function

    public function update(Request $request, Book $book)
    {
        return response()->json($book);
    }

    // delete function

    public function destroy(Book $project)
    {

        $project->delete();
        return response()->json($project);
    }
}

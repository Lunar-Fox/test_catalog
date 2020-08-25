<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{

    /**
     * select books grouped by year
     */

    public function booksByYear()
    {
        try {
            $books = DB::table('books')->select('published', DB::raw('count(*)'))->groupBy('published')->get();
            return response(json_encode($books))->withHeaders(['application/json']);
        } catch (Exception $e) {
            return response(json_encode(['status' => 0]))->withHeaders(['application/json']);
        }
    }
}

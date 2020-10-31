<?php

namespace App\Http\Controllers;

use App\Services\BookService;

class BookController extends Controller
{

    private $bookService;

    /**
     * BookController constructor.
     * @param BookService $bookService
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService=$bookService;
    }

    public function find($id){
        return $this->bookService->find($id);
    }

    public function last(){
        return $this->bookService->getLast();
    }
}

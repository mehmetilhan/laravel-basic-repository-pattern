<?php


namespace App\Services;


use App\Repositories\BookRepository;
use Illuminate\Database\Eloquent\Model;

class BookService
{

    protected $bookRepository;

    /**
     * BookService constructor.
     * @param BookRepository $bookRepository
     */
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository=$bookRepository;
    }

    public function find($id): ?Model
    {
       return $book=$this->bookRepository->find($id) ?? abort(404);
    }

    public function getLast():?Model
    {
        return $this->bookRepository->getLastRow();
    }
}

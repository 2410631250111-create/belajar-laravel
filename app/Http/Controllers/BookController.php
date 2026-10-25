<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    private array $books = [
        1 => ['title' => 'Pemrograman PHP', 'author' => 'Budi Raharjo', 'year' => 2022],
        2 => ['title' => 'Laravel untuk Pemula', 'author' => 'Andi Pratama', 'year' => 2023],
        3 => ['title' => 'Basis Data', 'author' => 'Rosa A.S.', 'year' => 2021],
        4 => ['title' => 'Algoritma dan Pemrograman', 'author' => 'Siti Aminah', 'year' => 2020],
        5 => ['title' => 'Pemrograman Berorientasi Objek', 'author' => 'Doni Saputra', 'year' => 2024],
    ];

    public function index()
    {
        $books = $this->books;
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = $this->books[(int) $id] ?? null;

        return view('books.show', [
            'id' => $id,
            'book' => $book,
        ]);
    }
}

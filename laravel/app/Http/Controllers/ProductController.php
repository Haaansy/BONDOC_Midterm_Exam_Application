<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $books = [
            ['title' => fake()->sentence(3), 'author' => fake()->name(), 'genre' => fake()->word()],
            ['title' => fake()->sentence(3), 'author' => fake()->name(), 'genre' => fake()->word()],
            ['title' => fake()->sentence(3), 'author' => fake()->name(), 'genre' => fake()->word()],
            ['title' => fake()->sentence(3), 'author' => fake()->name(), 'genre' => fake()->word()],
            ['title' => fake()->sentence(3), 'author' => fake()->name(), 'genre' => fake()->word()]
        ];

        return view('products', compact('books'));
    }
}

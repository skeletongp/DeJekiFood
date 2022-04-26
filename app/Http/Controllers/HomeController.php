<?php

namespace App\Http\Controllers;

use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function menu()
    {
        $products=json_decode(file_get_contents(asset('data/products.json')));
        $products=collect($products);
        return view('pages.menu', get_defined_vars());
    }
    

}

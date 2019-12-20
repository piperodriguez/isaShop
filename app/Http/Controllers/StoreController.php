<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{

	private $_model;


    function __construct()
    {
        $this->_model = new Product();
    }

    public function index()
    {
    	$productos =  $this->_model->all();
        $data = array();
        $data['productos'] = $productos;
    	return view('store.index', compact('data'));
    }

    public function show($slug)
    {
        $producto = $this->_model->where('slug', $slug)->first();
        $data = array();
        $data['producto'] = $producto;
        return view('store.show', compact('data'));
    }
}

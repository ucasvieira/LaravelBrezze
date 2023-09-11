<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function principal()
    {
        return view('admin.fornecedor.index');
    }
}

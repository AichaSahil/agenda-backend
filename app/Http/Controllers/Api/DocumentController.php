<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function test() {
        return ['test' => true];
    }
}

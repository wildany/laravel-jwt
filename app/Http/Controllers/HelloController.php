<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function hello(): JsonResponse
    {
        return response()->json([
            'hello world'
        ]);
    }
}

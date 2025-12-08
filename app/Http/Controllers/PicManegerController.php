<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PicService;

class PicManegerController extends Controller
{
    public function index(Request $request, PicService $service)
    {
        $pics = $service->getList($request);

        return view('index', compact('pics'));
    }
}

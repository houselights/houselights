<?php

namespace App\Http\Controllers;

use App\Models\Hub;
use Illuminate\Http\Request;

class HubController extends Controller
{
    public function index()
    {
        $hubs = Hub::paginate();
        return view('hubs.index', compact('hubs'));
    }

    public function show(Hub $hub)
    {
        return view('hubs.show', compact('hub'));
    }
}

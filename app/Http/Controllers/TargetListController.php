<?php

namespace App\Http\Controllers;

use App\Models\TargetList;
use Illuminate\Http\Request;

class TargetListController extends Controller
{
    public function index()
    {
        $targetlists = TargetList::all();
        return view('targetlist.index', compact('targetlists'));
    }
}

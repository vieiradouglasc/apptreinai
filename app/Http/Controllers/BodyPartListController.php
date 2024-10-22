<?php

namespace App\Http\Controllers;

use App\Models\BodyPartList;
use Illuminate\Http\Request;

class BodyPartListController extends Controller
{
    public function index() {
        $bodypartlists = BodyPartList::all();
        return view('bodypartlist.index', compact('bodypartlists'));
    }
}

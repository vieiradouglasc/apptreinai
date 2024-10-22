<?php

namespace App\Http\Controllers;

use App\Models\EquipmentList;
use Illuminate\Http\Request;

class EquipmentListController extends Controller
{
    public function index() {
        $equipmentlists = EquipmentList::all();
        return view('equipmentlist.index', compact('equipmentlists'));
    }
}

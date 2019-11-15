<?php

namespace App\Http\Controllers\Spa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Spa;
use Illuminate\Support\Facades\DB;

class ListSpaController extends Controller
{
    public function index()
    {

    $listspa = DB::table('spas')->paginate(3);
    return view('pages.spa', ['listspa' => $listspa]);
    }
}

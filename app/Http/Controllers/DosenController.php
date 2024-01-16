<?php

namespace App\Http\Controllers;

use App\Models\DosenModel;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    {
        public function index() {
            return view('v_ampu', [
                "KodeMatkul" => "Post",
                "posts" => DosenModel::all()
                ]);
        }
    }
}

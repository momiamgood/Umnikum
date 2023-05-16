<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class Delete extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function delete_course(Request $request)
    {
        return Course::where('id', $request->id)->delete();
    }
}


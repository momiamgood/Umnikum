<?php namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Update extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create_course (Request $request): View
    {
        if ($request->method() === "POST"){
            if (Course::update($request->all())){
                redirect('/course_list');
            }
        }

        return view('course.update');
    }
}


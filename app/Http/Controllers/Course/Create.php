<?php namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class Create extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);
    }

    public function create_course (Request $request) :View
    {
           if ($request->method() === "POST"){
               if (Course::create($request->all())){
                   redirect('/course_list');
               }
           }

           return view('course.create');
    }

}

<?php
namespace CourseApp\Controllers;

use CourseApp\DB\CourseDb;
use CourseApp\Models\Course;
use Imanghafoori\HeyMan\StartGuarding;
use CourseApp\ProtectionLayer\CheckCapacityOfCourse;

class CourseController
{
    // public function __construct()
    // {
    //     // dd('ok');
    //     CheckCapacityOfCourse::install();
    //     resolve(StartGuarding::class)->start();
    // }
    public function index()
    {
        $courses = CourseDb::index();
        return view('Course::courses.index', compact('courses'));
    }

    public function update($id)
    {
        CourseDb::update($id);
        return redirect()->back();
    }
}

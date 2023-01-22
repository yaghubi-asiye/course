<?php

namespace CourseApp\ProtectionLayer;

use Closure;
use App\Models\Course;

use CourseApp\DB\CourseDb;
use Illuminate\Http\Request;

class CheckCapacityOfCourse
{

    public function handle(Request $request, Closure $next)
    {
        if(CourseDb::getCapacity($request->id) == 0)
        {
            return redirect()->route('courses.index')->withErrors('This Course dont have capacity ):');
        }
        return $next($request);
    }
}

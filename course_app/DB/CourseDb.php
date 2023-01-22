<?php
namespace CourseApp\DB;

use Exception;
use CourseApp\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseDb
{
    public static function index()
    {
        return Course::all();
    }
    public static function getCapacity($coursId)
    {
        return Course::find($coursId)->capacity;
    }

    public static function update($id)
    {

        try {
            DB::beginTransaction();

            DB::table('courses')
                ->where('id', '=', $id)
                ->lockForUpdate();

                // sleep(30);

                DB::table('courses')
                ->where('id', '=', $id)
                ->decrement('capacity');

            DB::commit();

        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }

    }
}

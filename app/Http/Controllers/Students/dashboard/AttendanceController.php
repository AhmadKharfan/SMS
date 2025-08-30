<?php

namespace App\Http\Controllers\Students\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    // Show attendance filter page
    public function index()
    {
        return view('pages.Students.Attendance.index');
    }

    // Handle attendance search
    public function search(Request $request)
    {
        $request->validate([
            'from' => 'required|date|date_format:Y-m-d',
            'to'   => 'required|date|date_format:Y-m-d|after_or_equal:from',
        ], [
            'to.after_or_equal' => 'تاريخ النهاية لابد ان اكبر من تاريخ البداية او يساويه',
            'from.date_format'  => 'صيغة التاريخ يجب ان تكون yyyy-mm-dd',
            'to.date_format'    => 'صيغة التاريخ يجب ان تكون yyyy-mm-dd',
        ]);

        $student_id = auth()->user()->id;

        $attendances = Attendance::where('student_id', $student_id)
            ->whereBetween('attendence_date', [$request->from, $request->to])
            ->get();

        return view('pages.Students.Attendance.index', compact('attendances'));
    }
}

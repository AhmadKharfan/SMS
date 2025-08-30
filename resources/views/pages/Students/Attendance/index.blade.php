@extends('layouts.master')
@section('css')
    @section('title') تقرير الحضور والغياب @stop
@endsection

@section('page-header')
    @section('PageTitle') تقرير الحضور والغياب @stop
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Attendance Filter -->
                    <form method="post" action="{{ route('student.attendance.search') }}" autocomplete="off">
                        @csrf
                        <h6 style="font-family: 'Cairo', sans-serif;color: blue">معلومات البحث</h6><br>

                        <div class="card-body datepicker-form">
                            <div class="input-group" data-date-format="yyyy-mm-dd">
                                <input type="text"  class="form-control range-from date-picker-default" placeholder="تاريخ البداية" required name="from">
                                <span class="input-group-addon">الي تاريخ</span>
                                <input class="form-control range-to date-picker-default" placeholder="تاريخ النهاية" type="text" required name="to">
                            </div>
                        </div>

                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">
                            {{ trans('Students_trans.submit') }}
                        </button>
                    </form>

                    <!-- Attendance Results -->
                    @isset($attendances)
                        <div class="table-responsive mt-4">
                            <table id="datatable" class="table table-hover table-sm table-bordered p-0" data-page-length="50" style="text-align: center">
                                <thead>
                                <tr>
                                    <th class="alert-success">#</th>
                                    <th class="alert-success">التاريخ</th>
                                    <th class="alert-warning">الحالة</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($attendances as $attendance)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $attendance->attendence_date }}</td>
                                        <td>
                                            @if($attendance->attendence_status == 0)
                                                <span class="btn-danger">غياب</span>
                                            @else
                                                <span class="btn-success">حضور</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endisset

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection

@extends('layouts.directorate')

@section('content')

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>قائمة طلاب مدرسة <span>...</span></h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- Student's table -->
    @foreach($students as $student)
        <div class=" border border-primary   lista">
            <table class="table table-striped text-right ">
                <thead class="table-danger ">
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">الاسم</th>
                        <th scope="col">الصف</th>
                        <th scope="col">الشعبة</th>
                        <th scope="col">المدرسة</th>
                        <th scope="col">المديرية</th>
                        <th scope="col">البريد الالكتروني</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$student->name}}</td>
                        <td>{{$student->Classroom['classname']}}</td>
                        <td>{{$student->classroom['branchname']}}</td>
                        <td>{{$student->school['name']}}</td>
                        <td>{{$student->directorate['name']}}</td>
                        <td>{{$student->email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endforeach
    <!-- end student's table -->


@endsection
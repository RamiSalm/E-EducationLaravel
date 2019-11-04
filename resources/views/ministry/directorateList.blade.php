@extends('layouts.ministry')

@section('content')

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>قائمة المديريات <span>...</span></h3>
    </div>
    <!-- bradcam_area_end -->

      <!-- Tabs area ---------------------------------------------------------------------------------- -->
      <div class="jumbotron">
            <div class="row text-right">
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- ---------------------------------------------------------------------------------------tab 1 -->
                        <div class="tab-pane fade show active" id="karkh-1" role="tabpanel" aria-labelledby="karkh-1-tab">
                            <!-- Student's table -->
                            <div class=" border border-primary lista text-right">
                                @foreach($directorates as $directorate)
                                    <table class="table table-striped ">
                                        <thead class="p-3 mb-2 bg-info text-white">
                                            <tr>
                                                <th scope="col">#ID</th>
                                                <th scope="col">المديرية</th>
                                                <th scope="col">مدير المديرية</th>
                                                {{-- <th scope="col">هاتف</th> --}}
                                                <th scope="col">E-mail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{$directorate->name}}</td>
                                                <td>{{$directorate->mangement}}</td>
                                                {{-- <td>07705675477</td> --}}
                                                <td>{{$directorate->email}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @endforeach
                            </div>
                            <!-- end student's table -->
                        </div>
                        <!-- ---------------------------------------------------------------------------------------tab 4 -->
                    </div>
                </div>
            </div>
        </div>
       <!-- Tabs area ---------------------------------------------------------------------------------- -->

@endsection















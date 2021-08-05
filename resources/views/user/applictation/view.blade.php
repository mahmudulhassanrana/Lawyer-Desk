@extends('user.layout.umaster')
@section('title','Application')
@section('user.layout.ucontane')
    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
                <br>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <h2>Case Details {{$application->casetype}}</h2>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <p><strong>Name :</strong> {{$application->vname}}</p><br>
                                <p><strong>Email :</strong> {{$application->vemail}}</p><br>
                                <p><strong>NID :</strong>{{$application->vnid}}</p><br>
                                <p><strong>Address :</strong> {{$application->vaddress}}</p><br>
                                <p><strong>Phone :</strong>{{$application->vphone}}</p><br>
                                <p><strong>Case Details :</strong>{{$application->case_details}}</p><br>
                                <p><strong>Case file Date :</strong>{{$application->date}}</p><br>
                                <p><strong>Self Defence  :</strong>{{$application->vcomment}}</p><br>
                                <br>
                            </div>
                            <br>
                            <dev class="row">
                                <div class="col-6">
                                    <form action="{{url('/applicationlist/'.$application->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </dev>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

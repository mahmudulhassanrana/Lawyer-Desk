@extends('lawyer.layout.lmaster')
@section('title','Request Case')
@section('lawyer.layout.lcontane')
    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
                <br>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <h2> Request Case </h2>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <p><strong>Case type :</strong> {{$request->casetype}}</p><br>
                                <p><strong>Name :</strong> {{$request->vname}}</p><br>
                                <p><strong>Email :</strong> {{$request->vemail}}</p><br>
                                <p><strong>NID :</strong>{{$request->vnid}}</p><br>
                                <p><strong>Address :</strong> {{$request->vaddress}}</p><br>
                                <p><strong>Phone :</strong>{{$request->vphone}}</p><br>
                                <p><strong>Case Details :</strong>{{$request->case_details}}</p><br>
                                <p><strong>Case file Date :</strong>{{$request->date}}</p><br>
                                <p><strong>Self Defence :</strong>{{$request->vcomment}}</p><br>
                                <br>
                            </div>
                            <br>
                            <dev class="row">
                                <div class="col-6">
                                    @if($request->file_1)

                                        <div class="row">
                                            <div class="col-12">

                                                <img src="{{asset('storage/'.$request->file_1)}}"
                                                     class="img-thumbnail">

                                            </div>
                                        </div>

                                    @endif


                                </div>
                            </dev>


                            <dev class="row">
                                <div class="col-6">
                                    @if($request->file_2)

                                        <div class="row">
                                            <div class="col-12">

                                                <img src="{{asset('storage/'.$request->file_2)}}"
                                                     class="img-thumbnail">

                                            </div>
                                        </div>

                                    @endif


                                </div>
                            </dev>

                            <dev class="row">
                                <div class="col-6">
                                    @if($request->file_3)

                                        <div class="row">
                                            <div class="col-12">

                                                <img src="{{asset('storage/'.$request->file_3)}}"
                                                     class="img-thumbnail">

                                            </div>
                                        </div>

                                    @endif


                                </div>
                            </dev>

                            <dev class="row">
                                <div class="col-6">
                                    @if($request->file_4)

                                        <div class="row">
                                            <div class="col-12">

                                                <img src="{{asset('storage/'.$request->file_4)}}"
                                                     class="img-thumbnail">

                                            </div>
                                        </div>

                                    @endif
                                    <div class="row">
                                        <div class="col-12">

                                            <a href="{{url('/case/'.$request->id)}}" class="btn btn-primary">Approve request</a>
                                            <br>
                                            <form action="{{url('/caserequest/'.$request->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            <br>
                                        </div>
                                    </div>

                                </div>
                            </dev>

                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>





@endsection

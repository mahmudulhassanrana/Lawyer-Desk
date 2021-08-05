@extends('lawyer.layout.lmaster')
@section('title','Active Case')
@section('lawyer.layout.lcontane')

    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
                <br>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <h2> Active Case </h2>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <p><strong>Name :</strong> {{$casedairy->vname}}</p><br>
                                <p><strong>Email :</strong> {{$casedairy->vemail}}</p><br>
                                <p><strong>NID :</strong>{{$casedairy->vnid}}</p><br>
                                <p><strong>Address :</strong> {{$casedairy->vaddress}}</p><br>
                                <p><strong>Phone :</strong>{{$casedairy->vphone}}</p><br>
                                <p><strong>Case Details :</strong>{{$casedairy->case_details}}</p><br>
                                <p><strong>Case file Date :</strong>{{$casedairy->date}}</p><br>
                                <p><strong>Self Defence :</strong>{{$casedairy->vcomment}}</p><br>
                                <br>
                            </div>
                            <br>
                            <dev class="row">
                                <div class="col-6">
                                    @if($casedairy->file_1)

                                        <div class="row">
                                            <div class="col-12">

                                                <img src="{{asset('storage/'.$casedairy->file_1)}}"
                                                     class="img-thumbnail">

                                            </div>
                                        </div>

                                    @endif


                                </div>
                            </dev>


                            <dev class="row">
                                <div class="col-6">
                                    @if($casedairy->file_2)

                                        <div class="row">
                                            <div class="col-12">

                                                <img src="{{asset('storage/'.$casedairy->file_2)}}"
                                                     class="img-thumbnail">

                                            </div>
                                        </div>

                                    @endif


                                </div>
                            </dev>

                            <dev class="row">
                                <div class="col-6">
                                    @if($casedairy->file_3)

                                        <div class="row">
                                            <div class="col-12">

                                                <img src="{{asset('storage/'.$casedairy->file_3)}}"
                                                     class="img-thumbnail">

                                            </div>
                                        </div>

                                    @endif


                                </div>
                            </dev>

                            <dev class="row">
                                <div class="col-6">
                                    @if($casedairy->file_4)

                                        <div class="row">
                                            <div class="col-12">

                                                <img src="{{asset('storage/'.$casedairy->file_4)}}"
                                                     class="img-thumbnail">

                                            </div>
                                        </div>

                                    @endif
                                    <div class="row">
                                        <div class="col-12">

                                            <a href="{{url('/dairyupdate/'.$casedairy->id)}}" class="btn btn-primary">Edite
                                                Case Dairy</a>
                                            <br>
                                            <form action="{{url('/casedairy/'.$casedairy->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            <br>
                                            <div>
                                                <p><a href="{{url('/dismissed/'.$casedairy->id)}}" class="btn btn-primary">Case
                                                        Dismissed</a></p>
                                            </div>
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

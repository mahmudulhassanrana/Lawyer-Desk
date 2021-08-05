@extends('user.layout.umaster')
@section('title','Lawyer list')
@section('user.layout.ucontane')
    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
                <br>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <h2>Lawyer Details for {{$user->name}}</h2>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <p><strong>Name :</strong> {{$user->name}}</p><br>
                                <p><strong>Email :</strong> {{$user->email}}</p><br>
                                <p><strong>NID :</strong> {{$user->nid}}</p><br>
                                <p><strong>Bar council ID:</strong> {{$user->bar_id}}</p><br>
                                <p><strong>Address :</strong> {{$user->address}}</p><br>
                                <p><strong>Phone :</strong> {{$user->phone}}</p><br>
                                <br>
                            </div>
                            <br>
                            <dev class="row">
                                <div class="col-6">
                                    <p><a href="{{url('/application/'.$user->id)}}" class="btn btn-primary">Request</a></p>
                                </div>
                            </dev>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

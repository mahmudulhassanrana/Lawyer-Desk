@extends('admin.layout.amaster')
@section('title','User Details')
@section('admin.layout.acontane')

    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
                <br>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <h2>User Details for {{$user->name}}</h2>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <p><strong>Name :</strong> {{$user->name}}</p><br>
                                <p><strong>Email :</strong> {{$user->email}}</p><br>
                                <p><strong>NID :</strong> {{$user->nid}}</p><br>
                                <p><strong>Address :</strong> {{$user->address}}</p><br>
                                <p><strong>Phone :</strong> {{$user->phone}}</p><br>
                                <br>
                            </div>
                            <br>
                            <dev class="row">
                                <div class="col-6">
                                    <form action="{{url('/adminuser/'.$user->id)}}" method="post">
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

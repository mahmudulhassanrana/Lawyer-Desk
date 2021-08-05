@extends('admin.layout.amaster')
@section('title','User list')
@section('admin.layout.acontane')

    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none">
                <div class="card-header justify-content-between">
                    <h2>User list</h2>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                        <tr>
                            <th class="d-none d-md-table-cell"><b>User Name</b></th>
                            <th class="d-none d-md-table-cell"><b>NID Number</b></th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <th class="d-none d-md-table-cell">{{ $user->name }} </th>
                                <th class="d-none d-md-table-cell">{{ $user->nid }}</th>
                                <th class="d-none d-md-table-cell"><a href="{{url('/adminuser/'.$user->id)}}">
                                        view</a></th>
                            </tr>
                        @endforeach
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection

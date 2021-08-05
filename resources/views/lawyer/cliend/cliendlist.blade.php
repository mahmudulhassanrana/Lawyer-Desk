@extends('lawyer.layout.lmaster')
@section('title','Cliend list')
@section('lawyer.layout.lcontane')
    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none">
                <div class="card-header justify-content-between">
                    <h2>Cliend list</h2>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                        <tr>
                            <th class="d-none d-md-table-cell"><b>Cliend Name</b></th>
                            <th class="d-none d-md-table-cell"><b>Applicatation Date</b></th>
                        </tr>
                        @foreach($cliends as $cliend)
                            <tr>
                                <th class="d-none d-md-table-cell">{{ $cliend->vname }} </th>
                                <th class="d-none d-md-table-cell">{{ $cliend->created_at }}</th>
                                <th class="d-none d-md-table-cell"><a href="{{url('/cliend/'.$cliend->user_id)}}">view</a>
                                </th>
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

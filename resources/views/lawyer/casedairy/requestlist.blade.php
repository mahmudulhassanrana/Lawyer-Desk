@extends('lawyer.layout.lmaster')
@section('title','Request list')
@section('lawyer.layout.lcontane')
    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none">
                <div class="card-header justify-content-between">
                    <h2>Request list</h2>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                        <tr>
                            <th class="d-none d-md-table-cell"><b>Cliend Name</b></th>
                            <th class="d-none d-md-table-cell"><b>Case type</b> </th>
                            <th class="d-none d-md-table-cell"><b>Applicatation Date</b></th>
                        </tr>
                        @foreach($applications as $application)
                            <tr>
                                <th class="d-none d-md-table-cell">{{ $application->vname }} </th>
                                <th class="d-none d-md-table-cell">{{ $application->casetype }}</th>
                                <th class="d-none d-md-table-cell">{{ $application->created_at }}</th>
                                <th class="d-none d-md-table-cell"><a href="{{url('/caserequest/'.$application->id)}}">view</a>
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

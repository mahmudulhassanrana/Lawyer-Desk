@extends('lawyer.layout.lmaster')
@section('title','Case list')
@section('lawyer.layout.lcontane')
    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" >
                <div class="card-header justify-content-between">
                    <h2>Case list</h2>

                    <a href="lawyer-create"><h3>+ Create Case Dairy</h3></a>

                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th class="d-none d-md-table-cell">Case Dairy name </th>
                            <th class="d-none d-md-table-cell">Type</th>
                            <th class="d-none d-md-table-cell">Date</th>
                            <th class="d-none d-md-table-cell"> <a href=""> View</a>  </th>

                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('lawyer.layout.lmaster')
@section('title','Request')
@section('lawyer.layout.lcontane')

    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none">
                <div class="card-header justify-content-between">
                    <h2>Will You Sure Dismissed This Case?</h2>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                        <div class="form-group input-group">
                            <form method="POST" action="{{url('/case/'.$request->id)}}">
                                {{ csrf_field() }}
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-exclamation-triangle"></i> </span>
                                    </div>
                                    <select name="status" class="form-control">
                                        <option value="">Will You Sure Dismissed This Case?</option>
                                        <option value="3">Yes</option>
                                        <option value="1">No</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> Confirm</button>
                                </div>
                            </form>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('lawyer.layout.lmaster')
@section('title','Request')
@section('lawyer.layout.lcontane')

    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none">
                <div class="card-header justify-content-between">
                    <h2>Will You Will You Accept this case?</h2>
                </div>
                <div class="card-body pt-0 pb-5">
                    <form method="POST" action="{{url('/case/'.$request->id)}}">
                        {{ csrf_field() }}
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-exclamation-triangle"></i> </span>
                            </div>
                            <select name="status" class="form-control">
                                <option value="">Will You Accept this case?</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

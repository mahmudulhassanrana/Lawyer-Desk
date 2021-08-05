@extends('admin.layout.amaster')
@section('title','Admin Dashboard')
@section('admin.layout.acontane')

    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none">
                <div class="card-header justify-content-between">
                    <h2>Will You Active The Lawyer?</h2>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                        <div class="form-group input-group">
                            <form method="POST" action="{{url('/request/'.$user->id)}}">
                                {{ csrf_field() }}
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user-circle"></i> </span>
                                    </div>
                                    <select name="usertype" class="form-control">
                                        <option value="">Will You Active The Lawyer?</option>
                                        <option value="3">Yes</option>
                                        <option value="2">No</option>
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

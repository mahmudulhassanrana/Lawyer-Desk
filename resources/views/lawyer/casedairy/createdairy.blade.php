@extends('lawyer.layout.lmaster')
@section('title','Creat dairy')
@section('lawyer.layout.lcontane')

    <div class="row justify-content-center">

        <form method="POST" action="{{url('/dairy')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h2 style="text-align: center;">Create A Case Dairy</h2>
            <br>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-bookmark"></i> </span>
                </div>
                <select name="casetype" class="form-control">
                    <option value=""> Case type</option>
                    <option value="Commercial type">Commercial type</option>
                    <option value="Service type">Service type</option>
                    <option value="Others">Others</option>
                </select>
            </div>

            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="vname" class="form-control" placeholder="Victim Full Name" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="vemail" class="form-control" placeholder="Email address" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
                </div>
                <input name="vaddress" class="form-control" placeholder="victim Address" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
                </div>
                <input name="vnid" class="form-control" placeholder="victim NID number" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input name="vphone" class="form-control" placeholder="victim Phone Number" type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                </div>
                <input name="case_details" class="form-control" placeholder="Full details for case" type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                </div>
                <input name="date" class="form-control" type="datetime-local" >
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-comment"></i> </span>
                </div>
                <input name="vcomment" class="form-control" placeholder="victim comment for self defence " type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-file"></i> </span>
                </div>
                <input name="file_1" accept="image/*" class="form-control" type="file" >
            </div>
            <div>{{ $errors->first('file_1') }}</div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-file"></i> </span>
                </div>
                <input name="file_2" accept="image/*" class="form-control" type="file" >
            </div>
            <div>{{ $errors->first('file_2') }}</div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-file"></i> </span>
                </div>
                <input name="file_3" accept="image/*" class="form-control" type="file" >
            </div>
            <div>{{ $errors->first('file_3') }}</div>
            <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Apply application</button>
            </div> <!-- form-group// -->

        </form>

    </div>

@endsection

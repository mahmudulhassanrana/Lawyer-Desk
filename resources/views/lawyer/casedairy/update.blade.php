@extends('lawyer.layout.lmaster')
@section('title','Creat dairy')
@section('lawyer.layout.lcontane')

    <div class="row justify-content-center">

        <form method="POST" action="{{url('/dairyupdate/'.$user->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h2 style="text-align: center;">Create A Case Dairy</h2>
            <br>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-bookmark"></i> </span>
                </div>
                <select name="casetype" class="form-control">
                    <option value="" disabled> Case type</option>
                    <option value="{{old('name') ?? $user->casetype }}">{{$user->casetype}}</option>
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
                <input name="vname" value="{{old('vname') ?? $user->vname }}" class="form-control"
                       placeholder="Victim Full Name" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="vemail" value="{{old('vemail') ?? $user->vemail }}" class="form-control"
                       placeholder="Email address" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
                </div>
                <input name="vaddress" value="{{old('vaddress') ?? $user->vaddress }}" class="form-control"
                       placeholder="victim Address" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
                </div>
                <input name="vnid" value="{{old('vnid') ?? $user->vnid }}" class="form-control"
                       placeholder="victim NID number" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input name="vphone" value="{{old('vphone') ?? $user->vphone }}" class="form-control"
                       placeholder="victim Phone Number" type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                </div>
                <input name="case_details" value="{{old('case_details') ?? $user->case_details }}" class="form-control"
                       placeholder="Full details for case" type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                </div>
                <input name="date" value="{{old('date') ?? $user->date }}" class="form-control" type="datetime-local">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-comment"></i> </span>
                </div>
                <input name="vcomment" value="{{old('vcomment') ?? $user->vcomment }}" class="form-control"
                       placeholder="victim comment for self defence " type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-file"></i> </span>
                </div>
                <input name="file_1" value="{{old('file_1') ?? $user->file_1 }}" accept="image/*" class="form-control"
                       type="file">
            </div>
            <div>{{ $errors->first('file_1') }}</div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-file"></i> </span>
                </div>
                <input name="file_2" value="{{old('file_2') ?? $user->file_2 }}" accept="image/*" class="form-control"
                       type="file">
            </div>
            <div>{{ $errors->first('file_2') }}</div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-file"></i> </span>
                </div>
                <input name="file_3" value="{{old('file_3') ?? $user->file_3 }}" accept="image/*" class="form-control"
                       type="file">
            </div>
            <div>{{ $errors->first('file_3') }}</div>
            <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Apply application</button>
            </div> <!-- form-group// -->

        </form>

    </div>

@endsection

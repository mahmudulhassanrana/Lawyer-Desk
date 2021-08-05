@extends('lawyer.layout.lmaster')
@section('title','Feedback')
@section('lawyer.layout.lcontane')
    <div class="row justify-content-center">

        <form method="POST" action="{{url('/lawyerfeedback')}}">
            {{ csrf_field() }}
            <h2 style="text-align: center;">User Feedback</h2>
            <br>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-comments"></i> </span>
                </div>
                <input name="feedback_comment" class="form-control" placeholder="Feedback comments" type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-star"></i> </span>
                </div>
                <select name="feedback" class="form-control">
                    <option selected=""> Give rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value=""5>5</option>
                </select>
            </div>
            <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Give Feedback</button>
            </div> <!-- form-group// -->
        </form>

    </div>
@endsection

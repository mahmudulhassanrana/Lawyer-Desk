@extends('user.layout.umaster')
@section('title','Feedback')
@section('user.layout.ucontane')


    <div class="row justify-content-center">

        <form>
            <h2 style="text-align: center;">User Feedback</h2>
            <br>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-comments"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Feedback comments" type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-star"></i> </span>
                </div>
                <select class="form-control">
                    <option selected=""> Give rating</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Give Feedback</button>
            </div> <!-- form-group// -->
        </form>

    </div>





@endsection

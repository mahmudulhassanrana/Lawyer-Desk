@extends('admin.layout.amaster')
@section('title','Admin Dashboard')
	@section('admin.layout.acontane')

        <div class="content-wrapper">

            <div class="col-12">
                <!-- Recent Order Table -->

                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="widget-block rounded bg-primary  d-flex">
                                <div class="widget-info align-self-center w-50">
                                    <h2 class="text-white mb-2">{{$users}}</h2>
                                    <p>Active User </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="widget-block rounded bg-warning  d-flex">
                                <div class="widget-info align-self-center w-50">
                                    <h2 class="text-white mb-2">{{$lawyers}}</h2>
                                    <p>Active Lawyer</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="widget-block rounded bg-danger  d-flex">
                                <div class="widget-info align-self-center w-50">
                                    <h3 class="text-white mb-2">{{$requests}}</h3>
                                    <p>lawyer Request</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="widget-block rounded bg-success  d-flex">
                                <div class="widget-info align-self-center w-50">
                                    <h2 class="text-white mb-2">0</h2>
                                    <p>Feedback</p>
                                </div>

                            </div>
                        </div>
                    </div>

            </div>
        </div>

	@endsection

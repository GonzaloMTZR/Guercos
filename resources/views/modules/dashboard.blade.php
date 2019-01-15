@extends('layouts.template')
@section('title', '- Dashboard')

@section('content')
<div class="row">

    <!-- user card start -->
    <div class="col-sm-6">
        <div class="card bg-c-blue text-white widget-visitor-card">
            <div class="card-block-small text-center">
                <h2>1,658</h2>
                <h6>Daily visitor</h6>
                <i class="ti-user"></i>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card bg-c-yellow text-white widget-visitor-card">
            <div class="card-block-small text-center">
                <h2>5,678</h2>
                <h6>Last month visitor</h6>
                <i class="icofont icofont-ui-alarm"></i>
            </div>
        </div>
    </div>
    <!-- user card end -->

    <!-- Tasks Sale Start -->
    <div class="col-md-12 col-xl-6 ">
        <div class="card task-sale-card ">
            <div class="card-header ">
                <div class="card-header-left ">
                    <h5>Today</h5>
                </div>
                
            </div>
            <div class="card-block-big ">
                <h2 class="text-c-green d-inline-block m-b-40 f-50 ">23</h2>
                <div class="d-inline-block m-l-5 super ">
                    <p class="text-muted  m-b-0 f-w-400 ">Task</p>
                    <p class="text-muted  m-b-0 f-w-400 ">Done</p>
                </div>
                <div class="row ">
                    <div class="col-sm-5 ">
                        <h3 class="text-muted d-inline-block m-b-40 ">23</h3>
                        <div class="d-inline-block m-l-5 top m-t-10">
                            <p class=" m-b-0 f-w-400 f-14 text-uppercase">Today task</p>
                        </div>
                    </div>
                    <div class="col-sm-5 ">
                        <h3 class="text-muted d-inline-block m-b-40 ">12</h3>
                        <div class="d-inline-block m-l-5 top m-t-10">
                            <p class=" m-b-0 f-w-400 f-14 text-uppercase">Pending task</p>
                        </div>
                    </div>
                </div>
                <div class="b-t-default p-t-20 m-t-5">
                    <img src="{{asset('admin/assets/images/widget/user-3.png')}} " alt=" " class="img-rounded top ">
                    <div class="d-inline-block m-l-10 ">
                        <p class="text-muted m-b-5">Most assigned by</p>
                        <span class="f-w-400 f-16 text-c-green">Gregory Durk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Summery Start -->
    <div class="col-md-12 col-xl-6">
        <div class="card summery-card">
            <div class="card-header">
                <div class="card-header-left ">
                    <h5>Summery</h5>
                </div>
                
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-6 b-r-default p-b-30">
                        <h2 class="f-w-400">13</h2>
                        <p class="text-muted f-w-400">Active users</p>
                        <div class="progress">
                            <div class="progress-bar bg-c-blue" role="progressbar"
                                    aria-valuemin="0" aria-valuemax="100"
                                    style="width:50%">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-b-30">
                        <h2 class="f-w-400">28</h2>
                        <p class="text-muted f-w-400">Completed task</p>
                        <div class="progress">
                            <div class="progress-bar bg-c-pink" role="progressbar"
                                    aria-valuemin="0" aria-valuemax="100"
                                    style="width:50%">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <canvas id="summary" height="80"></canvas>
                    </div>
                    <div class="col-sm-6">
                        <h2 class="f-w-400">76</h2>
                        <p class="text-muted f-w-400">Open task</p>
                        <div class="progress">
                            <div class="progress-bar bg-c-green" role="progressbar"
                                    aria-valuemin="0" aria-valuemax="100"
                                    style="width:50%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- summary end -->
    <!-- Tasks Sale End -->

    <!-- Profit Visitor Start -->
    <div class="col-md-6 col-xl-4 ">
        <div class="card ">
            <div class="card-block ">
                <h2 class="text-center f-w-400 ">$45,567</h2>
                <p class="text-center text-muted ">Monthly Profit</p>
                <canvas id="monthlyprofit-1" height="30"></canvas>
                <div class="m-t-20">
                    <div class="row ">
                        <div class="col-6 text-center ">
                            <h6 class="f-20 f-w-400">$6,234</h6>
                            <i class="icofont icofont-caret-up text-c-blue f-16"></i>
                            <p class="text-muted f-14 d-inline-block m-l-10 m-b-0">Today</p>
                        </div>
                        <div class="col-6 text-center ">
                            <h6 class="f-20 f-w-400">$4,387</h6>
                            <i class="icofont icofont-caret-down text-c-blue f-16 "></i>
                            <p class="text-muted f-14 d-inline-block m-l-10 m-b-0 ">
                                Yesterday</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-4 ">
        <div class="card ">
            <div class="card-block ">
                <h2 class="text-center f-w-400 ">2,413</h2>
                <p class="text-center text-muted ">Total Sales</p>
                <canvas id="monthlyprofit-2" height="30"></canvas>
                <div class="m-t-20">
                    <div class="row ">
                        <div class="col-6 text-center ">
                            <h6 class="f-20 f-w-400">1578</h6>
                            <i class="icofont icofont-caret-down text-c-pink f-16 "></i>
                            <p class="text-muted f-14 d-inline-block m-l-10 m-b-0 ">
                                Today</p>
                        </div>
                        <div class="col-6 text-center ">
                            <h6 class="f-20 f-w-400">1028</h6>
                            <i class="icofont icofont-caret-up text-c-pink f-16 "></i>
                            <p class="text-muted f-14 d-inline-block m-l-10 m-b-0 ">
                                Yesterday</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-xl-4 ">
        <div class="card ">
            <div class="card-block ">
                <h2 class="text-center f-w-400 ">8,421</h2>
                <p class="text-center text-muted ">Unique Visitors</p>
                <canvas id="monthlyprofit-3" height="30"></canvas>
                <div class="m-t-20">
                    <div class="row ">
                        <div class="col-6 text-center ">
                            <h6 class="f-20 f-w-400">2,849</h6>
                            <i class="icofont icofont-caret-up text-c-yellow f-16 "></i>
                            <p class="text-muted f-14 d-inline-block m-l-10 m-b-0 ">
                                Today</p>
                        </div>
                        <div class="col-6 text-center ">
                            <h6 class="f-20 f-w-400">3,587</h6>
                            <i class="icofont icofont-caret-down text-c-yellow f-16 "></i>
                            <p class="text-muted f-14 d-inline-block m-l-10 m-b-0 ">
                                Yesterday</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profit Visitor End -->

    </div>
</div>

@endsection
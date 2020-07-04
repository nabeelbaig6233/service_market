@extends('admin.layout.webapp')

@section('content')
    <div class="right_col" role="main">

        <!-- top tiles -->
        <div class="row" style="display: block;">
            <div class="tile_count">

                <div class="col-md-3 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                    <div><a class="count green" href="javascript:void(0)">{{$user??''}}</a></div>
                </div>

                <div class="col-md-3 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                    <div><a class="count green" href="javascript:void(0)">56</a>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-eye"></i> Total Profile Views</span>
                    <div><a class="count green" id="total_views"
                            href="{{action('admin\DashboardController@index')}}">0</a></div>
                </div>
                <div class="col-md-3 col-sm-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-download"></i> Total Contact Downloads</span>
                    <div><a class="count green" id="total_downloads"
                            href="{{action('admin\DashboardController@index')}}">asdad</a></div>
                </div>


            </div>
        </div>

        <!-- /top tiles -->
    </div>
@endsection
@section('page_js')

@endsection

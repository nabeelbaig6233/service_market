<?php

namespace App\Http\Controllers\admin;

use App\AnalyticsData;
use App\Http\Controllers\Controller;
use App\models\device;
use App\models\downloads;
use App\models\profile;
use App\models\views;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.welcome');
    }

    public function getFilterAnalyticsData(Request $request){
        if($request->ajax()){
            $filterData=auth()->user()->role_id===1?
                views::select('google_dated','views_count')
                ->whereBetween('google_dated',[$request->get('startDate'),$request->get('endDate')])
                ->get()->groupBy('google_dated')
                ->map(function($data){return $data->sum('views_count');}):
                views::select('google_dated','views_count')
                ->where('path','/public/profile/'.auth()->user()->id)
                ->whereBetween('google_dated',[$request->get('startDate'),$request->get('endDate')])
                ->get()->groupBy('google_dated')
                ->map(function($data){return $data->sum('views_count');});
            $data=[];
            foreach ($filterData as $key => $value) {
                    array_push($data, [$value, $key]);
            }
            echo json_encode($data);
            return ;
        }
    }

    public function getAnalyticsData($id){
        if(request()->ajax()){
//        $analyticsClass=new AnalyticsData();
//        $analytics=$analyticsClass->initializeAnalytics();
//        $profile = $analyticsClass->getFirstProfileId($analytics);
//        $results = $analyticsClass->getResults($analytics, $profile,$id.'');
          $collection=auth()->user()->role_id===1?views::select('views_count','google_dated')
                          ->get()->groupBy('google_dated')
                          ->map(function($ss){return $ss->sum('views_count');})
                          ->sort(function ($data){return $data;})
                          :views::select('views_count','google_dated')
                          ->where('path','/public/profile/'.$id)
                          ->latest('google_dated')->limit(30)->get();
          $data=[];
          $count=1;
          if(auth()->user()->role_id===1) {
              foreach ($collection as $key => $value) {
                  if($count<=30) {
                      array_push($data, [$value, $key]);
                  }
                  else {
                      return;
                  }
                  $count++;
              }
              echo json_encode($data);
          }else{
              foreach ($collection as $item) {
                  array_push($data, [$item->views_count, $item->google_dated]);
              }
              echo json_encode($data);
          }
        }
        else{
            return abort(404);
        }
    }
}

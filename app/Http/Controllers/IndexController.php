<?php
/**
 * Created by PhpStorm.
 * User: Welcome
 * Date: 2017/3/29
 * Time: 22:40
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    // 便民服务页面
    public function service(Request $request, $type){
        $para = [ 'type' => $type ];
        $keyword = $request->input('keyword', null);
        $deptNo = $request->input('id', null);
        // 门诊预约
        if($type == 'schedule'){
            $departments = DB::table('department')->get();
            $para['departments'] = $departments;
        }
        if($type == 'schedule2'){
            if($deptNo != null){
                $schedules = array();
                for ($i = 0; $i < 6; ++ $i){
                    $time = date('Y-m-d', time() + $i * 86400);
                    $schedule = DB::table('schedule')
                        ->where('dept_no', $deptNo)
                        ->where('time', $time)
                        ->get();
                    if(count($schedule) != 0){
                        $weekday = "星期".mb_substr( "日一二三四五六",date("w",time() + $i * 86400),1,"utf-8" );
//                        $weekday = date('w', time() + $i * 86400);
                        $schedules[$time.' '.$weekday] =  $schedule;
                    }
                }
                $para['schedules'] = $schedules;
            }
        }

        // 查询药品价格
        if($type == "queryMedicalPrice"){
            if($keyword != null){
                $medical = DB::table('medical')->where('m_name', 'like', "%$keyword%")->paginate(20);
            }else{
                $medical = DB::table('medical')->paginate(20);
            }
            $para['medical'] = $medical;
            $para['keyword'] = $keyword;
        }
        // 查询医疗服务价格
        if($type == 'queryTreatmentPrice'){
            $num = count( DB::table('treatment')->select(DB::raw('distinct t_type'))->get() );
            $treatments = array();
            for( $i = 1; $i <= $num; ++$i){
                $item = DB::table('treatment')->where('t_type', $i)->get();
                array_push( $treatments, $item);
            }
            $para['treatments'] = $treatments;
            $para['keyword'] = $keyword;
        }
        return view('hospital.service',$para);
    }

    public function department(Request $request){
        $keyword = $request->input('keyword', null);
        $department_type = DB::table('department_type')->get();
        foreach ($department_type as $type){
            if($keyword != null){
                $type->items = DB::table('department')
                    ->select('dept_no as no', 'dept_name as name')
                    ->where('dt_no', $type->dt_no)
                    ->where('dept_name', 'like', "%$keyword%")
                    ->get();
            }else{
                $type->items = DB::table('department')->select('dept_no as no', 'dept_name as name')->where('dt_no', $type->dt_no)->get();
            }
        }

        return view('hospital.department',[
            'department_type' => $department_type,
            'keyword' => $keyword
        ]);
    }

    public function departmentDetail($id){
        $department = DB::table('department')->where('dept_no', $id)->first ();
        $doctors = DB::table('doctor')
            ->where('dept_no', $id)
            ->get();
        return view('hospital.departmentDetail',[
            'department' => $department,
            'doctors' => $doctors
        ]);
    }

    public function expert(Request $request){
        $keyword = $request->input('keyword', null);
        if($keyword != null){
            $doctors = DB::table('doctor')
                ->join('department', 'doctor.dept_no', '=', 'department.dept_no')
                ->where('d_name', 'like', "%$keyword%")
                ->paginate(6);
        }else{
            $doctors = DB::table('doctor')
                ->join('department', 'doctor.dept_no', '=', 'department.dept_no')
                ->paginate(6);
        }
        return view('hospital.expert',[
            'doctors' => $doctors,
            'keyword' => $keyword
        ]);
    }

    public function expertDetail($id){
        $doctor = DB::table('doctor')
            ->join('department', 'doctor.dept_no', '=', 'department.dept_no')
            ->where('d_no', $id)
            ->first();
        return view('hospital.expertDetail',[
            'doctor' => $doctor
        ]);
    }
}
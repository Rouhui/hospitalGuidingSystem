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
    public function service(){
//        $students = Student::paginate(8);
//        return view('student.index',
//            [
//                'students' => $students
//            ]);
        return view('hospital.service');
    }

    public function subService($type){
        return view('hospital.service',
            [
                'type' => $type
            ]);
    }

    public function department(Request $request){
        $keyword = $request->input('keyword', null);
        $department_type = DB::table('department_type')->get();
        foreach ($department_type as $type){
            if($keyword != null){
                $type->items = DB::table('department')
                    ->select('d_id as id', 'd_name as name')
                    ->where('dt_id', $type->dt_id)
                    ->where('d_name', 'like', "%$keyword%")
                    ->get();
            }else{
                $type->items = DB::table('department')->select('d_id as id', 'd_name as name')->where('dt_id', $type->dt_id)->get();
            }
        }

        return view('hospital.department',[
            'department_type' => $department_type,
            'keyword' => $keyword
        ]);
    }

    public function departmentDetail($id){
        $department = DB::table('department')->where('d_id', $id)->first();
        return view('hospital.departmentDetail',[
            'department' => $department
        ]);
    }
}
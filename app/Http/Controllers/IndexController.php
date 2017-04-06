<?php
/**
 * Created by PhpStorm.
 * User: Welcome
 * Date: 2017/3/29
 * Time: 22:40
 */

namespace App\Http\Controllers;

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

    public function department(){


        return view('hospital.department');
    }

    public function departmentDetail(){
        return view('hospital.departmentDetail');
    }
}
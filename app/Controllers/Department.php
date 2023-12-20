<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartmentModel;

class Department extends BaseController
{
    // view department

    public function index()
    {
        $department = new DepartmentModel;// model name
        $data['sheuly']= $department->FindAll();
        return view('backend/department/viewDepartment', $data);
    }

    //add department
    public function adduser()
    {
        $department = new DepartmentModel;

        if($this->request->getMethod()=='post'){
            $data=[
                'dep_name'=>$this->request->getPost('dep_name'),
            ];
            print_r($data);
            $department->insert($data);
            return redirect()->to('viewDepartment');
        }
        return view('backend/department/addDepartment');
    }

    // find single fatch(edit e shudhu control + routes e kaj)
    public function edit($dep_id=null){
    
        $department = new DepartmentModel;

        $data['department']= $department->where('dep_id',$dep_id)->first();
        return view('backend/department/updateDepartment', $data);

    }
    // update user
    public function update($dep_id=null){
        $department = new DepartmentModel;

        $data=[
            'dep_name'=>$this->request->getPost('dep_name'), //dep_name=database name, ('dep_name')=from name
        ];
        $department->update($dep_id,$data);
        return redirect()->to('viewDepartment');
    }
    // delete user
    public function delete($dep_id=null){
        $department = new DepartmentModel;
        $department->delete($dep_id);
        return redirect()->to('viewDepartment');

    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SalaryModel;


class SalaryController extends BaseController
{
    // view salary
    public function index()
    {
        $salary = new SalaryModel;
        $data['sheuly'] =$salary->FindAll();
        return view('backend/salary/viewSalary', $data);
    }

    //add salary
    public function addSalary()
    {
        $salary = new SalaryModel;

        if($this->request->getMethod()=='post'){
            $image = $this->request->getFile('image');
            $imageName = $image->getRandomName();
            $data=[
                'employee_name'=>$this->request->getPost('name'),
                'department'=>$this->request->getPost('department'),
                'basic_salary'=>$this->request->getPost('bsalary'),
                'allowance'=>$this->request->getPost('allowance'),
                'total_salary'=>$this->request->getPost('allowance') + $this->request->getPost('bsalary'),
                'image' => $imageName,
            ];
            $image->move('uploads/img', $imageName);
            $salary->insert($data);
            return redirect()->to('viewSalary');
        }
        return view('backend/salary/addSalary');
    }

    //single fatch salary(edit)

    public function edit($id=null){
        $salary = new SalaryModel;

        $data['sheuly'] = $salary->where('id',$id)->first();
        return view('backend/salary/updateSalary', $data);
    }
    // update user
    public function update($id=null){
            $salary = new SalaryModel;
            $image = $this->request->getFile('image');
            $imageName = $image->getRandomName();
            $data=[
                'employee_name'=>$this->request->getPost('name'),
                'department'=>$this->request->getPost('department'),
                'basic_salary'=>$this->request->getPost('bsalary'),
                'allowance'=>$this->request->getPost('allowance'),
                'total_salary'=>$this->request->getPost('bsalary') + $this->request->getPost('allowance'),
                'image' => $imageName,
            ];
                $image->move('uploads/img', $imageName);
                $salary->update($id,$data);
                return redirect()->to('viewSalary');
        
    }
    // delete user
    public function delete($id=null){
        $salary = new SalaryModel;
        $salary->delete($id);
        return redirect()->to('viewSalary');

    }


    // ----------------------------Single Print----------------
    public function singleprint($id){
        $userModel = new SalaryModel();
        $data['book'] = $userModel->where('id', $id)->first();
        return view('backend\salary\print', $data);
        }
    
}



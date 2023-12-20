<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StaffModel;

class StaffController extends BaseController
{
    // view department

    public function index()
    {
        $staff = new StaffModel;// model name
        $data['sheuly']= $staff->FindAll();
        return view('backend/staff/viewStaff', $data);
    }

    //add department
    public function adduser()
    {
        $staff = new StaffModel;

        if($this->request->getMethod()=='post'){
            $image = $this->request->getFile('image');
            $imageName = $image->getRandomName();
            $data=[
                'name'=>$this->request->getPost('name'),
                'image' => $imageName,
                'email'=>$this->request->getPost('email'),
                'department'=>$this->request->getPost('department'),
                'address'=>$this->request->getPost('address'),
                'Joining'=>$this->request->getPost('Joining'),
        ];
            $image->move('uploads/img', $imageName);
            $staff->insert($data);
            return redirect()->to('viewStaff');
        }
        return view('backend/staff/addStaff');
    }

    // find single fatch(edit e shudhu control + routes e kaj)
    public function edit($id=null){
    
        $staff = new StaffModel;

        $data['sheuly']= $staff->where('id',$id)->first();
        return view('backend\staff\updateStaff', $data);

    }
    // update user
    public function update($id=null){
            $staff = new StaffModel;
            $image = $this->request->getFile('image');
            $imageName = $image->getRandomName();
            $data=[
                'name'=>$this->request->getPost('name'),
                'image' => $imageName,
                'email'=>$this->request->getPost('email'),
                'department'=>$this->request->getPost('department'),
                'address'=>$this->request->getPost('address'),
                'Joining'=>$this->request->getPost('Joining'),
            ];
                $image->move('uploads/img', $imageName);
                $staff->update($id,$data);
                return redirect()->to('viewStaff');
        
    }
    // delete user
    public function delete($id=null){
        $staff = new StaffModel;
        $staff->delete($id);
        return redirect()->to('viewStaff');

    }


    
}

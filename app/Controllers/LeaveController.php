<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LeaveModel;

class LeaveController extends BaseController
{
    
    // view leave
    public function index()
    {
        $leave = new LeaveModel;
        $data['sheuly'] =$leave->FindAll();
        return view('backend/leave/viewLeave', $data);
    }

    //add leave
    public function addLeave()
    {
        $leave = new LeaveModel;

        if($this->request->getMethod()=='post'){
            $image = $this->request->getFile('image');
            $imageName = $image->getRandomName();
            $data=[
                'name'=>$this->request->getPost('name'),
                'image' => $imageName,
                'department'=>$this->request->getPost('department'),
                'reason'=>$this->request->getPost('reason'),
                'leave_from'=>$this->request->getPost('from'),
                'leave_to'=>$this->request->getPost('to'),
                'status'=>$this->request->getPost('status'),
                'description'=>$this->request->getPost('description'),
            ];

            $image->move('uploads/img', $imageName);
            $leave->insert($data);
            return redirect()->to('viewLeave');
        }
        return view('backend/leave/addLeave');
    }

    //single fatch leave(edit)

    public function edit($id=null){
        $leave = new LeaveModel;

        $data['sheuly'] = $leave->where('id',$id)->first();
        return view('backend/leave/updateLeave', $data);
    }
    // update user
    public function update($id=null){
        $leave = new LeaveModel;
        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $data=[
            'name'=>$this->request->getPost('name'),
            'image' => $imageName,
            'department'=>$this->request->getPost('department'),
            'reason'=>$this->request->getPost('reason'),
            'leave_from'=>$this->request->getPost('from'),
            'leave_to'=>$this->request->getPost('to'),
            'status'=>$this->request->getPost('status'),
            'description'=>$this->request->getPost('description'),
        ];
        $image->move('uploads/img', $imageName);
        $leave->update($id,$data);
        return redirect()->to('viewLeave');
        
    }
    // delete user
    public function delete($id=null){
        $leave = new LeaveModel;
        $leave->delete($id);
        return redirect()->to('viewLeave');

    }
    
}

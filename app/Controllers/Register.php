<?php

namespace App\Controllers;
use \App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
      helper(['form']);
        $rules = [
            'u_name'          => 'required',
            'u_email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.u_email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'u_name'     => $this->request->getVar('u_name'),
                'u_email'    => $this->request->getVar('u_email'),
                'password' => $this->request->getVar('password'),
            ];
            $userModel->save($data);
            return redirect()->to('/signin');
        }else{
            $data['validation'] = $this->validator;
            echo view('backend/pages/auth/signup');
        }
          
    }
    
}

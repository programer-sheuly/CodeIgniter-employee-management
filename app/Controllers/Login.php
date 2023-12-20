<?php

namespace App\Controllers;
use \App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('backend/pages/auth/signin');
    } 
  
    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('u_email', $email)->first();
        if($data){
            $pass = $data['password'];
            // $authenticatePassword = password_verify($password, $pass);
            if($pass == $password){
                $ses_data = [
                    'u_id' => $data['u_id'],
                    'u_name' => $data['u_name'],
                    'u_email' => $data['u_email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/AdminDashboard');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
                // echo "Password is incorrect";
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/AdminDashboard');
            // echo "Email does not exist.";
        }

        return view('backend/pages/auth/signin');
    }

    public function logout()
     {
         $session = session();
         $session->destroy();
         return redirect()->to('/signin');
     }


}

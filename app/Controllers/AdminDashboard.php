<?php

namespace App\Controllers;
use \App\Models\UserModel;
use \App\Models\DepartmentModel;
use \App\Models\StaffModel;
use \App\Models\LeaveModel;
use \App\Models\SalaryModel;

class AdminDashboard extends BaseController
{
    public function index()
    {
        // --------------------for department fild count------------------------
        $depatment = new DepartmentModel();
		$data['depCount'] = $depatment->countAll();

        // --------------------for Staff count------------------------
         $staff = new StaffModel();
         $data['staffCount'] = $staff->countAll();


         // --------------------for Staff count------------------------
         $leave = new LeaveModel();
         $data['leaveCount'] = $leave->countAll();

        // -------------------------for sum-------------------------

        $salary = new SalaryModel();
		$query = $salary->selectSum('total_salary','sum')->get()->getrow()->sum;
		$data['salaryCount'] = $query;

        // $salary = new SalaryModel();
		// $result = $salary->select_sum("basic_salary.allowance")->get();
		// $data['salaryCount'] = $result['total'];

        // $productModel = new ProductModel();
		// $result = $productModel->select('sum(#) as sumQuantities')->first();
		// $data['sum'] = $result['sumQuantities'];

        return view('AdminDashboard' ,$data);
    }
}
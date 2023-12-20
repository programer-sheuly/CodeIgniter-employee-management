<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//  $routes->get('/', 'Home::index');


// signin & signup
// $routes->get('/', 'Register::index');
$routes->get('/', 'Register::index');
$routes->post ('/signup', 'Register::index');

$routes->get('/signin', 'Login::index');
$routes->post('/signin', 'Login::loginAuth');

$routes->get('logout', 'Login::logout');

$routes->get('AdminDashboard', 'AdminDashboard',['filter'=> 'AuthGuard']); 



// department
$routes->get('/viewDepartment', 'Department::index');
$routes->get('/addDepartment', 'Department::adduser'); //for add both are use(get,post)
$routes->post('/addDepartment', 'Department::adduser'); //for add both are use(get,post)
$routes->get('edituser/(:num)', 'Department::edit/$1');
$routes->post('updateUser/(:num)' , 'Department::update/$1');
$routes->get('deleteuser/(:num)','Department::delete/$1');//deleteuser connect to delete(viewUser)


//Staff
$routes->get('/viewStaff', 'StaffController::index');
$routes->get('/addStaff', 'StaffController::adduser'); //for add both are use(get,post)
$routes->post('/addStaff','StaffController::adduser'); //for add both are use(get,post)


$routes->get('editstaff/(:num)', 'StaffController::edit/$1');
$routes->post('updateStaff/(:num)' , 'StaffController::update/$1');
$routes->get('delete_staff/(:num)','StaffController::delete/$1');//deleteuser connect to delete(viewUser)


//Salary(show url,controller,function)
$routes->get('/viewSalary', 'SalaryController::index');
$routes->get('/addSalary', 'SalaryController::addSalary'); //for add both are use(get,post)
$routes->post('/addSalary', 'SalaryController::addSalary'); //for add both are use(get,post)


$routes->get('editSalary/(:num)', 'SalaryController::edit/$1');
$routes->post('updateSalary/(:num)' , 'SalaryController::update/$1');
$routes->get('deleteSalary/(:num)','SalaryController::delete/$1');

$routes->get('book-print/(:num)', 'SalaryController::singleprint/$1'); //Book Print



//leave(show url,controller,function)
$routes->get('/viewLeave', 'LeaveController::index');
$routes->get('/addLeave', 'LeaveController::addLeave'); //for add both are use(get,post)
$routes->post('/addLeave', 'LeaveController::addLeave'); //for add both are use(get,post)


$routes->get('editLeave/(:num)', 'LeaveController::edit/$1');
$routes->post('updateLeave/(:num)' , 'LeaveController::update/$1');
$routes->get('deleteLeave/(:num)','LeaveController::delete/$1');




$routes->group('admin', static function($routes){


    // $routes->group('', [], static function($routes) { 
    //     $routes->view('AdminDashboard', 'AdminDashboard'); // pagename || controler name
    // });
 
    // $routes->group('', [], static function($routes) { 
    //     $routes->view('AddDepartment', 'AddDepartment');
    // });

    $routes->group('', [], static function($routes) { 
        $routes->view('example-page', 'example-page');  // pagename || controler name
    });

    $routes->group('', [], static function($routes) { 
        $routes->view('example-auth', 'example-auth');
    });


    // $routes->group('', [], static function($routes) { 
    //     $routes->view('addStaff', 'AddStaff');
    // });

    $routes->group('', [], static function($routes) { 
        $routes->view('ManageSalary', 'ManageSalary');
    });

    $routes->group('', [], static function($routes) { 
        $routes->view('addSalary', 'addSalary');
    });

    $routes->group('', [], static function($routes) { 
        $routes->view('product', 'product');
    });
    $routes->group('', [], static function($routes) { 
        $routes->view('user', 'user');
    });
    $routes->group('', [], static function($routes) { 
        $routes->view('add-user', 'add-user');
    });

    $routes->group('', [], static function($routes) { 
        $routes->view('add-product', 'add-product');
    });

    $routes->group('', [], static function($routes) { 
        $routes->view('ManageDepartment', 'ManageDepartment');
    });

    $routes->group('', [], static function($routes) { 
        $routes->get('home', 'AdminController::index',['as'=>'admin.home']);
    });
    $routes->group('', [], static function($routes) { 
        $routes->get('', 'AuthController::loginForm',['as'=>'admin.login.form']);
    });
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

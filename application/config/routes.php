<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'administrator/login';
$route['register'] = 'administrator/index';
$route['detect'] = 'administrator/detect';
$route['dashboard'] = 'administrator/dashboard';
$route['logout'] = 'administrator/logout';
$route['admin_login'] = 'administrator/admin_login';
$route['accessibility'] = 'administrator/accessibility';
$route['empathy'] = 'administrator/empathy';
$route['responsetime'] = 'administrator/responsetime';
$route['loyalprograms'] = 'administrator/loyalprograms';
$route['archive'] = 'administrator/archive';
$route['profile'] = 'administrator/profile';

$route['changepass'] = 'administrator/changepass';
$route['logout'] = 'administrator/logout';



//CRUD Questions
$route['addquestion'] = 'administrator/addquestion';
$route['unarchivequestion'] = 'administrator/unarchivequestion';
$route['archivequestion'] = 'administrator/archivequestion';
$route['getarchivequestion/(:any)/(:any)'] = 'administrator/getarchivequestion/$1/$2';
$route['getquestions/(:num)'] = 'administrator/getquestions/$1';
$route['getunarchivedquestions/(:num)'] = 'administrator/getunarchivedquestions/$1';
$route['editquestion'] = 'administrator/editquestion';
$route['deletequestion'] = 'administrator/deletequestion';

$route['getemotions/(:any)'] = 'administrator/getAllEmotions/$1';
// $route['getrecord/(:any)'] = 'administrator/getRecord/$1';
$route['getrecord/(:any)/(:any)'] = 'administrator/getRecord/$1/$2';
$route['getyearrecord/(:any)/(:any)'] = 'administrator/getYearRecord/$1/$2';
$route['getyears'] = 'administrator/getYears';
$route['getarchivedquestionsyears'] = 'administrator/getArchivedQuestionsYear';
$route['getacc'] = 'administrator/getAccEmotions';
$route['getem'] = 'administrator/getEmEmotions';
$route['getres'] = 'administrator/getResEmotions';
$route['getlp'] = 'administrator/getLpEmotions';


$route['getaccq'] = 'administrator/getAccQEmotions';
$route['getemq'] = 'administrator/getEmQEmotions';
$route['getresq'] = 'administrator/getResQEmotions';
$route['getlpq'] = 'administrator/getLpQEmotions';

//API
$route['api/signup'] = 'administrator/signup';
$route['api/login'] = 'administrator/loginCheck';
$route['api/getq/(:num)'] = 'administrator/getMquestions/$1';



$route['admin'] = 'administrator/login';
$route['client_login'] = 'administrator/client_login';
$route['client_dashboard'] = 'administrator/client_dashboard';
$route['c_inuse'] = 'administrator/inuse_page';
$route['c_release'] = 'administrator/crelease_page';
$route['c_returned'] = 'administrator/creturned_page';
$route['c_transfer'] = 'administrator/ctransfer_page';




$route['employees'] = 'administrator/employee_page';
$route['release'] = 'administrator/release_page';
$route['pending'] = 'administrator/pending_page';
$route['returned'] = 'administrator/returned_page';
$route['transfer'] = 'administrator/transfer_page';
$route['mr'] = 'administrator/mr_page';
$route['change_password'] = 'administrator/changepass_page';
$route['changepass'] = 'administrator/changepass';

$route['add_employee'] = 'administrator/add_employee_page';
$route['equipments'] = 'administrator/equipment_page';
$route['add_equipment'] = 'administrator/add_equipment_page';
$route['add_category'] = 'administrator/add_category_page';
$route['students'] = 'administrator/student_page';
$route['add_student'] = 'administrator/add_student_page';
$route['getallstudents'] = 'administrator/get_students';

$route['saveemp'] = 'administrator/save_employee';
$route['savestud'] = 'administrator/save_student';
$route['saveequip'] = 'administrator/save_equipment';
$route['savecat'] = 'administrator/save_category';

$route['getemployees'] = 'administrator/get_employees';
$route['getequipments'] = 'administrator/get_equipments';
$route['getcategories'] = 'administrator/get_categories';
$route['getusers'] = 'administrator/get_users';


$route['deleteemployee'] = 'administrator/delete_employee';


$route['checkqr'] = 'administrator/checkqr';
$route['getscans'] = 'administrator/getscans';

$route['imports'] = 'administrator/importStudents';

$route['api/scanqr'] = 'administrator/scanqr';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

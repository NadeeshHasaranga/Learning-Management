<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-05-10 00:17:25 --> Severity: Notice --> Undefined variable: userId C:\xampp\htdocs\lms\application\views\includes\footer.php 20
ERROR - 2019-05-10 00:20:56 --> Severity: Notice --> Undefined variable: userId C:\xampp\htdocs\lms\application\views\includes\footer.php 20
ERROR - 2019-05-10 00:21:57 --> Severity: Notice --> Undefined variable: userId C:\xampp\htdocs\lms\application\views\includes\header.php 78
ERROR - 2019-05-10 00:24:59 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\lms\application\libraries\BaseController.php 46
ERROR - 2019-05-10 00:59:32 --> Severity: error --> Exception: Call to undefined method Course_model::setAssignment() C:\xampp\htdocs\lms\application\controllers\Assignment.php 46
ERROR - 2019-05-10 01:17:03 --> Severity: Notice --> Undefined property: View_Notice::$student C:\xampp\htdocs\lms\application\controllers\View_Notice.php 44
ERROR - 2019-05-10 01:17:03 --> Severity: error --> Exception: Call to a member function getAllNotice() on null C:\xampp\htdocs\lms\application\controllers\View_Notice.php 44
ERROR - 2019-05-10 01:32:53 --> Query error: Unknown column 'tbl_assignment.cname' in 'on clause' - Invalid query: SELECT `tbl_assignment`.*, `tbl_users`.`name`, `tbl_course`.`cname`
FROM `tbl_assignment`
LEFT JOIN `tbl_users` ON `tbl_users`.`userId` = `tbl_assignment`.`postlecture`
LEFT JOIN `tbl_course` ON `tbl_course`.`cid` = `tbl_assignment`.`cname`
ORDER BY `id`
ERROR - 2019-05-10 01:38:14 --> Query error: Unknown column 'tbl_assignment.postlecture' in 'on clause' - Invalid query: SELECT *
FROM `tbl_notice`
LEFT JOIN `tbl_users` ON `tbl_users`.`userId` = `tbl_assignment`.`postlecture`
LEFT JOIN `tbl_course` ON `tbl_course`.`cid` = `tbl_assignment`.`courseid`
ORDER BY `id`
ERROR - 2019-05-10 01:39:49 --> Query error: Unknown column 'tbl_notice.postlecture' in 'on clause' - Invalid query: SELECT `tbl_notice`.*, `tbl_users`.`name`, `tbl_course`.`cname`
FROM `tbl_notice`
LEFT JOIN `tbl_users` ON `tbl_users`.`userId` = `tbl_notice`.`postlecture`
LEFT JOIN `tbl_course` ON `tbl_course`.`cid` = `tbl_notice`.`courseid`
ORDER BY `id`
ERROR - 2019-05-10 01:59:02 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 03:27:16 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 03:27:54 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 03:27:56 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 03:27:57 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 03:27:58 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 08:55:01 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 08:56:35 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 08:58:15 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 08:58:23 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 08:59:56 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 09:01:58 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 09:05:01 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:18:55 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:21:50 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:21:58 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:23:03 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:39:36 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:41:08 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:43:44 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:43:55 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:44:40 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:44:54 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:45:21 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:45:27 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:45:32 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:45:36 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:45:39 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:45:47 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:45:55 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:46:57 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:50:06 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:51:49 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 10:53:50 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:09:50 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:10:02 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:18:54 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:18:58 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:19:13 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:20:33 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:20:53 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:22:13 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:22:40 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:24:06 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:24:14 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:24:22 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:27:24 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:28:32 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:29:41 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:29:48 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:36:13 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:37:18 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:38:24 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:39:48 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:40:41 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:43:11 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:45:40 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:45:57 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:46:07 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:53:56 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:54:24 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532
ERROR - 2019-05-10 11:55:22 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Error' does not have a method 'index' C:\xampp\htdocs\lms\system\core\CodeIgniter.php 532

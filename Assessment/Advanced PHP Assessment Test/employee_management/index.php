<?php
require 'controller/EmployeeController.php';

$controller = new EmployeeController();
$action = $_GET['action'] ?? 'menu';

switch ($action) {
    case 'menu':
        $controller->showMenu();
        break;
    case 'add':
        $controller->addEmployee();
        break;
    case 'store':
        $controller->storeEmployee();
        break;
    case 'view':
        $controller->viewEmployees();
        break;
    case 'edit':
        $controller->editEmployee();
        break;
    case 'update':
        $controller->updateEmployee();
        break;
    case 'delete':
        $controller->deleteEmployee();
        break;
    default:
        $controller->showMenu();
        break;
}
?>
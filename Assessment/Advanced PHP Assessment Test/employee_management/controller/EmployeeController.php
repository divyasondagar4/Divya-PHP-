<?php
require_once 'model/EmployeeModel.php';

class EmployeeController {
    private $model;

    public function __construct() {
        $this->model = new EmployeeModel();
    }

    public function showMenu() {
        include 'view/menu.php';
    }

    public function addEmployee() {
        include 'view/add_employee.php';
    }

    public function storeEmployee() {
        $data = [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'mobile' => $_POST['mobile'],
            'address' => $_POST['address'],
            'gender' => $_POST['gender'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
        $this->model->insertEmployee($data);
        header('Location: index.php?action=view');
    }

    public function viewEmployees() {
        $employees = $this->model->getAllEmployees();
        include 'view/view_employees.php';
    }

    public function editEmployee() {
        $id = $_GET['id'];
        $employee = $this->model->getEmployeeById($id);
        include 'view/edit_employee.php';
    }

    public function updateEmployee() {
        $id = $_POST['id'];
        $data = [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'mobile' => $_POST['mobile'],
            'address' => $_POST['address'],
            'gender' => $_POST['gender']
        ];
        $this->model->updateEmployee($id, $data);
        header('Location: index.php?action=view');
    }

    public function deleteEmployee() {
        $id = $_GET['id'];
        $this->model->deleteEmployee($id);
        header('Location: index.php?action=view');
    }
}
?>
<?php
include_once "Employee.php";
class Data
{
    private $path;

    public function __construct()
    {
        $this->path = "data.json";
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);//Đưa mảng về dạng chuỗi dể lưu lại
        file_put_contents($this->path, $dataJson);
    }

    public function loadData()
    {
        $dataJson = file_get_contents($this->path);
        return json_decode($dataJson);//Đưa chuỗi về mảng hoặc là kiểu Object
    }

    public function addNewEmployee($employee)
    {

        $data = [
            "ho" => $employee->getho(),
            "ten" => $employee->getten(),
            "date" => $employee->getdate(),
            "diachi" => $employee->getdiachi(),
        "vitricongviec" => $employee->getvitricongviec(),
        ];

        $employees = $this->loadData();
//        $employees [] = $data;
     array_push($employees,$data) ;
        $this->saveData($employees);
    }
}
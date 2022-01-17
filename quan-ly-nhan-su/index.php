<?php
include_once "Employee.php";
include_once "Data.php";

$data = new Data();


$employees = $data->loadData();
//$employee=new Employee("Ninh","Huynh","10-10-2000","Thai Binh","Hoc vien");
//$data->addNewEmployee($employee);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px">
    <thead>
    <tr>
        <th>STT</th>
        <th> Họ</th>
        <th> Tên</th>
        <th> Ngày sinh</th>
        <th> Địa chỉ</th>
        <th> Vị trí làm việc</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($employees as $key => $employee): ?>
        <td><?php echo $key+1 ?></td>
        <td><?php echo $employee->ho ?></td>
        <td><?php echo $employee->ten ?></td>
        <td><?php echo $employee->date ?></td>
        <td><?php echo $employee->diachi ?></td>
        <td><?php echo $employee->vitricongviec ?></td>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>

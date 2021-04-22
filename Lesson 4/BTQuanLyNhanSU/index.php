<?php include("Employee.php") ?>
<?php include("EmployeeManager.php") ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lname = $_POST["lname"];
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $adr = $_POST["adr"];
    $job = $_POST["job"];
}
$employeeManager = new EmployeeManager();
$employeeManager->add(new Employee($lname, $name, $dob, $adr, $job));
$employee = $employeeManager->getEmployee();
foreach ($employees as $employee) {
    echo $employee->getName() . "<br/>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí nhân sự</title>
    <style>
        fieldset {
            margin-bottom: 5px;
            width: 30%;
        }

        table {
            border: 1px solid black;
        }

        tr td {
            border-left: 1px solid black;
        }
    </style>
</head>

<body>
    <div>
        <fieldset>
            <legend>Quản lí nhân sự</legend>
            <table>
                <tr>
                    <td>Họ</td>
                    <td>Tên</td>
                    <td>Ngày Sinh</td>
                    <td>Địa chỉ</td>
                    <td>Vị trí công việc</td>
                </tr>
            </table>
        </fieldset>
        <form method="POST">
            <table style="width:20%">
                <tr>
                    <td>Họ:</td>
                    <td><input type="text" name="lname"></td>
                </tr>
                <tr>
                    <td>Tên:</td>
                    <td><input type="number" name="name"></td>
                </tr>
                <tr>
                    <td>Ngày Sinh:</td>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><input type="text" name="adr"></td>
                </tr>
                <tr>
                    <td>Vị trí công việc:</td>
                    <td><input type="text" name="job"></td>
                </tr>
                <tr>
                    <td><input type="submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
<?php require __DIR__.'./sidebar.php' ?>
<?php require __DIR__.'../../dbase/dbfunctions.php' ?>

<?php

    if (!isset($_SESSION['UserToken'])) {
        header('Location: ../index.php');
    }


    $employees = runSafeQuery("SELECT * FROM employees", []);

    reset($employees);

?>

<div id="main">

<h2>All employees:</h2>

    <table class="employee-table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Salary</th>
            <th>SSN</th>
            <th>Edit</th>
        </tr>
        <?php foreach($employees as $employee) { ?>
            <tr>
                <th><?php echo $employee['first_name'] ?></th>
                <th><?php echo $employee['last_name'] ?></th>
                <th><?php echo $employee['email'] ?></th>


                <?php $employee_info = runSafeQuery("SELECT * FROM employee_info WHERE employee_id = ?", ["s", $employee['employee_id']]); $employee_info = reset($employee_info); ?>
                
                <th><?php echo $employee_info['salary'] ?></th>
                <th>***-***-<?php echo substr($employee_info['ssn'], -4) ?></th>
                <th><input type="submit" name="textsss" value="Edit Employee" onClick="document.location.href='<?php echo "/jig/admin/_actuallyEditEmployee.php?id=";?><?php $postData=$employee['employee_id'];echo "$postData"?>'"></th>
            </tr>
        <?php } ?>
    </table>
</div>
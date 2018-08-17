<?php
echo "<pre>";
print_r($_POST);

if(isset($_POST['btn'])){
    $connection = mysqli_connect('localhost','root','');
    
    if($connection){
        echo "server connected";
        $select_db = mysqli_select_db($connection, 'db_student');
        
        if(isset($select_db)){
            echo "Database Selected";
        }else{
           die(" Database is not Selected". mysqli_error($select_db)) ;
        }
    }else{
        die("server not connected".mysqli_error($connection));
    }
    
    $sql="INSERT INTO tbl_student(student_name,student_email,phone_number) VALUES('$_POST[student_name]','$_POST[email_address]','$_POST[phone_number]')";
    
    if(mysqli_query($connection, $sql)){
        echo "Data saved successfully";
    }else{
        die("Data not saved".mysqli_error($connection));
    }
}

?>
<form action="" method="POST">
    <table>
        <tr>
            <td>Student Name:</td>
            <td><input type="text" name="student_name"></td>
        </tr>
        <tr>
            <td>Email Address:</td>
            <td><input type="text" name="email_address"></td>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td><input type="text" name="phone_number"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Save"></td>
        </tr>
    </table>
</form>




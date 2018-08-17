<?php
$catagory_id = $_GET['id'];

//echo $catagory_id;
function select_catagory_info($catagory_id) {
    require 'db_connect.php';
    $sql = "SELECT * FROM tbl_batch_19 WHERE catagory_id = '$catagory_id' ";
    if (mysqli_query($connection, $sql)) {
        $query_result = mysqli_query($connection, $sql);
        return $query_result;
    } else {
        die('Query problem' . mysqli_error($connection));
    }
}

$query_result = select_catagory_info($catagory_id);

$catagory_info = mysqli_fetch_assoc($query_result);

//echo "<pre>";
//print_r($catagory_info);

if(isset($_POST['btn'])){
    function update_catagory_info($data){
        require 'db_connect.php';
        $sql = "UPDATE tbl_batch_19 SET catagory_name='$data[catagory_name]', catagory_description='$data[catagory_description]', publication_status='$data[publication_status]' WHERE catagory_id='$data[catagory_id]'";
        if(mysqli_query($connection, $sql)){
            header('Location: view.php');
        }else{
            die('Query Problem'.mysqli_error($connection));
        }
        
    }
    update_catagory_info($_POST);
}
?>



<hr/>
<a href="catagory.php">Add Catagory</a>
<a href="view.php">View Catagory</a>
<hr/>

<form action="#" method="POST" >
    <table>
        <tr>
            <td>Catagory name:</td>
            <td>
                <input type="text" name="catagory_name" value="<?php echo $catagory_info['catagory_name']; ?>">
                <input type="hidden" name="catagory_id" value="<?php echo $catagory_info['catagory_id']; ?>">
            </td>
        </tr>
        <tr>
            <td>Catagory description:</td>
            <td>
                <textarea name="catagory_description" rows="5" cols="30"><?php echo $catagory_info['catagory_description']; ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td>Publication status</td>
            <td>
                <select name="publication_status">
                    <option>---select status---</option>
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>


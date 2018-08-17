<?php
//echo "<pre>";
//print_r($_POST);

if (isset($_POST['btn'])) {

    function save_catagory_info($data) {
        require_once 'db_connect.php';

        $sql = "INSERT INTO tbl_batch_19(catagory_name,catagory_description,publication_status) VALUES('$data[catagory_name]','$data[catagory_description]','$data[publication_status]')";

        if (mysqli_query($connection, $sql)) {
            $message = "Catagory saved successfully";
            return $message;
        }else{
            die('Query problem'.mysqli_error($sql));
        }
    }

    $done=save_catagory_info($_POST);
}
?>

<html>
    <head>
        <title>Home Page</title>
    </head>

    <body>
        <h2><?php if(isset($done)){echo $done;}?></h2>
        
        <hr/>
        <a href="catagory.php">Add Catagory</a>
        <a href="view.php">View Catagory</a>
        <hr/>
        
        <form action="#" method="POST" >
            <table>
                <tr>
                    <td>Catagory name:</td>
                    <td><input type="text" name="catagory_name"></td>
                </tr>
                <tr>
                    <td>Catagory description:</td>
                    <td>
                        <textarea name="catagory_description" rows="5" cols="30"></textarea>
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
                    <td><input type="submit" name="btn" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
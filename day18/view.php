<?php

function view_catagory_info() {
    require_once 'db_connect.php';

    $sql = "SELECT * FROM tbl_batch_19";
    if (mysqli_query($connection, $sql)) {
        $query_result = mysqli_query($connection, $sql);
        return $query_result;
    } else {
        die('Query problem' . mysqli_error($connection));
    }

    /* while( $row = mysqli_fetch_assoc($result)){
      echo "<pre>";
      print_r($row);
      } */
}

$result = view_catagory_info();

//require 'db_connect.php';

if (isset($_GET['status'])) {
    $catagory_id = $_GET['catagory_id'];
    $sql = "DELETE * FROM tbl_batch_19 WHERE catagory_id='$catagory_id'";
    if (mysqli_query($connection, $sql)) {
        $message = "Catagory item deleted succussfully";
    } else {
        die('Query problem' . mysqli_error($connection));
    }
}
?>



<html>
    <head>
        <title>View Page</title>
    </head>
    <body>
        <a href="catagory.php">Add Catagory</a>
        <a href="view.php">View Catagory</a>
        <hr/>

        <h3>
            <?php
            if (isset($message)) {
                echo $message;
                unset($message);
            }
            ?>
        </h3>
        <table border="1" align="center" width="80%">
            <tr>
                <th>Catagory ID</th>
                <th>Catagory Name</th>
                <th>Catagory Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
            <?php while ($catagory_info = mysqli_fetch_assoc($result)) { ?>
                <tr align="center">
                    <td><?php echo $catagory_info['catagory_id']; ?></td>
                    <td><?php echo $catagory_info['catagory_name']; ?></td>
                    <td><?php echo $catagory_info['catagory_description']; ?></td>
                    <td><?php
                        if ($catagory_info['publication_status'] == 1) {
                            echo 'published';
                        } else {
                            echo 'unpublished';
                        }
                        ?>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $catagory_info['catagory_id']; ?>">Edit</a> |
                        <a href="?status=delete&catagory_id=<?php echo $catagory_info['catagory_id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>

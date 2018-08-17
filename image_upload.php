<?php
include "./day18/db_connect.php";

echo '<pre>';
print_r($_POST);

print_r($_FILES);
echo "<hr>";

//echo $_FILES['product_image']['name'];
echo '<br>';

if (isset($_POST['btn'])) {

    $directory = "day18/image/";

    $target_file = $directory . $_FILES['product_image']['name'];

    $file_type = pathinfo($target_file, PATHINFO_EXTENSION);

    echo 'File type is:' . $file_type;

    echo '<br>';

    $file_size = $_FILES['product_image']['size'];

    echo 'File size is:' . $file_size;

    echo '<br>';

    $check = getimagesize($_FILES['product_image']['tmp_name']);

//echo '<pre>';
//print_r($check);

    if ($check) {
        if (file_exists($target_file)) {
            echo 'This image is exist. Please try another one.';
        } else {
            if ($file_type != 'jpg' && $file_type != 'png') {
                echo 'Your file type is not valid.';
            } else {
                if ($file_size > 512000) {
                    echo 'Your file size is too large.';
                } else {
                    move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file);
                    $sql = "INSERT INTO tbl_image(image_name,product_image) VALUES('$_POST[image_name]','$target_file')";
                    mysqli_query($connection, $sql);
                    echo'image upload and save successfully';
                }
            }
        }
    } else {
        echo 'Your uploaded image is not emage. Please try again.';
    }
}
?>


<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Image Name:</td>
            <td><input type="text" name="image_name"></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="product_image"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="SAVE"></td>
        </tr>
    </table>

</form>


<?php 
echo '<hr>';
$sql = 'SELECT * FROM tbl_image';
$query_result = mysqli_query($connection, $sql);
?>

<table border="1">
    <tr>
        <th>Image Name</th>
        <th>image</th>
    </tr>
    <?php while ($image_info = mysqli_fetch_assoc($query_result)) { ?>
    <tr>
        <td><?php echo $image_info['image_name']; ?></td>
        <td>
            <img src="<?php echo $image_info['product_image']; ?>" alt="">
        </td>
    </tr>
    <?php } ?>
</table>
<?php
include "../conn.php";

@session_start();

$id = @$_SESSION['id'];

if(!$id){
    header('location:'.$host.'signin.php');
}

$fullname = @$_POST['fullname'];
$phone = @$_POST['phone'];

$extensionList = array("jpeg", "jpg", "gif", "png");
 
// identitas
$fileName = $_FILES['userfile']['name'];

$ekstensi = end(explode(".", $fileName));

 // nama direktori upload
$namaDir = '../identitas/';

// membuat path nama direktori + nama file.
$pathFile = $namaDir . $fileName;

if ($fileName && in_array($ekstensi, $extensionList)) {

    // memindahkan file ke temporary
    $tmpName  = $_FILES['userfile']['tmp_name'];

    // proses upload file dari temporary ke path file
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $pathFile))
    {       
	    	// get data user
			$user = "UPDATE user_profile SET fullname = '$fullname', phone = '$phone', identity_card = '$fileName' WHERE id_user = $id";

            $conn->query($user);
            if($conn->query($sql_profile) === FALSE){
                echo("Error description: " . mysqli_error($conn));
                // exit;
            }
        	header('Location: '.$host.'profile.php?status=success');

    } 
    else
    {
        var_dump($_FILES['userfile']['error']);
         echo "File gagal diupload.";
    }
}


$user = "UPDATE user_profile SET fullname = '$fullname', phone = '$phone' WHERE id_user = $id";

$conn->query($user);

if($conn->query($sql_profile) === FALSE){
    echo("Error description: " . mysqli_error($conn));
}


header('Location: '.$host.'profile.php?status=success');
<?php

include("../includes/db.php");
session_start();

if (isset($_POST['logout'])) {

  unset($_SESSION['loggedin']);
  header("Location:../login.php");
}



if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $passhash = hash("sha256", $password);

  $sql = "select * from tbl_users where username='$username' and password='$passhash'";
  $run = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run);
  if ($count == 0) {
    header("Location: ../login.php?error=Invalid credential");
  } else {
    $_SESSION["loggedin"] = true; 
    header("Location: ../index.php");
  }
}



if (isset($_POST["add_services"])) {

  $title = $_POST["title"];
  $description = $_POST["description"];
  $img = $_FILES["image"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];

  $to = "../assets/images/services/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_services(title, img, description) values('$title', '$img' , '$description')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../services.php?success=services added successfully");
  } else {
    header("Location: ../add_services.php?error=failed to add services!");
  }
}
if (isset($_POST["delete_services"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_services where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../services.php?success=services deleted successfully");
  } else {
    header("Location: ../services.php?error=Failed to delete services!");
  }
}



if (isset($_POST["update_services"])) {
  $id = $_POST["id"];
  $title = $_POST["title"];
  $description = $_POST["description"];

  $img = "";
  if ($_FILES['image']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];

    $to = "../assets/images/services/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_services set title='$title', img='$img' , description='$description' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../services.php?success=services edited successfully");
  } else {
    header("Location: ../services.php?error=failes to edit services!");
  }
}



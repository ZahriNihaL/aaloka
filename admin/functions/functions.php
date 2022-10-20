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

if (isset($_POST["add_category"])) {

  $category_name = $_POST["category_name"];
  

  $sql = "insert into tbl_category(category_name) values('$category_name')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../category.php?success=category added successfully");
  } else {
    header("Location: ../category.php?error=Failed to add category!");
  }
}
if (isset($_POST["delete_category"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_category where id='$id'";
  $run = mysqli_query($con, $sql);

  if ($run == TRUE) {
    header("Location: ../category.php?success=category deleted successfully");
  } else {
    header("Location: ../category.php?error=failes to delete category!");
  }
}


if (isset($_POST["update_category"])) {
  $id = $_POST["id"];
  $category_name = $_POST["category_name"];

  $sql = "update tbl_category set category_name='$category_name' where id='$id'";
  $run = mysqli_query($con, $sql);

  if ($run == TRUE) {
    header("Location: ../category.php?success=category updated successfully");
  } else {
    header("Location: ../category.php?error=failes to update category!");
  }
}



if (isset($_POST["add_portfolio"])) {
  $name = $_POST["name"];
  $category_name = $_POST["category_name"];
  $img = $_FILES["img"]["name"];
  $description = $_POST["description"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../admin/assets/images/portfolio/" .$img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_portfolio(name,img,description,category_name) values('$name','$img','$description','$category_name')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../portfolio.php?success=portfolio added successfully");
  } else {
    header("Location: ../portfolio.php?error=failed to add portfolio!"); 

  }
}

if (isset($_POST["delete_portfolio"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_portfolio where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../portfolio.php?success=portfolio deleted successfully");
  } else {
    header("Location: ../portfolio.php?error=failed to delete portfolio!");
  }
}



if (isset($_POST["update_portfolio"])) {
  $id = $_POST["id"];
  $name = $_POST["name"];
  $category_name = $_POST["category_name"];
  $description = $_POST["description"];

  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $to = "../assets/images/portfolio/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_portfolio set name='$name', img='$img', category_name='$category_name', description='$description' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../portfolio.php?success=portfolio updated successfully");
  } else {
    header("Location: ../portfolio.php?error=failes to update portfolio!");
  }
}




if (isset($_POST["add_customers"])) {

  $brand_name = $_POST["brand_name"];
  $image = $_FILES["image"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];
  $to = "../assets/images/customers/" . $image;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_customers(brand_name,image) values('$brand_name','$image')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../customers.php?success=customers added successfully");
  } else {
    header("Location: ../customers.php?error=Failed to add customers!");
  }
}

if (isset($_POST["delete_customers"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_customers where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../customers.php?success=customer deleted successfully");
  } else {
    header("Location: ../customers.php?error=failed to delete customer!");
  }
}

if (isset($_POST["update_customers"])) {
  $id = $_POST["id"];
  $brand_name = $_POST["brand_name"];
  $image = "";
  if ($_FILES['image']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];

    $to = "../assets/images/customers/" . $image;

    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_customers set brand_name='$brand_name', image='$image' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../customers.php?success=customers edited successfully");
  } else {
    header("Location: ../customers.php?error=failes to edit customers!");
  }
}



if (isset($_POST["add_blog"])) {

  $title = $_POST["title"];
  $description = $_POST["description"];
  $img = $_FILES["image"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];

  $to = "../assets/images/services/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_blog(title, img, description) values('$title', '$img' , '$description')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../blog.php?success=blog added successfully");
  } else {
    header("Location: ../add_blog.php?error=failed to add blog!");
  }

}

if (isset($_POST["delete_blog"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_blog where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../blog.php?success=blog deleted successfully");
  } else {
    header("Location: ../blog.php?error=Failed to delete blog!");
  }
}



if (isset($_POST["update_blog"])) {
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

  $sql = "update tbl_blog set title='$title', img='$img' , description='$description' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../blog.php?success=blog edited successfully");
  } else {
    header("Location: ../blog.php?error=failes to edit blog!");
  }
}




if (isset($_POST["add_testimonial"])) {
  $name = $_POST["name"];
  $designation = $_POST["designation"];
  $img = $_FILES["img"]["name"];
  $description = $_POST["description"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../assets/images/testimonial/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_testimonial(name,designation,img,description) values('$name','$designation','$img','$description')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../testimonial.php?success=testimonial added successfully");
  } else {
    header("Location: ../testimonial.php?error=failed to add testimonial!");
  }
}

if (isset($_POST["delete_testimonial"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_testimonial where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../testimonial.php?success=testimonial deleted successfully");
  } else {
    header("Location: ../testimonial.php?error=failed to delete testimonial!");
  }
}
 
if (isset($_POST["update_testimonial"])) {
  $id = $_POST["id"];
  $name = $_POST["name"];

  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $to = "../assets/images/testimonial/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_testimonial set name='$name', img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../testimonial.php?success=testimonial updated successfully");
  } else {
    header("Location: ../testimonial.php?error=failes to update testimonial!");
  }
}




if (isset($_POST["add_team"])) {
  $name = $_POST["name"];
  $designation = $_POST["designation"];
  $img = $_FILES["image"]["name"];
  $explanation = $_POST["explanation"];
  $tmp_name = $_FILES["image"]["tmp_name"];

  $to = "../assets/images/team/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_team(name,designation,img,explanation) values('$name','$designation','$img','$explanation')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../team.php?success=Team added successfully");
  } else {
    header("Location: ../team.php?error=Failed to add team!");
  }
}
if (isset($_POST["delete_team"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_team where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../team.php?success=team deleted successfully");
  } else {
    header("Location: ../team.php?error=failed to delete team!");
  }
}

if (isset($_POST["update_team"])) {
  $id = $_POST["id"];
  $name = $_POST["name"];

  $img = "";
  if ($_FILES['img']['size'] == 0) {
      $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
  }

  $to = "../assets/images/team/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "update tbl_team set name='$name', img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../team.php?success=team updated successfully");
  } else {
    header("Location: ../team.php?error=failes to update team!");
  }
}


if (isset($_POST["update_settings"])) {

  $company_name = $_POST["company_name"];
  $place = $_POST["place"];
  $email1 = $_POST["email1"];
  $phone_number1 = $_POST["phone_number1"];
  $phone_number2 = $_POST["phone_number2"];
  $link = $_POST["link"];
  $facebook = $_POST["facebook"];
  $instagram = $_POST["instagram"];
  $watsapp = $_POST["watsapp"];


  $sql = "update tbl_company set company_name='$company_name' , place='$place' , email1='$email1' , phone_number1='$phone_number1' , phone_number2='$phone_number2' , link='$link' , facebook='$facebook' , instagram='$instagram' , watsapp='$watsapp' where id='1'";
  $run = mysqli_query($con, $sql);

  if ($run == TRUE) {
    header("Location: ../settings.php?success=settings updated successfully");
  } else {
    header("Location: ../settings.php?error=failes to update settings!");
  }

  }









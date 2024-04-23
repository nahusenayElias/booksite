<?php 
include 'db.php'; 
include 'index.php';
include 'create.php';

//Update when clicked!

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $publishing_year = $_POST['publishing_year'];
    $genre = $_POST['genre'];
    
    // $query = mysqli_query($conn, "UPDATE books set title = '$title', author= '$author',description = '$description', publishing_year = '$publishing_year', genre = '$genre' WHERE id= $id");
    $query = "UPDATE `books` SET `title`='$title',`author`='$author',`description`='$description',`publishing_year`='$publishing_year',`genre`='$genre' WHERE `id`='$id'"; 


     $result = $conn->query($query); 
        if ($result == TRUE) {
          
          echo '<script>alert(" Record updated successfully.")</script>'; 
          // echo "Record updated successfully.";
        }else{
          echo "<script>Error:" . $query . "<br></script>" . $conn->error;
         }
    
    //  if($query) {
    //      echo "<script>alert('record updated successfully')</script>";
    //     echo "<script type='text/javascript'>Document.location = 'read.php';</script>";
    //  } else {
    //      echo "<script>alert('Error encountered, please try again!')</script>";

    //  }
}
?> 
 
 <h2 style="color:red;">CRUD App: UPDATE</h2>
 <link rel="stylesheet" href="style.css">
    <form method="post">
        <?php
        include('db.php');
        $id= $_GET['id'];
        $query = mysqli_query($conn, "select * from books where id=$id");
       while($row = mysqli_fetch_array($query)) {

        ?>
    
    
    <div class="form-group">
      <label for="number">Id</label><br>
      <input type="number" name="id" value="<?php echo $row['id']?>">
    </div>
    <div class="form-group">
      <label for="title">Title</label><br>
      <input type="text" name="title" value="<?php echo $row['title']?>">
    </div>
    <div class="form-group">
      <label for="author">Author</label><br>
      <input type="text" name="author" value="<?php echo $row['author']?>">
    </div>
    <div class="form-group">
      <label for="description">Description</label><br>
      <input type="text" name="description" value="<?php echo $row['description']?>">
    </div>
    <div class="form-group">
      <label for="publishing_year">Publishing_year</label><br>
      <input type="text" name="publishing_year" value="<?php echo $row['publishing_year']?>">
    </div>
    <div class="form-group">
      <label for="genre">Genre</label><br>
      <input type="text" name="genre" value="<?php echo $row['genre']?>">
    </div><br><br>
     
    
       <?php } ?>
    <input type="submit" class="btn btn-success" name="updId"  value="UPDATE"> 
    </form>
    
    
     
     
<footer>Elias Hagos | 2024 React24K ©</footer>
    
    




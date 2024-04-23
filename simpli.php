<?php include 'db.php';
    
    // $query = "SELECT * FROM books";
    // $result = mysqli_query($conn, $query);

    if (isset($_GET['deleteId'])) {
        $id = $_GET['deleteId'];
        
        //Delete
        $query = "DELETE FROM `books` WHERE id=$id";
        $result = mysqli_query($conn,$query);

        $result = $conn->query($query); 
        if ($result == TRUE) {
          echo "<script>alert('Record deleted successfully.')</script>";
        }else{
          echo "<script>alert(Error:)</script>" . $query . "<br>" . $conn->error;
         }

}
?>
 
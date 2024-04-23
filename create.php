<?php include 'db.php';

    if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $descr = $_POST['description'];
    $author = $_POST['author'];
    $pub_year = $_POST['publishing_year'];
    $genre = $_POST['genre'];
    

    
   $query = "INSERT INTO `books` (title,description,author,publishing_year, genre) VALUES('$title', '$descr','$author', $pub_year, '$genre')";


    $sql = "INSERT INTO books (title,description,author,publishing_year, genre) VALUES( ?, ?, ?, ?, ?)";  
    // Prepare an INSERT statement to add a new user to the 'users' table
    $stmt = $conn->prepare($sql);
    // Bind the username and password parameters to the prepared statement
    $stmt->bind_param ("sssis", $_POST["title"],$_POST["description"],$_POST["author"],$_POST["publishing_year"], $_POST["genre"]);
    // Execute the prepared statement
    $stmt->execute();

    $result = $conn->query($query); 

        if ($result == TRUE) {

           echo '<script>alert("Record updated successfully.")</script>';
        // echo "Record updated successfully.";

        }else{

           echo "<script>alert(Error:)</script>" . $query . "<br>" . $conn->error;

         }


    // Close the statement
    $stmt->close();
    }


    ?>
  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create Book</title>
</head>
<body>
    <div>
        <h2 style="color:red;">CRUD App: Create books into DB</h2>
        <form action="create.php" method="post">
            <label>
                
                    Title:<input type="text" name="title"><br><br>
            
                    Author:<input type="text" name="author"><br><br>
                
                    Year:<input type="number" name="publishing_year"><br><br>
                
                    Genre:<input type="text" name="genre"><br><br>
                
                
                Description:<textarea name="description" id="" cols="30" rows="5"></textarea><br><br>
            </label>
            
            <input type="submit" name="submit" value="CREATE">
        </form>
    </div>
</body>
</html>
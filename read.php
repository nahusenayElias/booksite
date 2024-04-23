<?php
include 'db.php'
?>
<h3>CRUD App: Read | Update & Delete!</h3>
  <?php

  // $sql = "s";
  $result = mysqli_query($conn,"SELECT * from books");
  

echo "<table border='1'>
  
    <tr>
      <th>id</th>
      <th>Title</th>
      <th>Author</th>
      <th>Description</th>
      <th>publishing_year</th>
      <th>Genre</th>
    </tr>";

  
  // if($result) {
  while ($row=mysqli_fetch_assoc($result)){
    echo"<tr>";
    echo "<td>" .$id=$row['id'];
    echo "<td>" .$title=$row['title'];
    echo "<td>" .$descr=$row['description'];
    echo "<td>" .$author=$row['author'];
    echo "<td>" .$pub_year=$row['publishing_year'];
    echo "<td>" . $genre=$row['genre'];
    
    

  
  
    

  
   }
  

     
     echo '<tr>
      <th scope="row">' .$id. '</th>
      <td>' .$title. '</td>
      <td>' .$author. '</td>
       <td>' .$descr. '</td>
         <td>' .$pub_year. '</td>
      <td>' .$genre. '</td>
        </tr>';
  
  
?>


 
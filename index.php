<?php include 'db.php';
?>

<div class="box1">
<h1 style="color:red;">Booksite App</h1>
<h2 style="color:red;">CRUD App: Read | Update & Delete!</h2>

<style>
  body {
  background-color: powderblue;
}
</style>

</div>

<table class="table" border="1.5">
  <thead>
    <tr>
      <th>Id</th>
      <th>title</th>
      <th>Author</th>
      <th>description</th>
      <th>Publishing Year</th>
      <th>Genre</th>
      <th>Update Op</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * from books";
    
    $result = mysqli_query($conn, $query);
  if (!$result) {
    die("query failed". mysqli_error($conn));
  }  else {
    while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
         <td><?php echo $row['id']; ?> </td> 
        <td><?php echo $row['title']; ?> </td>
        <td><?php echo $row['author']; ?> </td>
        <td><?php echo $row['description']; ?> </td>
        <td><?php echo $row['publishing_year']; ?> </td>
        <td><?php echo $row['genre']; ?> </td>
        <td><button class="text-light" ><a href="update_page.php?id=<?php echo $row['id'];?>" class="btn btn-success" >update</a></button></td>
     <td><button class="text-light"><a href="simpli.php?deleteId=''"class="text-light">Delete</a> </button></td>

       
      </tr>
      <?php
    }
  }

?>

  </tbody>
</table>





 


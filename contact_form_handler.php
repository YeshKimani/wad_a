<body class="Homebody">
    <header class="Homeheader">
        <?php 
        include_once("template/nav.php");
         require_once("includes/header.php");
         
         if(isset($_GET["Delid"])){
          $Delid = $_GET["Delid"];
         // sql to delete a record
         
   $delete_data = "DELETE FROM data WHERE peopleId='$Delid' LIMIT 1";

if ($conn->query($delete_data) === TRUE) {
  header("Location: viewdata.php");
  exit();
         echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
}
        ?>
        
    </header>

   


        <div class="banner">
            <h1>Data</h1> 
        </div>
        <div class="row">
            <div class="content">
                <h1>Our Products</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <table>
                        <tr>
                            <th colspan="2">Tag</th>
                            <th>Name</td>
                            <th>Email</th>
                            <th>Number</th>
                            <th>peopleId</th>
                            <th>Action</th>
                        </tr>

                <?php

$select_data= "SELECT * FROM data";
$select_data_result = $conn->query($select_data);
$num = 0;

if ($select_data_result->num_rows > 0) {
  // output data of each row
  while($select_data_row = $select_data_result->fetch_assoc()) {
    $num++
?>

<tr>
  <td><?php print $num;?></td>
  <td> <?php print $select_data_row["name"] ?></td>
  <td> <?php print $select_data_row["email"] ?></td>
  <td> <?php print $select_data_row["number"] ?></td>
  <td> <?php print $select_data_row["peopleId"] ?></td>
  <td> [ <a href="editdata.php?UpdateId=<?php print $select_data_row ["peopleId"] ?>" >Edit</a>]
   [<a href="?Delid=<?php print $select_data_row["peopleId"];?>"onclick = "return confirm('This data will be deleted permanently. Are you sure?');">Del</a>]</td>
 </tr>
 </tr>



<?php
  }
} else {
  echo "0 results";
}
?>

                      
                        
</body>
</html>
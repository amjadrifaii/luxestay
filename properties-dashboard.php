<?php

    include 'db_connect.php';
    session_start();
    if($_SESSION['urole']!="admin")
    header("Location:index.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      background:#2eca6a !important;
      color: #fff;
      padding: 20px;
    }
    .sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 10px 0;
    }

    input, select{
      text-align:center;  
      border-color:#2eca6a;
      border-radius:15px;
      background-color:#e0e0e0;
    }
    textarea{
      border-color:#2eca6a;
      border-radius:10px;
      background-color:#e0e0e0;



    }
    .sidebar a:hover {
      background-color: white;
      color: #2eca6a;
    }
    .main-content {
      padding: 20px;
    }
    .stats-card {
      transition: transform 0.3s;
      border: none;
      border-radius: 10px;
    }
    .stats-card:hover {
      transform: translateY(-5px);
      opacity:0.4;
    }

    label:hover {
            transform: scale(1.2);
                }
    .insert{
      color:#ffffff;
      padding:10px;
      border-radius: 5px;
      transition: transform 0.2s ease-in;

    }
    .insert:hover{
      transform: translateY(-3px);
      opacity:0.4;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <?php
      include("dashboard-header.php");
      ?>

      <!-- Main Content -->
      <div class="col-md-10" style="margin-left:300px">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <h1 style="color: #2eca6a;">Admin Panel</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              
            </div>
          </div>
        </nav>

        <!-- Main Content Area -->
        <div class="main-content">
         <?php
        
         $property_query = "SELECT COUNT(*)  FROM guest_houses";   
         $property_result = mysqli_query($conn, $property_query);
         $total_properties = ($property_result && mysqli_num_rows($property_result) > 0) ? mysqli_fetch_assoc($property_result)["COUNT(*)"] : 0;
         ?>

<div class="container-fluid">
  <div class="row g-4 mb-4">
    <div class="col-12 col-sm-6 col-xl-3">
      <div style="background:#2eca6a !important;" class="card stats-card bg-dark text-white">
        <div class="card-body">
          <h5><i class="fas fa-users"></i> Total Properties</h5>
          <h2><?php echo $total_properties; ?></h2>
          <span class="small">Total registered properties</span>
        </div>
      </div>
    </div>
    


           <!-- Recent Users Table -->
           <div class="row mt-4">
             <div class="col-12">
               <div class="card shadow-sm" style="width:1550px">
                 <div class="card-header">
                        <h5 class="mb-0 d-inline">Registered Properties</h5>
                 </div>
                 
                 <div class="card-body">
                   <table class="table table-hover" id="properties-table">
                    <div class=" d-flex justify-content-between">
                   <button class="insert btn-success btn-sm" style=" background:#2eca6a !important; border:none; margin-bottom:10px;" onclick="toggleForm();"> 
                        <h5 class="mb-0 d-inline">Insert Properties</h5> 
                    </button>
                    <a href="delete-properties.php" class="btn btn-danger btn-sm" style=" border:none; margin-bottom:10px; "onclick="return confirm('Are you sure?')"><h5 class="mb-0 d-inline">DELETE ALL</h5>  </a>
                    </div>
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Area</th>
                         <th>Beds</th>
                         <th>Baths</th>
                         <th>Garages</th>
                         <th>C  ost</th>
                        <th>House About</th>
                        <th>House Desc</th>
                        <th>Location ID</th>
                        <th>House Type</th>
                        <tr id="new-property-row" style="vertical-align: middle; display: none;" id="new-property-form">
                            <form action="image_api.php" method="POST" enctype="multipart/form-data">
                              <td style="vertical-align: middle;">
                                <input style="width:50px;text-align:center" name="new_guest_house_id" value="Auto" readonly>
                              </td>
                              <td style="vertical-align: middle;">
                                <input style="width:150px; text-align:center; vertical-align:middle" name="new_guest_house_name" value="" required>
                              </td> 
                              <td style="vertical-align: middle;">
                                <input style="width:50px; text-align:center" name="new_area" value="" required>
                              </td>
                              <td style="vertical-align: middle;">
                                <input style="width:50px;text-align:center" name="new_beds" value="" required>
                              </td>
                              <td style="vertical-align: middle;">
                                <input style="width:50px;text-align:center" name="new_baths" value="" required>
                              </td>
                              <td style="vertical-align: middle;">
                                <input style="width:50px;text-align:center" name="new_garages" value="" required>
                              </td>
                              <td style="vertical-align: middle;">
                                <input style="width:50px;text-align:center" name="new_cost" value="" required>
                              </td>
                              <td style="vertical-align: middle;">
                                <textarea style="width:300px; height:150px;text-align:center" name="new_guest_house_des" required></textarea>
                              </td>
                              <td style="vertical-align: middle;">
                                <textarea style="width:300px; height:150px;text-align:center" name="new_guest_house_about" required></textarea>
                              </td>
                              
                              <!-- Insert Location Select Dropdown -->
                              <td style="vertical-align: middle;">
                                <select name="new_location_id" id="new_location_id" required>
                                  <?php
                                    // Fetch locations
                                    $loc_res = mysqli_query($conn, "SELECT location_id, location_desc FROM locations ORDER BY location_desc ASC");
                                    while ($row2 = mysqli_fetch_assoc($loc_res)) {
                                      echo '<option value="' . htmlspecialchars($row2['location_id']) . '">';
                                      echo htmlspecialchars($row2['location_desc']);
                                      echo '</option>';
                                    }
                                  ?>
                                </select>
                              </td>
    
                                                            <td style="vertical-align: middle;">
                                    <select name="new_house_type" id="new_house_type" required>
                                      <?php
                                        // Fetch house types from the database
                                        $types_res = mysqli_query($conn, "SELECT type_id, type_desc FROM house_types");
                                        while ($row2 = mysqli_fetch_assoc($types_res)) {
                                          echo '<option value="' . htmlspecialchars($row2['type_id']) . '">';
                                          echo htmlspecialchars($row2['type_desc']);
                                          echo '</option>';
                                        }
                                      ?>
                                    </select>
                                  </td>
                              <td style="vertical-align: middle;">
                              <input type="file" name="image_path1" id="media" accept="image/*" hidden>
                              <label for="media" class="upload-label1 btn-success btn-sm d-block mb-2" style="width:33px;height:33px;border-radius:100%;background-color:#000000;opacity:0.4;">
                              <i class="bi bi-camera" style="display: inline-block;position:relative;z-index:1;color:white; transform: translate(8px,4px);"></i>
                              </label>

                              <input type="file" name="image_path2" id="media2" accept="image/*" hidden>
                              <label for="media2" class="upload-label2 btn-success btn-sm d-block mb-2" style="width:33px;height:33px;border-radius:100%;background-color:#000000;opacity:0.4;">
                              <i class="bi bi-camera" style="display: inline-block;position:relative;z-index:1;color:white; transform: translate(8px,4px);"></i>
                              </label>

                              <input type="file" name="image_path3" id="media3" accept="image/*" hidden>
                              <label for="media3" class="upload-label3 btn-success btn-sm d-block mb-2" style="width:33px;height:33px;border-radius:100%;background-color:#000000;opacity:0.4;">
                              <i class="bi bi-camera" style="display: inline-block;position:relative;z-index:1;color:white; transform: translate(8px,4px);"></i>
                              </label>

                                  <button type="submit" class="btn btn-success btn-sm d-block mb-2" style=" background:#2eca6a !important;">Add</button>
                              </td>
                          </form>
                      </tr>

                       </tr>
                     </thead>
                     <tbody>
                       <?php    
                              $query = "SELECT gh.guest_house_id, gh.guest_house_name, gh.area, gh.beds, gh.baths, gh.garages, gh.cost, 
                              gh.guest_house_des, gh.guest_house_about, gh.location_id, gh.house_type, loc.location_desc, 
                              ht.type_desc, ht.type_id 
                                    FROM guest_houses gh 
                                    JOIN locations loc ON gh.location_id = loc.location_id 
                                    JOIN house_types ht ON gh.house_type = ht.type_id 
                                    ORDER BY gh.guest_house_id DESC";
                          
                          $result = mysqli_query($conn, $query);
                          
                          echo "<tr>";
                          while ($row = mysqli_fetch_assoc($result)) {
                              $loc_res = mysqli_query($conn, "SELECT location_id, location_desc FROM locations ORDER BY location_desc ASC");
                              $types = mysqli_query($conn, "SELECT type_id, type_desc FROM house_types");
                          
                              echo "<tr style='vertical-align: middle;'>";
                          
                              echo '<form action="modify-property.php" method="POST">';
                          
                              echo '<td style="vertical-align: middle;"> 
                                      <input style="width:50px;text-align:center" name="guest_house_id" value="' . htmlspecialchars($row['guest_house_id']) . '" readonly>
                                    </td>';
                          
                              echo '<td style="vertical-align: middle;"> 
                                      <input style="width:150px; text-align:center;" name="guest_house_name" value="' . htmlspecialchars($row['guest_house_name']) . '"> 
                                    </td>';
                          
                              echo '<td style="vertical-align: middle;"> 
                                      <input style="width:50px;text-align:center" name="area" value="' . htmlspecialchars($row['area']) . '"> 
                                    </td>';
                          
                              echo '<td style="vertical-align: middle;"> 
                                      <input style="width:50px;text-align:center" name="beds" value="' . htmlspecialchars($row['beds']) . '"> 
                                    </td>';
                          
                              echo '<td style="vertical-align: middle;"> 
                                      <input style="width:50px;text-align:center" name="baths" value="' . htmlspecialchars($row['baths']) . '"> 
                                    </td>';
                          
                              echo '<td style="vertical-align: middle;"> 
                                      <input style="width:50px;text-align:center" name="garages" value="' . htmlspecialchars($row['garages']) . '"> 
                                    </td>';
                          
                              echo '<td style="vertical-align: middle;"> 
                                      <input style="width:50px;text-align:center" name="cost" value="' . htmlspecialchars($row['cost']) . '"> 
                                    </td>';
                          
                              echo '<td style="vertical-align: middle;"> 
                                      <textarea style="width:300px; height:150px;" name="guest_house_des">' . htmlspecialchars($row['guest_house_des']) . '</textarea> 
                                    </td>';
                          
                              echo '<td style="vertical-align: middle;"> 
                                      <textarea style="width:300px; height:150px;" name="guest_house_about">' . htmlspecialchars($row['guest_house_about']) . '</textarea> 
                                    </td>';
                          
                              echo '<td style="vertical-align: middle;"> 
                                      <select name="location" id="location">';
                              while ($row2 = mysqli_fetch_assoc($loc_res)) {
                                  $selected = ($row['location_id'] == $row2['location_id']) ? 'selected' : '';
                                  echo '<option value="' . htmlspecialchars($row2['location_id']) . '" ' . $selected . '>';
                                  echo htmlspecialchars($row2['location_desc']);
                                  echo '</option>';
                              }
                              echo '</select>
                                    </td>';
                          
                              echo '<td style="vertical-align: middle;"> 
                                      <select name="house_type" id="house_type">';
                              while ($row2 = mysqli_fetch_assoc($types)) {
                                  // Compare the house_type from guest_houses with type_id from house_types
                                  $selected = ($row['house_type'] == $row2['type_id']) ? 'selected' : '';
                                  echo '<option value="' . htmlspecialchars($row2['type_id']) . '" ' . $selected . '>';
                                  echo htmlspecialchars($row2['type_desc']);
                                  echo '</option>';
                              }
                              echo '</select>
                                    </td>';
                          
                              echo "<td style='vertical-align: middle;'>
                                      <button type='submit' class='btn btn-success btn-sm d-block mb-2' style='background:rgb(41, 4, 251)';>Modify</button>
                                      <a href='delete-property.php?guest_house_id=" . $row["guest_house_id"] . "' class='btn btn-danger btn-sm d-block' 
                                          style='background:rgb(255, 0, 0)' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                                    </td>";
                          
                              echo '</form>';
                              echo '</tr>';
                          }
                ?>
   
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<script>
    // Track whether the row is currently visible
    let isRowVisible = false;

    // Function to remove a row
function toggleForm() {
    const formRow = document.getElementById("new-property-row");

    if (!isRowVisible) {
        // Show the form row
        formRow.style.display = "table-row"; // Make it visible as a table row
        isRowVisible = true;
    } else {
        // Hide the form row
        formRow.style.display = "none";
        isRowVisible = false;
    }
}

document.getElementById("media").addEventListener("change", function() {
    let label = document.querySelector(".upload-label1");

    if (this.files.length > 0) {
        label.style.backgroundColor = "#2eca6a"; // Change to green when a file is uploaded
        label.style.opacity=1;
    } else {
        label.style.backgroundColor = "#000000"; // Revert to original if no file is uploaded
    }
});


document.getElementById("media2").addEventListener("change", function() {
    let label = document.querySelector(".upload-label2");

    if (this.files.length > 0) {
        label.style.backgroundColor = "#2eca6a"; // Change to green when a file is uploaded
        label.style.opacity=1;
    } else {
        label.style.backgroundColor = "#000000"; // Revert to original if no file is uploaded
    }
});


document.getElementById("media3").addEventListener("change", function() {
    let label = document.querySelector(".upload-label3");

    if (this.files.length > 0) {
        label.style.backgroundColor = "#2eca6a"; // Change to green when a file is uploaded
        label.style.opacity=1;
    } else {
        label.style.backgroundColor = "#000000"; // Revert to original if no file is uploaded
    }
});


</script>

    
</script>
?>
<?php
include('config.php');
if(isset($_POST['submit'])){
$location = $_POST['name'];
$select = "SELECT * FROM `lawyers` WHERE `address` = '$location' ";
$result = $conn->query($select);

if($result == true){
    ?>
    <div class="container">
        <div>
        <a href="index.php" class="btn btn-success">
                    Back To Home Page
                  </a>
        </div>
      <table class="table">
    <thead>
    <tr>
                <th style="width: 250px;">S.No</th>
                <th style="width: 250px;">Image</th>
                <th style="width: 250px;">Name</th>
                <th style="width: 250px;">Service</th>
                <th style="width: 250px;">location</th>
                <th style="width: 250px;">Appoinment</th>
                

              </tr>
    </thead>
    <tbody>
        <?php
        if($result->num_rows > 0){
            while($row =$result->Fetch_assoc()){
                ?>
                <tr>
                <td style="text-align: center;">
                  <?php echo($row['id']);?>
                </td>
                <td style="text-align: center;">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo($row['img']); ?>" alt="user-image" style="width: 45px; height: 45px"
                      class="rounded-circle" />
                  </div>
                </td>
                <td style="text-align: center;">
                  <p class="fw-normal mb-1">
                    <?php echo($row['name']);?>
                  </p>
                </td>
                <td style="text-align: center;">
                  <p class="fw-normal mb-1">
                    <?php echo($row['services']);?>
                  </p>
                </td>
                <td style="text-align: center;">
                  <p class="fw-normal mb-1">
                    <?php echo($row['address']);?>
                  </p>
                </td>
                <td style="text-align: center;">
                  <a href="appointment.php" class="btn btn-primary px-5 py-3">
                    Book Now
                  </a>
                </td>
              </tr>

             <?php
            }
        }    
        ?>
        
    </tbody>
  </table>
      </div>
    <?php
}else{
    ?>
    <script>
        window.alert("Failed to find the Record");
       
    </script>
    <?php
}

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Find</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" /> 

  </head>
  <body class="raza">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
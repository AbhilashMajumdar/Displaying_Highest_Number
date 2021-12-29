<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .des_class{
        display: flex;
        height: 50vh;
        justify-content: space-evenly;
        margin-top: 200px;
      }
    </style>

    <title>Displaying Highest Marks</title>
  </head>
  <body>
    
    <div class="container-fluid">
        <div class="row justify-content-evenly">
            <!-- Numbers are taken as input  -->
            <div class="col-md-4 justify-content-center des_class">
                <form action="input.php" method="POST">
                    <div class="mb-3">
                      <h1>
                        <label for="marks" class="form-label">Please enter Marks one by one :- </label>
                        <input type="text" class="form-control" id="marks" name="marks"></input>
                      </h1>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary mx-4" name="submit">Submit Number</button>
                    </div>
                </form>
            </div>

            <!-- Outputs are shown in tabular format -->
            <div class="col-md-4 justify-content-center mt-4">
              <div class="row">
                <div class="col-12">
                  <h1 class="text-dark text-center"> Marks are :- </h1>
                <br>
                <table id="myTable" class="table table-striped table-hover table-bordered">
                
                <tr class="bg-dark text-white text-center">
                
                    <th>Marks</th>
                
                </tr>
                
                <?php
                
                 include 'dbconnect.php'; 
                 $q = "SELECT * FROM `highest_marks`";
                
                 $query = mysqli_query($conn, $q);
                
                 while($res = mysqli_fetch_array($query)){
                 ?>
                        <tr class="text-center">
                          <td>
                            <?php echo $res['marks'];  ?>
                          </td>
                        </tr>
                
                        <?php 
                  }
                  ?>
                
                  </table>
                
                  </div>

                  <div class="col-12">
                    <h1 class="text-dark text-center"> Marks are in Descending order :- </h1>
                  <br>
                  <table id="myTable" class="table table-striped table-hover table-bordered">
                  
                  <tr class="bg-dark text-white text-center">
                  
                      <th>Marks</th>
                  
                  </tr>
                  
                  <?php
                  
                   include 'dbconnect.php'; 
                   $q = "SELECT * FROM `highest_marks` ORDER BY marks DESC";
                  
                   $query = mysqli_query($conn, $q);
                  
                   while($res = mysqli_fetch_array($query)){
                   ?>
                          <tr class="text-center">
                            <td>
                              <?php echo $res['marks'];  ?>
                            </td>
                          </tr>
                  
                          <?php 
                    }
                    ?>
                  
                    </table>
                  
                    </div>

                
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
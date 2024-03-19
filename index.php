
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
  </head>
  <body>
    <div class="container">
    <div class="row mt-3">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
            <div class="card-body">
         
                <h5 class="card-title">Input Data</h5>
                <p class="card-text">input data klasemen</p>
                <a href="input.php" class="btn btn-primary">Click here</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Input Skor</h5>
                <p class="card-text">Input skor pertandingan</p>
                <a href="skor.php" class="btn btn-primary">Click here</a>
            </div>
            </div>
        </div>
        </div>

        
    </div>

    <div row="mt-3 ">
    <table class="table ">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Klub</th>
            <th scope="col">Kota Klub</th>
            <th scope="col">Main</th>
            <th scope="col">Menang</th>
            <th scope="col">Seri</th>
            <th scope="col">Kalah</th>
            <th scope="col">Goal Menang</th>
            <th scope="col">Goal Kalah</th>
            <th scope="col">Point</th>
            </tr>
        </thead>
        <tbody>
          <?php
            try {
                $conn = new PDO("mysql:host=localhost;dbname=tescoding", "root", "");
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }

            $stmt = $conn->prepare("SELECT * FROM data_klub ORDER BY point DESC, goal_menang DESC");
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($results as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }


          ?>
        </tbody>
        </table>
    </div>

  </body>
</html>

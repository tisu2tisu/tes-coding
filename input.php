
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body>
    <div class="container">
      <div class="row col-6 mt-4">
        <div class="col">
        <a href="index.php" class="btn btn-primary">Back to homepage</a>
        </div>
        <div class="col">
            <h1> Input Data </h1>
        </div>
      </div>
       
            <div class="row col-6">
                    <div class="input-group mb-3">
                        <label for="nama_klub" class="col-form-label">Nama Klub</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="nama_klub" class="form-control">
                    
                    </div>
                    <div class="input-group mb-3">
                        <label for="kota_klub" class="col-form-label">Kota Klub</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="test" id="kota_klub" class="form-control">
                       
                    </div>
                    <div class="alert alert-danger d-none" id="val_form" role="alert">
                     
                    </div>
                    <div class="alert alert-success d-none" id="success" role="alert">
                    
                     </div>
                    <div class="col-auto">
                        <button type="button" id="submit" class="btn btn-primary" onclick="inputData()">Submit</button>
                    </div>
               
                  
                    
            </div>

        
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
</html>


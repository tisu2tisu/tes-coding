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
            <h1> Input Skor </h1>
        </div>
      </div>
       
            <div class="row col-8">
                    <div class="row">
                        <div class="col-4">

                            <div class="input-group mb-3">
                                <label for="nama_klub" class="col-form-label">Klub 1</label>
                            </div>
                            <select class="form-select form-select-lg mb-3 klub" id="klub1" aria-label="Large select example">

                                <option value="1" selected></option>
                       
                            </select>
                        </div>
                        <div class="col-4">

                            <div class="input-group mb-3">
                                <label for="nama_klub" class="col-form-label">Klub 2</label>
                            </div>
                            <select class="form-select form-select-lg mb-3 klub" id="klub2" aria-label="Large select example">

                            <option value="1" selected>&nbsp;</option>
                          
                            </select>
                        </div>

                        <div class="col-4">
                            
                            <div class="input-group  mt-5">
                                  <button type="button" class="btn btn-primary " onclick="inputScoreSingle()">Submit</button>
                            </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-4">

                            <div class="input-group mb-3">
                                <label for="nama_klub" class="col-form-label">Score 1</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="skor1" class="form-control">
                            
                            </div>
                        </div>
                        <div class="col-4">

                            <div class="input-group mb-3">
                                <label for="nama_klub" class="col-form-label">Score 2</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="skor2" class="form-control">

                            </div>
                            
                        </div>
                       
                        
                                            
                    </div>
                     
                    </div>
                 
               
                  
                    
            </div>

        
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
</html>


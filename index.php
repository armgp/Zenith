<?php

 if ($_GET['city']) {
   
   $fullpagedata = file_get_contents('https://www.weather-forecast.com/locations/'.$_GET['city'].'/forecasts/latest');

   $divtwo = explode("googletag.cmd.push(function() { googletag.display('div-gpt-ad-1552862953340-0'); });", $fullpagedata);

   $finalproduct = explode('<!-- /1013347/WFC_SKY_MainA --> ', $divtwo[1]);

 }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Weather Scraper</title>

    <style type="text/css">
      
      body{
        background-image: url("ws.jpg");
        background-size: cover;
      }
      
      .container{
        text-align: center;
        width: 500px;
        margin-top: 300px;
      }


    </style>
  </head>
  <body>


    <div class="container">


    <h1 style="color: #86d1ef">Weather Scraper</h1>

    <form>

      <div class="form-group">
        <label for="city" style="color: #e57070">Enter City name</label>
        <input type="text" class="form-control" name="city" id="city" placeholder="Eg. Delhi, Tokyo ">
      </div>
  
      <button type="submit" class="btn btn-primary" style="width: 100px">Submit</button>

    </form>
       
       <div class="alert alert-info" role="alert">
         <?php  echo $finalproduct[0];  ?>
       </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksesoari</title>

    <!-- h1 font -->
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/odeca.css">

    <script src="../js/nakit.js"></script>

</head>
<body>
    <?php
    include "../classes/database.php";
    ?>
 

    <div id="stolica">
        <img src="../images/slika1.jpg" width="47%" alt="">
    </div>
    <div id="ruka">
        <img src="../images/slika3.jpg" width="48%" alt="">
    </div>

    <h1><span>A</span>ksesoar</h1>

    <p id="citat">“If there was a choice on spending a lot of money on accessories or dress, I always chose accessories. 
        I think jewelry can change an outfit more than anything else.”</p>
    <div class="slike">
        <div class="row">
            <div class="col-3">
                <img src="../images/slika8.jpg" alt="">
            </div>
            <div class="col-1">
                <p>Quilted backpack</p>
            </div>
            <div class="col-3">
                <img src="../images/slika7.jpg" alt="">
            </div>
            <div class="col-1"><p>Nice detail</p></div>
            <div class="col-3">
                <img src="../images/slika9.jpg" alt="">
            </div> 
            <div class="col-1"><p>Pink purse</p></div>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="../images/slika24.jpg" alt="">
            </div>
            <div class="col-1"><p>SLIPPERS AND TOILETRY BAG SET</p></div>
            <div class="col-3">
                <img src="../images/slika27.jpg" alt="">
            </div>
            <div class="col-1"><p>KNIT BEANIE WITH POMPOM</p></div>
            <div class="col-3">
                <img src="../images/slika25.jpg" alt="">
            </div>
            <div class="col-1"><p>SOFT KNIT SCARF</p></div>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="../images/slika30.jpg" alt="">
            </div>
            <div class="col-1"><p>LEATHER BELT</p></div>
            <div class="col-3">
                <img src="../images/slika29.jpg" alt="">
            </div>
            <div class="col-1"><p>STRETCH BELT WITH STONE BUCKLE</p></div>
            <div class="col-3">
                <img src="../images/slika28.jpg" alt="">
            </div>
            <div class="col-1"><p>RHINESTONE BELT</p></div>
        </div>
    </div>
    <div class="recenzije">
        <h3>Recenzije:</h3>
        <form class="forma_rec" id="forma_rec" action="" method="post">
            <div class="ime">
            <input type="text" name="ime_aksesoari" id="ime_aksesoari" placeholder="Korisničko ime">
            </div>
            <br>
            <div class="komentar">
            <input type="text" name="komentar_aksesoari" id="komentar_aksesoari" placeholder="Komentar">
            </div>
            <br>
            <p>Ocena - Opšti utisak od 1 do 5:</p>
            <br>
            <select name="ocena_aksesoari" id="ocena_aksesoari">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
              <button  type="submit" class="btn btn-dark" name="posalji_aksesoari" id="posalji_aksesoari">Postavi recenziju</button>
        </form>
    <hr>
    <button type="button" class="btn btn-dark" name="prikazi_sve" id="prikazi_sve">Prikaži sve recenzije</button>
    <button type="button" class="btn btn-dark" name="prikazi_moje" id="prikazi_moje">Prikaži moje recenzije</button>
</div>

<div class="tabela" id="sakrivena_tabela">
    <table class="table table-striped table-dark" id="tabela">
        <tbody>

        </tbody>
    </table>
</div>

<div class="cont"> 
    <div class="formpost">
        <div class="searchpanel" id="searchpanel" style="display: none;">
            <input type="text" class="searchbox" name="name" id="name">
            <br>
            <input type="submit" class="btn btn-dark" name="searchdata" id="searchdata" value="Pronadji">
        </div>
            <table class="table table-striped table-dark" class="tabel" id="verformid">
            </table>
    </div>
</div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

   <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <label for="">Korisnicko ime:</label>
        <input type="text" id="korisnicko_ime_update" class="form-control">
        <label for="">Komentar:</label>
        <input type="text" id="komentar_update" class="form-control">
        <label for="">Ocena:</label>
        <select name="ocena_update" id="ocena_update" class="form-control" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
      </div>
      <div class="modal-footer">
          <a href="#" id="save" name="save" class="btn btn-primary pull-right">Update</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>
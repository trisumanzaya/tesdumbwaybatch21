<?php
require 'functions.php';
$datas = query("SELECT id,NPSN,name_school,address,logo_school,school_level,status_school,user_id FROM school_tb");


if (isset($_POST["submit-school"])) {

  insertSchool($_POST);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Document</title>
  <style>
  body{
    background-image : url('https://lh3.googleusercontent.com/-4pNoQ0d-qpo/UUL5bkomrCI/AAAAAAAAALA/BAvfuM2ESeI/s640/paper_1024.jpg') 
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="d-flex flex-row justify-content-between" style="margin-bottom: 100px">
      <div>
        <h1>School Data</h1>
      </div>
      <div class="mt-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalMusic">Add School</button>
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalGenre">Add Genre</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSinger">Add Singer</button> -->
      </div>
    </div>
  </div>
  <div class="d-flex flex-row flex-wrap justify-content-around">

    <?php $i = 1; ?>
    <?php foreach ($datas as $data) : ?>

      <div class="card mb-4" style="width: 18rem">
        <img src=<?= $data['logo_school']; ?> class="card-img-top" alt="img">
        <div class="card-body">
          <div class="d-flex flex-row justify-content-between">
            <h5 class="card-title"><?= $data['name_school']; ?></h5>
            <p><?= $data['status_school']; ?></p>
          </div>
          <a href= <?="./detail.php?id=".$data['id']; ?> class="btn btn-primary w-100">Detail</a>
        </div>
      </div>

      <?php $i++; ?>
    <?php endforeach; ?>
  </div>

  <!-- Modal music -->
  <div class="modal fade" id="modalMusic" tabindex="-1" role="dialog" aria-labelledby="modalMusic" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form class="modal-content" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add School</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama sekolah</span>
            </div>
            <input type="text" class="form-control" placeholder="nama sekolah" aria-label="nama sekolah" aria-describedby="basic-addon1" name="name_school">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">NPSN</span>
            </div>
            <input type="text" class="form-control" placeholder="NPSN" aria-label="NPSN" aria-describedby="basic-addon1" name="NPSN">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Akreditas</span>
            </div>
            <select name="school_level" id="school_level">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            </select>
            <!-- <input type="text" class="form-control" placeholder="Genre" aria-label="Genre" aria-describedby="basic-addon1" name="id_genre"> -->
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Status</span>
            </div>
              <select name="status_school" id="status_school">
              <option value="Negeri">Negeri</option>
              <option value="Swasta">Swasta</option>
              </select>
            <!-- <input type="text" class="form-control" placeholder="Singer" aria-label="Singer" aria-describedby="basic-addon1" name="id_singer"> -->
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Logo sekolah</span>
            </div>
            <input type="text" class="form-control" placeholder="logo sekolah" aria-label="logo sekolah" aria-describedby="basic-addon1" name="logo_school">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Alamat</span>
            </div>
            <input type="text" class="form-control" placeholder="Alamat" aria-label="Alamat" aria-describedby="basic-addon1" name="address">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit-school">Save changes</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal Genre -->
  <div class="modal fade" id="modalGenre" tabindex="-1" role="dialog" aria-labelledby="modalGenre" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form class="modal-content" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Genre</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Genre</span>
            </div>
            <input type="text" class="form-control" placeholder="Genre" aria-label="Genre" aria-describedby="basic-addon1" name="name">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit-genre">Save changes</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal Singer -->
  <div class="modal fade" id="modalSinger" tabindex="-1" role="dialog" aria-labelledby="modalSinger" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form class="modal-content" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Singer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Add Singer</span>
            </div>
            <input type="text" class="form-control" placeholder="Singer" aria-label="Singer" aria-describedby="basic-addon1" name="name">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit-singer">Save changes</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
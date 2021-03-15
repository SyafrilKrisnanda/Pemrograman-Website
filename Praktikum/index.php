<?php 
#deklrasi variabel nama dan populasi ditambah title
    $nama = ['Chicago, IL', 
              'Dallas, TX', 
              'Houston, TX', 
              'Los Angeles, CA', 
              'New York, NY', 
              'Philadelphia, PA', 
              'Phoenix, AZ', 
              'San Antonio, TX', 
              'San Diego, CA', 
              'San Jose, CA'];
    $populasi = ['2,695,598', 
                '1,197,816', 
                '2,100,263', 
                '3,792,621', 
                '8,175,133', 
                '1,526,006',
                '1,445,632', 
                '1,327,407', 
                '1,307,402', 
                '945,942'];
    $title = 'Tugas Pemro Web modul 2';
?>

<!-- file html dengan template bootstarap -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title><?= $title ?></title>
  </head>

  <body>
    <div class="container mt-5"> 
    <table class="table caption-top">
    <caption>Before</caption>
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Populasi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          #looping untuk menampilkan variabelnya
            for ($i=0; $i < count($nama); $i++) {
          ?>
          <tr>
            <td><?= $nama[$i] ?></td> 
            <td><?= $populasi[$i] ?></td>
          </tr>
          <?php 
            }
          ?>
        </tbody>
      </table>
    </div>
    <div class="container mt-5"> 
    <table class="table caption-top">
    <caption>After</caption>
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Populasi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          #untuk mengganti nilai populasinya dan di looping untuk di print
            $populasi[3] = '3,700,000';
            $populasi[5] = '1,400,000';
            for ($i=0; $i < count($nama); $i++) {
          ?>
          <tr>
            <td><?= $nama[$i] ?></td>
            <td><?= $populasi[$i] ?></td>
          </tr>
          <?php 
            }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
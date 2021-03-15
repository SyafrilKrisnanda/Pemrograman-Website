<!DOCTYPE html>
<html>
<body>

<?php
$nama = array ('Chicago, IL' => '2,695,598', 
'Dallas, TX' => '1,197,816', 
'Houston, TX' => '2,100,263', 
'Los Angeles, CA' => '3,792,621', 
'New York, NY' => '8,175,133', 
'Philadelphia, PA' => '1,526,006', 
'Phoenix, AZ' => '1,445,632', 
'San Antonio, TX' => '1,327,407', 
'San Diego, CA' => '1,307,402', 
'San Jose, CA' => '945,942');

foreach($nama as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>

<!-- file html dengan template bootstarap
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
    <caption>After</caption>
        <thead>
          <tr>
            <th scope="col">Nama</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
  </body>
</html> -->
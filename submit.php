<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Auto</h1>
<?php
$submit=filter_input(INPUT_POST,'submit');
$znacka=filter_input(INPUT_POST, 'znacka');
$SPZ=filter_input(INPUT_POST, 'spz');
$datum=filter_input(INPUT_POST, 'datum');
$year=filter_input(INPUT_POST, 'year');
?>

<?php
if ($year<=1960) {
  echo $color='red';
}
  else {
    echo $color='green';
  }
 ?>
<body>
Rok výroby je: <span style="color: <<?php echo $color; ?> ;"> <?php echo $year; ?> </span>
</body>
  </body>
</html>

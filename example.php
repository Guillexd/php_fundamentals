<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <?php 
       $array = [
        [
          "id" => 1,
          "value" => "Scarf"
        ],
        [
          "id" => 2,
          "value" => "Pants"
        ],
        [
          "id" => 3,
          "value" => "Glasses"
        ],
      ];

      function extractPant($array) {
        $data = [];
        foreach ($array as $i) {
          if($i["id"] !== 1) {
            $data[] = $i;
          }
        }
        return $data;
      }
      foreach(extractPant($array) as $i) {
        echo $i['value'] . "<br>";
      }
    ?>
  </body>
</html>
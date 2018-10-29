<?php

// bingogame

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/bingo.php');

$bingo = new \MyApp\Bingo();
$bingo->create();

?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>BINGO!</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <table>
      <tr>
       <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
      </tr>
      <?php for ($i = 0; $i < 5; $i++): ?>
      <tr>
      <?php for ($j = 0; $i < 5; $i++): ?>
       <td><?php h($nums[$j][$i]): ?></td>
      <?php endfor; ?>
      </tr>
      <?php endfor; ?>
    </table>
  </div>
</body>
</html>

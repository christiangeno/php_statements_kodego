<?php

$start_num = 1;
$end_num = 10;

echo "<table border='1'>";
echo "<tr>";
echo "<th>Dividend</th>";
echo "<th>Divisor</th>";
echo "<th>Quotient</th>";
echo "</tr>";

for ($dividend = $start_num; $dividend <= $end_num; $dividend++) {

  for ($divisor = $start_num; $divisor <= $end_num; $divisor++) {

    $quotient = $dividend / $divisor;


    echo "<tr>";
    echo "<td>$dividend</td>";
    echo "<td>$divisor</td>";
    echo "<td>$quotient</td>";
    echo "</tr>";
  }
}

echo "</table>";

?>
<?php
for ($i = 1; ; $i++) {
  if ($i > 10) {
      break;
  }
  echo $i;
}
$arrayCc = [
  [1, 2],
  [3, 4],
];
foreach ($arrayCc as list($a, $b)) {
  echo "A: $a; B: $b\n";
}
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
$i = 0;
do {
    echo $i;
} while ($i > 0);
?>
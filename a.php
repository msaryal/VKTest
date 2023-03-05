<?php
$size = 5;
$field = [];

for($row = 0; $row < $size; $row++)
{
    for($col = 0; $col < $size; $col++)
    {
        $field[$row][$col] = rand(0,9);
    }
}

for($row = 0; $row < $size; $row++)
{
    for($col = 0; $col < $size; $col++)
    {
        echo $field[$row][$col] . " ";
    }
    echo "<br>";
}

$sx = rand(0, $size - 1);
$sy = rand(0, $size - 1);
$ex = rand(0, $size - 1);
$ey = rand(0, $size - 1);

$cx = $sx;
$cy = $sy;

$nx = 0;
$ny = 0;

$sum = 0;

echo "<br>";
echo $sx . " " . $sy . " " . $ex . " " . $ey;
echo "<br>";
echo "<br>";

$field[$sy][$sx] = 's';
$field[$ey][$ex] = 'e';

for($row = 0; $row < $size; $row++)
{
    for($col = 0; $col < $size; $col++)
    {
        echo $field[$row][$col] . " ";
    }
    echo "<br>";
}

while($cx != $ex && $cy != $ey) {
    $px = $cx;
    $py = $cy;
    if($cx < $ex){
        $nx = $cx++;
    }else if($cx > $ex){
        $nx = $cx--;
    }
    if($cy < $ey){
        $ny = $cy++;
    }else if($cy > $ey){
        $ny = $cy--;
    }

    $cx = $nx;
    $cy = $ny;

    $field[$py][$px] = '*';
}
?>
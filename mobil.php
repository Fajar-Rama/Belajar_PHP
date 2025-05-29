<?php
// star the session
session_start();
?>
<?php
$car1 = array("brand" => "toyota", "model" => "corolla", "price" => 1000000000);
$car2 = array("brand" => "honda", "model" => "civic", "price" => 200000000);
$car3 = array("brand" => "suzuki", "model" => "swift", "price" => 50000000);
?>
<table>
<tr>
<th>brand</th>
<th>model</th>
</tr>
<tr>
<td><?php echo $car1['brand']; ?></td>
<td><?php echo $car1['model']; ?></td>
</tr>
<tr>
<td><?php echo $car2['brand']; ?></td>
<td><?php echo $car2['model']; ?></td>
</tr>
<tr>
<td><?php echo $car3['brand']; ?></td>
<td><?php echo $car3['model']; ?></td>
</tr>
</table>
<?php
echo "<br>";
echo $car1['brand'] . "<br>";
echo abs(-10.40);
?>
<html>
<head>
    <title>jenis dan harga mobil</title>
    <h1>brand toyota
        <br> brand honda
        <br> brand suzuki</h1>
</head>
</html>
<?php
// echo "selamat datang di website";
echo "<br>";

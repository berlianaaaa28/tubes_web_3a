<?php
$apiKey = "80e2b57ee4e148bcb493ae30931ddc8b";

$url = "https://api.spoonacular.com/recipes/random?number=1&apiKey=$apiKey";

$response = file_get_contents($url);
$data = json_decode($response, true);
$meal = $data['recipes'][0];
?>

<h2><?= $meal['title'] ?></h2>
<img src="<?= $meal['image'] ?>" width="350"><br><br>

<h3>Instruksi:</h3>
<p><?= $meal['instructions'] ?></p>

<a href="random.php">Dapatkan Resep Acak Lagi 🔄</a> 
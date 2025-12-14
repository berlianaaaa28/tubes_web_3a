<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Resep Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #fafafa;
        }
        h1 {
            margin-top: 50px;
        }
        .menu {
            margin-top: 40px;
        }
        a {
            display: block;
            margin: 15px auto;
            padding: 12px 20px;
            width: 250px;
            text-decoration: none;
            background: #4CAF50;
            color: white;
            border-radius: 8px;
            font-size: 18px;
        }
        a:hover {
            background: #45A049;
        }
    </style>
</head>
<body>

    <h1> <?php echo "🍽️ Aplikasi Resep Makanan";?></h1>
    <p>Pilih salah satu fitur di bawah:</p>

    <div class="menu">
        <a href="pencarian.php">🔍 Pencarian Resep</a>
        <a href="random.php">🎲 Resep Acak</a>
        <a href="detail.php?id=716429">📄 Contoh Detail Resep</a>
    </div>

</body>
</html>

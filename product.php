<?php
$category = $_GET['category'] ?? 'all';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fresh Groccer - Products</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Fresh Groccer</h1>
    <nav>
      <a href="index.html">Home</a>
      <a href="products.php">Products</a>
    </nav>
  </header>

  <main>
    <h2>Products in Category: <?= htmlspecialchars($category) ?></h2>
    <div class="products">
      <!-- You can dynamically load items from DB or JSON here -->
      <p>Items related to <?= htmlspecialchars($category) ?> will be shown here.</p>
    </div>
  </main>
</body>
</html>

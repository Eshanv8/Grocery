<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Grocery Store</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="greeting" id="greeting"></div>

  <header>
    <h1>Fresh Groccer</h1>
    <nav>
      <a href="index.html">Home</a>
      <a href="products.php">Products</a>
      <a href="offers.php">Offers</a>
      <a href="contact.php">Contact Us</a>
    </nav>
  </header>

  <main>
    <h2>Shop by Category</h2>
    <div class="categories">
      <div class="category" onclick="redirectToProducts('vegetables')">Vegetables</div>
      <div class="category" onclick="redirectToProducts('fruits')">Fruits</div>
      <div class="category" onclick="redirectToProducts('dairy')">Dairy</div>
      <div class="category" onclick="redirectToProducts('bakery')">Bakery</div>
    </div>
  </main>

  <script src="script.js"></script>
  <script>
    const greetingDiv = document.getElementById('greeting');
    const hour = new Date().getHours();
    let greetingText = "Welcome!";

    if (hour < 12) {
      greetingText = "Good morning!";
    } else if (hour < 18) {
      greetingText = "Good afternoon!";
    } else {
      greetingText = "Good evening!";
    }

    greetingDiv.textContent = greetingText;
  </script>
</body>
</html>

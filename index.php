<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grocery Delivery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">FreshGrocer</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="products.html">Products</a>
            <a href="#">Categories</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="login.php"><i class="fas fa-user"></i> Login</a>
            <a href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
        </nav>
    </header>

    <section class="hero">
        <h1 id="greeting">Welcome to FreshGrocer</h1>
        <br>
        <p>Get your groceries delivered fresh to your doorstep!</p>
        <a href="products.html" class="btn">Shop Now</a>
    </section>

    <section class="categories">
        <h2>Popular Categories</h2>
        <div class="category-list">
            <div class="category-card">
                <img src="images/fruits.jpg" alt="Fruits">
                <h3>Fruits</h3>
            </div>
            <div class="category-card">
                <img src="images/vegetables.jpg" alt="Vegetables">
                <h3>Vegetables</h3>
            </div>
            <div class="category-card">
                <img src="images/dairy.jpg" alt="Dairy">
                <h3>Dairy</h3>
            </div>
            <div class="category-card">
                <img src="images/bakery.jpg" alt="Bakery">
                <h3>Bakery</h3>
            </div>
            <div class="category-card">
                <img src="images/beverages.jpg" alt="Beverages">
                <h3>Beverages</h3>
            </div>
            <div class="category-card">
                <img src="images/frozen.jpeg" alt="Frozen">
                <h3>Frozen</h3>
            </div>
            <div class="category-card">
                <img src="images/household.jpg" alt="Household">
                <h3>Household</h3>
            </div>
            <div class="category-card">
                <img src="images/meat.jpg" alt="Meat">
                <h3>Meat</h3>
            </div>
            <div class="category-card">
                <img src="images/pantry.jpg" alt="Pantry">
                <h3>Pantry</h3>
            </div>
            <div class="category-card">
                <img src="images/personalcare.jpg" alt="Personal Care">
                <h3>Personal Care</h3>
            </div>
            <div class="category-card">
                <img src="images/seafood.jpg" alt="Seafood">
                <h3>Seafood</h3>
            </div>
            <div class="category-card">
                <img src="images/snacks.jpg" alt="Snacks">
                <h3>Snacks</h3>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 FreshGrocer. All rights reserved.</p>
    </footer>

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

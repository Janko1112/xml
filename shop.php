<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <title>Web Shop</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <nav class="navbar">
    <div class="nav-left">🛒 Web Shop</div>
    <div class="nav-right">
      <a href="login.html">Odjava / Login</a>
    </div>
  </nav>

  <div class="shop-container">
    <h1>Naši proizvodi</h1>
    <div class="product-grid">
      <?php include 'proizvodi.php'; ?>
    </div>
  </div>

</body>
</html>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #6a0dad, #8e44ad);
      font-family: 'Segoe UI', sans-serif;
      color: white;
    }

    .navbar {
      background: #5a0dad;
      padding: 20px;
      text-align: center;
      font-size: 24px;
      font-weight: bold;
    }

    .container {
      padding: 40px;
      display: flex;
      justify-content: center;
    }

    .card {
      background: white;
      color: #333;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.3);
      width: 400px;
      text-align: center;
    }

    .card h2 {
      color: #6a0dad;
    }

    .logout-btn {
      margin-top: 20px;
      background-color: #6a0dad;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
    }

    .logout-btn:hover {
      background-color: #5e0cac;
    }
  </style>
</head>
<body>
  <div class="navbar">Admin Dashboard</div>
  <div class="container">
    <div class="card">
      <h2>Halo, <?php echo $_SESSION['username']; ?>!</h2>
      <p>Selamat datang di halaman dashboard. Anda berhasil login.</p>
      <a href="logout.php" class="logout-btn">Logout</a>
    </div>
  </div>
</body>
</html>

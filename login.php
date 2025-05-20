<?php
session_start();
?>
<div class="login-container">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f3f4f6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: #fff;
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-container .logo {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .login-container .logo img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
    }

    .login-container h2 {
      text-align: center;
      color: #333;
      margin-bottom: 10px;
    }

    .login-container p {
      text-align: center;
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 5px;
    }

    .login-container .form-group {
      margin-top: 15px;
    }

    .login-container .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
    }

    .login-container .form-group input {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
      transition: 0.2s ease-in-out;
    }

    .login-container .form-group input:focus {
      border-color: #3b82f6;
      outline: none;
    }

    .login-container .btn {
      margin-top: 20px;
      width: 100%;
      background-color: #3b82f6;
      color: white;
      padding: 12px;
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .login-container .btn:hover {
      background-color: #2563eb;
    }

    .alert {
      margin-top: 15px;
      padding: 10px;
      background-color: #f87171;
      color: white;
      text-align: center;
      border-radius: 6px;
    }
  </style>

  <div class="logo">
    <img src="images/auth/login.jpg" alt="logo">
  </div>
  <h2>Login Here</h2>
 

  <?php
  include 'connect.php';
  if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = stripslashes(sha1($_POST['password']));
    $password = mysqli_real_escape_string($koneksi, $password);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($koneksi, $sql);
    $row = mysqli_num_rows($query);
    if ($row > 0) {
      $data = mysqli_fetch_assoc($query);
      $_SESSION['email'] = $data['email'];
      $_SESSION['password'] = $data['password'];
      header('location: media.php');
    } else {
      echo "<div class='alert'>Email atau password salah!</div>";
    }
  }
  ?>

  <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="Masukkan email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" name="password" id="pwd" placeholder="Masukkan password" required>
    </div>
    <button type="submit" name="login" class="btn">Login</button>
  </form>
</div>

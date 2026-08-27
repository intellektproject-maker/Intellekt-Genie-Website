<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You</title>
  <link rel="stylesheet" href="style.css">
  <meta http-equiv="refresh" content="10;url=index.php">

</head>

<style>
    body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', sans-serif;
  background: #f0f8ff;
}

.thankyou-page {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.thankyou-box {
  background-color: #ffffff;
  padding: 40px 30px;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  text-align: center;
  max-width: 400px;
  width: 100%;
}

.thankyou-box h1 {
  font-size: 32px;
  color: #00cf34ff;
  margin-bottom: 20px;
}

.thankyou-box p {
  font-size: 16px;
  color: #333;
  margin-bottom: 30px;
}

.ok-button {
  display: inline-block;
  padding: 6px 20px;
  background-color: #00cf34ff;
  color: #fff;
  border-radius: 5px;
  text-decoration: none;
  font-weight: 600;
  transition: background-color 0.3s ease;
}

.ok-button:hover {
  background-color: #00a529ff;
}

</style>

<body>
  <div class="thankyou-page">
    <div class="thankyou-box">
      <h1>Thank You!</h1>
      <p>Thanks for submitting your details. We will respond shortly.</p>
      <a href="index.php" class="ok-button">OK</a>
    </div>
  </div>
</body>
</html>

<header>
<title>Password Strength Test</title>
  <link rel="stylesheet" href="pw-strength.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script>
    <?php require_once("getPasswordStrength.js");?>
</script>
  
</header>
</body>
<div class="pw-meter">
  <h2>Password Strength Meter</h2>
  <div class="form-element">
    <label for="password">Password</label>
    <input type="password" id="password">
    <div class="pw-display-toggle-btn">
      <i class="fa fa-eye"></i>
      <i class="fa fa-eye-slash"></i>
      <div class="pw-strength">
      <span>Weak</span>
      <span></span>
    </div>
    </div>
   
  
</div>
</body>
</html>
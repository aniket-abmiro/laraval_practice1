


<main>
<h2 style="text-align: center; margin-bottom: 20px;">Registration Form</h2>
  <form action="/register" method="POST" style="max-width: 400px; margin: 0 auto;">
    <label for="email" style="display: block; margin-bottom: 5px;">Email:</label>
    <input type="text" id="email" name="email" required style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br><br>

    <label for="password" style="display: block; margin-bottom: 5px;">Password:</label>
    <input type="password" id="password" name="password" required style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br><br>

    <label for="remember" style="display: block; margin-bottom: 5px;">Remember Me:</label>
    <input type="checkbox" id="remember" name="remember" style="margin-bottom: 10px;"><br><br>

    <a href="forgot_password.html" style="display: block; text-align: right; margin-bottom: 10px; color: blue; text-decoration: none;">Forgot Password?</a><br><br>

    <input type="submit" value="Register" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
  </form>
</main>

<?php if(isset($errors)): ?>
  <?php

  foreach($errors as $error)
  {?>
      <p style = "color: red;"><?= $error ?></p>
      <br>
  <?php
  }

  endif; ?>





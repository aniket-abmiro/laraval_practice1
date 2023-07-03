


<main>
  <form action = "/users" method="POST" style="max-width: 300px; margin: 0 auto;">
     <input type="hidden" name="_method", value="PATCH">
     <input type="hidden" name="id", value="<?= $_GET['id']?>" >
    <label for="name" style="display: block; margin-bottom: 10px;">Name:</label>
    <input type="text" id="name" name="name" required style="width: 100%; padding: 5px; margin-bottom: 10px;">

    <label for="age" style="display: block; margin-bottom: 10px;">Age:</label>
    <input type="number" id="age" name="age"  style="width: 100%; padding: 5px; margin-bottom: 10px;">

    <button type="update" style="display: block; padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">Update User</button>
  </form>
</main>

<?php if(isset($errors['body'])): ?>
  <p style = "color: red;"><?= $errors['body'] ?></p>
  <?php endif; ?>





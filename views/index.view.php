<?php include 'partials/header.php'; ?>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name ?></li>
<?php endforeach; ?>

  <h1>Submit Your Form</h1>
  <form action="/names" method="POST">
      <input type="text" name="name">
      <button type="submit">Submit</button>
  </form>


<?php include 'partials/footer.php'; ?>

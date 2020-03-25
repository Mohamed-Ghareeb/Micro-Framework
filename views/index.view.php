<?php include 'partials/header.php'; ?>

    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li><?php echo $task->name ?></li>
      <?php endforeach; ?>
    </ul>

<?php include 'partials/footer.php'; ?>

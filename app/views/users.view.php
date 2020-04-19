<?php include 'partials/header.php'; ?>

<h1>Users Page</h1>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name ?></li>
<?php endforeach; ?>

<h1>Add User</h1>
<form action="/users" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php include 'partials/footer.php'; ?>

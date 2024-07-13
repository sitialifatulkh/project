<?php include 'layout/header.php'; ?>

<div class="container">
    <h1>Home Page</h1>
    <p>Welcome to the home page!</p>
    <ul>
        <?php foreach ($tes as $item) : ?>
            <li><?= $item; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include 'layout/footer.php'; ?>
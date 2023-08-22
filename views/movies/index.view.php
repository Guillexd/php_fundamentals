<?php 
view('partials/head.php');
view('partials/nav.php');
?>

<div class='container'>

    <h1>Movies</h1>
    <?php foreach($posts as $post) : ?>
        <li>
            <a href='/movie?id=<?= $post['id'] ?>'>
                <?= htmlspecialchars($post['title'] ) ?>
            </a>
        </li>
    <?php endforeach; ?>
    <a href='/movie/create'>Create movie</a>

</div>

<?= view('partials/footer.php')?>
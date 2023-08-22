<?php 
view('partials/head.php');
view('partials/nav.php');
?>

<form class='container d-flex flex-column' method='post'>
    <h1 class='text-center'>Create movie</h1>

    <div class='input-group'>
        <span class='input-group-text'>New movie</span>
        <textarea class='form-control' aria-label='With textarea' name='title'><?= $_POST['title'] ?? '' ?></textarea>
    </div>
    <input type='submit' value='Create' class='btn btn-primary align-self-center'>
    <?php if(isset($errors['title'])) : ?>
        <p class='fs-6 text-danger'><?= $errors['title'] ?></p>
    <?php endif; ?>
</form>

<?= view('partials/footer.php')?>
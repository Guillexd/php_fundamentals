<?php 
view('partials/head.php');
view('partials/nav.php');
?>

<form class='container d-flex flex-column' method='post'>
    <h1 class='text-center'>Edit movie</h1>
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="id" value="<?= $movie['id'] ?>">
    <div class='input-group'>
        <span class='input-group-text'>New movie</span>
        <textarea class='form-control' aria-label='With textarea' name='title'><?= $_POST['title'] ?? $movie['title'] ?></textarea>
    </div>
    <input type='submit' value='Update' class='btn btn-primary align-self-center'>
    <?php if(isset($errors['title'])) : ?>
        <p class='fs-6 text-danger'><?= $errors['title'] ?></p>
    <?php endif; ?>
</form>

<?= view('partials/footer.php')?>
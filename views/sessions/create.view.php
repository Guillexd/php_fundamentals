<?php
view('partials/head.php');
view('partials/nav.php');
?>

<form class="container" method="POST">
    <div class="col-6 mx-auto">
        <h1 class="text-center">Log in</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?= old('email') ?>">
            <?php if(isset($errors['email'])) : ?>
                <div id="emailHelp" class="form-text"><?= $errors['email'] ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" aria-describedby="passwordHelp">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="registration">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


<?= view('partials/footer.php') ?>
<?php 
view('partials/head.php');
view('partials/nav.php');
?>

<h2><?= htmlspecialchars( $movie['title']) ?></h2>

<a class="btn btn-secondary" href="/movie/edit?id=<?= $movie['id'] ?>">Edit</a>

<form method="POST">
    <input type="hidden" name="_method" value="DELETE">    
    <input type="hidden" name="id" value="<?= $movie['id'] ?>">    
    <input class="btn btn-danger" type="submit" value="Delete">    
</form>
<?= view('partials/footer.php')?>
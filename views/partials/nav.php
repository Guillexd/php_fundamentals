<div class='container'>
  <header class='d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom'>
    <div class='col-md-3 mb-2 mb-md-0'>
      <a href='/' class='d-inline-flex link-body-emphasis text-decoration-none'>
        <svg class='bi' width='40' height='32' role='img' aria-label='Bootstrap'>
          <use xlink:href='#bootstrap'></use>
        </svg>
      </a>
    </div>

    <ul class='nav col-12 col-md-auto mb-2 justify-content-center mb-md-0'>
    <li><a href='/' class='<?php if (isUrl('/')) { echo 'link-secondary '; } ?>nav-link px-2'>Home</a></li>
      <li><a href='/contact' class='<?php if (isUrl('/contact')) { echo 'link-secondary '; } ?>nav-link px-2'>About</a></li>
      <li><a href='/about' class='<?php if (isUrl('/about')) { echo 'link-secondary '; } ?>nav-link px-2'>Contact</a></li>
      <li><a href='/movies' class='<?php if (isUrl('/movies')) { echo 'link-secondary '; } ?>nav-link px-2'>Movies</a></li>
    </ul>

    <div class='col-md-3 text-end d-flex'>
      <?php if ($_SESSION['user'] ?? false) : ?>
        <form method="POST" action="/logout">
          <input type="hidden" name="_method" value="DELETE">
          <input type='submit' class='btn btn-outline-primary me-2' value="Log out">
        </form>
      <?php else : ?>
        <a href="/login" class='btn btn-outline-primary me-2'>Login</a>
      <?php endif; ?>

      <?php if ($_SESSION['user'] ?? false) : ?>
        <button type='button' class='btn btn-primary'><?= $_SESSION['user']['name'] ?></button>
      <?php else : ?>
        <a href="/register" class='btn btn-primary'>Sign-up</a>
      <?php endif; ?>
    </div>
  </header>
</div>
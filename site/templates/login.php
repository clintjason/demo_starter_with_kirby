<?php snippet('header') ?>
<section class="form" style="margin-top:10rem">
<h1><?= $page->title()->html() ?></h1>
<?php if($error): ?>
<div class="alert"><?= $page->alert()->html() ?></div>
<?php endif ?>

<form method="post" action="<?= $page->url() ?>">
  <div class="field">
    <label for="email"><?= $page->username()->html() ?></label>
    <input type="email" id="email" name="email" value="<?= esc(get('email')) ?>">
  </div>
  <div class="field">
    <label for="password"><?= $page->password()->html() ?></label>
    <input type="password" id="password" name="password" value="<?= esc(get('password')) ?>">
  </div>
  <div class="field">
    <input type="submit" name="login" value="<?= $page->button()->html() ?>">
  </div>
</form>
</section>

<?php snippet('footer') ?>
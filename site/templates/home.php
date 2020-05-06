<?php snippet('header') ?>
    <section class="home-cover">
    <?php if($image = $page->image()): ?>
        <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
    <?php endif ?>
    <div>
        <h1><?= $page->coverheading() ?></h1>
    </div>
    </section>
    <section class="content"><?= $page->text()->kirbytext() ?></section>
<?php snippet('footer') ?>
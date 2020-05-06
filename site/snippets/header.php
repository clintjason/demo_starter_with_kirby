<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * This header snippet is reused in all templates. 
 * It fetches information from the `site.txt` content file and contains the site navigation.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?= $page->metadescription() ?>">
  <meta name="robots" content="<?= $page->noindex()->isTrue()? 'index': 'noindex' ?>" >
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="<?= $site->title() ?>" />
  <meta property="og:title" content="<?= $page->ogtitle()->text() ?>" />
  <meta property="og:description" content="<?= $page->ogdescription()->text() ?>" />
  <?php if($page->image()):?>
    <meta property="og:image" content="<?= $page->image()->resize(180,180)->url() ?>" />
  <?php endif ?>
  <meta property="og:url" content="<?= $page->url() ?>"/>
  <!-- The title tag we show the title of our site and the title of the current page -->
  <title><?= $site->title() ?> | <?= $page->metatitle() ?></title>
  <link rel="shortcut icon" type="image" href="<?= $site->image()->resize(20,20)->url() ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Stylesheets can be included using the `css()` helper. Kirby also provides the `js()` helper to include script file. 
        More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers -->
  <?= css(['assets/css/index.min.css', '@auto']) ?>

  <?= page('home')->fbpixel() ?>
  <?= page('home')->ganalytics() ?>
</head>
<body>
<?php if (!$kirby->user()->role()==='Client') go('login') ?>
    <header>
      <!-- In this link we call `$site->url()` to create a link back to the homepage -->
      <a class="logo" href="<?= $site->url() ?>"><?= $site->image()->resize(80)->html(['alt' => $site->logoAlt()->html()]) ?></a>

      <nav id="menu" class="menu">
        <div id="menuItems">
          <?php        
          foreach ($site->children()->listed() as $item): ?>
          <a href="<?= $item->url() ?>"><?= $item->title() ?></a>
          <?php endforeach ?>
          <?php if ($kirby->user()->role()==='Client'): ?>
              <a href="<?= url('logout') ?>">Logout</a>
          <?php endif ?>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="makeResponsive()">
          <i class="fa fa-bars fa-2x"></i>
        </a>
      </nav>
    </header>
    <main id="#">


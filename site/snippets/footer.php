</main>
<footer>
    <p>
        <?= $site->copyright() ?>
        <a href="http://www.cdainterview.com/disclaimer-privacy-policy.html" target="_blank"><span><?= $site->disclaimer() ?></span></a>
        <a href="mailto:info@bemoacademicconsulting.com" id="rw_email_contact"><span><?= $site->contact() ?></span></a>
    </p>
    <div class="social-icons">
        <i class="fa fa-facebook-f"></i>
        <i class="fa fa-twitter"></i>
    </div>
</footer>
<a href="#" id="up-btn" class="scrollup">
<?php if($image = $site->image('up1.webp')): ?>
    <img src="<?= $image->url() ?>" alt="Back To Top Icon">
<?php endif ?>
</a>
<?= js('assets/js/utils.js') ?>
</body>
</html>
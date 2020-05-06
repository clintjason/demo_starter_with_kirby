<?php snippet('header') ?>
    <section class="contact-header">
      <?php if($image = $page->image('contact-us.png')): ?>
          <img src="<?= $image->url() ?>" alt="Contact Us Header Image">
      <?php endif ?>
      <div><?= $page->contactinfo()->kirbytext() ?> </div>
    </section>
    <section class="form">
      <?php if($success): ?>
        <div class="alert success">
            <p><?= $success ?></p>
        </div>
      <?php else: ?>
        <?php if (isset($alert['error'])): ?>
            <div class="alert error"><p><?= $alert['error'] ?></p></div>
        <?php endif ?>
        <form method="post" action="<?= $page->url() ?>">
            <div class="honeypot">
                <label for="website">Website <abbr title="required">*</abbr></label>
                <input type="website" id="website" name="website">
            </div>
            <div class="field">
                <label for="name">
                    Name: <abbr title="required">*</abbr>
                </label>
                <input type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
                <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label for="email">
                    Email ADDRESS: <abbr title="required">*</abbr>
                </label>
                <input type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
                <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label for="text">
                    HOW WE HELP YOU? <abbr title="required">*</abbr>
                </label>
                <textarea id="text" name="text" required>
                    <?= $data['text']?? '' ?>
                </textarea>
                <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
            </div>
            <div class="btn-container">
              <input type="button" name="reset" value="Reset" onclick="resetForm()" >
              <input type="submit" name="submit" value="Submit">
            </div>
        </form>
      <?php endif ?>

      <div><?= $page->contactnote()->kirbytext() ?></div>
    </section>
    

      
<?php snippet('footer') ?>
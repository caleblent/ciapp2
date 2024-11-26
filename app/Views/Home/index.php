<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Home<?= $this->endSection() ?>

<?= $this->section("content") ?>
    <h1>Welcome to the Home page!</h1>

    <a href="<?= url_to("articles") ?>">See articles</a>

    <?php if (auth()->loggedIn()): ?>

        <a href="<?= url_to("logout") ?>">Log out</a>

    <?php else: ?>

        <a href="<?= url_to("login") ?>">Log in</a>

    <?php endif; ?>
<?= $this->endSection() ?>

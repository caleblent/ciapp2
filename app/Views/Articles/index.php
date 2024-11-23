<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Articles<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Welcome to the Articles page!</h1>

    <a href="<?= url_to("Articles::new") ?>">New</a>

    <?php foreach ($articles as $article): ?>

        <article>
            <a href="<?= site_url('/articles/' . $article->id) ?>"><h2><?= esc($article->title) ?></h2></a>
            <p><?= esc($article->content) ?></p>
        </article>

    <?php endforeach; ?>

<?= $this->endSection() ?>
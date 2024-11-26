<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Set Password<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Set Password</h1>

<?php if (session()->has("errors")):?>

    <ul style="color: #f00;">
        <?php foreach(session("errors") as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>

<?= form_open("set-password") ?>

<label for="password">Password</label>
<input type="password" id="password" name="password">

<label for="password-confirmation">Repeat password</label>
<input type="password" id="password-confirmation" name="password-confirmation">

<button>Save</button>

</form>

<?= $this->endSection() ?>
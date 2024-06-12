<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl flex flex-col gap-2 py-6 sm:px-6 lg:px-8">
       <?php foreach ($notes as $note) :?>
        <a  class=' underline text-blue-500' href="/note?id=<?= $note['id']?>"><?= $note['body'] ?></a>
        <?php  endforeach; ?>
    </div>
</main>

<?php require('partials/footer.php') ?>

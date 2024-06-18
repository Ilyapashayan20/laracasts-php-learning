<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl flex flex-col gap-2 py-6 sm:px-6 lg:px-8">
       <ul class=" flex flex-col gap-4">
       <?php foreach ($notes as $note) :?>
        <a  class=' underline text-blue-500' href="/note?id=<?= $note['id']?>"><?= htmlspecialchars($note['body']) ?></a>
        <?php  endforeach; ?>
       </ul>

       <p class="mt-6">
        <a class=" text-blue-500 hover:underline" href="/notes/create"> Create Note</a>
       </p>
    </div>
</main>

<?php require('partials/footer.php') ?>

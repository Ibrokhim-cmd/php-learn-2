<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto p-6 pt-0 mt-0">
       <ul>
           <?php foreach ($notes as $note) :?>
               <li>
                   <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                       <?= htmlspecialchars($note['body']) ?>
                   </a>
               </li>
           <?php endforeach; ?>
       </ul>

        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </main>

<?php require base_path('views/partials/footer.php'); ?>
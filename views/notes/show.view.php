<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto p-6 pt-0 mt-0">
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 underline">go back...</a>
            </p>
            <p><?= htmlspecialchars($note['body']) ?></p>

            <form class="mt-6" method="post">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="text-sm text-red-500">Delete</button>
            </form>

    </main>

<?php require base_path('views/partials/footer.php'); ?>
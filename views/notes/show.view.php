<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto p-6 pt-0 mt-0">
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 underline">go back...</a>
            </p>
            <p><?= htmlspecialchars($note['body']) ?></p>

            <footer class="mt-6">
                <a href="/note/edit?id=<?= $note['id'] ?>" class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Edit</a>
            </footer>
    </main>

<?php require base_path('views/partials/footer.php'); ?>
<div class="container">
    <?php if ($posts): ?>
        <?php foreach($posts as $post): ?>
            <div class="card">
                <div class="card-header">
                    <?= $post['title'] ?>
                    <?= $post['created_at'] ?>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <?= $post['text'] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No posts!</p>
    <?php endif; ?>
</div>
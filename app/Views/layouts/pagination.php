<?php $pager->setSurroundCount(2) ?>
<?php
// d($pager->getPrevious());
?>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php if ($pager->hasPreviousPage()) : ?>
            <li class="page-item"><a class="page-link" href="<?= $pager->getFirst() ?>">First</a></li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li class="page-item <?= $link['active'] ? 'active' : null ?>">
                <a class="page-link" href="<?= $link['uri'] ?>"> <?= $link['title'] ?></a>
            </li>

        <?php endforeach ?>
        <?php if ($pager->hasNextPage()) : ?>
            <li class="page-item"><a class="page-link" href="<?= $pager->getLast() ?>">Last</a></li>
        <?php endif ?>

    </ul>
</nav>
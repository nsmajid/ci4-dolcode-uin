<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php if ($pager->hasPrevious()) : ?>
            <li class="page-item"><a class="page-link" href="<?= $pager->getFirst() ?>">Previous</a></li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li class="page-item <?= $link['active'] ? 'active' : null ?>">
                <a class="page-link" href="<?= $link['uri'] ?>"> <?= $link['title'] ?></a>
            </li>

        <?php endforeach ?>
        <?php if ($pager->hasNext()) : ?>
            <li class="page-item"><a class="page-link" href="<?= $pager->getNext() ?>">Next</a></li>
        <?php endif ?>

    </ul>
</nav>
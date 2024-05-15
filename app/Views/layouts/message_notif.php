  <?php
    if (session()->getFlashdata('notif')) {
    ?>
      <div class="alert alert-<?= session()->getFlashdata('notif_cls') ?>" role="alert">
          <?= session()->getFlashdata('notif_msg') ?>
      </div>
  <?php
    }
    ?>
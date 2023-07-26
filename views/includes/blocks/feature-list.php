<?php $feature_list = $_block; ?>
<ul class="<?= $_bem->block(['class' => 'numbered-items']) ?>">
  <?php foreach($feature_list['items'] as $feature ): ?>
    <li class="<?= $_bem->element('item') ?>">
      <?= hd_component('icon-with-text', [
        'parent' => 'feature-list__item',
        'icon' => $feature['icon'],
        'title' => $feature['title'],
        'text' => $feature['description'],
      ]) ?>
    </li>
  <?php endforeach ?>
</ul>

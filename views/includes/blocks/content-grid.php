<?php $grid = $_block; ?>
<div class="<?= $_bem->block() ?>">
  <?php foreach($grid['items'] as $item ): ?>
    <article class="<?= $_bem->element('article') ?>">
      <div class="<?= $_bem->element('article-image-wrapper') ?>">
        <?= responsive_image($item['image'], [
          'class' => $_bem->element('article-image'),
          'sizes' => ['crop-495w-3:1', 'crop-990w-3:1', 'crop-1980w-3:1'],
          'display_sizes' => ['phone' => $_config['mobile_width'], $_config['width']/2],
          'fallback' => 'crop-495w-3:1',
        ]); ?>
      </div>
      <?php if(isset($item['header_with_link']['title'])): ?>
        <a class="<?= $_bem->element('article-link') ?>" href="<?= $item['header_with_link']['url']; ?>" target="_blank"><?= $item['header_with_link']['title']; ?></a>
      <?php endif; ?>
      <div class="<?= $_bem->element('article-content') ?>">
        <?= $item['content']; ?>
      </div>
    </article>
  <?php endforeach; ?>
</div>
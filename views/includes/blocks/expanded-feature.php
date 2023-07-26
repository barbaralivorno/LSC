<?php $feature = $_block; $url = $feature['url']; ?>
<article class="<?= $_bem->block() ?>">
  <?php if ($url): ?>
    <a href="<?= $url ?>">
  <?php endif ?>
    <?= hd_component('title', [
      'parent' => 'expanded-feature',
      'text' => $feature['title'],
    ]) ?>
  <?php if ($url): ?>
    </a>
  <?php endif ?>
  <?php if ($url): ?>
    <a href="<?= $url ?>" class="<?= $_bem->element('featured-block') ?>">
  <?php else: ?>
    <div class="<?= $_bem->element('featured-block') ?>">
  <?php endif ?>
    <span class="<?= $_bem->element('short-description') ?>">
      <?= $feature['short_description'] ?>
    </span>
    <?= hd_component('media', [
      'type' => 'image',
      'resource' => $feature['image'],
      'class' => $_bem->element('image'),
      'sizes' => ['scale-1024w', 'scale-1440w', 'scale-1920w', 'scale-2880w'],
      'display_sizes' => ['phone' => $_config['mobile_width'], $_config['width']],
      'fallback' => 'scale-1024w',
      'fit' => 'cover',
      'alt' => '',
    ]); ?>
  <?php if ($url): ?>
    </a>
  <?php else: ?>
    </div>
  <?php endif ?>
  <?= block('includes/blocks/text', [
    '_block' => $feature['text'],
    'parent' => 'expanded-feature',
  ]) ?>
</article>

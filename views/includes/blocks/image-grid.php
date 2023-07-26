<section class="<?= $_bem->block() ?>">
  <?php foreach($_block['items'] as $item): ?>
    <div class="<?= $_bem->element('item') ?>">
      <?= responsive_image($item['image'], [
          'class' => $_bem->element('image'),
          'sizes' => ['scale-90w'],
          'display_sizes' => ['tablet'=> '25vw', '10vw'],
          'fallback' => 'scale-90w',
        ]); ?>
    </div>
  <?php endforeach; ?>
</section>
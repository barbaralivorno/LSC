<a href="<?= $item['link']; ?>" rel="noopener" target="_blank" class="$_bem->element('slide-button')">
  <?= hd_component('media', [
    'type' => 'image',
    'resource' => $item['image'],
    'class' => $_bem->element('slide-image'),
    'sizes' => ['crop-256w-16:10', 'crop-512w-16:10', 'crop-1024w-16:10'],
    'display_sizes' => ['phone' => '80vw', '15vw'],
    'fallback' => 'crop-512w-16:10',
    'preserve_aspect_ratio' => 16/10
  ]) ?>
  <p class="<?=$_bem->element('slide-content');?>"><?= $item['content']; ?></p>
</a>
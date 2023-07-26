<?php $content_group = $_block; ?>
<?= hd_component('content-group', [
  'text' => $content_group['text'],
  'modifier' => $content_group['text_on_the_right'] ? 'swap' : 'normal',
  'content' => responsive_image($content_group['image'], [
    'class' => 'content-group__image',
    'sizes' => ['crop-704w-2:1', 'crop-1408w-2:1'],
    'display_sizes' => ['tablet'=> '100vw', '50vw'],
    'fallback' => 'crop-704w-2:1',
  ]),
]); ?>

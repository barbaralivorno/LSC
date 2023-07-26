<?php $accordion = $_block; ?>
<?= hd_component('accordion', [
  'class' => $_bem->block(),
  'items' => $accordion['items'],
  'item_view' => 'blocks/accordion/item',
  'item_options' => [
    'class_container' => $_bem->element('item-container'),
    'class_content' => $_bem->element('item-content'),
    'class_content_text' => $_bem->element('item-content-text'),
    'class_title' => $_bem->element('item-title'),
  ]
]) ?>

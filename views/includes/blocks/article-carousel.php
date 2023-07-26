<?= hd_component('slider', [
  'parent' => 'article-carousel',
  'class' => $_bem->block(),
  'items' => $_block['items'],
  'item_view' => 'blocks/article-carousel/item',
  'counter' => ['leading_zeros' => 1],
]) ?>
<?= block('includes/blocks/heading', [
  'parent' => 'article-carousel__slider-slide',
  '_block' => $item['heading'],
]) ?>
<?= hd_component('media', [
  'type' => 'image',
  'resource' => $item['image'],
  'class' => $_bem->element('slide-image'),
  'sizes' => ['crop-864w-6:1', 'crop-1728w-6:1', 'crop-425w-8:3', 'crop-850w-8:3'],
  'display_sizes' => ['phone' => '76vw', '67vw'],
  'fallback' => 'crop-864w-6:1',
  'fit' => 'cover'
]) ?>
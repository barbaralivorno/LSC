<article class="<?= $item_options['class_container']; ?>">
  <?= hd_component('title', [
    'text' => $item['title'],
    'class' => $item_options['class_title'],
    'modifier' => 'lg',
    'level' => 3
  ]); ?>
  <div class="<?= $item_options['class_content']; ?>">
    <?= hd_component('rich-text', [
      'class' => $item_options['class_content_text'],
      'content' => $item['content'],
    ]) ?>
  </div>
</article>
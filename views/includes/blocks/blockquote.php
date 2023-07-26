<?php $blockquote = $_block; ?>
  <?= hd_component('blockquote', [
  'class' => $_bem->block(),
  'text' => $blockquote['text'], 
  'source' => !empty($blockquote['source']) ? $blockquote['source'] : null,
  'modifier' => ['xl', 'no-close-quote'],
  ]) ?>
<?php 
  global $post;
  $footer_cta = get_field('footer_cta');
?>

<?php if($footer_cta['title'] && $footer_cta['cta']): ?>
  <section class="<?= $_bem->block() ?>">
    <div class="<?= $_bem->element('container') ?>">
      <div class="<?= $_bem->element('left-column') ?>">
        <?= hd_component('title', [
          'class' => $_bem->element('title'),
          'modifier' => 'lg',
          'text' => $footer_cta['title'],
        ]) ?>
        <p class="<?= $_bem->element('text') ?>"><?= $footer_cta['text'] ?></p>
      </div>
      <?= hd_component('button', [
        'class' => $_bem->element('button'),
        'modifier' => ['filled', 'orange'],
        'link' => $footer_cta['cta'],
      ]) ?>
    </div>
  </section>
<?php endif; ?>
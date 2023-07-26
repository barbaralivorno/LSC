<?php 
  $connect_with_us = get_field('connect_with_us');
?>
<section class="connect-with-us">
  <div class="connect-with-us__left-column">
    <?= hd_component('title', [
      'modifier' => 'xxl',
      'class' => "connect-with-us__title",
      'text' => $connect_with_us['title'],
    ]) ?>
    <?php if (!empty($connect_with_us ['short_description'])): ?>
      <div class="connect-with-us__short-description">
        <?= $connect_with_us ['short_description'] ?>
      </div>
    <?php endif ?>
  </div>
  <div class="connect-with-us__right-column">
    <?= hd_component('media', [
      'type' => 'image',
      'resource' => $connect_with_us['background_image'],
      'class' => "connect-with-us__background-image",
      'sizes' => ['crop-767w-1:3', 'crop-960w-8:9'],
      'display_sizes' => ['phone' => '50vw'],
      'fallback' => 'crop-1440w-8:9',
      'background' => true,
      'fit' => 'cover',
    ]) ?>
    <form class="connect-with-us__form" action="<?= hd_api_url('contact') ?>" method="POST">
      <?= hd_nonce_field('contact') ?>
      <?= component('field', [
        'name' => 'name',
        'class' => 'connect-with-us__form-field-name',
        'required' => true,
        'placeholder' => 'Name'
      ]) ?>
        <?= component('field', [
        'name' => 'email',
        'class' => 'connect-with-us__form-field-email',
        'required' => true,
        'placeholder' => 'Email'
      ]) ?>
      <?= component('field', [
        'name' => 'comment',
        'class' => 'connect-with-us____form-project-details',
        'type' => 'textarea',
        'rows' => 4,
        'maxwords' => 500,
        'required' => true,
        'placeholder' => 'Project details',
      ]) ?>
      <?= hd_component('button', [
        'class' => 'connect-with-us__form-submit',
        'modifier' => ['filled', 'orange'],
        'text' => '<span>Submit</span>',
        'type' => 'submit',
      ]) ?>
    </form>
  </div>
</section>
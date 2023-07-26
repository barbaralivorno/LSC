<?php
// Get Events
$events = hd_get_latest_events($_block['quantity'], $_block['order']);
?>

<?= hd_component('slider', [
  'parent' => 'event-slider',
  'class' => $_bem->block(),
  'items' => $events,
  'item_view' => 'blocks/event-slider/item',
]) ?>
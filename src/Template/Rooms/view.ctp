<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    
    <h3>Room <?= h($room->id) ?></h3>
    
    
    <table class="vertical-table">
    <table>
        <?php foreach ($showtimes as $showtime): ?>
        <tr>
            <td><?= $showtime->movie->name?></td>
            <td><?= h($showtime->start->format('H:i'))?></td>
            <td><?= h($showtime->end->format('H:i'))?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <div class="related">
        <h4><?= __('Related Showtimes') ?></h4>
        <?php if (!empty($room->showtimes)): ?>
        <table cellpadding="0" cellspacing="0">
            
            <table>
            
            </table>
            <?php foreach ($room->showtimes as $showtimes): ?>
            <tr>
                <td><?= h($showtimes->id) ?></td>
                <td><?= h($showtimes->movie_id) ?></td>
                <td><?= h($showtimes->room_id) ?></td>
                <td><?= h($showtimes->start) ?></td>
                <td><?= h($showtimes->end) ?></td>
                <td><?= h($showtimes->created) ?></td>
                <td><?= h($showtimes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Showtimes', 'action' => 'view', $showtimes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Showtimes', 'action' => 'edit', $showtimes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Showtimes', 'action' => 'delete', $showtimes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $showtimes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <?php endif; ?>
    </div>
</div>

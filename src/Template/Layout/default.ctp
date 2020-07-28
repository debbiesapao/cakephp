<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'PHONEBOOK';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('bootstrap') ?>
    <?= $this->Html->script('jquery-3.5.1') ?>
    <?= $this->Html->script('bootstrap') ?>
    <?php echo $this->Html->css('base.css') ?>
    <?php echo $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>PHONEBOOK</span>&nbsp&nbsp</a>
        </div>
        <div class="top-nav-links">
            <a target="_blank" rel="noopener" href=""><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?>&nbsp</a>
            <a target="_blank" rel="noopener" href=""><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?>&nbsp</a>
            <a target="_blank" rel="noopener" href=""><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?>&nbsp</a>
            <a target="_blank" rel="noopener" href=""><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?>&nbsp</a>
            <a target="_blank" rel="noopener" href=""><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?>&nbsp</a>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>

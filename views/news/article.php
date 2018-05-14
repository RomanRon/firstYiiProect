<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
	<div class="new">
		<img src="http://wildwildworld.net.ua/sites/default/files/styles/thic_photo/public/images/cherniy-grif3.jpg?itok=dik8NIC7" alt="шьп">
		<h1><?= Html::encode($item->title) ?></h1>
		<p><?= Html::encode($item->full_text) ?></p>
		<?php if (!empty($item->user)): ?>
			<h5 class="user_id">Автор статті: <span><?= Html::encode($item->user->username) ?></span></h5>
		<?php endif; ?>
	</div>
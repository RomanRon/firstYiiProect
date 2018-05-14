<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>News</h1>
<div class="grig">
	<?php foreach ($rows as $row): ?>
		<article class="article">
			<h3><?= Html::a($row->title, ['article', 'id' => $row->id]) ?></h3>
			<p><?= Html::encode($row->intro_text) ?></p>
			<?php if (!empty($row->user)): ?>
				<h5 class="user_id">Автор статті: <span><?= Html::encode($row->user->username) ?></span></h5>
			<?php endif; ?>
		</article>
	<?php endforeach; ?>
</div>
<?= LinkPager::widget([
'pagination' => $pagination
]) ?>
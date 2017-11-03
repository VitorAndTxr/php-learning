<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	<ul>
		<?php foreach ($tasks as $task) : ?>
			<li>
				<?php if ($task->completed) : ?>
					<strike><?= $task->description; ?></strike>
				<?php else: ?>
					<?= $task->description; ?>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
	<h1>heuhauehuae</h1>
</body>
</html>
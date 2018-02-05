<?php if (count($errors>0)): ?>

	<div class="red-text">
			<?php foreach ($errors as $error): ?>
				<p><?php echo $error; ?></p>
			<?php endforeach ?>
	</div>

<?php endif ?>
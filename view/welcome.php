<main>
	
	<div align="center">
		<h1>WELCOME</h1>
		<div>
			<?php foreach ($data as $m) { ?>

			<div class="message">
				<h3><?php echo $m->message_text; ?></h3>
				<p>Ecrit le <?php echo $m->message_date; ?> par <?php echo $m->message_author; ?></p>
			</div>

			<?php } ?>
		</div>
	</div>

</main>
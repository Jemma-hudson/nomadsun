<section class="hero  min-vh-100 cover bg-center flex items-center justify-center" style="
	<?php if(get_field('hero_image')): ?>
	background-image: url(<?php the_field('hero_image'); ?>);
	<?php endif; ?>		
	">
		<div class="hero-content white tc ">

			<h1 class="hero-heading archivo b mt0 mb3 ttu"> <?php the_title(); ?> </h1>

			<?php if(get_field('subhead')): ?>
			<p class="hero-subhead tenor mb6 mt0 white ttu "><?php the_field('subhead'); ?></p>
			<?php endif; ?>	

			<?php if(get_field('date')): ?>
			<p class="date archivo f6 white ttu ma0 tracked"><?php
				echo date("F Y", strtotime(get_field('date')))	;
			?></p>		
			<?php endif; ?>	


		</div>
	</section>
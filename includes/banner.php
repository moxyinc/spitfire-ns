<?php $banner = get_field( 'banner' ); ?>
<?php if ( $banner ) : ?>
	<div class="bg-white bg-opacity-80 absolute z-10  px-6 py-3 text-dark rounded-br-2xl rounded-tl-2xl">
		<h1 class="font-maple"><?php the_field( 'banner' ); ?></h1>
	</div>
<?php endif; ?>
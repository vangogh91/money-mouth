<?php
$banner_text = get_field("banner_text");
$form_shortcode = get_field("form_shortcode");
$blockClass = (isset($block['className'])) ? $block['className'] : "";
?>
<section class="banner-component <?= $blockClass; ?>">
	<div class="banner-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-component-bg.png);">
		<img src="<?php echo get_template_directory_uri(); ?>//assets/images/banner-component-bg.png" />
	</div>
	<div class="component-container">
		<div class="inner-component">
			<div class="banner-heading-form">
				<div class="text">
					<?= $banner_text; ?>
				</div>
				<div class="wrap-form">
					<?= $form_shortcode; ?>
				</div>
				<div class="wrap-store-buttons">

					<?php if( have_rows('cta_button_1') ): ?>
						<?php while( have_rows('cta_button_1') ): the_row();
							// Get sub field values.
							$button_label = get_sub_field('button_label');
							$button_url = get_sub_field('button_url');
							?>
							<?php if($button_label): ?>
							<a class="mm-button gold-btn" href="<?= $button_url; ?>"><?= $button_label; ?></a>
							<?php endif; ?>

						<?php endwhile; ?>
					<?php endif; ?>

					<?php if( have_rows('cta_button_2') ): ?>
						<?php while( have_rows('cta_button_2') ): the_row();
							// Get sub field values.
							$button_label = get_sub_field('button_label');
							$button_url = get_sub_field('button_url');
							?>
							<?php if($button_label): ?>
							<a class="mm-button gold-btn" href="<?= $button_url; ?>"><?= $button_label; ?></a>
							<?php endif; ?>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>

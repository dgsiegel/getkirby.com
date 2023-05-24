<style>
.v4-layout-columns {
	display: grid;
	gap: var(--spacing-6);
	grid-template-areas:
		"video"
		"teaser"
		"dropdown"
}

@media screen and (min-width: 32rem) {
	.v4-layout-columns {
		grid-template-columns: 2fr 3fr;
		grid-template-areas:
			"video video"
			"dropdown teaser"
	}
}

@media screen and (min-width: 70rem) {
	.v4-layout-columns {
		grid-template-columns: 1fr 3fr;
		grid-template-areas:
			"teaser video"
			"dropdown video"
	}
	.v4-layout-video {
		padding: var(--spacing-12);
	}
}
</style>

<div class="v4-layout-columns">
	<div class="release-text-box" style="grid-area: teaser">
		<?php snippet('templates/release-40/teaser', ['section' => $section]) ?>
	</div>

	<figure class="v4-layout-video release-padded-box bg-dark color-white grid place-items-center" style="grid-area: video">
		<video controls class="rounded shadow-xl" style="width: 100%">
			<source src="<?= $section->file('change-layout-1.mp4')->url() ?>" type="video/mp4" autoplay>
		</video>
	</figure>

	<div class="release-padded-box bg-light" style="grid-area: dropdown">
		<img src="<?= $section->image('copy-and-paste-dropdown.png')->url() ?>" class="rounded shadow-xl">
	</div>
</div>
<layouts.Common
	title="PHP via Vite">
	<div class="flex flex-col items-center gap-10 text-2xl">
		<common.Nav />

		<div class="flex flex-col items-center">
			<?= VITE_NAME; ?>

			<HTML.Element
				element="div"
				data-info="Dynamic Element"
				...="<?= [
							'data-info2' => 'with spreaded props',
							'class' => '-mt-2 text-5xl leading-none font-light',
						]; ?>">
				+
			</HTML.Element>

			<img src="%BASE%/logo.svg" class="w-20" />
		</div>

		<div id="repos" class="text-base flex gap-10"></div>
	</div>

	<script src="/src/scripts/repos.ts" type="module"></script>
</layouts.Common>

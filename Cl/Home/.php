<?

class Cl_Home
	{
use Page_Content;

		function __construct()
			{

				?>
				<div id='top'>
					<?

					new Control_Slideshow([
							'transitionClass' => 'Animation_Slide',
							'transitionIni' => [
									'from' => 1,
									'to' => 0,
									'speed' => 0.001,
									'acceleration' => 0.001,
								],
							'transitionBackIni' => [
									'from' => -1,
								],
							'transitionResetIni' => [
									'from' => 0,
									'to' => 1,
								],
							'drawButtons' => false,
							'delay' => 5000,
							'arrows' => true,
							'slides' => function() {
								foreach (Slideshow_Data::i()->data() as $t)
									{
										?><div>
											<div class='image-crop'><?
										Slideshow_Data::i()->table->form()->fields['image']->displayContent([
											'value' => $t['image'],
											'fullSize' => true
												]);
										?>
										</div>
										<div class='text'>
											<div class='title'><?=$t['title'] ?></div>
											<div class='subtitle'><?=$t['subtitle'] ?></div>
											<div class='description'><?=$t['text'] ?></div>
										</div>
										</div><?
									}
							}

						]);

					?>
					<div class='overlay'>
						<div class='left'>
							<a id='logo' link='/'>Concretelab</a>
							<div class='city'>moscow</div>
							<a class='phone' href="tel:<?=lang('phone') ?>"><?=lang('phone') ?></a>
						</div>
						<div class='right'>
						<?
							(new Menu)->draw('main');
							new Language_Switcher;
						?>
						</div>
					</div>
				</div>
				<div id='types'>
					<div class='title'><?=lang('Color solutions') ?></div>
					<div class='items'>
						<div>
							<label><?=lang('Gray') ?></label>
							<p><?=text('Gray details') ?></p>
						</div>
						<div>
							<label><?=lang('White') ?></label>
							<p><?=text('White details') ?></p>
						</div>
						<div>
							<label><?=lang('Sand') ?></label>
							<p><?=text('Sand details') ?></p>
						</div>
						<div>
							<label><?=lang('Black') ?></label>
							<p><?=text('Black details') ?></p>
						</div>
					</div>
				</div>
				<div id='extra'>
					<label><?=lang('Extras') ?></label>
					<div class='items'>
						<div>
							<label><?=lang('Shipping') ?></label>
							<p><?=text('Shipping details') ?></p>
						</div>
						<div>
							<label><?=lang('Installation') ?></label>
							<p><?=text('Installation details') ?></p>
						</div>
					</div>
				</div>
				<?
			}

	}

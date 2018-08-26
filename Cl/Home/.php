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
							'transitionResetIni' => [
									'from' => 0,
									'to' => 1,
								],
							'slides' => Slideshow_Data::i()->data(),
							'drawButtons' => false,
							'delay' => 2000,
							'arrows' => true
						]);

					?>
					<div class='top-right'>
					<?
						(new Menu)->draw('main');
						new Language_Switcher;
					?>
					</div>
					<div class='top-left-corner'>
						<a id='logo' link='/'>Concretelab</a>
						<div class='city'>moscow</div>
						<a class='phone' href="tel:<?=lang('phone') ?>"><?=lang('phone') ?></a>
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
							<label>Доставка</label>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div>
							<label>Монтаж</label>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<?
			}

	}

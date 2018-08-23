<?

class Cl_Page extends Page
	{
use Ini;

		function drawBody()
			{

				$this->drawContent();

				?>
				<div class='footer'>
					<div class='white'>
						<div class='left'>
							<label>Что мы предлагаем?</label>
							<p>Кашпо для растений с двусторонней LED-подсветкой: декоративное решение для сада или лофт интерьера, для приусадебного участка и зонирования пространства, воплощающее эстетику и функциональность промышленного дизайна. Кашпо выполнено из декоративного бетона в стиле «лофт». Мягкая двусторонняя подсветка кашпо преобразит ваше пространство в темное время суток.</p>
						</div>
						<div>
							<div class='contacts'>
								<label>Добро пожаловать:</label>
								<div class='addr'><img src='<?=_here() ?>/addr.png'>Россия, Москва, ул. Складочная 1/10</div>
								<div class='phone'><img src='<?=_here() ?>/phone.png'><?=lang('phone') ?></div>
								<div class='email'><img src='<?=_here() ?>/email.png'><a href="mailto:info@concretelab.ru">info@concretelab.ru</a></div>
							</div>
						</div>
					</div>
					<div class='gray'>
						<div>Оригинальная авторская разработка concretelab.ru защищена патентом №XXXXXX от XX.XX.XXXX</div>
						<img src='<?=_here() ?>/up.png'>
					</div>
				</div>
				<?

		 	}

	}

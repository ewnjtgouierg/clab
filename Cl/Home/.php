<?

class Cl_Home
	{
use Page_Content;

		function __construct()
			{
				?>
				<div id='slideshow'>
					<div class='slide'>
						<div class='top-left-corner'>
							<a id='logo' link='/'>Concretelab</a>
							<div class='city'>moscow</div>
							<a class='phone' href="tel:<?=lang('phone') ?>"><?=lang('phone') ?></a>
						</div>
						<?
							(new Menu)->draw('top');
						?>
					</div>
					<div class='text'>
						<h1>Городское освещение</h1>
						<h2>комплексные решения</h2>
						Класс защиты встроенных светодиодных элементов IP65 соответствует требованиям, предъявляемым к уличным светильникам. Предлагаемое решение дополнит основное освещение локальными световыми и цветовыми пятнами. Массивность конструкции позволяет зонировать пространство в соответствии с потребностями заказчика.
					</div>
				</div>
				<div id='types'>
					<div>
						<label>Серый</label>
						<p>Изделие изготовлено из серого цемента</p>
					</div>
					<div>
						<label>Белый</label>
						<p>Изделие изготовлено с применением белого цемента и белых минеральных наполнителей.</p>
					</div>
					<div>
						<label>Песчаный</label>
						<p>Изделие изготовлено с применением белого цемента и природных бежевых наполнителей.</p>
					</div>
					<div>
						<label>Черный</label>
						<p>Изделие изготовлено из серого цемента с добавлением минерального наполнителя в смесь</p>
					</div>
				</div>
				<div id='extra'>
					<label>Дополнительные услуги</label>
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

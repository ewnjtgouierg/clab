Cl_Home_Slideshow = Class.extend
	({
		_init: function()
			{
				Events.i().add('responsiveNarrow', 'change', this.onResponsiveChange);
			},
		onResponsiveChange: function(ini)
			{
				var initial = typeof _this.narrow == 'undefined';
				_this.narrow = ini.eventIni.narrow;
				if (!initial)
					{
						delete _this.slideshow._origionalSize;
						_this.setSize();
					}
			},
		prepare: function(ini)
			{
				_this.slideshow = ini.event.object;
				_this.setSize(true);
			},
		setSize: function(initial)
			{
				_this.unlockSize(_this.slideshow.slidesContainer);
				Css.i().setClass(_this.slideshow.slidesContainer, 'slides-absolute', false);
				var activeSlide = _this.slideshow.slides[_this.slideshow.index];
				var firstImage = activeSlide.querySelector('IMG');
				firstImage.style.height = '';
				_this.unlockSize(activeSlide);
				_this.lockSize(_this.slideshow.slidesContainer, _this.activeSlide);
				for (var i=0; i<_this.slideshow.slides.length; i++)
					{
						var img = _this.slideshow.slides[i].querySelector('IMG');
						img.style.height = '';
						_this.lockSize(_this.slideshow.slides[i], _this.slideshow.slidesContainer);
						img.style.height = Math.max(img.offsetHeight, firstImage.offsetHeight) + 'px';
					}
				Css.i().setClass(_this.slideshow.slidesContainer, 'slides-absolute', true);
			},
		unlockSize: function(el)
			{
				el.style.width = 'auto';
				el.style.height = 'auto';
			},
		lockSize: function(el, proto)
			{
				if (!proto) proto = el;
				el.style.width = proto.offsetWidth + 'px';
				el.style.height = proto.offsetHeight + 'px';
			}
	});

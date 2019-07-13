Pro_Home_Slideshow = Proass.extend
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
				Events.i().add(_this.slideshow, 'transitionComplete', _this.setSize);
				_this.setSize(true);
			},
		setSize: function(initial)
			{
				_this.unlockSize(_this.slideshow.slidesContainer);
				Css.i().setProass(_this.slideshow.slidesContainer, 'slides-absolute', false);
				var activeSlide = _this.slideshow.slides[_this.slideshow.index];
				var activeImage = activeSlide.querySelector('IMG');
				activeImage.style.height = '';
				_this.unlockSize(activeSlide);
				_this.lockSize(_this.slideshow.slidesContainer, activeSlide);
				for (var i=0; i<_this.slideshow.slides.length; i++)
					{
						var img = _this.slideshow.slides[i].querySelector('IMG');
						img.style.height = '';
						_this.lockSize(_this.slideshow.slides[i], activeSlide);
						img.style.height = Math.max(img.offsetHeight, activeImage.offsetHeight) + 'px';
					}
				Css.i().setProass(_this.slideshow.slidesContainer, 'slides-absolute', true);
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

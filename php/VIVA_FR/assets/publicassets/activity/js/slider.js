(function($) {
    $.extend($.fn, {
        skySlider: function(options) {
            if (!this.length) {
                if (options && options.debug && window.console) {
                    console.warn("Nothing selected, return nothing.");
                }
                return;
            }
            var plgSlider = $.data(this[0], "skySlider");
            if (plgSlider) {
                return plgSlider;
            }
            options = options || {};

            plgSlider = new slider(options, this[0]);
            $.data(this[0], "skySlider", plgSlider);

            return plgSlider;
        }
    });
    var slider = function(options, container) {
        this.namespace = "plgSlider-" + (+new Date());
        this.settings = $.extend(true, {}, slider.defaults, options);
        this.container = container;
        this.init();
    };
    /**************************************************************************/
    $.extend(slider, {
        defaults: {
            interval: 3000,
            carousel: false,
            duration: 500,
            items: 1,
            loop: true,
            autoplay: false,
            callback: function() {}
        },
        prototype: {
            init: function() {
                this.container = $(this.container);
                this.viewPort = this.container.find('.slider_list');
                this.slides = this.container.find('.slider_item');
                this.slideItemCount = this.slides.length;
                /*this.slideItemWidth = 100 / this.settings.items;*/
                this.slideSetsCount = Math.ceil(this.slideItemCount / this.settings.items);
                this.currentSlideSets = myNum;
                this.isAnimated = false;

                this.controls = {
                    bullets: this.createBullets(this.container),
                    prev: this.container.find('.slider_arrow__left'),
                    next: this.container.find('.slider_arrow__right')
                };

                this.callback = $.Callbacks();
                this.callback.add(this.settings.callback);

                this.slides.width(this.slideItemWidth + '%');
                this.addHandlers();
                this.autoplay();
            },
            createBullets: function(container) {
                var $bulletContainer = $('<div/>', {
                    class: 'slider_control-nav'
                });
                for (var i = 0; i < this.slideSetsCount; i++) {
                    $bulletContainer.append($('<div/>', {
                        class: 'slider_control-nav-item'
                    }));
                }
                this.container.append($bulletContainer);
                var $bullets = $bulletContainer.children();
                $bullets.eq(this.currentSlideSets).addClass('is-active');
                return $bullets;
            },
            addHandlers: function() {
                var that = this;
                this.controls.next.on('click', function() {
                    that.currentSlideSets++;
                    that.setSlide();
                });
                this.controls.prev.on('click', function() {
                    that.currentSlideSets--;
                    that.setSlide();
                });
                this.controls.bullets.on('click', function() {
                    that.currentSlideSets = $(this).index();
                    that.setSlide();
                });
            },
            setSlide: function() {
                if (this.isAnimated) {
                    return false;
                }
                this.isAnimated = true;
                /* change rules on first/last item */
                if ((this.settings.loop && this.currentSlideSets < 0) ||
                    (!this.settings.loop && this.currentSlideSets > this.slideSetsCount - 1)) {
                    this.currentSlideSets = this.slideSetsCount -1;
                }
                if ((!this.settings.loop && this.currentSlideSets < 0) ||
                    (this.settings.loop && this.currentSlideSets > this.slideSetsCount - 1)) {
                    this.currentSlideSets = 0;
                }
                /* detect type */
                if (this.settings.carousel) {
                    /* carousel */
                    var translateStepValue = this.currentSlideSets * 100;
                    this.viewPort.css({
                        'transform': 'translateX(-'+translateStepValue+'%)'
                    });
                }else {
                    /* slider */
                    var that = this;
                    that.slides.hide();
                    for (var i=0; i < that.settings.items;i++){
                        that.slides.eq(that.currentSlideSets*that.settings.items + i).fadeIn();
                    };
                }
                this.controls.bullets.removeClass('is-active').eq(this.currentSlideSets).addClass('is-active');
                /*run callback*/
                this.callback.fire(this.currentSlideSets);

                setTimeout($.proxy(function() {
                    this.isAnimated = false;
                },this), this.settings.duration);
            },
            autoplay: function(){
                var that = this;
                if (that.settings.autoplay) {
                    var sliderInterval = setInterval(function() {
                        that.currentSlideSets++;
                        that.setSlide();
                        if (!that.settings.loop && that.currentSlideSets >= that.slideSetsCount - 1) {
                            clearInterval(sliderInterval);
                        }
                    }, that.settings.interval);
                }
            },
            getSlideSetsCount: function() {
                return this.slideSetsCount;
            }
        }
    });
}(jQuery));

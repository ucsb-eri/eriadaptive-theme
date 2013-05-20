(function ($) {

	$.fn.betterTip = function() {
		var that = this;

		function getTip() {
			var tip = $('<div />', {'class': 'tooltip'});

			tip.html($(this).attr('title'));

			tip.css({
				'position': 'absolute',
				'marginTop': '-30px'
			});

			return tip;
		}

		function showTip() {
			$(this).before(getTip.apply(this));
		}

		function hideTip() {
			$('.tooltip').remove();
		}

		this.bind('mouseover', showTip);

		this.bind('mouseout', hideTip);
	}

	var app = function() {
		app.Controller.setup();
	}
	var Model = function(map) {
		this.values = map;
		this.attributes = [];
		this.set = function(attr, val) {
			this.attributes[attr] = val;
			$(this).trigger('change');
			$(this).trigger('change:' + attr);
		};
		this.get = function(attr) {
			return this.attributes[attr];
		};
		this.listen = function() {
			$(this).bind('change:el', function() {
				var that = this;
				var el = this.get('el');
				el.attr({
					'title': that.values.full,
					'alt'  : that.values.full
				});
				el.betterTip();
			});
		};
		this.listen();
	}

	app.Collection = {
		map: [
			{
				'short': 'EE',
				'full': 'Earth Evolution'
			},
			{
				'short': 'ESS',
				'full': 'Earth System Science'
			},
			{
				'short': 'HI',
				'full': 'Human Impacts'
			},
			{
				'short': 'CS',
				'full': 'Environmental Information Management'
			},
			{
				'short': 'NH',
				'full': 'Natural Hazards'
			}
		],
		models: [],
		add: function(m) {
			this.models.push(m);
			$(this).trigger('change');
		}
	}

	app.Controller = {
		setup: function() {
			$('.quicktabs-wrapper .item-list li a').each(this.addTooltip);
		},
		addTooltip: function() {
			var shortName, i;
			shortName = $(this).text();
			for(i = 0; i < app.Collection.map.length; i++) {
				if(shortName == app.Collection.map[i].short) {
					var m = new Model(app.Collection.map[i]);
					m.set('el', $(this));
					app.Collection.add(m);
				}
			}
		}
	};

	$(app);
})(jQuery);

// define everything about the app
var app = {
	dom: {
		wrapper: '#wrapper'
	},
	util: {
		currentPage: ''
	},
	toBeCentered : ['*'],
	adaptedPage: [],
	// each fn is mapped to the hastag/link
	fn: {
		init: function (page, callback) {
			var callback = callback || function(){};
			// check if we need wrapper or flash-window (for 404 and 500 errors)
			var w  = $(app.dom.wrapper).length?app.dom.wrapper:"#flash-window";
			if (sKnife.contains(app.toBeCentered, page) || sKnife.contains(app.toBeCentered,'*')) {
				app.fn.vcenterLayout.call(this,window,w);
				$(window).resize(function(){
					app.fn.vcenterLayout.call(this,window,w);
				});
			} else {
				$(w).css({'margin-top': '0px'});
			}
			if (sKnife.contains(app.adaptedPage, page)) {
				app.fn.adaptLayout.call(this);
				$(window).resize(function(){
					app.fn.adaptLayout.call(this);
					
				});
			}
			// add
			callback.call(window);
		},
		vcenterLayout : function(parent, obj){
			var h = (($(parent).height()-$(obj).innerHeight())/2);
			$(obj).css({marginTop: (h<0?0:h)+"px"});
		},
		adaptLayout: function(){
			
		},
		loadContent: function(href,fn,obj) {
			var obj = obj || {};
			var jhxr = $.get(href,obj);
			if (typeof fn == 'object') {
				for (var k in fn) {
					jhxr[k](fn[k]);
				}
			} else if (fn !== void 0) {
				jhxr.success(fn);
			}
			
		}
	}
};
// config require js, see /vendor/config.js for more informations
requirejs.config({
	paths: rq.paths,
	baseUrl: window.location.hostname=="easy.local"?"/upless":"/",
	shim: rq.shim,
	deps: ["domReady!","domAttr","text"],
	callback: function(doc){
		domReady = doc;
	}
});
// start the app and play with jquery
require(['sknife','localscroll'], function (sKnife) {

	hljs.tabReplace = '    ';
	hljs.initHighlightingOnLoad();
	app.fn.init.call(window, app.currentPage);
	
	$(window).on({
		load: function() {
			$(window).trigger('hashchange');
		},
		hashchange: function(e){
			$('.current').removeClass('current');
			$(window.location.hash).next('pre').find('code').addClass('current');
		}
	});
	
	$('code').on('click',function(){
		window.location.hash = ($(this).parent('pre').prev('span').attr('id'));
		$('.current').removeClass('current');
		$(this).addClass('current');
	});
});

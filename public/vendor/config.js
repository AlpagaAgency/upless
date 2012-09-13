var rq = {
	paths: {
		// Utilitaries
			// routing
			'pathjs': 'vendor/util/pathjs/path.min',
			// dom + polyfills
			'domAttr': 'vendor/util/dom/checkdomattr',
			'domReady': 'vendor/util/dom/domready.min',
			'modernizr': 'vendor/util/modernizr/modernizr.min',
			// Loaders
			'pxloader': 'vendor/util/pxloader/PxLoader',
			'pxloaderImg': 'vendor/util/pxloader/PxLoaderImage',
			'pxloaderSound': 'vendor/util/pxloader/PxLoaderSound',
			'pxloaderVideo': 'vendor/util/pxloader/PxLoaderVideo',
			// helpers
			'sknife': 'vendor/util/swissknife/swissKnife.0.1.min',
			'underscore': 'vendor/util/underscore/underscore.1.3.3.min',
			// Editors
			'markitup': 'vendor/util/markitup/jquery.markitup',
			// Compilators
			'less' : 'vendor/util/less/less-1.3.0.min',
			// effects
			'skrollr' : 'vendor/util/skrollr/skrollr.min',
			'iscroll': 'vendor/util/iscroll/iscroll.4.2',
			// require plugins
			'text': 'vendor/util/require/text',
		// jQuery
			'utabs' : 'vendor/jquery/plugins/utabs/jquery.utabs-0.2.1.min' ,
			'jquery-ui' : 'vendor/jquery/plugins/jquery-ui/jquery-ui-1.8.20.custom.min' ,
			'scrollto': 'vendor/jquery/plugins/scrollto/jquery.scrollTo-min' ,
			'localscroll': 'vendor/jquery/plugins/scrollto/jquery.localScroll' ,
			'swipe' : 'vendor/jquery/plugins/swipe/swipe.min' ,
		// GUI
			//canvas
			'canvas-loader' : 'vendor/gui/canvas-loader/canvasloader.min',
			// templating
			'mustache' : 'vendor/gui/mustache/mustache',
		// Structure
			'backbone': 'vendor/struct/backbone/backbone.0.9.2.min'
	},
	shim: {
		'pathjs': {
			exports: 'Path'
        },
		'sknife': {
			exports: 'sKnife'
		},
		'underscore': {
			exports: '_'
		},
		'pxloaderImg':['pxloader'],
		'pxloaderSound':['pxloader'],
		'pxloaderVideo':['pxloader'],
		'markitup': ['jquery'],
		'utabs': ['jquery'],
		'jquery-ui': ['jquery'],
		'scrollto': ['jquery'],
		'localscroll': ['scrollto'],
		'swipe': ['jquery'],
		'backbone': ['underscore']
	}
};

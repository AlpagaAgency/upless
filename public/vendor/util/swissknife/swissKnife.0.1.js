// Swiss knife, helpfull functions for js
// by Frédéric Faltin
var sKnife = {
	each: function (obj, iterator, context) {
		// inspired by underscore.js
		var ArrayProto = Array.prototype, ObjProto = Object.prototype, FuncProto = Function.prototype, breaker = {}, 
		nativeForEach = ArrayProto.forEach, hasOwnProperty = ObjProto.hasOwnProperty;
		if (obj === null) return this;
		if (nativeForEach && obj.forEach === nativeForEach) {
			obj.forEach(iterator, context);
		} else if (!!(obj.length === 0 || (obj.length && obj.length.toExponential && obj.length.toFixed))) {
			for (var i = 0, l = obj.length; i < l; i++) {
				if (iterator.call(context, obj[i], i, obj) === breaker) return;
			}
		} else {
			for (var key in obj) {
				if (hasOwnProperty.call(obj, key)) {
					if (iterator.call(context, obj[key], key, obj) === breaker) return;
				}
			}
		};
		return this;
	},
	isArray: function(obj){
	return obj.toString() == '[object Array]';
	},
	isUndefined: function(obj) {
		return obj === void 0;
	},
	contains: function(arr,p_val) {
		var l = arr.length;
		for(var i = 0; i < l; i++) {
			if(arr[i] == p_val) {
				return true;
			}
		}
		return false;
	},
	extend: function(obj) {
		sKnife.each(Array.prototype.slice.call(arguments, 1), function(source) {
		  for (var prop in source) {
			obj[prop] = source[prop];
		  }
		});
		return obj;
	},
	ns: function (ns,ns_string) {
		var parent = ns;
		// force to be an array
		if (!sKnife.isArray(ns_string)) ns_string = [ns_string];
		sKnife.each(ns_string,function(v){
			var parts = v.split('.'),  
				pl, i;  
			if (parts[0] == ns) {  
				parts = parts.slice(1);  
			}  
			pl = parts.length;  
			for (i = 0; i < pl; i++) {
				if (sKnife.isUndefined(parent[parts[i]])) {  
					parent[parts[i]] = {};  
				}  
				parent = parent[parts[i]];  
			}
		});
		return parent;
	},
	browser: function(){
		var ua = navigator.userAgent;
		var 
			chrome = /(chrome)[ \/]([\w.]+)/,
			rwebkit = /(webkit)[ \/]([\w.]+)/,
			ropera = /(opera)(?:.*version)?[ \/]([\w.]+)/,
			rmsie = /(msie) ([\w.]+)/,
			rfirefox = /(firefox)[ \/]([\w.]+)/,
			rmozilla = /(mozilla)(?:.*? rv:([\w.]+))?/,
			ua = (navigator.userAgent).toLowerCase()
		;

		var match = chrome.exec(ua) ||
			rwebkit.exec( ua ) ||
			ropera.exec( ua ) ||
			rmsie.exec( ua ) ||
			rfirefox.exec( ua ) ||
			ua.indexOf("compatible") < 0 && rmozilla.exec( ua ) ||
			[];
		return { name: match[1] || "", version: parseInt(match[2],10) || "0" };
	}
};

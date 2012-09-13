<?php 
	$theme = "default";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="icon" href="themes/<?php print $theme ?>/gfx/favicon.png" />
	<?php //if ($_SERVER['SERVER_ADDR'] == '127.0.0.1'): ?>
		<link rel="stylesheet/less" href="themes/<?php print $theme ?>/styles/main.less" />
		<script src="vendor/util/less/less-1.3.0.min.js"></script>
	<?php //else: ?>
		<!--<link rel="stylesheet" href="themes/default/styles/main.css" />-->
		<link rel="stylesheet" href="themes/default/styles/highlight.css" />
	<?php //endif;?>
	<script src="vendor/config.js"></script>
	<script src="vendor/gui/highlight/highlight.pack.js"></script>
	<script src="vendor/util/require/require-jquery.min.js" data-main="themes/<?php print $theme ?>/scripts/main"></script>
</head>
<body>
	<section class="blockContainer">
		<section class="blockLeft">
			<h1>UpLess: cross-browser css</h1>
			<h2>Block attributes</h2>

			<ul>					
				<li><a href="#opacity">.opacity</a></li>
				<li><a href="#inline-block">.inline-block</a></li>
				<li><a href="#background-size">.background-size</a></li>
				<li><a href="#box">.box</a></li>
				<li><a href="#hbox">.hbox</a></li>
				<li><a href="#vbox">.vbox</a></li>
				<li><a href="#box-flex">.box-flex</a></li>
				<li><a href="#box-pack">.box-pack</a></li>
				<li><a href="#box-align">.box-align</a></li>
				<li><a href="#border-radius">.border-radius</a></li>
			</ul>
			
			<h2>Gradients and colors manipulation</h2>
			<ul>
				<li><a href="#linear-gradient">.linear-gradient</a></li>
				<li><a href="#linear-bw-gradient">.linear-bw-gradient</a></li>
				<li><a href="#radial-gradient">.radial-gradient</a></li>
			</ul>

			<h2>Css transitions & motions</h2>

			<ul>					
				<li><a href="#transition">.transition</a></li>
				<li><a href="#transition-verbose">.transition-verbose</a></li>
				<li><a href="#transition-delay">.transition-delay</a></li>
				<li><a href="#transition-duration">.transition-duration</a></li>
				<li><a href="#animation">.animation</a></li>
				<li><a href="#animation-verbose">.animation-verbose</a></li>
				<li><a href="#animation-state">.animation-state</a></li>
				<li><a href="#animation-name">.animation-name</a></li>
				<li><a href="#animation-duration">.animation-duration</a></li>
				<li><a href="#animation-iteration">.animation-iteration</a></li>
				<li><a href="#animation-direction">.animation-direction</a></li>
				<li><a href="#animation-ease">.animation-ease</a></li>
			</ul>

			<h2>Shadows</h2>

			<ul>
				<li><a href="#inner-shadow">.inner-shadow</a></li>
				<li><a href="#box-shadow">.box-shadow</a></li>
				<li><a href="#drop-shadow">.drop-shadow</a></li>
			</ul>

			<h2>Columns</h2>

			<ul>
				<li><a href="#columns">.columns</a></li>
				<li><a href="#column-width">.column-width</a></li>
				<li><a href="#column-count">.column-count</a></li>
				<li><a href="#column-gap">.column-gap</a></li>
				<li><a href="#column-rule">.column-rule</a></li>
			</ul>

			<h2>Matrix</h2>

			<ul>
				<li><a href="#translate">.translate</a></li>
				<li><a href="#rotation">.rotation</a></li>
				<li><a href="#scale">.scale</a></li>
				<li><a href="#rotateX">.rotateX</a></li>
				<li><a href="#rotateY">.rotateY</a></li>
				<li><a href="#rotateZ">.rotateZ</a></li>
				<li><a href="#transform">.transform</a></li>
				<li><a href="#transform-3d">.transform-3d</a></li>
				<li><a href="#transform-origin">.transform-origin</a></li>
				<li><a href="#transform-3d-origin">.transform-3d-origin</a></li>
			</ul>

		</section>
		<section class="blockRight">
			
			<header>
				<h1>UpLess: the cross-browser css</h1>
			</header>
			<div class="blockElement">
				<header>
					<h1>Thanks</h1>
				</header>
				<p>Thanks to <a href="http://lesselements.com/">lesselements.com</a> and <a href="http://css3please.com/">css3please.com</a> which inspired me to build this cross-browser css.</p>
			</div>
			<div class="blockElement">
				<header>
					<h1>How to use it?</h1>
				</header>
				<p>You must use lesscss (<a href="http://lesscss.org/">Download here</a>) and include upless file into the main less file. That's it.</p>
			</div>
			<div class="blockElement">
				<header>
					<h1>Download</h1>
				</header>
				<p><em><a target="_blank" href="themes/default/styles/includes/up.less">No minified source</a> (10ko)</em></p>
			</div>
			<div class="blockElement">
				<header>
					<h1>Codes</h1>
				</header>
			<div class="blockElement">
				<header>
					<h1>Block attributes</h1>
				</header>
				
				<span id="opacity"></span>
				<pre><code class="css">
.opacity(@opacity: 0.5,@ieopacity: 50) {
	-moz-opacity: @opacity;
	-o-opacity: @opacity;
	-ms-opacity: @opacity;
	-khtml-opacity: @opacity;
	-webkit-opacity: @opacity;
	opacity: @opacity;
	filter: alpha(opacity=@ieopacity);
} 
				</code></pre>
				
				<span id="inline-block"></span>
				<pre><code class="css">
.inline-block {
	display: inline-block;
	*display: inline;
	zoom: 1;
	vertical-align: top;
} 
				</code></pre>
				
				<span id="background-size"></span>
				<pre><code class="css">
.background-size (@value: 100% 100%) {
  -webkit-background-size: @value;
		  background-size: @value;
} 
				</code></pre>
				<span id="box"></span>
				<pre><code class="css">
.box {
    display: -webkit-box;
    display: -moz-box;
    display: box;
}
				</code></pre>
				<span id="hbox"></span>
				<pre><code class="css">
.hbox {
    .box;
    -webkit-box-orient: horizontal;
    -moz-box-orient: horizontal;
    box-orient: horizontal;
}
				</code></pre>
				<span id="vbox"></span>
				<pre><code class="css">
.vbox {
    .box;
    -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
    box-orient: vertical;
}
				</code></pre>
				<span id="box-flex"></span>
				<pre><code class="css">
.box-flex(@ratio) {
    -webkit-box-flex: @ratio;
    -moz-box-flex: @ratio;
    box-flex: @ratio;
}
				</code></pre>
				<span id="box-pack"></span>
				<pre><code class="css">
.box-pack(@pack) {
    -webkit-box-pack: @pack;
    -moz-box-pack: @pack;
    box-pack: @pack;
}
				</code></pre>
				<span id="box-align"></span>
				<pre><code class="css">
.box-align(@align) {
    -webkit-box-align: @align;
    -moz-box-align: @align;
    box-align: @align;
}
				</code></pre>
				
				<span id="border-radius"></span>
				<pre><code class="css">
.border-radius(@radius: 2px) {
	-webkit-border-radius: @radius;
	-moz-border-radius: @radius;
	border-radius: @radius;
	-moz-background-clip: padding;
	-webkit-background-clip: padding-box; 
	background-clip: padding-box;
} 
				</code></pre>
				
			</div>
			<div class="blockElement">
				<header>
					<h1>Gradients and colors manipulation</h1>
				</header>
				<span id="linear-gradient"></span>
				<pre><code class="css">
.linear-gradient(@color: #F5F5F5, @start: #EEE, @stop: #FFF) {
	background: @color;
	background: -webkit-gradient(linear,
			left bottom,
			left top,
			color-stop(0, @start),
			color-stop(1, @stop));
	background: -ms-linear-gradient(bottom,
				@start,
				@stop);
	background: -moz-linear-gradient(center bottom,
				@start 0%,
				@stop 100%);
} 
				</code></pre>
				<span id="linear-bw-gradient"></span>
				<pre><code class="css">
.linear-bw-gradient(@color: #F5F5F5, @start: 0, @stop: 255) {
	background: @color;
	background: -webkit-gradient(linear,
				left bottom,
				left top,
				color-stop(0, rgb(@start,@start,@start)),
				color-stop(1, rgb(@stop,@stop,@stop)));
	background: -ms-linear-gradient(bottom,
				rgb(@start,@start,@start) 0%,
				rgb(@start,@start,@start) 100%);
	background: -moz-linear-gradient(center bottom,
				rgb(@start,@start,@start) 0%,
				rgb(@stop,@stop,@stop) 100%);
} 
				</code></pre>
				<span id="radial-gradient"></span>
				<pre><code class="css">
.radial-gradient(@color: #F5F5F5, @start: #EEE, @stop: #FFF) {
	background: @color;
	background: -webkit-gradient(radial,
			left bottom,
			left top,
			color-stop(0, @start),
			color-stop(1, @stop));
	background: -ms-radial-gradient(bottom,
				@start,
				@stop);
	background: -moz-radial-gradient(center center,
				@start 0%,
				@stop 100%);
} 
				</code></pre>

			</div>
			<div class="blockElement">
				<header>
					<h1>Css transitions & motions</h1>
				</header>
				
				<span id="transition"></span>
				<pre><code class="css">
.transition(@val: 0.2s all ease-out) {
	-webkit-transition: @val;
	-moz-transition: @val;
	transition: @val;
} 
				</code></pre>
				
				<span id="transition-verbose"></span>
				<pre><code class="css">
.transition-verbose(@duration:0.2s, @attr: all, @ease:ease-out) {
	-webkit-transition: @attr @duration @ease;
	-moz-transition: @attr @duration @ease;
	transition: @attr @duration @ease;
} 
				</code></pre>
				
				<span id="transition-delay"></span>
				<pre><code class="css">
.transition-delay(@delay: 1s) {
	-webkit-transition-delay: @delay;
	-moz-transition-delay: @delay;
	transition-delay: @delay;
} 
				</code></pre>
				<span id="transition-duration"></span>
				<pre><code class="css">
.transition-duration(@duration: 0.2s) {
	-moz-transition-duration: @duration;
	-webkit-transition-duration: @duration;
	transition-duration: @duration;
} 
				</code></pre>
				
				<span id="animation"></span>
				<pre><code class="css">
.animation(@val) {
	-webkit-animation: @val;
	-moz-animation: @val;
	-o-animation: @val;
	animation: @val;
} 
				</code></pre>
				<span id="animation-verbose"></span>
				<pre><code class="css">
.animation-verbose(@name, @duration:5s, @ease: linear, @iteration:infinite, @direction: normal) {
  -webkit-animation: @name @duration @ease @iteration @direction;
	 -moz-animation: @name @duration @ease @iteration @direction;
	   -o-animation: @name @duration @ease @iteration @direction;
		  animation: @name @duration @ease @iteration @direction;
} 
				</code></pre>
				<span id="animation-state"></span>
				<pre><code class="css">
.animation-state(@state) {
	-webkit-animation-play-state:@state;
	-moz-animation-play-state:@state;
	-o-animation-play-state:@state;
	animation-play-state:@state;
} 
				</code></pre>
				<span id="animation-name"></span>
				<pre><code class="css">
.animation-name(@name) {
   -webkit-animation-name: @name;
   -moz-animation-name: @name;
   -o-animation-name: @name;
   animation-name: @name;
} 
				</code></pre>
				<span id="animation-duration"></span>
				<pre><code class="css">
.animation-duration(@duration) {
   -webkit-animation-duration: @duration;
   -moz-animation-duration: @duration;
   -o-animation-duration: @duration;
   animation-duration: @duration;
} 
				</code></pre>
				<span id="animation-iteration"></span>
				<pre><code class="css">
.animation-iteration(@iteration) {
   -webkit-animation-iteration-count: @iteration;
   -moz-animation-iteration-count: @iteration;
   -o-animation-iteration-count: @iteration;
   animation-iteration-count: @iteration;
} 
				</code></pre>
				<span id="animation-direction"></span>
				<pre><code class="css">
.animation-direction(@direction) {
   -webkit-animation-direction: @direction;
   -moz-animation-direction: @direction;
   -o-animation-direction: @direction;
   animation-direction: @direction;
} 
				</code></pre>
				<span id="animation-ease"></span>
				<pre><code class="css">
.animation-ease(@ease) {
   -webkit-animation-timing-function: @ease;
   -moz-animation-timing-function: @ease;
   -o-animation-timing-function: @ease;
   animation-timing-function: @ease;
} 
				</code></pre>
			</div>
			<div class="blockElement">
				<header>
					<h1>Shadows</h1>
				</header>
				
				<span id="inner-shadow"></span>
				<pre><code class="css">
.inner-shadow(@horizontal:0, @vertical:1px, @blur:2px, @alpha: 0.4) {
	-webkit-box-shadow: inset @horizontal @vertical @blur rgba(0, 0, 0, @alpha);
	-moz-box-shadow: inset @horizontal @vertical @blur rgba(0, 0, 0, @alpha);
	-o-box-shadow: inset @horizontal @vertical @blur rgba(0, 0, 0, @alpha);
	box-shadow: inset @horizontal @vertical @blur rgba(0, 0, 0, @alpha);
} 
				</code></pre>
				
				<span id="box-shadow"></span>
				<pre><code class="css">
.box-shadow(@arguments) {
	-webkit-box-shadow: @arguments;
	-moz-box-shadow: @arguments;
	-o-box-shadow: @arguments;
	box-shadow: @arguments;
} 
				</code></pre>

				<span id="drop-shadow"></span>
				<pre><code class="css">
.drop-shadow(@x-axis: 0, @y-axis: 1px, @blur: 2px, @alpha: 0.1) {
	-webkit-box-shadow: @x-axis @y-axis @blur rgba(0, 0, 0, @alpha);
	-moz-box-shadow: @x-axis @y-axis @blur rgba(0, 0, 0, @alpha);
	-o-box-shadow: @x-axis @y-axis @blur rgba(0, 0, 0, @alpha);
	box-shadow: @x-axis @y-axis @blur rgba(0, 0, 0, @alpha);
} 
				</code></pre>
				</div>
				<div class="blockElement">
				<header>
					<h1>Columns</h1>
				</header>
				<span id="columns"></span>
				<pre><code class="css">
.columns(@colwidth: 250px, @colcount: 0, @colgap: 50px, @columnRuleColor: #EEE, @columnRuleStyle: solid, @columnRuleWidth: 1px) {
	-moz-column-width: @colwidth;
	-moz-column-count: @colcount;
	-moz-column-gap: @colgap;
	-moz-column-rule-color: @columnRuleColor;
	-moz-column-rule-style: @columnRuleStyle;
	-moz-column-rule-width: @columnRuleWidth;
	-webkit-column-width: @colwidth;
	-webkit-column-count: @colcount;
	-webkit-column-gap: @colgap;
	-webkit-column-rule-color: @columnRuleColor;
	-webkit-column-rule-style: @columnRuleStyle;
	-webkit-column-rule-width: @columnRuleWidth;
	column-width: @colwidth;
	column-count: @colcount;
	column-gap: @colgap;
	column-rule-color: @columnRuleColor;
	column-rule-style: @columnRuleStyle;
	column-rule-width: @columnRuleWidth;
}
				</code></pre>
				
				<span id="column-width"></span>
				<pre><code class="css">
.column-width(@colwidth: 250px, @colcount: 0, @colgap: 50px, @columnRuleColor: #EEE, @columnRuleStyle: solid, @columnRuleWidth: 1px) {
	-moz-column-width: @colwidth;
	-webkit-column-width: @colwidth;
	column-width: @colwidth;
}
				</code></pre>
				<span id="column-count"></span>
				<pre><code class="css">
.column-count(@colcount: 0) {
	-moz-column-count: @colcount;
	-webkit-column-count: @colcount;
	column-count: @colcount;
}
				</code></pre>
				
				<span id="column-gap"></span>
				<pre><code class="css">
.column-gap(@colgap: 50px) {
	-moz-column-gap: @colgap;
	-webkit-column-gap: @colgap;
	column-gap: @colgap;
}
				</code></pre>
				
				<span id="column-rule"></span>
				<pre><code class="css">
.column-rule(@columnRuleColor: #EEE, @columnRuleStyle: solid, @columnRuleWidth: 1px) {
	-moz-column-rule-color: @columnRuleColor;
	-moz-column-rule-style: @columnRuleStyle;
	-moz-column-rule-width: @columnRuleWidth;
	-webkit-column-rule-color: @columnRuleColor;
	-webkit-column-rule-style: @columnRuleStyle;
	-webkit-column-rule-width: @columnRuleWidth;
	column-rule-color: @columnRuleColor;
	column-rule-style: @columnRuleStyle;
	column-rule-width: @columnRuleWidth;
}
				</code></pre>
			</div>
			<div class="blockElement">
				 
				<header>
					<h1>Matrix</h1>
					<p><em>To complete with skew</em></p>
				</header>
				
				<span id="translate"></span>
				<pre><code class="css">
.translate(@x:0, @y:0) {
	-moz-transform: translate(@x, @y);
	-webkit-transform: translate(@x, @y);
	-o-transform: translate(@x, @y);
	-khtml-transform: translate(@x, @y);
	-ms-transform: translate(@x, @y);
	transform: translate(@x, @y);
	zoom: 1;
} 
				</code></pre>
				<span id="rotation"></span>
				<pre><code class="css">
.rotation(@deg:5deg){
	-webkit-transform: rotate(@deg);
	-moz-transform: rotate(@deg);
	-ms-transform: rotate(@deg);
	-o-transform: rotate(@deg);
	transform: rotate(@deg);
	zoom: 1;
} 
				</code></pre>
				<span id="scale"></span>
				<pre><code class="css">
.scale(@ratio:1.5){
	-webkit-transform:scale(@ratio);
	-moz-transform:scale(@ratio);
	-o-transform:scale(@ratio);
	-ms-transform:scale(@ratio);
	transform:scale(@ratio);
	zoom: 1;
} 
				</code></pre>
				
				<span id="rotateX"></span>
				<pre><code class="css">
.rotateX (@value: 180deg) {
	-webkit-transform: rotateX(@value); 
	-moz-transform: rotateX(@value);    
	-ms-transform: rotateX(@value);     
	transform: rotateX(@value);         
} 
				</code></pre>

				<span id="rotateY"></span>
				<pre><code class="css">
.rotateY (@value: 180deg) {
	-webkit-transform: rotateY(@value); 
	-moz-transform: rotateY(@value);    
	-ms-transform: rotateY(@value);     
	transform: rotateY(@value);         
} 
				</code></pre>
				
				<span id="rotateZ"></span>
				<pre><code class="css">
.rotateZ (@value: 180deg) {
	-webkit-transform: rotateZ(@value); 
	-moz-transform: rotateZ(@value);    
	-ms-transform: rotateZ(@value);     
	transform: rotateZ(@value);         
} 
				</code></pre>
				
				<span id="transform"></span>
				<pre><code class="css">
.transform (@value: rotate(5deg)) {
	-webkit-transform: @value;
	-moz-transform: @value;
	-o-transform: @value;
	transform: @value;
} 
				</code></pre>
				
				<span id="transform-3d"></span>
				<pre><code class="css">
.transform-3d (@perspective: 300, @backface: visible) {
	
	-webkit-perspective: @perspective; 
	-moz-perspective: @perspective;  
	-ms-perspective: @perspective;  
	perspective: @perspective;

	-webkit-backface-visibility: @backface;
	-moz-backface-visibility: @backface;
	backface-visibility: @backface;
	
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;
	
} 
				</code></pre>
				<span id="transform-origin"></span>
				<pre><code class="css">
.transform-origin (@origin: 50% 50%) {
	-webkit-transform-origin: @origin;
	-moz-transform-origin: @origin;
	-o-transform-origin: @origin;
	transform-origin: @origin;
} 
				</code></pre>
				
				<span id="transform-3d-origin"></span>
				<pre><code class="css">
.transform-3d-origin (@perspectiveorigin: 50% 50%) {
	-webkit-perspective-origin: @perspectiveorigin;
	-moz-perspective-origin: @perspectiveorigin;
	-ms-perspective-origin: @perspectiveorigin;
	perspective-origin:  @perspectiveorigin;
} 
				</code></pre>
			</div>
		</div>
		</section>
		<section id="test">test<section>
	</section>
</body>
</html>
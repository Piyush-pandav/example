<style>
div.fileinputs {
	position: relative;
}

div.fakefile {
	position: absolute;
	top: 0px;
	left: 0px;
	z-index: 1;
}

input.file {
	position: relative;
	text-align: right;
	-moz-opacity:0 ;
	filter:alpha(opacity: 0);
	opacity: 0;
	z-index: 2;
}
</style>
<div class="fileinputs">
	<input type="file" class="file" />
	<div class="fakefile">
		<input />
		<img src="search.gif" />
	</div>
</div>
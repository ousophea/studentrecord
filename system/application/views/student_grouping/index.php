<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>jQuery: Customizable layout using drag and drop (examples) - 2. Saving and loading items</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../devheart-examples.css" media="screen" />
</head>
<body class="dhe-body">-->

<div id="center-wrapper">

	<div id="dhe-article-info">
		<h1 class="dhe-h1">jQuery: Customizable layout using drag and drop (examples)</h1>
		<p class="dhe-p dhe-large">Examples for the article <a href="http://devheart.org/articles/jquery-customizable-layout-using-drag-and-drop/" class="dhe-link">jQuery: Customizable layout using drag and drop</a> by <a href="http://devheart.org/" class="dhe-link">DevHeart</a>.</p>
		<div id="dhe-step-navigation">
			<div class="dhe-left">
				<select onchange="parent.location=this.options[selectedIndex].value" class="dhe-select" id="dhe-step-dropdown">
					<option value="../1-getting-started-with-sortable-lists/index.html">1. Getting started with sortable lists</option>
					<option value="../2-saving-and-loading-items/index.html" selected="selected">2. Saving and loading items</option>
					<option value="../3-implementation-in-a-real-design/index.html">3. Implementation in a real design</option>
				</select>
			</div>
			<div class="dhe-right">
				<a href="../1-getting-started-with-sortable-lists/index.html" class="dhe-link">&laquo; Previous</a> <span class="dhe-text-separator">|</span> <a href="../3-implementation-in-a-real-design/index.html" class="dhe-link">Next &raquo;</a>
			</div>
			<div class="dhe-clearer">&nbsp;</div>
		</div>
	</div>	

	<div class="dhe-example-section" id="ex-2-1">
		<div class="dhe-example-section-header">
			<h3 class="dhe-h3 dhe-example-title">Example 2.1: Get items</h3>
			<div class="dhe-example-description">Get a string representing the items (re-order the items to see that it changes).</div>
		</div>
		<div class="dhe-example-section-content">

			<!-- BEGIN: XHTML for example 2.1 -->

			<div id="example-2-1">

				<p><input type="submit" class="input-button" id="btn-get" value="Get items" /></p>

				<div class="column left first">

					<ul class="sortable-list">
						<li class="sortable-item" id="A">Sortable item A</li>
						<li class="sortable-item" id="B">Sortable item B</li>
					</ul>

				</div>

				<div class="column left">

					<ul class="sortable-list">
						<li class="sortable-item" id="C">Sortable item C</li>
						<li class="sortable-item" id="D">Sortable item D</li>
					</ul>

				</div>

				<div class="column left">

					<ul class="sortable-list">
						<li class="sortable-item" id="E">Sortable item E</li>
					</ul>

				</div>

			</div>

			<div class="clearer">&nbsp;</div>

			<!-- END: XHTML for example 2.1 -->

		</div>
	</div>

	<div class="dhe-example-section" id="ex-2-2">
		<div class="dhe-example-section-header">
			<h3 class="dhe-h3 dhe-example-title">Example 2.2: Save items</h3>
			<div class="dhe-example-description">Save items in Example 2.1 to a cookie named &quot;cookie-a&quot;.</div>
		</div>
		<div class="dhe-example-section-content">

			<!-- BEGIN: XHTML for example 2.2 -->

			<div id="example-2-2">

				<p><input type="submit" class="input-button" id="btn-save" value="Save items to cookie-a" /></p>

			</div>

			<!-- END: XHTML for example 2.2 -->

		</div>
	</div>

	<div class="dhe-example-section" id="ex-2-3">
		<div class="dhe-example-section-header">
			<h3 class="dhe-h3 dhe-example-title">Example 2.3: Save items automaticly</h3>
			<div class="dhe-example-description">Items are automaticly saved to &quot;cookie-b&quot; using an event when re-arranged.</div>
		</div>
		<div class="dhe-example-section-content">

			<!-- BEGIN: XHTML for example 2.3 -->

			<div id="example-2-3">

				<div class="column left first">

					<ul class="sortable-list">
						<li class="sortable-item" id="A">Sortable item A</li>
						<li class="sortable-item" id="B">Sortable item B</li>
					</ul>

				</div>

				<div class="column left">

					<ul class="sortable-list">
						<li class="sortable-item" id="C">Sortable item C</li>
						<li class="sortable-item" id="D">Sortable item D</li>
					</ul>

				</div>

				<div class="column left">

					<ul class="sortable-list">
						<li class="sortable-item" id="E">Sortable item E</li>
					</ul>

				</div>

			</div>

			<div class="clearer">&nbsp;</div>

			<!-- END: XHTML for example 2.3 -->

		</div>
	</div>

	<div class="dhe-example-section" id="ex-2-4">
		<div class="dhe-example-section-header">
			<h3 class="dhe-h3 dhe-example-title">Example 2.4: Load items</h3>
			<div class="dhe-example-description">Load items from example 2.1 or from a saved cookie.</div>
		</div>
		<div class="dhe-example-section-content">

			<!-- BEGIN: XHTML for example 2.4 -->

			<div id="example-2-4">

				<p><input type="submit" class="input-button" id="btn-load-example" value="Load items from Example 2.1" /> &nbsp; <input type="submit" class="input-button" id="btn-load-cookie-a" value="Load items from cookie-a" /> &nbsp; <input type="submit" class="input-button" id="btn-load-cookie-b" value="Load items from cookie-b" /></p>

				<div id="example-2-4-renderarea">

				</div>

			</div>

			<div class="clearer">&nbsp;</div>

			<!-- END: XHTML for example 2.4 -->

		</div>
	</div>

</div>

<!-- Example JavaScript files -->
<!--<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.8.custom.min.js"></script>
<script type="text/javascript" src="jquery.cookie.js"></script>-->

<!-- Example jQuery code (JavaScript)  -->
<script type="text/javascript">

$(document).ready(function(){

	// Get items
	function getItems(exampleNr)
	{
		var columns = [];

		$(exampleNr + ' ul.sortable-list').each(function(){
			columns.push($(this).sortable('toArray').join(','));				
		});

		return columns.join('|');
	}

	// Load items from cookie
	function loadItemsFromCookie(name)
	{
		if ( $.cookie(name) != null )
		{
			renderItems($.cookie(name));
		}
		else 
		{
			alert('No items saved in "' + name + '".');
		}	
	}

	// Render items
	function renderItems(items)
	{
		var html = '';
	
		var columns = items.split('|');
		
		for ( var c in columns )
		{
			html += '<div class="column left';

			if ( c == 0 )
			{
				html += ' first';
			}

			html += '"><ul class="sortable-list">';

			if ( columns[c] != '' )
			{
				var items = columns[c].split(',');

				for ( var i in items )
				{
					html += '<li class="sortable-item" id="' + items[i] + '">Sortable item ' + items[i] + '</li>';
				}
			}

			html += '</ul></div>';
		}

		$('#example-2-4-renderarea').html(html);
	}

	// Example 2.1: Get items
	$('#example-2-1 .sortable-list').sortable({
		connectWith: '#example-2-1 .sortable-list'
	});

	$('#btn-get').click(function(){
		alert(getItems('#example-2-1'));
	});


	// Example 2.2: Save items
	$('#btn-save').click(function(){
		$.cookie('cookie-a', getItems('#example-2-1'));

		alert('Items saved (' + $.cookie('cookie-a') + ')');
	});

	// Example 2.3: Save items automaticly
	$('#example-2-3 .sortable-list').sortable({
		connectWith: '#example-2-3 .sortable-list',
		update: function(){
			$.cookie('cookie-b', getItems('#example-2-3'));
		}
	});


	// Example 2.4: Load items
	$('#btn-load-example').click(function(){
		renderItems(getItems('#example-2-1'));
	});

	$('#btn-load-cookie-a').click(function(){
		loadItemsFromCookie('cookie-a');	
	});

	$('#btn-load-cookie-b').click(function(){
		loadItemsFromCookie('cookie-b');	
	});

});

</script>

</body>
</html>
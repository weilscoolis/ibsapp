
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>jQuery Mobile: Theme Download</title>
		<link rel="stylesheet" href="themes/ibsapp.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile.structure-1.4.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
	</head>
	<body>
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<h1>It Worked!</h1>
			</div>
			<div data-role="content" data-theme="a">
				<p>Hallo Studenten</p>
				<label for="slider1">Input slider:</label>
				<input type="range" name="slider1" id="slider1" value="50" min="0" max="100" data-theme="a" />
				<fieldset data-role="controlgroup"  data-type="horizontal" data-role="fieldcontain">
				<legend>Ein Wert</legend>
				<input type="radio" name="radio-choice-a1" id="radio-choice-a1" value="on" checked="checked" />
				<label for="radio-choice-a1">On</label>
				<input type="radio" name="radio-choice-a1" id="radio-choice-b1" value="off"  />
				<label for="radio-choice-b1">Off</label>
				</fieldset>
			</div>
		</div>
	</body>
</html>
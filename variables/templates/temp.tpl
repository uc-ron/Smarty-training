<html>
	<head>
		<title>
			Variables in Smarty
		</title>
	</head>
	<body>
	<div>
		Hello {$firstname} {$lastname}, glad to see you can make it.
		<br />
		{* this will not work as $variables are case sensitive *}
		This weeks meeting is in {$meetingPlace}.
		{* this will work *}
		This weeks meeting is in {$meetingPlace}.
	</div>
	<hr>
	<div>
		{$Contacts.fax}<br />
		{$Contacts.email}<br />
		{* you can print arrays of arrays as well *}
		{$Contacts.phone.home}<br />
		{$Contacts.phone.cell}<br />

	</div>
	<hr>
	<div>
		{$Contacts2[0]}<br />
		{$Contacts2[1]}<br />
		{* you can print arrays of arrays as well *}
		{$Contacts2[2][0]}<br />
		{$Contacts2[2][1]}<br />

	</div>
	<hr>
	<div>
		<p>{$title}</p>
		<p>{$title|wordwrap:10}</p>
		<p>{$title|upper}</p>
		<p>{$title|truncate:11:"..."}</p>
		<p>{$title|truncate:11:"...":true}</p>
		<p>{$title|truncate:11:"...":true:true}</p>
		<p>{$title|count_characters}</p>
		<p>{$title|count_words}</p>
		<p>{$title|str_repeat:5}</p>
		<p>{$title|cat:"using cat"}</p>
		<p>{$title|regex_replace:"/[e]/":" "}</p>
		<p>{$title|replace:"Hel":"Yel"}</p>
		<p>{$title|spacify}</p>
		<p>
		{$articleTitle}
		</p>
		<p>
		{$articleTitle|strip}
		</p>
		<p>
		{$articleTitle|strip:'&nbsp;'}
		</p>
	</div>
	<hr>
	<div>
		<p>{$smarty.now|date_format}</p>
		<p>{$smarty.now|date_format:"%I:%M %p"}</p>
		<p>{$smarty.now|date_format:"%D"}</p>
		<p>{23.422334}</p>
		<p>{23.422334|string_format:"%.2f"}</p>
		<p>{23.422334|string_format:"%d"}</p>
	</div>
	<hr>
	</body>
</html>
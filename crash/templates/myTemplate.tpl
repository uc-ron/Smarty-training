<html>
<head>
<title>Info</title>
</head>
<body>

<pre>
User Information:

Name: {$name}
Address: {$address}
</pre>

<ul>
<table>
{foreach $names as $name}
{strip}
   <li>{$name}</li>
{/strip}
{/foreach}
{section name=index loop=$names}
<li style="color:red">{$names[index]}</li>
{/section}

</ul>

</table>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<table>
		<tr>
			<td>id</td>
			<td>name</td>
			<td>age</td>
		</tr>
		{foreach item=article from=$view}
		<tr>
			<td>{$article['id']}</td>
			<td>{$article['name']}</td>
			<td>{$article['age']}</td>
		</tr>
		{foreachelse}
		{/foreach}
	</table>
</body>
</html>
{*$view|print_r*}







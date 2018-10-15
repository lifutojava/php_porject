{$articletitle}
{$arr.title|capitalize} {$arr.author|cat:" 呵呵 "}
{$arr['title']} 123468987654 {$arr['author']}
{$arr2['ar']['title']} 123468987654 {$arr2['ar']['author']}
{$time|date_format:"%H:%M:%S"}
{$time|date_format:"%B:%e:%Y"}
{$articletitle2|default:"2343243"}
{$url|escape:"url"}
{$abc|lower}

{$abc|upper}

{$abc2|nl2br}
{* eq(==) neq(!=) gt(>) lt(<) *}
{if $name eq "lifu"}
	是lifu
{elseif $name eq "lifu2"}
	是 lifu2
{else}
	都不是
{/if}

{section name=article loop=$list}
	{$list[article].title}
	{$list[article].author}
	{$list[article].content}
<br />
{/section}

{foreach item=article from=$list}
	{$article.title}
	{$article.author}
	{$article.content}
<br />
{foreachelse}
啥也没有
{/foreach}

{include file="header.tpl" name="传递参数"}

{$obj ->test('hehe')}

{"Y-m-d"|date:$time}

{'1'|str_replace:'he':$name}

{f_test p1="abc" p2="1231"}









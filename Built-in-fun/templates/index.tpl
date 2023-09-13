<html>
    <head>
        <title>{block "title"}BUILD IN FUNCTIONS{/block}</title>
    </head>
    <body>
        {$name = "foo"}
        <p>My name is {$name}</p>
        {append var='fullName' value='John' index='first'}
        {append var='fullName' value='Doe' index='last'}
        <p>My full name is {$fullName.first} {$fullName.last}</p>
        {assign "age" "21"}
        <p>My age is {$age} </p>

        <hr>
        {* define the function *}
        {function name=menu level=0}
        <ul class="level{$level}">
        {foreach $data as $entry}
            {if is_array($entry)}
            <li>{$entry@key}</li>
            {call name=menu data=$entry level=$level+1}
            {else}
            <li>{$entry}</li>
            {/if}
        {/foreach}
        </ul>
        {/function}

        {* create an array to demonstrate *}
        {$menu = ['item1','item2','item3' => ['item3-1','item3-2','item3-3' =>
        ['item3-3-1','item3-3-2']],'item4']}

        {* run the array through the function *}
        {call name=menu data=$menu}
        <hr>
        <ul>
        {for $x=0 to 3 }
            <li>{$x}</li>
        {/for}
        </ul>
        <hr>
        <ul>
        {foreach $colors as $c}
            <li>{$c}</li>
        {/foreach}
        </ul>
        <hr>
        <ul>
        {foreach $myPeople as $p}
            <li>{$p@key}: {$p}</li>
        {/foreach}
        </ul>
        <hr>
    </body>
</html>
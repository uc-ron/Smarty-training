<html>
    <head>
        <title>CUSTOM FUNCTIONS</title>
    </head>
    <body>
    <hr>
        <p>{counter}</p>
        <p>{cycle values="odd,even,hell"}</p>
        <p>{cycle }</p>
        <p>{cycle }</p>
        <p>{cycle }</p>
        <hr>
        {config_load file='setup.conf'}
        {$foo="hello World!"}<br>
        {eval var=$foo}<br>
        {eval var=#title#}<br>
        {eval var=#ErrorCity#}<br>
        {eval var=#ErrorState# assign='state_error'}<br>
        {$state_error}
        <hr>
        {html_options name='id'  options=$cust_checkboxes
        selected=$customer_id  separator='<br />'}
        <hr>
        
        {html_checkboxes name='id'  options=$cust_checkboxes
        selected=$customer_id  separator='<br />'}
        <hr>
        {html_options name=foo options=$lookups selected=$fav}
        <hr>
        {html_radios name='id'  options=$cust_checkboxes
        selected=$customer_id  separator='<br />'}
        <hr>
        {html_select_date start_year='-2'
        end_year='+1' display_days=false}
        <hr>
        {html_select_time use_24_hours=true}
        <hr>
            {html_table loop=$data}
        <hr>   
        {mailto address="test@text.com"}
        <hr>   
        {math equation="x + y" x=4.4444 y=5.0000 format="%.9f"}
        <hr>   
        <pre>{textformat wrap=35}
            This is foo.
            This is foo.
            This is foo.
            This is foo.
            This is foo.
            This is foo.

            This is bar.

            bar foo bar foo     foo.
            bar foo bar foo     foo.
            bar foo bar foo     foo.
            bar foo bar foo     foo.
            bar foo bar foo     foo.
            bar foo bar foo     foo.
            bar foo bar foo     foo.

            {/textformat}
        </pre>
        {* html_image file="https://cdn.pixabay.com/photo/2023/02/04/21/32/flowers-7768218_1280.jpg" *}
    </body>
</html>
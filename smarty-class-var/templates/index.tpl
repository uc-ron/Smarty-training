<html>
    <head>
        <title>SMARTY-CLASS-VAR</title>
    </head>
    <body>
        <table>
        {config_load file="test.config"}
            {section name=r loop=3}
            <tr bgcolor="{cycle values=#rowColors#}">
                <td> ....etc.... </td>
            </tr>
            {/section}
        </table>
    </body>
</html>
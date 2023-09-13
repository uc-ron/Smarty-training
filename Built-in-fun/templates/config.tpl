{config_load file='example.conf' }
{config_load file='example.conf' section="Customer"}

<html>
<title>{#pageTitle#|default:"No title"}</title>
<body bgcolor="{#bodyBgColor#}">
<table border="{#tableBorderSize#}" bgcolor="{#tableBgColor#}">
   <tr bgcolor="{#rowBgColor#}">
      <td>First</td>
      <td>Last</td>
      <td>Address</td>
   </tr>
</table>
</body>
</html>
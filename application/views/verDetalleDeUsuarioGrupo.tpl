<!DOCTYPE html>
<html>
<head>
	<title>Detalles de usuarios en grupos</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Detalles de los usuarios en grupos</h2>

<table>
	<tr>
		<th>
			Nombre de grupo <!--Nombre de columna-->
		</th>
	</tr>
	<tbody>
		{foreach from=$unUsuario->grupos() item=unGrupo}
			<tr> 
				<td> <!--Valores de columna-->
					{$unGrupo->getNombreGrupo()}
				</td>
			</tr>
	{/foreach}
	</tbody>
</table>

</body>
</html>
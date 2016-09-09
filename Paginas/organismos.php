<HEAD>
<TITLE>Busqueda de organismos</TITLE>
<script>
function ponOrganismo(pref,tema){
	if (tema == 'ASESORIA LEGAL')
	    opener.document.forma.CanaLegal.value = pref;
		else
			opener.document.forma.CanaOtro.value = pref;
    	window.close();
	return false;
	}
</script> 
</HEAD>
<BODY>
<FORM ACTION="" METHOD=GET enctype="multipart/form-data">
<INPUT TYPE=hidden NAME=Accion VALUE=RealizarBusqueda>
<INPUT TYPE=hidden NAME=Pagina VALUE=1>
<?
include("Datos_Comunicacion.php");
?>
  <table width="200" border="0">
    <tr>
      <td>Tema: </td>
      <td><select name="Tema">
        <option value="">-
          <? 
	$sql ="select Nombre from campos where Tipo = 'Tema' and activo = 1 Order By Nombre";
	$total_result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
	$total_found = @mysql_num_rows($total_result);
	while ($row = mysql_fetch_array($total_result)){
		$Nombre=$row['Nombre'];
		echo '<OPTION VALUE="'.$Nombre.'":>'.$Nombre;
		}
	?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td>Estado:</td>
      <td><select name="Estado">
        <option value="">-
          <? 
	$sql ="select estado from organismos group by estado order by estado Asc";
	$total_result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
	$total_found = @mysql_num_rows($total_result);
	$i=1;
	while ($row = mysql_fetch_array($total_result)){
		$Nombre=$row['estado'];
		echo '<OPTION VALUE="'.$Nombre.'":>'.$Nombre;
		$i=$i+1;
		}
	?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td>Institucion:</td>
      <td><INPUT TYPE=text NAME=Institucion VALUE="" SIZE=30 MAXLENGTH=255></td>
    </tr>
    <tr>
      <td>Direccion:</td>
      <td><INPUT TYPE=text NAME=Direccion VALUE="" SIZE=30 MAXLENGTH=255></td>
    </tr>
    <tr>
      <td>Telefono:</td>
      <td><INPUT TYPE=text NAME=Telefono VALUE="" SIZE=30 MAXLENGTH=255></td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td><div align="right">
		<INPUT TYPE=submit NAME=submit VALUE="Buscar">
		<INPUT TYPE=hidden NAME=AccionSec VALUE=Organismos>
      </div></td>
    </tr>
  </table>
</FORM>
<FORM ACTION="" METHOD=GET enctype="multipart/form-data">
<TABLE BORDER=0 BGCOLOR="#EEEEEE" CELLSPACING=3 CELLPADDING=3 WIDTH=320>
   <TR>
      <TD NOWRAP BGCOLOR="#FFFFFF">
         <P><B>Institucion</B></P>
      </TD>
      <TD BGCOLOR="#FFFFFF">
         <P></P>
      </TD>
      <TD BGCOLOR="#FFFFFF">
         <P></P>
      </TD>
   </TR><?php echo"$display_block<br>"; ?>
   </FORM>
   
   
</TABLE>

</BODY>

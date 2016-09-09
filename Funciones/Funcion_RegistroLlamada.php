<?
if ($Sesion){
	include("Datos_Comunicacion.php");
	if($medio<>"" and $medio<>"-"){
		if($medio2<>"" and $medio2<>"-")
			$ComoTeEnteraste = $medio2 . ": ". $OtrosEnteraste;
			else
				$ComoTeEnteraste = $medio . ": ". $OtrosEnteraste;
		}
	if($Voluntario){
		if($CanaOtro)
			$CanaOtro=$CanaOtro." (Voluntario)";
		if($CanaLegal)
			$CanaLegal=$CanaLegal." (Voluntario)";
		}
	if($submit=="Modificar"){
		if($Accion=="ModificaVarias"){
			$sql = "UPDATE casos SET ";
			$cuenta=0;
			if ($Nombre <> ""){
				$sql=$sql."Nombre='".rs($Nombre)."'";
				$cuenta=$cuenta+1;
				}
			if ($Edad <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."Edad='".rs(intval($Edad))."'";
				$cuenta=$cuenta+1;
				}
			if ($Sexo <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."Sexo='".rs($Sexo)."'";
				$cuenta=$cuenta+1;
				}
			if ($EstadoCivil <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."EstadoCivil='".rs($EstadoCivil)."'";
				$cuenta=$cuenta+1;
				}
			if ($Telefono <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."Telefono='".rs($Telefono)."'";
				$cuenta=$cuenta+1;
				}
			if ($Municipio <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."Municipio='".rs($Municipio)."'";
				$cuenta=$cuenta+1;
				}
			if ($Estado <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."Estado='".rs($Estado)."'";
				$cuenta=$cuenta+1;
				}
			if ($AutoridadReportada <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."AutoridadReportada='".rs($AutoridadReportada)."' '".rs($AutoridadReportada2)."'";
				$sql = trim ($sql);
				$cuenta=$cuenta+1;
				}
			if ($QuienContacta <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."QuienContacta='".rs($QuienContacta)."'";
				$cuenta=$cuenta+1;
				}
			if ($VivesCon <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."VivesCon='".rs($VivesCon)."'";
				$cuenta=$cuenta+1;
				}
			if ($ComoTeEnteraste <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."ComoTeEnteraste='".rs($ComoTeEnteraste)."'";
				$cuenta=$cuenta+1;
				}
			if ($Objetivo <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."Objetivo='".rs($Objetivo)."'";
				$cuenta=$cuenta+1;
				}
			if ($Utilidad <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."Utilidad='".rs($Utilidad)."'";
				$cuenta=$cuenta+1;
				}
			if ($Recursos <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."Recursos='".rs($Recursos)."'";
				$cuenta=$cuenta+1;
				}
			if ($NivelEstudios <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."NivelEstudios='".rs($NivelEstudios)."'";
				$cuenta=$cuenta+1;
				}
			if ($RelacionVictima <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."RelacionVictima='".rs($RelacionVictima)."'";
				$cuenta=$cuenta+1;
				}
			if ($CP <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."CP='".rs($CP)."'";
				$cuenta=$cuenta+1;
				}
			if ($Colonia <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."Colonia='".rs($Colonia)."'";
				$cuenta=$cuenta+1;
				}
			if ($CorreoElectronico <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."CorreoElectronico='".rs($CorreoElectronico)."'";
				$cuenta=$cuenta+1;
				}
			if ($MedioContacto <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."MedioContacto='".rs($MedioContacto)."'";
				$cuenta=$cuenta+1;
				}
			$ids=explode(",",$seleccion);
			$sql=$sql." where ";
			$NumElementos = count($ids);
			$union = "";
			for ($i=0; $i<$NumElementos; $i++ ){
				$ini=strpos($ids[$i],'[')+1;
				$fin=strpos($ids[$i],']');
				$sql=$sql.$union."IDCaso =".substr($ids[$i],$ini,$fin-$ini);
				$union=" OR ";
				}
			if ($cuenta>0){
				$result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());			
				}
			$sql = "UPDATE llamadas SET ";
			$cuenta=0;
			if ($MotivoLlamada <> ""){
				$sql=$sql."MotivoLlamada='".rs($MotivoLlamada)."'";
				$cuenta=$cuenta+1;
				}
			if ($AyudaPsicologico <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."AyudaPsicologico='".rs($AYUDAPSICOLOGICO)."'";
				$cuenta=$cuenta+1;
				}
			if ($AyudaLegal <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."AyudaLegal='".rs($AYUDALEGAL)."'";
				$cuenta=$cuenta+1;
				}
			if ($AyudaMedica <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."AyudaMedica='".rs($AYUDAMEDICA)."'";
				$cuenta=$cuenta+1;
				}
			if ($AyudaOtros <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."AyudaOtros='".rs($AYUDAOTROS)."'";
				$cuenta=$cuenta+1;
				}
			if ($DesarrolloCaso <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."DesarrolloCaso='".rs($DesarrolloCaso)."'";
				$cuenta=$cuenta+1;
				}
			if ($CanaLegal <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."CanaLegal='".rs($CanaLegal)."'";
				$cuenta=$cuenta+1;
				}
			if ($CanaOtro <> ""){
				if ($cuenta>0)
					$sql=$sql.",";
				$sql=$sql."CanaOtro='".rs($CanaOtro)."'";
				$cuenta=$cuenta+1;
				}
			$sql=$sql." where ";
			$union = "";
			for ($i=0; $i<$NumElementos; $i++ ){
				$ini=strpos($ids[$i],'[')+1;
				$fin=strpos($ids[$i],']');
				$sql=$sql.$union."(IDCaso = ".rs(substr($ids[$i],$ini,$fin-$ini));
				$ini=strpos($ids[$i],'[',$ini)+1;
				$fin=strpos($ids[$i],']',$ini);
				$sql=$sql." and LlamadaNo = ".rs(substr($ids[$i],$ini,$fin-$ini)).")";
				$union=" OR ";
				}
			if ($cuenta>0){
				$result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
				}
			}
			else{			
				$sql = "UPDATE casos SET Nombre='".rs($Nombre)."',Edad='".rs(intval($Edad))."',Sexo='".rs($Sexo)."',EstadoCivil='".rs($EstadoCivil)."',Telefono='".rs($Telefono)."',Municipio='".rs($Municipio)."',Estado='".rs($Estado)."',AutoridadReportada='".rs($AutoridadReportada)."' '".rs($AutoridadReportada2)."',QuienContacta='".rs($QuienContacta)."',VivesCon='".rs($VivesCon)."',ComoTeEnteraste='".rs($ComoTeEnteraste)."',Objetivo='".rs($Objetivo)."',Utilidad='".rs($Utilidad)."',Recursos='".rs($Recursos)."',HorasInvertidas='".rs($HorasInvertidas)."',NivelEstudios='".rs($NivelEstudios)."',RelacionVictima='".rs($RelacionVictima)."',CP='".rs($CP)."',Colonia='".rs($Colonia)."',CorreoElectronico='".rs($CorreoElectronico)."',MedioContacto='".rs($MedioContacto)."' where IDCaso='".rs($IDCaso)."'";
				$result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
				$sql = "UPDATE llamadas SET MotivoLlamada='".rs($MotivoLlamada)."',AyudaPsicologico='".rs($AYUDAPSICOLOGICO)."',AyudaLegal='".rs($AYUDALEGAL)."',AyudaMedica='".rs($AYUDAMEDICA)."',AyudaOtros='".rs($AYUDAOTROS)."',DesarrolloCaso='".rs($DesarrolloCaso)."',CanaLegal='".rs($CanaLegal)."',CanaOtro='".rs($CanaOtro)."' where IDCaso='".rs($IDCaso)."' and LlamadaNo='".rs($LlamadaNo)."'";
				$result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
				}
		}
		else{
			if(!$IDCaso){
				$HorasInvertidas=0;

				$sql = "INSERT INTO casos (Nombre, Sexo, Edad, NivelEstudios, EstadoCivil, Telefono, AutoridadReportada, QuienContacta, CorreoElectronico, CP, Estado, Municipio, Colonia, VivesCon, GeneroVictima, EdadVictima, Grado, ZonaEscolar, MedioContacto, RelacionVictima, GeneroBully, EdadBully, ComoTeEnteraste, Objetivo, Utilidad, Recursos, HorasInvertidas) VALUES ('".rs($Nombre)."','".rs($Sexo)."','".rs(intval($Edad))."','".rs($NivelEstudios)."','".rs($EstadoCivil)."','".rs($Telefono)."','".rs($AutoridadReportada)."' '".rs($AutoridadReportada2)."','".rs($QuienContacta)."','".rs($CorreoElectronico)."','".rs($CP)."','".rs($Estado)."','".rs($Municipio)."','".rs($Colonia)."','".rs($VivesCon)."','".rs($GeneroVictima)."','".rs(intval($EdadVictima))."','".rs($Grado)."','".rs($ZonaEscolar)."','".rs($MedioContacto)."','".rs($RelacionVictima)."','".rs($GeneroBully)."','".rs(intval($EdadBully))."','".rs($ComoTeEnteraste)."','".rs($Objetivo)."','".rs($Utilidad)."','".rs($Recursos)."','".rs($HorasInvertidas)."')";
				$result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
				$sql = "SELECT MAX(IDCaso) IDCaso from Casos";
				$result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
				$row = mysql_fetch_array($result);
			    $IDCaso=$row['IDCaso'];
				}
			$sql = "UPDATE casos SET Objetivo='".rs($Objetivo)."',Utilidad='".rs($Utilidad)."',Recursos='".rs($Recursos)."',HorasInvertidas='".rs($HorasInvertidas)."' where IDCaso='".rs($IDCaso)."'";
			$result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
			$sql = "INSERT INTO Llamadas
			(IDCaso,FechaLlamada,Consejera,HoraInicio,HoraTermino,MotivoLlamada,AyudaPsicologico,AyudaLegal,AyudaMedica,AyudaOtros,DesarrolloCaso,CanaLegal,CanaOtro,LlamadaNo,Duracion,Acceso)
			VALUES
			('".rs($IDCaso)."','".rs($FechaLlamada)."','".rs($Consejera)."','".rs($HoraInicio)."','".rs($HoraTermino)."','".rs($MotivoLlamada)."','".rs($AYUDAPSICOLOGICO)."','".rs($AYUDALEGAL)."','".rs($AYUDAMEDICA)."','".rs($AYUDAOTROS)."','".rs($DesarrolloCaso)."','".rs($CanaLegal)."', '".rs($CanaOtro)."','".rs($LlamadaNo)."', '".rs($Duracion)."', '".rs($Acceso)."')";
			$result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
			}
	$sql="UPDATE llamadas SET Duracion=((time_to_sec('".rs($HoraTermino)."')-time_to_sec('".rs($HoraInicio)."'))/60) where IDCaso='".rs($IDCaso)."' and LlamadaNo='".rs($LlamadaNo)."'";
	$result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
	$sql="UPDATE llamadas Set Duracion=(((time_to_sec('".rs($HoraTermino)."')-time_to_sec('00:00:00'))+(time_to_sec('23:59:59')-time_to_sec('".rs($HoraInicio)."')))/60) where IDCaso='".rs($IDCaso)."' and LlamadaNo='".rs($LlamadaNo)."' and duracion < 0";
	$result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
	$sql="UPDATE llamadas Set Duracion=1 where IDCaso='".rs($IDCaso)."' and LlamadaNo='".rs($LlamadaNo)."' and duracion = 0";
	$result = @mysql_query($sql, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
	BorraCache();
	header("Refresh: 1; URL=Funciones/close_window_script.php");
	$Mensaje="Listo! Caso registrado.";
	include("Paginas/Mensajes.html");
	mysql_close($connection);
	}
	else{
		header("Refresh: 0; URL= ");
		}
?>

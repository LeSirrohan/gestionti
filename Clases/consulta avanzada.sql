#Para consulta de Nombre
SELECT Nombre,Apellido 
FROM `empleados` 
WHERE 1


#Para Consulta entre fechas
SELECT *
FROM soporte
WHERE 
(fecha
BETWEEN '2011-01-20'
AND '2011-02-10')


#Para consulta de área
SELECT nombre 
FROM `area` 
WHERE 1 
GROUP BY nombre

#Para consulta de soporte
SELECT tipo_soporte
FROM `soporte`
WHERE 1
GROUP BY tipo_soporte

function compararFechas($primera, $segunda)  
{  
 $valoresPrimera = explode ("/", $primera);     
 $valoresSegunda = explode ("/", $segunda);   
 $diaPrimera    = $valoresPrimera[0];    
 $mesPrimera  = $valoresPrimera[1];    
 $anyoPrimera   = $valoresPrimera[2];   
 $diaSegunda   = $valoresSegunda[0];    
 $mesSegunda = $valoresSegunda[1];    
 $anyoSegunda  = $valoresSegunda[2];  
 $diasPrimeraJuliano = gregoriantojd($mesPrimera, $diaPrimera, $anyoPrimera);    
 $diasSegundaJuliano = gregoriantojd($mesSegunda, $diaSegunda, $anyoSegunda);       
 if(!checkdate($mesPrimera, $diaPrimera, $anyoPrimera)){  
   // "La fecha ".$primera." no es válida";  
   return 0;  
  }elseif(!checkdate($mesSegunda, $diaSegunda, $anyoSegunda)){  
    // "La fecha ".$segunda." no es válida";  
     return 0;  
 }else{  
    return  $diasPrimeraJuliano - $diasSegundaJuliano;  
  }   
}  
 $primera = "29/02/2000";  
 $segunda = "31/01/2000";  
echo compararFechas ($primera,$segunda);  

#Busqueda por nombre, fecha, area y soporte tecnico
SELECT a.nombre_soporte, a.fecha, a.area, a.nombre_tecnico, a.observacion, a.tipo_soporte 
FROM soporte as a 
WHERE (fecha BETWEEN '2011-01-20' AND '2011-02-10') and a.nombre_tecnico='Hiram Loreto' 
and a.area='Recepcion' and a.tipo_soporte= 'Soporte Tecnico'


#Busqueda Tipo Soporte
SELECT a.nombre_soporte, a.fecha, a.area, a.nombre_tecnico, a.observacion, b.nombre_tipo_soporte 
FROM soporte as a, tipo_soporte as b 
WHERE a.tipo_soporte=b.nombre_tipo_soporte and cod_soporte='$tipo'

#Búsqueda Por nombre y Fecha
SELECT a.nombre_soporte, a.fecha, a.area, b.nombre_tecnico, a.observacion, a.tipo_soporte 
FROM soporte as a, empleados as b 
WHERE (fecha BETWEEN '$fecha_inicial' AND '$fecha_final') and a.nombre_tecnico='$nombre'");

#Búsqueda por nombre y área
SELECT a.nombre_soporte, a.fecha, a.area, a.nombre_tecnico, a.observacion, a.tipo_soporte 
FROM soporte as a, area as b
WHERE b.cod_area='$area'

#Búsqueda por nombre y Tipo soporte
SELECT a.nombre_soporte, a.fecha, a.area, a.nombre_tecnico, a.observacion, a.tipo_soporte 
FROM soporte as a, tipo_soporte as b
WHERE a.nombre_tecnico='$nombre' and b.nombre_tipo_soporte'$tipo'


#Búsqueda por nombre, fecha, area y tipo soporte
SELECT * FROM soporte  
WHERE MATCH (nombre_soporte, tipo_soporte, area, nombre_tecnico, observacion) AGAINST ('Sistemas y Telecomunicaciones') AND 
MATCH (nombre_soporte, tipo_soporte, area, nombre_tecnico, observacion) AGAINST ('Redes') AND nombre_tecnico='Hiram Loreto' 
AND fecha BETWEEN () GROUP BY num_soporte


#Búsqueda por nombre, fecha, area y tipo soporte
SELECT *
FROM soporte
WHERE MATCH (nombre_soporte, tipo_soporte, area, nombre_tecnico, observacion) AGAINST ('Sistemas y Telecomunicaciones')
 AND MATCH (nombre_soporte, tipo_soporte, area, nombre_tecnico, observacion) AGAINST ('Redes')
 AND nombre_tecnico = 'Hiram Loreto'
 AND (fecha BETWEEN '2011-01-20' AND '2011-02-10')
GROUP BY num_soporte
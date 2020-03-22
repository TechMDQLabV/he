<!DOCTYPE html>
<html>
<head>
	<title>Nueva Consulta</title>
</head>
<body>
	<p>Se ha realizado una nueva consulta!</p>
	<ul>
		<li>
			<strong>Nombre:</strong>
			{{ $name }}
		</li>
		<li>
			<strong>E-Mail:</strong>
			{{ $email }}
		</li>
		<li>
            <strong>Domicilio:</strong>
			{{ $address }}
		</li>
        <li>
            <strong>Ciudad:</strong>
            {{ $city }}
        </li>
        <li>
            <strong>Provincia:</strong>
            {{ $provincia }}
        </li>
        <li>
            <strong>C. Postal:</strong>
            {{ $cpostal }}
        </li>
        
		
	</ul>
	
	<hr>
	
</body>
</html>
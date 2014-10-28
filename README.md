Descargar el proyecto base en https://github.com/leodufer/webapp

Si es necesario añadir los parámetros de acceso a la base de datos en api/src/config.php

En el archivo index.html añadir una estructura html valida

Añadir los vínculos de archivos de estilo a utilizar

Añadir los vínculos a los archivos javascript a utilizar

Añadir un formulario para envio de paramentros según el modelo de datos

Utilizar validación html5 de obligatoriedad y de tipo

Añadir una tabla para mostrar los registros recuperados del servicio

El servicio se localiza en la dirección api/cotizaciones con los métodos:

	-	GET que devuelve una lista de objetos en formato json

	-	POST recibe los datos del formulario y devuelve una lista de un solo objeto en formato json [{id,moneda,venta,compra}]

Utilizar Ajax para recuperar los registros a través de GET al cargar toda la estuctura DOM de la tabla html

Utilizar jquery para añadir los registros recuperados al DOM de la tabla html

Utilizar Ajax para enviar los datos del formulario a través de POST para el registro de datos

Utilizar javascript para cancelar la recarga de página al enviar el formulario

Añadir el nuevo registro creado al DOM de la tabla html

INSTRUCCIONES DE USO
•	Primero copiamos del respositorio indicado arriba, una clonación a la ubicación que deseamos
•	Git clone <dirección del repositorio a clonar>
•	Debemos tener instalados PHP.
•	Luego Node.js desde la pagina oficial podemos descargar la ultima versión.
•	Después del desempaquetado debemos instalar composer con la siguiente línea de comando ejecutado desde la consola: composer install
•	Debemos configurar el archivo .env copiamos el archivo .env example, si tenemos configuración a base de datos, acá colocamos usuario, contraseña y nombre de la base de datos.
•	Después usamos contacto: php artisan key:generate, para crear la clave de la aplicación de lo contrario no funcionara, la ejecución.
•	Luego compilamos los recursos frontend, usando el comando: npm install y luego npm run dev, en producción se usaría el comando npm run production
•	Luego ejecutamos en consola el comando php artisan serve, para inicializar el servidor de desarrollo.
•	Nos pasamos al navegador de preferencia y colocamos la dirección: http://localhost:8000 y poder ver la pagina en ejecución.

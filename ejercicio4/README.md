# Reescritura de URL
### Siguiendo los siguientes pasos vamos a hacer una reescritura de la URL http://localhost/buscar/cualquiercosa.html donde en "cualquiercosa" podemos escribir lo que queramos, y luego lo buscará en Google.
## Paso 1: habilitamos la reescritura en el archivo *000-default.conf* en /etc/apache2/sites-available.
```bash
<VirtualHost *:80>
  <Directory /var/www/html>
  Options Indexes FollowSymlinks
  AllowOverrride All
  Require all granted
</VirtualHost>
```
![img](imagen1.png)

## Paso 2: escribimos en el fichero *.htaccess* en /var/www/html las reglas de reescritura.
```bash
RewriteEngine on
ReWriteRule ^buscar/(.*).html$ https://www.google.com/search?q=$1 [NC]
```

![img](imagen2.png)

## Ejemplo:

![img](imagen3.png)

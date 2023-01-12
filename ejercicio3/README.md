# Ejemplo 3: Crear URL amigables

Como habíamos visto anteriormente el fichero operacion.php se podía ejecutar de la siguiente manera:
```
http://localhost/operacion.php?op=suma&op1=6&op2=8
```

Creando una URL amigable podríamos llamar a este fichero de la siguiente manera:

```
http://localhost/suma/8/6
```

¿Cómo podemos conseguir esto?

Crea un .htaccess con el siguiente contenido:

```
Options FollowSymLinks
RewriteEngine On
RewriteBase /
RewriteRule ^([a-z]+)/([0-9]+)/([0-9]+)$ operacion.php?op=$1&op1=$2&op2=$3
```

## Solución

![Image](https://github.com/jpritin/DAW-Rewrite/blob/26f0fbbb5f29060289e29dfc1fd35ffec4847bcc/ejercicio3/pruebaEj3.jpeg)

## Autores
- Jesus
- Kike
- David

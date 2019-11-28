# API REST Football Laravel

## Comenzando 🚀
_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos 
de desarrollo._

```
git clone https://github.com/davidllauce/apifootball.git
```
```
composer install
```
_Mayor información: *[Laravel](https://styde.net/como-instalar-proyectos-existentes-de-laravel/)*_
 
## Construido con 🛠️

* [Bootstrap 4](https://getbootstrap.com/docs/4.3/getting-started/introduction/) - CDN utilizado
* [Laravel 6.*](https://laravel.com/docs/6.x)
* [Guzzle 6.4](http://docs.guzzlephp.org/en/stable/)

##Solución
_La solución para resolver la limitante de los 10 request es que cuando se hace la primera llamada al API externo,  
guardamos en nuestra base propia los datos devueltos, por lo tanto si este ya excedió el limite de 10 llamadas u ocurre 
una problema de conexión con el API la aplicación busca en su base interna y lo muestra. Si no hay registro guardado 
muestra un mensaje que `No se encontro detalle`._
_Para registrar en nuestra base interna, usamos [firstOrCreate](https://laravel.com/docs/6.x/eloquent) de eloquent ORM, 
en la carpeta repositories y hacemos la busqueda por el id(es el mismo que nos entrega la API), si el modelo no se 
encuentra en la BD se insertará esto con el fin de  no duplicar la data en nuestra base interna._

##La Arquitectura 
_Se uso el `Service Providers` de laravel para cargar la URL del API con el token, y la conexion a nuestra BD interna y 
la API se hizo mediante repositories esto con el objetivo  de que si aumenta no se duplique el código_

##La vista
_La vista para mostrar es sencilla usando vista y blade, se desarrollo usando CDN bootstrap4, un menú basico en la raíz 
para poderse mover entre las vistas._ 

##Otra Solución
_Otra solución para el limitante de los request es tener muchos tokens en una lista y recurrir al siguiente token cuando 
uno pase el limite. Por ejemplo si tengo 10 token tendria 100(10*10) llamadas por minuto._ 

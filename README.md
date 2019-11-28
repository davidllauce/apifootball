# API REST Football Laravel

## Comenzando 🚀

Se usaron las librerias bootstrap CDN para darle un estilo
Se uso laravel 6.2
Se uso guzzlehttp

##Solución
La idea para resolver la limitante de los 10 request es que cuando se hace la llamada primera llamada al API externo lo 
guardo en nuestra base propia, por lo tanto si este ya excedio el limite de llamadas u ocurre una problema de conexión 
con el API la aplicación busca en su base interna y lo muestra. Si no hay registro guardado muestra un mensaje que no 
detalle. 
Para registrar en nuestra base interna, usamos firstOrCreate de eloquent ORM en la carpeta repositories y hacemos la 
busqueda por el id(es el mismo que nos entrega la API) para no duplicar la data en nuestra base interna.

##La vista
La vista para mostrar es sencilla, un menú basico para poderse mover entre las vistas. Se puede mejorar usando extend 
blade para no duplicar por ejemplo los headers. 

##Otra Solución
Otra solución para el limitante de los request es tener muchos tokens en una lista y recurrir al siguiente token cuando 
uno pase el limite. Por ejemplo si tengo 10 token tendria 100(10*10) llamadas por minuto. 

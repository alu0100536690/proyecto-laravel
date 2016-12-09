# LARAVEL

Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP. Su filosofía es desarrollar código PHP de forma elegante y simple, evitando el "código espagueti". Fue creado en 2011 y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC.

# Configuración previa.

* Tener un servidor web y composer

1- En este tutorial utilizaremos XAMPP que es un paquete que permite levantar un servidor apache y utilizar bases de datos MySQL.

Instalar [XAMPP](https://www.apachefriends.org/es/download.html)

![](./images/xampp.jpg)

2- Composer es una herramienta de administración de dependencias para PHP. Está altamente inspirado en el NPM de NODEJS o el Bundler de Ruby. Para instalar composer entramos en [https://getcomposer.org](https://getcomposer.org/), hacemos clic en Download e instalamos el paquete que corresponda a nuestro Sistema Operativo.

![](./images/composer.jpg)

Una vez realizada la configuración inicial podemos comenzar con la instalación de [LARAVEL](https://laravel.com/docs/). Para ello nos colocamos en c:\xampp\htdocs y ejecutamos el siguiente comando:

![](./images/laravel.jpg)


```bash
composer create-project --prefer-dist laravel/laravel nombre_proyecto
```

Por último activamos nuestro servidor apache en XAMPP y si todo ha salido bien deberíamos poder entrar a nuestro sitio web Instalar [localhost/nombre_proyecto/public](localhost/nombre_proyecto/public)

De forma opcional podemos acortar la URL a [localhost:8000](localhost:8000) escribiendo el siguiente comando:

```bash
php artisan serve
```

**Artisan** es el nombre de la interfaz de línea de comandos incluida en Laravel. Provee comandos útiles para el desarrollo de tu aplicación. Está impulsada por el poderoso componente Console de Symfony.


# ¿Cómo funcion LARAVEL?

![](./images/mvc.jpg)


#VISTAS

#CONTROLADORES

#BLADE

#MIGRACIONES

#ELOQUENT



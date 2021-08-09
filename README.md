# Meat Project
by [Digital Meat](http://meat.cl/)

- [Instalación](#Installation)
- [Vistas del tema](#views)
- [Ambientes](#environments)

<a name="installation"></a>
## Installation 
You can install the project-name using `meat-cli`
```bash
composer global require meat/meat-cli
``` 
```bash
cd ~/code/
meat install project-name-code
```

### Manual installation
#### Development / Local Environment
```bash
git clone git@bitbucket.org:digitalmeatdev/project-name.git
cd project-name
npm install
composer install --prefer-dist
cp .env.example .env
vim .env  
npm run watch
php artisan serve
```

#### Production Environments
```bash
git clone git@bitbucket.org:digitalmeatdev/project-name.git
cd project-name
npm install
composer install --prefer-dist --no-dev
npm run production
cp .env.example .env
vim .env  
```

#### How to Docker :)

```bash
docker create network -d bridge localnetwork
docker run --name mysqlserver -e MYSQL_ROOT_PASSWORD=root --network localnetwork -p 3306:3306 --restart=always -d mysql:latest
docker-compose up
docker-compose exec app php -d memory_limit=-1 /usr/local/bin/composer install
```

Para utilizar el servidor dentro del container MySQL indicar en el .env que el host es mysqlserver.
Para acceder al servidor MySQL desde fuera del container (máquina HOST), utilizar localhost.

El sitio estará servido en localhost:8080.

<a name="views"></a>
## Vistas del tema
Las vistas del tema están localizadas en `htdocs/content/themes/meat-theme/resources/views`

Esta carpeta está ordenada de la siguiente forma: 

- **components**
Componentes del sitio. Ejemplo: sidebar, widgets, botones, etc. 

- **sections**
Secciones del sitio. En el home, podríamos dividirlo en Hero (banner), FeaturedContent, FeaturedProducts, HomeContact (sección de contacto del home) 

- **errors** 
En esta carpeta alojamos las vistas asociadas a pantallas de error, como el 404. 

- **helpers**
En esta carpeta encontraremos vistas que tienen elementos que tienen más reglas de negocio, como tags que aparecen solo bajo ciertas circunstancias o elementos que cargan datos desde variables de entorno, que no queremos repetir en todas nuestras vistas.  

- **archives**
Vistas asociadas a *Archives* de Wordpress, como el listado de noticias de un blog, o el listado de tiendas de la empresa. 

- **single**
Vistas asociadas a *Singles* de Wordpress, como detalles de un producto, o el detalle de una noticia. 

- **pages**
Vistas asociadas a páginas del sitio que no estén en ninguna de las categorías anteriores, como el Home, la página de contacto, etc. 

<a name="environments"></a>
## Environments
#### Staging: 
    URL: https://project-name.dmeat.cl
    
#### Producción:
    URL: https://project-name.cl

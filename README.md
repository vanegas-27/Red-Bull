# Red-Bull
Software diseñado para divulgar información relevante sobre las novedades  de la marca Red Bull, de su diversidad en el deporte, musica, bebidas y muchas cosas que hace a RedBull una marca unica en su entorno.


## ESTRUCTURA

se presentara la estrutura de los directorios que conforman el software, estos incluyen sus diferentes metodos 
para brindar una solucion a los diversos problemas.

___ red-bull
    |
    |____assets
    |       |
    |       |icons
    |       |images
    |
    |____css
    |      |
    |      |dashboard
    |      |login
    |      |productos
    |      index.css
    |      index.css.map
    |      index.scss
    |
    |
    |____public
    |         |
    |         |dashboard.html
    |         |index.html
    |         |login.html
    |
    |
    |____src
    |      |
    |      |____js
    |      |     |
    |      |     |dashboard.js
    |      |     |index.js
    |      |      
    |      |____php
    |      |     |
    |      |     |___database
    |      |     |     |
    |      |     |     |presistencia.php
    |      |     |     
    |      |     |___interfaces
    |      |     |     |
    |      |     |     |dashboard.php
    |      |     |     |login.php
    |      |     |     |productos.php
    |      |     |
    |      |     |___procesos
    |      |     |     |
    |      |     |     |articulos.php
    |      |     |     |banners.php
    |      |     |     |comentarios.php
    |      |     |     |eventos.php
    |      |     |     |logros.php
    |      |     |     |post.php
    |      |     |     |torneos.php
    |      |     |     
    |      |     |___renders
    |      |           |
    |      |           |productos.php
    |      |           |renderIndex.php
    |      |           |renderTable.php
    |      |           
    |      |___upload
    |             |
    |             |images...
    |
    |
    |.editorconfig
    |.gitignore
    |index.php
    |license
    |Readme.md
    |      
    |      
    


## ----------------- instalacion -----------------

- 1: descargar un software que permita gestionar la bd en este caso se utilizo xampp

- 2: se activa el servidor donde correra el software

- 3: se debe activar el lenguaje de bd MySQL para su funcionamiento

- 4: luego de tener los pasos anteriores funcionando abrir el software en el navegador...
- paht: localhost/red-bull/index.php

## TENER EN CUENTA

al entrar en el home o al software, inmediatamente se creara una base de datos llamada redbull
con todas sus tablas con sus respectivos campos para su correcto funcionamiento.
asi que no tienes de que preocuparte en la gestion de la bd,mas si en la flutuacion de informacion. tales como crear, eliminar y editar.

## mauqetacion pagina

para ver la maquetacion dirigirse a la ruta... localhost/red-bull/public/index.html


# - inicio proyecto.
- empiezo principalmente en la elaboracion del repositorio en GITHUB para brindar el correcto seguimiento a mi Software y sus diferentes cambios a traves de su desarrollo, tambien para evitar en un momento perderlo todo o incluso volver a una version anterior si de casualidad se me daña el Software.


# - Repositorio.
- https://github.com/vanegas-27/Red-Bull.git   <- ctrl+click


# - estructuracion de Software.
- prosigo con la creacion de los diferentes directorios y archivos que conforman mi Software y estos son...


# assets
- este directorio se encarga de guardar mis archivos como imagenes e iconos que se implementaran estaticamente en index.html el Software Red Bull para su correcta maquetacion, para posteriormete darle iterabilidad con php y js(jQUery,ajax).


# css
- este directorio se encarga de guardar todos los estilos personalizados en mi hoja de estilo, cabe recalcar que se implemento un procesador de css como lo es SCSS para facilitar la flexibilidad al momento de implementar los estilos

# public
- este directorio se encarga de contener el archivo para la maquetacion del software Red Bull

     # index.html 
     - maquetacion de como deberia verse el Software con multiples datos

    # index.php
     - Software ya renderiza con la base de datos

     # dashboard
     - encargado de gestionar el contenido de la pagina web red-bull



# src 
- en este es directorio se implementa la magia del Back-End ya que en este es donde haremos la iterabilidad con la base de datos y el usuario y este contiene varios directorios y scripts

    # js 
    - este directorio se encarga de contener los scripts de js para darle iterabilidad al software. tales como los eventos y el envio de informacion con ajax


    # php
    - este directorio se encarga de contener los scripts de php, encargados de crear los componentes para la pagina con los datos de la base de datos y validar que todo este funcionando correctamente.

        # database
        - archivo diseñado para manejar todos los metodos o funciones que se necesitan para implementar las peticiones hacia la base de datos, tales como crear,editar,eliminar y otros metodos implementados a la necesidad

        # interfaces

        -la funcion de este directorio es almacenar los diferentes scripts de php basados a en los archivos de html, estos al igual que el index.php se cargan de manera dinamica con la base de datos y permiten que la pagina sea mucho mas dinamica con las publicaiones

        # procesos
        - se encarga de contener todos los scripts que resiven la informacion que se envia desde las interfaces y el index.php hacia la base de datos

        # renders
        - la funcion de este directorio es almacenar los componentes que deseamos renderizar en la pagina Red-Bull index.php, cabe recalcar que de todos modos en el script index.php en la parte superior se renderizan unos componentes que no se incluyeron aca

    # upload
    - este directorio en particular sera la ubicacion en donde las imagenes se guardaran despues de insertar una imagen


# .editorconfig
- pluging o extencion que me ayuda a mantener un mismo idioma entre DEV y poder tener un codigo limpio e identado como yo deseo o como se plantea con la comunidad. en este caso lo incluyo en .gitignore ya que solo deseo tenerlo en mi maquina y no en el repositorio, para saber mas... ->> http://EditorConfig.org


# .gitignore
- este archivo me ayuda a ocultar directorios o archivos que no deseo subir al repositorio ya que pueden tener informacion comprometedora como lo es .ENV o que simplemente no son necesarios para que el software funcione correctamente.


# LICENSE MIT
- se implementa una licencia, en este caso MIT que es la mas comun para poder desarrollar codigo abrierto y poder permitirle a mas DEV poder colaborar o incluso clonar modificar y vender el Software ya que esta licencia lo permite. para saber mas... ->> https://docs.github.com/es/repositories/managing-your-repositorys-settings-and-features/customizing-your-repository/licensing-a-repository


## PROCESO DE SOFTWARE RED BULL

# ------------------------
- comienzo la maquecion con Bootstrap para darle a toda la pagina su contenido estatico o hardcodiado ya que en muchos lugares de la pagina se debera renderizar un componente de php y no la informacion asignada anteriormente por el Trainee Developer, en este caso el sr. Davinson Vanegas jsjs👍

- en la maquetacion se implemento varias clases ya predefinidas por Bootstrap para poder trabajar con contenedores o imagenes y poder darle una mayor flexibilidad a su conportamineto, aunque en su momento. se me presento un problema con la colocacion de los contenedores de la pagina como lo son el aside y main.  ya que no se me vizualizaba como queria asi que para darle solucion los encerre en un div y dentro los maneje a mi gusto 

- implemento las primeras lineas de css para poder ver la algo parecida al layout o wifre escogido en clase, se incorporan variables para los colores y el tipo de fuente que deben de tener los encabezados y parrafos igualmente se implementan las medidas que se van a utilizar para los textos y encabezados del Software.

- luego de tener ya todo maquetado y con su estilo proceso a contruir el archivo donde se cargaran los productos o eventos etc... de manera dinamica y no hardcodiada, el encargado de este renderizado es index.php.

en este archivo marco o identifico donde voy a renderizar los componentes y que tipo de datos se cargaran dependiendo su categoria o caracteristicas para luego no perderme en su ubicacion.

# database
- posteriormente creo desde cero todas las funciones o metodos en una clase llamada persistencia.php, esta tiene sus metodos privados y publicos dependiendo su necesidad en el software y este es el encargado de contener todas las funciones que se necesitan para darle gestion al software y poder tener un codigo mas modulado.

# login 
- prosigo con la creacion del login ya que intentare crear mi propio dashBoard donde pueda crear, eliminar, editar lo componentes que se reflejan en la pagina Red Bull. para eso creare solo dos usuarios que puedan entrar al dashBoard, debido a las necesidades creo un nuevo directorio en php llamado dashBoard y dentro de este un script de php llamado login y otro dashBoard

-> davinson vanegas : 
    correo: davidsonvanegas27@gmail.com
    password : Davidson*

-> juan arroyave : 
    correo : juanarroyave@politecnicomayor.edu.co
    password : Juan123*  <- SUPER SEGURA CONTRA HACKER.

# email
el envio de email se implemento en el login, se pretende que al ingresar se le envie un mensaje de abvertencia al usuario diciendo que alguien a intentado acceder al dashboard, pero el metodo del email esta en prueba aun, ya que no envia el mensaje y mucho menos resulta un error que me detenga el software.


# dashBoard

se empieza maquetando lo visual en un archivo html para posteriormente darle iteratividad con php y js este solo es accecible para dos usuarios, los mismos que se crean automaticamente al iniciar el proyecto. este dashboard es el encargado de gestionar las publicaciones que se suben a la pagina para darle una buena gestion del contenido que se muestra en el index.php

este archivo tambien se encarga de eliminar y editar las publicaciones que estan en la pagina web en tiempo real, cabe recalcar que aun hay validaciones que hacer ya que no quedo implementado de la mejor manera y presenta algunos bugs, no son graves ya que la pagina funciona en su totalidad, pero si son de vitales arreglarlos ya que al querer eliminar se debe de pasar igual la imagen y la fecha, cosa que no deberia ser asi.

en la implementacion del dashboard surgieron mas necesidades como la creacion de diferentes directorios como procesos y renders para almacenar los diferentes procesos que se deben manejar dependiendo la tabla, los datos y su metodo de envio(crear, eliminar, actualizar)

a su vez que se desarrolla el codigo va creciendo su complejidad, asi que utilizamos por pimera vez utilizamos js en nuestro proyecto para poder desplegar y subir las imagenes dependiendo del boton que presionen, tambien implementamos las funciones que cambiaran la ruta y 

# index.php

- ya teniendo todos los metodos completados y funcionales y haber diseñado el dashboard, pasamos a renderizar la informacion que se carga en la 
tabla del dashboard dinamicamente, esos datos los llamamos en el index para asignarlos en su lugar indicado de la pagina e ir dejando de tener todo el software hardcodiado.

# js 

- al haber culmidado con el renderizado total del software procedemos a implementar las funcionalidades en los scripts de js, en este caso utilizando jQuery y la libreria ajax para darle iteratividad a la pagina, en este caso comenzamos primero con el script del dashboard para darle iteratividad










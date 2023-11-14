# Red-Bull
Software diseñado para brindar información relevante sobre las novedades  de la marca Red Bull.


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



# src 
- en este es directorio se implementa la magia del Back-End ya que en este es donde haremos la iterabilidad con la base de datos y el usuario y este contiene varios directorios y scripts

    # js 
    - este directorio se encarga de contener los scripts de js para darle iterabilidad al software. tales como los eventos y el envio de informacion con ajax


    # php
    - este directorio se encarga de contener los scripts de php, encargados de crear los componentes para la pagina con los datos de la base de datos y validar que todo este funcionando correctamente.

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

# login 
- prosigo con la creacion del login ya que intentare crear mi propio cPanel donde pueda crear, eliminar, editar lo componentes que se reflejan en la pagina Red Bull. para eso creare solo dos usuarios que puedan entrar al cPanel, debido a las necesidades creo un nuevo directorio en php llamado CPanel y dentro de este un script de php llamado login y otro cPanel

-> davinson vanegas : 
    correo: davidsonvanegas27@gmail.com
    password : Davidson*

-> juan arroyave : 
    correo : juanarroyave@politecnicomayor.edu.co
    password : Juan123*  <- SUPER SEGURA CONTRA HACKER.🫡

y en este proceso se intentara implementar el envio de correo donde le envie al usuario un mensaje de advertencia donde le indique que alguien accedio al cPanel. 

## pasos de creacion login y cPanel...

- (1). en la ruta php/database/persistencia.php empiezo creando mi clase que se encargara de varios metodos para su correcto funcionamiento en la BD.

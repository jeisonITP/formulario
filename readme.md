# ¿Cómo implementar la instalación automatica en el actual proyecto?

El objetivo de la clase, es automitizar el proceso de instalación de los proyectos, debido a que, al pasar un proyecto de un entorno de trabajo a otro, hay que realizar un proceso de instalación manual, como por ejemplo: debemos instalar la base de datos, y actualizar los datos de acceso, para que el proyecto no presente errores en la ejecución, teniendo en cuenta lo anterior, la idea principal es que el proyecto, se instale con la menor manipulación, es decir sea casi automatico.

Toma como base el proyecto realizo en el primer parcial de base de datos, y realicemos los siguientes ajustes:

1. Como primer paso, vamos a crear un archivo en la ruta `includes/config.php`, en el cual vamos a definir nuestras constantes de conexión a la base de datos.


# Trabajao de Campo - Grupo 31: "E-Commerce: Neighborhood Café"

Para instalar el proyecto en su PC, siga estos pasos sencillos:

---
## Descarga Necesaria
* **XAMPP:** [Descargar XAMPP](https://www.apachefriends.org/download.html)
---
## Guía de Instalación Rápida

1.  **Iniciar XAMPP:** * **Abra** el XAMPP Control Panel.
    * **Inicie** los servicios de **Apache** y **MySQL** haciendo clic en el botón "Start" de cada uno.

2.  **Mover la carpeta:** * **Copie la carpeta** `trabajocampo_grupo31` (del repositorio) y péguela dentro de la ruta `C:\xampp\htdocs`.

3.  **Cargar la base de datos:** * **Entre** a [localhost/phpmyadmin](http://localhost/phpmyadmin) desde el navegador.
    * **Cree** una base de datos nueva con el nombre: `trabajocampo_grupo31`.
    * En la pestaña **"Importar"**, **elija** el archivo `bd_grupo31.sql` que se encuentra en la raíz de la carpeta del proyecto.
    * **Haga** clic en el botón **"Importar"** al final de la página.

4.  **Configurar el archivo .env:** * **Busque** el archivo llamado `env` (sin punto al inicio) en la raíz del proyecto.
    * **Renómbrelo** a `.env` (agregando el punto al principio).
    * **Ábralo** con un editor de texto (como Bloc de notas o VS Code).
    * **Verifique** que la URL sea `http://localhost/trabajocampo_grupo31/` y que los datos de la base de datos (usuario `root` y contraseña vacía) coincidan con su configuración local.

5.  **Acceso al sistema:** * Ya **puede** ingresar al sistema desde la siguiente dirección en su navegador: 
    * [http://localhost/trabajocampo_grupo31/](http://localhost/trabajocampo_grupo31/)

---

**Nota:** No se **olvide** de mantener el panel de XAMPP con los servicios encendidos mientras utilice la aplicación.
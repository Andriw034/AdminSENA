Guía para pruebas manuales del CRUD de Computadoras en Laravel
===============================================================

1. Iniciar el servidor de desarrollo
------------------------------------
- Abre una terminal en el directorio raíz del proyecto.
- Ejecuta el comando:
  ```
  php artisan serve
  ```
- Esto iniciará el servidor en http://127.0.0.1:8000

2. Acceder a la lista de computadoras
-------------------------------------
- Abre un navegador y navega a:
  ```
  http://127.0.0.1:8000/computers
  ```
- Verifica que se muestre la lista de computadoras (puede estar vacía inicialmente).

3. Crear una nueva computadora
-----------------------------
- Haz clic en "Crear nueva computadora".
- Llena el formulario con un número y marca.
- Envía el formulario.
- Verifica que aparezca un mensaje de éxito y que la computadora aparezca en la lista.

4. Ver detalles de una computadora
----------------------------------
- En la lista, haz clic en "Ver" para una computadora.
- Verifica que se muestren los detalles correctamente.

5. Editar una computadora
-------------------------
- Desde la lista o la vista de detalles, haz clic en "Editar".
- Modifica los campos y envía el formulario.
- Verifica que aparezca un mensaje de éxito y que los cambios se reflejen en la lista.

6. Eliminar una computadora
---------------------------
- En la lista, haz clic en "Eliminar" para una computadora.
- Confirma la acción.
- Verifica que aparezca un mensaje de éxito y que la computadora desaparezca de la lista.

7. Validaciones y manejo de errores
-----------------------------------
- Intenta crear o editar una computadora con campos vacíos.
- Intenta crear una computadora con un número ya existente.
- Verifica que se muestren mensajes de error adecuados.

8. Navegación y usabilidad
--------------------------
- Asegúrate que los enlaces "Cancelar" y otros botones funcionen correctamente.
- Navega entre las páginas para verificar que no haya errores.

Esta guía cubre las pruebas manuales exhaustivas para el CRUD de computadoras. Si encuentras algún problema o deseas automatizar estas pruebas, puedo ayudarte a implementarlo.

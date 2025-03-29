# 🧩 Actividad Práctica: Manejo de sesiones y control de acceso en PHP

## 🎯 Objetivo:
Aplicar conceptos de manejo de sesiones en PHP para controlar el acceso a contenido (posts) con base en el inicio de sesión de usuarios, utilizando arrays como fuente de datos simulada.

---

## 📝 Enunciado:

Se te proporciona un archivo PHP con dos arreglos ya definidos:

´´´
c
´´´

- Un array `$users` con 5 usuarios, cada uno con `id`, `name`, `email` y `password` (en texto plano).
- Un array `$posts` con 10 publicaciones, cada una con `title`, `description`, `image`, `author_id`, `created_at` y `status` (puede ser `published` o `draft`).

**Tu tarea es implementar las funcionalidades necesarias para:**

1. **Iniciar sesión:**
   - Mostrar un formulario de login (email y contraseña).
   - Validar las credenciales contra el array `$users`.
   - Si son correctas, crear variables de sesión (`$_SESSION`) con los datos del usuario autenticado.
   - Si las credenciales no son válidas, mostrar un mensaje de error.

2. **Control de acceso:**
   - Una vez iniciada la sesión, mostrar un mensaje de bienvenida con el nombre del usuario y un botón para **cerrar sesión**.
   - Solo si la sesión está activa, mostrar la lista de publicaciones del array `$posts` que tengan el estado `published`.

3. **Cerrar sesión:**
   - Permitir al usuario cerrar sesión eliminando las variables de sesión y redirigiendo al formulario de login.

---

## ✅ Condiciones:

- **No se debe modificar** el array `$users` ni el array `$posts`.
- Todo debe realizarse en **un solo archivo PHP**.
- Se debe usar `$_SESSION` para gestionar el inicio y cierre de sesión.
- Las contraseñas están en texto plano para simplificar (no es necesario encriptarlas).

---

## 🧪 Comportamiento esperado:

| Estado             | Resultado esperado                                             |
|--------------------|----------------------------------------------------------------|
| No hay sesión      | Mostrar formulario de login.                                   |
| Login incorrecto   | Mostrar mensaje de error.                                      |
| Login correcto     | Mostrar mensaje de bienvenida + lista de posts publicados.     |
| Cerrar sesión      | Eliminar sesión y mostrar nuevamente el formulario de login.   |

---

## 📌 Nota:

Esta actividad no requiere conexión a base de datos. Todo el ejercicio se basa en **manejo de arrays, formularios, validación y sesiones en PHP**.w

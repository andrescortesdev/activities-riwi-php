# 🧩 Actividad Práctica: Manejo de sesiones y control de acceso en PHP

## 🎯 Objetivo:
Aplicar conceptos de manejo de sesiones en PHP para controlar el acceso a contenido (posts) con base en el inicio de sesión de usuarios, utilizando arrays como fuente de datos simulada.

---

## 📝 Enunciado:

Se te proporciona un archivo PHP con dos arreglos ya definidos:

```
<?php

$users = [
    [
        'id' => 1,
        'name' => 'Ana Martínez',
        'email' => 'ana@example.com',
        'password' => password_hash('password123', PASSWORD_DEFAULT), // Para login
    ],
    [
        'id' => 2,
        'name' => 'Carlos Gómez',
        'email' => 'carlos@example.com',
        'password' => password_hash('qwerty456', PASSWORD_DEFAULT),
    ],
    [
        'id' => 3,
        'name' => 'Laura Rodríguez',
        'email' => 'laura@example.com',
        'password' => password_hash('abc12345', PASSWORD_DEFAULT),
    ],
    [
        'id' => 4,
        'name' => 'David Torres',
        'email' => 'david@example.com',
        'password' => password_hash('pass7890', PASSWORD_DEFAULT),
    ],
    [
        'id' => 5,
        'name' => 'María López',
        'email' => 'maria@example.com',
        'password' => password_hash('mypass321', PASSWORD_DEFAULT),
    ]
];

$posts = [
    [
        'id' => 1,
        'title' => 'Bienvenidos al blog',
        'description' => 'Este es el primer post de prueba.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 1,
        'created_at' => '2025-03-28 10:00:00',
        'status' => 'published'
    ],
    [
        'id' => 2,
        'title' => 'Tips para programar en PHP',
        'description' => 'Consejos útiles para escribir mejor código en PHP.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 2,
        'created_at' => '2025-03-28 11:30:00',
        'status' => 'published'
    ],
    [
        'id' => 3,
        'title' => 'Mi experiencia con Laravel',
        'description' => 'Compartiendo lo aprendido trabajando con Laravel.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 3,
        'created_at' => '2025-03-28 13:00:00',
        'status' => 'draft'
    ],
    [
        'id' => 4,
        'title' => 'Aprender JavaScript desde cero',
        'description' => 'Recursos y estrategias para aprender JS.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 1,
        'created_at' => '2025-03-28 14:20:00',
        'status' => 'published'
    ],
    [
        'id' => 5,
        'title' => 'Desarrollo web moderno',
        'description' => '¿Qué herramientas deberías conocer hoy en día?',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 4,
        'created_at' => '2025-03-28 15:00:00',
        'status' => 'published'
    ],
    [
        'id' => 6,
        'title' => 'Cómo hacer un blog con PHP',
        'description' => 'Guía paso a paso para crear tu propio blog.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 2,
        'created_at' => '2025-03-28 16:00:00',
        'status' => 'draft'
    ],
    [
        'id' => 7,
        'title' => 'Seguridad en aplicaciones web',
        'description' => 'Evita ataques comunes como XSS y SQL Injection.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 5,
        'created_at' => '2025-03-28 17:30:00',
        'status' => 'published'
    ],
    [
        'id' => 8,
        'title' => 'Ventajas de usar frameworks',
        'description' => 'Por qué deberías usar Laravel, Symfony, etc.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 3,
        'created_at' => '2025-03-28 18:00:00',
        'status' => 'published'
    ],
    [
        'id' => 9,
        'title' => 'Diseño responsive',
        'description' => 'Cómo hacer que tu web se vea bien en todos los dispositivos.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 1,
        'created_at' => '2025-03-28 19:00:00',
        'status' => 'draft'
    ],
    [
        'id' => 10,
        'title' => 'Usando APIs con PHP',
        'description' => 'Aprende a consumir y crear APIs RESTful.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 4,
        'created_at' => '2025-03-28 20:00:00',
        'status' => 'published'
    ]
];

?>

```

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

Esta actividad no requiere conexión a base de datos. Todo el ejercicio se basa en **manejo de arrays, formularios, validación y sesiones en PHP**.

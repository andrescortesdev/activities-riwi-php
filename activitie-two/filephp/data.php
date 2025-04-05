<?php 
session_start(); #habilita uso de sesiones

$users = [
    [
        'id' => 1,
        'name' => 'Ana Martínez',
        'email' => 'ana@example.com',
        'password' => 'password123', // Para login
    ],
    [
        'id' => 2,
        'name' => 'Carlos Gómez',
        'email' => 'carlos@example.com',
        'password' => 'qwerty456',
    ],
    [
        'id' => 3,
        'name' => 'Laura Rodríguez',
        'email' => 'laura@example.com',
        'password' => 'abc12345',
    ],
    [
        'id' => 4,
        'name' => 'David Torres',
        'email' => 'david@example.com',
        'password' => 'pass7890',
    ],
    [
        'id' => 5,
        'name' => 'María López',
        'email' => 'maria@example.com',
        'password' => 'mypass321',
    ]
];

$posts = [
    [
        'id' => 1,
        'title' => 'Bienvenidos al blog',
        'description' => 'Este es el primer post de prueba.',
        'image' => 'https://www.florespedia.com/Imagenes/flores-bonitas.jpg',
        'author_id' => 1,
        'created_at' => '2025-03-28 10:00:00',
        'status' => 'published'
    ],
    [
        'id' => 2,
        'title' => 'Tips para programar en PHP',
        'description' => 'Consejos útiles para escribir mejor código en PHP.',
        'image' => 'https://www.florespedia.com/Imagenes/flores-bonitas.jpg',
        'author_id' => 2,
        'created_at' => '2025-03-28 11:30:00',
        'status' => 'published'
    ],
    [
        'id' => 3,
        'title' => 'Mi experiencia con Laravel',
        'description' => 'Compartiendo lo aprendido trabajando con Laravel.',
        'image' => 'https://www.florespedia.com/Imagenes/flores-bonitas.jpg',
        'author_id' => 3,
        'created_at' => '2025-03-28 13:00:00',
        'status' => 'draft'
    ],
    [
        'id' => 4,
        'title' => 'Aprender JavaScript desde cero',
        'description' => 'Recursos y estrategias para aprender JS.',
        'image' => 'https://www.florespedia.com/Imagenes/flores-bonitas.jpg',
        'author_id' => 1,
        'created_at' => '2025-03-28 14:20:00',
        'status' => 'published'
    ],
    [
        'id' => 5,
        'title' => 'Desarrollo web moderno',
        'description' => '¿Qué herramientas deberías conocer hoy en día?',
        'image' => 'https://www.florespedia.com/Imagenes/flores-bonitas.jpg',
        'author_id' => 4,
        'created_at' => '2025-03-28 15:00:00',
        'status' => 'published'
    ],
    [
        'id' => 6,
        'title' => 'Cómo hacer un blog con PHP',
        'description' => 'Guía paso a paso para crear tu propio blog.',
        'image' => 'https://www.florespedia.com/Imagenes/flores-bonitas.jpg',
        'author_id' => 2,
        'created_at' => '2025-03-28 16:00:00',
        'status' => 'draft'
    ],
    [
        'id' => 7,
        'title' => 'Seguridad en aplicaciones web',
        'description' => 'Evita ataques comunes como XSS y SQL Injection.',
        'image' => 'https://www.florespedia.com/Imagenes/flores-bonitas.jpg',
        'author_id' => 5,
        'created_at' => '2025-03-28 17:30:00',
        'status' => 'published'
    ],
    [
        'id' => 8,
        'title' => 'Ventajas de usar frameworks',
        'description' => 'Por qué deberías usar Laravel, Symfony, etc.',
        'image' => 'https://www.florespedia.com/Imagenes/flores-bonitas.jpg',
        'author_id' => 3,
        'created_at' => '2025-03-28 18:00:00',
        'status' => 'published'
    ],
    [
        'id' => 9,
        'title' => 'Diseño responsive',
        'description' => 'Cómo hacer que tu web se vea bien en todos los dispositivos.',
        'image' => 'https://www.florespedia.com/Imagenes/flores-bonitas.jpg',
        'author_id' => 1,
        'created_at' => '2025-03-28 19:00:00',
        'status' => 'draft'
    ],
    [
        'id' => 10,
        'title' => 'Usando APIs con PHP',
        'description' => 'Aprende a consumir y crear APIs RESTful.',
        'image' => 'https://www.florespedia.com/Imagenes/flores-bonitas.jpg',
        'author_id' => 4,
        'created_at' => '2025-03-28 20:00:00',
        'status' => 'published'
    ]
];
?>
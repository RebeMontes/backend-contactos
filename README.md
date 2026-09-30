# Backend - API de Gestión de Contactos (Laravel)

API RESTful desarrollada en Laravel para la gestión y registro de contactos.

## Versiones y Requisitos Exactos
* PHP: v8.4.16
* Laravel Framework: v13.17
* Laravel Sanctum: v4.0
* Base de Datos: SQLite

## Rama para Ejecución
Ejecutar la rama feature/backend.

## Comandos Exactos de Instalación y Configuración

1. Clonar el repositorio y cambiar a la rama:
git clone https://github.com/RebeMontes/backend-contactos.git
cd backend-contactos
git checkout feature/backend

2. Instalar dependencias de PHP:
composer install

3. Configurar entorno y generar clave:
cp .env.example .env
php artisan key:generate

4. Ejecutar migraciones:
php artisan migrate

5. Iniciar el servidor:
php artisan serve

## Variables de Entorno y Base de Datos
Configuración requerida en el archivo .env:

APP_NAME=Laravel
APP_ENV=local
APP_URL=http://localhost:8000
DB_CONNECTION=sqlite

## Funciones Completadas (Avance de 4 Horas)
* Migraciones y modelos.
* Registro de datos en base de datos SQLite.
* Consulta de contactos ordenados en forma descendente.

## Funcionalidades Pendientes
* Módulo para actualización de contactos existentes (PUT /api/contacts/{id}).
* Filtro interactivo por estado activo/inactivo (status=1 / status=0).
* Registros de prueba (los registros se hacen mediante el formulario).

## IA Utilizada
* Herramientas de IA: Etructurar las migraciones, la lógica del controlador API y las reglas de validación en las peticiones HTTP.

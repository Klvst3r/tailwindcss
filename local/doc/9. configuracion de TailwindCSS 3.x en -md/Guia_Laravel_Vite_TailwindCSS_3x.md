# 🧱 Guía Base --- Laravel + Vite + TailwindCSS 3.x (Configuración Estable)

## 🚀 1️⃣ Crear nuevo proyecto Laravel

``` bash
composer create-project laravel/laravel nombre_proyecto
cd nombre_proyecto
```

------------------------------------------------------------------------

## ⚙️ 2️⃣ Instalar dependencias necesarias

``` bash
npm install -D tailwindcss@3 postcss autoprefixer
```

------------------------------------------------------------------------

## 📁 3️⃣ Inicializar configuración de Tailwind

``` bash
npx tailwindcss init -p
```

Esto genera: - `tailwind.config.js` - `postcss.config.js`

------------------------------------------------------------------------

## 🎨 4️⃣ Configurar Tailwind correctamente

**Archivo:** `tailwind.config.js`

``` js
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
```

------------------------------------------------------------------------

## 🧩 5️⃣ Configurar PostCSS

**Archivo:** `postcss.config.js`

``` js
export default {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
};
```

------------------------------------------------------------------------

## ⚡ 6️⃣ Configurar Vite

**Archivo:** `vite.config.js`

``` js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
      ],
      refresh: true,
    }),
  ],
});
```

------------------------------------------------------------------------

## 📜 7️⃣ Crear tu hoja de estilos base

**Archivo:** `resources/css/app.css`

``` css
@tailwind base;
@tailwind components;
@tailwind utilities;

/* Estilos personalizados aquí */
```

------------------------------------------------------------------------

## 🧠 8️⃣ Importar tus assets en Laravel

**Archivo:** `resources/js/app.js`

``` js
import '../css/app.css';
```

------------------------------------------------------------------------

## 💻 9️⃣ Integrar en tu plantilla Blade

**Archivo:** `resources/views/welcome.blade.php`

``` html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + TailwindCSS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="flex items-center justify-center min-h-screen">
        <h1 class="text-4xl font-bold text-blue-600">¡Laravel + TailwindCSS 3 funcionando!</h1>
    </div>
</body>
</html>
```

------------------------------------------------------------------------

## 🔧 🔄 10️⃣ Ejecutar el servidor de desarrollo

``` bash
npm install
npm run dev
php artisan serve
```

Abrir en el navegador: 👉 **http://127.0.0.1:8000**

------------------------------------------------------------------------

## 🏗️ 11️⃣ Preparar build de producción

``` bash
npm run build
```

Esto genera los archivos minificados en:

    /public/build/assets/

------------------------------------------------------------------------

## 🧩 12️⃣ Estructura final esperada

    nombre_proyecto/
    ├── package.json
    ├── postcss.config.js
    ├── tailwind.config.js
    ├── vite.config.js
    ├── resources/
    │   ├── css/
    │   │   └── app.css
    │   ├── js/
    │   │   └── app.js
    │   └── views/
    │       └── welcome.blade.php
    └── public/
        └── build/ (se genera tras npm run build)

------------------------------------------------------------------------

## ✅ 13️⃣ Verificación final

1.  En modo desarrollo (`npm run dev`), verifica en **Network → CSS**:

        http://[::1]:5173/resources/css/app.css

    con código **200 (OK)**.

2.  En modo producción (`npm run build`), verifica que los estilos se
    carguen desde:

        /build/assets/app.[hash].css

------------------------------------------------------------------------

📘 **Guía lista para usar como plantilla base en próximos proyectos
Laravel.**

Guía completa, corregida y estable para instalar y configurar Laravel + Vite + TailwindCSS 3.x, lista para desarrollo y producción, sin depender de la versión experimental (4.x).
Esta guía está validada para Laravel 10/11/12, Vite v7+ y Node.js ≥ 18.

Guía Definitiva: Laravel + Vite + TailwindCSS 3.x
1. Crear un nuevo proyecto Laravel

    composer create-project laravel/laravel nombre_proyecto
    cd nombre_proyecto

Asegúrate de que funcione:
    php artisan serve


Debe verse en http://localhost:8000

2. Instalar dependencias frontend
Asegúrate de tener Node.js y npm funcionando:
    node -v
    npm -v

Luego instala las dependencias necesarias:
    npm install -D tailwindcss@3 postcss autoprefixer

Y crea los archivos base de configuración:
    npx tailwindcss init -p

Esto genera:

tailwind.config.js

postcss.config.js

3. Configurar TailwindCSS
Edita tu archivo tailwind.config.js:

    /** @type {import('tailwindcss').Config} */
    export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    };


4. Configurar PostCSS
Abre postcss.config.js y deja el contenido así 

    export default {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
    };


Importante: Este archivo no usa import ni require, solo el objeto export default como arriba.

5. Configurar Vite
Abre o crea el archivo vite.config.js en la raíz y déjalo así:

    import { defineConfig } from 'vite';
    import laravel from 'laravel-vite-plugin';

    export default defineConfig({
    plugins: [
        laravel({
        input: ['resources/css/app.css', 'resources/js/app.js'],
        refresh: true,
        }),
    ],
    });


6. Configurar CSS base de Tailwind
Abre o crea el archivo resources/css/app.css y coloca esto:

    @tailwind base;
    @tailwind components;
    @tailwind utilities;


7. Importar CSS y JS en Vite
Abre resources/js/app.js y asegúrate de que importe el CSS:

    import './bootstrap';
    import '../css/app.css';


Se sugiere 
import '../css/app.css';

pero funciono con la primera


8. Conectar en tu plantilla Blade
En resources/views/welcome.blade.php (o tu layout principal), asegúrate de incluir la directiva Vite justo antes de </head>:

    @vite(['resources/css/app.css', 'resources/js/app.js'])


9. Ejecutar entorno de desarrollo
    npm run dev


Esto iniciará el servidor de desarrollo de Vite, por ejemplo:

    VITE v7.1.12  ready in 400 ms
    Local: http://localhost:5173/

Abre tu app en http://localhost:8000
Si Tailwind está funcionando, puedes probar con:

    <div class="text-3xl font-bold text-blue-600">
    TailwindCSS funcionando 🚀
    </div>


Preparar el entorno de producción
Cuando vayas a desplegar tu proyecto (por ejemplo en un servidor o build CI/CD), ejecuta:

    npm run build

Esto generará los archivos minificados y optimizados en la carpeta:
    /public/build


Laravel y Vite usarán automáticamente esos archivos cuando ejecutes la aplicación en modo producción (APP_ENV=production).

Limpieza y buenas prácticas
Antes de hacer un nuevo build, puedes limpiar la caché y los módulos:

    rm -rf node_modules
    npm cache clean --force
    npm install

Y si usas Git, recuerda agregar el .gitignore para evitar subir tus dependencias o el build:

    /node_modules
    /public/build

Resumen de archivos finales

📄 vite.config.js

    import { defineConfig } from 'vite';
    import laravel from 'laravel-vite-plugin';

    export default defineConfig({
    plugins: [
        laravel({
        input: ['resources/css/app.css', 'resources/js/app.js'],
        refresh: true,
        }),
    ],
    });


📄 postcss.config.js

    export default {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
    };


📄 tailwind.config.js

    /** @type {import('tailwindcss').Config} */
    export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    };


📄 resources/css/app.css

    @tailwind base;
    @tailwind components;
    @tailwind utilities;


¿Quieres que te deje también una versión “plantilla base” comprimida (ZIP) con estos 4 archivos listos para copiar y pegar en nuevos proyectos Laravel?
Así podrías iniciar cualquier nuevo entorno con npm install y listo.


Aquí tienes dos opciones para tus futuros proyectos Laravel + Tailwind 3.x, según lo que quieras hacer:

Opción 1 — Crear desde cero cada vez
Cada vez que inicies un nuevo proyecto Laravel:
Ejecutas estos comandos:

    composer create-project laravel/laravel mi_proyecto
    cd mi_proyecto
    npm install -D tailwindcss@3 postcss autoprefixer
    npx tailwindcss init -p


Sustituyes los archivos con estos contenidos:

📄 vite.config.js

    import { defineConfig } from 'vite';
    import laravel from 'laravel-vite-plugin';

    export default defineConfig({
    plugins: [
        laravel({
        input: ['resources/css/app.css', 'resources/js/app.js'],
        refresh: true,
        }),
    ],
    });


📄 postcss.config.js

    export default {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
    };


📄 tailwind.config.js

    /** @type {import('tailwindcss').Config} */
    export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    };


📄 resources/css/app.css

    @tailwind base;
    @tailwind components;
    @tailwind utilities;



3. En resources/js/app.js, asegúrate de importar el CSS:

    import '../css/app.css';

4. En tu Blade principal agrega:
    @vite(['resources/css/app.css', 'resources/js/app.js'])


Y luego:
    npm run dev   # para desarrollo
    npm run build # para producción


Opción 2 — Usar tu plantilla base (recomendada)
Puedo generarte un paquete ZIP con esta estructura lista:

laravel-tailwind-base/
│
├── vite.config.js
├── postcss.config.js
├── tailwind.config.js
└── resources/
    └── css/
        └── app.css


Así solo tendrías que:

    composer create-project laravel/laravel mi_proyecto
    cd mi_proyecto
    unzip ../laravel-tailwind-base.zip -d .
    npm install
    npm run dev

¿Deseas que te genere ese paquete ZIP base (solo con los 4 archivos correctos listos para usar en futuros proyectos)?
Así podrías tenerlo guardado y copiarlo directamente a cualquier proyecto nuevo Laravel.


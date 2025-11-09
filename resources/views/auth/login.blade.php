<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <form action="{{ route('login.post') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg w-80">
        @csrf
        <h2 class="text-xl font-semibold text-center mb-4">Iniciar Sesión</h2>
        <div class="mb-4">
            <label class="block text-gray-700">Correo electrónico</label>
            <input type="email" name="email" class="w-full border-gray-300 rounded-md mt-1" placeholder="correo@ejemplo.com">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Contraseña</label>
            <input type="password" name="password" class="w-full border-gray-300 rounded-md mt-1" placeholder="********">
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">
            Entrar
        </button>
    </form>
</body>
</html>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <script async data-id="five-server" data-file="d:\UTS WEB\index.html" type="application/javascript" src="/fiveserver.js"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-slate-300">

    <div class="w-full max-w-md bg-indigo-100 shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        <form>
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       id="username" type="text" placeholder="Username">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       id="password" type="password" placeholder="Password" >
            </div>
            <div class="flex justify-center mb-4">
                <a href="contact" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Login
                </a>
            </div>
        </form>
        <div class="text-center">
            <p class="text-gray-600 text-sm">
                Don't have an account yet?
                <a href="/register" class="text-blue-500 hover:text-blue-700 font-bold">Register here</a>
            </p>
        </div>
    </div>

</body>

</html>

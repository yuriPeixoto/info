<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP MVC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <nav class="container mx-auto flex justify-between">
            <h1 class="text-2xl font-bold">Projeto PHP MVC</h1>
            <ul class="flex items-center">
                <li class="mr-4"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
    </header>
    <main class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold text-center"><?= $message ?></h1>
        
        <div x-data="{ show: false }" x-init="setTimeout(() => { show = true }, 500)">
            <div x-show="show" class="flex flex-col items-center animate-reveal bg-gray-100 p-4">
                <p class="text-lg">Data Validation Results:</p>
                <p class="text-lg"><?= $result ?></p>
            </div>
        </div>
    </main>

    <footer x-data="{ year: new Date().getFullYear() }" class="bg-gray-200 p-4 text-center fixed bottom-0 w-full">
        <p x-text="year">&copy; Projeto PHP MVC</p>
    </footer>

    <script src="<?= BASE_URL ?>/js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <header class="bg-gray-800">
        <div class="container mx-auto flex justify-between items-center p-5">
            <div class="text-white text-3xl font-bold">My Portfolio</div>
            <nav>
                <a href="#about" class="text-gray-400 hover:text-white px-3">About</a>
                <a href="#projects" class="text-gray-400 hover:text-white px-3">Projects</a>
                <a href="#contact" class="text-gray-400 hover:text-white px-3">Contact</a>
            </nav>
        </div>
    </header>

    <section id="about" class="container mx-auto my-12 p-5 bg-white rounded-lg shadow-md">
        <h2 class="text-4xl font-bold mb-4">About Me</h2>
        <p class="text-lg text-gray-700">Hello! I'm a web developer with a passion for creating beautiful and functional websites. I have experience in various technologies including Laravel, Tailwind CSS, and more. I love to learn and explore new things in the web development world.</p>
    </section>

    <section id="projects" class="container mx-auto my-12 p-5 bg-white rounded-lg shadow-md">
        <h2 class="text-4xl font-bold mb-4">Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gray-200 p-5 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-2">Project One</h3>
                <p class="text-gray-700">Description of project one. It was built using Laravel and Tailwind CSS.</p>
            </div>
            <div class="bg-gray-200 p-5 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-2">Project Two</h3>
                <p class="text-gray-700">Description of project two. It was built using Laravel and Tailwind CSS.</p>
            </div>
            <div class="bg-gray-200 p-5 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-2">Project Three</h3>
                <p class="text-gray-700">Description of project three. It was built using Laravel and Tailwind CSS.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="container mx-auto my-12 p-5 bg-white rounded-lg shadow-md">
        <h2 class="text-4xl font-bold mb-4">Contact</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                <textarea id="message" name="message" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Send</button>
            </div>
        </form>
    </section>

    <footer class="bg-gray-800 text-white py-4 mt-12">
        <div class="container mx-auto text-center">
            &copy; 2024 My Portfolio. All rights reserved.
        </div>
    </footer>
</body>
</html>


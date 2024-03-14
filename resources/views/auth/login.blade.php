<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="bg-left-top fixed top-0 left-0">
        <img src="{{ asset('assets/img/pastel blue rocket in motion.png') }}" alt="Rocket" class="block w-full h-full object-contain">
    </div>
    <div class="bg-left-bottom absolute bottom-0 left-0" style="margin-left: 0.5cm;">
        <img src="{{ asset('assets/img/Rectangle 5.png') }}" alt="Rocket" class="block w-auto h-auto object-contain">
    </div>
    <div class="bg-left-bottom absolute bottom-0 left-0" style="margin-left: 0.5cm;">
        <img src="{{ asset('assets/img/Rectangle 6.png') }}" alt="Rocket" class="block w-auto h-auto object-contain">
    </div>
    <div class="bg-right absolute bottom-0 right-0" style="margin-left: 0.5cm;">
        <img src="{{ asset('assets/img/Rectangle 1.png') }}" alt="Rocket" class="block w-auto h-auto object-contain">
    </div>
    <div class="bg-right-bottom absolute bottom-0 right-0" style="margin-left: 0.5cm;">
        <img src="{{ asset('assets/img/pastel blue rocket in motion (1).png') }}" alt="Rocket" class="block w-auto h-auto object-contain">
    </div>
    


    <body class="bg-green-50 min-h-screen flex items-center justify-start">
    <div class="max-w-md w-full p-10 rounded-lg shadow-lg mx-auto lg:mx-0" style="margin-left: 4cm;">
        <h2 class="text-2xl font-semibold text-gray-800 mb-1 text-center ">Login</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 font-semibold mb-2">Email:</label>
                <input type="text" id="username" name="username" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password:</label>
                <input type="password" id="password" name="password" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div class="flex items-center justify-between mb-4">
            </div>
            <button type="submit" class="w-full bg-indigo-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Login</button>
        </form>
        <p class="text-sm text-gray-600 mt-4">Don't have an account? <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign up here</a></p>
    </div>
   
    

</body>
</html>

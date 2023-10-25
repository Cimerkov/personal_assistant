<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div x-data="{ isOpen: false }">
        <!-- Navigation -->
        <nav class="flex items-center justify-between flex-wrap w-full  top-0"
             :class="{ 'shadow-lg bg-gray-800 text-center': isOpen, 'bg-gray-800': !isOpen }">
            <!-- Logo etc -->
            <div class="flex items-center flex-shrink-0">
                <a href="#home">
                    <img src="./assets/images/logo.png" alt="logo" class="w-32">
                </a>
            </div>

            <!-- Toggle button (hidden on large screens) -->
            <button @click="isOpen = !isOpen" type="button"
                    class="block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white">
                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd"
                          d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                    <path x-show="!isOpen" fill-rule="evenodd"
                          d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                </svg>
            </button>

            <!-- Menu -->
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto"
                 :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }">
                <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline py-2 px-4"
                           href="#" @click="isOpen = false">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline py-2 px-4"
                           href="#" @click="isOpen = false">About Us</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline py-2 px-4"
                           href="#" @click="isOpen = false">Services</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline py-2 px-4"
                           href="#" @click="isOpen = false">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <section>
    <div class="bg-cover bg-no-repeat bg-center opacity-50 w-full w-full h-full md:h-screen h-screen md:h-full" style="background-image: url('./assets/images/image1.jpg'); background-size: cover;">
    </div>
</section>





    

    <script src="./assets/app.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js"></script>
</body>

</html>

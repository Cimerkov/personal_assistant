<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div x-data="{ isOpen: false }">
        <!-- Navigation -->
        <nav class="flex items-center justify-between flex-wrap w-full  top-0" :class="{ 'shadow-lg bg-gray-800 text-center': isOpen, 'bg-gray-800': !isOpen }">
            <!-- Logo etc -->
            <div class="flex items-center flex-shrink-0">
                <a href="#home">
                    <img src="./assets/images/logo.png" alt="logo" class="w-32">
                </a>
            </div>

            <!-- Toggle button (hidden on large screens) -->
            <button @click="isOpen = !isOpen" type="button" class="block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white">
                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
                    <path x-show="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
                </svg>
            </button>

            <!-- Menu -->
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto" :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }">
                <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline py-2 px-4" href="#home" @click="isOpen = false">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline py-2 px-4" href="#aboutus" @click="isOpen = false">About Us</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline py-2 px-4" href="#" @click="isOpen = false">Services</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline py-2 px-4" href="#" @click="isOpen = false">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Home -->
    <section id="home">
        <div class="bg-cover bg-no-repeat bg-center opacity-50 w-full w-full h-full md:h-screen h-screen md:h-full" style="background-image: url('./assets/images/image1.png'); background-size: cover;">
            <h1 class="text-center text-black font-bold text-5xl pt-6 pb-2" id="h1Element">Make Your Life Easier</h1>
            <h3 class="text-center text-black font-bold text-2xl" id="h3Element">With Your Personal Assistant</h3>
        </div>
        <div class="flex flex-col md:flex-row pt-5 justify-evenly ">
            <div class="w-full md:w-1/2 lg:w-1/2 p-2 max-w-xl">
                <p class="text-justify px-5 text-sm md:text-base">Searching for an experienced partner to shoulder your administrative load and supercharge your productivity? Is your business bogged down by tasks that hinder your growth and efficiency? Then you're in the right place. Welcome to Personal Assistant.

                    Operating from Skopje, this service brings 2 years of robust administrative, managerial, and leadership experience to your business. Explore my experience and dive into the range of VA services on offer. Discover how this service can support your business in an array of areas.

                    Whether you require a thoughtful strategist, a fresh perspective, or a confident representative of your brand, Personal Assistant is your solution. Reassess your workload, utilise our services and discover newfound time to excel in areas you're passionate about.

                </p> <br>
                <p class="text-justify px-5 text-sm md:text-base">Personal Assistant is committed to bolstering business leaders, fostering growth, and enhancing productivity. This is accomplished by deploying vast knowledge, profound experience, and specialised skills. Working remotely, you can expect initiative-driven action, a high degree of professionalism, and the utmost confidentiality.

                    Reach out today and schedule a complimentary discovery session. We'll delve into your current operational structure and support needs. Discover how this service can help drive you towards your business objectives.</p>
                <br>
                <p class="text-justify px-5 text-sm md:text-base">Reach out today and schedule a complimentary discovery session. We’ll delve into your current operational structure and support needs. Discover how this service can help drive you towards your business objectives.</p>
                <br>
                <p class="font-bold text-2xl text-center px-5 text-sm md:text-base">Make Your Life Easier With Your Personal Assistant</p>


            </div>
            <div class="md:w-1/2 p-2">
                <img src="./assets/images/image2.png" alt="image2" class="w-full h-full">
            </div>
        </div>


    </section>

    <!-- about us -->

    <section id="aboutus">


        <div class="text-gray-500 font-bold text-3xl text-center pt-5">
            <h1>About Us</h1>
        </div>
        <div class="flex flex-col md:flex-row pt-5">


            <div class="md:w-1/2 p-2">
                <img src="./assets/images/image3.jpg" alt="image3" class="w-full h-full">
            </div>
            <div class="w-full md:w-1/2 lg:w-1/2 p-2 max-w-xl text-justify">
                <p class="text-sm px-5 md:text-base">At the heart of our mission are two remarkable women, each with a wealth of experience and a passion for helping businesses and entrepreneurs thrive. Their combined expertise spans various fields, with a special focus on providing invaluable assistance.</p><br>
                <h6 class="font-bold px-5">Lolita Cimerkova - The Assistant Extraordinaire</h6>
                <p class="text-sm px-5 md:text-base">Lolita is the embodiment of efficiency and dedication. Her expertise lies in being the ultimate right-hand person for businesses and businesspeople. Having spent years honing her skills in administrative support, client relations, and task management, she brings a level of commitment and precision that's truly unrivaled. Lolita's enthusiasm for making your daily operations smoother is infectious.</p><br>
                <h6 class="font-bold px-5">Tanja Popovska - The Multifaceted Maven</h6>
                <p class="text-sm px-5 md:text-base">Tanja is a dynamo when it comes to versatility. With a background that includes marketing, finance, and project management, she's the perfect example of a modern Renaissance woman. Tanja's knack for seeing the big picture while managing the finer details makes her an invaluable asset. Her insight into effective strategy and problem-solving is matched only by her passion for supporting businesses in their quest for success.</p>
            </div>
        </div>
    </section>






    <script src="./assets/app.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js"></script>
</body>

</html>
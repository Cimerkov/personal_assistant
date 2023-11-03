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
                        <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline py-2 px-4" href="#services" @click="isOpen = false">Services</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline py-2 px-4" href="#contact" @click="isOpen = false">Contact</a>
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
        <div class="flex flex-col md:flex-row pt-5 justify-between ">
            <div class="w-full md:w-1/2 lg:w-1/2 p-2 max-w-xl">
                <p class="text-justify px-5 text-sm md:text-base">Searching for an experienced partner to shoulder your administrative load and supercharge your productivity? Is your business bogged down by tasks that hinder your growth and efficiency? Then you're in the right place. Welcome to Personal Assistant.

                    Operating from Skopje, this service brings 2 years of robust administrative, managerial, and leadership experience to your business. Explore my experience and dive into the range of VA services on offer. Discover how this service can support your business in an array of areas.

                    Whether you require a thoughtful strategist, a fresh perspective, or a confident representative of your brand, Personal Assistant is your solution. Reassess your workload, utilise our services and discover newfound time to excel in areas you're passionate about.

                </p> <br>
                <p class="text-justify px-5 text-sm md:text-base">Personal Assistant is committed to bolstering business leaders, fostering growth, and enhancing productivity. This is accomplished by deploying vast knowledge, profound experience, and specialised skills. Working remotely, you can expect initiative-driven action, a high degree of professionalism, and the utmost confidentiality.

                    Reach out today and schedule a complimentary discovery session. We'll delve into your current operational structure and support needs. Discover how this service can help drive you towards your business objectives.</p>
                <br>
                <p class="text-justify px-5 text-sm md:text-base">Reach out today and schedule a complimentary discovery session. We'll delve into your current operational structure and support needs. Discover how this service can help drive you towards your business objectives.</p>
                <br>
                <p class="font-bold text-2xl text-center px-5 text-sm md:text-base">Make Your Life Easier With Your Personal Assistant</p>


            </div>
            <div class="md:w-1/2 p-2">
                <img src="./assets/images/image2.png" alt="image2" class="w-full h-full rounded">
            </div>
        </div>


    </section>

    <!-- about us -->

    <section id="aboutus">


        <div class="text-gray-500 font-bold text-3xl text-center pt-5">
            <h1>About Us</h1>
        </div>
        <div class="flex flex-col justify-between md:flex-row pt-5">


            <div class="md:w-1/2 p-2">
                <img src="./assets/images/image3.jpg" alt="image3" class="w-full h-full rounded">
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


    <!-- Services -->

    <section id="services">
        <div class="text-gray-500 font-bold text-3xl text-center p-5">
            <h1>Services</h1>
        </div>
        <div class="flex flex-wrap mx3-px3 text-center">
            <div class="w-full sm:w-1/2 p-2 md:w-1/3 p-2 lg:w-1/3 p-2">
                <div class="card-zoom rounded overflow-hidden shadow-lg">
                    <img class="w-full h-64 object-cover" src="./assets/images/social.jpg" alt="Social Media Management">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Social Media</h3>

                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 p-2 md:w-1/3 p-2 lg:w-1/3 p-2">
                <div class="card-zoom rounded overflow-hidden shadow-lg">
                    <img class="w-full h-64 object-cover" src="./assets/images/customer.jpg" alt="Customer Service">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Customer Service</h3>

                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 p-2 md:w-1/3 p-2 lg:w-1/3 p-2">
                <div class="card-zoom rounded overflow-hidden shadow-lg">
                    <img class="w-full h-64 object-cover" src="./assets/images/research.jpeg" alt="Research">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Research</h3>

                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 p-2 md:w-1/3 p-2 lg:w-1/3 p-2">
                <div class="card-zoom rounded overflow-hidden shadow-lg ">
                    <img class="w-full h-64 object-cover" src="./assets/images/data.jpg" alt="Data Entry">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Data Entry</h3>

                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 p-2 md:w-1/3 p-2 lg:w-1/3 p-2">
                <div class="card-zoom rounded overflow-hidden shadow-lg">
                    <img class="w-full h-64 object-cover" src="./assets/images/email.jpeg" alt="Email Management">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Email Management</h3>

                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 p-2 md:w-1/3 p-2 lg:w-1/3 p-2">
                <div class="card-zoom rounded overflow-hidden shadow-lg">
                    <img class="w-full h-64 object-cover" src="./assets/images/copywriting.jpeg" alt="Copywriting">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Copywriting</h3>

                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Contact -->

    <section id="#contact">
        <div class="text-gray-500 font-bold text-3xl text-center p-5">
            <h1>Contact</h1>
        </div>

        <div class="containerxl mx-auto flex flex-col md:flex-row p-5 bg-gray-800">
            <div class="w-full md:w-1/2">
                <div class="max-w-md mx-auto">
                    <form class="bg-white shadow-md rounded px-6 pt-4 pb-8 mb-2">
                        <div class="mb-4">
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="firstName">First Name</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="First Name" required>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="LastName">Last Name</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastName" type="text" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email" required>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" rows="4" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-full md:w-1/2 text-center mt-4 md:mt-0">
                <div class="mx-auto p-4">
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-white text-xl font-bold">Address</h3>
                            <p class="text-white">Str. 1520 no:8, Skopje, Macedonia</p>
                        </div>
                        <div>
                            <h3 class="text-white text-xl font-bold">Email</h3>
                            <p class="text-white">personal_assistant@yahoo.com</p>
                        </div>
                        <div>
                            <h3 class="text-white text-xl font-bold">Phone</h3>
                            <p class="text-white">+389701111111</p>
                        </div>
                        <div class="pt-12">
                            <h3 class="text-white text-2xl font-bold uppercase">Follow Us</h3>
                        </div>
                        <div class="">
                            <ul class="flex justify-center space-x-4 md:space-x-8">
                                <li class="p-2">
                                    <a class="" aria-label="Visit TrendyMinds LinkedIn" href="https://www.linkedin.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-8">
                                            <path fill="white" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a class="" aria-label="Visit TrendyMinds YouTube" href="https://www.youtube.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-8">
                                            <path fill="white" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a class="" aria-label="Visit TrendyMinds Facebook" href="https://www.facebook.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-8">
                                            <path fill="white" d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a class="" aria-label="Visit TrendyMinds Instagram" href="https://www.instagram.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-8">
                                            <path fill="white" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800">
        <h1 class="text-center text-white font-bold p-4">© 2023 Copyright: Cimerkov </h1>
    </footer>






    <script src="./assets/app.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js"></script>
</body>

</html>
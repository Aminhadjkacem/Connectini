<?php
 session_start();
// // Check if the user is not logged in
if (!isset($_SESSION['username'])) {
     header("Location: index.html"); // Redirect to the login page
     exit();
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E</script>
        <script src=" signup_erreur.js"></script>
</head>

<body class="bg-gray-900">
<header class=" flex sticky top-0   items-center justify-between bg-slate-950 py-4 px-5  md:py-1 ">
      <!-- logo - start -->
      <a href="#" class="flex items-center mb-4 text-2xl mt-4 font-semibold text-gray-900 dark:text-white">
        <img class="w-auto h-9 mr-2" src="logo.png" alt="logo">

      </a>
      <!-- logo - end -->

      <!-- nav - start -->
      <!-- nav - end -->

      <!-- buttons - start -->
      <a href="logout.php"
        class="hidden rounded-lg bg-yellow-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-yellow-300 transition duration-100 hover:bg-yellow-600 focus-visible:ring active:text-gray-700 md:text-base lg:inline-block">Deconnecter</a>

      <button type="button"
        class="inline-flex items-center gap-2 rounded-lg bg-gray-200 px-2.5 py-2 text-sm font-semibold text-gray-500 ring-yellow-300 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd" />
        </svg>
          Menu
      </button>
      <!-- buttons - end -->
  </header>
    <div class="grid grid-4 mt-4 gap-6">
        <div class="grid  grid-cols-3 flex justify-center h-auto items-center">
            <span class="cols-span-1"></span>
            <div class="cols-span-2 hover:border-2 rounded-lg overflow-hidden border-yellow-500">
                <a href="#"><img src="fac.jpg" class="cols-span-1" alt="teswiret el fac"></a>
                <div class="my-2 flex justify-center items-center">
                    <span class="font-bold text-2xl text-white">ism el fac</span>
                </div>
            </div>
        </div>
        <div class=" flex justify-center items-center h-auto">
            <div class="bg-transparent my-5">
                <h2 class="mb-2 text-center text-xl font-semibold text-white sm:text-2xl md:mb-4 md:text-center">
                    La liste des enseignants en attente:
                </h2>
                <div class="rounded-lg items-center hover:border-2 border-yellow-500">
                    <table class=" w-auto overflow-hidden text-sm text-gray-500 rounded-lg border-yellow-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-yellow-500">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    nome d'enseignants
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Mail
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        capacity
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="w-full">
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    khalil sessi
                                </th>
                                <td class="px-6 py-4">
                                    khalilsesi@gmail.com
                                </td>
                                <td class="px-6 py-4">
                                    9
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-green-600 dark:text-green-500 hover:underline">Accepter</a>
                                </td>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class=" flex justify-center items-center h-auto">
            <div class="bg-transparent my-5">
                <h2 class="mb-2 text-center text-xl font-semibold text-white sm:text-2xl md:mb-4 md:text-center">
                    La liste des enseignants déja accepteé:
                </h2>
                <div class="rounded-lg items-center hover:border-2 border-yellow-500">
                    <table
                        class=" w-auto overflow-hidden text-sm text-gray-500 rounded-lg border-yellow-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-yellow-500">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    nome d'enseignants
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Mail
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        capacity
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                            </svg></a>
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody class="w-full">
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    khalil sessi
                                </th>
                                <td class="px-6 py-4">
                                    khalilsesi@gmail.com
                                </td>
                                <td class="px-6 py-4">
                                    9
                                </td>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class=" flex justify-center items-center h-auto">
            <div class="bg-transparent my-5">
                <h2 class="mb-2 text-center text-xl font-semibold text-white sm:text-2xl md:mb-4 md:text-center">
                    La liste des etudiant déja accepteé:
                </h2>
                <div class="rounded-lg items-center hover:border-2 border-yellow-500">
                    <table
                        class=" w-auto overflow-hidden text-sm text-gray-500 rounded-lg border-yellow-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-yellow-500">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    nome d'etudiant
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Mail
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Pfe
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Encadreur
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                            </svg></a>
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody class="w-full">
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    khalil sessi
                                </th>
                                <td class="px-6 py-4">
                                    khalilsesi@gmail.com
                                </td>
                                <td class="px-6 py-4">
                                    pfe
                                </td>
                                <td class="px-6 py-4">
                                    mre
                                </td>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    
        <div>
            <h3 class="text-left text-5xl my-5 font-bold text-white md:text-center">
                Les Rapports des entreprise:
            </h3>
            <div class="items-center justify-center flex">
                <div class=" relative rounded-lg  h-40 w-3/5 h-40 overflow-hidden  object-cover flex justify-between bg-gray-800 items-center m-5 hover:border-2 border-yellow-500">
                    <img src="sos3.jpg" class="w-40" alt="dijital logo">
                    <div class="p-5">
                        <h2 class="text-2xl font-bold text-white">dijital logo</h2>
                        <h4
                            class="text-base overflow-sroll mh-full font-medium bg-gray-900 my-2 pl-2 rounded text-gray-500">
                            el commonter Lorem
                            ipsum, dolor sit amet consectetur adipisicing elit. Quis quia architecto eligendi
                            dignissimos ipsa quae et explicabo est vero earum. Eaque obcaecati dignissimos perspiciatis!
                            Aliquam, aut. Temporibus omnis recusandae porro!</h4>
                    </div>
                    <div class="rounded-full m-2 text-yellow-500 absolute top-0 right-0">
                        <a href="#" class="m-4 hover:underline">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="items-center justify-center flex mb-3">
                <div class="rounded-lg relative w-3/5 h-40 overflow-hidden object-cover flex justify-start bg-gray-800 items-start m-5 hover:border-2 border-yellow-500">
                    
                        <img src="sos4.webp" class="w-40" alt="dijital logo">
                    
                    <div class="p-5">
                        <h2 class="text-2xl font-bold text-white">TECH savy</h2>
                        <h4
                            class="text-base overflow-sroll mh-full font-medium bg-gray-900 my-2 pl-2 rounded text-gray-500">
                            el commonter Lorem
                            ipsum dolor sit, amet consectetur adipisicing elit. Sequi illo quidem explicabo,
                            exercitationem nostrum asperiores laudantium commodi necessitatibus. Quia asperiores dolore
                            quis, consequuntur eaque sapiente sed aperiam sunt maiores beatae!</h4>
                    </div>
                    <div class="rounded-full m-2 text-yellow-500 absolute top-0 right-0">
                        <a href="#" class="m-4 hover:underline">Voir plus</a>
                    </div>
                </div>

            </div>
        </div>

    
</body>

</html>
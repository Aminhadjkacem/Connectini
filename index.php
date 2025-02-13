<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connectini</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    #ctaa{
      background-image: url("image_back_blur2.png");
    }
  </style>
</head>

<body>
  <!--hero + nav bar-->
  <header class=" flex sticky top-0   items-center justify-between bg-slate-950 py-4 px-5  md:py-1 ">
      <!-- logo - start -->
      <a href="#" class="flex items-center mb-4 text-2xl mt-4 font-semibold text-gray-900 dark:text-white">
        <img class="w-auto h-9 mr-2" src="logo.png" alt="logo">

      </a>
      <!-- logo - end -->

      <!-- nav - start -->
      <nav class="hidden gap-12 lg:flex">
        <a href="#" class="text-lg font-semibold text-yellow-500">Home</a>
        <a href="#"
          class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-yellow-500 active:text-yellow-500">Offres</a>
        <a href="contactus.html"
          class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-yellow-500 active:text-yellow-500">Contact</a>
      </nav>
      <!-- nav - end -->

      <!-- buttons - start -->
      <a href="login.html"
        class="hidden rounded-lg bg-yellow-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-yellow-300 transition duration-100 hover:bg-yellow-600 focus-visible:ring active:text-gray-700 md:text-base lg:inline-block">Connexion</a>

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
  <div id="hero" class="bg-gray-900 pt-4 pb-6 sm:pb-8 lg:pb-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <section class="flex flex-col justify-between gap-6 sm:gap-10 md:gap-16 lg:flex-row mx-10">
      <!-- content - start -->
      <div class="flex flex-col justify-center sm:text-center lg:py-12 lg:text-left xl:w-5/12 xl:py-24 mx-10">
        <p class="mb-4 font-semibold text-yellow-500 md:mb-6 md:text-lg xl:text-xl">
          Très fier de vous présenter</p>

        <h1 class="text-white mb- 8 text-4xl font-bold sm:text-5xl md:mb-12 md:text-6xl">
          notre guide PFE pour les étudiants</h1>

        <p class="mb-8 leading-relaxed text-gray-500 md:mb-12 lg:w-4/5 xl:text-lg">Notre application relie les
          étudiants, enseignants et entreprises pour soutenir les projets étudiants. Collaboration, encadrement et
          succès assurés.</p>

        <div class="flex flex-col gap-2.5 sm:flex-row sm:justify-center lg:justify-start">
          <a href="login.html"
            class="inline-block rounded-lg bg-yellow-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-yellow-300 transition duration-100 hover:bg-yellow-600 focus-visible:ring active:bg-yellow-700 md:text-base">Connexion</a>

          <a href="loginselect.html"
            class="inline-block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-yellow-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">Inscrire</a>
        </div>
      </div>
      <!-- content - end -->

      <!-- image - start -->
      <div class="h-48 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:h-auto xl:w-5/12 mx-10 my-10">
        <img src="image2.jpg" loading="lazy" alt="Photo by Fakurian Design"
          class="h-full w-full object-cover object-center" />
      </div>
      <!-- image - end -->
      </section>
    </div>
  </div>

  <!--benefits-->
  <div class="bg-gray-800 py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <!-- text - start -->
      <div class="mb-10 md:mb-16">
        <h2 class="mb-4 text-center text-2xl font-bold text-white md:mb-6 lg:text-3xl">Notre avantage concurrentiel</h2>

        <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
          Collaboration étudiants-enseignants-entreprises pour résultats académiques améliorés, compétences pratiques et
          opportunités professionnelles.</p>
      </div>
      <!-- text - end -->

      <div class="grid gap-12 sm:grid-cols-2 xl:grid-cols-3 xl:gap-16">
        <!-- feature - start -->
        <div class="flex flex-col items-center">
          <div
            class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-yellow-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
            </svg>
          </div>

          <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-white">PFE BOOKS</h3>
          <p class="mb-2 text-center text-gray-500">regroupées dans une seule section bien organisée et comprenant de
            nombreuses informations</p>
          <a href="#"
            class="font-bold text-yellow-500 transition duration-100 hover:text-yellow-600 active:text-yellow-700">Voir
            plus</a>
        </div>
        <!-- feature - end -->

        <!-- feature - start -->
        <div class="flex flex-col items-center">

          <div
            class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-yellow-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
          </div>
          <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-white">Encadreurs</h3>
          <p class="mb-2 text-center text-gray-500">Tous les encadreurs de votre institut seront affichés afin que vous
            puissiez choisir votre encadreur. </p>
          <a href="#"
            class="font-bold text-yellow-500 transition duration-100 hover:text-yellow-600 active:text-yellow-700">Voir
            plus</a>
        </div>
        <!-- feature - end -->

        <!-- feature - start -->
        <div class="flex flex-col items-center">

          <div
            class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-yellow-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
          </div>
          <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-white">L'administration </h3>
          <p class="mb-2 text-center text-gray-500">L'administration de l'institut acceptera la demande des professeurs
            d'encadrer les étudiants et d'obtenir des retours sur la performance d'etudiants dans le domaine
            professionnel.</p>
          <a href="#"
            class="font-bold text-yellow-500 transition duration-100 hover:text-yellow-600 active:text-yellow-700">Voir
            plus</a>
        </div>
        <!-- feature - end -->


      </div>
    </div>
  </div>
  <!--stats-->
  <div class="bg-gray-900 py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
      <!-- text - start -->
      <div class="mb-10 md:mb-16">
        <h2 class="mb-4 text-center text-2xl font-bold text-white md:mb-6 lg:text-3xl">
          Notre équipe en chiffres</h2>

        <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">Notre site web rencontre un succès
          retentissant, avec une forte adhésion, une réussite académique élevée et de nombreuses opportunités
          professionnelles pour les étudiants.</p>
      </div>
      <!-- text - end -->

      <div class="grid grid-cols-2 gap-8 md:grid-cols-4 md:gap-0 md:divide-x">
        <!-- stat - start -->
        <div class="flex flex-col items-center md:p-4">
          <div class="text-xl font-bold text-yellow-500 sm:text-2xl md:text-3xl">200</div>
          <div class="text-sm font-semibold sm:text-base text-white">Entrprises</div>
        </div>
        <!-- stat - end -->

        <!-- stat - start -->
        <div class="flex flex-col items-center md:p-4">
          <div class="text-xl font-bold text-yellow-500 sm:text-2xl md:text-3xl">500</div>
          <div class="text-sm font-semibold sm:text-base text-white">Encadreurs</div>
        </div>

        <!-- stat - start -->
        <div class="flex flex-col items-center md:p-4">
          <div class="text-xl font-bold text-yellow-500 sm:text-2xl md:text-3xl">1000</div>
          <div class="text-sm font-semibold sm:text-base text-white">Etudiants</div>
        </div>
        <!-- stat - end -->

        <!-- stat - start -->
        <div class="flex flex-col items-center md:p-4">
          <div class="text-xl font-bold text-yellow-500 sm:text-2xl md:text-3xl">100</div>
          <div class="text-sm font-semibold sm:text-base text-white">Facultés</div>
        </div>
        <!-- stat - end -->
      </div>
    </div>
  </div>

  <!--testimonials-->
  <div class="bg-gray-800 py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
      <h2 class="mb-8 text-center text-2xl font-bold text-white md:mb-12 lg:text-3xl">
        Rétroaction</h2>

      <div class="grid gap-4 md:grid-cols-2 md:gap-8">
        <!-- quote - start -->
        <div class="flex flex-col items-center gap-4 rounded-lg bg-gray-900 px-8 py-6 md:gap-6">
          <div class="max-w-md text-center text-yellow-600 hover:text-yellow-500 lg:text-lg">“Votre site web a tout changé ! Succès académique
            décuplé, compétences pratiques développées, carrière propulsée. Merci infiniment !”</div>

          <div class="flex flex-col items-center gap-2 sm:flex-row md:gap-3">
            <div class="h-12 w-12 overflow-hidden rounded-full border-2 border-black bg-gray-100 md:h-14 md:w-14">
              <img src="Ahmed.jpg" loading="lazy" alt="Photo by Radu Florin"
                class="h-full w-full object-cover object-center" />
            </div>

            <div>
              <div class="text-center text-sm font-bold text-white sm:text-left md:text-base">ahmed masmoudi</div>
              <p class="text-center text-sm text-gray-500 sm:text-left md:text-sm">Etudiant a ISIMS</p>
            </div>
          </div>
        </div>
        <!-- quote - end -->

        <!-- quote - start -->
        <div class="flex flex-col items-center gap-4 rounded-lg bg-gray-900 px-8 py-6 md:gap-6">
          <div class="max-w-md text-center text-yellow-600 hover:text-yellow-500 lg:text-lg">“
            Expérience incroyable : succès académique, compétences pratiques, opportunités professionnelles. Merci !”
          </div>

          <div class="flex flex-col items-center gap-2 sm:flex-row md:gap-3">
            <div class="h-12 w-12 overflow-hidden rounded-full border-2 border-black bg-gray-100 md:h-14 md:w-14">
              <img src="Amin.jpg" loading="lazy" alt="Photo by christian ferrer"
                class="h-full w-full object-cover object-center" />
            </div>

            <div>
              <div class="text-center text-sm font-bold text-white sm:text-left md:text-base">Amin Haj Kacem</div>
              <p class="text-center text-sm text-gray-500 sm:text-left md:text-sm">Etudiant a ISIMS</p>
            </div>
          </div>
        </div>
        <!-- quote - end -->
      </div>
    </div>
  </div>

  <!--CTA-->
  <div class="bg-gray-900 py-6 sm:py-8 lg:py-12" id="cta">
    <div id="blur">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <div class="mx-auto flex max-w-xl flex-col items-center text-center">
        <div >
        <p  class="bg-white p-1 px-5 inline-block my-0 rounded-2xl mb-4 font-semibold text-gray-900 md:mb-6 md:text-lg xl:text-base" >Qu'est ce que vous attendez?</p>
        </div>
        <h1 class="text-white mb-8 text-3xl font-bold sm:text-4xl md:mb-12 md:text-5xl">Crée un compte et commencer à chercher des opportunités</h1>

        <div class="flex w-full flex-col gap-2.5 sm:flex-row sm:justify-center">
          <a href="#"
            class="inline-block rounded-lg bg-yellow-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-yellow-300 transition duration-100 hover:bg-yellow-600 focus-visible:ring active:bg-yellow-700 md:text-base">Connecter</a>

          <a href="#"
            class="inline-block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-yellow-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">S'inscrire</a>
        </div>
      </div>
    </div>
    </div>
  </div>

  <!--footer-->
  <div class="bg-slate-950 pt-4 sm:pt-10 lg:pt-12">
    <footer class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <div class="mb-16 grid grid-cols-2 gap-12 border-t pt-10 md:grid-cols-4 lg:grid-cols-6 lg:gap-8 lg:pt-12">
        <div class="col-span-full lg:col-span-2">
          <!-- logo - start -->
          <div class="mb-4 lg:-mt-2">
            <a href="/" class="text-black-800 inline-flex items-center gap-2 text-xl font-bold md:text-2xl"
              aria-label="logo">
              <span class="text-yellow-500 font-semibold">Contact</span><span
                class="text-white font-semibold">ini</span>
            </a>
          </div>
          <!-- logo - end -->

          <p class="mb-6 text-gray-500 sm:pr-8">Filler text is dummy text which has no meaning however looks very
            similar to real text.</p>

          <!-- social - start -->
          <div class="flex gap-4">
            <a href="#" target="_blank"
              class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
              <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
              </svg>
            </a>

            <a href="#" target="_blank"
              class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
              <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
              </svg>
            </a>

            <a href="#" target="_blank"
              class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
              <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
              </svg>
            </a>

            <a href="#" target="_blank"
              class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
              <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
              </svg>
            </a>
          </div>
          <!-- social - end -->
        </div>

        <!-- nav - start -->
        <div>
          <div class="mb-4 font-bold uppercase tracking-widest text-yellow-500">Products</div>

          <nav class="flex flex-col gap-4">
            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Overview</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Solutions</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Pricing</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Customers</a>
            </div>
          </nav>
        </div>
        <!-- nav - end -->

        <!-- nav - start -->
        <div>
          <div class="mb-4 font-bold uppercase tracking-widest text-yellow-500">Company</div>

          <nav class="flex flex-col gap-4">
            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">About</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Investor
                Relations</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Jobs</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Press</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Blog</a>
            </div>
          </nav>
        </div>
        <!-- nav - end -->

        <!-- nav - start -->
        <div>
          <div class="mb-4 font-bold uppercase tracking-widest text-yellow-500">Support</div>

          <nav class="flex flex-col gap-4">
            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Contact</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Documentation</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Chat</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">FAQ</a>
            </div>
          </nav>
        </div>
        <!-- nav - end -->

        <!-- nav - start -->
        <div>
          <div class="mb-4 font-bold uppercase tracking-widest text-yellow-500">Legal</div>

          <nav class="flex flex-col gap-4">
            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Terms of
                Service</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Privacy
                Policy</a>
            </div>

            <div>
              <a href="#"
                class="text-gray-500 transition duration-100 hover:text-yellow-500 active:text-yellow-600">Cookie
                settings</a>
            </div>
          </nav>
        </div>
        <!-- nav - end -->
      </div>

      <div class="border-t py-8 text-center text-sm text-gray-400">© 2023 - VISION. Tous les droits sont réservés.</div>
    </footer>
  </div>
</body>

</html>
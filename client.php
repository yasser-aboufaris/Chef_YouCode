<?php include("connect.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">
    



<nav class="p-5 bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 px-3 text-white bg-gray-900 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">OUR Dishes</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact Us</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Your menu</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<nav class="bg-black p-4 text-white">
    <div class="flex justify-around items-center">
      <h1 class="text-lg font-bold">Your options</h1>
      <div>
        <!-- Select Input -->
        <select class="text-black px-4 py-2 rounded">
          <option value="entrer">Starter</option>
          <option value="main">Main</option>
          <option value="dessert">Dessert</option>
          <option value="vain">Drinks</option>
        </select>
      </div>
    </div>
  </nav>

  <section ></section>


    <section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 50rem; background-image: url(./img/stake2.jpg);">

        <div class=" flex flex-col justify-around">

            <div class="flex flex-col w-full text-5xl lg:w-1/2 justify-center items-start  px-6 tracking-wide">
                <h1 class="text-white mb-20">Food is the way</h1>
                <div class="text-2xl text-white inline-block no-underline border-b border-gray-600 leading-relaxed" href="#">Food is more than sustenance; it’s a symphony of flavors dancing on the tongue, a canvas painted with spices and colors. Each bite tells a story—of warmth, culture, and love, woven together in a feast for the soul. In its essence, food is poetry, where every meal is a stanza, and every aroma is a rhyme whispered softly to the heart.</div>

            </div>

        </div>

    </section>
    <section class=" flex flex-wrap justify-around mt-5 ">
         <?php
        $data = "SELECT * FROM dishes";
        $result = $conn->query($data);
        if (!$result) {
            die("Invalid query: " . $conn->error);
        } else {
          $i=0;
            while ($row = $result->fetch_assoc() ) {?>
                <div class="max-w-sm  border bg-black rounded-lg shadow mx-3 my-6 ">
    <a href="#">
        <img class="rounded-t-lg" src="./img/HeroStake.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $row['name'] ?></h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?= $row['description'] ?></p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 ">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

        <?php }
        } ?>
    </section> 
    



      <!-- footer -->
      <footer class="bg-black text-white py-16 w-screen">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-12 text-center">
                <!-- Address -->
                <div>
                    <h4 class="text-lg mb-4">ADRESSE</h4>
                    <p class="text-sm">Avenue de la Gare des</p>
                    <p class="text-sm">Eaux-Vives 3, 1207</p>
                    <p class="text-sm">Genève</p>
                </div>

                <!-- Hours -->
                <div>
                    <h4 class="text-lg mb-4">HORAIRES</h4>
                    <p class="text-sm">Lundi et Dimanche : Fermé</p>
                    <p class="text-sm">Mardi au Samedi : 12:00 - 14:00 / 19:00 - 22:00</p>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg mb-4">CONTACT</h4>
                    <p class="text-sm">Tél : 022 840 03 38</p>
                    <p class="text-sm">Mail : info@lamicheline.ch</p>
                </div>
            </div>

            <!-- Certifications -->
            <div class="flex justify-center space-x-8 mt-12">
                <span class="text-white/70">Guide MICHELIN</span>
                <span class="text-white/70">Gault&Millau</span>
            </div>
        </div>
    </footer>



</body>

</html>
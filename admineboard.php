<?php include("connect.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <section class=" flex flex-wrap justify-around mt-5 ">
        <?php
        $data = "SELECT * FROM dishes";
        $result = $conn->query($data);
        if (!$result) {
            die("Invalid query: " . $conn->error);
        } else {
            $i = 0;
            while ($row = $result->fetch_assoc()) { ?>
                <div class="max-w-sm  border bg-black rounded-lg shadow mx-3 my-6 ">
                    <a href="#">
                        <img class="rounded-t-lg" src="./img/HeroStake.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $row['name'] ?></h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?= $row['description'] ?></p>
                        <div class="flex justify-around h-14 w-full">
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 ">
                                Modify
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 ">
                                delete
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                            
                        </div>
                    </div>
                </div>

        <?php }
        } ?>
    </section>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col  ">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-blue-600 text-white py-4 px-6">
            <h1 class="text-2xl font-bold">Admin Dashboard</h1>
        </header>

        <!-- Main Content -->
        <main class="flex-grow container mx-auto p-6 bg-white rounded shadow">
            <h2 class="text-xl font-semibold mb-4">User Requests</h2>
            <table class="min-w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Row -->
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">John Doe</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Accept</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2">Decline</button>
                        </td>
                    </tr>
                    <!-- Add more rows dynamically here -->
                </tbody>
            </table>
        </main>
    </div>

    <div class="bg-white items-center p-6 rounded shadow-lg w-3/4 max-w-md">
        <h1 class="text-xl font-bold text-center mb-4">My Chart</h1>
        <canvas id="myChart" class="w-full"></canvas>
    </div>

    <script>
        // Chart.js Configuration
        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar', // Chart type
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple'], // X-axis labels
                datasets: [{
                    label: 'Votes',
                    data: [12, 19, 3, 5, 8], // Y-axis data
                    backgroundColor: ['red', 'blue', 'yellow', 'green', 'purple'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    },
                },
            }
        });
    </script>
</body>

</html>
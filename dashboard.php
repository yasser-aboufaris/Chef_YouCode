<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Chart</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="bg-white p-6 rounded shadow-lg w-3/4 max-w-md">
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
          legend: { display: true, position: 'top' },
        },
      }
    });
  </script>
</body>
</html>

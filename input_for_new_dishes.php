<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Dish Form</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
    <h1 class="text-2xl font-bold text-center mb-4">Your Dish</h1>
    <form action="#" method="POST" class="space-y-4">
      <!-- Dish Name -->
      <div>
        <label for="dish-name" class="block text-gray-700 font-medium">Dish Name</label>
        <input type="text" id="dish-name" name="dish-name" placeholder="Enter dish name"
               class="w-full mt-1 p-2 border rounded-lg focus:ring focus:ring-blue-300">
      </div>

      <!-- Dish Image -->
      <div>
        <label for="dish-image" class="block text-gray-700 font-medium">Dish Image</label>
        <input type="file" id="dish-image" name="dish-image"
               class="w-full mt-1 p-2 border rounded-lg focus:ring focus:ring-blue-300">
      </div>

      <!-- Dish Description -->
      <div>
        <label for="dish-description" class="block text-gray-700 font-medium">Description</label>
        <textarea id="dish-description" name="dish-description" rows="4"
                  placeholder="Enter a brief description"
                  class="w-full mt-1 p-2 border rounded-lg focus:ring focus:ring-blue-300"></textarea>
      </div>

      <!-- Submit Button -->
      <button type="submit"
              class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
        Submit
      </button>
    </form>
  </div>
</body>
</html>

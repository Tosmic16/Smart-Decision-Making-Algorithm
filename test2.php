<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $_SESSION['topic'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="grid grid-cols-2">
    <div class="col-span-1 bg-gray-100 min-h-screen py-6 flex flex-col justify-center sm:py-12">
      <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
        <h1 class="text-2xl font-semibold text-center py-4">Header</h1>
        <!-- Rest of the content for the first div goes here -->
      </div>
    </div>
    <div class="col-span-2 bg-gray-100 min-h-screen py-6 flex flex-col justify-center sm:py-12">
      <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md" style="transform: scaleX(2);">
        <h1 class="text-2xl font-semibold text-center py-4">Header</h1>
        <!-- Rest of the content for the second div goes here -->
      </div>
    </div>
  </div>
</body>
</html>

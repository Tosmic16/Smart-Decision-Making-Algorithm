<?php
require 'utils/basic.php';
session_start();
if (isset($_POST['submit'])) {
   $_SESSION['topic'] = $_POST['topic'];
  
   Basic::redirect('/views/get.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmART Decision Making</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>
<body>
  <div class="container mx-auto p-8 bg-gray-100 rounded-lg shadow-lg">
    <header class="text-center">
      <h1 class="text-3xl font-bold mb-4">Welcome to SmART Decision Making</h1>
    </header>
  
    <form action="index.php" method="POST" class="flex flex-col items-center mt-8"> <!-- Use flex-col and items-center to stack elements vertically -->
      <label for="topic" class="mr-2">Enter a Topic:</label>
      <input type="text" id="topic" name="topic" placeholder="Enter a Topic" class="px-4 py-2 border border-gray-400 rounded-md focus:outline-none focus:border-blue-500 mb-2"> <!-- Add mb-2 for bottom margin -->
      <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Submit</button> <!-- Remove ml-2 for left margin -->
    </form>
  </div>
</body>
</html>
<script src="utils/js/app.js"></script>
<?php
require '../utils/basic.php';

session_start();
if(!$_SESSION['topic']){
  Basic::redirect('/');

}
?>
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
  <div class="bg-gray-100 min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
      <h1 class="text-2xl font-semibold text-center py-4"><?= $_SESSION['topic'] ?></h1>

      <form  action="/img/SMART%20model/processor/postCriteria.php" method="POST" class="px-6 py-4">
      <div class="mb-4">
     
          <label for="textbox" class="text-lg">Enter the criterias for Decison Making (comma seperated) </label>
          <textarea id="criteriaTextBox" name="textbox" placeholder="bttery,memory," class="border border-gray-300 mt-1 py-2 px-3 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
       
        <div id="addCriteria" style="display :none;" class="border border-red-500 rounded-lg pl-2 pr-2 mb-4 ">
          <!-- <div class="mb-4">
          <label for="input5" class="text-lg">Input Field 5:</label>
          <input type="text" id="input5" name="input5" class="border border-gray-300 mt-1 py-2 px-3 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div> -->

      </div>
        <div class="mb-4">
 
          <input type="submit" id="input5" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white mt-1 py-2 px-3 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

      </form>
    </div>
  </div>
</body>
</html>
<script src="../utils/js/get.js"></script>
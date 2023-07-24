<?php
require '../utils/basic.php';

session_start();
// var_dump($_SESSION);die;
if(!$_SESSION['topic']){
    Basic::redirect('/');
  }
if(empty($_SESSION['criterias'])){
    Basic::redirect('/views/get.php');
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

  <style>
    #openModalLink {
      font-size: 1.5rem;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="bg-gray-200 min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <div class="mx-auto w-6/12 bg-white rounded-lg shadow-md overflow-hidden mt-4">
      <div class="bg-gray-800 text-white px-4 py-2">
        <h1 class="text-2xl font-semibold"><?= $_SESSION['topic'] ?></h1>
      </div>

      <div class="mx-6 my-4">
        <a href="#" class="text-blue-500" id="openModalLink">Click here to enter alternatives</a>
        <p class="text-gray-500 text-sm mt-2">Some notes or additional information can go here.</p>
      </div>

      <div id="form" class="px-6 py-4">
        <?php
        $criterias = "";
        foreach($_SESSION['criteria'] as $criteria => $value){
               $criterias .= $criteria.',';
        }
        ?>
        <input id="criterias" type="hidden" value="<?= $criterias ?>">
        <h1 id='altHead' class="mt-4 text-2xl font-semibold">Hello</h1>
        <div id="addAlternative" class="">
        
        </div>
        <div class="flex justify-between">
          <a href="#" class="text-blue-500">Link</a>
          <button id="nexter" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Next</button>
        </div>
  </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75 hidden">
      <div class="bg-white rounded-lg shadow-lg p-6 w-1/2">
        <h2 class="text-xl font-semibold mb-4">Enter Alternatives</h2>
        
        <div class="mb-4">
            <label for="modalField" class="block text-gray-700 font-bold mb-2">Enter the Alternatives for Decison Making (comma seperated)</label>
            <textarea type="text" id="altTextBox" name="altTextBox" class="border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full"></textarea>
          </div>
         
          <div class="flex justify-end">
            <button id="closeModal" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Close</button>
            <button id="submitAlt" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2">Submit</button>
          </div>
       
      </div>
    </div>

    <script>
      const modal = document.getElementById('modal');
      const closeModalButton = document.getElementById('closeModal');
      const openModalLink = document.getElementById('openModalLink');
      
      openModalLink.addEventListener('click', function(event) {
        event.preventDefault();
        modal.style.display = 'flex';
      });
      
      closeModalButton.addEventListener('click', function() {
        modal.style.display = 'none';
      });
    </script>
  </div>
</body>
</html>
<script src="../utils/js/alternative_form.js"></script>
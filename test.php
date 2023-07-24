<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmART Decision Making</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

<button id="downButton">Next Page</button>
<button id="upButton">Previous Page</button>
<div class="pages">
  <div class="page">
    <h1>Page 1</h1>
  </div>
  <div class="page">
    <h1>Page 2</h1>
  </div>
  <div class="page">
    <h1>Page 3</h1>
  </div>
</div>


<style>

.pages {
  height: 100vh;
  overflow-y: scroll;
}

.page {
  height: 100vh;
  padding: 20px;
}


</style>

</body>
</html>
<script>

$(document).ready(function() {
  var currentPage = 0;
  var totalPages = $('.page').length;

  $('#downButton').click(function() {
    if (currentPage < totalPages - 1) {
      currentPage++;
      $('.pages').animate({ scrollTop: currentPage * $('.page').height() }, 500);
    }
  });

  $('#upButton').click(function() {
    if (currentPage > 0) {
      currentPage--;
      $('.pages').animate({ scrollTop: currentPage * $('.page').height() }, 500);
    }
  });
});


    

</script>
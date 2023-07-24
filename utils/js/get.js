  $(document).ready(function() {
    // Function to add the input field
    function addInputField(name) {
      var input = $('<div class="mb-4 font-bold"><label for="'+name+'" name="'+name+'" class="text-sm">How Important Is '+name+' ? :</label><select id="input5" name="'+name+'" class="border border-gray-300 mt-1 py-2 px-3 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500">' +
      '<option value="10">Very Important</option>' +
      '<option value="8">Important</option>' +
      '<option value="5">Neutral</option>' +
      '<option value="4">Unimportant</option>' +
      '<option value="2">Very Unimportant</option>' +
      '</select></div>');

       $('#addCriteria').append(input);
    }
   
    // Add input field on change event
    $('#criteriaTextBox').on('change', function() {
     
        $('#addCriteria').empty();
        $('#addCriteria').append('<div class="bg-red-500 mb-4 "><p class=" text-white text-lg">Please indicate your level of agreement with the statements listed below</p></div>');
         str = $('#criteriaTextBox').val();
        var fruitsArray = str.split(",");
      if(fruitsArray.length !== 0 && fruitsArray[0]!==''){
        $('#addCriteria').show();

        $.each(fruitsArray, function(index, value) {
            addInputField(value);
          });

        }else{
          $('#addCriteria').hide();
        }

    });
  });

function submitSurveyForm(data) {
  var form = $('<form action="/img/SMART%20model/processor/makeDecision.php" method="post"></form>');

  // Append input fields with survey data as form fields
  $.each(data, function(key, nestedObj) {
    $.each(nestedObj, function(nestedKey, nestedValue) {
      var inputName = key + '[' + nestedKey + ']';
      form.append('<input type="hidden" name="' + inputName + '" value="' + nestedValue + '">');
    });
});

form.appendTo('body').submit();
}

  $(document).ready(function() {
    // Function to add the input field
    function addInputField(name, alternative) {
      var input = $('<div id="surchg" class="w-1/2 mr-2 "><label for="'+name+' "class="block text-gray-700 font-bold mb-2">How will you rate '+alternative+'`s '+name+' ?</label><input type="number" min="1" max="10" id="input5"  class="border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full"></div>');
      $('#addAlternative').append(input);
    }
    criteria = $('#criterias').val();
    fruitsArray = criteria.split(",");
        var altArray;
    // Add input field on change event
    $('#submitAlt').on('click', function() {
      modal.style.display = 'none';

        $('#addAlternative').empty();
         alt = $('#altTextBox').val();
         criteria = $('#criterias').val();
         fruitsArray = criteria.split(",");
         altArray = alt.split(",");
      if(altArray.length !== 0 && altArray[0]!==''){
        $('#addAlternative').show();

        // $.each(altArray, function(altIndex, altValue) {
        //   surveyArray.push(altValue);
             $('#altHead').text(altArray[0]);
          $('#addAlternative').append('<div class="flex mb-4">');
          
          
          // $.each(fruitsArray, function(index, value) {
          //   surveyArray[altValue].push(value);
          // });
          addInputField(fruitsArray[0],altArray[0])
          $('#addAlternative').append('</div>');

           }
  

      else{
          $('#addAlternative').hide();
        }
    });


    var i = 1;
    var j = 0;
    var survey = {};
    $('#nexter').on('click', function() {
      if(i-1>-1){
      if (!(altArray[j] in survey)) {
        survey[altArray[j]] = {}; // Create a nested object if it doesn't exist
      }      
      
        
      survey[altArray[j]][fruitsArray[i-1]] = $('#input5').val();
           
      }

      if (i < fruitsArray.length) {
        $('#altHead').text(altArray[j]);
        $('#addAlternative').empty();
        
        addInputField(fruitsArray[i],altArray[j])
        i++
        if (j == altArray.length-1 && i == fruitsArray.length) {

          $('#nexter').text('submit');
          }
      }else{
        if (j < altArray.length) {
          j++
           i =0;
           $("#nexter").click();
        }
        if ($('#nexter').text() == 'submit') {
          submitSurveyForm(survey);

        }
      }


    });
  });

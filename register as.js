// Add a click event listener to the buttons to display an alert when clicked
document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('button');
    buttons.forEach(function(button) {
      button.addEventListener('click', function() {
        var buttonText = button.textContent;
        alert("You clicked the " + buttonText + " button!");
      });
    });
  });
  
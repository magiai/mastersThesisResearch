document.addEventListener("DOMContentLoaded", function () {

  
  var showNext = document.querySelectorAll('.nextQuestionBox');
  
  for (var i = 0; i < showNext.length; i++ ) {
      showNext[i].addEventListener("click", function (event) {

          event.preventDefault();
          //to działa
          /** @namespace this.parentElement.nextElementSibling.style */
          this.parentElement.nextElementSibling.style.display = "block";
          this.parentElement.style.display = "none";

      });
  }

});

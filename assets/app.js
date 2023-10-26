 // Get the elements
 const h1Element = document.getElementById("h1Element");
 const h3Element = document.getElementById("h3Element");

 // Function to add a fade-in animation
 function addFadeInAnimation(element, delay) {
   element.style.opacity = 0;
   element.style.transition = "opacity 1s ease-in-out";
   setTimeout(() => {
     element.style.opacity = 1;
   }, delay);
 }

 // Call the animation function with a delay
 addFadeInAnimation(h1Element, 0);
 addFadeInAnimation(h3Element, 800); // 800ms delay

// function to get my current age
  function getAge(dateString) {
    var ageInMilliseconds = new Date() - new Date(dateString);
    document.getElementById('age').innerHTML = Math.floor(ageInMilliseconds/1000/60/60/24/365); // convert to years
 }
 console.log(getAge('1999-07-13'));

  let swiper = new Swiper(".swiper", {
    direction: "vertical",
    effect: "fade",
    speed: 800,
    mousewheel: true,
        pagination: {
          el: ".swiper-pagination",
        },
  });
 

  
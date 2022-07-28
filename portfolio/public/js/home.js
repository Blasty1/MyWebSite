
var typed = new Typed('.tipying', {
    strings: ["organizzazione", "passione","curiosità"],
    typeSpeed: 50
  });

Aos.init();

var slider = tns({
  "container": ".my-slider",
  "items": 1,
  "rewind": true,
  "swipeAngle": false,
  "speed": 400,
  "autoplay": true,
  "autoplayTimeout": 3000,
  arrowKeys : true,
  'autoplayButton' : '.off',
  prevButton : '#left-row',
  nextButton : '#right-row'
});

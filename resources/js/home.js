import ScrollMagic from 'scrollmagic';
// import 'ScrollMagic/scrollmagic/uncompressed/plugins/debug.addIndicators';
import {TweenMax, TimelineMax, Linear, Power3} from 'gsap';
import {ScrollMagicPluginGsap} from 'scrollmagic-plugin-gsap';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

var desktopVideo =  document.getElementById('desktopVideo')
var mobileVideo =  document.getElementById('mobileVideo')
var soundButtonDesktop = document.getElementById('soundButtonDesktop')
var soundButtonMobile = document.getElementById('soundButtonMobile')

soundButtonDesktop.addEventListener('click', function () {
  desktopVideo.muted = !desktopVideo.muted;

  var src = soundButtonDesktop.getAttribute('src')
  if (src.includes('Ic_volume_off')) {
    soundButtonDesktop.setAttribute('src', src.replace('Ic_volume_off', 'Ic_volume_on'))
  } else {
    soundButtonDesktop.setAttribute('src', src.replace('Ic_volume_on', 'Ic_volume_off'))
  }
})

soundButtonMobile.addEventListener('click', function () {
  mobileVideo.muted = !mobileVideo.muted;

  var src = soundButtonMobile.getAttribute('src')
  if (src.includes('Ic_volume_off')) {
    soundButtonMobile.setAttribute('src', src.replace('Ic_volume_off', 'Ic_volume_on'))
  } else {
    soundButtonMobile.setAttribute('src', src.replace('Ic_volume_on', 'Ic_volume_off'))
  }
})

window.addEventListener("load", function () {
  var controller = new ScrollMagic.Controller();

  new ScrollMagic.Scene({triggerElement: "#trigger1", duration: document.getElementById('trigger1').clientHeight})
    .setClassToggle("#heading1", "text-black") // add class toggle
    .addTo(controller);
  new ScrollMagic.Scene({triggerElement: "#trigger2", duration: document.getElementById('trigger2').clientHeight})
    .setClassToggle("#heading2", "text-black") // add class toggle
    .addTo(controller);
  new ScrollMagic.Scene({triggerElement: "#trigger3", duration: document.getElementById('trigger3').clientHeight})
    .setClassToggle("#heading3", "text-black") // add class toggle
    .addTo(controller);
  new ScrollMagic.Scene({triggerElement: "#trigger4", duration: document.getElementById('trigger4').clientHeight})
    .setClassToggle("#heading4", "text-black") // add class toggle
    .addTo(controller);
  new ScrollMagic.Scene({triggerElement: "#trigger5", duration: document.getElementById('trigger5').clientHeight})
    .setClassToggle("#heading5", "text-black") // add class toggle
    .addTo(controller);
  new ScrollMagic.Scene({triggerElement: "#trigger6", duration: document.getElementById('trigger6').clientHeight})
    .setClassToggle("#heading6", "text-black") // add class toggle
    .addTo(controller);

  var tween = document.getElementById('tween');
  var tween1 = document.getElementById('tween1');
  var tween2 = document.getElementById('tween2');
  var tl = new TimelineMax();

  tl.from(tween, tween1.clientHeight, {backgroundColor: "rgba(0, 120, 210, 1)"});
  tl.to(tween, tween2.clientHeight, {backgroundColor: "rgba(0, 120, 210, 0)"});

  new ScrollMagic.Scene({
    triggerElement: tween,
    duration: document.getElementById('trigger1').clientHeight,
  }).setTween('.marker-line', 1, {opacity: 0.5})
    .addTo(controller);

  new ScrollMagic.Scene({
    triggerElement: document.getElementById('markerEnd'),
    duration: document.getElementById('trigger5').clientHeight, // set trigger 6
  }).setTween('.marker-line', 1, {opacity: 0})
    .addTo(controller);

  new ScrollMagic.Scene({
    triggerElement: tween,
    duration: tween.clientHeight - tween2.clientHeight / 2
  })
    .setTween(tl)
    .addTo(controller);

  if (window.innerWidth > 1024) {
    var u = document.querySelectorAll('.js-fade-in-up-tween')
    var tw = new TimelineMax();

    u.forEach((function (elem) {
      var t = tw.from(elem, 0.5, {y: 40, autoAlpha: 0, delay: 0, ease: Linear.easeOut});
      new ScrollMagic.Scene({
        triggerElement: tween2,
        offset: -100,
        reverse: !0
      }).setTween(t)
        .addTo(controller)
    }));
  }

  // build tween
  var tweenAnchor = TweenMax.from("#animate", 0.5, {autoAlpha: 0, scale: 0.7});

  // build scene
  new ScrollMagic.Scene({triggerElement: "a#trigger1", duration: 200, triggerHook: "onLeave"})
      .setTween(tweenAnchor)
      // .addIndicators() // add indicators (requires plugin)
      .addTo(controller);

  new ScrollMagic.Scene({triggerElement: "a#trigger2", duration: 200, triggerHook: "onLeave"})
      .setTween(tweenAnchor)
      // .addIndicators() // add indicators (requires plugin)
      .addTo(controller);

  new ScrollMagic.Scene({triggerElement: "a#trigger3", duration: 200, triggerHook: "onLeave"})
      .setTween(tweenAnchor)
      // .addIndicators() // add indicators (requires plugin)
      .addTo(controller);

  new ScrollMagic.Scene({triggerElement: "a#trigger4", duration: 200, triggerHook: "onLeave"})
      .setTween(tweenAnchor)
      // .addIndicators() // add indicators (requires plugin)
      .addTo(controller);

  new ScrollMagic.Scene({triggerElement: "a#trigger5", duration: 200, triggerHook: "onLeave"})
      .setTween(tweenAnchor)
      // .addIndicators() // add indicators (requires plugin)
      .addTo(controller);

  new ScrollMagic.Scene({triggerElement: "a#trigger6", duration: 200, triggerHook: "onLeave"})
      .setTween(tweenAnchor)
      // .addIndicators() // add indicators (requires plugin)
      .addTo(controller);

  // change behaviour of controller to animate scroll instead of jump
  controller.scrollTo(function (newpos) {
    TweenMax.to(window, 0.5, {scrollTo: {y: newpos}});
  });

  //  bind scroll to anchor links
  // $(document).on("click", ".anchor", function (e) {
  //   var id = $(this).attr("href");
  //   if ($(id).length > 0) {
  //     e.preventDefault();
  //
  //     // trigger scroll
  //     controller.scrollTo(id);
  //
  //     // if supported by the browser we can even update the URL.
  //     if (window.history && window.history.pushState) {
  //       history.pushState("", document.title, id);
  //     }
  //   }
  // });

  /*if (document.cookie.indexOf("FooBar=true") == -1) {
    document.cookie = "FooBar=true; max-age=86400"; // 86400: seconds in a day
    $('#MyModal').modal('show');
  }*/

  setTimeout(function(){
    if (document.cookie.indexOf("FooBar=true") == -1) {
      document.cookie = "FooBar=true; max-age=86400;"; // max-age=86400 86400: seconds in a day
      $('#expopharm').removeClass("hidden");
    }
  },3000);

  $('.js-modal-close').on('click', function () {
    $('#expopharm').addClass('hidden');
  })

});

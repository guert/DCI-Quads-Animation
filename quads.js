TweenMax.staggerTo(".box", 1, {rotation:360, y:100}, 0.5, );
TweenMax.staggerTo(".box", 2, {autoAlpha:0, delay:2.9});
TweenMax.staggerTo(".quads-logo", 3, {autoAlpha:1, delay:4.0}, 3, );
TweenMax.staggerTo(".now-playing", 4, {autoAlpha:1, delay:4.5});

//The stagger parameter (0.5) controls the amount of time between the start of each tween. Change it to 0.2, 1 or 3 to see how it works.
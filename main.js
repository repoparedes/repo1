gsap.registerPlugin(ScrollTrigger);

gsap.set(".contactForm", { opacity: 0, y: 100, duration: 1});

gsap.to(".contactForm", {
    opacity: 1,
    y: 0,
    duration: 1,
    scrollTrigger: {
    trigger: ".contactForm",
    start: "top 80%",
    end: "bottom 80%",
    toggleActions: "play none none none",
    },
});
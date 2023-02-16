let observer = new IntersectionObserver(function (observables) {
    observables.forEach(function (observable) {
        if (observable.intersectionRatio > 0.1) {
            observable.target.classList.add('visible');
            observer.unobserve(observable.target);
        }
    })
    }, {
        threshold: [0.1]
    }
);

let sections = document.querySelectorAll('.section');
sections.forEach(section => {
    observer.observe(section);
});
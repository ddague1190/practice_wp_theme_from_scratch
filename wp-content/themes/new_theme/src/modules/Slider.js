class Slider {
    constructor() {


        this.currentSlide = 0;
        this.autoSlideTimer;

        if (document.querySelector(".carousel-inner")) {
            // gather slides
            this.slides = [...document.querySelectorAll(".carousel-item")]
            this.dotCount = this.slides.length

            // Generate the HTML for the navigation dots
            this.dots = []
            for (let i = 0; i < this.dotCount; i++) {

                let button = document.createElement('button');
                button.classList.add('carousel_bullet');
                if (i == 0) {
                    button.classList.add('active');
                }
                button.addEventListener('click', this.activateSlide.bind(this, i));
                this.dots.push(button)
            }

            // Add the dots HTML to the DOM
            for (let i = 0; i < this.dotCount; i++) {
                document.querySelector(".carousel_indicators").insertAdjacentElement("beforeend", this.dots[i]);
            }
        }
        this.autoSlider();
    }

    activateSlide(i, source) {

        if (source !== 'bot') {
            clearInterval(this.autoSlideTimer);
        }
        if (i != this.currentSlide) {
            this.slides[this.currentSlide].classList.remove('active')
            this.slides[i].classList.add('active')
            this.dots[this.currentSlide].classList.remove('active')
            this.dots[i].classList.add('active')
            this.currentSlide = i
        }
    }

    autoSlider() {
        this.autoSlideTimer = setInterval(()=> this.activateSlide((this.currentSlide+1)%this.dotCount, 'bot'), 5000);
    }

}

export default Slider

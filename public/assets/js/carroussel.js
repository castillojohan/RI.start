const carroussel = {
    
    carrousselItems: [],
    currentImage: 0,
    
    init: () => {
        const carrousselImages = document.querySelectorAll('div.main__content__carroussel img');
        carrousselImages.forEach(image => {
            carroussel.carrousselItems.push(image);
        });
        carroussel.bindingButtons();
        carroussel.goToslide(0);
    },

    bindingButtons: () => {
        const leftButton = document.querySelector('.left-arrow').addEventListener('click', carroussel.handleLeftClick);
        const rightButton = document.querySelector('.right-arrow').addEventListener('click', carroussel.handleRightClick); 
    },

    handleLeftClick: () => {
        const newCurrentImage = carroussel.currentImage <= 0 
            ? carroussel.carrousselItems.length -1 
            : carroussel.currentImage - 1;
        carroussel.goToslide(newCurrentImage);
    },

    handleRightClick: ()=> {
        const newCurrentImage = carroussel.currentImage === carroussel.carrousselItems.length -1 
            ? 0 
            : carroussel.currentImage +1 ;
        ;
        carroussel.goToslide(newCurrentImage);
    },

    goToslide: (newPosition) => {
        carroussel.carrousselItems[carroussel.currentImage].classList.remove('active');
        carroussel.carrousselItems[newPosition].classList.add('active');

        carroussel.currentImage = newPosition;
    }

}
document.addEventListener('DOMContentLoaded', carroussel.init);
const flashes = {
    fadeFlashes: (presentFlashes) => {
        presentFlashes.forEach(flashe => {
            setTimeout(() => {
                flashe.style.transition = 'opacity 1s ease-out';
                flashe.style.opacity = '0';

                flashe.addEventListener('transitionend', ()=> {
                    flashe.remove();
                })
            }, 3500);
        });
    }
}

export default flashes;
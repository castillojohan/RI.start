const decorationPattern = {
    init : () => {
        const sectionDescriptionTarget = document.querySelectorAll('.main__content__description');
        for (const section of sectionDescriptionTarget) {
            let randNumber = Math.floor(Math.random() * 9);
            switch (randNumber) {
                case 0:
                    section.classList.add('logo-pattern','centered');
                    break;
                case 1:
                    section.classList.add('logo-pattern', 'middle-right');
                    break;
                case 2:
                    section.classList.add('logo-pattern', 'corner-right');
                    break;
                case 3:
                    section.classList.add('logo-pattern', 'top-left');
                    break;
                case 4:
                    section.classList.add('logo-pattern', 'corner-left');
                    break;
                case (randNumber>4):
                    break;
                default:
                    break;
            }
        }
    },
}
document.addEventListener('DOMContentLoaded', decorationPattern.init);
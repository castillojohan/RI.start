import flashes from "./flashes.js";
import captcha from "./captcha.js";
import popup from "./popup.js";

const main = {
    init : () => {
        const haveFlashes = document.querySelectorAll('.alert');
        const haveContactForm = document.querySelector("form[name='contact']");
        const haveNewsLetterForm = document.querySelector("form[name='newsletter']");

        popup(['nav>div:first-of-type', 'div.burger-button a', 'div.close-button'], 'pull');
        popup(['div.cookie__details', 'div.manage__cookie', 'div.cookie__button'], 'popup');
        
        if(haveFlashes.length > 0){
            flashes.fadeFlashes(haveFlashes);
        }
        if(haveContactForm){
            captcha.getReactionTime('contact_reaction_time', "form[name='contact']");
        }
        if(haveNewsLetterForm){
            captcha.getReactionTime('newsletter_reaction_time', "form[name='newsletter']");
        }
    }
}

document.addEventListener('DOMContentLoaded', main.init);
const captcha = {
    getReactionTime : (inputContext, targetToListen) => {
        const startTime = new Date().getTime();
        let reactionTimeInput = document.getElementById(inputContext);

        document.querySelector(targetToListen).addEventListener('submit', function(){
            const endTime = new Date().getTime();
            const reactionTime = endTime - startTime;
            reactionTimeInput.value = reactionTime;
        });
    }    
}

document.addEventListener('DOMContentLoaded', captcha.init);

export default captcha;
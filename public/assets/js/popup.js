
/**
 * 
 * @param { Array } binds , take Array of string, needed for querySelector targeting; in order divTarget, buttonToOpen, buttonToClose
 * @param { String } className , take the class name you give to open and close your div in your html render. 
 */
function popup(binds, className){
    const insertTarget = document.querySelector(binds[0]);
    const openButtonTarget = document.querySelector(binds[1])
    const closeButtonTarget = document.querySelector(binds[2]);

    openButtonTarget.addEventListener('click', function(evt){
        evt.preventDefault();
        evt.stopPropagation();
        insertTarget.classList.add(className);
    });

    closeButtonTarget.addEventListener('click', closePopup)

    document.addEventListener('click', function(){
        if(insertTarget.classList.contains(className)){
            closePopup();
        }
    })

    function closePopup(){
        insertTarget.classList.remove(className);
    }
}

export default popup;
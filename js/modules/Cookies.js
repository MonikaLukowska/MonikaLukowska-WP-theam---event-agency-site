class Cookies {
    constructor(){
        this.cookie = document.querySelector('.cookie-notice');
        this.close = document.querySelector('.cookie-close');
        this.acceptCookies()

        if(!localStorage.getItem(this.cookie)) {
            this.cookie.style.display = 'flex';
            this.acceptCookies()
        }
    }

    acceptCookies() {
        this.close.addEventListener('click', (e) => {
           e.preventDefault();
            this.cookie.style.display = 'none';
            localStorage.setItem(this.cookie, true);
            console.log(localStorage);
        }) 

    }
 }
 export default Cookies
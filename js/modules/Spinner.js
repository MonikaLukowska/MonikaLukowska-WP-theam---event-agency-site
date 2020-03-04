

class Spinner {
    constructor(){
        this.el = document.querySelector('.spinner');
        this.hideSpinner ()

        document.addEventListener('load', () => this.hideSpinner());

        
    }

    hideSpinner() {
            this.el.style.opacity = 0;
            this.el.style.height= 0;
        }

}

export default Spinner
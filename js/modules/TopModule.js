class TopButton {
    constructor(){
        this.button = document.querySelector('.btn--up');

        console.log(this.button);
        this.button.addEventListener('click', () => this.moveUp())
    }

    moveUp(){
        window.scrollTo({
            top:0,
            left:0,
            behavior:'smooth'
        })
    }

}

export default TopButton;
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const app = {
    // handle on check
    handleOnCheckActive(element) {
        const btnCheckbox = $('.main__wrapper-stardust');
        btnCheckbox.addEventListener('click', function(e) {
            this.classList.toggle('active')
        })
        
    }
}

app.handleOnCheckActive('.main__wrapper-stardust');

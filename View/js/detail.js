const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const detail = {
    handleChangeImg() {
        const imagesBox = $$('.main__show-control-box');
        const showMainImage = $('.main__show-img');
        imagesBox.forEach(imgBox => {
            imgBox.onclick = function() {
                $('.main__show-control-box.active').classList.remove('active');
                this.classList.add('active');
                const pathImg = this.children[0].attributes.src.nodeValue;
                showMainImage.attributes.style.nodeValue = `background-image: url(${pathImg})`;
            }
        });
    },

    // handle change size
    handleChangeSize() {
        
    }
}

detail.handleChangeImg();
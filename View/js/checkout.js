const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const checkout = {
    
    // format money VND
    // format money
    formatMoneyVND(str) {
        const toStringStr = str.toString();
        return toStringStr.split('').reverse().reduce((prev, next, index) => {
            return ((index % 3) ? next : (next + '.')) + prev
        })
    },


    handleRenderProduct() {
        const _this = this;
        const getDataCartStorage = JSON.parse(localStorage.getItem('dataFromCart')) ?? [];
        const ulRoot = $('.main__wrapper-list');
        const htmls = getDataCartStorage.map((data) => {
            let sizeId = '';
            switch (data.sizeProduct) {
                case "38":
                    sizeId = '1';
                    break;
                case "39":
                    sizeId = '2';
                    break;
                case "40":
                    sizeId = '3';
                    break;
                case "41": 
                    sizeId = '4';
                    break;
                
                default:
                    break;
            }


            return `
            <li class="main__wrapper-item">
                <span class="main__id-product-from-cart" hidden name="id-product">${data.idProduct}</span>
                <div class="main__wrapper-box-item">
                    <div class="main__wrapper-box-avatar">
                        <div class="main__wrapper-box-img" name="img-product" style="background-image: url(${data.imgProduct})"></div>
                    </div>
                    <div class="main__wrapper-box-detail">
                        <h3 class="main__wrapper-box-detail-title" name="name-product">${data.nameProduct}</h3>
                        <p class="main__wrapper-box-detail-desc" name="size-product" value="${sizeId}">Size: ${data.sizeProduct}</p>
                        <div class="main__wrapper-box-detail-footer">
                            <div class="main__wrapper-box-detail-price" name="price-product" value="${data.priceProduct}">${_this.formatMoneyVND(data.priceProduct) + 'đ'}</div>
                            <div class="main__wrapper-box-control-quantity">
                                <button class="main__wrapper-box-quantity-discount">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <input type="text" name="amount-product" value="${data.amountProduct}" min="1" max="100" class="main__wrapper-box-quantity-input">
                                <button class="main__wrapper-box-quantity-inscrease">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>  
            `
        });
        ulRoot.innerHTML = htmls.join('');
    }
}

checkout.handleRenderProduct();

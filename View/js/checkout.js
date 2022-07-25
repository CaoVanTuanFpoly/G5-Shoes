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
                            <div class="main__wrapper-box-detail-price" name="price-product" default="${data.priceDefault}" value="${data.priceProduct}">${_this.formatMoneyVND(data.priceProduct) + 'đ'}</div>
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
    }, 

    localStorageFromCart(key) {
        const store = JSON.parse(localStorage.getItem('dataFromCart')) ?? [];
    
        const save = (data) => {
            localStorage.setItem(key, JSON.stringify(data));
        }

        const storage = {
            getItemByID(idProduct) {
                if (store.length > 0) {
                    const itemProduct = store.find(item => {
                        return item.idProduct === idProduct;
                    });
                    return itemProduct;
                }
                else {
                    throw new Error('is not data dataFormCart');
                }
            },

            set(idProduct, amountProduct, newPrice) {
                if (store.length > 0) {
                    let flagIndex;
                    const response = store.some((item, index) => {
                        flagIndex = index;
                        return item.idProduct === idProduct;
                    })
                    if (response) {
                        store.forEach((element) => {
                            if (element.idProduct === idProduct) {
                                store.splice(flagIndex, 1, {
                                    idProduct,
                                    nameProduct: element.nameProduct,
                                    sizeProduct : element.sizeProduct,
                                    amountProduct,
                                    priceProduct: newPrice,
                                    imgProduct: element.imgProduct,
                                    priceDefault: element.priceDefault
                                });
                                save(store);
                            }
                        })
                    }
                }
                else {
                    throw new Error('is not data dataFormCart');
                }                
            },

            remove() {

            }
        }


        return storage;
    },

    handleChangeAmount() {
        const _this = this;
        const parent = $$('.main__wrapper-item');
        const total = $('.main__order-total-price');
        const numberTotal = Number.parseInt(total.attributes.value.nodeValue);
        Array.from(parent).forEach((item, index) => {
            const btnIncrease = item.querySelector('.main__wrapper-box-quantity-inscrease');
            const btnDecrease = item.querySelector('.main__wrapper-box-quantity-discount');
            const input = item.querySelector('.main__wrapper-box-quantity-input');
            const idProduct = item.querySelector('.main__id-product-from-cart');
            const priceProduct = item.querySelector('.main__wrapper-box-detail-price');
            btnIncrease.onclick = function() {
                const numberInputValue = Number.parseInt(input.attributes.value.nodeValue);
                if (numberInputValue >= 100) {
                    input.setAttribute('value', 100);
                }
                else {
                    const sum = numberInputValue + 1;
                    input.setAttribute('value', sum);
                    
                    const numberPriceProduct = Number.parseInt(priceProduct.attributes.value.nodeValue);
                    const priceDefault = Number.parseInt(priceProduct.attributes.default.nodeValue);
                    const sumPrice = numberPriceProduct + priceDefault;
                    priceProduct.attributes.value.nodeValue = sumPrice;
                    priceProduct.textContent = _this.formatMoneyVND(sumPrice);
                    const sumRootTotal = Array.from(parent).reduce((acc, element) => {
                        const valuePrice = element.querySelector('.main__wrapper-box-detail-price').attributes.value.nodeValue;
                        return acc + Number.parseInt(valuePrice);
                    }, 0);
                    $('.main__order-subtotal-price').textContent = _this.formatMoneyVND(sumRootTotal) + 'đ';
                    total.setAttribute('value', sumRootTotal);
                    total.textContent = _this.formatMoneyVND(sumRootTotal) + 'đ';
                    const data = _this.localStorageFromCart('dataFromCart');
                    data.set(idProduct.textContent, sum, sumPrice);
                }
            }

            btnDecrease.onclick = function() {
                const numberInputValue = Number.parseInt(input.attributes.value.nodeValue);
                if (numberInputValue > 1) {
                    const minus = numberInputValue - 1;
                    input.setAttribute('value', minus);
                    const numberPriceProduct = Number.parseInt(priceProduct.attributes.value.nodeValue);
                    const priceDefault = Number.parseInt(priceProduct.attributes.default.nodeValue);
                    const sumPrice = numberPriceProduct - priceDefault;
                    priceProduct.attributes.value.nodeValue = sumPrice;
                    priceProduct.textContent = _this.formatMoneyVND(sumPrice);
                    const numberTotalCurrent = Number.parseInt(total.attributes.value.nodeValue);
                    const sumRootTotal = numberTotalCurrent - priceDefault;
                    total.setAttribute('value', sumRootTotal);
                    $('.main__order-subtotal-price').textContent = _this.formatMoneyVND(sumRootTotal) + 'đ';
                    total.textContent = _this.formatMoneyVND(sumRootTotal) + 'đ';
                    const data = _this.localStorageFromCart('dataFromCart');
                    data.set(idProduct.textContent, minus, sumPrice);
                }
                else {
                    input.setAttribute('value', 1);
                    const priceDefault = Number.parseInt(priceProduct.attributes.default.nodeValue);
                    priceProduct.attributes.value.nodeValue = priceDefault;
                    priceProduct.textContent = _this.formatMoneyVND(priceDefault);
                }
            }
        })
        
    },

    sumTotal() {
        const _this = this;
        const total = $('.main__order-total-price');
        const subTotal = $('.main__order-subtotal-price');
        const priceEachProduct = $$('.main__wrapper-box-detail-price');
        const sumTotal = Array.from(priceEachProduct).reduce((acc, price) => {
            const numberPrice = Number.parseInt(price.attributes.value.nodeValue);
            return acc + numberPrice;
        }, 0);
        total.setAttribute('value', sumTotal);
        total.textContent = _this.formatMoneyVND(sumTotal) + 'đ';
        subTotal.textContent = _this.formatMoneyVND(sumTotal) + 'đ';
    }
}

checkout.handleRenderProduct();
checkout.sumTotal();
checkout.handleChangeAmount();
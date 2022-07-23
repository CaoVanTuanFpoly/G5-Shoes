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
        const sizes = $$('.main__information-size-box');
        const errorMassage = $('.main__information-size'); 
        const errorText = errorMassage.querySelector('.main__information-size-error-text');

        sizes.forEach((size) => {
            size.onclick = function () {
                let actives = $$('.main__information-size-box.active');
                if (actives.length > 0) {
                    actives[0].className = actives[0].className.replace(' active', '');
                    actives[0].removeAttribute('name');
                }
                this.setAttribute('name', 'size-value');
                this.className += ' active';
                errorMassage.classList.remove('error');
                errorText.innerText = '';
            }
        })
    },

    handleChangeCount() {
        const btnIncrease = $('.main__information-amount-quantity-increase');
        const btnDecrease = $('.main__information-amount-quantity-decrease');
        const inputAmount = $('.main__information-amount-quantity-input');
        const priceProduct = $('.main__information-current-price');
        const defaultPrice = $('.price__store');

        function defaultAttributeValuePrice () {
            priceProduct.setAttribute('value', Number(defaultPrice.textContent));
        }
        defaultAttributeValuePrice();

        btnIncrease.onclick = () => {
            if (inputAmount.value >= 100) {
                inputAmount.value = 100;
                inputAmount.attributes.value.nodeValue = 100;
            }
            else {
                inputAmount.value = Number(inputAmount.value) + 1;
                inputAmount.attributes.value.nodeValue = inputAmount.value;
                const total = Number(defaultPrice.textContent) * (inputAmount.attributes.value.nodeValue);
                priceProduct.setAttribute('value', total)
                priceProduct.textContent = total;
            }
        }

        btnDecrease.onclick = () => {
            if (inputAmount.value > 1) {
                inputAmount.attributes.value.nodeValue = inputAmount.value;
                const total = Number(priceProduct.textContent) - Number(defaultPrice.textContent);
                priceProduct.setAttribute('value', total)
                priceProduct.textContent = total;
                inputAmount.value = Number(inputAmount.value) - 1;
            }
            else {
                inputAmount.value = 1;
                inputAmount.attributes.value.nodeValue = 1;
            }
        }
    },

    handleSubmit() {
        const btnAddCart = $('#add-cart');
        const btnBuyNow = $('#buy-now');
        const boxSizes = $$('.main__information-size-box');
        const errorMassage = $('.main__information-size'); 
        const errorText = errorMassage.querySelector('.main__information-size-error-text');
        const formAction = $('#form-action-detail');
        
        btnAddCart.onclick = e => {
            
            let sizeID = '';
            const isSuccess = Array.from(boxSizes).some((box) => {
                if (box.className !== 'main__information-size-box active') {
                    errorMassage.classList.add('error');
                    errorText.innerText = 'Vui lòng chọn một size giày cụ thể';
                } else {
                    errorMassage.classList.remove('error');
                    errorText.innerText = '';
                    sizeID = box.children[0].textContent;
                }

                return box.className === 'main__information-size-box active';
            });
            function pathSubmit () {
                formAction.setAttribute('action', './cart.php');
                e.submit;

                // start save localStorage
                const amountInput = $('.main__information-amount-quantity-input');
                const idProduct = $('#id-product');
                const imgProduct = $('#img-root');
                const nameProduct = $('.main__information-title');
                const priceProduct = $('.main__information-current-price');
                const defaultPrice = $('.price__store');
                
                
                if (sizeID) {
                    const getStorage = JSON.parse(localStorage.getItem('valueFromDetail')) ?? [];
                    
                    if (getStorage.length > 0) {
                        const value = getStorage.some((store) => {
                            return store.idProd === idProduct.textContent;
                        });

                        if (value) {
                            getStorage.forEach((store, index) => {
                                if (store.idProd === idProduct.textContent) {
                                    getStorage.splice(index, 1, 
                                        {
                                            idProd: idProduct.textContent,
                                            size: sizeID, 
                                            amount: amountInput.value,
                                            nameProd: nameProduct.textContent,
                                            priceProd: priceProduct.attributes.value.nodeValue,
                                            defaultPrice: Number(defaultPrice.textContent),
                                            imgProd: imgProduct.attributes.src.nodeValue
                                        }
                                        )
                                    const jsonArrayFrom = JSON.stringify(getStorage);
                                    localStorage.setItem('valueFromDetail', jsonArrayFrom);
                                }
                                 
                            });
                        }
                        else {
                            getStorage.unshift(
                                {
                                    idProd: idProduct.textContent, 
                                    size: sizeID, 
                                    amount: amountInput.value,
                                    nameProd: nameProduct.textContent,
                                    priceProd: priceProduct.attributes.value.nodeValue,
                                    defaultPrice: Number(defaultPrice.textContent),
                                    imgProd: imgProduct.attributes.src.nodeValue
                                })
                            const jsonArrayFrom = JSON.stringify(getStorage);
                            localStorage.setItem('valueFromDetail', jsonArrayFrom);
                        }
                    }
                    else {
                        getStorage.unshift(
                            {
                                idProd: idProduct.textContent, 
                                size: sizeID, 
                                amount: amountInput.value,
                                nameProd: nameProduct.textContent,
                                priceProd: priceProduct.attributes.value.nodeValue,
                                defaultPrice: Number(defaultPrice.textContent),
                                imgProd: imgProduct.attributes.src.nodeValue
                            })
                        const jsonArrayFrom = JSON.stringify(getStorage);
                        localStorage.setItem('valueFromDetail', jsonArrayFrom);
                    }

                    
                        
                    
                } else {
                    throw new Error('no value of size product');
                }

                // end save localStorage
            }

            isSuccess ? pathSubmit() : e.preventDefault();
        }

        btnBuyNow.onclick = e => {
            const isSuccess = Array.from(boxSizes).some((box) => {
                if (box.className !== 'main__information-size-box active') {
                    errorMassage.classList.add('error');
                    errorText.innerText = 'Vui lòng chọn một size giày cụ thể';
                } else {
                    errorMassage.classList.remove('error');
                    errorText.innerText = '';
                }

                return box.className === 'main__information-size-box active';
            });
            
            function pathSubmit () {
                formAction.setAttribute('action', './detailBuyNowActions.php');
                e.submit;
            }
            isSuccess ? pathSubmit() : e.preventDefault();
        }

    },

    // mai code phần cart;


}

detail.handleChangeImg();
detail.handleChangeSize();
detail.handleSubmit();
detail.handleChangeCount();
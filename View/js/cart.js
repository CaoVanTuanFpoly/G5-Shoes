const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const cart = {
  
  // handle render product
  handleRenderProduct() {
    const stores = JSON.parse(localStorage.getItem("valueFromDetail")) ?? [];
    if (stores) {
      const parent = $(".main-render-product");

      const data = stores
        .map((store, index) => {
          return `
            <div class="main__wrapper-product">
            <span class="idProd__store" hidden>${store.idProd}</span>
            <div class="main__wrapper-product-main">
                <!-- active là class khi checkbox được check -->
                <label for="#checkbox-item" class="main__wrapper-product-label">
                    <input id="checkbox-item" type="checkbox" class="main__wrapper-product-input">
                    <div class="main__wrapper-product-wrapper-checkbox">
                        <i class="fa-solid fa-check main__wrapper-product-checkbox-icon"></i>
                    </div>
                </label>
                <div class="main__wrapper-product-info">
                    <a class="main__wrapper-product-info-avatar">
                        <img src="${store.imgProd}" alt="" class="main__wrapper-product-info-img">
                    </a>
                    <div class="main__wrapper-product-info-text">
                        <h3 class="main__wrapper-product-info-name">${store.nameProd}</h3>
                        <div class="main__wrapper-product-info-desc">
                            <span class="main__wrapper-product-info-sale">30% giảm</span>
                            <span class="main__wrapper-product-info-freeship">Free ship</span>
                        </div>
                    </div>
                </div>
                <!-- product size -->
                <div class="main__wrapper-product-size">${store.size}</div>
                <!-- product quantity -->
                <div class="main__wrapper-product-quantity">
                    <div class="main__wrapper-product-quantity-box">
                        <button class="main__wrapper-product-quantity-discount">
                            <i class="fa-solid fa-minus"></i>
                        </button>
                        <input type="text" value="${store.amount}" min="1" max="99" class="main__wrapper-product-quantity-input">
                        <button class="main__wrapper-product-quantity-increase">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>
                <!-- product price -->
                <div class="main__wrapper-product-quantity-price">
                    <span class="main__wrapper-product-quantity-price-old">280.000đ</span>
                    <span class="main__wrapper-product-quantity-price-current" value="${store.priceProd}">${store.priceProd}</span>
                </div>
            </div>
            <div class="main__wrapper-product-manipulation">
                <div class="main__wrapper-product-favourite">
                    <i class="fa-regular fa-heart"></i>
                    <span class="main__wrapper-product-text">Yêu thích</span>
                </div>
                <div class="main__wrapper-product-remove">
                    <i class="fa-regular fa-trash-can"></i>
                    <span class="main__wrapper-product-text">Xoá</span>
                </div>
            </div>
            <div class="modal">
                <div class="modal__message">
                    <div class="modal__header">
                        <i class="fa-regular fa-circle-question"></i>
                        <span class="modal__header-title">G5 Question</span>
                    </div>
                    <div class="modal__content">
                        <h3 class="modal__content-text">Bạn có muốn xoá sản phẩm có tên là ${store.nameProd} này không?</h3>
                    </div>
                    <div class="modal__actions">
                        <button class="modal__actions-agree">
                            <i class="fa-solid fa-check modal__icon"></i>
                            <span class="modal__actions-agree-title">Đồng Ý</span>
                        </button>
                        <button class="modal__actions-cancel">
                            <i class="fa-solid fa-xmark modal__icon"></i>
                            <span class="modal__actions-agree-title">Huỷ Bỏ</span>
                        </button>
                    </div>
                    </div>
                </div>
            </div>
            `;
        })
        .join("");

      parent.innerHTML = data;
    } else {
      throw new Error("localStorage is not data");
    }
  },

  handleActions() {
    function localStorageProduct(key) {
      const stores = JSON.parse(localStorage.getItem(key)) ?? [];

      const save = (data) => {
        localStorage.setItem(key, JSON.stringify(data));
      };

      const store = {
        get(idProduct) {
          const response = stores.find((store) => store.idProd === idProduct);
          return response;
        },
        set(idProduct, amount, newPrice) {
          if (stores.length > 0) {
            const response = stores.find((store) => store.idProd === idProduct);
            if (response) {
              stores.forEach((store, index) => {
                if (store.idProd === idProduct) {
                  stores.splice(index, 1, {
                    idProd: store.idProd,
                    size: store.size,
                    amount: amount,
                    nameProd: store.nameProd,
                    priceProd: newPrice,
                    defaultPrice: store.defaultPrice,
                    imgProd: store.imgProd,
                  });
                  save(stores);
                }
              });
            }
          } else {
            throw new Error(
              `Can't get the product because there are no products`
            );
          }
        },

        remove(idProduct) {
            if (stores.length > 0) {
                const response = stores.find((store) => store.idProd === idProduct);
                if (response) {
                  stores.forEach((store, index) => {
                    if (store.idProd === idProduct) {
                      stores.splice(index, 1);
                      save(stores);
                    }
                  });
                }
              } else {
                throw new Error(
                  `Can't remove the product because there are no products`
                );
              }
        }
      };

      return store;
    }

    function handleActionsPriceChange(condition, amount, idPro, currentPrice) {
        const numberAmount = Number(amount);
        const numberCurrentPrice = Number(currentPrice);

      if (arguments.length > 4) {
        throw new Error("arguments cannot be more than 4 arguments");
      } else {
        if (condition === "increase" || condition === "decrease") {
          if (condition === "increase") {
            const dataStore = localStorageProduct("valueFromDetail");
            const priceStore = dataStore.get(idPro);
            const numberPriceDefaultStore = Number(priceStore.defaultPrice);
            const total = numberCurrentPrice + numberPriceDefaultStore;
            dataStore.set(idPro, numberAmount, total);
            return total;
          } else {
            const dataStore = localStorageProduct("valueFromDetail");
            const priceStore = dataStore.get(idPro);
            const numberPriceDefaultStore = Number(priceStore.defaultPrice);
            if (numberAmount === 1) {
                const total = numberPriceDefaultStore;
                dataStore.set(idPro, numberAmount, total);
                return total;
            }
            else {
                const total = numberCurrentPrice - numberPriceDefaultStore;
                dataStore.set(idPro, numberAmount, total);
                return total;
            }
            
          }
        } else {
          throw new Error(
            'The first argument has a name of "increase" or "decrease"'
          );
        }
      }
    }


    // handle calculate total checkout
    const totalCheckOutView = $('.main__checkout-right-total-price');
    function handleToTalCheckOut () {
        const listProduct = $$('.main__wrapper-product-quantity-price-current');
        const totalCheckOut = Array.from(listProduct).reduce((acc, product) => {
            const numberPriceProduct = Number(product.attributes.value.nodeValue);
            return acc + numberPriceProduct;
        }, 0)
        totalCheckOutView.innerText = totalCheckOut;
    }
    handleToTalCheckOut();


    const parents = $$(".main__wrapper-product");

    Array.from(parents).forEach((parent) => {
        const btnIncrease = parent.querySelector(".main__wrapper-product-quantity-increase");
        const btnDecrease = parent.querySelector(".main__wrapper-product-quantity-discount");
        const inputAmount = parent.querySelector(".main__wrapper-product-quantity-input");
        const priceProduct = parent.querySelector(".main__wrapper-product-quantity-price-current");
        const idProductStore = parent.querySelector(".idProd__store");


        

        btnIncrease.onclick = () => {
            if (inputAmount.value >= 100) {
                inputAmount.value = 100;
                inputAmount.attributes.value.nodeValue = 100;
            } else {
                inputAmount.value = Number(inputAmount.value) + 1;
                inputAmount.attributes.value.nodeValue = inputAmount.value;
                const totalPrice = handleActionsPriceChange(
                    "increase",
                    inputAmount.attributes.value.nodeValue,
                    idProductStore.textContent,
                    priceProduct.textContent
                );
                priceProduct.textContent = totalPrice;
                priceProduct.attributes.value.nodeValue = totalPrice;
                handleToTalCheckOut();
            }
        };

        btnDecrease.onclick = () => {
            if (inputAmount.value > 1) {
                inputAmount.value = Number(inputAmount.value) - 1;
                inputAmount.attributes.value.nodeValue = inputAmount.value;
                const totalPrice = handleActionsPriceChange(
                    "decrease",
                    inputAmount.attributes.value.nodeValue,
                    idProductStore.textContent,
                    priceProduct.textContent
                    );
                    priceProduct.textContent = totalPrice;
                    priceProduct.attributes.value.nodeValue = totalPrice;
                    
                handleToTalCheckOut();
            } else {
                inputAmount.value = 1;
                ;
                const totalPrice = handleActionsPriceChange(
                    "decrease",
                    inputAmount.attributes.value.nodeValue = 1,
                    idProductStore.textContent,
                    priceProduct.textContent
                    );
                    inputAmount.attributes.value.nodeValue = inputAmount.value;
                    priceProduct.textContent = totalPrice;
                    priceProduct.attributes.value.nodeValue = totalPrice;
                    handleToTalCheckOut();
            }
        };

       
        function removeProduct() {
            const btnRemoveProduct = parent.querySelector('.main__wrapper-product-remove');
             // actions remove
            const modal = parent.querySelector('.modal');
            const authModal = parent.querySelector('.modal__message');
            const btnAgree = parent.querySelector(".modal__actions-agree");
            const btnCancel = parent.querySelector('.modal__actions-cancel');
            
            // handle remove
            function handleShowModal() {
                modal.classList.add("active");
            }

            function handleHideModal() {
                modal.classList.remove("active");
            }

            btnRemoveProduct.addEventListener('click', handleShowModal);
            btnCancel.addEventListener('click', handleHideModal);
            modal.addEventListener('click', handleHideModal);
            authModal.addEventListener('click', e => e.stopPropagation());

            btnAgree.onclick = function() {
                const dataStore = localStorageProduct("valueFromDetail");
                dataStore.remove(idProductStore.textContent);
                handleHideModal();
                window.location.reload();
            }
        }
        removeProduct();
    });
  },
    

  	// handle on check
	handleOnCheckActive() {
		const listProduct = $$('.main__wrapper-product');
		const btnCheckAll = $('.main__wrapper-stardust');
		btnCheckAll.onclick = function () {
			this.classList.toggle('active');

			if (this.classList.contains('active')) {
				Array.from(listProduct).forEach((product, index) => {
					const productItemCheck = product.querySelector('.main__wrapper-product-label');
					productItemCheck.classList.add('active');
				});
				const textTotal = $('.main__checkout-total-title');
				console.log(textTotal);
				textTotal.innerText = `Tổng thanh toán(${Array.from(listProduct).length} sản phẩm):`;
			}	
			else {
				Array.from(listProduct).forEach((product, index) => {
					const productItemCheck = product.querySelector('.main__wrapper-product-label');
					productItemCheck.classList.remove('active');
				});
				const textTotal = $('.main__checkout-total-title');
				console.log(textTotal);
				textTotal.innerText = `Tổng thanh toán(0 sản phẩm):`;
			}
		}

		
	},
    
};

// ngày mai làm phần chẹcked và check từng sản phẩm, check ông nào ông đấy thêm vào localStorage với key là dataFromCart

cart.handleRenderProduct();
cart.handleActions();
cart.handleOnCheckActive();

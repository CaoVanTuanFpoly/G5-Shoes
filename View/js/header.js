const query = document.querySelector.bind(document);
const queries = document.querySelectorAll.bind(document);

const header = {

    // format money
    formatMoneyVND(str) {
        const toStringStr = str.toString();
        return toStringStr.split('').reverse().reduce((prev, next, index) => {
            return ((index % 3) ? next : (next + '.')) + prev
        })
    },

    handleShowNotification() {
        const btnNotification = query('.header__information-link.ting');
        const modalNotification = query('.header__notification');
        btnNotification.addEventListener('click', () => {
            modalNotification.classList.toggle('active');
        })
        document.addEventListener('click', (e) => {
            if (e.target.className !== 'header__information-link ting' && e.target.className !== 'header__notification active' && e.target.className !== 'fa-regular fa-bell' && e.target.className !== 'header__information-count-information') {
                modalNotification.classList.remove('active');
            }
        })
        modalNotification.addEventListener('click', e => {
            e.stopPropagation();
        })
    },

    // handle show hide cart
    handleShowCart() {
        const _this = this;
        const btn = query('.header__information-link.cart');
        const headerCart = query('.header__cart');
        const listProductFormCart = JSON.parse(localStorage.getItem('valueFromDetail')) ?? [];
        const ulRoot = query('.header__cart-list');

        if (listProductFormCart.length > 0) {
            const html = listProductFormCart.map((product) => {
                return `
                    <li class="header__cart-item">
                        <a class="header__cart-link">
                            <div class="header__cart-info">
                                <div class="header__cart-info-avatar">
                                    <img src="${product.imgProd}" alt="" class="header__cart-info-img">
                                </div>
                                <div class="header__cart-info-text">
                                    <h3 class="header__cart-info-name">${product.nameProd}</h3>
                                    <p class="header__cart-info-desc">Size: ${product.size}</p>
                                    <p class="header__cart-info-desc">Số lượng: ${product.amount}</p>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="header__cart-component">
                                <span class="header__cart-total-component">${_this.formatMoneyVND(product.priceProd) + 'đ'}</span>
                            </div>
                        </a>
                    </li>
                `
            });
            ulRoot.innerHTML = html.join('');
            const cartLink = query('.header__cart-link-navigation');
            cartLink.style.display = 'inline-block';
        }
        else {
            const cartLink = query('.header__cart-link-navigation');
            const imgMessage = document.createElement('img');
            const h4Message = document.createElement('h4');
            imgMessage.setAttribute('src', 'http://bepharco.com/no-products-found.png');
            imgMessage.style.width = '160px';
            imgMessage.style.height = '160px';
            imgMessage.style.objectFit = 'contain';
            h4Message.innerText = 'Chưa có sản phẩm nào trong giỏ hàng của bạn';
            h4Message.style.fontSize = '1.5rem';
            h4Message.style.color = '#999';
            h4Message.style.textAlign = 'center';

            cartLink.style.display = 'none';
            ulRoot.appendChild(imgMessage);
            ulRoot.appendChild(h4Message);
            ulRoot.style.display = 'flex';
            ulRoot.style.alignItems = 'center';
            ulRoot.style.JustifyContent = 'center';
            ulRoot.style.flexDirection = 'column';
        }
        

        
        
        const countCart = query('.header__information-count-cart');
        if (listProductFormCart.length > 0) {
            countCart.innerText = listProductFormCart.length;
            countCart.style.display = 'flex';
        }
        else {
            countCart.style.display = 'none';
        }



        btn.onclick = () => {
            headerCart.classList.toggle('active');
        }

        document.addEventListener('click', e => {
            if (e.target.className !== 'header__information-link cart' && e.target.className !== 'header__information-link-cart' && e.target.className !== 'header__information-count-cart' && e.target.className !== 'header__information-link-cart' && e.target.className.baseVal !== 'header__information-link-cart'&& e.target.className.baseVal !== '') {
                headerCart.classList.remove('active');
            }
        })
        
        headerCart.onclick = e => {
            e.stopPropagation();
        }
    } 
}

header.handleShowNotification()
header.handleShowCart();

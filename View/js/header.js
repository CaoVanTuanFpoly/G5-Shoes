const query = document.querySelector.bind(document);
const queries = document.querySelectorAll.bind(document);

const header = {
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
        const btn = query('.header__information-link.cart');
        const headerCart = query('.header__cart');
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

<?php
    include('./header.php');
?>
<!-- main -->
<div class="main">
    <link rel="stylesheet" href="./css/cartScss.css"/>
    <div class="grid wide">
        <h2 class="main__title">Giỏ hàng của tôi</h2>
        <p class="main__note">
            <i class="fa-solid fa-circle-exclamation main__note-icon"></i>
            <span class="main__note-text">G5 Shoes thông báo: quý khách vui lòng kiểm tra thông tin đầy đủ trước khi đặt
                hàng</span>
        </p>
        <!-- main content product -->
        <div class="main__wrapper">
            <div class="main__wrapper-table">
                <label for="#checkbox-all" class="main__wrapper-stardust">
                    <input id="checkbox-all" type="checkbox" class="main__wrapper-stardust-input">
                    <div class="main__wrapper-stardust-box">
                        <i class="fa-solid fa-check main__wrapper-stardust-box-icon"></i>
                    </div>
                </label>
                <div class="main__wrapper-title product">Sản phẩm</div>
                <div class="main__wrapper-title size">Size giày</div>
                <div class="main__wrapper-title quantity">Số lượng</div>
                <div class="main__wrapper-title price">Thành tiền</div>

            </div>
            <!-- cart product 1 -->
            <div class="main__wrapper-product">
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
                            <img src="./images/giay-nike.png" alt="" class="main__wrapper-product-info-img">
                        </a>
                        <div class="main__wrapper-product-info-text">
                            <h3 class="main__wrapper-product-info-name">Giày nike mới nhất test giàym giày nike xấu
                                nhất, giày nike tệ nhất</h3>
                            <div class="main__wrapper-product-info-desc">
                                <span class="main__wrapper-product-info-sale">30% giảm</span>
                                <span class="main__wrapper-product-info-freeship">Free ship</span>
                            </div>
                        </div>
                    </div>
                    <!-- product size -->
                    <div class="main__wrapper-product-size">38</div>
                    <!-- product quantity -->
                    <div class="main__wrapper-product-quantity">
                        <div class="main__wrapper-product-quantity-box">
                            <button class="main__wrapper-product-quantity-discount">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <input type="text" value="1" min="1" max="99" class="main__wrapper-product-quantity-input">
                            <button class="main__wrapper-product-quantity-increase">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- product price -->
                    <div class="main__wrapper-product-quantity-price">
                        <span class="main__wrapper-product-quantity-price-old">280.000đ</span>
                        <span class="main__wrapper-product-quantity-price-current">200.000đ</span>
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
            </div>
            <!-- cart product 2 -->
            <div class="main__wrapper-product">
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
                            <img src="./images/giay-nike.png" alt="" class="main__wrapper-product-info-img">
                        </a>
                        <div class="main__wrapper-product-info-text">
                            <h3 class="main__wrapper-product-info-name">Giày nike mới nhất test giàym giày nike xấu
                                nhất, giày nike tệ nhất</h3>
                            <div class="main__wrapper-product-info-desc">
                                <span class="main__wrapper-product-info-sale">30% giảm</span>
                                <span class="main__wrapper-product-info-freeship">Free ship</span>
                            </div>
                        </div>
                    </div>
                    <!-- product size -->
                    <div class="main__wrapper-product-size">38</div>
                    <!-- product quantity -->
                    <div class="main__wrapper-product-quantity">
                        <div class="main__wrapper-product-quantity-box">
                            <button class="main__wrapper-product-quantity-discount">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <input type="text" value="1" min="1" max="99" class="main__wrapper-product-quantity-input">
                            <button class="main__wrapper-product-quantity-increase">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- product price -->
                    <div class="main__wrapper-product-quantity-price">
                        <span class="main__wrapper-product-quantity-price-old">280.000đ</span>
                        <span class="main__wrapper-product-quantity-price-current">200.000đ</span>
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
            </div>
        </div>
        <!-- main checkout -->
        <div class="main__checkout">
            <div class="main__checkout-left">
                <label for="#checkout-all" class="main__checkout-stardust">
                    <input id="checkout-all" type="checkbox" class="main__checkout-stardust-input">
                    <div class="main__checkout-stardust-box">
                        <i class="fa-solid fa-check main__checkout-stardust-box-icon"></i>
                    </div>
                </label>
                <button class="main__checkout-btn-select-all">Chọn tất cả</button>
                <button class="main__checkout-btn-remove">
                    <i class="fa-regular fa-trash-can"></i>
                    <span class="main__checkout-btn-remove-text">Xoá</span>
                </button>
                <p class="main__checkout-selected">1 sản phẩm đã chọn</p>
            </div>
            <div class="main__checkout-right">
                <div class="main__checkout-right-total">
                    Tổng thanh toán(<span>1</span> sản phẩm):
                    <span class="main__checkout-right-total-price">280.000đ</span>
                </div>
                <a href="#" class="main__checkout-right-link-checkout">Mua Hàng</a>
            </div>
        </div>
    </div>
</div>
<script src="./js/cart.js"></script>
<?php
    include('./footer.php');
?>
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

            <div class="main-render-product">
                
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
                    <span class="main__checkout-total-title">Tổng thanh toán(<span>1</span> sản phẩm):</span>
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
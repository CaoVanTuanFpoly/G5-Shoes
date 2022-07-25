<?php
    include('./header.php');
?>
<!-- main -->
<div class="main">
            <link rel="stylesheet" href="./css/checkoutScss.css"/>
            <div class="grid wide">
                <h2 class="main__title">Thanh toán</h2>
                <p class="main__note">
                    <i class="fa-solid fa-circle-exclamation main__note-icon"></i>
                    <span class="main__note-text">G5 Shoes thông báo: quý khách vui lòng kiểm tra thông tin đầy đủ trước khi
                        đặt hàng</span>
                </p>
                <div class="main__content">
                    <form id="form-user-cart" action="" method="post">
                    <div class="row sm-gutter">
                        <div class="col l-8">
                            <div class="main__wrapper">
                                    <!-- box1 -->
                                    <div class="main__wrapper-box">
                                        <h1 class="main__wrapper-box-title">Chi tiết cá nhân</h1>
                                        <div class="main__wrapper-box-info">
                                            <div class="row sm-gutter">
                                                <div class="col l-6">
                                                    <div class="main__wrapper-box-component">
                                                        <label for="input-fullname" class="main__wrapper-box-component-label">Họ và tên</label>
                                                        <input id="input-fullname" type="text" class="main__wrapper-box-component-input">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                                <div class="col l-6">
                                                    <div class="main__wrapper-box-component">
                                                        <label for="input-numberphone" class="main__wrapper-box-component-label">Số điện thoại</label>
                                                        <input id="input-numberphone" type="text" class="main__wrapper-box-component-input">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                                <div class="col l-12">
                                                    <div class="main__wrapper-box-component mt-20">
                                                        <label for="input-email" class="main__wrapper-box-component-label">Địa chỉ email</label>
                                                        <input id="input-email" type="text" class="main__wrapper-box-component-input">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box 2 -->
                                    <div class="main__wrapper-box mt-40">
                                        <h1 class="main__wrapper-box-title">Chi tiết vận chuyển</h1>
                                        <div class="main__wrapper-box-info">
                                            <div class="row sm-gutter">
                                                <div class="col l-12">
                                                    <div class="main__wrapper-box-component">
                                                        <label for="input-address" class="main__wrapper-box-component-label">Địa chỉ giao hàng</label>
                                                        <input id="input-address" type="text" class="main__wrapper-box-component-input">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                                <div class="col l-4">
                                                    <div class="main__wrapper-box-component mt-20">
                                                        <label for="select-cities" class="main__wrapper-box-component-label">Tỉnh/Thành phố</label>
                                                        <select name="" id="select-cities" class="main__wrapper-box-component-input">
                                                            <option value="1" class="main__wrapper-box-component-option">Tp.HCM</option>
                                                        </select>
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                                <div class="col l-4">
                                                    <div class="main__wrapper-box-component mt-20">
                                                        <label for="select-districts" class="main__wrapper-box-component-label">Quận/Huyện</label>
                                                        <select name="" id="select-districts" class="main__wrapper-box-component-input">
                                                            <option value="1" class="main__wrapper-box-component-option">Quận Gò Vấp</option>
                                                        </select>
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                                <div class="col l-4">
                                                    <div class="main__wrapper-box-component mt-20">
                                                        <label for="select-wards" class="main__wrapper-box-component-label">Phường/Xã</label>
                                                        <select name="" id="select-wards" class="main__wrapper-box-component-input">
                                                            <option value="1" class="main__wrapper-box-component-option">Phường 15</option>
                                                        </select>
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box 2 -->
                                    <div class="main__wrapper-box mt-40">
                                        <h1 class="main__wrapper-box-title">Hình thức thanh toán</h1>
                                        <div class="main__wrapper-box-info">
                                            <div class="row sm-gutter">
                                                <div class="col l-6">
                                                    <div class="main__wrapper-box-component pd-10 paypal">
                                                        <label class="main__wrapper-box-component-label">Thanh toán thẻ</label>
                                                        <label for="input-momo" class="main__wrapper-box-component-view paypal">
                                                            <div class="main__wrapper-box-component-avatar">
                                                                <img src="https://www.coolmate.me/images/momo-icon.png" alt="" class="main__wrapper-box-component-img">
                                                            </div>
                                                            <div class="main__wrapper-box-component-text">
                                                                <h3 class="main__wrapper-box-component-title">Ví điện tử momo</h3>
                                                            </div>
                                                        </label>
                                                        <input id="input-momo" type="radio" name="radio-pay" class="main__wrapper-box-component-paypal-radio">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                                <div class="col l-6">
                                                    <div class="main__wrapper-box-component pd-10 paypal">
                                                        <label class="main__wrapper-box-component-label">Thanh toán thẻ</label>
                                                        <label for="input-zalopay" class="main__wrapper-box-component-view paypal">
                                                            <div class="main__wrapper-box-component-avatar">
                                                                <img src="https://www.coolmate.me/images/logo-zalopay.svg" alt="" class="main__wrapper-box-component-img">
                                                            </div>
                                                            <div class="main__wrapper-box-component-text">
                                                                <h3 class="main__wrapper-box-component-title">Ví điện tử zaloPay</h3>
                                                            </div>
                                                        </label>
                                                        <input id="input-zalopay" type="radio" name="radio-pay" class="main__wrapper-box-component-paypal-radio">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                                <div class="col l-6">
                                                    <div class="main__wrapper-box-component mt-20 pd-10 paypal">
                                                        <label class="main__wrapper-box-component-label">Thanh toán thẻ</label>
                                                        <label for="input-shopeepay" class="main__wrapper-box-component-view paypal">
                                                            <div class="main__wrapper-box-component-avatar">
                                                                <img src="https://mcdn.coolmate.me/image/September2021/195dbf69c0ac36f26fbd_(1).png" alt="" class="main__wrapper-box-component-img">
                                                            </div>
                                                            <div class="main__wrapper-box-component-text">
                                                                <h3 class="main__wrapper-box-component-title">Ví điện tử ShopeePay</h3>
                                                            </div>
                                                        </label>
                                                        <input id="input-shopeepay" type="radio" name="radio-pay" class="main__wrapper-box-component-paypal-radio">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                                <div class="col l-6">
                                                    <div class="main__wrapper-box-component mt-20 pd-10 paypal">
                                                        <label class="main__wrapper-box-component-label">Thanh toán thẻ</label>
                                                        <label for="input-viettelpay" class="main__wrapper-box-component-view paypal">
                                                            <div class="main__wrapper-box-component-avatar">
                                                                <img src="https://www.viettelpay.vn/_data/slider/slide_vtp.jpg" alt="" class="main__wrapper-box-component-img">
                                                            </div>
                                                            <div class="main__wrapper-box-component-text">
                                                                <h3 class="main__wrapper-box-component-title">Ví điện tử ViettelPay</h3>
                                                            </div>
                                                        </label>
                                                        <input id="input-viettelpay" type="radio" name="radio-pay" class="main__wrapper-box-component-paypal-radio">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col l-4">
                            <div class="main__wrapper">
                                <div class="main__wrapper-header">
                                    <h2 class="main__wrapper-title">Giỏ hàng của tôi</h2>
                                    <button class="main__wrapper-btn-remove-all">Xoá tất cả</button>
                                    <div class="modal">
                                        <div class="modal__message">
                                            <div class="modal__header">
                                                <i class="fa-regular fa-circle-question"></i>
                                                <span class="modal__header-title">G5 Thông Báo</span>
                                            </div>
                                            <div class="modal__content">
                                                <h3 class="modal__content-text">Bạn có muốn xoá hết tất cả sản phẩm không?</h3>
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
                                <ul class="main__wrapper-list">
                                                                     
                                </ul>
                                <div class="main__order">
                                    <div class="main__order-subtotal">
                                        <div class="main__order-subtotal-title">Tổng phụ</div>
                                        <div class="main__order-subtotal-price">0đ</div>
                                    </div>
                                    <div class="main__order-sales">
                                        <div class="main__order-sales-discount">Giảm giá(<span>0%</span>)</div>
                                        <div class="main__order-discount-price">-<span class="main__order-discount-number">0đ</span></div>
                                    </div>
                                    <div class="main__order-total">
                                        <div class="main__order-sales-discount">Tổng thanh toán</div>
                                        <div class="main__order-total-price" value="0">0đ</div>
                                    </div>
                                </div>
                                <!-- btn checkout -->
                                <button class="main__order-btn-total-price">Thanh toán</button>
                            </div>
                        </div>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <script src="./js/checkout.js"></script>
<?php
    include('./footer.php');
?>
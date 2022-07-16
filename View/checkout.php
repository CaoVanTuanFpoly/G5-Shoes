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
                    <div class="row sm-gutter">
                        <div class="col l-8">
                            <div class="main__wrapper">
                                <form id="form-user-cart" action="" method="post">
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
                                                        <label for="input-momo" class="main__wrapper-box-component-label">Thanh toán thẻ</label>
                                                        <div class="main__wrapper-box-component-view paypal">
                                                            <div class="main__wrapper-box-component-avatar">
                                                                <img src="https://www.coolmate.me/images/momo-icon.png" alt="" class="main__wrapper-box-component-img">
                                                            </div>
                                                            <div class="main__wrapper-box-component-text">
                                                                <h3 class="main__wrapper-box-component-title">Ví điện tử momo</h3>
                                                            </div>
                                                        </div>
                                                        <input id="input-momo" type="radio" class="main__wrapper-box-component-paypal-radio">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                                <div class="col l-6">
                                                    <div class="main__wrapper-box-component pd-10 paypal">
                                                        <label for="input-momo" class="main__wrapper-box-component-label">Thanh toán thẻ</label>
                                                        <div class="main__wrapper-box-component-view paypal">
                                                            <div class="main__wrapper-box-component-avatar">
                                                                <img src="https://www.coolmate.me/images/logo-zalopay.svg" alt="" class="main__wrapper-box-component-img">
                                                            </div>
                                                            <div class="main__wrapper-box-component-text">
                                                                <h3 class="main__wrapper-box-component-title">Ví điện tử zaloPay</h3>
                                                            </div>
                                                        </div>
                                                        <input id="input-momo" type="radio" class="main__wrapper-box-component-paypal-radio">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                                <div class="col l-6">
                                                    <div class="main__wrapper-box-component mt-20 pd-10 paypal">
                                                        <label for="input-momo" class="main__wrapper-box-component-label">Thanh toán thẻ</label>
                                                        <div class="main__wrapper-box-component-view paypal">
                                                            <div class="main__wrapper-box-component-avatar">
                                                                <img src="https://mcdn.coolmate.me/image/September2021/195dbf69c0ac36f26fbd_(1).png" alt="" class="main__wrapper-box-component-img">
                                                            </div>
                                                            <div class="main__wrapper-box-component-text">
                                                                <h3 class="main__wrapper-box-component-title">Ví điện tử ShopeePay</h3>
                                                            </div>
                                                        </div>
                                                        <input id="input-momo" type="radio" class="main__wrapper-box-component-paypal-radio">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                                <div class="col l-6">
                                                    <div class="main__wrapper-box-component mt-20 pd-10 paypal">
                                                        <label for="input-momo" class="main__wrapper-box-component-label">Thanh toán thẻ</label>
                                                        <div class="main__wrapper-box-component-view paypal">
                                                            <div class="main__wrapper-box-component-avatar">
                                                                <img src="https://www.viettelpay.vn/_data/slider/slide_vtp.jpg" alt="" class="main__wrapper-box-component-img">
                                                            </div>
                                                            <div class="main__wrapper-box-component-text">
                                                                <h3 class="main__wrapper-box-component-title">Ví điện tử ViettelPay</h3>
                                                            </div>
                                                        </div>
                                                        <input id="input-momo" type="radio" class="main__wrapper-box-component-paypal-radio">
                                                    </div>
                                                    <span class="main__wrapper-box-component-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col l-4">
                            <div class="main__wrapper">
                                <h2 class="main__wrapper-title">Giỏ hàng của tôi</h2>
                                <ul class="main__wrapper-list">
                                    <li class="main__wrapper-item">
                                        <div class="main__wrapper-box-item">
                                            <div class="main__wrapper-box-avatar">
                                                <div class="main__wrapper-box-img" style="background-image: url(./images/giay-mau-show.png)"></div>
                                            </div>
                                            <div class="main__wrapper-box-detail">
                                                <h3 class="main__wrapper-box-detail-title">Nike Performance giày tốt giá xịn xịn, giày đẹp nhất, hãy là người có giác ngộ</h3>
                                                <p class="main__wrapper-box-detail-desc">Size: 42</p>
                                                <div class="main__wrapper-box-detail-footer">
                                                    <div class="main__wrapper-box-detail-price">280.000đ</div>
                                                    <div class="main__wrapper-box-control-quantity">
                                                        <button class="main__wrapper-box-quantity-discount">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                        <input type="text" value="1" class="main__wrapper-box-quantity-input">
                                                        <button class="main__wrapper-box-quantity-inscrease">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="main__wrapper-item">
                                        <div class="main__wrapper-box-item">
                                            <div class="main__wrapper-box-avatar">
                                                <div class="main__wrapper-box-img" style="background-image: url(./images/giay-mau-show.png)"></div>
                                            </div>
                                            <div class="main__wrapper-box-detail">
                                                <h3 class="main__wrapper-box-detail-title">Nike Performance giày tốt giá xịn xịn, giày đẹp nhất, hãy là người có giác ngộ</h3>
                                                <p class="main__wrapper-box-detail-desc">Size: 42</p>
                                                <div class="main__wrapper-box-detail-footer">
                                                    <div class="main__wrapper-box-detail-price">280.000đ</div>
                                                    <div class="main__wrapper-box-control-quantity">
                                                        <button class="main__wrapper-box-quantity-discount">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                        <input type="text" value="1" class="main__wrapper-box-quantity-input">
                                                        <button class="main__wrapper-box-quantity-inscrease">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="main__wrapper-item">
                                        <div class="main__wrapper-box-item">
                                            <div class="main__wrapper-box-avatar">
                                                <div class="main__wrapper-box-img" style="background-image: url(./images/giay-mau-show.png)"></div>
                                            </div>
                                            <div class="main__wrapper-box-detail">
                                                <h3 class="main__wrapper-box-detail-title">Nike Performance giày tốt giá xịn xịn, giày đẹp nhất, hãy là người có giác ngộ</h3>
                                                <p class="main__wrapper-box-detail-desc">Size: 42</p>
                                                <div class="main__wrapper-box-detail-footer">
                                                    <div class="main__wrapper-box-detail-price">280.000đ</div>
                                                    <div class="main__wrapper-box-control-quantity">
                                                        <button class="main__wrapper-box-quantity-discount">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                        <input type="text" value="1" class="main__wrapper-box-quantity-input">
                                                        <button class="main__wrapper-box-quantity-inscrease">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="main__wrapper-item">
                                        <div class="main__wrapper-box-item">
                                            <div class="main__wrapper-box-avatar">
                                                <div class="main__wrapper-box-img" style="background-image: url(./images/giay-mau-show.png)"></div>
                                            </div>
                                            <div class="main__wrapper-box-detail">
                                                <h3 class="main__wrapper-box-detail-title">Nike Performance giày tốt giá xịn xịn, giày đẹp nhất, hãy là người có giác ngộ</h3>
                                                <p class="main__wrapper-box-detail-desc">Size: 42</p>
                                                <div class="main__wrapper-box-detail-footer">
                                                    <div class="main__wrapper-box-detail-price">280.000đ</div>
                                                    <div class="main__wrapper-box-control-quantity">
                                                        <button class="main__wrapper-box-quantity-discount">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                        <input type="text" value="1" class="main__wrapper-box-quantity-input">
                                                        <button class="main__wrapper-box-quantity-inscrease">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="main__wrapper-item">
                                        <div class="main__wrapper-box-item">
                                            <div class="main__wrapper-box-avatar">
                                                <div class="main__wrapper-box-img" style="background-image: url(./images/giay-mau-show.png)"></div>
                                            </div>
                                            <div class="main__wrapper-box-detail">
                                                <h3 class="main__wrapper-box-detail-title">Nike Performance giày tốt giá xịn xịn, giày đẹp nhất, hãy là người có giác ngộ</h3>
                                                <p class="main__wrapper-box-detail-desc">Size: 42</p>
                                                <div class="main__wrapper-box-detail-footer">
                                                    <div class="main__wrapper-box-detail-price">280.000đ</div>
                                                    <div class="main__wrapper-box-control-quantity">
                                                        <button class="main__wrapper-box-quantity-discount">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                        <input type="text" value="1" class="main__wrapper-box-quantity-input">
                                                        <button class="main__wrapper-box-quantity-inscrease">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="main__wrapper-item">
                                        <div class="main__wrapper-box-item">
                                            <div class="main__wrapper-box-avatar">
                                                <div class="main__wrapper-box-img" style="background-image: url(./images/giay-mau-show.png)"></div>
                                            </div>
                                            <div class="main__wrapper-box-detail">
                                                <h3 class="main__wrapper-box-detail-title">Nike Performance giày tốt giá xịn xịn, giày đẹp nhất, hãy là người có giác ngộ</h3>
                                                <p class="main__wrapper-box-detail-desc">Size: 42</p>
                                                <div class="main__wrapper-box-detail-footer">
                                                    <div class="main__wrapper-box-detail-price">280.000đ</div>
                                                    <div class="main__wrapper-box-control-quantity">
                                                        <button class="main__wrapper-box-quantity-discount">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                        <input type="text" value="1" class="main__wrapper-box-quantity-input">
                                                        <button class="main__wrapper-box-quantity-inscrease">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="main__order">
                                    <div class="main__order-subtotal">
                                        <div class="main__order-subtotal-title">Tổng phụ</div>
                                        <div class="main__order-subtotal-price">280.000đ</div>
                                    </div>
                                    <div class="main__order-sales">
                                        <div class="main__order-sales-discount">Giảm giá(<span>20%</span>)</div>
                                        <div class="main__order-discount-price">-<span class="main__order-discount-number">20.000đ</span></div>
                                    </div>
                                    <div class="main__order-total">
                                        <div class="main__order-sales-discount">Tổng thanh toán</div>
                                        <div class="main__order-total-price">260.000đ</div>
                                    </div>
                                </div>
                                <!-- btn checkout -->
                                <button class="main__order-btn-total-price">Thanh toán</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    include('./footer.php');
?>
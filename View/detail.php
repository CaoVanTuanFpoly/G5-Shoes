<?php
    include('./header.php');
    
?>
<link rel="stylesheet" href="./css/detailProduct.css"/>
<div class="main">
    <div class="grid wide">
        <h3 class="main-part">Trang chủ > Chi tiết sản phẩm</h3>
        <div class="main__content">
            <div class="row">
                <div class="col l-6 m-6 c-12">
                    <div class="main__show">
                        <div class="main__show-img"
                            style="background-image: url(./images/giay-nike-free-run-5-0-1412910744.png)"></div>
                        <div class="main__show-control">
                            <div class="main__show-control-slider"></div>
                        </div>
                    </div>
                </div>
                <div class="col l-6 m-6 c-12">
                    <div class="main__information">
                        <!-- product title -->
                        <h1 class="main__information-title">FLASH SALE - Giày Nike thể thao, màu xanh nguyên bản</h1>
                        <!-- product price -->
                        <div class="main__information-price">
                            <span class="main__information-old-price">280.000đ</span>
                            <span class="main__information-current-price">200.000đ</span>
                            <span class="main__information-sale">sale: 28%</span>
                        </div>
                        <!-- product size -->
                        <div class="main__information-size">
                            <h3 class="main__information-size-title">Kích thước giày: </h3>
                            <div class="main__information-size-wrapper">
                                <div class="main__information-size-box active">
                                    <span class="main__information-size-number">36</span>
                                </div>
                                <div class="main__information-size-box">
                                    <span class="main__information-size-number">37</span>
                                </div>
                                <div class="main__information-size-box">
                                    <span class="main__information-size-number">38</span>
                                </div>
                                <div class="main__information-size-box">
                                    <span class="main__information-size-number">39</span>
                                </div>
                            </div>
                        </div>
                        <!-- product amount -->
                        <div class="main__information-amount">
                            <h3 class="main__information-amount-title">Số lượng: </h3>
                            <div class="main__information-amount-quantity">
                                <label for="" class="main__information-amount-quantity-decrease">
                                    <i class="fa-solid fa-minus"></i>
                                </label>
                                <input type="number" value="1" min="1" max="99"
                                    class="main__information-amount-quantity-input">
                                <label for="" class="main__information-amount-quantity-decrease">
                                    <i class="fa-solid fa-plus"></i>
                                </label>
                            </div>
                        </div>

                        <!-- product order -->
                        <div class="main__information-order">
                            <button class="main__information-order-add-cart">
                                <i class="fa-solid fa-cart-plus main__information-order-add-cart-icon"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </button>
                            <button class="main__information-buy-now">Mua ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__detail">
            <h2 class="main__detail-title">Chi tiết sản phẩm</h2>
            <p class="main__detail-desc">Với chất liệu 100% Poly được xử lý hoàn thiện với công nghệ Quickdry (nhanh
                khô) và Wicking (thấm hút nhanh) - loại chất liệu được Coolmate sử dụng trong áo polo thể thao và nhận
                được rất nhiều sự phản hồi tích cực và yêu thích từ khách hàng, chắc chắn sẽ đem đến cho bạn sự thoải
                mái và vận động hiệu quả nhất! </p>
            <p class="main__detail-desc">Với chất liệu 100% Poly được xử lý hoàn thiện với công nghệ Quickdry (nhanh
                khô) và Wicking (thấm hút nhanh) - loại chất liệu được Coolmate sử dụng trong áo polo thể thao và nhận
                được rất nhiều sự phản hồi tích cực và yêu thích từ khách hàng, chắc chắn sẽ đem đến cho bạn sự thoải
                mái và vận động hiệu quả nhất! </p>
        </div>
        <div class="main__review">
            <h2 class="main__review-title">3/10 Đánh giá</h2>
            <div class="main__review-wrapper">
                <div class="main__review-content">
                    <div class="main__review-content-avatar">
                        <img src="./images/huy.jpg" alt="" class="main__review-content-img">
                    </div>
                    <div class="main__review-content-text">
                        <h3 class="main__review-content-name">Huy Quang Nguyen</h3>
                        <p class="main__review-content-timer">10-7-2022</p>
                        <p class="main__review-content-comment">Sản phẩm chất lượng tốt, đặt từ ngày 7 đến ngày 9 đã
                            ship về có mặt tại nhà, hàng hoá đẹp đẽ, 5 sao ạ</p>
                        <div class="main__review-content-interactive">
                            <button class="main__review-content-interactive-btn like">
                                <i class="fa-regular fa-thumbs-up"></i>
                            </button>
                            <button class="main__review-content-interactive-btn dislike">
                                <i class="fa-regular fa-thumbs-down"></i>
                            </button>
                            <button class="main__review-content-interactive-btn comment">
                                <i class="fa-regular fa-comment"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- comment 2 -->
                <div class="main__review-content">
                    <div class="main__review-content-avatar">
                        <img src="./images/huy.jpg" alt="" class="main__review-content-img">
                    </div>
                    <div class="main__review-content-text">
                        <h3 class="main__review-content-name">Huy Quang Nguyen</h3>
                        <p class="main__review-content-timer">10-7-2022</p>
                        <p class="main__review-content-comment">Sản phẩm chất lượng tốt, đặt từ ngày 7 đến ngày 9 đã
                            ship về có mặt tại nhà, hàng hoá đẹp đẽ, 5 sao ạ</p>
                        <div class="main__review-content-interactive">
                            <button class="main__review-content-interactive-btn like">
                                <i class="fa-regular fa-thumbs-up"></i>
                            </button>
                            <button class="main__review-content-interactive-btn dislike">
                                <i class="fa-regular fa-thumbs-down"></i>
                            </button>
                            <button class="main__review-content-interactive-btn comment">
                                <i class="fa-regular fa-comment"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- comment 3 -->
                <div class="main__review-content">
                    <div class="main__review-content-avatar">
                        <img src="./images/huy.jpg" alt="" class="main__review-content-img">
                    </div>
                    <div class="main__review-content-text">
                        <h3 class="main__review-content-name">Huy Quang Nguyen</h3>
                        <p class="main__review-content-timer">10-7-2022</p>
                        <p class="main__review-content-comment">Sản phẩm chất lượng tốt, đặt từ ngày 7 đến ngày 9 đã
                            ship về có mặt tại nhà, hàng hoá đẹp đẽ, 5 sao ạ</p>
                        <div class="main__review-content-interactive">
                            <button class="main__review-content-interactive-btn like">
                                <i class="fa-regular fa-thumbs-up"></i>
                            </button>
                            <button class="main__review-content-interactive-btn dislike">
                                <i class="fa-regular fa-thumbs-down"></i>
                            </button>
                            <button class="main__review-content-interactive-btn comment">
                                <i class="fa-regular fa-comment"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__review-load-more">
                <button class="main__review-load-more-btn">Tải thêm</button>
            </div>
        </div>
    </div>
</div>

<?php
    include('./footer.php');
?>
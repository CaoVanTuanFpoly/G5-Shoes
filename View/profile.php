<?php 
    include('./header.php'); 
?>

<!-- main -->
<div class="main">
<link rel="stylesheet" href="./css/profile.css"/>
    <div class="grid wide">
        <h2 class="main__title">Hồ sơ</h2>
        <p class="main__note">
            <i class="fa-solid fa-circle-exclamation main__note-icon"></i>
            <span class="main__note-text">G5 Shoes thông báo: quý khách vui lòng kiểm tra thông tin đầy đủ trước khi
                thay đổi</span>
        </p>
        <div class="main__wrapper">
            <div class="row sm-gutter">
                <div class="col l-3">
                    <div class="main__wrapper-category">
                        <!-- info -->
                        <div class="main__wrapper-box-info">
                            <div class="main__wrapper-info-avatar">
                                <img src="./images/huy.jpg" alt="" class="main__wrapper-info-img">
                            </div>
                            <div class="main__wrapper-info-text">
                                <h3 class="main__wrapper-info-name">Huy Quang Nguyen</h3>
                                <p class="main__wrapper-info-desc">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                    <span class="main__wrapper-info-desc-text">Sửa hồ sơ</span>
                                </p>
                            </div>
                        </div>
                        <!-- nav -->
                        <ul class="main__wrapper-box-list">
                            <li class="main__wrapper-box-item">
                                <p class="main__wrapper-item-component">
                                    <i class="fa-regular fa-user main__wrapper-item-component-icon"></i>
                                    <span class="main__wrapper-item-component-text">Thông tin của tôi</span>
                                </p>
                            </li>
                            <li class="main__wrapper-box-item">
                                <p class="main__wrapper-item-component">
                                    <i class="fa-regular fa-rectangle-list main__wrapper-item-component-icon"></i>
                                    <span class="main__wrapper-item-component-text">Danh sách đơn hàng</span>
                                </p>
                            </li>
                            <li class="main__wrapper-box-item">
                                <p class="main__wrapper-item-component">
                                    <i class="fa-solid fa-wallet main__wrapper-item-component-icon"></i>
                                    <span class="main__wrapper-item-component-text">Ví voucher</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col l-9">
                    <div class="main__root">
                        <div class="main__wrapper-box active">
                            <!-- my profile -->
                            <div class="main__wrapper-profile">
                                <div class="main__wrapper-profile-header">
                                    <h2 class="main__wrapper-profile-header-title">Hồ sơ của tôi</h2>
                                    <p class="main__wrapper-profile-header-desc">Quản lý thông tin hồ sơ để bảo mật tài
                                        khoản</p>
                                </div>
                                <div class="main__wrapper-profile-content">
                                    <form id="profile-form" action="" method="post">
                                        <!-- name -->
                                        <div class="main__wrapper-from-group">
                                            <div class="main__wrapper-from-group-view">
                                                <label for="" class="main__wrapper-from-group-label">Họ tên</label>
                                                <div class="main__wrapper-from-group-view-more">
                                                    <div class="main__wrapper-from-group-value">Huy Quang Nguyen</div>
                                                    <div class="main__wrapper-from-group-change-box">
                                                        <input type="text" class="main__wrapper-from-group-change-input"
                                                            placeholder="tên mới">
                                                    </div>
                                                </div>
                                                <div class="main__wrapper-from-group-btn-change">Thay đổi
                                                    <i
                                                        class="fa-solid fa-angle-down main__wrapper-from-group-btn-change-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- email -->
                                        <div class="main__wrapper-from-group mt-30">
                                            <div class="main__wrapper-from-group-view">
                                                <label for="" class="main__wrapper-from-group-label">Email</label>
                                                <div class="main__wrapper-from-group-view-more">
                                                    <div class="main__wrapper-from-group-value">huyqnps19222@fpt.edu.vn
                                                    </div>
                                                    <div class="main__wrapper-from-group-change-box">
                                                        <input type="text" class="main__wrapper-from-group-change-input"
                                                            placeholder="email mới">
                                                    </div>
                                                </div>
                                                <div class="main__wrapper-from-group-btn-change">Thay đổi
                                                    <i
                                                        class="fa-solid fa-angle-down main__wrapper-from-group-btn-change-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- password -->
                                        <div class="main__wrapper-from-group mt-30">
                                            <div class="main__wrapper-from-group-view">
                                                <label for="" class="main__wrapper-from-group-label">Mật khẩu</label>
                                                <div class="main__wrapper-from-group-view-more">
                                                    <div class="main__wrapper-from-group-value">147258369</div>
                                                    <div class="main__wrapper-from-group-change-box">
                                                        <input type="text" class="main__wrapper-from-group-change-input"
                                                            placeholder="mật khẩu mới">
                                                    </div>
                                                </div>
                                                <div class="main__wrapper-from-group-btn-change">Thay đổi
                                                    <i
                                                        class="fa-solid fa-angle-down main__wrapper-from-group-btn-change-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- number phone -->
                                        <div class="main__wrapper-from-group mt-30">
                                            <div class="main__wrapper-from-group-view">
                                                <label for="" class="main__wrapper-from-group-label">Số điện
                                                    thoại</label>
                                                <div class="main__wrapper-from-group-view-more">
                                                    <div class="main__wrapper-from-group-value">0123456789</div>
                                                    <div class="main__wrapper-from-group-change-box">
                                                        <input type="text" class="main__wrapper-from-group-change-input"
                                                            placeholder="sdt mới">
                                                    </div>
                                                </div>
                                                <div class="main__wrapper-from-group-btn-change">Thay đổi
                                                    <i
                                                        class="fa-solid fa-angle-down main__wrapper-from-group-btn-change-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- address -->
                                        <div class="main__wrapper-from-group mt-30">
                                            <div class="main__wrapper-from-group-view">
                                                <label for="" class="main__wrapper-from-group-label">Địa chỉ</label>
                                                <div class="main__wrapper-from-group-view-more">
                                                    <div class="main__wrapper-from-group-value">763/17/114 Lê Đức Thọ,
                                                        Phường 15, Quận Gò Vấp, Tp. HCM</div>
                                                    <div class="main__wrapper-from-group-change-box">
                                                        <input type="text" class="main__wrapper-from-group-change-input"
                                                            placeholder="địa chỉ mới">
                                                    </div>
                                                </div>
                                                <div class="main__wrapper-from-group-btn-change">Thay đổi
                                                    <i
                                                        class="fa-solid fa-angle-down main__wrapper-from-group-btn-change-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- gender -->
                                        <div class="main__wrapper-from-group mt-30">
                                            <div class="main__wrapper-from-group-view">
                                                <label for="" class="main__wrapper-from-group-label">Giới tính</label>
                                                <div class="main__wrapper-from-group-view-more">
                                                    <div class="main__wrapper-from-group-value">Nam</div>
                                                    <div class="main__wrapper-from-group-change-box">
                                                        <div class="box-gender">
                                                            <input type="radio"
                                                                class="main__wrapper-from-group-change-input-gender"><span
                                                                class="gender-text">Nam</span>
                                                            <input type="radio"
                                                                class="main__wrapper-from-group-change-input-gender"><span
                                                                class="gender-text">Nữ</span>
                                                            <input type="radio"
                                                                class="main__wrapper-from-group-change-input-gender"><span
                                                                class="gender-text">Khác</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main__wrapper-from-group-btn-change">Thay đổi
                                                    <i
                                                        class="fa-solid fa-angle-down main__wrapper-from-group-btn-change-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Date of birth -->
                                        <div class="main__wrapper-from-group mt-30">
                                            <div class="main__wrapper-from-group-view">
                                                <label for="" class="main__wrapper-from-group-label">Ngày sinh</label>
                                                <div class="main__wrapper-from-group-view-more">
                                                    <div class="main__wrapper-from-group-value">26/7/2002</div>
                                                    <div class="main__wrapper-from-group-change-box birth">
                                                        <div class="box-day-of-birth">
                                                            <select name="" id=""
                                                                class="main__wrapper-from-group-change-birth">
                                                                <option value="">Ngày sinh</option>
                                                            </select>
                                                            <select name="" id=""
                                                                class="main__wrapper-from-group-change-birth">
                                                                <option value="">Tháng</option>
                                                            </select>
                                                            <select name="" id=""
                                                                class="main__wrapper-from-group-change-birth">
                                                                <option value="">Năm</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main__wrapper-from-group-btn-change">Thay đổi
                                                    <i
                                                        class="fa-solid fa-angle-down main__wrapper-from-group-btn-change-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- avatar -->
                                        <div class="main__wrapper-from-group mt-30">
                                            <div class="main__wrapper-from-group-view">
                                                <label for="" class="main__wrapper-from-group-label">Ảnh đại
                                                    diện</label>
                                                <div class="main__wrapper-from-group-view-avatar">
                                                    <div class="main__wrapper-from-group-avatar-picture">
                                                        <div class="main__wrapper-from-group-avatar-picture-overlay">
                                                        </div>
                                                        <img src="./images/huy.jpg" alt=""
                                                            class="main__wrapper-from-group-avatar-img">
                                                        <label for="input-avatar"
                                                            class="main__wrapper-from-group-avatar-picture-label">
                                                            <p class="main__wrapper-from-group-avatar-picture-p">
                                                                <i class="fa-regular fa-pen-to-square"></i>
                                                            </p>
                                                            <p class="main__wrapper-from-group-avatar-picture-edit">Sửa
                                                                ảnh</p>
                                                        </label>
                                                    </div>
                                                    <div class="main__wrapper-from-group-avatar">
                                                        <input id="input-avatar" type="file" hidden
                                                            class="main__wrapper-from-group-avatar-input">
                                                        <label for="input-avatar" class="main__wrapper-from-avatar-btn">
                                                            <i
                                                                class="fa-solid fa-cloud-arrow-up main__wrapper-from-avatar-btn-icon"></i>
                                                        </label>
                                                        <p class="main__wrapper-from-avatar-text">Dung lượng tối đa 1MB
                                                        </p>
                                                        <p class="main__wrapper-from-avatar-text">Định dạng: .JPG, .PNG,
                                                            JPEG</p>
                                                    </div>
                                                </div>
                                                <div class="main__wrapper-from-group-empty"></div>
                                            </div>
                                        </div>
                                        <div class="main__wrapper-from-group mt-50">
                                            <button type="submit" class="main__wrapper-from-group-btn-submit">Lưu thông
                                                tin</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="main__wrapper-box">
                            <div class="main__wrapper-profile-header">
                                <h2 class="main__wrapper-profile-header-title">Đơn hàng của tôi</h2>
                                <p class="main__wrapper-profile-header-desc">Quản lý thông tin đơn hàng ở mọi trạng thái
                                </p>
                            </div>
                            <div class="main__wrapper-parent">
                                <!-- search -->
                                <div class="main__wrapper-search">
                                    <button class="main__wrapper-search-btn">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <input type="text" class="main__wrapper-search-input"
                                        placeholder="Tìm kiếm theo tên sản phẩm">
                                </div>
                                <!-- list product -->
                                <ul class="main__wrapper-list">
                                    <li class="main__wrapper-item">
                                        <form method="post">
                                            <div class="main__wrapper-component">
                                                <div class="main__wrapper-component-info">
                                                    <div class="main__wrapper-component-info-avatar">
                                                        <img src="./images/giay-mau-show.png" alt=""
                                                            class="main__wrapper-component-info-img">
                                                    </div>
                                                    <div class="main__wrapper-component-info-text">
                                                        <h3 class="main__wrapper-component-info-name">Giày nike ABCDEF
                                                            mẫu đẹp nhất trong shop, quá đẹp dsjdnmd và quá đẹp hãy là
                                                            người xứng đáng</h3>
                                                        <div class="main__wrapper-component-info-desc">
                                                            <p class="main__wrapper-component-info-word">Size: 40</p>
                                                            <p class="main__wrapper-component-info-word">Hãng: Nike</p>
                                                            <p class="main__wrapper-component-info-word">Số lượng: 1</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main__wrapper-component-actions">
                                                    <div class="main__wrapper-component-status">Trạng thái:
                                                        <p class="main__wrapper-component-status-text success">
                                                            <i class="fa-solid fa-people-carry-box"></i>
                                                            <span class="main__wrapper-component-status-word">Giao hàng
                                                                thành công</span>
                                                        </p>
                                                    </div>
                                                    <div class="main__wrapper-component-total">Tổng thanh toán:
                                                        <span class="main__wrapper-component-old-price">280.000đ</span>
                                                        <span
                                                            class="main__wrapper-component-current-price">200.000đ</span>
                                                    </div>
                                                    <div class="main__wrapper-component-submit">
                                                        <button class="main__wrapper-component-btn">Mua lại</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <!-- product 2 -->
                                    <li class="main__wrapper-item">
                                        <form method="post">
                                            <div class="main__wrapper-component">
                                                <div class="main__wrapper-component-info">
                                                    <div class="main__wrapper-component-info-avatar">
                                                        <img src="./images/giay-mau-show.png" alt=""
                                                            class="main__wrapper-component-info-img">
                                                    </div>
                                                    <div class="main__wrapper-component-info-text">
                                                        <h3 class="main__wrapper-component-info-name">Giày nike ABCDEF
                                                            mẫu đẹp nhất trong shop, quá đẹp dsjdnmd và quá đẹp hãy là
                                                            người xứng đáng</h3>
                                                        <div class="main__wrapper-component-info-desc">
                                                            <p class="main__wrapper-component-info-word">Size: 40</p>
                                                            <p class="main__wrapper-component-info-word">Hãng: Nike</p>
                                                            <p class="main__wrapper-component-info-word">Số lượng: 1</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main__wrapper-component-actions">
                                                    <div class="main__wrapper-component-status">Trạng thái:
                                                        <p class="main__wrapper-component-status-text delivery">
                                                            <i class="fa-solid fa-truck"></i>
                                                            <span class="main__wrapper-component-status-word">Đang giao
                                                                hàng</span>
                                                        </p>
                                                    </div>
                                                    <div class="main__wrapper-component-total">Tổng thanh toán:
                                                        <span class="main__wrapper-component-old-price">280.000đ</span>
                                                        <span
                                                            class="main__wrapper-component-current-price">200.000đ</span>
                                                    </div>
                                                    <div class="main__wrapper-component-submit">
                                                        <button class="main__wrapper-component-btn">Mua lại</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <!-- product 3 -->
                                    <li class="main__wrapper-item">
                                        <form method="post">
                                            <div class="main__wrapper-component">
                                                <div class="main__wrapper-component-info">
                                                    <div class="main__wrapper-component-info-avatar">
                                                        <img src="./images/giay-mau-show.png" alt=""
                                                            class="main__wrapper-component-info-img">
                                                    </div>
                                                    <div class="main__wrapper-component-info-text">
                                                        <h3 class="main__wrapper-component-info-name">Giày nike ABCDEF
                                                            mẫu đẹp nhất trong shop, quá đẹp dsjdnmd và quá đẹp hãy là
                                                            người xứng đáng</h3>
                                                        <div class="main__wrapper-component-info-desc">
                                                            <p class="main__wrapper-component-info-word">Size: 40</p>
                                                            <p class="main__wrapper-component-info-word">Hãng: Nike</p>
                                                            <p class="main__wrapper-component-info-word">Số lượng: 1</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main__wrapper-component-actions">
                                                    <div class="main__wrapper-component-status">Trạng thái:
                                                        <p class="main__wrapper-component-status-text canceled">
                                                            <i class="fa-solid fa-ban"></i>
                                                            <span class="main__wrapper-component-status-word">Đã huỷ đơn
                                                                hàng</span>
                                                        </p>
                                                    </div>
                                                    <div class="main__wrapper-component-total">Tổng thanh toán:
                                                        <span class="main__wrapper-component-old-price">280.000đ</span>
                                                        <span
                                                            class="main__wrapper-component-current-price">200.000đ</span>
                                                    </div>
                                                    <div class="main__wrapper-component-submit">
                                                        <button class="main__wrapper-component-btn">Mua lại</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main__wrapper-box">
                            <h2>tab voucher</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/profile.js"></script>
<?php 
    include('./footer.php'); 
?>
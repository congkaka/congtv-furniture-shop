@extends('layouts.web')
@section('content')
@section('css')
@endsection
<!-- ****** Welcome Slides Area Start ****** -->
@include('layouts.slide')
<!-- ****** Welcome Slides Area End ****** -->

<!-- ****** Quick View Modal Area Start ****** -->
<div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
                <div class="quickview_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <div class="quickview_pro_img">
                                    <img src="img/product-img/product-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="quickview_pro_des">
                                    <h4 class="title">Boutique Silk Dress</h4>
                                    <div class="top_seller_product_rating mb-15">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="price">$120.99 <span>$130</span></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                    <a href="#">View Full Product Details</a>
                                </div>
                                <!-- Mua ngay Form -->
                                <form class="cart" method="post">
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                    <button type="submit" name="addtocart" value="5" class="cart-submit">Mua ngay</button>
                                    <!-- Wishlist -->
                                    <div class="modal_pro_wishlist">
                                        <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                    </div>
                                    <!-- Compare -->
                                    <div class="modal_pro_compare">
                                        <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                    </div>
                                </form>

                                <div class="share_wf mt-30">
                                    <p>Share With Friend</p>
                                    <div class="_icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ****** Quick View Modal Area End ****** -->

<!-- ****** New Arrivals Area Start ****** -->
<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>Danh m???c s???n ph???m</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="karl-projects-menu mb-100">
        <div class="text-center portfolio-menu">
            <button class="btn active" data-filter="*">T???t c???</button>
            <button class="btn" data-filter=".phongkhach">Ph??ng kh??ch</button>
            <button class="btn" data-filter=".phonglamviec">Ph??ng l??m vi???c</button>
            <button class="btn" data-filter=".phongngu">Ph??ng ng???</button>
            <button class="btn" data-filter=".phongtam">Ph??ng t???m</button>
            <button class="btn" data-filter=".phongbep">Ph??ng b???p</button>
        </div>
    </div>

    <div class="container">
        <div class="row karl-new-arrivals">

            <!-- Single gallery Item Start -->
            <div class="col-12 col-sm-6 col-md-3 single_gallery_item phongkhach wow fadeInUpBig" data-wow-delay="0.2s">
                <!-- Product Image -->
                <div class="product-img">
                    <img src="img/product-img/phongkhach1.jpg" alt="">
                    <div class="product-quicview">
                        <a href="{{route('product.detail')}}" data-toggle="modal" data-target="#quickview-backup"><i class="ti-plus"></i></a>
                    </div>
                </div>
                <!-- Product Description -->
                <div class="product-description">
                    <h4 class="product-price">$39.90</h4>
                    <p>Ph??ng kh??ch 1</p>
                    <!-- Mua ngay -->
                    <a href="{{route('product.detail')}}" class="add-to-cart-btn">Mua ngay</a>
                </div>
            </div>

            <!-- Single gallery Item Start -->
            <div class="col-12 col-sm-6 col-md-3 single_gallery_item phongkhach wow fadeInUpBig" data-wow-delay="0.3s">
                <!-- Product Image -->
                <div class="product-img">
                    <img src="img/product-img/phongkhach2.jpg" alt="">
                    <div class="product-quicview">
                        <a href="{{route('product.detail')}}" data-toggle="modal" data-target="#quickview-backup"><i class="ti-plus"></i></a>
                    </div>
                </div>
                <!-- Product Description -->
                <div class="product-description">
                    <h4 class="product-price">$39.90</h4>
                    <p>Ph??ng kh??ch 2</p>
                    <!-- Mua ngay -->
                    <a href="{{route('product.detail')}}" class="add-to-cart-btn">Mua ngay</a>
                </div>
            </div>

            <!-- Single gallery Item Start -->
            <div class="col-12 col-sm-6 col-md-3 single_gallery_item phongngu wow fadeInUpBig" data-wow-delay="0.4s">
                <!-- Product Image -->
                <div class="product-img">
                    <img src="img/product-img/phongngu1.jpg" alt="">
                    <div class="product-quicview">
                        <a href="{{route('product.detail')}}" data-toggle="modal" data-target="#quickview-backup"><i class="ti-plus"></i></a>
                    </div>
                </div>
                <!-- Product Description -->
                <div class="product-description">
                    <h4 class="product-price">$39.90</h4>
                    <p>Ph??ng ng??? 1</p>
                    <!-- Mua ngay -->
                    <a href="{{route('product.detail')}}" class="add-to-cart-btn">Mua ngay</a>
                </div>
            </div>

            <!-- Single gallery Item Start -->
            <div class="col-12 col-sm-6 col-md-3 single_gallery_item phongtam wow fadeInUpBig" data-wow-delay="0.5s">
                <!-- Product Image -->
                <div class="product-img">
                    <img src="img/product-img/phongtam1.jpg" alt="">
                    <div class="product-quicview">
                        <a href="{{route('product.detail')}}" data-toggle="modal" data-target="#quickview-backup"><i class="ti-plus"></i></a>
                    </div>
                </div>
                <!-- Product Description -->
                <div class="product-description">
                    <h4 class="product-price">$39.90</h4>
                    <p>ph??ng t???m 1</p>
                    <!-- Mua ngay -->
                    <a href="{{route('product.detail')}}" class="add-to-cart-btn">Mua ngay</a>
                </div>
            </div>

            <!-- Single gallery Item Start -->
            <div class="col-12 col-sm-6 col-md-3 single_gallery_item phongkhach wow fadeInUpBig" data-wow-delay="0.6s">
                <!-- Product Image -->
                <div class="product-img">
                    <img src="img/product-img/phongkhach3.jpg" alt="">
                    <div class="product-quicview">
                        <a href="{{route('product.detail')}}" data-toggle="modal" data-target="#quickview-backup"><i class="ti-plus"></i></a>
                    </div>
                </div>
                <!-- Product Description -->
                <div class="product-description">
                    <h4 class="product-price">$39.90</h4>
                    <p>Ph??ng kh??ch 3</p>
                    <!-- Mua ngay -->
                    <a href="{{route('product.detail')}}" class="add-to-cart-btn">Mua ngay</a>
                </div>
            </div>

            <!-- Single gallery Item -->
            <div class="col-12 col-sm-6 col-md-3 single_gallery_item phongbep phonglamviec wow fadeInUpBig" data-wow-delay="0.7s">
                <!-- Product Image -->
                <div class="product-img">
                    <img src="img/product-img/phongbep1.jpg" alt="">
                    <div class="product-quicview">
                        <a href="{{route('product.detail')}}" data-toggle="modal" data-target="#quickview-backup"><i class="ti-plus"></i></a>
                    </div>
                </div>
                <!-- Product Description -->
                <div class="product-description">
                    <h4 class="product-price">$39.90</h4>
                    <p>Ph??ng b???p 1</p>
                    <!-- Mua ngay -->
                    <a href="{{route('product.detail')}}" class="add-to-cart-btn">Mua ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** New Arrivals Area End ****** -->
@push('scripts')
@endpush
@endsection
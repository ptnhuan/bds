<?php
if (!class_exists('lessc')) {
    include (public_path() . '/packages/jacopo/laravel-authentication-acl/less/lessc.inc.php');
}
$less = new lessc;
$less->compileFile(public_path() . '/packages/jacopo/laravel-authentication-acl/less/detail.less', public_path() . '/packages/jacopo/laravel-authentication-acl/_css/detail.css');
?>

<section class="page-title page">
    <div class="auto-container">
        <div class="content-box">
            <h1>Detail BDS</h1>
            <div class="bread-crumb">
                <ul class="breadcrumb pull-right"><li><a href="#">Home</a></li><li><a href="#">Archive for January, 2016</a></li></ul>			</div>
        </div>
    </div>
</section>
<div class="section navv-bar" style="top: 0px;">
    <div class="nav-bar-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="detail-nav list-unstyled">
                        <li class="nav-item on-top-btn active">
                            <figure><i class="fa fa-home icon"></i>
                                <figcaption>On Top</figcaption>
                            </figure>
                        </li>
                        <li class="nav-item condition-btn">
                            <figure><i class="fa fa-file-text-o icon"></i>
                                <figcaption>Condition</figcaption>
                            </figure>
                        </li>
                        <li class="nav-item description-btn">
                            <figure><i class="fa fa-comment-o icon"></i>
                                <figcaption>Description</figcaption>
                            </figure>
                        </li>
                        <li class="nav-item location-btn">
                            <figure><i class="fa fa-map-marker icon"></i>
                                <figcaption>Location</figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@if( !empty($data['re']) )
<section class="section general-row sidebar-page">
    <div class="container">
        <div class="row" jstcache="0">
            <div class="col-md-9" jstcache="0">
                <div id="rem_house_galery">

                    <div class="componentheading ">

                        <span class="col_text_2">{!! $data['re']->real_estate_title !!}</span>

                        <div class="rem_house_price">
                            <div class="pricemoney">
                                <span class="money">7.000.000,00</span><span class="price">&nbsp;USD</span></div><div class="pricemoney"><span class="money">6.230.000,00</span><span class="price">&nbsp;EUR</span></div><div class="pricemoney"><span class="money">8.400.000,00</span><span class="price">&nbsp;CAD</span></div>    </div>
                    </div>
                    <div style="clear:both"></div>


                    <div class="rem_house_location">
                        <i class="fa fa-map-marker"></i>
                        <span class="col_02">USA, Avenel</span>.

                    </div>
                    <div class="image-row col-md-12">
                        <ul class="bxslider">
                            <li><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/41.jpg') !!}" style="width: 100%"/></li>
                            <li><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/c-slide-3.png') !!}" style="width: 100%"/></li>
                            <li><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/h_hill_fence.jpg') !!}" style="width: 100%"/></li>
                            <li><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/h_hill_fence.jpg') !!}" style="width: 100%"/></li>
                            <li><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/h_hill_fence.jpg') !!}" style="width: 100%"/></li>
                            <li><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/h_hill_fence.jpg') !!}" style="width: 100%"/></li>
                        </ul>

                        <div id="bx-pager" class="bx" style="text-align: center">
                            <a data-slide-index="0" href=""><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/hill_fence.jpg') !!}" /></a>
                            <a data-slide-index="1" href=""><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/hill_fence.jpg') !!}" /></a>
                            <a data-slide-index="2" href=""><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/hill_fence.jpg') !!}" /></a>
                            <a data-slide-index="3" href=""><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/hill_fence.jpg') !!}" /></a>
                            <a data-slide-index="4" href=""><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/hill_fence.jpg') !!}" /></a>
                            <a data-slide-index="5" href=""><img src="{!! URL::asset('/packages/jacopo/laravel-authentication-acl/images/hill_fence.jpg') !!}" /></a>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div id="rem_house_property">
                    <div class="row_text">
                        <span class="col_text_1">Listing status:</span>
                        <span class="col_text_2">Active</span>
                    </div>

                    <div class="row_text">
                        <span class="col_text_1">Property type:</span>
                        <span class="col_text_2">Townhouse</span>
                    </div>

                    <div class="row_text">
                        <span class="col_text_1">Property ID:</span>
                        <span class="col_text_2">{!! $data['re']->real_estate_id !!}</span>
                    </div>
                    <div class="row_text">
                        <span class="col_text_icon"></span>
                        <span class="col_01">Listing type:</span>
                        <span class="col_02">House for sale</span>
                    </div>
                </div>
                <div class="tabs_buttons">
                    <ul class="shadetabs nav nav-tabs">
                        <li>
                            <a data-toggle="tab" href="#description" class="selected">Description            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#comment">Comment           </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#location">Location          </a>
                        </li>
                    </ul>
                    <div id="tabs" jstcache="0" class="tab-content">
                        <div id="description" class="tab-pane fade in active">
                            <div class="rem_type_house">
                                <div class="row_text col-md-4 col-sm-6 col-xs-12">
                                    <i class="fa fa-building-o"></i>
                                    <span class="col_text_1">Rooms:</span>
                                    <span class="col_text_2">4</span>
                                </div>
                                <div class="row_text col-md-4 col-sm-6 col-xs-12">
                                    <i class="fa fa-tint"></i>
                                    <span class="col_text_1">Bathrooms:</span>
                                    <span class="col_text_2">{!! $data['re']->real_estate_bathroom !!}</span>
                                </div>
                                <div class="row_text col-md-4 col-sm-6 col-xs-12">
                                    <i class="fa fa-inbox"></i>
                                    <span class="col_text_1">Bedrooms:</span>
                                    <span class="col_text_2">{!! $data['re']->real_estate_bedroom !!}</span>
                                </div>
                                <div class="row_text col-md-4 col-sm-6 col-xs-12">
                                    <i class="fa fa-calendar"></i>
                                    <span class="col_text_1">Built year:</span>
                                    <span class="col_text_2">{!! $data['re']->real_estate_year_build !!}</span>
                                </div>
                                <div class="row_text col-md-4 col-sm-6  col-xs-12">
                                    <i class="fa fa-truck"></i>
                                    <span class="col_text_1">Garages:</span>
                                    <span class="col_text_2">1</span>
                                </div>
                                <div class="row_text col-md-4 col-sm-6 col-xs-12">
                                    <i class="fa fa-arrows-alt"></i>
                                    <span class="col_text_1">Lot size:</span>
                                    <span class="col_text_2">
                                        {!! $data['re']->real_estate_sq !!} Sqrt                    </span>
                                </div>
                                <div class="row_text col-md-4 col-sm-6 col-xs-12">
                                    <i class="fa fa-expand"></i>
                                    <span class="col_text_1">House size:</span>
                                    <span class="col_text_2">
                                        3500 Sqrt                    </span>
                                </div>
                                <div class="clear" style="clear: both"></div>
                                <div class="rem_house_desciption"> {!! $data['re']->real_estate_description !!}</div>
                            </div>

                        </div>
                        <div id="comment" class="tab-pane fade">
                            <div class="welll">
                                <h4>Leave a Comment:</h4>
                                <form role="form">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-comment">Submit</button>
                                </form>
                            </div>


                        </div>
                        <div id="location" class="tab-pane fade">



                        </div>
                    </div>
                </div>



            </div>

            <div class="col-md-3 margin-top-2">
                <div class="contact-agent-widget">
                    <div class="title">contact agent</div>
                    <div class="media contact-agent-content">
                        <div class="media-left media-middle"><img src="images/avatar-7.jpg" alt="" class="agent-image"></div>
                        <div class="media-body media-middle">
                            <div class="media-heading agent-name">miles hatfield</div>
                            <span class="agent-pos">expert agent</span></div>
                    </div>
                    <div class="agent-info">
                        <div class="contact-info">
                            <div class="info">
                                <div class="phone"><i class="fa fa-mobile"></i><span>904-621-5632</span></div>
                            </div>
                            <div class="info">
                                <div class="email"><i class="fa fa-envelope-o"></i><span>miles@sunhouse.com</span></div>
                            </div>
                            <div class="info">
                                <div class="skype"><i class="fa fa-skype"></i><span>miles.sunhouse</span></div>
                            </div>
                        </div>
                        <div class="social-info"><a href="#" class="link"><i class="fa fa-facebook"></i></a><a href="#" class="link"><i class="fa fa-twitter"></i></a><a href="#" class="link"><i class="fa fa-google-plus"></i></a><a href="#" class="link"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="rem_house_contacts">
                    <div id="rem_house_titlebox">
                        Contact agent        </div>

                    <span class="col_02">Thế Lộc<br>pykun6@gmail.com</span>

                </div>
                <div class="rem_buying_house">




                    <div id="rem_house_titlebox">
                        Send message    </div>
                    <div id="show_buying">


                        <div class="row"  style="margin: 0!important">
                            <div class="col-md-12 col">
                                <div id="customer_name_warning"></div>
                                <span class="col-md-12"><input id="alert_name_buy" class="inputbox" type="text" name="customer_name" maxlength="80" placeholder="Name*"></span>
                            </div>
                            <div class="col-md-12 col">
                                <div id="customer_email_warning"></div>
                                <span class="col-md-12"><input id="alert_mail_buy" class="inputbox" type="text" name="customer_email" maxlength="80" placeholder="Email*"></span>
                            </div>

                            <div class="col-md-12 col">
                                <div id="customer_phone_warning"></div>
                                <span class="col-md-12">
                                    <input class="inputbox" type="text" id="customer_phone" name="customer_phone" maxlength="80" placeholder="Phone">
                                </span>
                            </div>
                            <div class="col-md-12 col">
                                <textarea name="customer_comment" rows="8" placeholder="Description"></textarea>
                                <input type="hidden" name="bid[]" value="10">
                            </div>

                            <div class="col-md-12 bu col-sm-12 col-xs-12">
                                <span class="col-md-12 bu col-sm-12 col-xs-12">
                                    <input type="button" value="Send message" class="button">
                                </span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endif
@section('footer_scripts_part2')

<script>
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
    });
</script>

@stop
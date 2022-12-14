<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}" type="text/css"/>
    <link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/morris.css')}}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('admin/css/monthly.css')}}">
{{--    <link rel="stylesheet" href="{{asset('admin/css/jquery-ui.css')}}">--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('admin/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('admin/js/raphael-min.js')}}"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">


</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="{{route('admin.dashboard')}}" class="logo">
                VISITORS
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->

            <!--  notification end -->
        </div>
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
{{--                <li>--}}
{{--                    <input type="text" class="form-control search" placeholder=" Search">--}}
{{--                </li>--}}
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img style="" alt="" src="{{asset('/admin/images/5.png')}}">
                        <span class="username">{{Auth::user()->admin_name}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{route('admin.logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="{{route('admin.dashboard')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Danh m???c</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('category.create')}}">Th??m danh m???c</a></li>
                            <li><a href="{{route('category.index')}}">Hi???n th??? danh m???c</a></li>
                        </ul>
                    </li>

{{--                    <li class="sub-menu">--}}
{{--                        <a href="javascript:;">--}}
{{--                            <i class="fa fa-life-buoy"></i>--}}
{{--                            <span>Th????ng hi???u</span>--}}
{{--                        </a>--}}
{{--                        <ul class="sub">--}}
{{--                            <li><a href="{{route('brand.create')}}">Th??m th????ng hi???u</a></li>--}}
{{--                            <li><a href="{{route('brand.index')}}">Hi???n th??? th????ng hi???u</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-star"></i>
                            <span>S???n ph???m</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('product.create')}}">Th??m s???n ph???m</a></li>
                            <li><a href="{{route('product.index')}}">Hi???n th??? s???n ph???m</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-shopping-bag"></i>
                            <span>????n h??ng</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('admin.order')}}">Hi???n th??? ????n h??ng</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-barcode"></i>
                            <span>M?? gi???m gi??</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('coupon.create')}}">Th??m m?? gi???m gi??</a></li>
                            <li><a href="{{route('coupon.index')}}">Hi???n th??? m?? gi???m gi??</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-tags"></i>
                            <span>Ph?? v???n chuy???n</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('admin.delivery')}}">Qu???n l?? ph?? v???n chuy???n</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-sliders"></i>
                            <span>Slider</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('slider.create')}}">Th??m slider</a></li>
                            <li><a href="{{route('slider.index')}}">Hi???n th??? slider</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-commenting"></i>
                            <span>B??nh lu???n</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('admin.comment')}}">Hi???n th??? b??nh lu???n</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-user"></i>
                            <span>Kh??ch h??ng</span>
                        </a>
                        <ul class="sub">
{{--                            <li><a href="{{route('user.create')}}">Th??m kh??ch h??ng</a></li>--}}
                            <li><a href="{{route('user.index')}}">Hi???n th??? kh??ch h??ng</a></li>
                        </ul>
                    </li>

                </ul>            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
        </section>
        <!-- footer -->

        <!-- / footer -->
    </section>
    <!--main content end-->
</section>
<script src="{{asset('admin/js/bootstrap.js')}}"></script>
<script src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('admin/js/scripts.js')}}"></script>
<script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
{{--<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{asset('admin/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->--}}
<script src="{{asset('admin/js/jquery.scrollTo.js')}}"></script>
<script src="{{asset('admin/js/ckeditor/ckeditor.js')}}"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<!-- morris JavaScript -->

<!-- calendar -->
<script type="text/javascript" src="{{asset('admin/js/monthly.js')}}"></script>

<script type="text/javascript">
    CKEDITOR.replace('content');
</script>

<script type="text/javascript">

    function ChangeToSlug()
    {
        var slug;

        //L???y text t??? th??? input title
        slug = document.getElementById("slug").value;
        slug = slug.toLowerCase();
        //?????i k?? t??? c?? d???u th??nh kh??ng d???u
        slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
        slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
        slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
        slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
        slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
        slug = slug.replace(/??|???|???|???|???/gi, 'y');
        slug = slug.replace(/??/gi, 'd');
        //X??a c??c k?? t??? ?????t bi???t
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
        slug = slug.replace(/ /gi, "-");
        //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
        //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox c?? id ???slug???
        document.getElementById('convert_slug').value = slug;
    }

</script>


<script type="text/javascript">
    $('.category_status').change( function() {
        var status = $(this).val();
        var category_id = $(this).find(':selected').data('category_id');
        $.ajax({
            url:"{{url('/category-status')}}",
            method:"POST",

            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{status:status,category_id:category_id},
            success:function(data){
                alert('Thay ?????i trang th??i th??nh c??ng');
                // location.reload();


            }
        });
    });
</script>

<script type="text/javascript">
    $('.brand_status').change( function() {
        var status = $(this).val();
        var brand_id = $(this).find(':selected').data('brand_id');
        $.ajax({
            url:"{{url('/brand-status')}}",
            method:"POST",

            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{status:status,brand_id:brand_id},
            success:function(data){
                alert('Thay ?????i trang th??i th??nh c??ng');
                // location.reload();


            }
        });
    });
</script>

<script type="text/javascript">
    $('.product_status').change( function() {
        var status = $(this).val();
        var product_id = $(this).find(':selected').data('product_id');

        $.ajax({
            url:"{{url('/product-status')}}",
            method:"POST",

            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{status:status,product_id:product_id},
            success:function(data){
                alert('Thay ?????i trang th??i th??nh c??ng');
                // location.reload();


            }
        });
    });
</script>

<script type="text/javascript">
    $('.order_status').change( function() {
        var status = $(this).val();
        var order_id = $(this).find(':selected').data('order_id');
        var coupon_price = $('.coupon_price').val();
        quantity = [];
        $("input[name='product_quantity']").each(function (){
            quantity.push($(this).val());
        });
        order_product_id = [];
        $("input[name='order_product_id']").each(function (){
            order_product_id.push($(this).val());
        });

        for (i=0;i<order_product_id.length;i++){
            var order_qty = $('.order_qty_' + order_product_id[i]).val();
            var order_qty_storage =  $('.order_qty_storage_' + order_product_id[i]).val();
            // if (parseInt(order_qty)>parseInt(order_qty_storage)){
            //     $('.color_qty_' + order_product_id[i].css('background','#000'))
            // }
        }

        $.ajax({
            url:"{{url('/order-status')}}",
            method:"POST",

            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{status:status,order_id:order_id,quantity:quantity,order_product_id:order_product_id,coupon_price:coupon_price},
            success:function(data){

                alert("Thay ?????i tr???ng th??i ????n h??ng th??nh c??ng")

            }
        });
    });
</script>



<script type="text/javascript">
    $('.coupon_status').change( function() {
        var status = $(this).val();
        var coupon_id = $(this).find(':selected').data('coupon_id');
        $.ajax({
            url:"{{url('/coupon-status')}}",
            method:"POST",

            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{status:status,coupon_id:coupon_id},
            success:function(data){
                alert('Thay ?????i trang th??i th??nh c??ng');
                // location.reload();


            }
        });
    });
</script>

<script type="text/javascript">
    $('.slider_status').change( function() {
        var status = $(this).val();
        var slider_id = $(this).find(':selected').data('slider_id');
        $.ajax({
            url:"{{url('/slider-status')}}",
            method:"POST",

            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{status:status,slider_id:slider_id},
            success:function(data){
                alert('Thay ?????i trang th??i th??nh c??ng');
                // location.reload();


            }
        });
    });
</script>

<script type="text/javascript">
    $('.user_status').change( function() {
        var status = $(this).val();
        var user_id = $(this).find(':selected').data('user_id');
        $.ajax({
            url:"{{url('/user-status')}}",
            method:"POST",

            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{status:status,user_id:user_id},
            success:function(data){
                alert('Thay ?????i trang th??i th??nh c??ng');
                // location.reload();


            }
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function (){
        fetch_delivery();
        function fetch_delivery() {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url : '{{url('/admin/load-delivery')}}',
                method : 'POST',
                data : {_token:_token},
                success:function (data){
                    $('#load_delivery').html(data);
                }
            })
        }

        $(document).on('blur','.feeship_edit',function (){
            var feeship_id = $(this).data('feeship_id');
            var fee_value = $(this).text();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url : '{{url('/admin/update-delivery')}}',
                method : 'POST',
                data : {feeship_id:feeship_id,fee_value:fee_value,_token:_token},
                success:function (data){
                    alert('C???p nh???t ph?? v???n chuy???n th??nh c??ng')
                    fetch_delivery();
                }
            })
        })

        $('.add_delivery').click(function () {
            var city = $('.city').val();
            var province = $('.province').val();
            var wards = $('.wards').val();
            var fee_ship = $('.fee_ship').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url : '{{url('/admin/create-delivery')}}',
                method : 'POST',
                data : {city:city,province:province,wards:wards,fee_ship:fee_ship,_token:_token},
                success:function (data){
                    alert('Th??m ph?? v???n chuy???n th??nh c??ng')
                    location.reload();
                    // fetch_delivery();
                }
            })

        });
        $('.choose').on('change',function (){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            // alert(action)
            // alert(matp)
            // alert(_token)
            if (action=='city'){
                result = 'province';
            }else {
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/admin/select-delivery')}}',
                method : 'POST',
                data : {action:action,ma_id:ma_id,_token:_token},
                success:function (data){
                    $('#'+result).html(data);
                }
            })
        });
    })
</script>

<script type="text/javascript">
    $(document).ready(function (){
        load_gallery()
        function load_gallery(){
            var product_id = $('.product_id').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url : '{{url('/admin/select-gallery')}}',
                method : 'POST',
                data : {product_id:product_id,_token:_token},
                success:function (data){
                    $('#gallery_load').html(data);
                }
            })
        }

        $('#file').change(function (){
            var error = '';
            var files = $('#file')[0].files;
            if (files.length>5){
                error += '<p>Ch???n t???i ??a 5 ???nh.</p>'
            }else if(files.length=='') {
                error += '<p>Kh??ng th??? b??? tr???ng tr?????ng n??y.</p>'
            }else if(files.size > 2000000) {
                error += '<p>File ???nh kh??ng ???????c l???n h??n 2MB.</p>'
            }

            if (error==''){

            }else {
                $('#file').val('');
                $('#error_gallery').html('<span class="text-danger">'+error+'</span>')
                return false;
            }
        })

        $(document).on('blur','.edit_gallery_name',function (){
            var gal_id = $(this).data('gal_id');
            var gal_text = $(this).text();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url : '{{url('/admin/update-gallery-name')}}',
                method : 'POST',
                data : {gal_id:gal_id,gal_text:gal_text,_token:_token},
                success:function (data){
                    load_gallery()
                    $('#error_gallery').html('<span class="text-danger">C???p nh???t t??n h??nh ???nh th??nh c??ng</span>');
                }
            })
        })

        $(document).on('click','.delete-gallery',function (){
            var gal_id = $(this).data('gal_id');
            var _token = $('input[name="_token"]').val();
            if (confirm('B???n c?? mu???n x??a h??nh ???nh n??y kh??ng')){
                $.ajax({
                    url : '{{url('/admin/delete-gallery')}}',
                    method : 'POST',
                    data : {gal_id:gal_id,_token:_token},
                    success:function (data){
                        load_gallery()
                        $('#error_gallery').html('<span class="text-danger">X??a h??nh ???nh th??nh c??ng</span>');
                    }
                })
            }

        })

        $(document).on('change','.file_image',function (){
            var gal_id = $(this).data('gal_id');
            var image = document.getElementById('file'+gal_id).files[0];

            var form_data = new FormData();
            form_data.append("file",document.getElementById('file'+gal_id).files[0]);
            form_data.append("gal_id",gal_id);

            if (confirm('B???n c?? mu???n x??a h??nh ???nh n??y kh??ng')){
                $.ajax({
                    url : '{{url('/admin/delete-gallery')}}',
                    method : 'POST',
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data : {form_data},
                    contentType:false,
                    cache:false,
                    processData:false,
                    success:function (data){
                        load_gallery()
                        $('#error_gallery').html('<span class="text-danger">X??a h??nh ???nh th??nh c??ng</span>');
                    }
                })
            }

        })
    })
</script>

<script type="text/javascript">
    $('.comment-status').click(function (){
        var comment_status = $(this).data('comment_status');
        var comment_id = $(this).data('comment_id');
        var product_id = $(this).attr('id');
        $.ajax({
            url : '{{url('/comment-status')}}',
            method : 'POST',
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data : {comment_status:comment_status,comment_id:comment_id,product_id:product_id},
            success:function (data){
                location.reload()
                $('#notify_comment').html('<span class="text text-primary">Thay ?????i tr???ng th??i b??nh lu???n th??nh c??ng</span>')
            }
        })
    })
    $('.btn-reply-comment').click(function (){
        var comment_id = $(this).data('comment_id');
        var comment = $('.reply_comment_'+comment_id).val();

        var product_id = $(this).data('product_id');

        $.ajax({
            url : '{{url('/reply-comment')}}',
            method : 'POST',
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data : {comment:comment,comment_id:comment_id,product_id:product_id},
            success:function (data){
                location.reload()
                $('#notify_comment').html('<span class="text text-primary">Tr??? l???i b??nh lu???n th??nh c??ng</span>')
                $('.reply-comment').val('');
            }
        })
    })
</script>

<script type="text/javascript">
    $( function() {
        $("#datepicker" ).datepicker({
            prevText:"Th??ng tr?????c",
            nextText:"Th??ng sau",
            dateFormat: "yy-mm-dd",
            dayNamesMin: [ "Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? Nh???t"],
            duration: "slow"
        });
        $("#datepicker2" ).datepicker({
            prevText:"Th??ng tr?????c",
            nextText:"Th??ng sau",
            dateFormat: "yy-mm-dd",
            dayNamesMin: [ "Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? Nh???t"],
            duration: "slow"
        });
    } );
</script>

<script type="text/javascript">
    $(document).ready(function (){
        chart30daysorder();

        var chart =  new Morris.Bar({
            element: 'myfirstchart',

            lineColors: ['#819C79', '#fc8710', '#ff6541', '#a4add3', '#766856'],
            // pointFillColors: ['#ffffff'],
            // pointStrokeColors: ['black'],
            fillOpacity: 0.6,
            hideHover: 'auto',
            parseTime: false,
            xkey: 'period',
            ykeys: ['order','sales','profit','quantity'],
            labels: ['????n h??ng', 'Doanh s???','L???i nhu???n', 'S??? l?????ng'],
        });

        function chart30daysorder(){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url : '{{url('/days-order')}}',
                method : 'POST',
                dataType: 'JSON',
                data : {_token:_token},
                success:function (data){
                    chart.setData(data)
                }
            })
        }

        $('.dashboard-filter').change(function (){
            var dashboard_value = $(this).val()
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url : '{{url('/dashboard-filter')}}',
                method : 'POST',
                dataType: 'JSON',
                data : {dashboard_value:dashboard_value,_token:_token},
                success:function (data){
                    chart.setData(data)
                }
            })
        })

        $('#btn-dashboard-filter').click(function (){
            var _token = $('input[name="_token"]').val();
            var from_date = $('#datepicker').val();
            var to_date = $('#datepicker2').val();

            $.ajax({
                url : '{{url('/filter-by-date')}}',
                method : 'POST',
                dataType: 'JSON',
                data : {from_date:from_date,to_date:to_date,_token:_token},
                success:function (data){
                    chart.setData(data)
                }
            })
        })
    })
</script>

<script type="text/javascript">

    var colorDanger = "#FF1744";
    Morris.Donut({
        element: 'donut-example',
        resize: true,
        colors: [
            '#fc95e4',
            '#b2f7ce',
            '#80DEEA',
            '#4DD0E1',
            '#26C6DA',
            '#00BCD4',
            '#00ACC1',
            '#0097A7',
            '#00838F',
            '#006064'
        ],
        //labelColor:"#cccccc", // text color
        //backgroundColor: '#333333', // border color
        data: [
            {label:"S???n ph???m", value:<?php echo $product_count ?>},
            {label:"Danh m???c", value:<?php echo $category_count ?>},
            {label:"Kh??ch h??ng", value:<?php echo $user_count ?>},
            {label:"????n h??ng", value:<?php echo $order_count ?>},
        ]
    });

</script>
<!-- //calendar -->
</body>
</html>

    <!-- Start Footer Section -->
    <section id="footer">
        <div class="footer container-fluid">
            <div class="footer-items">
                <div class="footer-top">
                    <div class="item">
                        <h1>انضم الى نشرتنا البريدية</h1>
                        <hr>
                        <form action="">
                            <input type="email" placeholder="ادخل بريدك الالكتروني">
                            <button>اشتراك</button>
                        </form>
                    </div>
                    <div class="item">
                        <h1>خدمة العملاء</h1>
                        <hr>
                        <p>مبيعات الشركات</p>
                        <p>الاسئلة المتكررة</p>
                        <p>دليل التسوق والمطبوعات</p>
                        <p>مواقع المعارض</p>
                        <p>سياسة الضمان</p>
                        <p>سياسة الاسترجاع والاستبدال</p>
                        <p>التصل بنا</p>
                        <h3>920000089</h3>
                    </div>
                    <div class="item">
                        <h1>خدمة جرير</h1>
                        <hr>
                        <p>خدمة تقسيط المشتريات</p>
                        <p>خدمة ما بعد البيع</p>
                        <p>خدمة الحماية الشاملة</p>
                        <p>حماية اجهزة ابل</p>
                        <p>بطاقة جرير للهدايا</p>
                    </div>
                    <div class="item">
                        <h1>روابط سريعة</h1>
                        <hr>
                        <p>اصدارات جرير</p>
                        <p>قارئ جرير</p>
                        <p>شركاء برامج المكافئات</p>
                        <p>خدمات شركات الاتصالات</p>
                    </div>
                    <div class="item">
                        <h1>عن جرير</h1>
                        <hr>
                        <p>من نحن</p>
                        <p>الحوكمة</p>
                        <p>علاقات المستثمرين والتقارير</p>
                        <p>الاستدامة</p>
                        <p>الاخبار</p>
                        <h1>فرص العمل</h1>
                        <hr>
                    </div>
                </div>
                <div class="bottom">
                    <h1>تواصل معنا</h1>
                    <hr>
                    <div class="icons">
                        <img src="layout/images/icon.png" alt="">
                        <img src="layout/images/icon1.png" alt="">
                        <img src="layout/images/icon2.png" alt="">
                        <img src="layout/images/icon3.png" alt="">
                        <img src="layout/images/iconf.png" alt="">
                        <img src="layout/images/iconi.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer Section -->

    <!-- Start CopyRight Section -->
    <section id="copyright">
        <div class="copyright container">
            <div class="items">
                <div class="col-md-lift">
                    <img src="layout/images/pay.jfif" alt="">
                    <img src="layout/images/q.png" alt="">
                    <img src="layout/images/m.png" alt="">
                    <img src="layout/images/v.png" alt="">
                    <img src="layout/images/me.png" alt="">
                    <img src="layout/images/emr.jfif" alt="">
                </div>
                <div class="col-md-right">
                    <h1>
                        <span></span> |
                        <span></span>
                    </h1>
                    <p>
                        جميع الحقوق محفوظة امكتبة جرير &copy;
                        2022 س.ت. 738843852 اونلاين س.ت. 738843852
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Start CopyRight Section -->

    <script src="app/public/js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $('#carouselExample').on('slide.bs.carousel', function (e) {

            var ee = $(e.relatedTarget);
            var idx = ee.index();
            var itemsPerSlide = 6;
            var totalItems = $('.carousel-item').length;

            if (idx >= totalItems - (itemsPerSlide - 1)) {
                var it = itemsPerSlide - (totalItems - idx);
                for (var i = 0; i < it; i++) {
                    // append slides to end
                    if (e.direction == "left") {
                        $('.carousel-item').eq(i).appendTo('.carousel-inner');
                    } else {
                        $('.carousel-item').eq(0).appendTo('.carousel-inner');
                    }
                }
            }
        });
    </script>
</body>
</html>
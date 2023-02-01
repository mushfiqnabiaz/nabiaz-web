<!doctype html>
<html lang="en">
@include('layouts.head')

<body>
@include('layouts.preloader')
<!-- app -->
<div class="art-app art-app-onepage">

    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

        <!-- app container end -->
        <div class="art-app-container">

            <!-- info bar -->
            <div class="art-info-bar">

            @include('layouts.menu')

            </div>
            <!-- info bar end -->

            <!-- content -->
            <div class="art-content">

                <!-- curtain -->
                <div class="art-curtain"></div>

                <!-- top background -->
                <div class="art-top-bg" style="background-image: url({{asset("frontend/assets/img/bg.jpg")}})">
                    <!-- overlay -->
                    <div class="art-top-bg-overlay"></div>
                    <!-- overlay end -->
                </div>
                <!-- top background end -->

                <!-- swup container -->
                <div class="transition-fade" id="swup">

                    <!-- scroll frame -->
                    <div id="scrollbar" class="art-scroll-frame">

                        @include('partials.front')

                        @include('partials.experience')

                        @include('partials.service')

                        @include('partials.pricing')

                        @include('partials.recommandation')

                        @include('partials.history')

                        @include('partials.works')

                        @include('partials.blog')

                        @include('partials.brand')

                        @include('layouts.footer')

                    </div>
                    <!-- scroll frame end -->

                </div>
                <!-- swup container end -->

            </div>
            <!-- content end -->

        </div>
        <!-- app container end -->

    </div>
    <!-- app wrapper end -->



</div>
<!-- app end -->
<div id="swupMenu"></div>

@include('layouts.script')

</body>

</html>

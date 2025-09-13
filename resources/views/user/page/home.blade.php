@extends('layout.layout')
@section('title')
        หน้าแรก
@endsection
@section('content')

        <div class="container" data-aos="fade-down"     >
                <div class="slider" id="foodSlider">
                        <img src="{{ asset(url('https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg')) }}" alt="">

                        <img src="{{ asset(url('https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg')) }}" alt="">

                        <img src="{{ asset(url('https://images.pexels.com/photos/718742/pexels-photo-718742.jpeg')) }}" alt="">

                        <img src="{{ asset(url('https://images.pexels.com/photos/106343/pexels-photo-106343.jpeg')) }}" alt="">

                        <img src="{{ asset(url('https://images.pexels.com/photos/1603901/pexels-photo-1603901.jpeg')) }}"
                                alt="">

                        <img src="{{ asset(url('https://t3.ftcdn.net/jpg/16/37/39/58/240_F_1637395895_yechu5NxFX2ryGgsUIww3wlTdWXbjFGi.jpg')) }}"
                                alt="">

                        <img src="{{ asset(url('https://t4.ftcdn.net/jpg/14/98/05/95/240_F_1498059581_JWA3gPfyE7SbxaWYhIbLpyEO9jZbIljj.jpg')) }}"
                                alt="">

                        <img src="{{ asset(url('https://t3.ftcdn.net/jpg/15/48/11/86/240_F_1548118644_KjX0oWn2PsjRy6gZQVYVuCgg42V2II5l.jpg')) }}"
                                alt="">

                        <img src="{{ asset(url('https://t4.ftcdn.net/jpg/14/55/47/53/240_F_1455475385_ZNH3y9JXg9NlLnzdM2kROrrlSji12XmJ.jpg')) }}"
                                alt="">

                </div>

                <div class="catagoryFood" data-aos="fade-down">
                        <div class=" tab-menu">
                                <h2 class="head-menu">อาหารจานหลัก</h2>
                                <a href="#">
                                        <h2 class="tab-all-main">ทั้งหมด</h2>
                                </a>
                        </div>
                        <div class="foodType">
                                @foreach ($foods as $recipe)
                                        @if ($recipe->catagoryID == 1)
                                                <div class="card" onclick="window.location='{{ route('recipe.show', $recipe->recipeID) }}'">
                                                        <img src="{{ $recipe->imageURL }}" alt="">
                                                        <div class="card-title">{{ $recipe->title }}</div>
                                                        <div class="card-author">{{$recipe->username}}</div>

                                                </div>
                                        @endif

                                @endforeach

                        </div>
                </div>

                <div class="catagoryFood data-aos=" data-aos="fade-down">
                        <div class=" tab-menu">
                                <h2 class="head-menu">อาหารทานเล่น</h2>
                                <a href="#">
                                        <h2 class="tab-all-main">ทั้งหมด</h2>
                                </a>
                        </div>
                        <div class="foodType">
                                @foreach ($foods as $recipe)
                                        @if ($recipe->catagoryID == 2)
                                                <div class="card" onclick="window.location='{{ route('recipe.show',$recipe->recipeID) }}'">
                                                        <img src="{{ $recipe->imageURL }}" alt="">
                                                        <div class="card-title">{{ $recipe->title }}</div>
                                                        <div class="card-author">{{$recipe->username}}</div>

                                                </div>
                                        @endif

                                @endforeach

                        </div>
                </div>



        </div>



        <script>
                const slider = document.getElementById("foodSlider");

                function autoScroll() {
                        if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth) {
                                slider.scrollTo({ left: 0, behavior: "smooth" }); // กลับไปเริ่มใหม่
                        } else {
                                slider.scrollBy({ left: 220, behavior: "smooth" }); // เลื่อนไปทีละรูป
                        }
                }

                setInterval(autoScroll, 3000); // ทุก 3 วิเลื่อน


        </script>
        <!-- script สำหรับการเคลื่อนไหว -->

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
                AOS.init();
        </script>
@endsection
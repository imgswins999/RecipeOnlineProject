@extends('layout.layout')
@section('title', $recipe->title)
@section('content')
    <div class="container-showRecipe">
        <div class="infomation-box">
            <div class="show-imageFood">
                <img src="{{ $recipe->imageURL}}" alt="รูปเมนูอาหาร" width="556px" height="400px">
            </div>
            <div class="infomation-groupbox">
                <h4>ประเภทอาหาร</h4>
                <h1>ชื่ออาหาร</h1>
                <div class="author-box">
                    <img src="{{$recipe->userImage}}" alt="">
                    <h3>{{$recipe->username}}</h3>
                </div>
                <div class="description-box">
                    <!-- อย่าลืมแก้ เขียนไใว้ก่อน-->
                    <p>คำอธิบาย</p>
                </div>
                <div class="likeAndTimer">
                    <div class="like">
                        <!-- ยังไม่ไลค์ -->
                        <img src="{{ asset('../includes/image/like.png') }}" alt="like" width="50px">

                        <!-- ไลค์แล้ว -->
                        <!-- <img src="{{ asset('../includes/image/liked.png') }}" alt="liked"> -->
                    </div>
                    <div class="timer">
                        <h4>ความยาก</h4>
                        <h4>ระยะเวลา</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="ingredients-box">
            <h1>วัตถุดิบและวิธีการทำ</h1>
            <div class="ingredients">
                <p>{{$recipe->ingredients}}</p>
            </div>
            <div class="instructions">
                <p>{{$recipe->instructions}}</p>
            </div>
        </div>
    </div>

@endsection
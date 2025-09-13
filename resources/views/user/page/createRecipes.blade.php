@extends('layout.layout')
@section('title')
        เพิ่มสูตรอาหาร
@endsection

@section('content')
        <form action="#">
                <div class="container-addRecipe">
                        <div class="st-info">
                                <!-- เพิ่มรูปภาพ -->
                                <div class="addImage">
                                        <label for="add-recipe" class="text-add">เพิ่มสูตรอาหาร</label>
                                        <!-- กล่องข้อมูลอัพโหลดภาพ -->
                                        <div class="upload-box">
                                                <input type="file" id="cover" name="imageURL" accept=".jpg,.png" hidden>
                                                <label for="cover" class="upload-label">
                                                        <!-- ข้อความก่อนอัปโหลด -->
                                                        <div class="upload-content">
                                                                <div class="uploade-icon">⬆</div>
                                                                <p>อัปโหลดรูปปก</p>
                                                                <small>คำแนะนำ : ไฟล์นามสกุล .jpg .png </small>
                                                        </div>
                                                        <!-- รูป preview -->
                                                        <img id="previewImage" src="" alt="Preview">

                                                </label>
                                        </div>

                                </div>

                                <!-- เพิ่มข้อมูล -->
                                <div class="addInfomation">
                                        <!-- กล่องข้อมูลชื่ออาหาร -->
                                        <div class="title-box">
                                                <label for="add-title" class="add-title">ชื่อสูตรอหาร :</label>
                                                <input type="text" name="title" id="title" request>
                                        </div>
                                        <!-- กล่องข้อมูลคำอธิบาย -->
                                        <div class="description-box">
                                                <label for="add-descripstion">คำอธิบาย :</label>
                                                <textarea name="description" id="description"></textarea>
                                        </div>
                                        <!-- พื้นที่จ้อมูลที่เป็นตัวเลือกและเวลาในการทำ-->
                                        <div class="choice-area">
                                                <!-- กล่องประเทภ -->
                                                <div class="type-box">
                                                        <label for="หมวดหมู่">ประเภทอาหาร :</label>
                                                        <select name="catagory" id="catagory" required>
                                                                <option value="">-- เลือกประเภท --</option>
                                                                @foreach ($catagory as $cat)
                                                                        <option value="{{ $cat->catagoryID  }}">{{$cat->name}}</option>

                                                                @endforeach
                                                        </select>
                                                </div>
                                                <!-- กล่องความยาก -->
                                                <div class="difficulty-box"> <label for="difficulty">ความยาก</label>
                                                        <select name="difficulty" id="difficulty" required>
                                                                <option value="">-- เลือกความยาก -- </option>
                                                                <option value="ง่าย">ง่าย</option>
                                                                <option value="ปานกลาง">ปานกลาง</option>
                                                                <option value="ยาก">ยาก</option>
                                                        </select>
                                                </div>
                                                <!-- กล่องเวลา -->
                                                <div class="time-box">
                                                        <label for="add-time">ระยะเวลาในการทำ :</label>
                                                        <input type="text" name="add-time" id="add-time">
                                                </div>

                                        </div>
                                </div>
                        </div>
                        <!-- วัตถุดิบ และขั้นตอนการทำ -->
                        <div class="mid-info">
                                <div class="ingredients-box">
                                        <h2>วัตถุดิบ</h2>
                                        <textarea name="ingredients" rows="10" cols="50" placeholder="พิมพ์วัตถุดิบแต่ละบรรทัด
        เช่น 
        แป้ง 200g
        น้ำตาล 100g
        ไข่ 2 ฟอง"></textarea>
                                </div>
                        </div>
                        <div class="mid-info">
                                <div class="instructions-box">
                                        <h2>วัตถุดิบ</h2>
                                        <textarea name="instructions" rows="10" cols="50"
                                                placeholder="พิมพ์ขึ้นตอนแต่ละบรรทัด"></textarea>
                                </div>
                        </div>

                        <!-- ปุ่มบันทึก -->
                        <div class="save-button">
                                <button type="reset" class="btCancleRecipe">ยกเลิก</button>
                                <button type="submit" class="btSaveRecipe">บันทึก</button>
                        </div>

                </div>
        </form>

        <script>
                // แสดงรูปภาพ
                const input = document.getElementById("cover");
                const preview = document.getElementById("previewImage");
                const uploadContent = document.getElementById("uploadContent");

                input.addEventListener("change", function () {
                        const file = this.files[0];
                        if (file) {
                                const reader = new FileReader();
                                reader.onload = function (e) {
                                        preview.src = e.target.result;
                                        preview.style.display = "block";     // โชว์รูป
                                        uploadContent.style.display = "none"; // ซ่อนข้อความ
                                }
                                reader.readAsDataURL(file);
                        }
                });



        </script>
@endsection
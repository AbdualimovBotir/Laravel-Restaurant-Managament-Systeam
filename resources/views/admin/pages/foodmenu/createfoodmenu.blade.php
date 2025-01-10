<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ovqat-Menyu Formasi</h4>
                        <p class="card-description">Ovqat menyusi ma'lumotlarini qo'shing</p>
                        <form action="{{ route('foodmenu.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="productname">Nomi</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="productname"
                                    name="productname"
                                    placeholder="Mahsulot nomini kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="productprice">Narxi</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="productprice"
                                    name="productprice"
                                    placeholder="Mahsulot narxini 2 xonali kasr bilan kiriting"
                                    pattern="[0-9]+([\.,][0-9]+)?"
                                    step="0.01"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label>Rasm yuklash</label>
                                <div class="input-group col-xs-12">
                                    <input
                                        type="file"
                                        class="form-control file-upload-info"
                                        placeholder="Mahsulot rasmini yuklang"
                                        id="productimage"
                                        name="productimage"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <img id="tempproductimage" src="#" alt="vaqtinchalik-yuklangan-rasm" class="h-auto shadow-sm w-1/2" style="display: none" />
                            </div>

                            <div class="form-group">
                                <label for="productdescription">Tavsifi</label>
                                <textarea
                                    class="form-control"
                                    id="productdescription"
                                    name="productdescription"
                                    rows="4"
                                    required
                                    placeholder="Mahsulot tavsifini kiriting"
                                ></textarea>
                            </div>

                            @if ($isAdmin === true)
                                <button type="submit" class="btn btn-primary mr-2">Qo'shish</button>
                            @else
                                <button onclick="alert('Faqat admin ovqat menyusini qo\'shishi mumkin')" type="button" class="btn btn-primary mr-2">Qo'shish</button>
                            @endif
                            <a href="{{ route("foodmenu.index") }}" class="btn btn-light">Bekor qilish</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var imgInput = document.getElementById("productimage");
        imgInput.addEventListener('change', (event) => {
            if (event.target.files[0]) {
                var reader = new FileReader();

                var imgTemp = document.getElementById("tempproductimage");
                reader.onload = function (e) {
                    imgTemp.setAttribute("src", e.target.result);
                }

                reader.readAsDataURL(event.target.files[0]);

                if (imgTemp.style.display === "inline") {
                    imgTemp.style.display = "block";
                } else {
                    imgTemp.style.display = "inline";
                }
            }
        });
    </script>
</x-admin.index>

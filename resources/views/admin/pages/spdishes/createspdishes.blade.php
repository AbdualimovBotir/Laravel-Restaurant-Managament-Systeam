<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Maxsus Taom Qo'shish Formasi</h4>
                        <p class="card-description">Maxsus taomlar haqidagi ma'lumotni qo'shing</p>
                        <form action="{{ route('specialdishes.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="spdishesname1">Birinchi qism nomi</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="spdishesname1"
                                    name="spdishesname1"
                                    placeholder="Taom nomining birinchi qismiga kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="spdishesname2">Ikkinchi qism nomi</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="spdishesname2"
                                    name="spdishesname2"
                                    placeholder="Taom nomining ikkinchi qismiga kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="spdishesprice">Narxi</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="spdishesprice"
                                    name="spdishesprice"
                                    placeholder="Taom narxini ikki xonali kasr bilan kiriting"
                                    pattern="[0-9]+([\.,][0-9]+)?"
                                    step="0.01"
                                    repuired
                                />
                            </div>

                            <div class="form-group">
                                <label for="spdishesimage">Rasm yuklash</label>
                                <div class="input-group col-xs-12">
                                    <input
                                        type="file"
                                        class="form-control file-upload-info"
                                        placeholder="Taom rasmni yuklang"
                                        id="spdishesimage"
                                        name="spdishesimage"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <img id="tempspdishesimage" src="#" alt="temp-uploded-img" class="h-auto shadow-sm w-1/2" style="display: none" />
                            </div>

                            <div class="form-group">
                                <label for="spdishesdesc">Tavsif</label>
                                <textarea
                                    class="form-control"
                                    id="spdishesdesc"
                                    name="spdishesdesc"
                                    rows="4"
                                    required
                                    placeholder="Taom tavsifini kiriting"
                                ></textarea>
                            </div>

                            @if ($isAdmin === true)
                                <button type="submit" class="btn btn-primary mr-2">Qo'shish</button>
                            @else
                                <button onclick="alert('Faqat admin maxsus taom qo\'shishi mumkin')" type="button" class="btn btn-primary mr-2">Qo'shish</button>
                            @endif
                            <a href="{{ route('specialdishes.index') }}" class="btn btn-light">Bekor qilish</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var imgInput = document.getElementById("spdishesimage");
        imgInput.addEventListener('change', (event) => {
            if (event.target.files[0]) {
                var reader = new FileReader();

                var imgTemp = document.getElementById("tempspdishesimage");
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

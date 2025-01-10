<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Fikr-mulohaza Formasi</h4>
                        <p class="card-description">Fikr-mulohaza ma'lumotlarini qo'shing</p>
                        <form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="reviewname">Ism</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="reviewname"
                                    name="reviewname"
                                    placeholder="Mijozning ismini kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="reviewbio">Bio</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="reviewbio"
                                    name="reviewbio"
                                    placeholder="Mijozning bio ma'lumotlarini kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="reviewrating">Reyting</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="reviewrating"
                                    name="reviewrating"
                                    placeholder="Reytingni kiriting (2 o'nlikgacha)"
                                    pattern="[0-9]+([\.,][0-9]+)?"
                                    step="0.01"
                                    repuired
                                />
                            </div>

                            <div class="form-group">
                                <label>Rasm yuklash</label>
                                <div class="input-group col-xs-12">
                                    <input
                                        type="file"
                                        class="form-control file-upload-info"
                                        placeholder="Fikr-mulohaza rasmini yuklang"
                                        id="reviewimage"
                                        name="reviewimage"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <img id="tempreviewimage" src="#" alt="vaqtinchalik-yuklangan-rasm" class="h-auto shadow-sm w-1/2" style="display: none" />
                            </div>

                            <div class="form-group">
                                <label for="reviewtext">Fikr-mulohaza</label>
                                <textarea
                                    class="form-control"
                                    id="reviewtext"
                                    name="reviewtext"
                                    rows="4"
                                    required
                                    placeholder="Mijozning fikr-mulohazasini kiriting"
                                ></textarea>
                            </div>

                            @if ($isAdmin === true)
                                <button type="submit" class="btn btn-primary mr-2">Qo'shish</button>
                            @else
                                <button onclick="alert('Faqat admin fikr-mulohaza qo\'shishi mumkin')" type="button" class="btn btn-primary mr-2">Qo'shish</button>
                            @endif
                            <a href="{{ route("testimonial.index") }}" class="btn btn-light">Bekor qilish</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var imgInput = document.getElementById("reviewimage");
        imgInput.addEventListener('change', (event) => {
            if (event.target.files[0]) {
                var reader = new FileReader();

                var imgTemp = document.getElementById("tempreviewimage");
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

<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Testimonial Formasi</h4>
                        <p class="card-description">Testimonial ma'lumotlarini tahrirlash</p>
                        <form action="{{ route('testimonial.update', $data->id ) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="reviewname">Ism</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="reviewname"
                                    name="reviewname"
                                    value="{{ $data->name }}"
                                    placeholder="Mijozning ismini kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="reviewbio">Biografiya</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="reviewbio"
                                    name="reviewbio"
                                    value="{{ $data->bio }}"
                                    placeholder="Mijozning biografiyasini kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="reviewrating">Baholash</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="reviewrating"
                                    name="reviewrating"
                                    value="{{ $data->rating }}"
                                    placeholder="Bahoni 2 kasrgacha kiriting"
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
                                        placeholder="Sharh uchun rasmni yuklang"
                                        id="reviewimageupdate"
                                        name="reviewimage"
                                        value="{{ $data->img }}"
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <img id="tempreviewimageedit" src="{{ $data->img }}" alt="{{ $data->name }}" class="h-auto shadow-sm w-1/2" />
                            </div>

                            <div class="form-group">
                                <label for="reviewtext">Sharh</label>
                                <textarea
                                    class="form-control"
                                    id="reviewtext"
                                    name="reviewtext"
                                    rows="4"
                                    required
                                    placeholder="Mijozning sharhini kiriting"
                                >{{ $data->review }}</textarea>
                            </div>

                            @if ($isAdmin === true)
                                <button type="submit" class="btn btn-primary mr-2">Tahrirlash</button>
                            @else
                                <button onclick="alert('Faqat admin sharhni tahrirlashi mumkin')" type="button" class="btn btn-primary mr-2">Tahrirlash</button>
                            @endif
                            <a href="{{ route("testimonial.index") }}" class="btn btn-light">Bekor qilish</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        reviewimageupdate.onchange = evt => {
            const [file] = reviewimageupdate.files
            if (file) {
                tempreviewimageedit.src = URL.createObjectURL(file)
            }
        }
    </script>
</x-admin.index>

<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Maxsus Taomni Tahrirlash Formasi</h4>
                        <p class="card-description">Maxsus taomlar haqidagi ma'lumotni tahrirlang</p>
                        <form action="{{ route('specialdishes.update', $data->id ) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="spdishesname1edit">Birinchi qism nomi</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="spdishesname1edit"
                                    name="spdishesname1edit"
                                    value="{{ $data->namepart1 }}"
                                    placeholder="Taom nomining birinchi qismiga kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="spdishesname2edit">Ikkinchi qism nomi</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="spdishesname2edit"
                                    name="spdishesname2edit"
                                    value="{{ $data->namepart2 }}"
                                    placeholder="Taom nomining ikkinchi qismiga kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="spdishespriceedit">Narxi</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="spdishespriceedit"
                                    name="spdishespriceedit"
                                    value="{{ $data->price }}"
                                    placeholder="Taom narxini ikki xonali kasr bilan kiriting"
                                    pattern="[0-9]+([\.,][0-9]+)?"
                                    step="0.01"
                                    repuired
                                />
                            </div>

                            <div class="form-group">
                                <label for="spdishesimageedit">Rasm yuklash</label>
                                <div class="input-group col-xs-12">
                                    <input
                                        type="file"
                                        class="form-control file-upload-info"
                                        placeholder="Taom rasmni yuklang"
                                        id="spdishesimageedit"
                                        name="spdishesimageedit"
                                        value="{{ $data->img }}"
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <img id="tempspdishesimageedit" src="{{ $data->img }}" alt="{{ $data->name }}" class="h-auto shadow-sm w-1/2" />
                            </div>

                            <div class="form-group">
                                <label for="spdishesdescedit">Tavsif</label>
                                <textarea
                                    class="form-control"
                                    id="spdishesdescedit"
                                    name="spdishesdescedit"
                                    rows="4"
                                    required
                                    placeholder="Taom tavsifini kiriting"
                                >{{ $data->desc }}</textarea>
                            </div>

                            @if ($isAdmin === true)
                                <button type="submit" class="btn btn-primary mr-2">Tahrirlash</button>
                            @else
                                <button onclick="alert('Faqat admin maxsus taomni tahrirlay oladi')" type="button" class="btn btn-primary mr-2">Tahrirlash</button>
                            @endif
                            <a href="{{ route('specialdishes.index') }}" class="btn btn-light">Bekor qilish</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        spdishesimageedit.onchange = evt => {
            const [file] = spdishesimageedit.files
            if (file) {
                tempspdishesimageedit.src = URL.createObjectURL(file)
            }
        }

    </script>
</x-admin.index>

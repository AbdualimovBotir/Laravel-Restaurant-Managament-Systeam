<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <a href="{{ route('foodmenu.create') }}" class="btn btn-primary mx-2">Yangi Ovqat Qo'shish</a>
    </div>

    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ovqat-Menyu Ma'lumotlar Jadvali</h4>
                    <p class="card-description">
                        Ovqat-menyu ma'lumotlari jadvali
                    </p>

                    @if(session()->has('msg'))
                        <p class="alert alert-info">{{ session()->get('msg') }}</p>
                    @endif

                    <table class="table table-hover overflow-auto block">
                        <thead>
                        <tr class="bg-slate-800">
                            @foreach(["Rasm", "Nomi", "Narxi", "Tavsifi", "Yaratilgan sana", "", ""] as $heading)
                                <th class="font-bold text-white">{{$heading}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $data)
                            <tr>
                                <td class="w-32">
                                    <img src="{{$data->img}}" alt="{{$data->name}}" class="!w-full !h-auto !rounded-none">
                                </td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->price}}</td>
                                <td class="max-w-[190px] min-w-[190px] !leading-normal !whitespace-normal break-words">{{$data->desc}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>
                                    <a
                                        href="{{ route('foodmenu.edit', $data->id) }}"
                                        class="badge badge-primary cursor-pointer"
                                    >Tahrirlash</a
                                    >
                                </td>
                                <td>
                                    @if ($isAdmin === true)
                                        <form method="POST" action="{{ route('foodmenu.destroy', $data->id) }}">
                                            @method('DELETE')
                                            @csrf

                                            <button
                                                type="submit"
                                                class="badge badge-danger cursor-pointer"
                                                onclick="return confirmDeleteFood({{ $data->id }} , '{{ $data->name }}');"
                                            >O'chirish</button>
                                        </form>
                                    @else
                                        <button
                                            onclick="alert('Faqat admin ovqat menyusini o\'chirish mumkin')"
                                            class="badge badge-danger cursor-pointer"
                                        >O'chirish</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDeleteFood(id, name) {
            if(!confirm("Bu ovqat menyusini o'chirishga ishonchingiz komilmi? Nomi: " + name + ", Id: " + id + "." ))
                event.preventDefault();
        }
    </script>
</x-admin.index>

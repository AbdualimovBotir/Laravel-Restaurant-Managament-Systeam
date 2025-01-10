<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Foydalanuvchilar Jadvali</h4>
                    <p class="card-description">
                        Foydalanuvchi ma'lumotlari jadvali
                    </p>
                    <table class="table table-hover">
                        <thead>
                        <tr class="bg-slate-800">
                            @foreach(["Ism", "Email", "Yaratilgan vaqt", "Harakat"] as $heading)
                                <th class="font-bold text-white">{{$heading}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @if ($isAdmin === false)
                            <tr>
                                <td>Faqat admin</td>
                                <td>foydalanuvchilarni</td>
                                <td>ko'rish yoki tahrirlash</td>
                                <td>mumkin</td>
                            </tr>
                        @else
                            @foreach($data as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->created_at}}</td>
                                    @if($data->usertype == "0")
                                        <td>
                                            <form method="POST" action="{{ route('user.destroy', $data->id) }}">
                                                @method('DELETE')
                                                @csrf

                                                <div class="form-group">
                                                    <button
                                                        type="submit"
                                                        class="badge badge-danger cursor-pointer"
                                                        onclick="return confirmDeleteUser({{ $data->id }} , '{{ $data->name }}');"
                                                    >O'chirish</button>
                                                </div>
                                            </form>
                                        </td>
                                    @else
                                        <td><p class="badge badge-dark">Ruxsat berilmagan</p></td>
                                    @endif
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDeleteUser(id, name) {
            if(!confirm("Ushbu foydalanuvchini o'chirishga ishonchingiz komilmi? Ismi: " + name + ", Id: " + id + "."  ))
                event.preventDefault();
        }
    </script>
</x-admin.index>

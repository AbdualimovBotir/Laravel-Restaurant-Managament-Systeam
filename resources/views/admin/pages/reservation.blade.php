<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Rezervasyonlar Jadvali</h4>
                    <p class="card-description">
                        Rezervasyonlar haqidagi ma'lumotlar jadvali
                    </p>
                    <table class="table table-hover overflow-auto block">
                        <thead>
                        <tr class="bg-slate-800">
                            @foreach(["Ism", "Telefon raqami", "Sana", "Vaqt", "Kishi soni", "Yaratilgan vaqt"] as $heading)
                                <th class="font-bold text-white">{{$heading}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @if ($isAdmin === false)
                            <tr>
                                <td>Faqat admin</td>
                                <td>ko'rish</td>
                                <td>yoki tahrirlash</td>
                                <td>rezervasyon</td>
                                <td>ma'lumotlari</td>
                                <td>.</td>
                            </tr>
                        @else
                            @foreach($data as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->phone_number}}</td>
                                    <td>{{$data->date}}</td>
                                    <td>{{$data->time}}</td>
                                    <td>{{$data->person}}</td>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin.index>

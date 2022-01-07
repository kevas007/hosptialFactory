
        <h1>
        {{-- @foreach ( $hopital as $item ) --}}
        {{ $hopital[0]->nom }}
        {{-- @endforeach --}}
        </h1>


        <table class="table-auto">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Docteur</th>
                    <th>Local</th>
                    <th>Patient</th>
                    <th>Statut de  consultation</th>
                    <th>Diagnostique</th>
                    {{-- <th>
                        Dossier-Medicale
                    </th> --}}
                </tr>
            </thead>
            <tbody>

                {{-- {{ dd($value->hopitals_id) }} --}}
                {{-- @if ($hopital->id == $value->hopitals_id) --}}
                @foreach ($hopital as $value)

                <tr>
                    <td>{{ $value->date }}: {{ $value->heure }} </td>
                    <td>{{ $value->doc_nom }}</td>
                    <td>{{ $value->local_nom }}</td>
                    <td>{{ $value->name}} </td>
                    <td>{{ $value->statut}} </td>
                    <td>
                        @if ($value->statut =="fait")
                        <span>
                            <a class="text-gray-700" href="/diagnotique/{{$value->id}}"> détails... </a>
                        </span>
                        @else
                        <span>
                            Pas de dossierMedical
                        </span>

                        @endif

                        {{-- @if ($item->dossiermedicals!= null)
                        <span>
                            <a class="text-gray-700" href="/diagnotique/{{$item->dossiermedicals->id}}"> détails... </a>
                        </span>
                        @else
                        <span>
                            Pas de  dossierMedical
                        </span>
                        @endif --}}


                </td>
                    {{-- <td><span>
                        <a class="text-gray-700" href="/dossierMedical/{{ $item->id }}">  détails... </a>
                    </span>
                </td> --}}
                </tr>
            </tbody>
            @endforeach

        </table>



        <div class="flex">
            <a href="#" class="flex items-center px-4 py-2 mx-1 text-gray-500 bg-white rounded-md cursor-not-allowed dark:bg-gray-900 dark:text-gray-600">
                {{ $hopital->links() }}
            </a>


        </div>

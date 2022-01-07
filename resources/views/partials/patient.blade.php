<h1 class="text-center font-bold text-xl mt-10 mb-5">
    Patients
</h1>

<table class="table-auto">
    <thead>
        <tr>
            <th>Register</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance </th>
            <th>Genre</th>
            <th>Addresse </th>
            <th>Pays</th>
            <th>Ville</th>
            <th>Code Postal</th>
            <th>Téléphone</th>
            <th>Personne de contact</th>
            <th>
                Téléphone de la personne de contact
            </th>
            <th>
                Dossier Medicale
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)
            <tr>
                <td>
                    {{ $patient->register }}
                </td>
                <td>
                    {{ $patient->name }}
                </td>
                <td>
                    {{ $patient->prenom }}
                </td>
                <td>
                    {{ $patient->date_naissance }}
                </td>
                <td>
                    {{ $patient->genre }}
                </td>
                <td>
                    {{ $patient->adresse }}
                </td>
                <td>
                    {{ $patient->pays }}
                </td>
                <td>
                    {{ $patient->ville }}
                </td>
                <td>
                    {{ $patient->code_postal }}
                </td>
                <td>
                    {{ $patient->num_telephone }}
                </td>
                <td>
                    {{ $patient->personne_contact }}
                </td>
                <td>
                    {{ $patient->num_telephone_contact }}
                </td>

                <td>
                @if( $patient->id != null )
                    <span>
                        <a class="text-gray-700" href="/dossierMedical/{{ $patient->register }}"> détails... </a>
                    </span>
                    @else
                    <span>
                        Pas de dossierMedical
                    </span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
{{ $patients->links() }}

<h1 class="text-2xl font-bold text-center mt-10 mb-10">
    Dossier medical de {{ $dossierMedicals->name }}
</h1>


<div class="max-w-2xl px-8 py-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">


    <div class="mt-2">
        <p
            class="text-2xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">
            Patient: {{ $dossierMedicals->name }} </p>
        <p class="mt-2 text-white dark:text-gray-300">Register : {{ $dossierMedicals->register }}</p>
        <p class="mt-2 text-white dark:text-gray-300">Nom : {{ $dossierMedicals->name }}</p>
        <p class="mt-2 text-white dark:text-gray-300">Prénom : {{ $dossierMedicals->prenom }}</p>
        <p class="mt-2 text-white dark:text-gray-300">Date de naissance : {{ $dossierMedicals->date_naissance }}</p>
        <p class="mt-2 text-white dark:text-gray-300">Genre : {{ $dossierMedicals->genre }}</p>
        {{-- <p class="mt-2 text-white dark:text-gray-300">Addresse  :  {{ $dossierMedicals->adresse }}</p>
        <p class="mt-2 text-white dark:text-gray-300">Pays :  {{ $dossierMedicals->pays }}</p>
        <p class="mt-2 text-white dark:text-gray-300">Ville :  {{ $dossierMedicals->ville }}</p>
        <p class="mt-2 text-white dark:text-gray-300">Code Postal :  {{ $dossierMedicals->code_postal }}</p> --}}
        {{-- <p class="mt-2 text-white dark:text-gray-300">Numéro de téléphone:  {{ $dossierMedicals->dossiermedicals->num_telephone }}</p> --}}
        <div class="flex justify-between align-center">
            <ul class="mt-2 text-white dark:text-gray-300">Maladies :

                @foreach ($dossierMedicals->dossiermedicals as $item)
                    <li>
                        {{ $item->maladies->nom }}
                    </li>
                @endforeach
            </ul>
            <ul class="mt-2 text-white dark:text-gray-300"> Dates:
                @foreach ($dossierMedicals->dossiermedicals as $item)
                    <li>
                        {{ $item->consultations->date }}
                    </li>
                @endforeach
            </ul>
            <ul class="mt-2 text-white dark:text-gray-300"> Traitement :
                {{-- {{ $dossierMedicals->dossiermedicals }} --}}
                @foreach ($dossierMedicals->dossiermedicals as $item)

                    @if( $item->maladies->traitement ==null)
                    <li> Aucun traitement</li>
                    @else
                    <li>{{ $item->maladies->traitement }}</li>
                    @endif
                    {{-- <li>{{ $item->maladies->traitement }}</li> --}}

                @endforeach
            </ul>
            {{-- <p class="mt-2 text-white dark:text-gray-300">Personne de contact :  {{ $dossierMedicals->dossiermedicals->personne_contact }}</p>
        <p class="mt-2 text-white dark:text-gray-300">Numero de la personne de contact :  {{ $dossierMedicals->dossiermedicals->num_telephone_contact }}</p> --}}
            {{-- <p class="mt-2 text-white dark:text-gray-300">Diagnostic : {{  $dossierMedicals->dossiermedicals->diagnostique->libelle }}</p> --}}
            <ul class="mt-2 text-white dark:text-gray-300">Diagnostic :
                @foreach ($dossierMedicals->dossiermedicals as $item)
                    <li>
                        {{ $item->diagnostique->libelle }}
                    </li>
                @endforeach

            </ul>
        </div>
        {{-- <p class="mt-2 text-gray-600 dark:text-gray-300">Chambre : {{   $hopitaux  }}</p> --}}
    </div>


</div>

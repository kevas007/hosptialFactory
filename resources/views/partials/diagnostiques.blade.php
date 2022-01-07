<h1 class="text-2xl text-center font-bold mt-5 mb-5">
    Diagnostic
</h1>

<div class="max-w-2xl px-8 py-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">

    <div class="mt-2">
        <p class="text-2xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">Patient : {{ $dossierMedicals->patients->name }}</p>
        <p class="mt-2 text-white dark:text-gray-300">Diagnostic :  {{  $dossierMedicals->diagnostique->libelle }}</p>
        <p class="mt-2 text-white dark:text-gray-300">Maladie :{{ $dossierMedicals->maladies->nom }}</p>
    </div>

</div>





<h1 class="text-2xl text-center mb-5 mt-5 font-bold">
    Les hopitaux
</h1>
<div class="grid grid-cols-4 gap-4" >
    @foreach ($hopitaux as$hopital )
    <div  class=" max-w-2xl px-8 py-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">


        <div class="mt-2">
            <a href="#" class="text-2xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">{{ $hopital->nom }}s</a>
            <p class="mt-2 text-gray-600 dark:text-gray-300"> Adresse: {{$hopital->adresse}}</p>
        </div>

        <div class="mt-2">
            <a class="text-gray-600 dark:text-gray-300" href="/hopital/{{ $hopital->id }} ">
               More...
            </a>
        </div>
    </div>
    @endforeach
</div>

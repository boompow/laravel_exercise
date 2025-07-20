<x-layout>
    <h2 class="text-3xl font-bold mb-2">Currently Available Ninjas</h2>
    <ul class="ml-4">
        @foreach ($ninjas as $ninja)
            <li class="m-4">
                <x-card href="/ninjas/{{$ninja['id']}}" :highlight="true">
                    <p class="capitalize text-lg font-bold">{{$ninja["name"]}}</p>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
<x-layout>
    <h2 class="text-3xl font-bold mb-2">Currently Available Ninjas</h2>
    <ul class="ml-4">
        @foreach ($ninjas as $ninja)
            <li class="m-4">
                <x-card href="{{route('ninjas.show', $ninja->id)}}" :highlight="$ninja->skill > 70">
                    <div>
                        <p>{{$ninja->id}}</p>
                        <p class="capitalize text-lg font-bold">{{$ninja->name}}</p>
                        <p>{{$ninja->dojo->name}}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>
    {{$ninjas -> links()}}
</x-layout>
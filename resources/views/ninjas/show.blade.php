<x-layout>
    <h2>{{$userId->id}} - {{$userId->name}}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level: </strong>{{$userId->skill}}</p>
        <p><strong>About me: </strong>{{$userId->bio}}</p>
        <p class="text-[12px] italic text-end">{{$userId->created_at}}</p>
    </div>

    {{-- dojo info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded-[1rem]">
        <h3>Dojo Informaition</h3>
        <p><strong>Dojo Name: </strong>{{$userId->dojo->name}}</p>
        <p><strong>Location: </strong>{{$userId->dojo->location}}</p>
        <p><strong>About the Dojo </strong></p>
        <p class="ml-4">{{$userId->dojo->description}}</p>
    </div>

    <form action="{{route('ninjas.destroy', $userId->id)}}" method="POST">
        @csrf

        @method("DELETE")

        <button type="submit" class="btn my-4">Delete Ninja</button>
    </form>
</x-layout>
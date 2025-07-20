<x-layout>
    <form action="{{route('ninjas.store')}}" method="POST">
        @csrf

        <h2>Create a New Ninja</h2>

        {{-- Ninja Name --}}
        <label for="name" class="font-bold mx-2 text-[14px]">Ninja Name</label>
        <input type="text" id="name" name="name" value="{{old('name')}}" required class="outline-none bg-white rounded">

        {{-- Ninja Strength --}}
        <label for="skill" class="font-bold mx-2 text-[14px]">Ninja Skill (0-100)</label>
        <input type="number" id="skill" name="skill" value="{{old('skill')}}" required class="outline-none bg-white rounded">

        {{-- Ninja Bio --}}
        <label for="bio" class="font-bold mx-2 text-[14px]">Ninja Bio</label>
        <textarea id="bio" name="bio" required class="outline-none bg-white rounded max-h-[8rem] h-[100%]">{{old('bio')}}</textarea>

        {{-- select a dojo --}}
        <label for="dojo_id" class="font-bold mx-2 text-[14px]">Dojo:</label>
        <select name="dojo_id" id="dojo_id" required class="outline-none bg-white rounded">
            <option value="" disabled selected >Select a dojo</option>
            @foreach ($dojos as $dojo)
               <option value="{{$dojo->id}}" {{$dojo->id == old('dojo_id') ? 'selected' : ''}}>
                {{$dojo->name}}
            </option> 
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Create Ninja</button>

        {{-- checking for validation error --}}
        @if ($errors->any())
            <div class="px-4 py-2 bg-red-100">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 my-2">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</x-layout>
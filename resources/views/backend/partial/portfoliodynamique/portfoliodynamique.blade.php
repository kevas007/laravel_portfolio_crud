
<div class=" w-3/12 mx-auto flex flex-col align-center justify-center z-10 ">
    <table class="border-separate border border-green-800 mt-8">
        <thead>
            <tr>
                <th>id</th>
                <th>image</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dynamiques as $dynamique )
            <tr class="bg-emerald-200 mb-5 ">
                <td class="border border-green-600 " >{{ $dynamique->id }}</td>
                <td class="border border-green-600 ">{{ $dynamique->image }}</td>
                <td class="flex justify-center  ">
                    <a href="portfolioImageDimayque/{{  $dynamique->id }}/show" class="bg-blue-500 hover:bg-blue-700 mx-4 text-white font-bold py-2 px-4 rounded">SHOW</a>
                    <form action="portfolioImageDimayque/{{ $dynamique->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="w-full flex mx-4 justify-center py-2 px-3 bg-red-600 hover:bg-red-200" value="X">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/portfolioImageDimayque/create"  class="bg-blue-500 hover:bg-blue-700 mx-4 text-white font-bold py-2 px-4 rounded w-max"  >Create user</a>
</div>

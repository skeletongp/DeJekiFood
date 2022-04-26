<section class="mt-8 bg-white" id="menú">
    <div class="mt-4 text-center">
        <h2 class="text-3xl font-bold text-green-600">
            NUESTRO MENÚ</h2>
    </div>
    <div class="container w-full px-5 py-6 mx-auto">
        @foreach ($products as $ind => $type)
            <h1 class="p-4 uppercase font-bold text-xl text-green-600">{{ $type->name }}</h1>
            <hr>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-y-6 my-4" id="{{ 'page' . $ind }}">
                @foreach (paginate(collect($type->products), 4, 'page' . $ind) as $product)
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg ">
                       <div class="h-48 w-full bg-center bg-cover bg-no-repeat" style="background-image: url({{$product->image?:'https://cdn.pixabay.com/photo/2014/11/05/15/57/salmon-518032_960_720.jpg'}})">

                       </div>
                        <div class="px-6 py-4">
                            <div class="flex mb-2">
                                <span
                                    class="px-4 py-0.5 text-sm {{ $type->color }} rounded-full text-red-50">{{ $type->name }}</span>
                            </div>
                            <h4 class=" text-xl font-semibold tracking-tight text-yellow-600 uppercase">
                                {{ $product->name }}</h4>

                        </div>
                        @if ($product->price)
                            <div class="flex items-center justify-between p-4">
                                <button class="px-4 py-2 bg-green-600 text-green-50 rounded-xl font-bold">¡Ordena
                                    Ya!</button>
                                <span class="text-xl text-green-600">{{ $product->price }}</span>
                            </div>
                        @endif
                    </div>
                @endforeach

            </div>
            <div class="p-4 px-8">
                {{ paginate(collect($type->products), 4, 'page' . $ind)->withQueryString()->links('vendor.pagination.tailwind') }}
            </div>
        @endforeach
    </div>
    <script>
        const queryString = window.location.search;;
        location.href = location.href + "#" + queryString.substring(1, 6)
    </script>
</section>

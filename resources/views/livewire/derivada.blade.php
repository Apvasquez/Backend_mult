<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <img src="{{ asset('images/logo.gif') }}" class="absolute h-20 p-1 rounded-full right-1 md:h-28" alt=""
                style="">
            <h1 class="mt-6 mb-4 text-xl text-center text-gray-800 uppercase align-middle md:text-4xl">resolución de
                ecuaciones</h1>
            <br>
            <div class="text-center md:-ml-96">
                <span class="max-w-xl p-3 text-sm font-semibold tracking-normal text-gray-600 uppercase"> Ingrese la
                    ecuación
            </div>
            </span>
            <div class="max-w-xl m-4 mx-auto shadow-md bg-gray-50">
                <div class="py-3 my-2 text-center ">
                    <div class="flex flex-shrink py-2 mx-auto my-auto align-middle border">
                        <div><input class="block w-20 h-8 mx-auto mt-4 ml-2 " wire:model="a" type="number" name="" id=""></div>
                        <img src="{{ asset('images/x2.png') }}" class="h-16 mx-auto md:w-32 md:h-24 md:-mt-5" alt=""
                            style="">
                        <div><input class="block w-20 h-8 mx-auto mt-4 " wire:model="b" type="number" name="" id=""></div>
                        <img src="{{ asset('images/x.png') }}" class="h-8 mx-auto mt-4 md:w-12 md:h-10 md:mt-3" alt=""
                            style="">
                        {{-- <div class="mx-auto mt-4 text-xl font-bold text-center">+/-</div> --}}
                        <div><input class="block w-20 h-8 mx-auto mt-4 " wire:model="c" type="number" name="" id=""></div>
                        <div class="mx-auto mt-4 text-4xl font-bold text-center">=</div>
                        <div class="mx-auto mt-3 text-4xl font-bold text-center">0</div>

                    </div>
                </div>
                <div class="pb-2 mx-auto mb-4 text-center">
                    <h1 class="text-xl font-semibold tracking-wide text-gray-700 uppercase">RESPUESTA/S</h1>
                    {{-- $res = is_array($res) ? $res : array($res); --}}
                    @if(isset($res))
                    @foreach ($res as $r )
                    <div class="text-xl font-bold">
                    <input class="block w-48 h-16 m-2 mx-auto rounded-md" disabled  type="text" name="" id="" value="{{$r['x1']}}">
                    <input class="block w-48 h-16 m-2 mx-auto rounded-md" disabled type="text" name="" id="" value="{{$r['x2']}}">
                    </div>
                    @endforeach
                    @endif
                </div>
                {{-- <h1 class="text-xl">Respuesta</h1>
                {{$a.$b.$c}} --}}









                {{-- <label class="block p-1 m-2 mb-2" for="">
                    <input class="px-4 py-2 text-white bg-purple-600" type="button" value="Enviar">
                </label> --}}
                {{-- <div class="mx-auto my-auto text-center">
                    <h1 class="h-16 text-xl font-semibold tracking-wide text-gray-700 uppercase">Forma de la Ecuación</h1>
                    <img src="{{ asset('images/forma.jpg') }}" class="h-24 mx-auto md:h-32 md:-mt-5" alt=""
                </div> --}}

                {{-- <input wire:model="name" type="" placeholder="Ingrese el nombre " class="w-1/2 rounded form-input"
                    required> --}}
                {{-- {!! Form::label($for, $text, [$options]) !!} --}}
            </div>
        </div>
    </div>
    {{-- <div>
        <p>
            {{ $site }}
            {{ $number }}
        </p>
        <input type="text" wire:model="site">
    </div> --}}
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <table class="w-full overflow-hidden bg-white rounded-lg shadow ">
                <thead class="border-b border-gray-200 bg-gray-50">
                    <tr class="mb-2 tracking-wider text-center uppercase form-head ">
                        <th class="px-4 py-3">OPERACION</th>
                        <th class="px-4 py-3">RESULTADO</th>
                    </tr>
                </thead>
                <tbody class="items-center w-full mx-auto divide-y divide-gray-200">
                    {{-- $i = 0; --}}
                    {{-- @foreach ($res as $re)
                    <tr class="text-sm text-center text-gray-700 ">
                        <td class="px-4 py-1">{{ $re['numero_1']. '*' . $re['numero_2'] }}</td>
                        <td class="px-4 py-1">{{ $re['resultado'] }}</td>

                    </tr>

                    @endforeach --}}
                </tbody>
            </table>

        </div>
    </div>
</div

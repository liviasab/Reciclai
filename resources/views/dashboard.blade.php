<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <table> 
                     @foreach(Auth::user()->empresas as $empresa)
                            <tr>
                                <td>{{$empresa->nome}}</td>
                                <td>{{$empresa->cnpj}}</td>
                                <td>{{$empresa->cep}}</td>
                                <td>{{$empresa->status}}</td>
                                <td><form action="/apagar-empresa/{{$empresa->id}}" method= "post">

                                @csrf
                                @method('DELETE')
                                <button type="submit" name="apagar"> apagar </button>
                                </form>
                                </td>
                                <td>
                                <a href="/editar-empresa/{{$empresa->id}}" method="GET"> editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <form action="/add-empresa" method="POST">
                        @csrf
                        <input type="text" name="nome" placeholder="nome">
                        <input type="text" name="cnpj" placeholder="cnpj">
                        <input type="text" name="cep" placeholder="cep">
                        <input type="text" name="status" placeholder="status">
                        <input type="submit" value="add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

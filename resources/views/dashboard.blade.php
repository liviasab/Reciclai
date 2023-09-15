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

                <form action="/add-empresa" method="POST" id="formulario">
                        @csrf
                        <input type="text" name="nome" placeholder="nome">
                        <input type="text" name="cnpj" placeholder="cnpj">
                        <input type="text" name="cep" placeholder="cep">
                        <input type="text" name="status" placeholder="status">
                        <input type="submit" value="Adicionar" class="btn">
                    </form>
                    <div class="table">
                        <table> 
                             @foreach(Auth::user()->empresas as $empresa)
                                    <tr>
    
                                        <td class="td">{{$empresa->nome}}</td>
                                        <td>{{$empresa->cnpj}}</td>
                                        <td>{{$empresa->cep}}</td>
                                        <td>{{$empresa->status}}</td>
                                        <td><form action="/apagar-empresa/{{$empresa->id}}" method= "post">
        
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="apagar" class="btn-function"> apagar </button>
                                        </form>
                                        </td>
    
                                        <td>
                                            <a href="/editar-empresa/{{$empresa->id}}" method="GET" class="btn-function"> editar</a>
                                        </td>
    
                                    </tr>
                                @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    #formulario{
        display:flex;
        flex-direction: column;
        align-items:center;
    }
    #formulario > input{
        border-radius:25px;
        border:3px solid #00B830;
        width:450px;
        height:60px;
        font-size:15px;
        margin-top:10px;
        box-shadow:0 3px 4px gray;
    }
    #formulario > .btn{
        background-color: #00B830;
        border:3px solid #3BEC69;
        color:white;
        font-weight: bold;
        font-size: 20px;
    }
    .table{
        display:grid;
        margin-top:10px;
        justify-content:center;
    }
    tr{
        display:grid;
        grid-template-columns: auto auto auto auto auto auto;
        border-radius:15px;
        margin:10px;
        column-gap:5px;
        background-color: #00B830;
        padding: 10px;
    }
    td{
        background-color: rgba(255, 255, 255, 0.8);
        border-radius:15px;
        border: 3px solid #3BEC69;
        padding: 20px;
        font-size: 30px;
        text-align: center;
    }
    .btn-function{
        color:#00B830;
        text-shadow: 
               -0.5px -0.5px 0px #000000, 
               -0.5px 0.5px 0px #000000,                    
                0.5px -0.5px 0px #000000,                  
                0.5px 0px 0px #000000;
    }
</style>
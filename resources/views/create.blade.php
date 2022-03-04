<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar pessoa</title>
</head>
<body>
    
    
</body>
</html>

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
                <form action="{{ route('registrar_pessoa') }}" method="POST">
                <div class="form-group">
                        @csrf
                        <label for="">ID</label><br />
                        <input type="number" name="id_user"><br />
                    </div>
                    <div class="form-group">    
                        <label for="">Nome</label><br />
                        <input type="text" name="Name"><br />
                    </div>
                    <div class="form-group">
                        <label for="Age">Idade</label><br />
                        <input type="number" name="Age" id="Age"><br />
                    </div>
                    <button class="btn btn-primary">Salvar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

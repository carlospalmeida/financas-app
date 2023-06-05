@extends('app')

@section('conteudo')
<h1 class="text-center text-3xl mb-5">
    EXTRATO - SALDO R$ 9.999,00
</h1>

<div class="md:columns-2 divide-x divide-solid divide-green-900">
    <!-- Receitas -->
    <div class="p-3">
        <h2 class="text-2xl">Receitas</h2>

        <div class="p-3 rounded-md bg-neutral-50 shadow-md">
            <p>05/06/2023</p>
            <p>
                Descrição Movimento <br>
                <strong>R$ 999,97</strong>
            </p>
            <p>

            </p>
        </div>
    </div>

    <!-- Despesas -->
    <div class="p-3">
        <h2 class="text-2xl">Despesas</h2>
    </div>
</div>
@endsection
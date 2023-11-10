@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    <h4 style="color: #7BBB11">Descartes</h4>
    <hr style="border: 2px solid #7BBB11">
    <div style="display: flex; justify-content: center;">
        <table class="table" style="width: 50%">
            <thead class="text-center">
              <tr>
                <th scope="col">Tipo</th>
                <th scope="col">Quantidade</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <td>Papel</td>
                <td>0,5 Kg</td>
              </tr>
              <tr>
                <td>Vidro</td>
                <td>2 KG</td>
              </tr>
              <tr>
                <td>Óleo</td>
                <td>3 L</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection
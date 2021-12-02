@extends('layouts.app')

@section('content')
<div class="container-fluid my-2">
  <div class="row m-2">
    <div class="col">
      <h3 class="font-weight-bold">ダッシュボード</h3>
    </div>
    <div class="col text-right">
      <a type="button" href="{{ url('/product/create/') }}" class="btn btn-primary text-right" role="button"><i class="fas fa-plus"></i> 新規追加</a>
    </div>
  </div>

  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th scope="col">
          id
        </th>
        <th scope="col">
          画像
        </th>
        <th scope="col">
          商品名
        </th>
        <th scope="col">
          詳細
        </th>
        <th scope="col">
          値段
        </th>
        <th scope="col">
          カテゴリー
        </th>
        <th scope="col">
          編集
        </th>
        <th scope="col">
          削除
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">
          1
        </th>
        <td style="max-width: 200px;">
          <img src="#" class="img-fluid" />
        </td>
        <td>
          デミグラスハンバーグ
        </td>
        <td style="max-width: 300px;">
          お肉の旨味をギュッと閉じ込めたジューシーなハンバーグに、濃厚なデミグラスソースをたっぷりとかけてお楽しみください。
        </td>
        <td>
          880
        </td>
        <td>
          グランドメニュー
        </td>
        <td>
          <button type="button" class="btn btn-outline-danger"><i class="far fa-edit"></i> 編集</button>
        </td>
        <td>
          <button type="button" class="btn btn-outline-primary"><i class="far fa-trash-alt"></i> 削除</button>
        </td>
      </tr>
    </tbody>
  </table>

</div>
@endsection

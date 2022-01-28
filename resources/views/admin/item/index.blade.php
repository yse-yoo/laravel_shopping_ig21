<h2>商品一覧</h2>
<a href="{{ route('admin.item.create') }}">商品追加</a>

<table>
  <tr>
    <th></th>
    <th>{{__('Item Name')}}</th>
    <th>{{__('Item Code')}}</th>
    <th>{{__('Price')}}</th>
  </tr>

  @if($items)
  @foreach($items as $item)
  <tr>
    <td></td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->code }}</td>
    <td>{{ $item->price }}</td>
  </tr>
  @endforeach
  @endif
</table>
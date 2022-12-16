@extends('layouts.app')

@section('content')
<h2 class="h2">{{ __('Item List') }}</h2>

<table class="table">
  <tr>
    <th></th>
    <th>{{__('label.item_name')}}</th>
    <th>{{__('label.price')}}</th>
  </tr>

  @if($items)
  @foreach($items as $item)
  <tr>
    <td><a class="btn btn-outline-primary" href="#" onclick="addFavoriteItem(this)" data-item-id >{{__('Favorite')}}</a></td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->price }}</td>
  </tr>
  @endforeach
  @endif
</table>
@endsection
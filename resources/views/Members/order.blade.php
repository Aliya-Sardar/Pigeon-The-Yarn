@extends('Template.dashboard')

@section('dashboard_Content')
    <!-- Orders data of user -->
    <div class="container">
        <h2>Orders</h2>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->Product }}</td>  
                        <td>{{ $order->Quantity }}</td>
                        <td>{{ $order->Price }}</td>  
                    </tr>      
                @empty
                    <tr>
                        <th scope="row">1</th>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                @endforelse ($orders as $order)
            </tbody>
        </table>
    </div>
@endsection
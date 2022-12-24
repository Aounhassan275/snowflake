@extends('admin.layout.index')

@section('title')
    All Bookings
@endsection

@section('content')
<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Booking::all() as $booking)
            <tr>
                <td>{{$booking->name}} @if(!$booking->status) <span class="badge badge-danger">New</span> @endif </td>
                <td>{{$booking->email}}</td>
                <td>{{@$booking->date->format('d M,Y')}}</td>
                <td>{{$booking->phone}}</td>
                <td>{{$booking->message}}</td>
                <td>
                    <div class="btn-group">
                        <form action="{{route('admin.booking.destroy',$booking->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-dark btn-sm">Delete</button>
                        </form>
                      
                      </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

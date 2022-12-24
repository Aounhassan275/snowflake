@extends('admin.layout.index')

@section('title')
    New Bookings
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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Booking::where('status',0)->get() as $booking)
            <tr>
                <td>{{$booking->name}} @if(!$booking->status) <span class="badge badge-danger">New</span> @endif </td>
                <td>{{$booking->email}}</td>
                <td>{{@$booking->date->format('d M,Y')}}</td>
                <td>{{$booking->phone}}</td>
                <td>{{$booking->message}}</td>
                <td>
                    <a href="{{route('admin.booking.mark_as_old',$booking->id)}}" class="btn btn-primary">Mark as Old</a>
                </td>
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

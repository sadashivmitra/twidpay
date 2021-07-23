@extends('layouts.app');
@section('title','All India Pincodes');

@section('content')
    <!-- <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Office Name</th>
                <th>Pincode</th>
                <th>Office Type</th>
                <th>Delivery Status</th>
                <th>Division Name</th>
                <th>Region Name</th>
                <th>Circle Name</th>
                <th>Taluk</th>
                <th>District Name</th>
                <th>State Name</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($pincodes as $pincode)
            <tr>
                <td>{{$pincode->id}}</td>
                <td>{{$pincode->officename}}</td>
                <td>{{$pincode->pincode}}</td>
                <td>{{$pincode->officeType}}</td>
                <td>{{$pincode->Deliverystatus}}</td>
                <td>{{$pincode->divisionname}}</td>
                <td>{{$pincode->regionname}}</td>
                <td>{{$pincode->circlename}}</td>
                <td>{{$pincode->Taluk}}</td>
                <td>{{$pincode->Districtname}}</td>
                <td>{{$pincode->statename}}</td>
            
            </tr>
            @endforeach
        </tbody>
    </table> -->
   
@endsection
   
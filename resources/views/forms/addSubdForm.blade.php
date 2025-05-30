@extends('layouts.addressLayout')
@section('title', 'Add | Subdivision')
@section('add-content')
    
    <h1>Add Subdivision</h1>

    <form action="{{route('subdivision.store')}}" method="post">
        @csrf
        <div class="row justify-content-center mt-5">
            <div class="col col-6">
                <label for="s_brgy">Barangay</label> <br>
                <input type="text" name="s_brgyName" readonly value="{{$brgyData->brgy_name}}" class="form-control">
                <input type="text" name="s_brgy" hidden value="{{$brgyData->id}}">
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col col-6">
                <label for="subdName">Subdivision</label> <br>
                <input type="text" name="subdName" class="form-control" value="{{old('subdName')}}">
                @error('subdName')
                    <h5 style="color: red;">{{$message}}</h5>
                @enderror
            </div>
        </div>

        <div class="row mt-5">
            <div class="col col-6">
                <button type="submit" class="btn btn-success w-100">Add</button>
            </div>

            <div class="col col-6">
                <a href="{{route('municipality.show', $brgyData->municipality_id)}}" class="btn btn-dark w-100">Cancel</a>
            </div>
        </div>
    </form>

                    

@endsection
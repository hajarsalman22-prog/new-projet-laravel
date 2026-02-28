@extends('layouts'.'layout')
@section('title','films')
    @section('content')
        <table>
            <thead>
                <th>title></th>
                <th>genre</th>
                <th>annee</th>
            </thead>
            <tbody>
                @foreach ($films as $film)
                    <tr>
                        <td>nom</td>
                        <td>prenom</td>


                        
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
@endsection
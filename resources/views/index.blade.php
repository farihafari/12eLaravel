@include('header')
<h1>index page</h1>
<h2>user Detail</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">phone</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $values )
        <tr>
            <th scope="row">{{$values['name']}}</th>
            <td>{{$values['email']}}</td>
            <td>{{$values['phone']}}</td>
            
        </tr>
       @endforeach
    </tbody>
</table>

@include('header')

            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded  mx-0">
                    <div class="col-md-11 text-center">
                        <h3>view category</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col"> Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($viewCat as $key => $values)
                                <tr>
                                    <th scope="row">{{$values['catId']}}</th>
                                    <td>{{$values['catName']}}</td>
                                    <td><img src="../assets/category/{{$values['catImage']}}" width="80" alt=""></td>
                                    <td><a href="edit/{{$values['catId']}}" class="btn btn-info">edit</a></td>
                                    <td><a href="delete/{{$values['catId']}}" class="btn btn-danger">delete</a></td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if(session('UpdateCat'))
            <script>
                alert("category update successfully");
            </script>
            @elseif(session('deleteCat'))
            <script>
                      alert("category delete successfully");
            </script>
            @endif
            <!-- Blank End -->
@include('footer')
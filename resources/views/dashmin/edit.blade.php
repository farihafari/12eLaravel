@include('header');
 <!-- Blank Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded justify-content-center mx-0">
        <div class="col-md-12 mt-3">
            <h3>Update Category</h3>
            <form method="post" action="{{url('updated')}}" enctype="multipart/form-data">
@csrf
<input type="hidden" name="cId" value="{{$object['catId']}}">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">category Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" name="cName" value="{{$object['catName']}}">
                    <div id="emailHelp" class="form-text">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">IMage</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="cImage">
                    <img src="../assets/category/{{$object['catImage']}}" width="80" alt="">
                </div>
               
                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>
        </div>
    </div>
</div>

<!-- Blank End -->
@include('footer')
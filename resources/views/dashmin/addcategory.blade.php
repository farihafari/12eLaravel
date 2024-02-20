@include('header');
 <!-- Blank Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded justify-content-center mx-0">
        <div class="col-md-12 mt-3">
            <h3>Add Category</h3>
            <form method="post" enctype="multipart/form-data">
@csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">category Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" name="cName">
                    <div id="emailHelp" class="form-text">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">IMage</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="cImage">
                </div>
               
                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
        </div>
    </div>
</div>
@if(session('addCat'))
<script>
    alert('add category succeessfully');
</script>
@endif
<!-- Blank End -->
@include('footer')
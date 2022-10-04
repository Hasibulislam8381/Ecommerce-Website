<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        #text_color{
            color: black;
            padding-bottom: 20px;
        }
        label{
            display: inline-block;
            width: 200px;
        }
        .div_design{
            padding-bottom: 15px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

              @if(session()->has('message'))
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                 {{session()->get('message')}}
              </div>
             @endif
                <div class="div_center">
               <h1 class="font_size">Add Product</h1>
            </div>
                <form action="{{url('/insert_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" id="text_color">
                      <label>Product title</label>
                      <input type="text" class="form-control" name="title" id="text_color" placeholder="Enter Product title" required="">
                    </div>

                    <div class="form-group">
                        <label>Product Description</label>
                        <input type="text" class="form-control" name="description" id="text_color" placeholder="Enter Product Description" required="">
                      </div>

                      <div class="form-group">
                        <label>Product price</label>
                        <input type="number" class="form-control" name="price" id="text_color" placeholder="Enter Product price" required="">
                      </div>

                      <div class="form-group">
                        <label>Discount Price</label>
                        <input type="number" class="form-control" name="discount_price" id="text_color" placeholder="Enter discount price">
                      </div>

                      <div class="form-group">
                        <label>Product quantity</label>
                        <input type="number" class="form-control" name="quantity" min="0" id="text_color" placeholder="Enter Product quantity" required="">
                      </div>

                      <div class="form-group">
                        
                        <select name="category" id="text_color" class="" required="">
                            <option value="" selected="">Add category here</option>
                            @foreach($category as $cat)
                            <option value="{{$cat->category_name}}">{{$cat->category_name}}</option>
                            @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlFile1">Product Image</label>
                        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1"
                        required="">
                      </div>
                    
                    <input type="submit" value="Add product" class="btn btn-primary">
                  </form>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>
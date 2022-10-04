<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style>
        .center{
         margin: auto;
          width: 80%;
          text-align: center;
          margin-top:50px;
          border: 3px solid white;
        }
        .h1_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .img_size{
            height: 50px;
            width: 50px;
        }
        .th_color{
            background: skyblue;
            color: black;
        }
        .th_deg{
            padding: 10px;
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
        <table class="center">
            <tr class="th_color">
              <th class="th_deg">Id</th>
              <th class="th_deg">Title</th>
              <th class="th_deg">Description</th>
              <th class="th_deg">Image</th>
              <th class="th_deg">Category</th>
              <th class="th_deg">Quantity</th>
              <th class="th_deg">Price</th>
              <th class="th_deg">Discount Price</th>
              <th class="th_deg">Edit</th>   
              <th class="th_deg">Delete</th>   
            </tr>
            @foreach($data as $data)
            <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->description}}</td>
            <td>
                <img class="img_size" src="/product/{{$data->image}}" alt="">
            </td>
            <td>{{$data->category}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->discount_price}}</td>
            <td>
                <a href="{{url('update_product',$data->id)}}" class="btn btn-info">Edit</a>
            </td>
            <td>
                <a href="{{url('delete_product',$data->id)}}" onclick="return confirm('Data will be parmanently deleted!')" class="btn btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>
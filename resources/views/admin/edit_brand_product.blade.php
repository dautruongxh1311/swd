@extends('adminLayout')
@section('admin_content')

 <div class="col-lg-12">
     <section class="panel">
          <header class="panel-heading">
                            Cập Nhật Thương Hiệu Sản Phẩm
                        </header>
                        <?php
                            $message = Session::get('message');
                                if($message)
                                {
                                    echo '<span class="text-alert">',$message.'</span>';
                                    Session::put('message',null);
                                }
                        ?>
                        <div class="panel-body">
                                @foreach($edit_brand_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form"action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post">
                                    {{csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text"value="{{$edit_value->brand_name}}" name="brand_product_name" class="form-control"
                                    id="exampleInputEmail"placeholder="Tên Danh Mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize:none" rows="8"class="form-control" 
                                    name="brand_product_desc" id="exampleInputPassword1">{{$edit_value->brand_desc}}</textarea>
                                </div>
                               
                                <button type="submit"name="update_brand_product"     
                                class="btn btn-info">Cập Nhật Danh Mục</button>
                            </form>
                            </div>  
                            @endforeach

                        </div>
                    </section>
                   
 </div>

       
@endsection
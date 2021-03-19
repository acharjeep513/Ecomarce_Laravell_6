 @extends('include.footer2')

                  
@extends('layouts.app')
                 
                 @section('content')
      <div class="container-fluid">

    <div class="row">
        <div id="related-product" class="col-md-3">
            <div class="card">
                <div class="card-header" align="center">
                    <h4 class="text-danger">Related Product</h4>
                </div>
                <div class="card-body">
                    <form method="post">
                    <div class="card">
                        <img class="card-img-top" src="Image/4.jpg" width="350" height="220" alt="Card image">
                        <div class="card-body" align="center">
                            <strong class="card-title">Ladies Fashion</strong><br>
                            <del>Before Discount : $6846</del><br>
                            <span>After Discount : $5641</span>
                            <button href="#" class=" btn btn-danger" name="total6"><i class="fas fa-cart-plus"></i> add To Cart</button>
                        </div>
                    </form>
                    </div>
                    <div class="card">
                        <form method="post">
                        <img class="card-img-top" src="Image/5.jpg" width="350" height="220" alt="Card image">
                        <div class="card-body" align="center">
                            <strong class="card-title">Man Fashion</strong><br>
                            <del>Before Discount : $6846</del><br>
                            <span>After Discount : $5641</span>
                            <button href="#" class=" btn btn-danger" name="total7"><i class="fas fa-cart-plus"></i> add To Cart</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="product-detail" class="col-md-6">
            <form method="post">
            <div class="card">
                <div class="card">

                    <div class="card-header">
                        <h3 class="text-danger"></h3><br>
                        <strong class="">**********</strong><br/>
                        <strong class="text-black">Total Orders : 643135 </strong>
                    </div>
                    <div class="card-body">
                        
                    </div>
                    <div class="card-footer">
                        <h5 class="text-black">Customer Feedback</h5>
                       <p><del>Before discount <del>

                               <input type="hidden" name="name" value="">
                        </p>
                        <p> After Discount 
                            <input type="hidden" name="price" value="
                        <h5 class="text-black">Order Feedback</h5>
                        <p> After Discount 
                        </p>



                    </form>
                </div>








                </div>
            </div>
        </div>
        <div id="different-product" class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-danger">Choose Different</h4>
                    <strong class="">Item Code : #361616313</strong><br><br>
                    <strong class=""><i class="fas fa-coffee"></i> Availability : In Stock </strong>
                </div>
                <div class="card-body" align="center">

                    <h5 class="text-black"><i class="fas fa-search-dollar"></i>  Price : $64651 </h5>
                    <del><i class="fas fa-search-dollar"></i>  Before Discount : $64651</del><br><hr>

                        <input type="hidden" name="name" value=""><del>





                </div>
                <div class="card-footer">
                    <h5>Product Description</h5>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget.
                        Sed quia conseq magni dolores. Id eges tas massa sem et elitdfg dfvg ervg. dwcfvwe ecv weec wevc ewvc </p>
                    <h5>Category Description</h5>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget.
                        Sed quia consequuntur magni dolores. Id eges tas massa sem et elitdfg dfvg ervg.</p>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="card">
        <div class="row">

            
            <form method="get">
                <div class="col-md-3">
                    <div class="card-deck">
                        <form method="post" action="detail-product.php">
                            <div class="card-body">
                                <h5>
                                    
                                    <p>
                                       </br>
                                        <input type="hidden" name="id" value="">
                                        <input type="hidden" name="nam" value="">
                                    </p>
                                    <button href="#" class=" btn btn-success" name="add" style="width: 250px"><i class="fas fa-cart-plus"></i> Read more</button>
                                </h5>
                            </div>
                        </form>
                    </div>
                </div>
          
               </form>
        </div>
    </form>
</div>


            @endsection

        
            

















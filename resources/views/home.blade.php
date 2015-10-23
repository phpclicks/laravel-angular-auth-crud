@extends('mytemplate')

@section('content')
<div class="container">
	<div class="row">
     
		<div class="col-md-10 col-md-offset-1">
        
			<div class="panel panel-default">
           
				<div class="panel-heading">Product Listing <a id="fancybox-pop" class="fancybox pull-right" title="Add Product"  href="#example-popup">Add Product</a></div>
                
				<div class="panel-body">
					

    <table class="table">

        <thead>

            <tr>

                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>

            </tr>

        </thead>
        
        
     <tbody ng-init="GetProducts()">
     <tr ng-repeat="product in products">
     <td><% product.name %></td>
     <td><% product.price %></td>
     <td><% product.quantity %></td>
     <td><a class="btn" href="javascript:void(0)" ng-click="editProduct(product.id)"><i class="icon-pencil"></i> Edit</a> | <a class="btn" ng-click="deleteProduct(product.id)" href="javascript:void(0)">Delete</a></td>
</tr>

</tbody>



       <!-- <tbody>

            <tr>

                <td>iPhone6</td>

                <td>60000</td>

                <td>1</td>

                <td>       <a href="">Edit</a> | <a href="">Delete</a> </td>

            </tr>

          

        </tbody>-->

    </table>


				</div>
			</div>
		</div>
	</div>
</div>

<div id="example-popup" style="display: none;">
		   <div class="popup-content">
           <h2 class="popup-title">Add Product</h2>
           <div id="messages" class="has-error alert alert-danger" ng-show="message"><% message %></div>
            <div id="messages" class="has-error alert alert-success" ng-show="successmessage"><% successmessage %></div>
  <form  name="productForm" novalidate>
  <input type="hidden" value="{{ csrf_token() }}" name="_token">

  <div class="form-group">
    <input type="text" name="name" ng-model="name"  class="form-control"  placeholder="Name" required>
     <span class="help-block" ng-show="error_name"><% error_name %></span> 
  </div>
 

  <div class="form-group">
     <input type="text"  name="price" ng-model="price"  class="form-control"  placeholder="Price">
     <span class="help-block" ng-show="error_name"><% error_price %></span> 
  </div>
    <div class="form-group">
     <input type="text" name="quantity" ng-model="quantity"   class="form-control"  placeholder="Quantity">
     <span class="help-block" ng-show="error_name"><% error_quantity %></span> 
  </div>


   <div class="form-group">
  <textarea class="form-control" ng-model="description" name="description"  placeholder="Description" rows="3"></textarea>
  </div>
  
    
  <div class="checkbox">
    <label>
      <input type="checkbox" name="status" ng-model="status" ng-true-value="1" ng-false-value="0"> Active
    </label>
  </div>
  
  <button type="button" ng-click="addProduct(productForm.$valid)" class="btn btn-default">Submit</button>
</form>
        </div>

	</div>
    
    
    <a id="fancybox-pop2" class="fancybox2 pull-right" style="display:none" title="Edit Product"  href="#example-popup2">Add Product</a>
    <div id="example-popup2" style="display: none;">
		   <div class="popup-content">
           <h2 class="popup-title">Edit Product</h2>
                      <div id="messages" class="has-error alert alert-danger" ng-show="message"><% message %></div>
            <div id="messages" class="has-error alert alert-success" ng-show="successmessage"><% successmessage %></div>
  <form  method="post">
  <input type="hidden" value="{{ csrf_token() }}" name="_token">
  <input type="hidden" name="id" ng-model="id">
  <div class="form-group">
   <span class="help-block" ng-show="errorName"></span> 
    <input type="text" name="name" ng-model="name"  class="form-control" id="exampleInputEmail1" placeholder="Name">
  </div>
  <div class="form-group">
     <input type="text"  name="price" ng-model="price"  class="form-control" id="exampleInputEmail1" placeholder="Price">
  </div>
    <div class="form-group">
     <input type="text" name="quantity" ng-model="quantity"   class="form-control" id="exampleInputEmail1" placeholder="Quantity">
  </div>


   <div class="form-group">
  <textarea class="form-control" ng-model="description" name="description"  placeholder="Description" rows="3"></textarea>
  </div>
  
    
  <div class="checkbox">
    <label>
      <input type="checkbox" name="status" ng-model="status" ng-true-value="1" ng-false-value="0"> Active
    </label>
  </div>
  
  <button type="button" ng-click="processEditform()" class="btn btn-default">Submit</button>
</form>
        </div>

	</div>
@endsection

		
		 productApp.controller('mainController', function ($scope, $http, CSRF_TOKEN ,$timeout) { 
		 
		 //// Add product
		   $scope.addProduct   = function(isValid){
		   $scope.message      = false;
		   $scope.successmessage = false;
			var data = {'name':$scope.name,'price':$scope.price,'quantity':$scope.quantity,'description':$scope.description,'status':$scope.status};
			$http({
            method: 'POST',
            url: 'addProduct',
            headers: { '_token': $('meta[name="csrf-token"]').attr('content'),'Content-Type' : 'application/x-www-form-urlencoded'},
            data: $.param(data)
            }).success(function(data, status, headers, config) {
				
			  $scope.successmessage      = "Product added successfully";
			  $scope.GetProducts();
			  $timeout(function() {
              angular.element('.fancybox-close').trigger('click');
               }, 3000);
  
            }).error(function (data,status) {
				var msg = "";
				   angular.forEach(data, function(items,key){
					   msg += items[0];
               })

				$scope.message      = msg;
      });
		}
			  
			 //// List product  
		   $scope.GetProducts = function(){
		       $http.get('getStudentList').success(function(data) {
               $scope.products = data;
         });	 
		}
		///// Edit Product
		
		$scope.editProduct = function(index){
			// $scope.formData = {};
		angular.element('#fancybox-pop2').trigger('click');	
		$http.get('getSingleStudent/'+index).success(function(data) {
				$scope.name           = data['name'];
				$scope.price          = data['price'];
				$scope.quantity       = data['quantity'];
				$scope.description    = data['description'];
				$scope.id             = data['id'];
				$scope.status         = data['status'];
         });
			
		}
		
		//// process edit form
		$scope.processEditform = function(){
		   $scope.message      = false;
		   $scope.successmessage = false;
			var data = {'name':$scope.name,'price':$scope.price,'quantity':$scope.quantity,'description':$scope.description,'status':$scope.status,'id':$scope.id};
			$http({
            method: 'POST',
            url: 'editProduct',
            headers: { '_token': $('meta[name="csrf-token"]').attr('content'),'Content-Type' : 'application/x-www-form-urlencoded'},
            data: $.param(data)
            }).success(function(data, status, headers, config) {
				
			  $scope.successmessage      = "Product updated successfully";
			  $scope.GetProducts();
			  $timeout(function() {
              angular.element('.fancybox-close').trigger('click');
               }, 3000);
  
            }).error(function (data,status) {
				var msg = "";
				   angular.forEach(data, function(items,key){
					   msg += items[0];
               })

				$scope.message      = msg;
      });
			
			
			}
			
		//// delete product
		$scope.deleteProduct = function(index){
			$http.delete('deleteProduct/'+index)
			.success(function() {
					$scope.GetProducts();
			});
			
			}
			
			  
			  });
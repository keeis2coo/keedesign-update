var portControllers = angular.module("portControllers", []);

portControllers.controller('portCtrl', ['$scope' , '$http',
    function($scope, $http){
      $http.get('json/portfolio.json').success(function(data){
        $scope.port = data;
      });
    }]);

    portControllers.controller('imgCtrl', ['$scope' , '$http',
        function($scope, $http){
          $http.get('../json/portfolio.json').success(function(data){
            $scope.port = data;
          });
        }]);

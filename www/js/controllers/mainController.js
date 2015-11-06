app.controller('mainController',['$scope','$http', function ($scope, $http) {
        $scope.state = "Nothing";
      var getComps = function(){
        return $http.get('js/json/results.json')
          .then(function(response){
            return response.data;
          });
      };

  var onCompsComplete = function(data){
    $scope.groups = data;
  };




   $scope.toggleGroup = function(group) {
   if ($scope.isGroupShown(group)) {
   $scope.shownGroup = null;
   } else {
   $scope.shownGroup = group;
   }
   };
   $scope.isGroupShown = function(group) {
   return $scope.shownGroup === group;
   };

  getComps().then(onCompsComplete);
}]);

var app = angular.module("aktuelles", ["firebase", "ngSanitize"]);


app.filter('reverse', function(){

  return function(date) {
    var amerDate = new Date(date);
    return amerDate.getDate() + '/' + (amerDate.getMonth() + 1)  + '/' + amerDate.getFullYear()
  }
});

app.controller('aktuellesController', ['$scope', '$sce', '$timeout', '$firebaseArray',  function($scope, $sce, $timeout, $firebaseArray){

    $scope.$sce = $sce;

    //CONECT TO DATABASE AND SAVE IT ON $SCOPT.DATA
    var ref = firebase.database().ref();
    $scope.rawData = $firebaseArray(ref);
    
    
    $scope.rawData.$loaded().then(function(){

        var newArray = $scope.rawData;
        
        newArray.sort(function(a,b){
          // Turn your strings into dates, and then subtract them
          // to get a value that is either negative, positive, or zero.
          return new Date(b.date) - new Date(a.date);
        });  
      
        $scope.data = newArray.reverse();  

        $scope.preload = true;
        
    });


    
 
    $scope.addImage = function() {

        var uploadBtn = document.getElementById('upload-btn');
        var uploadBar = document.getElementById('show-upload');

        uploadBtn.addEventListener('change', function(e){

            // get the file
            var file = e.target.files[0];

            // create a storege refs
            var storageRef = firebase.storage().ref('images/'  + file.name);   
            $scope.image = 'images/' + file.name;
            // upload file
            var task = storageRef.put(file);

            task.on('state_changed', function(snapshot){
              // Observe state change events such as progress, pause, and resume
              // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
              var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
              $scope.uploadImageProgressMsg = 'Image Upload progress: ' + progress + '%';
              //console.log('Image Upload progress: ' + progress + '%')
              $('#uploading-image-gif').show(200);
              $scope.uploadState = true;
            }, function(error) {
              // Handle unsuccessful uploads
            }, function() {
              // Handle successful uploads on complete
              // For instance, get the download URL: https://firebasestorage.googleapis.com/...
              var downloadURL = task.snapshot.downloadURL;
              $('#uploading-image-gif').hide(200);
              $scope.uploadState = false;
              $scope.imageUrl = downloadURL;
             
            });
        });
    }
    $scope.addImage();

    $scope.showMenu = function() {
        $scope.backTrans=true; 
        $scope.addMessage=true;
    }

    $scope.article = {};

    $scope.uploadState = false;
    $scope.addArticle = function() {

        if ($scope.uploadState == false) {
            var date = new Date();
           
             if ($scope.article.date == undefined || $scope.article.date.length == 0) {
                var today = date.getDate() + '/' + (date.getMonth() + 1)  + '/' + date.getFullYear() ;
                
                $scope.article.date = today;
            }

            $scope.article.message = $scope.article.message.replace('%img%', '<img src="'+$scope.imageUrl+'" class="actuelles-image">');
           
            $scope.data.$add($scope.article);
            $scope.backTrans = false;
            $scope.addMessage = false;
            $scope.article = {}; 
        }
    }
  
    $scope.removeArticle = function(item) {
        if (confirm('Are you sure you want to delte this article?')) {
            var index = $scope.data.indexOf(item);
            $scope.data.$remove(item);
        }
    }

    $scope.editArticle = function(item) {
        $scope.backTrans = true;
        $scope.addMessage = true;
        $scope.article = item;
        $scope.thisArticle = item;
        $scope.editing = true;
    }

    $scope.saveEdit = function() {
        $scope.article = $scope.thisArticle;
        $scope.data.$save($scope.article);
        $scope.backTrans = false;
        $scope.addMessage = false;
        $scope.article = {}; 
    }

}]);



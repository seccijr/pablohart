var pablo = angular.module('com.woodride.webapp.pablo', []);

pablo.directive('href', function () {
    return {
        restrict: 'A',
        scope: {
            location: '@href'
        },
        link: function ($scope, elem, attr) {
            angular.element(elem).click(function (event) {
                var target = !_.isUndefined(attr.target) ? attr.target : '_top';

                switch (attr.target) {
                    case '_blank':
                        window.open($scope.location);
                        break;
                    default:
                        window.location = $scope.location;
                        break;
                }

                return true;
            });
        }
    };
});

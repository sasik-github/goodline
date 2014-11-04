$(function() {
    var sortOrder = 1;
    $("#sort").on("click", function(argument) {
        sortOrder *= -1;
        var $newses = $(".newses");
        var $newsesDiv = $newses.children('.news-item');
        console.log($newsesDiv);
        $newsesDiv.sort(function(a, b) {
            var aDate = $(a).children(".date").text();
            var bDate = $(b).children(".date").text();
            console.log(aDate);
            console.log(bDate);
            if (aDate > bDate) {
                return sortOrder;
            }
            if (aDate < bDate) {
                return -sortOrder;
            }

            return 0;
        });
        $newsesDiv.detach().appendTo($newses);
    });



});
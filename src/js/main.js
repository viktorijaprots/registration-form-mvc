// Preventing the loss of entered data when switching to a new page
var url = window.location.href.split("/");
var editFlag = false;
$("input").click(function (obj) {
    editFlag = true;
});
$(".main-button").click(function () {
    editFlag = false;
});
window.onbeforeunload = function () {
    if (url[url.length - 1] != "list" && editFlag) {
        return 'You are leaving the page! Are you sure?';
    }
};
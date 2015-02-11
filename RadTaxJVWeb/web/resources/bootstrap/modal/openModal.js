/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).on("open", ".remodal", function() {
    console.log("open");
});

$(document).on("opened", ".remodal", function() {
    console.log("opened");
});

$(document).on("close", ".remodal", function(e) {
    console.log('close' + (e.reason ? ", reason: " + e.reason : ''));
});

$(document).on("closed", ".remodal", function(e) {
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
});

$(document).on("confirm", ".remodal", function() {
    console.log("confirm");
});

$(document).on("cancel", ".remodal", function() {
    console.log("cancel");
});

//    You can open or close it like this:
//    $(function () {
//        var inst = $.remodal.lookup[$("[data-remodal-id=modal]"").data("remodal")];
//        inst.open();
//        inst.close();
//    });

//  Or init in this way:
var inst = $("[data-remodal-id=modal2]").remodal();
//  inst.open();
"use strict";
var no_con = 10;
var no_head = 4;
var no_foot = 2;
var no_price = 1;
var no_contact = 3;
var Components_list;

$.getJSON('builder/components/components.json', function(data) {
    Components_list = data.components;
    for (var key in data.components) {
        var niceKey = key.toLowerCase().replace(" ", "_");
        $('<li><a href="#" data-menu-item="omg_component_' + niceKey + '">' + key + '</a></li>').appendTo('#Menufilter');
        for (var x = 0; x < data.components[key].length; x++) {
            //build us some iframes!
           var newItem = $('<div class="omg_item omg_component_' + niceKey + ' " data-url="' + data.components[key][x].url + '" data-componentname="' + data.components[key][x].name +
                '"><span>' + data.components[key][x].name + '</span><img src="' + data.components[key][x].thumbnail + '"><div class="g-w icon ion-locked"></div></div>');
            newItem.appendTo('#componentdrawer');
        }
    }
    $(".g-w").removeClass('hidden');
    $( ".omg_component_contents" ).each(function( index ) {
        if( no_con > 0 ){
            $(this).addClass('w');
            no_con--;
            $(this).find('.g-w').addClass('hidden')        
        }
    });
    $( ".omg_component_header" ).each(function( index ) {
        if( no_head > 0 ){
            $(this).addClass('w');
            no_head--;
            $(this).find('.g-w').addClass('hidden')        
        }
    });
    $( ".omg_component_pricetable" ).each(function( index ) {
        if( no_price > 0 ){
            $(this).addClass('w');
            no_price--;
            $(this).find('.g-w').addClass('hidden')        
        }
    });
    $( ".omg_component_contact" ).each(function( index ) {
        if( no_contact > 0 ){
            $(this).addClass('w');
            no_contact--;
            $(this).find('.g-w').addClass('hidden')        
        }
    });
    $( ".omg_component_footer" ).each(function( index ) {
        if( no_foot > 0 ){
            $(this).addClass('w');
            no_foot--;
            $(this).find('.g-w').addClass('hidden')        
        }
    });

}).error(function() {
    console.error('Please double check the formatting of your JSON file.')
    console.log('error JSON formatting invalid');
});

var editor = ace.edit("editor");
    editor.setTheme("ace/theme/chrome");
    editor.getSession().setMode("ace/mode/html");
    editor.setOptions({
      fontSize: "16pt"
    });
    
var filename;
$(document).on("click", ".omg_item", function(e) {
    
         $("#loadarea").text("");

                filename = $(this).attr('data-url');
            $("#loadarea").load( $(this).attr('data-url') , function(){
                editor.getSession().setValue( $('#loadarea').text() ); 
             });
            $(".omg_item").removeClass("select");
            $(this).addClass("select");
   
    

});

var current_filter, mouseinSubmenu;
$(document).on("click", "#Menufilter li a", function(e) {
    e.preventDefault();
    current_filter = $(this).attr("data-menu-item");
    $("#componentdrawer").scrollTop(0);
    $("#componentdrawer .omg_item").addClass("hidden");
    $("#componentdrawer ." + current_filter).removeClass("hidden");
    $("#Menufilter li").removeClass("active");
    $(this).addClass("active");
    if (current_filter == "all") {
        $("#componentdrawer .omg_item").removeClass("hidden");
        $("#filtername").text("filters");
    } else {
        $("#filtername").text($(this).text());
    }
});
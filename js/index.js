$(window).ready(function(){
    $("select#selectState").change(function(){
        var selectedState = $("#selectState option:selected").val();
        $.ajax({
            type: "POST",
            url: "process-state.php",
            data: { state : selectedState } 
        }).done(function(data){
            $("#selectCity").html(data);
        });
    });
});
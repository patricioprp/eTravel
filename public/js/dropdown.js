
    $("#province").change(function(event){
      $.get("/locations/"+event.target.value+"",function(response, province){
        $("#location").empty();
        for(i=0;i<response.length;i++){
        $("#location").append("<option value='"+response[i].id+"'> "+response[i].name+"</option>");
        }
      });
      });

      
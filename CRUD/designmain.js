loadData();

let btnAction = "Insert";

$("#addNew").click(function(){
    
    $("#studentModal").modal("show");

})


$("#studentForm").submit(function(event) {

    event.preventDefault();
    //


    //gets the form data
    let form_data = new FormData($("#studentForm")[0]);

    
    // adds the action to the form value

    if(btnAction == "Insert"){

        form_data.append("action","registerStudent");

    }else{
        form_data.append("action","updateStudent");

    }

    //methods
    //dataType
    //url
    //api dataType ka uu qaabilaayo waa JSON
    $.ajax({

        method : "POST",
        dataType :  "JSON",
        url : "API.php",
        data : form_data,
        processData : false,
        contentType: false,
        success : function(data){

            let status = data.status;
            let response = data.data;

            $("#studentForm")[0].reset();

            alert(response);
            btnAction = "Insert";

            $("#studentModal").modal("hide");
            loadData();
        },
        error : function(data){
            console.log(data);

        }

    })

})

function loadData(){
    $("#sudentTable tbody").html("");
    let sendingData = {
        "action" : "readAll"
    }
    $.ajax({
        method: "POST",
        dataType: "JSON",
        url: "api.php",
        data: sendingData,
        success : function(data){
            let status = data.status;
            let response = data.data;

            let html ='';
            let tr ='';

            if(status){
                response.forEach( item =>{
                    tr += "<tr>";

                    for(let i in item){

                        tr+= `<td>${item[i]}</td>`;
                    }

                    tr += `<td> <a class="btn btn-info update_info" update_id=${item['id']}><i class="fa fa-edit"></i></a>
                     &nbsp;&nbsp; <a class="btn btn-danger delete_info" delete_id${item['id']}><i class="fa fa-trash"><i> </a></td>`;
                    tr += "</tr>";
               })
               $("#studentTable tbody").append(tr);

            }

        },
        error: function(data){

        }
    })
}
function fetchInfo(id){
    let sendingData = {
        "action" : "readStudentInfo",
        "id" : id
    }
    $.ajax({
        method: "POST",
        dataType: "JSON",
        url: "api.php",
        data: sendingData,
        success : function(data){
            let status = data.status;
            let response = data.data;

            let html ='';
            let tr ='';

            if(status){ 
//.val waxa loo isticmala in lagu so bandhigo datada table ka  
                $("#id").val(response[0].id);
                $("#name").val(response[0].name);
                $("#class").val(response[0].class);
            
                $("#studentModal").modal("show");
                btnAction = "Update";
            }

        },
        error: function(data){

        }
    })
}



$("#studentTable").click("click", "a.update_id", function(){
    let id = $(this).attr("update_id");
    fetchInfo(id);


})
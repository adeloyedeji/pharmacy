// This functions gets the sub categories for a selected category



function fetch_select()

{

    var category = document.getElementById("category").value;





    $.ajax({
        type: 'get',
        url: '/cms/sub_categories/' + category,
        success: function (response) {
            var subcategory = document.getElementById("subcategory");
            subcategory.options.length = 0;
            document.getElementById("subcategory").disabled = false;
            for (data in response){
                subcategory.options.add(new Option(response[data].name, response[data].id));
            }
        },
        error: function(error) {
            console.log(error);
        }
    });
}




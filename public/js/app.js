$(document).ready(function() {

    function save(){

        var formData = {
            'pname'             : $('input[name=pname]').val(),
            'stock'             : $('input[name=stock]').val(),
            'price'             : $('input[name=price]').val()
        };

        // process the form
        $.ajax({
            type        : 'POST',
            url         : '/products',
            data        : formData,
            dataType    : 'json',
            encode          : true
        })
            .done(function(data) {
                alert("Product saved");
                $('input[name=pname]').val("");
            })
            .fail(function(data) {
                console.log(data);
            });

    }

    function getAllProducts() {
        // get all products
        $.ajax({
            type        : 'GET',
            url         : '/products',
            dataType    : 'json'
        })
            .done(function(data) {

                $("tbody").html("");

                $.each( data, function( key, value ) {
                    console.log(value);
                    html = "<tr><td>"+value.pname+"</td><td>"+value.stock+"</td><td>"+value.price+"</td><td>"+value.time+"</td></tr>";
                    $("tbody").append(html);
                });

            })
            .fail(function(data) {
                console.log(data);
            });
    }

    $('form').submit(function(event) {
        save();
        getAllProducts();
        event.preventDefault();
    });

    getAllProducts();

});
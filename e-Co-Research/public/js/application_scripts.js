$(document).ready(function() {
    var id=1;
    var heading_click_time = 0;
    $("button[name='heading-module']").click(function() {
        if (heading_click_time<1) {
            var name = "Heading Module";
            var domElement = $('<div class="module" id="module' + id + '"><p>' + name + '</p> <input type="text" name ="heading_module[]"> <input type="hidden" name="heading_module_name[]" value=' + name + '> <button name="del" class="btn btn-danger" onclick="del(module' + id + ');">Delete</button> <hr> </div>');
            $("#module-holder").append(domElement);
            id++;
            heading_click_time++;
        } else {
            window.alert("There can only be one title. ");
        }
    });

    $("button[name='text-form-module']").click(function() {
        var name = prompt("Please enter the module name");
        var domElement = $('<div class="module" id="module' + id + '"><p>' + name + '</p> <input type="text" name ="text-form-module[]"> <input type="hidden" name="text-form-module_name[]" value=' + name + '> <button name="del" class="btn btn-danger" onclick="del(module' + id + ');">Delete</button> <hr> </div>');
        $("#module-holder").append(domElement);
        id++;
        heading_click_time++;
    });

    $("button[name='button2']").click(function() {
        var name = prompt("Please enter the module name");
        var domElement = $('<div class="module" id="module'+id+'"><p>'+name+'</p> <input type="file" name="image_module[]"> <input type="hidden" name="image_module_name[]" value='+name+'> <input type="hidden" name="orders[]" value='+id+'> <button name="top" class="button transparent" onclick="up(module'+id+');">Move Up</button><button name="down" class="button transparent" onclick="down(module'+id+');">Move Down</button>  <button name="del" class="button transparent" onclick="del(module'+id+');">Delete</button></div>');
        $("#module-holder").append(domElement);
        document.getElementById('module' + id).disabled = true;
        id++;
    });

    $("button[name='button3']").click(function() {
        var name = prompt("Please enter the module name");
        var domElement = $('<div class="module" id="module'+id+'"><p>'+name+'</p> <input type="text" onchange="storeValue(module'+id+')" name ="data_field_module[]"> <input type="hidden" name="name[]" value='+name+'> <button name="top" class="button transparent" onclick="up(module'+id+');">Move Up</button><button name="down" class="button transparent" onclick="down(module'+id+');">Move Down</button><button name="del" class="button transparent" onclick="del(module'+id+');">Delete</button></div>');
        $("#module-holder").append(domElement);
        id++;
    });

    $("button[name='button4']").click(function() {
        var name = prompt("Please enter the module name");
        var domElement = $('<div class="module" id="module'+id+'"><p>'+name+'</p> <input type="text" onchange="storeValue(module'+id+')" name ="rich_text_field_module[]"> <input type="hidden" name="name[]" value='+name+'> <button name="top" class="button transparent" onclick="up(module'+id+');">Move Up</button><button name="down" class="button transparent" onclick="down(module'+id+');">Move Down</button><button name="del" class="button transparent" onclick="del(module'+id+');">Delete</button></div>');
        $("#module-holder").append(domElement);
        id++;
    });

    $("button[name='button5']").click(function() {
        var name = prompt("Please enter the module name");
        var domElement = $('<div class="module" id="module'+id+'"><p>'+name+'</p><input type="text" onchange="storeValue(module'+id+')" name ="agreement_module[]"> <input type="checkbox" name="name[]" value='+name+'> <button name="top" class="button transparent" onclick="up(module'+id+');">Move Up</button><button name="down" class="button transparent" onclick="down(module'+id+');">Move Down</button><button name="del" class="button transparent" onclick="del(module'+id+');">Delete</button></div>');
        $("#module-holder").append(domElement);
        id++;
    });
});

function del(a){
    var name=a.id;
    var element = document.getElementById(name);
    document.getElementById(name).remove();
}
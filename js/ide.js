let editor;

window.onload = function() {
    editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/c_cpp");
    console.log(editor.getSession().getValue());
}

function changeLanguage() {
   editor.session.setMode("ace/mode/c_cpp");
}

function executeCode() {

    //alert(editor.getSession().getValue());
    /*$.ajax({

        url: "/ide/app/compiler.php",

        method: "POST",

        data: {
            //language: $("#languages").val(),
            code: editor.getSession().getValue()
        },

        success: function(response) {
            //console.log(response);
            //$(".output").text(response)
        }
    });*/
}
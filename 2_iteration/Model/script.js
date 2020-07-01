/*const empty = document.querySelector('.empty');

// Loop through empty boxes and add listeners
    empty.addEventListener('dragover', dragOver);
    empty.addEventListener('dragenter', dragEnter);
    empty.addEventListener('dragleave', dragLeave);
    empty.addEventListener('drop', dragDrop);

// Drag Functions


function dragOver(e) {
    console.log("over");
    e.preventDefault();
}

function dragEnter(e) {
    console.log("enter");
    e.preventDefault();
    this.className += ' hovered';
}

function dragLeave() {
    console.log("leave");
    this.className = 'empty';
}

function dragDrop(e) {
    e.preventDefault();
    console.log("drop");
    this.className = 'empty';
    console.log(e);
    console.log("dataTransfert =", e.dataTransfert);
}*/


/*var fileobj;
function upload_file(e) {
    e.preventDefault();
    console.log(e);
    ajax_file_upload(e.dataTransfer.files);
}
 
 
function ajax_file_upload(file_obj) {
    if(file_obj != undefined) {
        var form_data = new FormData();
        for(i=0; i<file_obj.length; i++) {  
            form_data.append('file[]', file_obj[i]);  
        }
        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            contentType: false,
            processData: false,
            data: form_data,
            success:function(response) {
                alert(response);
                $('#selectfile').val('');
            }
        });
    }
}*/
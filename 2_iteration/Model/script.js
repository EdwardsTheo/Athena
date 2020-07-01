
const empty = document.querySelector('.empty');

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
}

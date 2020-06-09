// variables
var dropArea = document.getElementById('contenu_new'); // drop area zone JS object
var list = []; // file list
var nbDone = 0; // initialisation of nb files already uploaded during the process.


// main initialization
(function(){

	// init handlers
	function initHandlers() {
		dropArea.addEventListener('drop', handleDrop, false);
		dropArea.addEventListener('dragover', handleDragOver, false);
	}

	// drag over
	function handleDragOver(event) {
		event.stopPropagation();
		event.preventDefault();

		dropArea.className = 'hover';
	}

	// drag drop
	function handleDrop(event) {
		event.stopPropagation();
		event.preventDefault();

		processFiles(event.dataTransfer.files);
	}

	// process bunch of files
	function processFiles(filelist) {
		if (!filelist || !filelist.length || list.length) return;

		for (var i = 0; i < filelist.length && i < 500; i++) { // limit is 500 files (only for not having an infinite loop)
			list.push(filelist[i]);
		}
		uploadNext();
	}

	// upload file
	function uploadFile(file, status) {

		// prepare XMLHttpRequest
		var xhr = new XMLHttpRequest();
		xhr.open('POST', 'Controller/upload.php');
		xhr.onload = function() {
			uploadNext();
		};
		xhr.onerror = function() {
			uploadNext();
		};

		// prepare and send FormData
		var formData = new FormData();  
		formData.append('myfile', file); 
		xhr.send(formData);
	}

	// upload next file
	function uploadNext() {
		if (list.length) {
			var nb = list.length - 1;

			var nextFile = list.shift();
			if (nextFile.size >= 20000000) { // 20Mb = generally the max file size on PHP hosts
				uploadNext();
			} else {
				uploadFile(nextFile, status);
			}
		}
	}

	initHandlers();
})();

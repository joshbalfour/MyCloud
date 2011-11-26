<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<title>File Upload</title>
<link rel="stylesheet" href="http://www.beakybal4.co.uk/upload/css/jquery-ui.css" id="theme">
<link rel="stylesheet" href="http://www.beakybal4.co.uk/upload/css/css.css">
<link rel="stylesheet" href="http://www.beakybal4.co.uk/upload/css/style.css">

</head>
<body>
<div id="fileupload">
    <form action="upload.php" method="POST" enctype="multipart/form-data">       
        <div class="fileupload-buttonbar">      
            <label class="fileinput-button">
                <span><img src="../images/addfiles.png" alt="Add Files" /></span>
                <input type="file" name="files[]" multiple>
            </label>
            <button type="submit" class="start"><img src="../images/startupload.png" alt="Start Upload" /></button>
            <button type="reset" class="cancel"><img src="../images/cancelupload.png" alt="Cancel Upload" /></button>
            <button type="button" class="delete"><img src="../images/deletefiles.png" alt="Delete Files" /></button>
        </div>
    </form>
    <div class="fileupload-content">
        <table class="files"></table>
        <div class="fileupload-progressbar"></div>
    </div>
</div>
</div>
<script id="template-upload" type="text/x-jquery-tmpl">
    <tr class="template-upload{{if error}} ui-state-error{{/if}}">
        <td class="preview"></td>
        <td class="name">${name}</td>
        <td class="size">${sizef}</td>
        {{if error}}
            <td class="error" colspan="2">Error:
                {{if error === 'maxFileSize'}}File is too big
                {{else error === 'minFileSize'}}File is too small
                {{else error === 'acceptFileTypes'}}Filetype not allowed
                {{else error === 'maxNumberOfFiles'}}Max number of files exceeded
                {{else}}${error}
                {{/if}}
            </td>
        {{else}}
            <td class="progress"><div></div></td>
            <td class="start"><button>Start</button></td>
        {{/if}}
        <td class="cancel"><button>Cancel</button></td>
    </tr>
</script>
<script id="template-download" type="text/x-jquery-tmpl">
    <tr WIDTH="100%" class="template-download{{if error}} ui-state-error{{/if}}" >
        {{if error}}
            <td></td>
            <td class="name">${name}</td>
            <td class="size">${sizef}</td>
            <td class="error" colspan="2">Error:
                {{if error === 1}}File exceeds upload_max_filesize (php.ini directive)
                {{else error === 2}}File exceeds MAX_FILE_SIZE (HTML form directive)
                {{else error === 3}}File was only partially uploaded
                {{else error === 4}}No File was uploaded
                {{else error === 5}}Missing a temporary folder
                {{else error === 6}}Failed to write file to disk
                {{else error === 7}}File upload stopped by extension
                {{else error === 'maxFileSize'}}File is too big
                {{else error === 'minFileSize'}}File is too small
                {{else error === 'acceptFileTypes'}}Filetype not allowed
                {{else error === 'maxNumberOfFiles'}}Max number of files exceeded
                {{else error === 'uploadedBytes'}}Uploaded bytes exceed file size
                {{else error === 'emptyResult'}}Empty file upload result
                {{else}}${error}
                {{/if}}
            </td>
        {{else}}
           {{if thumbnail_url}}	
			{{else}}
			<td>
				<a href="${url}" target="_blank"><img src="../icons/${ttype}.png" alt="${ttype} file"/></a>
			</td>
			{{/if}} 
			 {{if thumbnail_url}}
				<td class="preview">               
                   <a href="${url}" target="_blank"><img src="${thumbnail_url}"></a>	      				 				 
				</td>
			{{/if}}
            <td class="name" colspan="5">
                <a href="${url}"{{if thumbnail_url}} target="_blank"{{/if}}>${name}</a>
            </td>
            <td class="size">${sizef}</td>
            <td ></td>
        {{/if}}
        <td class="delete" width="400">
            <button data-type="${delete_type}" data-url="${delete_url}">Delete</button>	
        </td>
    </tr>
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
<script src="http://www.beakybal4.co.uk/upload/js/jquery.iframe-transport.js"></script>
<script src="http://www.beakybal4.co.uk/upload/js/jquery.fileupload.js"></script>
<script src="http://www.beakybal4.co.uk/upload/js/jquery.fileupload-ui.js"></script>
<script src="http://www.beakybal4.co.uk/upload/js/application.js"></script>
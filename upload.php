<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload dokumen</title>
</head>
<body>
    <div class="container" style="margin-top:50px;">
        <h2>Upload File</h2>
        <br>
        <form action="proses/proses_upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>File :</label>
                <br>
                <input type="file" name="fupload" id="fupload">
                <p style="color: grey; font-size: 13px;">*maksimal 10 MB</p>
            </div>

            <div class="form-group">
                <label>Judul Dokumen :</label>
                <textarea name="desc" id="desc" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" name="upload" id="upload" class="btn btn-primary">Upload</button>
        </form>
    </div> 
<body>
</html>

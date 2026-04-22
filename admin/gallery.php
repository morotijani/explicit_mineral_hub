<?php
    require_once ('../system/DatabaseConnector.php');
    if (!isset($_SESSION['user_id'])) { redirect(PROOT . 'admin/index'); exit; }

    // Handle Delete
    if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];
        $delete_image = unlink(BASEURL . $_GET['location']);
        
        $stmt = $dbConnection->prepare("DELETE FROM gallery WHERE gallery_id = ?");
        $stmt->execute([$delete_id]);
        redirect(PROOT . 'admin/gallery?deleted=true');
    }

    $stmt = $dbConnection->query("SELECT * FROM gallery ORDER BY created_at DESC");
    $gallerys = $stmt->fetchAll();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gallery - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #dropArea {
            width: 100%;
            padding: 30px;
            border: 2px dashed #aaa;
            text-align: center;
            margin-bottom: 10px;
            cursor: pointer;
        }
        #dropArea.dragover {
            background-color: #f0f0f0;
            border-color: #333;
        }
        #progressBar {
            width: 100%;
            background-color: #eee;
            margin-top: 10px;
        }
        #progressBar div {
            width: 0%;
            height: 20px;
            background-color: green;
            text-align: center;
            color: white;
        }
       #preview { display: flex; flex-wrap: wrap; }
        .preview-item { position: relative; margin: 5px; }
        .preview-item img { width: 120px; border: 1px solid #ccc; padding: 3px; }
        
        .remove-btn {
            position: absolute; top: 0; right: 0;
            background: red; color: white; border: none;
            cursor: pointer; font-size: 12px; padding: 2px 5px;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom"> 
            <a href="dashboard" class="d-flex align-items-center link-body-emphasis text-decoration-none"> 
                <img src="<?= PROOT; ?>assets/media/logo/logo.png" width="40" height="32" class="me-2" /> <span class="fs-4">M.Enterprise</span> 
            </a>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto"> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="blogs">Blog</a> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="contacts">Contacts</a> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="gallery">Gallery</a> 
                <a class="py-2 link-body-emphasis text-decoration-none" href="logout">Logout</a> 
            </nav> 
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Gallery</h3>
        </div>

        <!-- form to upload multiple images -->
        <div id="dropArea">Drag & Drop Images Here or Click to Select</div>
        <form id="uploadForm" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="d-flex gap-2 justify-content-center py-5">
                <div class="">
                    <label for="images" class="form-label btn btn-primary rounded-pill px-3"">
                        Select Images
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                            <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z"/>
                            <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                        </svg>
                    </label>
                    <input type="file" name="images[]" id="images" multiple accept="image/*" style="display:none;">
                </div>
                <div>
                    <input type="submit" value="Click to upload" class="btn btn-dark">
                </div>
            </div>
        </form>
        <div id="preview"></div>
        <div id="progressBar"><div></div></div>
        <div id="status"></div>

        <?php if (isset($_GET['deleted'])): ?>
            <div class="alert alert-success">Contact entry deleted successfully.</div>
        <?php endif; ?>

        <?php if (empty($gallerys)): ?>
            <div class="alert alert-info">No gallery items yet.</div>
        <?php else: ?>
            
           <div id="uploaded_image" class="row mt-5">
            <?php foreach ($gallerys as $gallery): ?>
                <div class="col-xl-2 col-lg-2 col-sm-4">
                    <div class="card card-figure">
                        <figure class="figure">
                            <div class="figure-img">
                                <img class="img-fluid" src="<?= PROOT . $gallery['gallery_file_path'] . $gallery['gallery_file_name']; ?>" alt="Card image cap"> 
                                <a href="<?= PROOT . $gallery['gallery_file_path'] . $gallery['gallery_file_name']; ?>" target="_blank" onclick="return confirm('Are you sure you want to delete this item?');" class="img-link">
                                    <span class="tile tile-circle bg-danger">
                                        <span class="oi oi-eye"></span>
                                    </span> 
                                    <span class="img-caption d-none">Image caption goes here</span>
                                </a>
                            </div>
                            <figcaption class="figure-caption">
                                <ul class="list-inline text-muted mb-0">
                                    <li class="list-inline-item">
                                        <span class="oi oi-paperclip"></span> <?= getFilesize(BASEURL . $gallery['gallery_file_path'] . $gallery['gallery_file_name']); ?> </li>
                                    <li class="list-inline-item float-right">
                                        <a href="?delete=<?= $gallery['gallery_id'] . '&location=' . $gallery['gallery_file_path'] . $gallery['gallery_file_name']; ?>" class="badge bg-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
                
        <?php endif; ?>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        let selectedFiles = [];

        // function previewFiles(files) {
        //     $("#preview").html("");
        //     selectedFiles = []; // reset

        //     for (let i = 0; i < files.length; i++) {
        //         let file = files[i];

        //         // Validate type
        //         if (!file.type.match('image.*')) {
        //             alert(file.name + " is not an image file.");
        //             continue;
        //         }

        //         // Validate size (10MB)
        //         if (file.size > 10 * 1024 * 1024) {
        //             alert(file.name + " exceeds 10MB size limit.");
        //             continue;
        //         }

        //         selectedFiles.push(file);

        //         let reader = new FileReader();
        //         reader.onload = function(e) {
        //             $("#preview").append("<img src='" + e.target.result + "'>");
        //         }
        //         reader.readAsDataURL(file);
        //     }
        // }

        function previewFiles(files) {
            $("#preview").html("");
            selectedFiles = [];

            Array.from(files).forEach((file, index) => {
                if (!file.type.match('image.*')) { alert(file.name + " is not an image."); return; }
                if (file.size > 10 * 1024 * 1024) { alert(file.name + " exceeds 10MB."); return; }

                selectedFiles.push(file);

                let reader = new FileReader();
                reader.onload = function(e) {
                    let item = $("<div class='preview-item'></div>");
                    item.append("<img src='" + e.target.result + "'>");
                    let btn = $("<button class='remove-btn'>X</button>");
                    btn.on("click", function(){
                        selectedFiles.splice(index,1); // remove from array
                        item.remove(); // remove preview
                    });
                    item.append(btn);
                    $("#preview").append(item);
                }
                reader.readAsDataURL(file);
            });
        }

        // Click drop area opens file dialog
        $("#dropArea").on("click", function(){
            $("#images").click();
        });

        // File input change
        $("#images").on("change", function(){
            previewFiles(this.files);
        });

        // Drag & drop events
        $("#dropArea").on("dragover", function(e){
            e.preventDefault();
            e.stopPropagation();
            $(this).addClass("dragover");
        });

        $("#dropArea").on("dragleave", function(e){
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass("dragover");
        });

        $("#dropArea").on("drop", function(e){
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass("dragover");
            let files = e.originalEvent.dataTransfer.files;
            previewFiles(files);
        });

        // Submit form with AJAX
        $("#uploadForm").on("submit", function(e){
            e.preventDefault();

            let formData = new FormData();
            for (let i = 0; i < selectedFiles.length; i++) {
                formData.append("images[]", selectedFiles[i]);
            }
            formData.append("title", $("#title").val());

            $.ajax({
                xhr: function() {
                    let xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            let percentComplete = Math.round((evt.loaded / evt.total) * 100);
                            $("#progressBar div").css("width", percentComplete + "%").text(percentComplete + "%");
                        }
                    }, false);
                    return xhr;
                },
                url: "upload.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response){
                    $("#status").html(response);
                    $("#progressBar div").css("width", "0%").text("");
                    // clear previews and selected files
                    $("#preview").html("");
                    selectedFiles = [];
                    $("#images").val("");
                    $("#title").val("");

                    // Optionally, refresh the page to show new uploads
                    location.reload();
                },
                error: function(){
                    $("#status").html("Upload failed.");
                }
            });
        });
    </script>
</body>
</html>
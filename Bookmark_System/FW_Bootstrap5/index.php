<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCISM Bookmarks</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- STYLESHEET -->
    <link href="styles.css" rel="stylesheet">
    <!-- TEST JAVASCRIPT -->
    <!-- <script>

        function addBookmark(name, img){
            
            let outer_div = document.createElement("div");
            outer_div.classList.add("col-sm-2", "align-content-center");

            let inner_div1 = document.createElement("div");
            inner_div1.classList.add("row", "bmarked-image");

            let inner_div2 = document.createElement("div");
            inner_div2.classList.add("row", "text-center");

            let span_page = document.createElement("span");
            span_page.className = "page-name";

            let span_text = document.createTextNode("Sample");
            span_page.appendChild(span_text);
            inner_div2.appendChild(span_page);

            outer_div.appendChild(inner_div1);
            outer_div.appendChild(inner_div2);

            let parent = document.getElementById("bookmark");
            parent.appendChild(outer_div);

        }

    </script> -->
</head>
<body>
        <!-- OUTER LAYER -->
        <div class="container-fluid pt-0 outer-layer">
            
            <button type="button" class="btn btn-outline-dark add-bookmark-btn" data-bs-toggle="modal" data-bs-target="#myModal"> + </button>
            
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
              
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Bookmark</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                
                        <!-- Modal body -->
                        <div class="modal-body ">
                            <form method="post">
                                <input type="text" placeholder="Web Page URL"><br>
                                <input type="text" placeholder="Name"><br>
                                <label for="web-icon">Upload Image (Icon): </label>
                                <input type="file" id="web-icon" name="web-icon">
                            </form>
                        </div>
                
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="add-web" onclick="addBookmark()">Add</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
              
                  </div>
                </div>
            </div>
            
            
            <!-- BOOKMARKED PAGES -->
            <div class="row bookmark-section justify-content-center" id="bookmark">
                
                <!-- <div class="col-sm-2 align-content-center">
                    <div class="row bmarked-image"></div>
                    <div class="row text-center"><span class="page-name">Sample</span></div>
                </div> -->

                <?php

                    $bmark_count = file_get_contents("saved_pages.dat");

                    if(!$bmark_count){
                        echo '
                            <div class="col-sm-2 align-content-center">
                                <div class="row text-center"><span class="page-name">Click "+" to add a Bookmark</span></div>
                                <div class="row text-center"><span class="page-name">Bookmark Count: ' . $bmark_count . '</span></div>
                            </div>
                        ';
                    } else {

                        $file = file("saved_pages.dat");

                        foreach($file as $webpage){
                            echo '
                                <div class="col-sm-2 align-content-center">
                                    <div class="row bmarked-image"></div>
                                    <div class="row text-center"><span class="page-name">' . $webpage . '</span></div>
                                </div>
                            ';
                        }
                    }

                    file_put_contents("saved_pages.dat","page5\n", FILE_APPEND);

                ?>
                

            </div>

        </div>
        

</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>PTCI Student Council Election</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="../../assets/css/home.css" />
        <link rel="stylesheet" href="../../src/stelcom-bootswatch/bootstrap.min.css" />

    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
     <link rel="website icon" type="png" sizes="32x32" href="../../img/logo/PTCI-logo.png">
</head>
<body>
    <!-- class for heading -->
   <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">PTCI Student Council Election</label>

            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="../private/login.php">Log In</a>
                <li><a href="../private/registration.php">Register</a>

            </ul>

    </nav>

<!--  Carousel -->
<div class="container">
    <aside class="carousel">
        <div class="carousel__wrapper">
            <div class="item" id="slide-0"><img src="../../assets/image-home/lennith.png" alt=""
                    width="418" height="418" /></div>
            <div class="item" id="slide-1"><img src="../../assets/image-home/gen.png" alt=""
                    width="418" height="418" /></div>
            <div class="item" id="slide-2"><img src="../../assets/image-home/jamie.png" alt=""
                    width="418" height="418" /></div>
            <div class="item" id="slide-3"><img src="../../assets/image-home/lovelie.png" alt=""
                    width="418" height="418" /></div>
            <div class="item" id="slide-4"><img src="../../assets/image-home/velly.png" alt=""
                    width="418" height="418" /></div>
                    <div class="item" id="slide-4"><img src="../../assets/image-home/velly.png" alt=""
                    width="418" height="418" /></div>
                    <div class="item" id="slide-4"><img src="../../assets/image-home/velly.png" alt=""
                    width="418" height="418" /></div>
                    
                    
        </div>
    </aside>
</div>
        
    
<!-- login Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                     <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <div class="container-fluid">
                    Add rows here
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
    
</body>
<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
    });
</script>

</html>
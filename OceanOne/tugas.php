<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="style1.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
            <a class="navbar-brand" href="#"><img src="ocean-one-low-resolution-logo-color-on-transparent-background.png" width="150px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Action</a>
                <a class="nav-item nav-link" href="#">Resources</a>
                <a class="nav-item nav-link" href="#">Project</a>
                <a class="nav-item nav-link" href="#">Explore</a>
            </div>
        </nav>

        <!-- Hero Page -->
        <div class="bg-image" style="height: 670px; background-image: url('https://hdqwalls.com/wallpapers/ocean-waves-at-sunset.jpg'); background-repeat: no-repeat; background-size: cover; opacity: 60%;">
            <div class="hero-text" style="opacity: 100%;">
                <h1 style="font-weight: bold;">Protect The Ocean</h1>
                <p>By protecting the ocean, we also protect the living things in it</p>
                <button type="button" class="btn btn-info" style="border-radius: 150px; height: 50px; width: 150px;" onclick="alert('Taking an action')">TAKE ACTION</button>
            </div>
        </div>

        <!-- Section Two -->
        <div style="margin: 150px; height: 450px;">
            <h1 style="font-weight: bold;">OFFSET YOUR</h1>
            <h1 style="font-weight: bold;"> PLASTIC FOOTPRINT</h1>
            <div class="row">
            <?php
                include 'koneksi.php';
                $oceanOne = mysqli_query($conn, "select * from oceanOne");
                foreach($oceanOne as $value){
                    echo"
                    <div class='col'>
                    <p style='font-weight: bold;'>".$value["header"]."</p>
                    <p id='your_paragraph'>".$value["main"]."</p>
                    </div>";
                }
            ?>
            
                <div class="w-100" style="margin-top: 20px;"></div>
                
            <?php
                foreach($oceanOne as $value){
                    echo"
                    <div class='col'>
                    <button type='button' class='btn btn-outline-info' style='border-radius: 100px; width: 150px;'>".$value["button"]."
                    </div>";
                }
            ?>
            </div>
        </div>

        <!-- Section Three -->
        <div style="height: 600px; background-color: #06bee1; color: white;" >
            <h1 style="text-align: center; font-weight: bold; padding-top: 100px;">MAKE YOUR IMPACT</h1>
            <div class="d-flex justify-content-around" style="margin-top: 90px;">
                <div style="width: 300px; text-align: center;">
                    <img src="wave-white.png" width="150px">
                    <p class="s3">COMMIT TO REMOVING A SPESIFIC AMOUNT</p>
                </div>
                <div style="width: 300px; text-align: center;">
                    <img src="recycle-white.png" width="150px">
                    <p class="s3">TIE REMOVAL TO PRODUCT SALES</p>
                </div>
                <div style="width: 300px; text-align: center;">
                    <img src="community-white.png" width="150px">
                    <p class="s3">INCENTIVIZE COMMUNITY ACTION</p>
                </div>
            </div>
        </div>

        <!-- Section Four -->
        <div>
            <div style="margin-left: 150px; margin-top: 100px;">
                <p>Project 1:</p>
                <h2 >OCEANBOUND CLEAN UP</h2>
            </div>
            <div class="row" style="">
                <div class="col four" style="background-image: url('https://thumb.spotlight.id/image/2019/11/15/d1b36695c2e8b909bcb4d2215520c31b-tirto.jpg'); background-repeat: no-repeat; background-size: cover;">
                </div>
                <div class="col four" style="margin-top: 100px; margin-bottom: 100px;">
                    <p>PROBLEMS</p>
                    <p>Plastic recycling generates plastic waste effluent as a standard part of the process. This dirty discharge known as "Mud" is at risk of being discharged into the wastewater and, in the best-case, is usually taken to the nearest landfill.</p>
                </div>
                <div class="w-100"></div>
                <div class="col four" style="margin-top: 100px; margin-bottom: 100px; text-align: right;">
                    <p>SOLUTION</p>
                    <p>Repurposes the “Mud” into useful building materials. It's composition is perfect for producing bricks! Unfortunately, these recycled plastic compound bricks are slightly more expensive than standard building bricks, so Impac+ program incentivizes the reuse of the “Mud” in the bricks by making them competitive on the open market.</p>
                </div>
                <div class="col four" style="background-image: url('https://lh5.googleusercontent.com/proxy/9D3TI-wHhwkhCt9WxNv8r4ydgSgJUTEgSbimvQzHU8XG5dJ7xJhwH5DDnXyT8MNkoEn_70nzFPdLXkgeAC92hXiKGZMxmedNQz_Z13VrBaU=s0-d'); background-repeat: no-repeat; background-size: cover;">
                </div>
            </div>
        </div>

        <div style="margin-top: 150px;">
            <div style="margin-left: 150px;">
                <p>Project 2:</p>
                <h2>FISHING NET RECOVERY</h2>
            </div>
            <div class="row" style="">
                <div class="col four" style="background-image: url('https://fishingnews.co.uk/wp-content/uploads/2016/02/MCB-7-820x547.jpg'); background-repeat: no-repeat; background-size: cover;">
                </div>
                <div class="col four" style="margin-top: 100px; margin-bottom: 100px;">
                    <p>PROBLEMS</p>
                    <p>Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean. Unfortunately, incentives do not exist to recover this gear so at the end of its life, most gets landfilled or simply cut away at sea. It's a huge reason for why fishing nets are the largest ocean plastic polluter.</p>
                </div>
                <div class="w-100"></div>
                <div class="col four" style="margin-top: 100px; margin-bottom: 100px; text-align: right;">
                    <p>SOLUTION</p>
                    <p>We provides the funds needed to incentivize collection and recycling of this gear. This program creates a pathway for the reclamation of end of life fishing gear.</p>
                </div>
                <div class="col four" style="background-image: url('https://verk.store/eng_pl_Garden-hammock-string-with-rocking-chair-Rocking-Net-106_5.jpg'); background-repeat: no-repeat; background-size: cover;">
                </div>
            </div>
        </div>

        <!-- Section Five -->

        <div class="row">
            <div style="text-align: center; background-color: #06bee1; color: white;">
                <h2 style="margin-top: 30px; margin-bottom: 30px; font-weight: bold;">GET IN TOUCH</h2>
            </div>
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.173824071336!2d110.3749195104236!3d-7.77138469221569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a584b387308b7%3A0xea2ce4460a11afdb!2sGrha%20Sabha%20Pramana%20Universitas%20Gadjah%20Mada!5e0!3m2!1sen!2sid!4v1683473448604!5m2!1sen!2sid" width="700" height="600" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col four" style="margin-top: auto; margin-bottom: auto;">
                <form id="form">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="email" class="form-control" id="form-nama" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="text" class="form-control" id="form-email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Message</label>
                        <textarea class="form-control" id="form-text" rows="3" placeholder="Write your text here..."></textarea>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-outline-info" style="border-radius: 100px; width: 150px;" onclick="form_send()">SEND</button>
                    </div>
                </form>
            </div>
            <footer class="text-center text-lg-start" style="background-color: rgb(145, 145, 145);">
                <!-- Copyright -->
                <div class="navbar navbar-expand-lg navbar-light justify-content-between">
                    <a class="navbar-brand" href="#"><img src="ocean-one-low-resolution-logo-white-on-transparent-background.png" width="150px" style="margin-top: 10px; margin-bottom: 10px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="six" href="#">Newsletter</a>
                        <a class="nav-item nav-link" id="six" href="#">Privacy Policy</a>
                        <a class="nav-item nav-link" id="six" href="#">FAQs</a>
                    </div>
                </div>
                <!-- Copyright -->
            </footer>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        var p = document.getElementById('your_paragraph');
        function edit(){
            p.innerHTML = '<textarea id="theText" style="width: 100%; height: 120px">'+ p.textContent +'</textarea></br><input type="button" id="btn" value="Update" onclick="test()"/>';
        }
        function test(){
            p.textContent = document.getElementById('theText').value;
        }

        function form_send(){
            var nama = document.getElementById('form-nama');
            var email = document.getElementById('form-email');
            var question = document.getElementById('form-text');
            var form = document.getElementById('form');

            form.innerHTML = 
            '<h3 style="padding-bottom: 20px;">Terimakasih Atas Masukkan Anda</h3><div style="padding-bottom: 10px;">Nama : ' + nama.value +'</div><div style="padding-bottom: 10px;">Email : ' + email.value + '</div><div style="padding-bottom: 10px;">Message : ' + question.value + '</div>';
        }
    </script>
</body>
</html>
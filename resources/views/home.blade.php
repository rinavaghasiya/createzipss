<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{URL::asset('img/minion.png')}}"  type="image/png">
    <title>MiniPNG Compress WebP, PNG or JPEG files</title>
</head>

<body class="home png">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">
                <div class="navbar_img">
                    <img src="{{URL::asset('img/logo.png')}}" alt=""> 
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                {{-- <form class="d-flex">
                    <button class="btn btn-outline-success" type="submit">Login</button>
                </form> --}}
            </div>
        </div>

    </nav>

    <!-- slider -->

   
    <div class="slider_image_grass">
        <div class="image_grass_row">
            <div class="image_grass_row_col">
               <div class="kelebeks">
                    <div class="kelebek">
                      <img src="https://i.pinimg.com/originals/73/25/b5/7325b5da1c12314824328579aeed59f4.gif" width="75" alt="kelebeklerr" />
                    </div>
                      <div class="kelebek">
                        <img src="https://i.ibb.co/m0Nts0m/kisspng-glasswing-butterfly-insect-clip-art-patins-5b4a666cc41cc0-7007119915316025408033.png" width="75" alt="kelebeklerr" />
                      </div>
                      <div class="kelebek">
                        <img src="https://i.pinimg.com/originals/73/25/b5/7325b5da1c12314824328579aeed59f4.gif" width="75" alt="kelebeklerr" />
                      </div>
                      <div class="kelebek">
                        <img src="https://i.pinimg.com/originals/73/25/b5/7325b5da1c12314824328579aeed59f4.gif" width="75" alt="kelebeklerr" />
                      </div>
                      <div class="kelebek">
                        <img src="https://i.ibb.co/m0Nts0m/kisspng-glasswing-butterfly-insect-clip-art-patins-5b4a666cc41cc0-7007119915316025408033.png" width="75" alt="kelebeklerr" />
                      </div>
                      <div class="kelebek">
                        <img src="https://i.pinimg.com/originals/73/25/b5/7325b5da1c12314824328579aeed59f4.gif" width="75" alt="kelebeklerr" />
                      </div>
                  </div> 


                  @if(Session::has('message'))
                  <div class="alert alert-success">
                      {!! session('message') !!}
                  </div>
                  @elseif(Session::has('error'))
                  <div class="alert alert-danger">
                      {!! session('error') !!}
                  </div>
                  @endif
              
                  <section class="target">
                    <form action="{{ url('zip') }}" id="myForm" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="myfile" style="display: block; cursor: pointer;"><i class="fa-solid fa-download"
                                style="font-size: 40px; padding: 2rem 0px 0;"></i></label>
                        <input type="file" id="myfile" name="myfile[]" multiple id="addfile"
                            onchange="form.submit()"><br><br>
                        <p>Select your WebP,GIF,PNG,JPEG files here !</p>
                    </form>
                    <br><br><br>
                    <a href="{{ url('getdownload') }}" class="btn btn-submitbtn">Download Zip</a>
                   
                </section>
            </div>
        </div>
    </div>

    
    <section>
        <img id="curve" data-name="Layer 1" src="{{URL::asset('img/banner-shap.png')}}">
        <path class="cls-1" />
        
    </section>
    <!-- main -->
    <main class="highlight_main_section">
        <div class="highlight_contanier">
            <div class="highlight_section">
                <div class="highlight_section_row_one">
                    <div class="highlight_section_row_one_col">
                        <div class="hgroup">
                            <h1>Smart <strong>WebP</strong>, <strong>PNG</strong> and <strong>JPEG</strong> compression
                            </h1>
                            <h2>Multiple WebP, PNG and JPEG images optimized and still counting!</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 box-shadow ">
                <img class="card-img-top"
                    data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                    alt="Thumbnail [100%x225]" style="height:300px; width: 100%; display: block;" src="{{URL::asset('img/11.jpg')}}"
                    data-holder-rendered="true">
                <div class="card-body">
                    <p class="card-text">One eyed, short  minion with  spiky hair,happy Minion</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 box-shadow ">
                <img class="card-img-top"
                    data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                    alt="Thumbnail [100%x225]" style="height:300px; width: 100%; display: block;"
                    src="{{URL::asset('img/minion.png')}}" data-holder-rendered="true">
                <div class="card-body">
                    <p class="card-text">Two eyed, short minion with combed hair</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 box-shadow ">
                <img class="card-img-top"
                    data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                    alt="Thumbnail [100%x225]" style="height:300px; width: 100%; display: block;"
                    src="{{URL::asset('img/2.jpg')}}" data-holder-rendered="true">
                <div class="card-body">
                    <p class="card-text">Two eyed, medium minion with spiky hair</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 box-shadow ">
                <img class="card-img-top"
                    data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                    alt="Thumbnail [100%x225]" style="height:300px; width: 100%; display: block;"
                    src="{{URL::asset('img/3.jpg')}}" data-holder-rendered="true">
                <div class="card-body">
                    <p class="card-text">Two eyed, tall minion with sprout hair with sad face</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="jumbotron mt-4">
                <h2>How does it work?</h2>
                <p class="lead">Minions uses smart lossy compression techniques to <b>reduce the file size </b>of your WEBP, JPEG and PNG files. 
                    By selectively decreasing the number of colors in the image, fewer bytes are required to store the data.
                     The effect is nearly invisible but it makes a very large difference in file size!</p>
              

            </div>
        </div>
        <div class="row">
            <div class="jumbotron mt-4">
                <h2>What about Photoshop?</h2>
                <p class="lead">Minions Says :Excellent question! Only Photoshop CC 2015 or newer can save images as indexed PNG files with alpha transparency. 
                    With other versions it is impossible and Photoshop CS5 cannot even display them properly.</p>
                <p class="lead">You can use Save for Web to export your images as 24-bit transparent PNG files and upload them to Minions. We’ll convert them to tiny indexed PNG files. 
                    You can also install the Minions Photoshop plugin. It allows you to scale, preview and save compressed PNG and JPEG images straight from Photoshop.</p>

            </div>
        </div>
        <div class="row">
            <div class="jumbotron mt-4">
                <h2>Why did you create Minions?</h2>
                <p class="lead">MinionsSays : In 2015, the village of Minions, Cornwall in the United Kingdom built a road sign paid for by Universal Studios featuring Minions. Excellent question! When you upload a PNG (Portable Network
                    Graphics) file, similar colors in your image are combined. This technique is called “quantization”.
                    By reducing the number of colors, 24-bit PNG files can be converted to much smaller 8-bit indexed
                    color images. All unnecessary metadata is stripped too. The result better PNG files with 100%
                    support for transparency. Have your cake and eat it too!</p>
            </div>
        </div>
    </div>

    {{-- <!-- new section -->
    <div class="container">
        <div class="row mb-2 mt-5">
            <div class="hgroup textalign mb-3">
                <h1>Can anyone tell the difference?</h1>
                <p>Panda says : Excellent question! Let me give you a side by side comparison. Below are two photos of
                    my cousin. The left image is saved as 24-bit PNG directly from Adobe Photoshop. On the right is the
                    same image processed by TinyPNG. Spot any difference?

            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250 ">
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                        alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="img/example-orig.png"
                        data-holder-rendered="true">
                    <div class="card-body d-flex flex-column align-items-start">
                        <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
                        <h3 class="mb-4">
                            <a class="text-dark" href="#">Original transparent PNG</a>
                        </h3>
                        <p class="card-text mb-auto">File size 57 KB</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> -->
                        <h3 class="mb-4">
                            <a class="text-dark" href="#">Shrunk transparent PNG</a>
                        </h3>
                        <p class="card-text mb-auto">File size 15 KB</p>

                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                        alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="img/example-shrunk.png"
                        data-holder-rendered="true">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- footer -->
    <!-- <footer class="footerbg py-5">
        <div class="contanier">
        <div class="row">
         
          <div class="col-lg-3 col-md-4 col-sm-6">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Business</a></li>
              <li><a class="text-muted" href="#">Education</a></li>
              <li><a class="text-muted" href="#">Government</a></li>
              <li><a class="text-muted" href="#">Gaming</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
    </div>
      </footer> -->
    <footer class="blog-footer">
        <p>Made by<a href="#"> Voormedia </a> By <a href="#"> using this site you accept the terms of use.</a>.</p>
        <div class="btn-o" contextmenu="menu" data-scribe="component:button">
            {{-- <a id="follow-button" class="btn" title="Follow Tinify (@minipng) on Twitter"
                href="https://twitter.com/intent/follow?original_referer=https%3A%2F%2Ftinypng.com%2F&amp;ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Efollow%7Ctwgr%5Etinypng&amp;region=follow_link&amp;screen_name=tinypng">
                <i class="fa-brands fa-twitter"
                    style="font-size: 14px; margin-right: 5px; padding: 3px; border: 2px solid #adccd7; "></i><span
                    class="label" id="l">Follow <b>@minipng</b></span>
            </a> --}}
        </div>
        <!-- <p>
          <a href="#">Back to top</a>
        </p> -->
    </footer>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
   

    // $(document).ready(function() {
    //     $('.download-btn').hide();
    //     $('#addfile').click(function() {
    //         $(this).hide();
    //         $('.download-btn').show();
    //     });
    // });
    
    
    document.getElementById("file").onchange(function() {
        document.getElementById("myForm").submit();
      
        
    });

 
   

   
</script>

</html>

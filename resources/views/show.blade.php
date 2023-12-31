<!DOCTYPE html>
<html lang="en">

<head translate="no">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="sanonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <link href="{{URL::asset('/manage/css/show.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <!-- Favicon -->
    <!-- <link href="images/favicon.ico" rel="icon"> -->
</head>

<body>
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <div style="
        display: grid;
        width: 100%;
        place-items: center;
        background-size: cover;
        background-position: center;
      ">
        <div style="
          z-index: 0;
          display: flex;
          align-items: center;
          justify-content: center;
          max-width: 80rem;
          gap: 1rem;
        ">
            <div class="container d-lg-flex d-xl-flex d-md-flex" style="
            width: 100vw;
            height: 100vh;
            z-index: 0;
            /* display: flex; */
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
          ">
                <div class="rows">
                    <div class="col-12">
                        <div class="card" style="
                  width: 100%;
                  text-align: center;
                  align-items: center;
                  background-color: transparent;
                  border: unset;
                ">
                            <div style="z-index: 1; width: 100vw; text-align: -webkit-center">
                                <div src="..." class="card-img-top" alt="..." style="
                      margin-bottom: 20px;
                      width: 15em;
                      height: 15em;
                      background-size: cover;
                      background-position: top;
                      background-image: url('{{ URL::asset('/img/profile/' . '' . $user[0]->photo) }}');
                      border: 1em solid whitesmoke;
                      border-radius: 50%;
                      background-size: cover;
                      box-shadow: 0 6px 12px #aaa;
                    "></div>
                                <h4 class="card-title">นาย {{$user[0]->firstName_th}}</h4>
                                <h5 class="name1">ตำเเหน่ง: {{$user[0]->job_position}}</h5>
                            </div>

                            <div class="card-body" style="
                    margin-top: 10px;
                    border: 1px solid grey;
                    background-color: white;
                    box-shadow: 0 6px 12px #aaa;
                    max-width: 90vw;
                    width: 30rem;
                  ">
                                <div class="rows">
                                    <div class="col-12">
                                        <a href="tel:{{$user[0]->computerType1}}">
                                            <button class="button button-link">
                                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                                {{$user[0]->computerType1}}
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a href="https://www.facebook.com/0okenzao0/">
                                            <button class="button button-link">
                                                <i class="fa-brands fa-facebook"></i> Ken Varisyos
                                            </button></a>
                                    </div>
                                    <div class="col-12">
                                        <a href="{{$user[0]->problemMessage}}">
                                            <button class="button button-link">


                                                <i class="fa-brands fa-line"></i> {{$user[0]->problemMessage}}
                                            </button></a>
                                    </div>
                                    <div class="col-12">
                                        <a href="mailto:{{$user[0]->email}}">
                                            <button class="button button-link">
                                                <!-- <i class="fa-regular fa-envelope-dot"></i> -->
                                                <i class="fa-solid fa-envelope"></i>
                                                {{$user[0]->email}}
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a href="{{$user[0]->problemMessage1}}">
                                            <button class="button button-link">
                                                <i class="fa-solid fa-globe"></i> {{$user[0]->problemMessage1}}
                                            </button> </a>
                                    </div>
                                    <!-- <div class="col-12 mt-4">
                      <p style="background-color: #aaa; color: whitesmoke">
                        บริษัท :
                        AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                      </p>
                    </div> -->
                                    <!-- <br> <img src="img/banner.png" alt="Girl in a jacket" width="145" height="80"> -->
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="content">
     
    </div> -->
</body>

</html>
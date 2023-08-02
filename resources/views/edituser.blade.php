@extends('layouts.appmanage')

@section('content')



<!-- Main Content -->
<main>
    <div class="new-users">
        <h2>Costume protocol</h2>

        <div class="user-list">





            <!-- Tabs Titles -->
            <script src="https://code.jquery.com/jquery-2.2.4.min.js"
                integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
            </script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">



            <div class="create_profile_section">


                <div class="form">



                    <div class="tab-content">




                        <div id="signup">
                            <h2>Create An Account</h2>


                            <form action="/" method="post">


                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" required />
                                        <label for="imageUpload"></label>
                                    </div>
                                    @if($user[0]->photo)
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url('{{ URL::asset('/img/profile/' . '' . $user[0]->photo) }}');">
                                        </div>
                                    </div>
                                    @else
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url('https://i.imgur.com/sR5Tw3p.png');">
                                        </div>
                                    </div>
                                    @endif
                                </div>

                                <div class="top-row">
                                    <div class="field-wrap">
                                        <!--   <label>
                                            <b>Name th<span class="req">*</span></b>
                                        </label> -->
                                        <input type="text" required autocomplete="none"
                                            value="{{$user[0]->firstName_th}}" />
                                    </div>

                                    <div class="field-wrap">
                                        <!--  <label>
                                            <b>Last Name<span class="req">*</span></b>
                                        </label> -->
                                        <input type="text" autocomplete="none" value="{{$user[0]->firstName_eng}}" />
                                    </div>
                                </div>

                                <div class="field-wrap">
                                    <!--   <label>
                                        <b> Email Address<span class="req">*</span></b>
                                    </label> -->
                                    <input type="email" required autocomplete="none" value="{{$user[0]->email}}" />
                                </div>

                                <div class="field-wrap">
                                    <!--   <label>
                                        <b> Phone Number<span class="req">*</span></b>
                                    </label> -->
                                    <input type="text" required autocomplete="none"
                                        value="{{$user[0]->job_position}}" />
                                </div>
                                <div class="field-wrap">
                                    <!--  <label>
                                        <b> Address<span class="req"></span></b>
                                    </label> -->
                                    <input type="text" autocomplete="none" value="{{$user[0]->computerType}}" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        <b> Enter New Password<span class="req">*</span></b>
                                    </label>
                                    <input type="password" required autocomplete="none" />
                                </div>

                                <button type="submit" id="signup-submit"
                                    class="button button-block" />เเก้ไขโปรไฟล์</button>

                            </form>

                        </div>

                        <!--  -->

                    </div><!-- tab-content -->

                </div> <!-- /form -->

            </div>
        </div>

    </div>


</main>
<!-- End of Main Content -->

<!-- Right Section -->


<script>
$('.form').find('input, textarea').on('keyup blur focus', function(e) {

    var $this = $(this),
        label = $this.prev('label');

    if (e.type === 'keyup') {
        if ($this.val() === '') {
            label.removeClass('active highlight');
        } else {
            label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
        if ($this.val() === '') {
            label.removeClass('active highlight');
        } else {
            label.removeClass('highlight');
        }
    } else if (e.type === 'focus') {

        if ($this.val() === '') {
            label.removeClass('highlight');
        } else if ($this.val() !== '') {
            label.addClass('highlight');
        }
    }

});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            console.log('Changed');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>
@endsection


<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap');


.create_profile_section *,
*:before,
*:after {
    box-sizing: border-box;
}

.create_profile_section {
    overflow-y: hidden;
    font-family: 'Montserrat', sans-serif !important;
}

.create_profile_section {
    width: 100%;
    position: relative;
    margin: 50px auto;
}

.create_profile_section a {
    text-decoration: none;
    color: rgba(215, 67, 77, 1.0);
    transition: 0.5s ease;
}

.create_profile_section a:hover {
    color: #179b77;
}

.create_profile_section .form {


    margin: 10px auto;
    border-radius: 5px;
    width: 100%;
}

.create_profile_section .tab-group {
    list-style: none;
    padding: 0;
    margin: 0 0 40px 0;
}

.create_profile_section .tab-group:after {
    content: "";
    display: table;
    clear: both;
}

.create_profile_section .tab-group li a {
    display: block;
    text-decoration: none;
    padding: 10px;
    background: white;
    color: rgba(215, 67, 77, 1.0);
    font-size: 15px;
    float: left;
    width: 50%;
    text-align: center;
    cursor: pointer;
    transition: 0.5s ease;
}

.create_profile_section .tab-group li a:hover {
    background: rgba(215, 67, 77, 1.0);
    color: #fff;
}

.create_profile_section .tab-group .active a {
    background: rgba(215, 67, 77, 1.0);
    color: #fff;
}

.create_profile_section h1 {
    text-align: center;
    color: black;
    text-transform: none;
    font-size: 23px !important;
    font-weight: 300;
    margin: 0 0 40px;
}

.create_profile_section input {
    height: 25px !important;
    margin: -10px auto;
}

.create_profile_section label {
    position: absolute;
    transform: translateY(6px);
    left: 13px;
    color: black;
    transition: all 0.25s ease;
    -webkit-backface-visibility: hidden;
    pointer-events: none;
    font-size: 11px;
    font-weight: 500 !important;
}

.create_profile_section label .req {
    margin: 2px;
    color: rgba(215, 67, 77, 1.0);
}

.create_profile_section label.active {
    transform: translateY(-15px);
    left: 2px;
    font-size: 10px;
}

.create_profile_section label.active .req {
    opacity: 0;
}

.create_profile_section label.highlight {
    color: black;
}

.create_profile_section input,
textarea {
    font-size: 11px;
    display: block;
    width: 100%;
    height: 100%;
    padding: 3px 10px;
    background: none;
    background-image: none;
    border: 1px solid #a0b3b0;
    color: black;
    border-radius: 0;
    transition: border-color 0.25s ease, box-shadow 0.25s ease;
}

.create_profile_section input:focus,
.create_profile_section textarea:focus {
    outline: 0;
    border-color: rgba(215, 67, 77, 1.0);
}

.create_profile_section textarea {
    border: 2px solid #a0b3b0;
    resize: vertical;
}

.create_profile_section .field-wrap {
    position: relative;
    margin-bottom: 40px;
    border-radius: 45px;
}

.create_profile_section .top-row:after {
    content: "";
    display: table;
    clear: both;
}

.create_profile_section .top-row>div {
    float: left;
    width: 48%;
    margin-right: 4%;
}

.create_profile_section .top-row>div:last-child {
    margin: 0;
}

.create_profile_section .button {
    border: 0;
    outline: none;
    border-radius: 0;
    padding: 15px 0;
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    background: rgba(215, 67, 77, 1.0);
    color: #fff;
    transition: all 0.5s ease;
    -webkit-appearance: none;
}

.create_profile_section .button:hover,
.button:focus {
    background: #179b77;
    cursor: pointer;
}

.create_profile_section .button-block {
    display: block;
    width: 100%;
}

.create_profile_section .forgot {
    margin-top: -20px;
    text-align: right;
}

.create_profile_section .forgot a {
    font-size: 10px !important;
}

.create_profile_section .forgot a:hover {
    color: rgba(215, 67, 77, 1.0) !important;
}


.avatar-upload {
    position: relative;
    max-width: 210px;
    margin: 64px auto;
}

.avatar-upload .avatar-edit {
    position: absolute;
    right: 12px;
    z-index: 1;
    top: 10px;
}

.avatar-upload .avatar-edit input {
    width: 34px;
    position: relative;
    left: -35px;
    top: 16px;
    cursor: default !important;
    z-index: 1;
    opacity: 0;
}

.avatar-upload .avatar-edit input+label {
    display: inline-block;
    width: 34px;
    height: 34px;
    margin-bottom: 0;
    border-radius: 100%;
    background: #FFFFFF;
    border: 1px solid transparent;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    font-weight: normal;
    transition: all .2s ease-in-out;
}

.avatar-upload .avatar-edit input+label:hover {
    background: #f1f1f1;
    border-color: #d6d6d6;
}

.avatar-upload .avatar-edit input+label:after {
    content: "\f040";
    font-family: 'FontAwesome';
    color: #757575;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    text-align: center;
    margin: auto;
}

.avatar-upload .avatar-preview {
    width: 100px;
    height: 100px;
    position: relative;
    border-radius: 100%;
    margin-top: -30px;
    margin-bottom: 30px;
    margin-left: auto;
    margin-right: auto;
    border: 6px solid #eee;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}

.avatar-upload .avatar-preview>div {
    width: 100%;
    height: 100%;
    border-radius: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.avatar-edit label {
    position: absolute;
    top: -6px;
    cursor: default;
    left: -33px;
}

.top-row input {
    margin-top: 0px !important;
}


.create_profile_section #signup {
    overflow-x: hidden;
}

.create_profile_section #signup h1 {
    margin: 50px auto !important;
    margin-bottom: 70px !important;
    font-weight: 500;
    font-size: 30px !important;
}


input[type=text] {
    padding-top: -4.5rem;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 197px;
    font-size: 16px;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    transition: width 0.4s ease-in-out;
    background-color: #f3f0f057;
}

input[type=tel] {
    padding-top: -4.5rem;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 197px;
    font-size: 16px;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    transition: width 0.4s ease-in-out;
    background-color: #f3f0f057;
}

input[type=email] {
    background-color: #f3f0f057;
    padding-top: -4.5rem;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 197px;
    font-size: 16px;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    transition: width 0.4s ease-in-out;
}

input[type=password] {

    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    background-color: #f3f0f057;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
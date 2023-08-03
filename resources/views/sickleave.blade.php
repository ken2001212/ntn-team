@extends('layouts.appmanage')

@section('content')



<!-- Main Content -->
<main>
    <div class="new-users">
        <h2>Costume protocol</h2>
        @if (session('message'))
        <p style="color:green; font-size: 24px;">{{ session('message') }}</p>
        @endif
        <div class="user-list">


            <div class=" container wrapper fadeInDown" style="
    display: flex;
">


                <!-- Tabs Titles -->
                <h2 class="active"> เเจ้งลางาน </h2>


                <form method="POST" action="{{ route('add-sickleave') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal_wrapper">
                        <div class="shadow"></div>
                        <div class="success_wrap">
                            <span class="modal_icon">
                                <ion-icon name="checkmark-sharp"></ion-icon>
                            </span>
                            <p>You have successfully completed the process.</p>
                        </div>
                    </div>


                    <input type="text" id="email" class="fadeIn second" name="email"
                        placeholder="กรุณาใส่ชื่อนามสกุล" />

                    <input type="date" class="form-control" name="time" placeholder="กรุณาใส่วันที่ลา"
                        aria-describedby="time" min="<?php echo date('Y-m-d');?>">

                    <select name="select" class="form-select form-select-sm" aria-label=".form-select-sm example" style="
                          background-color: #f6f6f6;
                          border: none;
                          color: #0d0d0d;
                          padding: 15px 32px;
                          text-align: center;
                          text-decoration: none;
                          display: inline-block;
                          font-size: 16px;
                          margin: 5px;
                          width: 85%;
                          border: 2px solid #f6f6f6;
                          -webkit-transition: all 0.5s ease-in-out;
                          -moz-transition: all 0.5s ease-in-out;
                          -ms-transition: all 0.5s ease-in-out;
                          -o-transition: all 0.5s ease-in-out;
                          transition: all 0.5s ease-in-out;
                          -webkit-border-radius: 5px 5px 5px 5px;
                          border-radius: 5px 5px 5px 5px;">
                        <option selected="">---กรุณาเลือกเหตุผลในการลา---</option>
                        <option value="ลาป่วย">ลาป่วย</option>
                        <option value="ลาคลอดบุตร">ลาคลอดบุตร</option>
                        <option value="ลาไปช่วยเหลือภริยาที่คลอดบุตร">ลาไปช่วยเหลือภริยาที่คลอดบุตร</option>
                        <option value="ลากิจส่วนตัว">ลากิจส่วนตัว</option>
                        <option value="ลาพักผ่อน">ลาพักผ่อน</option>
                        <option value="อุปสมบทหรือการลาไปประกอบพิธีฮัจย์">อุปสมบทหรือการลาไปประกอบพิธีฮัจย์
                        </option>
                        <option value="ลาไปศึกษา ฝึกอบรม ดูงาน หรือปฏิบัติการวิจัย">ลาไปศึกษา ฝึกอบรม ดูงาน
                            หรือปฏิบัติการวิจัย
                        </option>
                        <option value="ลาไปปฏิบัติงานในองค์การระหว่างประเทศ">
                            ลาไปปฏิบัติงานในองค์การระหว่างประเทศ</option>
                        <option value="ลาติดตามคู่สมรส">ลาติดตามคู่สมรส</option>
                        <option value="ลาไปฟื้นฟูสมรรถภาพด้านอาชีพ">ลาไปฟื้นฟูสมรรถภาพด้านอาชีพ</option>


                    </select>


                    <input type="text" class="fadeIn second" id="Leave" name="Leave" aria-describedby="Leave"
                        placeholder="กรุณากรอกรายละเอียดการลา">
                    <input type="submit" class="fadeIn fourth" value="เเจ้งลางาน">
                </form>
                <!-- Remind Passowrd -->
                <div style="width:100%" id="formFooter">
                    <a href="#" target="popup"
                        onclick="window.open('https://www.gainplus.asia/wp-content/uploads/2021/02/leave_policy_2021_PDFTH.pdf','name','width=600,height=400')">รายละเอียดการลา</a>
                </div>
                </form>

            </div>
            <!-- <form action="apiline.php" method="_GET">
            
                        <div class="mb-3">
                            <label for="fullname" class="form-label" >ชื่อนามสกุล :</label>
                            <input type="fullname" class="form-control" name="email" aria-describedby="fullname">
            
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">วันที่ลา :</label>
                            <input type="date"class="form-control" name="time" aria-describedby="time" min="<?php echo date('Y-m-d');?>">
            
                        </div>
                        <select name="select" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>---กรุณาเลือกเหตุผลในการลา---</option>
                            <option value="ลาป่วย">ลาป่วย</option>
                            <option value="ลาคลอดบุตร">ลาคลอดบุตร</option>
                            <option value="ลาไปช่วยเหลือภริยาที่คลอดบุตร">ลาไปช่วยเหลือภริยาที่คลอดบุตร</option>
                            <option value="ลากิจส่วนตัว">ลากิจส่วนตัว</option>
                            <option value="ลาพักผ่อน">ลาพักผ่อน</option>
                            <option value="อุปสมบทหรือการลาไปประกอบพิธีฮัจย์">อุปสมบทหรือการลาไปประกอบพิธีฮัจย์</option>
                            <option value="ลาไปศึกษา ฝึกอบรม ดูงาน หรือปฏิบัติการวิจัย">ลาไปศึกษา ฝึกอบรม ดูงาน หรือปฏิบัติการวิจัย
                            </option>
                            <option value="ลาไปปฏิบัติงานในองค์การระหว่างประเทศ">ลาไปปฏิบัติงานในองค์การระหว่างประเทศ</option>
                            <option value="ลาติดตามคู่สมรส">ลาติดตามคู่สมรส</option>
                            <option value="ลาไปฟื้นฟูสมรรถภาพด้านอาชีพ">ลาไปฟื้นฟูสมรรถภาพด้านอาชีพ</option>
            
            
                        </select>
            
                        <div class="mb-3">
                            <label for="Leave" class="form-label">สาเหตุการลา :</label>
                            <input type="Leave" class="form-control" id="Leave" name="Leave" aria-describedby="Leave">
            
                        </div>
            
            
                        <div class="mb-3">
            
            
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form> -->
        </div>
    </div>

</main>
<!-- End of Main Content -->


<!-- Right Section -->



@endsection

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins');

/* BASIC */




a {
    color: #92badd;
    display: inline-block;
    text-decoration: none;
    font-weight: 400;
}




/* STRUCTURE */

.wrapper {
    text-align: center;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
}

#formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 90%;
    max-width: 450px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    text-align: center;
}

#formFooter {
    background-color: #f6f6f6;
    border-top: 1px solid #dce8f1;
    padding: 25px;
    text-align: center;
    -webkit-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
}





/* FORM TYPOGRAPHY*/

input[type=button],
input[type=submit],
input[type=reset] {
    background-color: #56baed;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
    box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

input[type=button]:hover,
input[type=submit]:hover,
input[type=reset]:hover {
    background-color: #39ace7;
}

input[type=button]:active,
input[type=submit]:active,
input[type=reset]:active {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
}

input[type=text] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}

input[type=select] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}

input[type=date] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
    background-color: #fff;
    border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder {
    color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }

    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }

    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@-moz-keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

.fadeIn {
    opacity: 0;
    -webkit-animation: fadeIn ease-in 1;
    -moz-animation: fadeIn ease-in 1;
    animation: fadeIn ease-in 1;

    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;

    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    animation-duration: 1s;
}

.fadeIn.first {
    -webkit-animation-delay: 0.4s;
    -moz-animation-delay: 0.4s;
    animation-delay: 0.4s;
}

.fadeIn.second {
    -webkit-animation-delay: 0.6s;
    -moz-animation-delay: 0.6s;
    animation-delay: 0.6s;
}

.fadeIn.third {
    -webkit-animation-delay: 0.8s;
    -moz-animation-delay: 0.8s;
    animation-delay: 0.8s;
}

.fadeIn.fourth {
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
    display: block;
    left: 0;
    bottom: -10px;
    width: 0;
    height: 2px;
    background-color: #56baed;
    content: "";
    transition: width 0.2s;
}

.underlineHover:hover {
    color: #0d0d0d;
}

.underlineHover:hover:after {
    width: 100%;
}

/* ระบบ modal */


.modal_wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    visibility: hidden;
}

.modal_wrapper .shadow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    opacity: 0;
    transition: 0.2s ease;
}

.modal_wrapper .success_wrap {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -800px);
    background: var(--white);
    padding: 50px;
    display: flex;
    align-items: center;
    border-radius: 5px;
    transition: 0.5s ease;
}

.modal_wrapper .success_wrap .modal_icon {
    margin-right: 20px;
    width: 50px;
    height: 50px;
    background: var(--primary);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    font-weight: 700;
}

.modal_wrapper.active {
    visibility: visible;
}

.modal_wrapper.active .shadow {
    opacity: 1;
}

.modal_wrapper.active .success_wrap {
    transform: translate(-50%, -50%);
}
</style>
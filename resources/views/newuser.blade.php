@extends('layouts.appmanage')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">





<!-- Main Content -->
<main>



    <div class="new-users">
        <h2 style="font-weight: 800;font-size: 1.8rem;">เพิ่มข้อมูลพนักงาน</h2>

        @if (session('message'))
        <p style="color:green; font-size: 24px;">{{ session('message') }}</p>
        @endif



        <div class=" bg-blue-50 min-h-screen p-6 text-lg" style=" background: transparent;">
            <form x-data="serviceRequestForm()" class="max-w-screen-lg  mx-auto p-10 shadow"
                style="border-radius: 25px;background-color: var(--color-white); " method="POST"
                action="{{ route('add-newuser') }}" enctype="multipart/form-data">
                @csrf
                <h1 class="text-3xl font-bold text-center">เพิ่มพนักงานในระบบ</h1>
                <p class="mt-2 text-gray-600 text-center">เพิ่มพนักงานใหม่</p>

                <h2 class="mt-6    text-2xl font-semibold border-b-2 border-blue-300 pb-2 px-4">
                    Step <span x-text="currentStep+1"></span>
                </h2>

                <div x-show="currentStep === 0" class="flex flex-col mt-4 p-4 md:flex-row">
                    <div class="flex-1">
                        <h3 class="text-3xl font-semibold">ข้อมูลส่วนตัว</h3>
                        <p class="mt-4 text-gray-600">ข้อมูลส่วนตัวพนักงาน</p>
                    </div>

                    <div class="flex-1">
                        <label class="inline-block w-full cr">
                            <p class="  ">ชื่อ-นามสกุล (ภาษาไทย)</p>
                            <input x-model="values.firstName_th" name="firstName_th"
                                class="w-full cr px-3 py-2 border focus:border-blue-800 focus:outline-none" type="text"
                                required />
                        </label>

                        <label class="inline-block w-full cr mt-2">
                            <p class="  ">NAME -SURNAME (ENGLISH)</p>
                            <input x-model="values.firstName_eng" name="firstName_eng"
                                class="w-full cr px-3 py-2 border focus:border-blue-400 focus:outline-none" type="text"
                                required />
                        </label>

                        <label class="inline-block w-full cr mt-2">
                            <p class="  ">Email</p>
                            <input x-model="values.email" name="email"
                                class="w-full cr px-3 py-2 border focus:border-blue-400 focus:outline-none" type="email"
                                required />
                        </label>
                        <label class="inline-block w-full cr mt-2">
                            <p class="  ">PASSWORD</p>
                            <input x-model="values.password" name="password"
                                class="w-full cr px-3 py-2 border focus:border-blue-400 focus:outline-none" type="text"
                                required />
                        </label>
                        <label class="inline-block w-full cr mt-6">
                            <p class="  ">เลขที่บัตรประชาชน 13 หลัก</p>
                            <input x-model="values.idCardNumber" name="idCardNumber"
                                class="w-full cr px-3 py-2 border focus:border-blue-400 focus:outline-none" type="text"
                                required />
                        </label>


                        <label class="inline-block w-full cr mt-4">
                            <p class="  ">ตำแหน่งงาน</p>
                            <input x-model="values.job_position" name="job_position"
                                class="w-full cr px-3 py-2 border focus:border-blue-400 focus:outline-none" type="text"
                                required />
                        </label>

                        <label class="inline-block w-full cr">
                            <p class="  ">สังกัดบริษัท</p>
                            <select x-model="values.computerType" name="computerType"
                                class="w-full cr px-3 py-2 border focus:border-blue-400 focus:outline-none hk">
                                <option value="">-- กรุณาเลือกสังกัดบริษัท --</option>
                                <option>บริษัท ตะวันแม็คไวสซ์ จำกัด</option>
                                <option>บริษัท เอ็นทีเอ็น เทรดดิ้ง-ประเทศไทย จำกัด</option>
                                <option>บริษัท เฮอร์เบิร์ท (ประเทศไทย) จำกัด</option>
                            </select>
                        </label>

                        <div class="w-full cr flex mt-10 -mb-4">
                            <button @click.prevent="currentStep += 1"
                                class="ml-auto px-6 py-2 bg-blue-500 font-semibold text-white">Next
                                step</button>
                        </div>
                    </div>
                </div>

                <div x-show="currentStep === 1" x-cloak class="flex flex-col mt-4 p-4 md:flex-row transition-all">
                    <div class="flex-1">
                        <h3 class="text-3xl font-semibold">link ติดต่อ</h3>
                        <p class="mt-4 text-gray-600">ลิ้งติดต่อพนักงาน
                        </p>
                    </div>

                    <div class="flex-1">

                        <label class="inline-block w-full cr mt-4">
                            <p class="  ">เบอร์โทรศัพท์ (061-xxx-xxxx)*</p>
                            <input x-model="values.computerType1" name="computerType1"
                                class="w-full cr px-3 py-2 border focus:border-blue-400 focus:outline-none" type="text"
                                required />
                        </label>


                        <label class="inline-block w-full cr mt-4">
                            <p class="  ">อีเมลบริษัท เช่น(xxx@tawanmcweis.com)</p>
                            <input x-model="values.ownedFor" name="ownedFor"
                                class="w-full cr px-3 py-2 border focus:border-blue-400 focus:outline-none" type="text"
                                required />
                        </label>

                        <label class="inline-block w-full cr mt-4">
                            <p class="  ">ID Line หรือ ชื่อ Line (แสดงผลบนนามบัตร
                                ควรตั้งให้เป็นทางการหรือกึ่งทางการ)</p>
                            <input x-model="values.problemMessage" name="problemMessage"
                                class="w-full cr px-3 py-2 border focus:border-blue-400 focus:outline-none" type="text"
                                required />
                        </label>


                        <label class="inline-block w-full cr mt-4">
                            <p class="  ">ลิงก์ Line (กรุณาแนบเป็นลิงค์)📌 เข้าไปที่หน้าหลัก ➤
                                เพิ่มเพื่อน ➤ คิวอาร์โค้ด ➤ คิวอาร์โค้ดของฉัน ➤ คัดลอกลิงค์</p>
                            <input x-model="values.problemMessage1" name="problemMessage1"
                                class="w-full cr px-3 py-2 border focus:border-blue-400 focus:outline-none" type="text"
                                required />
                        </label>
                        <label class="inline-block w-full cr mt-4 ">
                            <p class="  ">อัปโหลดรูปภาพ</p>
                            <input x-model="values.photo" name="photo"
                                class="w-full cr px-3 py-2 border focus:border-blue-400 focus:outline-none hk"
                                type="file" accept=".png, .jpg, .jpeg" required />
                        </label>



                        <div class="w-full cr flex mt-10 -mb-4">
                            <button @click.prevent="currentStep -= 1"
                                class="ml-auto px-6 py-2 font-semibold text-gray-600">Previous</button>

                            <button @click.prevent="currentStep += 1"
                                class="px-6 py-2 bg-blue-500 font-semibold text-white">Next
                                step</button>
                        </div>
                    </div>
                </div>

                <div x-show="currentStep === 2" x-cloak class="flex flex-col mt-4 p-4 md:flex-row transition-all">
                    <div class="flex-1">
                        <h3 class="text-3xl font-semibold">Review</h3>
                        <p class="mt-4 text-gray-600">Make sure your info is correct.</p>
                    </div>

                    <div class="flex-1">
                        <h4 class="font-semibold text-xl">ข้อมูลพนักงาน <button @click.prevent="currentStep = 0"
                                class="text-base font-semibold text-blue-600">Edit</button></h4>
                        <p class="mt-2 "><span x-text="values.firstName"></span> <span x-text="values.lastName"></span>
                        </p>
                        <p class="  ">เลขบัตรประชาชน :
                        <p x-text="values.email" class="  "></p>
                        <p class="  ">ตำเเหน่งงาน :
                        <p x-text="values.phone" class="  "></p>
                        <p class="mt-2   ">
                            (<span x-text="values.computerType"></span>)</p>

                        <h4 class="mt-3 font-semibold text-xl">หน้าเเสดงโปรไฟล์บัตร <button
                                @click.prevent="currentStep = 1"
                                class="text-base font-semibold text-blue-600">Edit</button></h4>
                        <p class="  "><span x-text="values.operatingSystem"></span></p>
                        <p class="  ">gmail : <span x-text="values.ownedFor"></span></p>
                        <p class="  ">ชื่อline :
                        <p x-text="values.problemMessage"></p>
                        <p class="  ">ลิ้ง line :
                        <p x-text="values.problemMessage1"></p>
                        <p class="  ">รูปภาพ :
                        <p x-text="values.photo"></p>
                        </p>

                        <div class="w-full flex mt-10 -mb-4">
                            <button @click.prevent="currentStep -= 1"
                                class="ml-auto px-6 py-2 font-semibold text-gray-600">Previous</button>

                            <button type="submit" class="px-6 py-2 bg-blue-500 font-semibold text-white">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    </div>
</main>
<!-- End of Main Content -->

<!-- Right Section -->




@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>
<script>
function serviceRequestForm() {
    return {
        currentStep: 0,

        values: {
            firstName: '',
            lastName: '',
            email: '',
            phone: '',
            computerType: '',
            operatingSystem: '',
            ownedFor: '',
            problemMessage: ''
        }
    }
}
</script>

<style>
.cr {
    border-radius: 45px;
}

.hk {
    background-color: #f3f0f057;
}

input[type=text] {
    background-color: #f3f0f057;

}

input[type=email] {
    background-color: #f3f0f057;

}

input[type=select] {
    background-color: #f3f0f057;

}
</style>
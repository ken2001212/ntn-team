@extends('layouts.appmanage')

@section('content')
    
     

      <!-- Main Content -->
      <main>
        <h1>Analytics</h1>
        <!-- Analyses -->
        <div class="analyse">
          <div class="sales">
            <div class="status">
              <div class="info">
                <h3>ทำงานที่</h3>
                <h1>TawanMcweis</h1>
              </div>
              <div class="progresss">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="percentage">
                  <p><span class="material-icons-sharp">
                    apartment
                    </span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="visits">
            <div class="status">
              <div class="info">
                <h3>ตำเเหน่งที่รับผิดชอบ</h3>
                <h1>Programmer</h1>
              </div>
              <div class="progresss">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="percentage">
                  <p>  <span class="material-icons-sharp">
                    how_to_reg
                    </span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="searches">
            <div class="status">
              <div class="info">
                <h3>เริ่มทำงาน วัน/เดือน/ปี</h3>
                <h1>17/07/2566</h1>
              </div>
              <div class="progresss">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>

                <div class="percentage">
                  <p>
                  
                    <span class="material-icons-sharp">
                      perm_contact_calendar
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Analyses -->

        <!-- New Users Section -->
        <div class="new-users">
          <h2>Costume protocol</h2>
          <div class="user-list">
            <div class="user">
              <img src="{{URL::asset('/manage/images/profile-9.png')}}" />
              <h2>การเเต่งตัววันจันทร์</h2>
              <p>เสื้อสี</p>
            </div>
            <div class="user">
              <img src="{{URL::asset('/manage/images/profile-999.png')}}" />
              <h2>การเเต่งตัววันอังคาร</h2>
              <p>เสื้อสี</p>
            </div>
            <div class="user">
              <img src="{{URL::asset('/manage/images/profile-9.png')}}" />
              <h2>การเเต่งตัววันพุทธ์</h2>
              <p>เสื้อสี</p>
            </div>
            <div class="user">
              <img src="{{URL::asset('/manage/images/profile-999.png')}}" />
              <h2>การเเต่งตัววันวันพฤหัสบดี</h2>
              <p>เสื้อสี</p>
            </div>
            <div class="user">
              <img src="{{URL::asset('/manage/images/profile-9.png')}}" />
              <h2>การเเต่งตัววันวันศุก</h2>
              <p>เสื้อสี</p>
            </div>
          </div>
        </div>
        <!-- End of New Users Section -->

        <!-- Recent Orders Table -->
        <div class="recent-orders">
          <h2>Recent Orders</h2>
          <table>
            <thead>
              <tr>
                <th>Course Name</th>
                <th>Course Number</th>
                <th>Payment</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
          <a href="#">Show All</a>
        </div>
        <!-- End of Recent Orders -->
      </main>
      <!-- End of Main Content -->

      <!-- Right Section -->
   


@endsection


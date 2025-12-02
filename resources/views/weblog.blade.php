@extends('base')
@section('title','وبلاگ')
@section('links')
@endsection
@section('content')
  <div class="container-fluid d-xl-flex flex-row d-none justify-content-between pt-3 py-3" style="padding-right: 5%; position: relative; top: -30px;">

      <ul class="d-flex flex-row s2">
           <li class="text-dark" style="font-weight: bold; color: black; margin-left:50px ;">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
            </svg>
            <span>محصولات ما</span>
           </li>
           <li class="pr-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
            </svg>
            <span>صفحه ی اصلی</span>
           </li>
           <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-substack" viewBox="0 0 16 16">
              <path d="M15 3.604H1v1.891h14v-1.89ZM1 7.208V16l7-3.926L15 16V7.208zM15 0H1v1.89h14z"/>
            </svg>
            <span>وبلاگ ها</span>

           </li>
           <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop " viewBox="0 0 16 16">
              <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
            </svg>
            <span>فروشگاه</span>
           </li>
           <li>
               <span>ارتباط با پشتیبانی</span>
           </li>
      </ul>
      <ul class="d-flex flex-row s3 ">
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp text-success" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
          </svg>
          <span>021000000</span>
        </li>
        <li>
           <a href="#" class="a_bt1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
              <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
            </svg>
             <span>پیگیری سفارشات</span>
           

           </a>
        </li>
      </ul>
  
    </div>

    <hr style="position: relative; top: -50px;" class="d-none d-xl-block">

    <div class="container h_blog1 d-xl-flex d-none" style="border-radius: 10px;">
        
          <span >جدید ترین وبلاگ</span>
          <div>
             <h2>رتبه‌بندی بازی‌های سری استریت فایتر از بدترین تا بهترین</h2>
          </div>

    </div>
    <center><img src="static/images/blogs/bl1.jpg" alt="" class="img-thumbnail d-xl-none d-block" style="width: 100vb; border-radius: 50px 50px 0px 0; margin-top: 5%;"></center>
    <div class="container">

         <div class="row b_h_items" style="border-radius: 10px;">
             <div class="col col-xl-6 h_blog2 d-none d-xl-grid " style="border-radius: 20px;">
                <h2>رتبه‌بندی بازی‌های سری استریت فایتر از بدترین تا بهترین</h2>

             </div>
             <div class="col col-xl-6   h_blog2 d-none d-xl-grid " style="border-radius: 20px;">
                <h2>رتبه‌بندی بازی‌های سری استریت فایتر از بدترین تا بهترین</h2>

             </div>
             <div class="col col-xl-6  h_blog2 " style="border-radius: 20px;">
                <h2>رتبه‌بندی بازی‌های سری استریت فایتر از بدترین تا بهترین</h2>

             </div>
             <div class="col col-xl-6  h_blog2" style="border-radius: 20px;">
                <h2>رتبه‌بندی بازی‌های سری استریت فایتر از بدترین تا بهترین</h2>

             </div>
         </div>
         

    </div>
    <div class="container d-flex justify-content-between inp_blogs">
        <ul>
          <li><span>دسته بندی وبلاگ ها
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
              </svg>
          </span>
          <li><div style="border: 1px #989899 solid; margin-top: 10px;" class="d-none">
            <ul>
               <li><span>دیجیتالی(10)</span></li>
               <li><span>دیجیتالی(10)</span></li>
               <li><span>دیجیتالی(10)</span></li>
               <li><span>دیجیتالی(10)</span></li>
              </div>
            </ul>
          </li>
         </span>
        </ul>
        <div>
          <div class="input-group mb-3 ">
            <input type="text" class="form-control" placeholder="جستجوکنید........" aria-label="Recipient's username" aria-describedby="basic-addon2" style=" background-color: #F5F5F5;">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">جستجوکنید</button>
            </div>
          </div>
        </div>

    </div>
    <div class="container" style="margin-top: 5%;">
      @foreach($blogs as $blog)
        <div class="row item_blogs_a">
           <div class="col" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
               <img src="static/images/blogs/bl4.jpg" alt="" class="img-thumbnail" style=" border-radius:20px 20px 0px 0px; border: 0px;">
               <h2 style="font-size: 15px; width: 300px; line-height: 25px;">{{ $blog->titile_m }}</h2>

               <div class="d-flex flex-row justify-content-between" style="margin-top: 40%; padding: 2%; background-color: #dfe6e9; border-radius: 10px;">
                 <div>
                    <svg xmlns="http://www.w3.org/2000/svg" style="color: crimson;" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                    </svg>
                    <span style="color: crimson;">3</span>
                 </div>
                 <div class="d-flex flex-column" style="text-align: center;">
                     <span style="font-weight: bold;">{{$blog->created_at}}
                      <svg xmlns="http://www.w3.org/2000/svg" style="color: crimson;" width="16" height="16" fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                      </svg>
                     </span>
                     <span style="font-weight: bold;">37بازدید
                      <svg xmlns="http://www.w3.org/2000/svg" style="color: crimson;" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                      </svg>
                     </span>
                 </div>


               </div>
           
        
   

 
 

        </div>
       @endforeach 

    </div>
@endsection